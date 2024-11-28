<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Aracode Smart Solutions" />
    <meta name="robots" content="" />
    <meta name="description" content="ZoeLife International - Perú" />
    <meta property="og:title" content="ZoeLife International - Perú" />
    <meta property="og:description" content="ZoeLife International - Perú" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('themes/zoelife/global/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/zoelife/global/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Colombia | ZoeLife International </title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width">

    <!--[if lt IE 9]>
 <script src="js/html5shiv.min.js"></script>
 <script src="js/respond.min.js"></script>
 <![endif]-->
 
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/zoelife/peru/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/zoelife/peru/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/zoelife/peru/css/templete.css') }}">
    <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('themes/zoelife/peru/css/skin/skin-9.css') }}">
    <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('themes/zoelife/peru/css/aracode.css') }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/zoelife/peru/plugins/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('themes/zoelife/peru/plugins/revolution/css/navigation.css') }}">

        
    <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('themes/zoelife/peru/plugins/bootstrap/css/bootstrap.min.css') }}">




</head>

<body id="bg">
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

    <div class="page-wraper">

        @yield('content')
        <!-- Back-to-Top end -->



        <button class="scroltop fa fa-arrow-up"></button>
    </div>
    <!-- JavaScript files ========================================= -->
    <script src="{{ asset('themes/zoelife/peru/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('themes/zoelife/peru/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('themes/zoelife/peru/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('themes/zoelife/peru/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('themes/zoelife/peru/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    {{-- <script src="{{ asset('themes/zoelife/peru/plugins/switcher/js/switcher.js') }}"></script><!-- SWITCHER JS  --> --}}
    <script src="{{ asset('themes/zoelife/peru/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('themes/zoelife/peru/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{ asset('themes/zoelife/peru/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}">
    </script>
    <script src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}">
    </script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script
        src="{{ asset('themes/zoelife/peru/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    <script src="{{ asset('themes/zoelife/peru/js/rev.slider.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_4();
        }); /*ready*/
    </script>

    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

     
    <style>
        /* Google Fonts - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        .img-flags{
            widows: 18px;
            height: 18px;
            border-radius: 50%;
            margin-top: -4px;
        }
        .slide-container{
        max-width: 1360px;
        width: 100%;
        padding: 40px 0;
        }
        .slide-content{
        margin: 0 40px;
        overflow: hidden;
        border-radius: 25px;
        }
        .card{
        border-radius: 25px;
        background-color: #FFF;
        }
        .image-content,
        .card-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 14px;
        }
        .image-content{
        position: relative;
        row-gap: 5px;
        padding: 25px 0;
        }
        .overlay{
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        /* background-color: #5A9F00; */
        background: rgb(2,100,16);
        background: linear-gradient(90deg, rgba(2,100,16,1) 0%, rgba(90,159,0,1) 50%, rgba(2,100,16,1) 100%);
        border-radius: 25px 25px 0 25px;
        }
        .overlay::before,
        .overlay::after{
        content: '';
        position: absolute;
        right: 0;
        bottom: -40px;
        height: 40px;
        width: 40px;
        background-color: rgb(2,100,16);
        }
        .overlay::after{
        border-radius: 0 25px 0 0;
        background-color: #FFF;
        }
        .card-image{
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: #FFF;
        padding: 3px;
        }
        .card-image .card-img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #5A9F00;
        }
        .name{
        font-size: 18px;
        font-weight: 500;
        color: #333;
        }
        .description{
        font-size: 14px;
        color: #707070;
        text-align: center;
        }
        .button{
        border: none;
        font-size: 16px;
        color: #FFF;
        padding: 8px 16px;
        background-color: #5A9F00;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        }
        .button:hover{
        background: #265DF2;
        }

        .swiper-navBtn{
        color: #5A9F00;
        transition: color 0.3s ease;
        }
        .swiper-navBtn:hover{
        color: #5A9F00;
        }
        .swiper-navBtn::before,
        .swiper-navBtn::after{
        font-size: 35px;
        }
        .swiper-button-next{
        right: 0;
        }
        .swiper-button-prev{
        left: 0;
        }
        .swiper-pagination-bullet{
        background-color: #6E93f7;
        opacity: 1;
        }
        .swiper-pagination-bullet-active{
        background-color: #4070F4;
        }

        @media screen and (max-width: 768px) {
        .slide-content{
            margin: 0 10px;
        }
        .swiper-navBtn{
            display: none;
        }
        }
    </style>

    <script>
        var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: true,
                centerSlide: 'true',
                fade: 'true',
                grabCursor: 'true',
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints:{
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>


    <div class="loading-area" style="display:none;">
        <div class="loading-box"></div>
        <div class="loading-pic"></div>
    </div>
</body>

</html>