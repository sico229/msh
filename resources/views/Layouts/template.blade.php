<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Transfert d'argent rapide et efficace par les africains pour l'Afrique" />
    <meta name="keywords" content="Money Transfert, Africa, Low cost, Transfert, Argent" />
    <link rel="stylesheet" href="/css/app.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    @yield('styles')
    <title>Transfert</title>
</head>

<body>
    <header>
        <a href="">
            &nbsp;
        </a>
        <input type="checkbox" name="menu" id="hamberger">
        <label for="hamberger"><span>&nbsp;</span></label>

        @include('Layouts.nav')
    </header>
    @yield('contenu')
    @include('Layouts.footer')
    @if (!Cookie('AcceptCookie'))
        <div id="cookie">
            <h4>Paramètres des Cookies</h4>
            <p>Nous et nos tiers utilisons des cookies et d'autres technologies similaires sur ce site Web à diverses
                fins - par exemple, pour maintenir la sécurité, permettre le choix de l'utilisateur, améliorer nos sites
                et afficher des publicités correspondant à vos intérêts. Les informations traitées incluent vos données
                personnelles telles que l'adresse IP ou les informations du navigateur. Vous pouvez en savoir plus sur
                la façon dont ce site utilise les cookies en lisant notre Avis sur les cookies.</p>
            <p>En cliquant sur "Accepter les cookies", vous acceptez le placement et l'utilisation de tous les cookies
                et technologies similaires disponibles sur ce site Web.</p>
            <p>Vous pouvez changer d'avis et revoir vos préférences à tout moment en accédant au lien "Préférences en
                matière de cookies" en pied de page de ce site.</p>

            <div>
                <button value="accepted" class="btn cookieChoice accepter">Accepter</button>
                <button value="" class="btn cookieChoice refuser">Refuser tout</button>
            </div>
        </div>
    @else
        <div id="cookie" style="display: none"></div>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"
        integrity="sha512-epzJ9ms+0Pq+zFMrG1lXVNvjEXgtfKx9iuEWqz3hmbaU2m/Dp1pcmpYzuSdDLqX6PMIjzMOyGFwMc+SkgFhMFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script type="module" src="{{ asset('js/module.js') }}"></script>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
