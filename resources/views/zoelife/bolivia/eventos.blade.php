@extends('layouts.bolivia')

@section('content')
    <!-- Encabezado inicio -->
    <x-bolivia.header-area></x-bolivia.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content" style="margin-top: 85px;">

        <!-- Slider -->
        <section>
            <div class="main-slider style-two default-banner">
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                                data-alias="news-gallery36" data-source="gallery"
                                style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                                <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner ara_centrado_total" style="display:none;"
                                    data-version="5.3.0.2">
                                    <ul>
                                        @foreach ($slider as $k => $row)
                                            <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default"
                                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default" data-masterspeed="default"
                                                data-thumb="{{ $row->content }}" data-rotate="0" data-fstransition="fade"
                                                data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                                                data-title="" data-param1="" data-param2="" data-param3=""
                                                data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                                data-param9="" data-param10="" class="ara_centrado_total" style="width: 100%;">
                                                <img width="100%;" src="{{ $row->content }}" alt="" data-bgposition="center center"
                                                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                                        class="rev-slidebg" data-no-retina="" style="background-size: cover; background-position: center; width: 100%; height: auto;"
                                                />
                                                
                                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1"
                                                    data-x="['center','center','center','center']"
                                                    data-hoffset="['0','0','0','0']"
                                                    data-y="['middle','middle','middle','middle']"
                                                    data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                                    data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                                                    data-responsive_offset="off" data-responsive="off"
                                                    data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                                    data-paddingleft="[0,0,0,0]"
                                                    style="z-index: 2;">
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- Slider END -->
    
        <div class="btn-header-mobile">
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Inicia Tu Emprendimiento</li>
                    </ul>
                </div>
            </div>
        </div>

        <section style="padding: 20px 15px;">
            <div class="container-xl">
                <div class="row">
                    @foreach ($beneficios as $key => $beneficio )
                        <div class="col-md-4" style="padding: 20px;">
                            <div class="card text-center mb-3 box-beneficios-emprendimiento" style="padding-bottom: 10px;">
                                <img src="{{ $beneficio->item->items[0]->content }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title title-green">{{ $beneficio->item->items[1]->content }}</h5>
                                    <p class="card-text">
                                        {{ $beneficio->item->items[2]->content }}
                                    </p>
                                    {{-- <br>
                                    <a target="_blank" href="{{ $beneficio->item->items[3]->content }}" class="btn-green">Conoce más</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div style="text-align: center;">
                            <a href="https://api.whatsapp.com/send?phone=51992914870&text=Hola&nbsp;ZoeLife!&nbsp;me&nbsp;pueden&nbsp;ayudar?"
                                target="_blank" class="btn-green">
                                <i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;&nbsp; Más información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>

        <div class="section-full bg-img-fix p-t90 p-b90 overlay-black-middle choose-us"
            style="background-image:url({{ $formasTitle[0]->content }});">
            <div class="container" style="padding: 20px; z-index: 999;">
                <div class="section-head text-center text-white" style="padding: 10px;">
                    <h2 class="h2 text-uppercase">{{ $formasTitle[1]->content }} <span style="color: #fecc00;"> {{ $formasTitle[2]->content }}</span></h2>
                    <div class="dez-separator  style-icon border-white">
                        <img alt="img-ganar" src="{{ asset('themes/zoelife/peru/images/leaf-green.png') }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img style="width: 100%;" src="{{ $formasTitle[3]->content }}" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="box-ganar">
                            <ul class="list-group list-group-flush">
                                @foreach ($formasContenido as $key => $contenido )
                                    <li class="list-group-item d-flex" style="font-size: 18px;">
                                        <i class="fa fa-money" aria-hidden="true"></i>&nbsp; {{ $contenido->item->items[0]->content }}
                                        {{-- <a href="{{ $contenido->item->items[1]->content }}">
                                            <span class="badge text-bg-primary rounded-pill" style="padding: 5px 15px; background: #5A9F00 !important;">
                                                <i class="fa fa-play"></i> Video
                                            </span>
                                        </a> --}}
                                    </li>
                                @endforeach
                                {{-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Vas a ganar cheques de reconocimiento por alcanzar un rango.
                                    <a href="">
                                        <span class="badge text-bg-primary rounded-pill" style="padding: 5px 15px; background: #5A9F00 !important;">
                                            <i class="fa fa-play"></i> Video
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Vas a tener grandes descuentos en la compra de productos.
                                    <a href="">
                                        <span class="badge text-bg-primary rounded-pill" style="padding: 5px 15px; background: #5A9F00 !important;">
                                            <i class="fa fa-play"></i> Video
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Vas a ganar viajes nacionales e internaconales por calificación.
                                    <a href="">
                                        <span class="badge text-bg-primary rounded-pill" style="padding: 5px 15px; background: #5A9F00 !important;">
                                            <i class="fa fa-play"></i> Video
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Vas a ganar por afiliar a una persona nueva.
                                    <a href="">
                                        <span class="badge text-bg-primary rounded-pill" style="padding: 5px 15px; background: #5A9F00 !important;">
                                            <i class="fa fa-play"></i> Video
                                        </span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>





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
    <x-bolivia.footer-area></x-bolivia.footer-area>
    <!-- Footer END-->
@endsection
