<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="ZoeLife Perú" />
    <meta name="description" content="ZoeLife Perú" />
    <meta name="author" content="Aracode Smart Solution" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ZoeLife International</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('themes/zoelife/global/images/favicon.png') }}">
    <!-- CSS bootstrap-->
    <link rel="stylesheet" href="{{ asset('themes/zoelife/global/css/bootstrap.min.css') }}" />
    <!--  Style -->
    <link rel="stylesheet" href="{{ asset('themes/zoelife/global/css/style.css') }}" />
    <!--  Responsive -->
    <link rel="stylesheet" href="{{ asset('themes/zoelife/global/css/responsive.css') }}" />
</head>

<body>
<!-- COOKIES -->

<div id="cookie-consent" class="cookiesMessage_cookiesDisclaimer__pF8_x">
    <h5 class="cookiesMessage_cookiesDisclaimerHeader__y_YCo">USO DE COOKIES</h5>
    <p class="cookiesMessage_cookiesDisclaimerBody__nxps1">Usamos cookies propias y de terceros para funciones esenciales
        de este sitio y mejorar tu experiencia al navegar por <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>.
        Revisa nuestro<!-- --> <a target="_blank" href="{{ route('cookies_policy') }}">Aviso de Cookies</a> para obtener
        más información al respecto.</p>
    <div class="cookiesMessage_cookiesDisclaimerButton__NwcdV">
        <button id="accept-cookies" class="cookiesMessage_cookiesDisclaimerButtonAccept__u3I5b"
            type="button">Aceptar</button>
    </div>
</div>
<style>
    .cookiesMessage_cookiesDisclaimer__pF8_x {
        display: flex;
        flex-direction: column;
        gap: 18px;
        font-family: Barlow, sans-serif;
        background-color: hsla(0, 0%, 100%, .9);
        position: fixed;
        color: #464646;
        bottom: 0;
        width: 100%;
        padding: 1rem 6rem;
        z-index: 999999;
        box-sizing: border-box;
    }
</style>

<script>
    document.getElementById('cookie-consent').style.display = "none";
    document.addEventListener('DOMContentLoaded', function() {
        const cookieConsent = document.getElementById('cookie-consent');
        const acceptButton = document.getElementById('accept-cookies');
        var consent = localStorage.getItem('cookieConsent');
        if (!(consent === 'true')) {
            cookieConsent.style.display = "block";
        }

        function showCookieConsent() {
            if (localStorage.getItem('cookieConsent') !== 'true') {
                cookieConsent.classList.remove('hidden');
                setTimeout(() => {
                    cookieConsent.style.transform = 'translateY(0)';
                    cookieConsent.style.opacity = '1';
                }, 100);
            }
        }

        function hideCookieConsent() {
            cookieConsent.style.transform = 'translateY(100%)';
            cookieConsent.style.display = 'none';
            setTimeout(() => {
                cookieConsent.classList.add('hidden');
            }, 300);
        }

        function acceptCookies() {
            localStorage.setItem('cookieConsent', 'true');
            hideCookieConsent();
        }

        acceptButton.addEventListener('click', acceptCookies);

        showCookieConsent();
    });
</script>

<!-- Fin de Cookies -->

    @yield('content')
    <!-- Back-to-Top end -->

    <!-- js-min -->
    <script src="{{ asset('themes/zoelife/global/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('themes/zoelife/global/js/asyncloader.min.js') }}"></script>
    <!-- JS bootstrap -->
    <script src="{{ asset('themes/zoelife/global/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel -->
    <script src="{{ asset('themes/zoelife/global/js/owl.carousel.min.js') }}"></script>
    <!-- counter-js -->
    <script src="{{ asset('themes/zoelife/global/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('themes/zoelife/global/js/jquery.counterup.min.js') }}"></script>
    <!-- popper-js -->
    <script src="{{ asset('themes/zoelife/global/js/popper.min.js') }}"></script>
    <script src="{{ asset('themes/zoelife/global/js/swiper-bundle.min.js') }}"></script>
    <!-- Iscotop -->
    <script src="{{ asset('themes/zoelife/global/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('themes/zoelife/global/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('themes/zoelife/global/js/slick.min.js') }}"></script>

    <script src="{{ asset('themes/zoelife/global/js/streamlab-core.js') }}"></script>

    <script src="{{ asset('themes/zoelife/global/js/script.js') }}"></script>


</body>

</html>
