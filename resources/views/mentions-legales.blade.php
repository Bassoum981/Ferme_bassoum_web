<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <title>Mentions légales | Ferme Bassoum</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="site-header">
            <div class="page-shell nav-inner">
                <a href="{{ url('/') }}" class="brand" aria-label="Accueil Ferme Bassoum"><img src="{{ asset('images/logo-ferme.png') }}" alt="Logo Ferme Bassoum"></a>
                <nav class="main-nav" aria-label="Navigation principale">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </nav>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false"><span></span><span></span><span></span></button>
                <div class="mobile-nav" aria-label="Navigation mobile">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </header>
        <main class="legal-page">
            <div class="page-shell">
                <p class="section-kicker">INFORMATIONS <span></span></p>
                <h1>Mentions légales et crédits</h1>
                <div class="legal-content">
                    <h2>Éditeur du site</h2>
                    <p>Ce site présente la Ferme Bassoum, située à Bamako, au Mali.</p>
                    <h2>Création du site</h2>
                    <p>Le site a été conçu et développé par <strong>Ibrahim Bassoum</strong>.</p>
                    <p><a href="https://www.ibassoum.dev" target="_blank" rel="noopener noreferrer">Visiter le portfolio d'Ibrahim Bassoum</a></p>
                    <h2>Contact</h2>
                    <p>Pour toute question concernant la ferme, consultez la page <a href="{{ route('contact') }}">Contact</a>.</p>
                </div>
            </div>
        </main>
        <footer class="site-footer">
            <div class="page-shell footer-inner">
                <span>Ferme Bassoum - Naturellement bon</span>
                <a href="https://www.ibassoum.dev" target="_blank" rel="noopener noreferrer">Créé par Ibrahim Bassoum</a>
            </div>
        </footer>
    </body>
</html>
