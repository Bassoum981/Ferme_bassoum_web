# Déployer Ferme Bassoum sur Render

Ce guide explique le déploiement complet du site vitrine **Ferme Bassoum** sur Render avec le plan gratuit.

La configuration actuelle utilise :

- un seul service web Render ;
- Docker avec PHP 8.4 et Apache ;
- Laravel et Vite ;
- aucun serveur SMTP ;
- aucune base de données ;
- aucun formulaire envoyé côté serveur ;
- des contacts directs par téléphone, e-mail, WhatsApp et Facebook.

> Le plan gratuit Render utilise un stockage local éphémère. Cette application ne stocke donc aucune donnée métier, aucune session permanente et aucun fichier envoyé par les visiteurs.

## 1. Préparer le projet

À la racine du projet, les fichiers de déploiement suivants doivent être présents :

```text
Dockerfile
docker/start.sh
render.yaml
.dockerignore
```

Le `Dockerfile` :

- installe les dépendances Composer ;
- compile les assets Vite ;
- installe PHP 8.4, Apache et les extensions nécessaires ;
- configure Apache pour servir le dossier `public/`.

Le script `docker/start.sh` :

- récupère le port fourni par Render ;
- adapte la configuration Apache ;
- optimise Laravel ;
- démarre Apache.

Le fichier `render.yaml` configure uniquement un service web gratuit. Aucune base PostgreSQL ou autre base Render n'est créée.

## 2. Vérifier le projet en local

Depuis la racine du projet :

```bash
cd /Users/ibassoum/Dev/php_laravel/ferme-bassoum
```

Installer les dépendances si nécessaire :

```bash
composer install
npm ci
```

Construire les assets :

```bash
npm run build
```

Vérifier Laravel :

```bash
php artisan optimize:clear
php artisan view:cache
php artisan route:cache
```

Tester les pages principales :

```bash
php artisan serve
```

Puis ouvrir :

```text
http://127.0.0.1:8000
http://127.0.0.1:8000/notre-ferme
http://127.0.0.1:8000/nos-produits
http://127.0.0.1:8000/nos-animaux
http://127.0.0.1:8000/contact
```

## 3. Tester l'image Docker localement

Docker Desktop doit être démarré.

Construire l'image :

```bash
docker build -t ferme-bassoum:render .
```

Générer une clé Laravel de test :

```bash
php artisan key:generate --show
```

Démarrer le conteneur en remplaçant la valeur de `APP_KEY` par la clé générée :

```bash
docker run --rm -p 10000:10000 \
  -e APP_KEY="base64:remplacer-par-une-cle-valide" \
  -e APP_ENV=production \
  -e APP_DEBUG=false \
  -e APP_URL=http://localhost:10000 \
  -e SESSION_DRIVER=file \
  -e CACHE_STORE=file \
  -e QUEUE_CONNECTION=sync \
  ferme-bassoum:render \
  /usr/local/bin/render-start
```

Ouvrir ensuite :

```text
http://localhost:10000
```

Arrêter le conteneur avec `Ctrl+C`.

## 4. Publier le projet sur GitHub

Vérifier l'état du dépôt :

```bash
git status
```

Vérifier qu'aucun secret n'est suivi :

```bash
git ls-files .env
```

Cette commande ne doit rien afficher. Le fichier `.env` ne doit jamais être envoyé sur GitHub.

Ajouter et valider les fichiers :

```bash
git add .
git commit -m "Prepare Render deployment"
```

Envoyer la branche sur GitHub :

```bash
git push origin main
```

Si la branche principale porte un autre nom, utiliser le nom réel de la branche.

## 5. Créer le service Render

1. Se connecter sur [Render](https://render.com/).
2. Cliquer sur **New**.
3. Choisir **Blueprint**.
4. Connecter le compte GitHub si nécessaire.
5. Sélectionner le dépôt contenant Ferme Bassoum.
6. Vérifier que Render détecte le fichier `render.yaml`.
7. Cliquer sur **Apply** ou **Create Blueprint**.

Render doit créer un seul service :

```text
ferme-bassoum
```

Le service doit utiliser :

```text
Runtime: Docker
Plan: Free
```

Il ne doit y avoir aucune base de données dans la liste des ressources créées.

## 6. Configurer les variables Render

Dans le service Render, ouvrir **Environment** puis vérifier ou renseigner :

```env
APP_NAME=Ferme Bassoum
APP_ENV=production
APP_DEBUG=false
APP_KEY=clé générée par Render
APP_URL=https://ferme-bassoum.onrender.com
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

Remplacer `APP_URL` par l'URL réellement fournie par Render.

Render génère normalement `APP_KEY` grâce à `generateValue: true` dans `render.yaml`. Si elle est absente, générer une clé localement avec :

```bash
php artisan key:generate --show
```

Puis ajouter la valeur complète dans Render, par exemple :

```text
base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=
```

Ne pas ajouter ces variables, car elles ne sont plus utilisées :

```text
DB_CONNECTION
DB_URL
MAIL_MAILER
MAIL_SCHEME
MAIL_HOST
MAIL_PORT
MAIL_USERNAME
MAIL_PASSWORD
MAIL_FROM_ADDRESS
MAIL_FROM_NAME
CONTACT_EMAIL
```

## 7. Lancer le déploiement

Dans Render :

1. Ouvrir le service `ferme-bassoum`.
2. Cliquer sur **Manual Deploy**.
3. Choisir **Deploy latest commit**.
4. Observer les logs de build.

Le déploiement doit suivre ces étapes :

1. téléchargement de `node:22-alpine` ;
2. installation de Node et des dépendances npm ;
3. compilation de Vite ;
4. installation de Composer ;
5. construction de l'image PHP/Apache ;
6. démarrage de Laravel ;
7. exécution de `php artisan optimize` ;
8. démarrage d'Apache sur le port Render.

Quand le service est prêt, Render affiche son URL publique.

## 8. Vérifier le site en production

Tester les URLs suivantes avec l'URL Render :

```text
https://ferme-bassoum.onrender.com/
https://ferme-bassoum.onrender.com/notre-ferme
https://ferme-bassoum.onrender.com/nos-produits
https://ferme-bassoum.onrender.com/nos-animaux
https://ferme-bassoum.onrender.com/contact
https://ferme-bassoum.onrender.com/up
```

Vérifier également :

- le chargement du logo et des images ;
- les styles CSS ;
- la navigation desktop ;
- le menu mobile ;
- les boutons WhatsApp ;
- les liens téléphone ;
- le lien e-mail ;
- le lien Facebook ;
- l'absence d'erreurs dans les logs Render.

## 9. Fonctionnement du contact

Le formulaire serveur a été supprimé volontairement pour éviter toute dépendance au SMTP ou à une base de données.

La page Contact fournit maintenant :

- le numéro `+223 94 18 41 25` ;
- le numéro `+223 50 15 80 93` ;
- l'adresse `ibrahimbassoum981@gmail.com` ;
- un bouton WhatsApp ;
- un lien vers Facebook.

Les messages WhatsApp et les e-mails sont traités directement par les services externes. Render n'a pas besoin d'envoyer ou de stocker ces messages.

## 10. Limites du plan gratuit Render

Le plan gratuit peut mettre le service en veille après une période d'inactivité. Le premier chargement après cette veille peut donc être plus lent.

Le stockage local du conteneur n'est pas permanent. Il ne faut pas y stocker :

- des images envoyées par les visiteurs ;
- des fichiers utilisateur ;
- des commandes ;
- des messages ;
- des données métier ;
- une base SQLite de production.

Pour ajouter plus tard une administration, des commandes ou des données persistantes, il faudra utiliser une base de données et probablement un stockage externe. Cela nécessitera une nouvelle architecture.

## 11. Dépannage

### Le build échoue pendant `npm run build`

Vérifier que les dépendances sont présentes :

```bash
npm ci
npm run build
```

Le projet n'utilise plus de téléchargement distant de police pendant le build afin de rendre la compilation Render plus fiable.

### Le service démarre mais répond en erreur 500

Vérifier dans Render :

- `APP_KEY` est présente et valide ;
- `APP_ENV=production` ;
- `APP_DEBUG=false` ;
- `APP_URL` utilise bien `https://`.

Puis relancer un déploiement après avoir enregistré les variables.

### Les styles ou les images ne s'affichent pas

Vérifier les logs de build et la présence de l'étape :

```text
npm run build
```

Vérifier également que les images sont bien suivies par Git :

```bash
git ls-files public/images
```

### Render ne détecte pas le Blueprint

Vérifier que `render.yaml` se trouve à la racine du dépôt et que le dernier commit a bien été poussé :

```bash
git status
git push origin main
```

### Le site est lent au premier chargement

C'est généralement lié à la mise en veille du plan gratuit. Attendre quelques secondes puis actualiser la page.

## 12. Mise à jour du site

Après une modification :

```bash
git add .
git commit -m "Update Ferme Bassoum website"
git push origin main
```

Si l'auto-déploiement est activé, Render déploiera automatiquement le nouveau commit. Sinon :

1. ouvrir le service Render ;
2. cliquer sur **Manual Deploy** ;
3. choisir **Deploy latest commit**.

## Résumé

La procédure minimale est :

```bash
git add .
git commit -m "Deploy Ferme Bassoum on Render"
git push origin main
```

Puis dans Render :

```text
New → Blueprint → sélectionner le dépôt → Apply → Deploy
```

Le projet est prévu pour fonctionner comme un site vitrine statique dynamique côté Laravel, sans base de données, sans SMTP et sans stockage persistant.
