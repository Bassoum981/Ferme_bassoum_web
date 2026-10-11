<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Découvrez l'histoire, la vision et le savoir-faire de la Ferme Bassoum à Bamako.">
        <title>Notre ferme | Ferme Bassoum</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="site-header">
            <div class="page-shell nav-inner">
                <a href="{{ url('/') }}" class="brand" aria-label="Accueil Ferme Bassoum">
                    <img src="{{ asset('images/logo-ferme.png') }}" alt="Logo Ferme Bassoum">
                </a>
                <nav class="main-nav" aria-label="Navigation principale">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a class="active" href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </nav>
                <a class="button button-dark nav-contact" href="{{ route('contact') }}"><span class="phone-icon">☎</span> Nous contacter</a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
                <div class="mobile-nav" aria-label="Navigation mobile">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a class="active" href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </header>

        <main>
            <section class="inner-hero">
                <div class="page-shell">
                    <p class="eyebrow"><span>◆</span> FERME BASSOUM <span>◆</span></p>
                    <h1>L'excellence de l'élevage passionné,<br class="desktop-only"> du couvoir à votre table</h1>
                    <p>Une vision moderne, saine et durable de l'agriculture à Bamako.</p>
                </div>
            </section>

            <section class="farm-story">
                <div class="page-shell farm-content">
                    <div class="farm-heading">
                        <p class="section-kicker">NOTRE HISTOIRE & NOTRE VISION <span></span></p>
                        <h2>La passion du vivant,<br>la rigueur au quotidien</h2>
                    </div>
                    <div class="farm-copy">
                        <p>À la Ferme Bassoum, notre mission repose sur une ambition claire : allier le savoir-faire traditionnel de l'élevage et la rigueur d'une gestion moderne pour offrir des produits d'une qualité irréprochable.</p>
                        <p>Née d'une véritable passion pour la terre et le vivant, notre ferme s'est construite autour d'exigences strictes : le respect du bien-être animal, la maîtrise rigoureuse de chaque étape de production et une transparence totale envers nos partenaires et clients.</p>
                        <p>De nos installations d'incubation de pointe jusqu'à la gestion méthodique de notre alimentation et de nos stocks, la Ferme Bassoum incarne une vision moderne, saine et durable de l'agriculture.</p>
                    </div>
                </div>
            </section>

            <section class="farm-practice">
                <div class="page-shell">
                    <div class="section-intro">
                        <p class="section-kicker">NOTRE CŒUR DE MÉTIER <span></span></p>
                        <h2>L'excellence avicole</h2>
                        <p>Notre savoir-faire repose sur la maîtrise précise du cycle de reproduction et de croissance avicole, avec une spécialisation dans l'élevage de la caille, de la pintade et du poulet.</p>
                    </div>
                    <div class="practice-grid">
                        <article class="practice-card">
                            <span class="practice-number">01</span>
                            <h3>Maîtrise de l'incubation & de l'élevage</h3>
                            <ul>
                                <li><strong>Incubation sous contrôle strict :</strong> température, hygrométrie et retournement sont suivis pour garantir un taux d'éclosion élevé et des sujets vigoureux.</li>
                                <li><strong>Élevage & démarrage sécurisé :</strong> les phases d'éleveuse sont rigoureusement suivies dès les premiers jours.</li>
                                <li><strong>Biosécurité :</strong> un environnement propre et maîtrisé prévient les risques sanitaires.</li>
                            </ul>
                        </article>
                        <article class="practice-card">
                            <span class="practice-number">02</span>
                            <h3>Suivi sanitaire & nutrition sur-mesure</h3>
                            <ul>
                                <li><strong>Alimentation équilibrée :</strong> des formulations adaptées aux besoins physiologiques de chaque stade de croissance.</li>
                                <li><strong>Prévention vétérinaire :</strong> un calendrier sanitaire et vaccinal appliqué strictement pour des volailles robustes et en parfaite santé.</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>

            <section class="management-section">
                <div class="page-shell management-grid">
                    <div>
                        <p class="section-kicker">INNOVATION & RIGUEUR DE GESTION <span></span></p>
                        <h2>Une ferme moderne<br>et structurée</h2>
                    </div>
                    <div>
                        <p>Grâce à un suivi méthodologique de l'ensemble de notre chaîne de production — ponte, traçabilité des lots et gestion du stock — nous garantissons :</p>
                        <div class="guarantees">
                            <span>✓ Une traçabilité totale de nos produits.</span>
                            <span>✓ Une régularité constante dans nos approvisionnements.</span>
                            <span>✓ Une transparence garantie pour tous nos clients.</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="why-section">
                <div class="page-shell">
                    <div class="section-intro center">
                        <p class="section-kicker">POURQUOI CHOISIR LA FERME BASSOUM ? <span></span></p>
                        <h2>Notre engagement à vos côtés</h2>
                    </div>
                    <div class="why-grid">
                        <article><span>✦</span><h3>Qualité & fraîcheur</h3><p>Des volailles élevées dans des conditions optimales, pour une chair savoureuse et une santé irréprochable.</p></article>
                        <article><span>✦</span><h3>Rigueur & expertise</h3><p>Une parfaite maîtrise des cycles d'incubation et de la conduite d'élevage.</p></article>
                        <article><span>✦</span><h3>Engagement & proximité</h3><p>Un partenariat de confiance basé sur l'écoute et la satisfaction de nos clients.</p></article>
                    </div>
                </div>
            </section>
        </main>

        <footer id="contact" class="site-footer">
            <div class="page-shell contact-footer">
                <div><p class="section-kicker">CONTACTEZ-NOUS <span></span></p><h2>Votre partenaire de confiance</h2></div>
                <div><p>Professionnel à la recherche de sujets vigoureux ou particulier exigeant sur la qualité de son alimentation ? La Ferme Bassoum est à votre écoute.</p><p>⌖ Bamako, Mali<br>☎ <a href="tel:+22394184125">+223 94 18 41 25</a> · <a href="tel:+22350158093">+223 50 15 80 93</a><br>✉ <a href="mailto:ibrahimbassoum981@gmail.com">ibrahimbassoum981@gmail.com</a></p></div>
            </div>
        </footer>
    </body>
</html>
