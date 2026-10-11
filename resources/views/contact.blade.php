<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a class="button button-dark nav-contact" href="#formulaire"><span class="phone-icon">☎</span> Écrire un message</a>
                <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
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
                            <a href="tel:+22394184125"><span>☎</span><div><strong>Téléphone</strong><small>+223 94 18 41 25 · +223 50 15 80 93</small></div></a>
                            <a href="mailto:ibrahimbassoum981@gmail.com"><span>✉</span><div><strong>E-mail</strong><small>ibrahimbassoum981@gmail.com</small></div></a>
                            <div><span>⌖</span><div><strong>Localisation</strong><small>Bamako, Mali</small></div></div>
                        </div>
                        <a class="whatsapp-button" href="https://wa.me/22394184125?text=Bonjour%20Ferme%20Bassoum%2C%20je%20souhaite%20avoir%20des%20informations." target="_blank" rel="noopener">◉ &nbsp; Nous écrire sur WhatsApp</a>
                    </div>

                    <div id="formulaire" class="contact-form-card">
                        <h2>Envoyez-nous un message</h2>
                        @if (session('success'))
                            <div class="form-success">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="form-errors"><strong>Veuillez corriger les champs suivants :</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                        @endif
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <label for="name">Nom complet <span>*</span></label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required>
                            <label for="email">Adresse e-mail <span>*</span></label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                            <label for="phone">Téléphone</label>
                            <input id="phone" name="phone" type="tel" value="{{ old('phone') }}">
                            <label for="subject">Objet <span>*</span></label>
                            <input id="subject" name="subject" type="text" value="{{ old('subject') }}" required>
                            <label for="message">Votre message <span>*</span></label>
                            <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            <button class="button button-dark" type="submit">Envoyer le message <span>→</span></button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
