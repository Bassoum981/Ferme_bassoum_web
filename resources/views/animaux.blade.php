<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a class="button button-dark nav-contact" href="{{ route('contact') }}"><span class="phone-icon">☎</span> Nous contacter</a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
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
                        <img src="{{ asset('images/hero-ferme.png') }}" alt="Moutons dans l'environnement de la Ferme Bassoum">
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
                <div><p>Vous recherchez des sujets vigoureux ou souhaitez en savoir plus sur nos conditions d'élevage ? Notre équipe est à votre écoute.</p><p>⌖ Bamako, Mali<br>☎ <a href="tel:+22394184125">+223 94 18 41 25</a> · <a href="tel:+22350158093">+223 50 15 80 93</a><br>✉ <a href="mailto:ibrahimbassoum981@gmail.com">ibrahimbassoum981@gmail.com</a></p></div>
            </div>
        </footer>
    </body>
</html>
