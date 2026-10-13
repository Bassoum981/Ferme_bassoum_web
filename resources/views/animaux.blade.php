<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('images/logo-ferme.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/logo-ferme.png') }}">
        <meta name="description" content="Découvrez les animaux élevés avec soin à la Ferme Bassoum.">
        <title>Nos animaux | Ferme Bassoum</title>
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
                    <a class="active" href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </nav>
                <a class="button button-dark nav-contact" href="{{ route('contact') }}"><span class="phone-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span> Nous contacter</a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false"><span></span><span></span><span></span></button>
                <div class="mobile-nav" aria-label="Navigation mobile">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a class="active" href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </header>

        <main>
            <section class="inner-hero animals-hero">
                <div class="page-shell">
                    <p class="eyebrow"><span>◆</span> NOS ANIMAUX <span>◆</span></p>
                    <h1>Des animaux élevés<br>avec soin et respect</h1>
                    <p>Un environnement maîtrisé, une attention quotidienne et un suivi sanitaire rigoureux.</p>
                </div>
            </section>

            <section class="animals-intro">
                <div class="page-shell section-intro">
                    <p class="section-kicker">NOTRE ÉLEVAGE <span></span></p>
                    <h2>Le bien-être animal au cœur de notre métier</h2>
                    <p>À la Ferme Bassoum, chaque animal bénéficie de conditions adaptées à son développement. Nous veillons à leur alimentation, leur santé et leur environnement afin de proposer un élevage responsable et durable.</p>
                </div>
            </section>

            <section class="animal-showcase">
                <div class="page-shell animal-cards">
                    <article class="animal-card animal-card-featured">
                        <img src="{{ asset('images/oeufs-caille.webp') }}" alt="Cailles de la Ferme Bassoum">
                        <div><span class="product-label">Élevage avicole</span><h2>Cailles</h2><p>Notre spécialité : des cailles élevées avec une alimentation suivie et des conditions sanitaires maîtrisées, de l'incubation jusqu'à la maturité.</p></div>
                    </article>
                    <article class="animal-card">
                        <img src="{{ asset('images/mouton.png') }}" alt="Moutons de la Ferme Bassoum">
                        <div><span class="product-label">Élevage diversifié</span><h2>Moutons</h2><p>Des animaux suivis avec attention dans un environnement adapté.</p></div>
                    </article>
                    <article class="animal-card">
                        <img src="{{ asset('images/bovins.jpg') }}" alt="Bovins de la Ferme Bassoum">
                        <div><span class="product-label">Élevage diversifié</span><h2>Bovins</h2><p>Une présence importante dans notre vision d'un élevage local et équilibré.</p></div>
                    </article>
                </div>
            </section>

            <section class="poultry-section">
                <div class="page-shell poultry-grid">
                    <div class="section-intro">
                        <p class="section-kicker">NOTRE SAVOIR-FAIRE AVICOLE <span></span></p>
                        <h2>Cailles, pintades et poulets</h2>
                        <p>Notre travail commence dès l'incubation. Température, hygrométrie, alimentation et prévention sanitaire sont suivies à chaque étape pour offrir des sujets vigoureux.</p>
                    </div>
                    <div class="poultry-points">
                        <div><span>01</span><h3>Incubation contrôlée</h3><p>Un suivi précis des paramètres pour favoriser des éclosions régulières.</p></div>
                        <div><span>02</span><h3>Démarrage sécurisé</h3><p>Des conditions adaptées aux premiers jours de croissance.</p></div>
                        <div><span>03</span><h3>Suivi sanitaire</h3><p>Une prévention rigoureuse pour des animaux robustes et en bonne santé.</p></div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="contact" class="site-footer">
            <div class="page-shell contact-footer">
                <div><p class="section-kicker">CONTACTEZ-NOUS <span></span></p><h2>Parlons de votre élevage</h2></div>
                <div><p>Vous recherchez des sujets vigoureux ou souhaitez en savoir plus sur nos conditions d'élevage ? Notre équipe est à votre écoute.</p><p class="footer-contact-details"><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"/><circle cx="12" cy="9" r="2.2"/></svg></span> Bamako, Mali</span><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span> <a href="tel:+22394184125">+223 94 18 41 25</a> · <a href="tel:+22350158093">+223 50 15 80 93</a></span><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></span> <a href="mailto:ibrahimbassoum981@gmail.com">ibrahimbassoum981@gmail.com</a></span><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M14 8h3V4h-3c-3.3 0-5 1.9-5 5v3H6v4h3v4h4v-4h3l1-4h-4V9c0-.7.3-1 1-1Z"/></svg></span> <a href="https://www.facebook.com/share/1De6Fwm6js/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer">Facebook</a></span></p></div>
            </div>
        </footer>
    </body>
</html>
