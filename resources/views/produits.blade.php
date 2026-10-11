<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Découvrez les produits et sujets d'élevage de la Ferme Bassoum à Bamako.">
        <title>Nos produits | Ferme Bassoum</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="site-header">
            <div class="page-shell nav-inner">
                <a href="{{ url('/') }}" class="brand" aria-label="Accueil Ferme Bassoum"><img src="{{ asset('images/logo-ferme.png') }}" alt="Logo Ferme Bassoum"></a>
                <nav class="main-nav" aria-label="Navigation principale">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a class="active" href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </nav>
                <a class="button button-dark nav-contact" href="{{ route('contact') }}"><span class="phone-icon">☎</span> Nous contacter</a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
                <div class="mobile-nav" aria-label="Navigation mobile">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a class="active" href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </header>

        <main>
            <section class="inner-hero products-hero">
                <div class="page-shell">
                    <p class="eyebrow"><span>◆</span> NOS PRODUITS <span>◆</span></p>
                    <h1>Du savoir-faire,<br>de la qualité dans chaque produit</h1>
                    <p>Des produits frais et des sujets vigoureux, issus d'un élevage maîtrisé.</p>
                </div>
            </section>

            <section class="products-intro">
                <div class="page-shell section-intro">
                    <p class="section-kicker">NOTRE OFFRE <span></span></p>
                    <h2>Des produits pensés pour votre exigence</h2>
                    <p>Que vous soyez professionnel de l'élevage ou particulier, nous vous proposons des produits suivis avec rigueur, dans le respect de la qualité, de la fraîcheur et de la traçabilité.</p>
                </div>
            </section>

            <section class="product-showcase">
                <div class="page-shell product-page-grid">
                    <article class="large-product-card">
                        <img src="{{ asset('images/oeufs-caille.webp') }}" alt="Œufs de caille frais">
                        <div class="large-product-content">
                            <span class="product-label">Produit frais</span>
                            <h2>Œufs de caille</h2>
                            <p>Frais, naturels et riches en nutriments, nos œufs de caille sont issus d'un élevage suivi avec attention.</p>
                            <a class="button button-dark" href="{{ route('contact') }}">Demander des informations <span>→</span></a>
                        </div>
                    </article>
                    <article class="large-product-card">
                        <img src="{{ asset('images/viande-caille.jpg') }}" alt="Viande de caille">
                        <div class="large-product-content">
                            <span class="product-label">Élevage local</span>
                            <h2>Viande de caille</h2>
                            <p>Une viande tendre et savoureuse, produite localement avec une attention portée à l'alimentation et au bien-être animal.</p>
                            <a class="button button-dark" href="{{ route('contact') }}">Nous contacter <span>→</span></a>
                        </div>
                    </article>
                </div>
            </section>

            <section class="subjects-section">
                <div class="page-shell subjects-grid">
                    <div class="section-intro">
                        <p class="section-kicker">POUR LES ÉLEVEURS <span></span></p>
                        <h2>Des sujets vigoureux pour vos projets</h2>
                        <p>Grâce à notre maîtrise de l'incubation et du démarrage, nous accompagnons les éleveurs à la recherche de sujets robustes et bien suivis.</p>
                    </div>
                    <div class="subject-list">
                        <article><span>01</span><div><h3>Cailles</h3><p>Des sujets sélectionnés et démarrés dans des conditions maîtrisées.</p></div></article>
                        <article><span>02</span><div><h3>Pintades</h3><p>Un élevage suivi pour des volailles vigoureuses et adaptées.</p></div></article>
                        <article><span>03</span><div><h3>Poulets</h3><p>Une conduite d'élevage attentive, de l'incubation aux premiers jours.</p></div></article>
                    </div>
                </div>
            </section>
        </main>

        <footer id="contact" class="site-footer">
            <div class="page-shell contact-footer">
                <div><p class="section-kicker">COMMANDER OU SE RENSEIGNER <span></span></p><h2>Parlons de votre besoin</h2></div>
                <div><p>Pour connaître nos disponibilités et nos conditions, contactez directement la Ferme Bassoum.</p><p>⌖ Bamako, Mali<br>☎ <a href="tel:+22394184125">+223 94 18 41 25</a> · <a href="tel:+22350158093">+223 50 15 80 93</a><br>✉ <a href="mailto:ibrahimbassoum981@gmail.com">ibrahimbassoum981@gmail.com</a></p></div>
            </div>
        </footer>
    </body>
</html>
