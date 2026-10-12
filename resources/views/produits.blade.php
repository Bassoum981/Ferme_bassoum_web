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
                <a class="button button-dark nav-contact" href="{{ route('contact') }}"><span class="phone-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span> Nous contacter</a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false"><span></span><span></span><span></span></button>
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
                            <a class="button whatsapp-button product-whatsapp" href="https://wa.me/22394184125?text=Bonjour%20Ferme%20Bassoum%2C%20je%20souhaite%20commander%20des%20%C5%93ufs%20de%20caille.%20Pouvez-vous%20m%27indiquer%20les%20disponibilit%C3%A9s%20et%20les%20tarifs%20%3F" target="_blank" rel="noopener">
                                <svg class="whatsapp-mark" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.5 0 .2 5.3.2 11.9c0 2.1.5 4.1 1.5 5.9L.1 24l6.4-1.7a11.9 11.9 0 0 0 5.6 1.4h.1c6.5 0 11.8-5.3 11.8-11.9 0-3.2-1.2-6.1-3.5-8.3Zm-8.4 18.1h-.1c-1.8 0-3.5-.5-5.1-1.4l-.4-.2-3.8 1 1-3.7-.2-.4a9.8 9.8 0 0 1-1.5-5.2C2 6.2 6.4 1.9 12.1 1.9c2.7 0 5.1 1 7 2.9a9.9 9.9 0 0 1 2.9 7c0 5.5-4.4 9.8-9.9 9.8Zm5.4-7.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-1.5-.8-2.5-1.4-3.5-3.1-.3-.5.3-.5.8-1.7.1-.2.1-.4 0-.6 0-.2-.7-1.7-.9-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.8.4-.3.3-1 1-1 2.5s1 2.9 1.1 3.1c.1.2 2 3.1 4.9 4.3 1.8.8 2.5.8 3.4.7.6-.1 1.8-.7 2.1-1.4.3-.7.3-1.3.2-1.4-.1-.1-.3-.2-.6-.3Z"/></svg>
                                Commander sur WhatsApp
                            </a>
                        </div>
                    </article>
                    <article class="large-product-card">
                        <img src="{{ asset('images/viande-caille.jpg') }}" alt="Viande de caille">
                        <div class="large-product-content">
                            <span class="product-label">Élevage local</span>
                            <h2>Viande de caille</h2>
                            <p>Une viande tendre et savoureuse, produite localement avec une attention portée à l'alimentation et au bien-être animal.</p>
                            <a class="button whatsapp-button product-whatsapp" href="https://wa.me/22394184125?text=Bonjour%20Ferme%20Bassoum%2C%20je%20souhaite%20commander%20de%20la%20viande%20de%20caille.%20Pouvez-vous%20m%27indiquer%20les%20disponibilit%C3%A9s%20et%20les%20tarifs%20%3F" target="_blank" rel="noopener">
                                <svg class="whatsapp-mark" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.5 0 .2 5.3.2 11.9c0 2.1.5 4.1 1.5 5.9L.1 24l6.4-1.7a11.9 11.9 0 0 0 5.6 1.4h.1c6.5 0 11.8-5.3 11.8-11.9 0-3.2-1.2-6.1-3.5-8.3Zm-8.4 18.1h-.1c-1.8 0-3.5-.5-5.1-1.4l-.4-.2-3.8 1 1-3.7-.2-.4a9.8 9.8 0 0 1-1.5-5.2C2 6.2 6.4 1.9 12.1 1.9c2.7 0 5.1 1 7 2.9a9.9 9.9 0 0 1 2.9 7c0 5.5-4.4 9.8-9.9 9.8Zm5.4-7.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-1.5-.8-2.5-1.4-3.5-3.1-.3-.5.3-.5.8-1.7.1-.2.1-.4 0-.6 0-.2-.7-1.7-.9-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.8.4-.3.3-1 1-1 2.5s1 2.9 1.1 3.1c.1.2 2 3.1 4.9 4.3 1.8.8 2.5.8 3.4.7.6-.1 1.8-.7 2.1-1.4.3-.7.3-1.3.2-1.4-.1-.1-.3-.2-.6-.3Z"/></svg>
                                Commander sur WhatsApp
                            </a>
                        </div>
                    </article>
                    <article class="large-product-card livestock-card">
                        <div class="livestock-carousel" aria-label="Catégorie bovin : moutons et bovins">
                            <div class="livestock-track">
                                <figure><img src="{{ asset('images/mouton.png') }}" alt="Moutons de la Ferme Bassoum"><figcaption>Moutons</figcaption></figure>
                                <figure><img src="{{ asset('images/bovins.jpg') }}" alt="Bovins de la Ferme Bassoum"><figcaption>Bovins</figcaption></figure>
                            </div>
                        </div>
                        <div class="large-product-content">
                            <span class="product-label">Élevage diversifié</span>
                            <h2>Catégorie bovin</h2>
                            <p>Découvrez nos moutons et nos bovins, élevés avec attention dans un environnement adapté et suivi.</p>
                            <a class="button whatsapp-button product-whatsapp" href="https://wa.me/22394184125?text=Bonjour%20Ferme%20Bassoum%2C%20je%20souhaite%20commander%20des%20animaux%20de%20la%20cat%C3%A9gorie%20bovin.%20Pouvez-vous%20m%27indiquer%20les%20disponibilit%C3%A9s%20%3F" target="_blank" rel="noopener">
                                <svg class="whatsapp-mark" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.5 0 .2 5.3.2 11.9c0 2.1.5 4.1 1.5 5.9L.1 24l6.4-1.7a11.9 11.9 0 0 0 5.6 1.4h.1c6.5 0 11.8-5.3 11.8-11.9 0-3.2-1.2-6.1-3.5-8.3Zm-8.4 18.1h-.1c-1.8 0-3.5-.5-5.1-1.4l-.4-.2-3.8 1 1-3.7-.2-.4a9.8 9.8 0 0 1-1.5-5.2C2 6.2 6.4 1.9 12.1 1.9c2.7 0 5.1 1 7 2.9a9.9 9.9 0 0 1 2.9 7c0 5.5-4.4 9.8-9.9 9.8Zm5.4-7.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-1.5-.8-2.5-1.4-3.5-3.1-.3-.5.3-.5.8-1.7.1-.2.1-.4 0-.6 0-.2-.7-1.7-.9-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.8.4-.3.3-1 1-1 2.5s1 2.9 1.1 3.1c.1.2 2 3.1 4.9 4.3 1.8.8 2.5.8 3.4.7.6-.1 1.8-.7 2.1-1.4.3-.7.3-1.3.2-1.4-.1-.1-.3-.2-.6-.3Z"/></svg>
                                Commander sur WhatsApp
                            </a>
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
                <div><p>Pour connaître nos disponibilités et nos conditions, contactez directement la Ferme Bassoum.</p><p class="footer-contact-details"><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"/><circle cx="12" cy="9" r="2.2"/></svg></span> Bamako, Mali</span><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span> <a href="tel:+22394184125">+223 94 18 41 25</a> · <a href="tel:+22350158093">+223 50 15 80 93</a></span><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></span> <a href="mailto:ibrahimbassoum981@gmail.com">ibrahimbassoum981@gmail.com</a></span><span class="footer-contact-line"><span class="footer-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M14 8h3V4h-3c-3.3 0-5 1.9-5 5v3H6v4h3v4h4v-4h3l1-4h-4V9c0-.7.3-1 1-1Z"/></svg></span> <a href="https://www.facebook.com/share/1De6Fwm6js/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer">Facebook</a></span></p></div>
            </div>
        </footer>
    </body>
</html>
