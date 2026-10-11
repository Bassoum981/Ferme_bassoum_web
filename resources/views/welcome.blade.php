<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ferme Bassoum — élevage responsable et produits fermiers de qualité.">
        <title>Ferme Bassoum | Naturellement bon</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="site-header">
            <div class="page-shell nav-inner">
                <a href="#accueil" class="brand" aria-label="Accueil Ferme Bassoum">
                    <img src="{{ asset('images/logo-ferme.png') }}" alt="Logo Ferme Bassoum">
                </a>
                <nav class="main-nav" aria-label="Navigation principale">
                    <a class="active" href="#accueil">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </nav>
                <a class="button button-dark nav-contact" href="{{ route('contact') }}">
                    <span class="phone-icon">☎</span> Nous contacter
                </a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
                <div class="mobile-nav" aria-label="Navigation mobile">
                    <a href="#accueil">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </header>

        <main>
            <section id="accueil" class="hero">
                <div class="hero-overlay"></div>
                <div class="page-shell hero-content">
                    <div class="hero-copy">
                        <p class="eyebrow"><span>◆</span> NATURELLEMENT BON <span>◆</span></p>
                        <h1>Ferme Bassoum</h1>
                        <h2>L'excellence de l'élevage passionné,<br class="desktop-only"> du couvoir à votre table</h2>
                        <p class="hero-text">Du couvoir à votre table, nous maîtrisons chaque étape<br class="desktop-only"> pour vous proposer des volailles vigoureuses et des produits<br class="desktop-only"> d'une qualité irréprochable.</p>
                        <a class="button button-dark" href="{{ route('ferme') }}">Découvrir notre ferme <span>→</span></a>
                    </div>
                </div>
            </section>

            <section class="values-strip" aria-label="Nos engagements">
                <div class="page-shell values-grid">
                    <div class="value-item"><span class="value-icon">◒</span><div><strong>Produits naturels</strong><small>Sans additifs ni conservateurs</small></div></div>
                    <div class="value-item"><span class="value-icon">♣</span><div><strong>Élevage respectueux</strong><small>Bien-être animal avant tout</small></div></div>
                    <div class="value-item"><span class="value-icon">✓</span><div><strong>Qualité garantie</strong><small>Des produits sains et locaux</small></div></div>
                    <div class="value-item"><span class="value-icon">⌖</span><div><strong>Production locale</strong><small>Soutien à l'agriculture locale</small></div></div>
                </div>
            </section>

            <section id="ferme" class="intro-section">
                <div class="page-shell intro-grid">
                    <div class="intro-copy">
                        <p class="section-kicker">À PROPOS DE NOUS <span></span></p>
                        <h2>Une ferme, une exigence</h2>
                        <p>De l'incubation à l'élevage, nous maîtrisons chaque étape pour proposer des volailles vigoureuses et des produits d'une qualité irréprochable.</p>
                        <a class="button button-outline" href="#contact">En savoir plus <span>→</span></a>
                    </div>
                    <div class="intro-logo">
                        <img src="{{ asset('images/logo-ferme.png') }}" alt="Emblème Ferme Bassoum">
                        <p>La nature nous nourrit,<br>nous la respectons.</p>
                    </div>
                    <div class="feature-columns">
                        <div id="produits" class="feature-column">
                            <h2>Notre cœur de métier</h2>
                            <article class="product-card">
                                <img src="{{ asset('images/oeufs-caille.webp') }}" alt="Œufs de caille">
                                <div><h3>♣ Incubation & élevage</h3><p>Cailles, pintades et poulets élevés avec une attention rigoureuse.</p><a class="button button-dark small-button" href="#contact">En savoir plus <span>→</span></a></div>
                            </article>
                            <article class="product-card product-card-secondary">
                                <img src="{{ asset('images/viande-caille.jpg') }}" alt="Viande de caille">
                                <div><h3>♣ Œufs & viande de caille</h3><p>Des produits frais, locaux et suivis avec exigence.</p></div>
                            </article>
                        </div>
                        <div id="animaux" class="feature-column animals-column">
                            <h2>Innovation & rigueur</h2>
                            <div class="animal-list">
                                <figure><img src="{{ asset('images/oeufs-caille.webp') }}" alt="Cailles"><figcaption>Cailles</figcaption></figure>
                                <figure><img src="{{ asset('images/moutons.jpg') }}" alt="Moutons"><figcaption>Moutons</figcaption></figure>
                                <figure><img src="{{ asset('images/bovins.jpg') }}" alt="Bovins"><figcaption>Bovins</figcaption></figure>
                            </div>
                            <p>Incubation contrôlée, alimentation sur mesure, suivi sanitaire et traçabilité des lots garantissent une production régulière et transparente.</p>
                            <a class="button button-dark small-button" href="#contact">Nous contacter <span>→</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="contact" class="site-footer">
            <div class="page-shell footer-inner">
                <span>⌖ &nbsp; Ferme Bassoum - Naturellement bon</span>
                <a href="tel:+22394184125">☎ &nbsp; +223 94 18 41 25 · +223 50 15 80 93</a>
                <span class="footer-leaves">◒</span>
                <a href="mailto:ibrahimbassoum981@gmail.com">ibrahimbassoum981@gmail.com</a>
            </div>
        </footer>
    </body>
</html>
