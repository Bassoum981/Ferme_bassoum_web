<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/logo-ferme.png') }}">
        <meta name="description" content="Contactez la Ferme Bassoum à Bamako.">
        <title>Contact | Ferme Bassoum</title>
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
                    <a class="active" href="{{ route('contact') }}">Contact</a>
                </nav>
                <a class="button button-dark nav-contact" href="https://wa.me/22394184125" target="_blank" rel="noopener noreferrer"><span class="phone-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span> Nous écrire sur WhatsApp</a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false"><span></span><span></span><span></span></button>
                <div class="mobile-nav" aria-label="Navigation mobile">
                    <a href="{{ url('/') }}">Accueil</a>
                    <a href="{{ route('ferme') }}">Notre ferme</a>
                    <a href="{{ route('produits') }}">Nos produits</a>
                    <a href="{{ route('animaux') }}">Nos animaux</a>
                    <a class="active" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </header>

        <main>
            <section class="inner-hero contact-hero">
                <div class="page-shell">
                    <p class="eyebrow"><span>◆</span> CONTACTEZ-NOUS <span>◆</span></p>
                    <h1>Parlons de votre<br>projet d'élevage</h1>
                    <p>La Ferme Bassoum est votre partenaire de confiance à Bamako.</p>
                </div>
            </section>

            <section class="contact-main">
                <div class="page-shell contact-grid">
                    <div class="contact-details">
                        <p class="section-kicker">NOUS SOMMES À VOTRE ÉCOUTE <span></span></p>
                        <h2>Une question ?<br>Un besoin précis ?</h2>
                        <p>Professionnel à la recherche de sujets vigoureux ou particulier exigeant sur la qualité de son alimentation, contactez-nous directement.</p>
                        <div class="contact-items">
                            <a href="tel:+22394184125"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7.2 3.5 9.8 3a1.5 1.5 0 0 1 1.7 1l1 3a1.5 1.5 0 0 1-.5 1.6l-1.5 1.2a12.5 12.5 0 0 0 4.7 4.7l1.2-1.5a1.5 1.5 0 0 1 1.6-.5l3 1a1.5 1.5 0 0 1 1 1.7l-.5 2.6a1.8 1.8 0 0 1-2 1.4A16.5 16.5 0 0 1 4.8 5.5a1.8 1.8 0 0 1 1.4-2Z"/></svg></span><div><strong>Téléphone</strong><small>+223 94 18 41 25 · +223 50 15 80 93</small></div></a>
                            <a href="mailto:ibrahimbassoum981@gmail.com"><span aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></span><div><strong>E-mail</strong><small>ibrahimbassoum981@gmail.com</small></div></a>
                            <div><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"/><circle cx="12" cy="9" r="2.2"/></svg></span><div><strong>Localisation</strong><small>Bamako, Mali</small></div></div>
                        </div>
                        <a class="whatsapp-button" href="https://wa.me/22394184125?text=Bonjour%20Ferme%20Bassoum%2C%20je%20souhaite%20avoir%20des%20informations." target="_blank" rel="noopener"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.6 0 .3 5.3.3 11.8c0 2.1.6 4.1 1.6 5.9L.2 24l6.4-1.7a11.8 11.8 0 0 0 5.5 1.4h.1c6.5 0 11.8-5.3 11.8-11.8 0-3.2-1.3-6.2-3.5-8.4Zm-8.4 16.2h-.1c-1.8 0-3.6-.5-5.1-1.4l-.4-.2-3.8 1 1-3.7-.2-.4a9.7 9.7 0 1 1 8.6 4.7Zm5.3-7.3c-.3-.2-1.8-.9-2.1-1s-.5-.2-.7.2-.8 1-.9 1.2-.3.2-.6.1a7.9 7.9 0 0 1-2.3-1.4 8.7 8.7 0 0 1-1.6-2c-.2-.3 0-.5.1-.7l.5-.5c.2-.2.2-.3.3-.5s0-.4-.1-.6-.7-1.7-1-2.3c-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.9.4s-1.2 1.2-1.2 2.9 1.2 3.4 1.4 3.6c.2.2 2.3 3.5 5.6 4.9.8.4 1.5.6 2 .7.8.3 1.6.2 2.2.1.7-.1 1.8-.7 2.1-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.2-.6-.3Z"/></svg> Nous écrire sur WhatsApp</a>
                        <a class="facebook-button" href="https://www.facebook.com/share/1De6Fwm6js/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 1.9-5 5v3H6v4h3v4h4v-4h3l1-4h-4V9c0-.7.3-1 1-1Z"/></svg> Suivez-nous sur Facebook</a>
                    </div>

                </div>
            </section>
        </main>
        <footer class="site-footer">
            <div class="page-shell footer-inner">
                <span>Site créé par <a class="footer-credit" href="https://www.ibassoum.dev" target="_blank" rel="noopener noreferrer">Ibrahim Bassoum</a></span>
                <a href="{{ route('mentions-legales') }}">Mentions légales</a>
            </div>
        </footer>
    </body>
</html>
