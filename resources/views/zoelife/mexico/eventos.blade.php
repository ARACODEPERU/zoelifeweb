@extends('layouts.mexico')

@section('content')
    <!-- Encabezado inicio -->
    <x-mexico.header-area></x-mexico.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content" style="margin-top: 85px;">

        <div class="btn-header-pc">
            <br><br><br><br><br><br><br><br>
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <div class="breadcrumb-row" style="margin-top: 260px; position:relative; z-index:1;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Eventos</li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="btn-header-mobile">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Eventos</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <br><br><br>
        <div class="btn-header-pc">
            <div style="padding: 0px 10px;" >
                <section style="padding: 40px 10px;">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            @if (count($galeryEvents) > 0)
                                @foreach ($galeryEvents as $key => $event)
                                <div class="swiper-slide tranding-slide">
                                    <img src="{{ $event->item->items[0]->content }}" alt="" style="width: 100%;">
                                    {{-- <h3 style="text-align: center; margin-top: 10px;">{{ $star_video->title }}</h2> --}}
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="tranding-slider-control" style="margin-top: -160px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-2">
                                            <div class="swiper-button-prev slider-arrow" style="margin-top: -40px;">
                                            <ion-icon name="arrow-back-outline"></ion-icon>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="swiper-pagination" style="justify-content: center;"></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="swiper-button-next slider-arrow" style="margin-top: -40px;">
                                            <ion-icon name="arrow-forward-outline"></ion-icon>
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        
        <div class="btn-header-mobile">
            <div style="padding: 0px 10px;" >
                <section style="padding: 0px 10px;">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            @if (count($galeryEvents) > 0)
                                @foreach ($galeryEvents as $key => $event)
                                <div class="swiper-slide tranding-slide">
                                    <img src="{{ $event->item->items[0]->content }}" alt="" style="width: 100%;">
                                    {{-- <h3 style="text-align: center; margin-top: 10px;">{{ $star_video->title }}</h2> --}}
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="tranding-slider-control" style="margin-top: -160px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12" style="justify-content: center; justify-items: center;">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="swiper-button-prev slider-arrow" style="margin-top: -40px;">
                                        <ion-icon name="arrow-back-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="swiper-button-next slider-arrow" style="margin-top: -40px;">
                                        <ion-icon name="arrow-forward-outline"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        
        <div class="containe" style="padding: 40px;">
            <div class="row" style="justify-content: space-between">
                @if ( count($inscripcioncontacto) > 0 )
                <div class="col-md-3"></div>
                <div class="col-md-3" style="text-align: center; padding: 15px;">
                    <a href="{{ $inscripcioncontacto[0]->content }}" target="_blank" class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px; border-radius: 30px;">
                        <b><i class="fa fa-edit"aria-hidden="true"></i>&nbsp;&nbsp; Inscripciones</b>
                    </a>
                </div>
                <div class="col-md-3" style="text-align: center; padding: 15px;">
                    <a href="https://api.whatsapp.com/send?phone=51{{ $inscripcioncontacto[1]->content }}&text=Hola&nbsp;ZoeLife!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank"  class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px; border-radius: 30px;">
                        <b><i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;&nbsp; Más Información</b>
                    </a>
                </div>
                <div class="col-md-3"></div>
                @endif
            </div>
        </div>

        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  </div>



<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<!-- script del video -->
<script>
    var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2.5,
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    }
    });
</script>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

    .text-center {
    text-align: center;
    }

    .section-heading {
    font-size: 3rem;
    color: var(--primary);
    padding: 2rem;
    }

    #tranding {
    padding: 4rem 0;
    }

    @media (max-width:1440px) {
    #tranding {
    padding: 7rem 0;
    }
    }

    #tranding .tranding-slider {
    height: 52rem;
    padding: 2rem 0;
    position: relative;
    }

    @media (max-width:500px) {
    #tranding .tranding-slider {
    height: 45rem;
    }
    }

    .tranding-slide {
    width: 37rem;
    height: 42rem;
    position: relative;
    }

    @media (max-width:500px) {
    .tranding-slide {
    width: 28rem !important;
    height: 36rem !important;
    }
    .tranding-slide .tranding-slide-img iframe {
    width: 28rem !important;
    height: 36rem !important;
    }
    }

    .tranding-slide .tranding-slide-img iframe {
    width: 37rem;
    height: 42rem;
    border-radius: 2rem;
    object-fit: cover;
    }

    .tranding-slide .tranding-slide-content {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    }

    .tranding-slide-content .food-price {
    position: absolute;
    top: 2rem;
    right: 2rem;
    color: var(--white);
    }

    .tranding-slide-content .tranding-slide-content-bottom {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    color: var(--white);
    }

    .food-rating {
    padding-top: 1rem;
    display: flex;
    gap: 1rem;
    }

    .rating ion-icon {
    color: var(--primary);
    }

    .swiper-slide-shadow-left,
    .swiper-slide-shadow-right {
    display: none;
    }

    .tranding-slider-control {
    position: relative;
    bottom: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .tranding-slider-control .swiper-button-next {
    left: 58% !important;
    transform: translateX(-58%) !important;
    }

    @media (max-width:990px) {
    .tranding-slider-control .swiper-button-next {
    left: 70% !important;
    transform: translateX(-70%) !important;
    }
    }

    @media (max-width:450px) {
    .tranding-slider-control .swiper-button-next {
    left: 80% !important;
    transform: translateX(-80%) !important;
    }
    }

    @media (max-width:990px) {
    .tranding-slider-control .swiper-button-prev {
    left: 30% !important;
    transform: translateX(-30%) !important;
    }
    }

    @media (max-width:450px) {
    .tranding-slider-control .swiper-button-prev {
    left: 20% !important;
    transform: translateX(-20%) !important;
    }
    }

    .tranding-slider-control .slider-arrow {
    background: var(--white);
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 50%;
    left: 42%;
    transform: translateX(-42%);
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .slider-arrow ion-icon {
    font-size: 2rem;
    color: #222224;
    }

    .tranding-slider-control .slider-arrow::after {
    content: '';
    }

    .tranding-slider-control .swiper-pagination {
    position: relative;
    width: 15rem;
    bottom: 1rem;
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
    background: var(--primary);
    }
</style>

        <style>
            .paginator_aracode {
            transition: opacity 0.5s;
            }
        </style>
            <script>

                    var intervalID;
                    function startInterval() {
                    intervalID = setInterval(function() {
                        paginator_np("n");
                    }, 3000);
                    }

                    function stopInterval() {
                    clearInterval(intervalID);
                    }

                var elementoHTML = document.getElementById("carrusel_aracode");

                elementoHTML.addEventListener("mouseenter", stopInterval);
                elementoHTML.addEventListener("mouseleave", startInterval);
                function paginator(n){
                    var elements = document.querySelectorAll(".paginator_aracode");
                    for (var i = 0; i < elements.length; i++) {
                    elements[i].hidden = true;
                    }
                    document.getElementById(n+"_pag").hidden=false;
                    var elements = document.querySelectorAll(".numpag");

                    for (var i = 0; i < elements.length; i++) {
                    elements[i].classList.remove("active");
                    }

                    var targetElement = document.getElementById(n + "_numpag");
                    targetElement.classList.add("active");
                }

                function paginator_np(n){
                    var elements = document.querySelectorAll(".paginator_aracode");
                    var id;
                    for (var i = 0; i < elements.length; i++) {
                    if (!elements[i].hidden) {
                        id = elements[i].id;
                        console.log("El ID del elemento sin atributo hidden es: " + id);
                        break; // Rompe el bucle una vez que se encuentra el primer elemento sin hidden
                    }
                    }
                    var pagina = id;
                    var numero = parseInt(pagina.match(/\d+/)[0]);

                    if(n=="p"){
                        if(numero>1)paginator(--numero);
                    }
                    if(n=="n"){
                            if(document.getElementById((numero+1)+"_pag")){
                            paginator(++numero);
                            }else{
                                paginator(1);
                            }
                    }
                }
            </script>
        
    <!-- Footer -->
    <x-mexico.footer-area></x-mexico.footer-area>
    <!-- Footer END-->
@endsection
