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
                    <span class="phone-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span> Nous contacter
                </a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false"><span></span><span></span><span></span></button>
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
                    <div class="value-item"><span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 4.5C13.1 4.7 7.1 6.7 5 11.2c-1.4 3-.2 5.5 2.5 6.4 2.6.9 5.8-.7 7.5-3.2 1.8-2.7 2.4-6 4.5-9.9Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.5 20c2.1-4.8 5.6-7.8 10.5-10.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span><div><strong>Produits naturels</strong><small>Sans additifs ni conservateurs</small></div></div>
                    <div class="value-item"><span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.1 8.3c1 0 1.8-1 1.8-2.2S9.1 4 8.1 4 6.3 4.9 6.3 6.1s.8 2.2 1.8 2.2ZM15.9 8.3c1 0 1.8-1 1.8-2.2S16.9 4 15.9 4s-1.8.9-1.8 2.1.8 2.2 1.8 2.2ZM5.2 13c1 0 1.8-.9 1.8-2s-.8-2-1.8-2-1.8.9-1.8 2 .8 2 1.8 2ZM18.8 13c1 0 1.8-.9 1.8-2s-.8-2-1.8-2-1.8.9-1.8 2 .8 2 1.8 2Z" fill="currentColor"/><path d="M12 10.3c-2.4 0-4.4 2.1-4.4 4.8 0 2 1.3 3.4 3.1 3.4.7 0 1-.4 1.3-.4s.6.4 1.3.4c1.8 0 3.1-1.4 3.1-3.4 0-2.7-2-4.8-4.4-4.8Z" fill="currentColor"/></svg></span><div><strong>Élevage respectueux</strong><small>Bien-être animal avant tout</small></div></div>
                    <div class="value-item"><span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m12 3 7 2.7v5.1c0 4.6-2.9 8.1-7 10.2-4.1-2.1-7-5.6-7-10.2V5.7L12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/><path d="m8.5 11.8 2.2 2.2 4.8-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></span><div><strong>Qualité garantie</strong><small>Des produits sains et locaux</small></div></div>
                    <div class="value-item"><span class="value-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19 10.2c0 5-7 10.2-7 10.2s-7-5.2-7-10.2a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.3" stroke="currentColor" stroke-width="1.7"/></svg></span><div><strong>Production locale</strong><small>Soutien à l'agriculture locale</small></div></div>
                </div>
            </section>

            <section class="home-navigation" aria-label="Découvrir la Ferme Bassoum">
                <div class="page-shell">
                    <div class="home-navigation-heading">
                        <div>
                            <p class="section-kicker">DÉCOUVREZ NOTRE UNIVERS <span></span></p>
                            <h2>La Ferme Bassoum en trois étapes</h2>
                        </div>
                        <p>Explorez notre histoire, nos produits et les animaux que nous élevons avec soin.</p>
                    </div>
                    <div class="home-navigation-grid">
                        <a class="home-navigation-card" href="{{ route('ferme') }}">
                            <span class="home-navigation-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 4.5C13.1 4.7 7.1 6.7 5 11.2c-1.4 3-.2 5.5 2.5 6.4 2.6.9 5.8-.7 7.5-3.2 1.8-2.7 2.4-6 4.5-9.9Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.5 20c2.1-4.8 5.6-7.8 10.5-10.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
                            </span>
                            <div><h3>Notre ferme</h3><p>Notre histoire, notre vision et notre savoir-faire.</p></div><strong>→</strong>
                        </a>
                        <a class="home-navigation-card" href="{{ route('produits') }}">
                            <span class="home-navigation-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 5h2l1.6 9.2a2 2 0 0 0 2 1.7h7.5a2 2 0 0 0 1.9-1.5L20 8H7" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 19.2h.01M17 19.2h.01" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/><path d="m9 11 1.5 1.5L13 9.8l1.5 1.4L17 10" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <div><h3>Nos produits</h3><p>Œufs, viande de caille et sujets d'élevage.</p></div><strong>→</strong>
                        </a>
                        <a class="home-navigation-card" href="{{ route('animaux') }}">
                            <span class="home-navigation-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.1 8.3c1 0 1.8-1 1.8-2.2S9.1 4 8.1 4 6.3 4.9 6.3 6.1s.8 2.2 1.8 2.2ZM15.9 8.3c1 0 1.8-1 1.8-2.2S16.9 4 15.9 4s-1.8.9-1.8 2.1.8 2.2 1.8 2.2ZM5.2 13c1 0 1.8-.9 1.8-2s-.8-2-1.8-2-1.8.9-1.8 2 .8 2 1.8 2ZM18.8 13c1 0 1.8-.9 1.8-2s-.8-2-1.8-2-1.8.9-1.8 2 .8 2 1.8 2Z" fill="currentColor"/><path d="M12 10.3c-2.4 0-4.4 2.1-4.4 4.8 0 2 1.3 3.4 3.1 3.4.7 0 1-.4 1.3-.4s.6.4 1.3.4c1.8 0 3.1-1.4 3.1-3.4 0-2.7-2-4.8-4.4-4.8Z" fill="currentColor"/></svg>
                            </span>
                            <div><h3>Nos animaux</h3><p>Cailles, moutons, bovins et élevage avicole.</p></div><strong>→</strong>
                        </a>
                    </div>
                </div>
            </section>

            <section id="ferme" class="intro-section">
                <div class="page-shell intro-grid">
                    <div class="intro-copy">
                        <p class="section-kicker">À PROPOS DE NOUS <span></span></p>
                        <h2>Une ferme, une exigence</h2>
                        <p>De l'incubation à l'élevage, nous maîtrisons chaque étape pour proposer des volailles vigoureuses et des produits d'une qualité irréprochable.</p>
                        <a class="button button-outline" href="{{ route('ferme') }}">En savoir plus sur notre ferme <span>→</span></a>
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
                                <div><h3>♣ Incubation & élevage</h3><p>Cailles, pintades et poulets élevés avec une attention rigoureuse.</p><a class="button button-dark small-button" href="{{ route('produits') }}">Voir nos produits <span>→</span></a></div>
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
                                <figure><img src="{{ asset('images/mouton.png') }}" alt="Moutons"><figcaption>Moutons</figcaption></figure>
                                <figure><img src="{{ asset('images/bovins.jpg') }}" alt="Bovins"><figcaption>Bovins</figcaption></figure>
                            </div>
                            <p>Incubation contrôlée, alimentation sur mesure, suivi sanitaire et traçabilité des lots garantissent une production régulière et transparente.</p>
                            <a class="button button-dark small-button" href="{{ route('animaux') }}">Découvrir nos animaux <span>→</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="contact" class="site-footer">
            <div class="page-shell footer-inner">
                <span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"/><circle cx="12" cy="9" r="2.2"/></svg></span> Ferme Bassoum - Naturellement bon</span>
                <a class="footer-contact-line" href="{{ route('contact') }}"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span> Nous contacter</a>
                <a class="footer-contact-line" href="https://www.facebook.com/share/1De6Fwm6js/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M14 8h3V4h-3c-3.3 0-5 1.9-5 5v3H6v4h3v4h4v-4h3l1-4h-4V9c0-.7.3-1 1-1Z"/></svg></span> Facebook</a>
                <a href="mailto:ibrahimbassoum981@gmail.com">ibrahimbassoum981@gmail.com</a>
            </div>
        </footer>
    </body>
</html>
