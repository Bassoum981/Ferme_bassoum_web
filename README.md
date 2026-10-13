# Ferme Bassoum

Site vitrine de la **Ferme Bassoum**, une exploitation située à Bamako, au Mali, spécialisée dans l'élevage avicole, l'incubation et la production de produits fermiers.

Le site présente l'histoire de la ferme, ses produits, ses animaux et permet aux visiteurs de contacter directement l'équipe par téléphone, e-mail, WhatsApp ou Facebook.

## Fonctionnalités

- Page d'accueil inspirée de la maquette fournie :
  - hero avec image de la ferme ;
  - logo et identité visuelle ;
  - présentation des engagements ;
  - aperçu des produits et des animaux.
- Page **Notre ferme** :
  - histoire et vision ;
  - excellence avicole ;
  - incubation et élevage ;
  - suivi sanitaire et nutrition ;
  - traçabilité et rigueur de gestion.
- Page **Nos produits** :
  - œufs de caille ;
  - viande de caille ;
  - sujets d'élevage : cailles, pintades et poulets.
- Page **Nos animaux** :
  - cailles ;
  - moutons ;
  - bovins ;
  - présentation du savoir-faire avicole.
- Page **Contact** :
  - bouton WhatsApp avec message prérempli ;
  - téléphone, e-mail, Facebook et coordonnées de la ferme à Bamako.
- Navigation responsive avec menu mobile dépliant.
- Design personnalisé avec Tailwind CSS 4 et CSS complémentaire.

## Stack technique

| Technologie | Version / usage |
| --- | --- |
| PHP | `^8.3` |
| Laravel | `^13.17` |
| Laravel Vite Plugin | `^3.1` |
| Tailwind CSS | `^4.0` |
| Vite | `^8.0` |
| Données persistantes | Aucune |
| Contact | WhatsApp, téléphone, e-mail et Facebook |

## Prérequis

Installer les outils suivants :

- PHP 8.3 ou supérieur ;
- Composer ;
- Node.js et npm ;
- un compte Render pour le déploiement gratuit.

Vérifier les versions installées :

```bash
php -v
composer --version
node -v
npm -v
```

## Installation

Depuis le dossier du projet :

```bash
cd /Users/ibassoum/Dev/php_laravel/ferme-bassoum
```

Installer les dépendances PHP :

```bash
composer install
```

Créer le fichier d'environnement :

```bash
cp .env.example .env
```

Générer la clé Laravel :

```bash
php artisan key:generate
```

Installer les dépendances JavaScript :

```bash
npm install
```

Créer la base SQLite et exécuter les migrations :

```bash
touch database/database.sqlite
php artisan migrate
```

Compiler les assets :

```bash
npm run build
```

## Configuration `.env`

Configuration minimale pour un usage local :

```env
APP_NAME="Ferme Bassoum"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite

MAIL_MAILER=log
```

Avec `MAIL_MAILER=log`, les e-mails ne sont pas envoyés. Ils sont écrits dans :

```text
storage/logs/laravel.log
```

Après toute modification importante du fichier `.env`, nettoyer le cache :

```bash
php artisan optimize:clear
```

## Contact

Le site n'envoie aucun e-mail côté serveur. Les visiteurs peuvent appeler la ferme, écrire directement à l'adresse e-mail affichée, ouvrir WhatsApp ou consulter la page Facebook. Cette approche ne nécessite ni port SMTP, ni service de messagerie, ni stockage de formulaire.

Après la configuration :

```bash
php artisan optimize:clear
php artisan config:cache
```

## Lancer l'application en local

### Méthode simple avec les assets compilés

Terminal 1 :

```bash
php artisan serve --host=127.0.0.1 --port=8000
```

Ouvrir :

```text
http://127.0.0.1:8000
```

### Développement avec Vite

Terminal 1 :

```bash
php artisan serve
```

Terminal 2 :

```bash
npm run dev
```

Vite recharge automatiquement les fichiers CSS, JavaScript et Blade pendant le développement.

### Commande Laravel combinée

Le script Laravel prévu par le projet peut aussi lancer les processus de développement :

```bash
composer run dev
```

## Accès depuis un téléphone avec Ngrok

Le projet supporte deux modes qui ne se gênent pas :

- **développement local** : Vite sert les assets et fournit le rechargement à chaud ;
- **tunnel Ngrok avec un seul tunnel** : Laravel sert les assets compilés depuis `public/build`.

La détection du schéma HTTPS est dynamique : l'application conserve `APP_URL=http://localhost:8000` en local, mais force les URLs `asset()` et `@vite` en HTTPS lorsqu'une requête arrive via un tunnel HTTPS comme Ngrok. Cela évite les erreurs de contenu mixte sans modifier la configuration locale.

### Mode local avec Vite

Utiliser ce mode pour développer sur l'ordinateur :

```bash
php artisan serve
npm run dev
```

Ouvrir ensuite :

```text
http://127.0.0.1:8000
```

Le serveur Vite crée automatiquement `public/hot`. Laravel utilise alors l'URL Vite pour charger le CSS et le JavaScript.

### Mode Ngrok avec un seul tunnel

Utiliser ce mode pour accéder au site depuis un téléphone sans exposer Vite :

```bash
rm -f public/hot
php artisan optimize:clear
npm run build
php artisan serve --host=0.0.0.0 --port=8000
```

Dans un deuxième terminal :

```bash
ngrok http 8000
```

Ouvrir l'URL HTTPS Ngrok sur le téléphone. Comme `public/hot` n'existe pas, `@vite` utilise `public/build/manifest.json`, et le CSS, le JavaScript et les images passent tous par le même tunnel Laravel.

Le passage d'un mode à l'autre ne casse pas le rendu :

| Besoin | Commande principale | Source des assets |
| --- | --- | --- |
| Développement local | `npm run dev` | Serveur Vite |
| Test téléphone / Ngrok | `npm run build` | `public/build` via Laravel |

Après un retour du mode Ngrok au mode local, relancer simplement :

```bash
npm run dev
```

Vite recréera `public/hot`. Avant de repasser au tunnel avec un seul port, arrêter Vite puis exécuter :

```bash
rm -f public/hot
npm run build
```

### Ngrok avec rechargement à chaud

Ce mode est optionnel et nécessite deux tunnels :

```bash
php artisan serve --host=0.0.0.0 --port=8000
npm run dev -- --host 0.0.0.0
ngrok http 8000
ngrok http 5173
```

Dans ce cas, renseigner l'hôte public du tunnel Vite dans `.env` :

```env
NGROK_HOST=votre-hote-vite.ngrok-free.app
VITE_DEV_SERVER_URL=https://votre-hote-vite.ngrok-free.app
```

La configuration correspondante se trouve dans `vite.config.js`.

## Routes disponibles

| Méthode | URL | Nom | Description |
| --- | --- | --- | --- |
| `GET` | `/` | — | Page d'accueil |
| `GET` | `/notre-ferme` | `ferme` | Histoire et vision |
| `GET` | `/nos-produits` | `produits` | Produits et sujets d'élevage |
| `GET` | `/nos-animaux` | `animaux` | Animaux de la ferme |
| `GET` | `/contact` | `contact` | Coordonnées et liens de contact |

## Organisation du projet

```text
app/
├── Http/Controllers/
│   └── Controller.php
└── Providers/

public/
├── images/
│   ├── bovins.jpg
│   ├── hero-ferme.png
│   ├── logo-ferme.png
│   ├── moutons.jpg
│   ├── oeufs-caille.webp
│   └── viande-caille.jpg
└── build/

resources/
├── css/app.css
├── js/app.js
└── views/
    ├── welcome.blade.php
    ├── ferme.blade.php
    ├── produits.blade.php
    ├── animaux.blade.php
    └── contact.blade.php

routes/
└── web.php
```

## Images et assets

Les images originales sont conservées dans le dossier `assets/` puis copiées dans `public/images/` pour être servies par Laravel.

Pour remplacer une image :

1. déposer le nouveau fichier dans `assets/` ;
2. le copier dans `public/images/` ;
3. conserver le chemin utilisé dans les vues Blade ;
4. relancer `npm run build` si nécessaire.

Les images utilisées actuellement sont :

- `hero-ferme.png` : image de la bannière principale ;
- `logo-ferme.png` : logo de la ferme ;
- `oeufs-caille.webp` : œufs de caille ;
- `viande-caille.jpg` : viande de caille ;
- `moutons.jpg` : visuel utilisé pour la catégorie moutons ;
- `bovins.jpg` : bovins.

## Base de données

La version actuelle du site vitrine ne dépend pas encore de données dynamiques pour les produits ou les animaux. Les contenus sont définis dans les vues Blade.

### Utiliser MySQL

Créer une base de données MySQL, puis remplacer la configuration SQLite dans `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ferme_bassoum
DB_USERNAME=root
DB_PASSWORD=
```

Puis lancer :

```bash
php artisan optimize:clear
php artisan migrate
```

La connexion MySQL doit être disponible avant l'exécution des migrations.

## Validation et maintenance

Vérifier les routes :

```bash
php artisan route:list
```

Vérifier les vues Blade :

```bash
php artisan view:cache
```

Compiler les assets :

```bash
npm run build
```

Lancer les tests Laravel :

```bash
php artisan test
```

Nettoyer tous les caches Laravel :

```bash
php artisan optimize:clear
```

Formater le code PHP avec Laravel Pint :

```bash
./vendor/bin/pint
```

## Déploiement

Sur un serveur de production :

```bash
composer install --no-dev --optimize-autoloader
npm ci
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Configurer ensuite `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL` avec l'URL HTTPS Render et `APP_KEY` avec une clé Laravel valide. Les sessions, le cache et les files utilisent des pilotes sans base de données. Le formulaire d'e-mail a été retiré : les visiteurs utilisent WhatsApp, le téléphone, l'adresse e-mail affichée ou Facebook.

Ne jamais inclure `.env` ou des clés privées dans le dépôt Git.

### Déployer sur Render

Le dépôt contient les fichiers nécessaires à un déploiement Render :

- `Dockerfile` : image PHP 8.4 avec Apache et les assets Vite compilés ;
- `docker/start.sh` : adapte Apache au port Render et optimise Laravel ;
- `render.yaml` : configure uniquement le service web gratuit, sans base de données ;
- `.dockerignore` : exclut les secrets, dépendances locales et fichiers temporaires.

1. Pousser le projet sur un dépôt GitHub.
2. Dans Render, choisir **New > Blueprint** et sélectionner le dépôt.
3. Render détectera `render.yaml` et créera uniquement le service web.
4. Renseigner `APP_URL` avec l'URL HTTPS Render du site.
5. Lancer le déploiement. Le script de démarrage exécute uniquement `php artisan optimize`.

`APP_KEY` est générée par Render. Aucun port SMTP, aucune base PostgreSQL et aucune variable Gmail ne sont nécessaires.

#### Tester l'image localement

Construire et démarrer l'image :

```bash
docker build -t ferme-bassoum .
docker run --rm -p 10000:10000 \
  -e APP_KEY="base64:replace-with-a-real-key" \
  -e APP_ENV=production \
  -e APP_DEBUG=false \
  -e APP_URL=http://localhost:10000 \
  ferme-bassoum \
  /usr/local/bin/render-start
```

Puis ouvrir <http://localhost:10000>.

## Dépannage

### Les styles Tailwind ne s'affichent pas

Recompiler les assets :

```bash
npm run build
```

En développement, vérifier que Vite tourne :

```bash
npm run dev
```

Si le site est ouvert via Ngrok, consulter la section [Accès depuis un téléphone avec Ngrok](#accès-depuis-un-téléphone-avec-ngrok).

## Licence

Ce projet est une application vitrine privée développée pour la Ferme Bassoum. Le framework Laravel et ses dépendances restent soumis à leurs licences respectives.
