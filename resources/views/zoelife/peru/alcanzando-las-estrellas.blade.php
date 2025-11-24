@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    {{-- <x-peru.header-area></x-peru.header-area> --}}
    <!-- Encabezado fin -->

    <x-peru-header />
    <!-- Content -->
    <div class="page-content">

      <div class="btn-header-pc">
          <div class="dez-bnr-inr ara_centrado_total">
              <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
          </div>
          <div class="breadcrumb-row" style="position:relative; z-index:1;">
              <div class="container-xxl">
                  <ul class="list-inline">
                      <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                      <li>Alcanzando las estrellas</li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="btn-header-mobile">
          <div class="breadcrumb-row" style="margin-top: 0px;">
              <div class="container">
                  <ul class="list-inline">
                      <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                      <li>Alcanzando las estrellas</li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="content-area" style="padding: 10px 20px;">
          <div class="container-xxl">
            @if ( count($presentacion) > 0)
              <div class="p-a20 bg-white selector-d m-b20 box-elevado">
                <div class="section-content" style="text-align: center;">
                    <div class="m-b10">
                        <h3 class="text-uppercas" style="color: #00b01a;"><b>{{ $presentacion[0]->content }}</b></h3>
                        <p>{{ $presentacion[1]->content }}</p>
                        <div class="dez-divider divider-2p icon-center" style="background: #00b01a;">
                          <i class="fa fa-truck text-white" style="background: #00b01a;"></i></div>
                    </div>
                </div>
              </div>
            @endif
          </div>
      </div>

      <div class="btn-header-pc">
        <section style="padding: 60px 30px;">
          <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
              <!-- Slide-start -->
                @if ( count($stars) > 0)
                    @foreach ($stars as $key => $star)
                        <div class="swiper-slide tranding-slide">
                        <div  style=" width: 100%; height: 250px;">
                            <img src="{{ $star->item->items[0]->content }}" alt="img">
                            {{-- <h3 style="text-align: center; margin-top: 10px;">{{ $star_video->title }}</h2> --}}
                        </div>
                        </div>
                    @endforeach
                @endif
              <!-- Slide-end -->
            </div>

            <div class="tranding-slider-control" style="margin-top: -150px;">
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

      <div class="btn-header-mobile">
        <section style="padding: 20px 10px;">
          <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
              <!-- Slide-start -->
                @if ( count($stars) > 0)
                    @foreach ($stars as $key => $star)
                        <div class="swiper-slide tranding-slide">
                        <div  style=" width: 100%; height: 250px;">
                            <img src="{{ $star->item->items[0]->content }}" alt="img">
                            {{-- <h3 style="text-align: center; margin-top: 10px;">{{ $star_video->title }}</h2> --}}
                        </div>
                        </div>
                    @endforeach
                @endif
              <!-- Slide-end -->
            </div>
            <div class="tranding-slider-control" style="margin-top: -230px;">
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

      <br>

      <div class="btn-header-pc">
        <section  style="padding: 80px 30px;">
          <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
              <!-- Slide-start -->
                  @if ( count($star_videos) > 0 )
                      @foreach ($star_videos as $key => $star_video)
                          <div class="swiper-slide tranding-slide">
                          <div  style=" width: 100%; height: 250px;">
                              {!! $star_video->item->items[0]->content !!}
                              {{-- <h3 style="text-align: center; margin-top: 10px;">{{ $star_video->title }}</h2> --}}
                          </div>
                          </div>
                      @endforeach
                  @endif
              <!-- Slide-end -->
            </div>

            <div class="tranding-slider-control" style="margin-top: -260px;">
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
      
      <div class="btn-header-mobile">
        <section  style="padding: 80px 10px;">
          <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
                  @if ( count($star_videos) > 0 )
                      @foreach ($star_videos as $key => $star_video)
                          <div class="swiper-slide tranding-slide">
                          <div  style=" width: 100%; height: 250px;">
                              {!! $star_video->item->items[0]->content !!}
                              {{-- <h3 style="text-align: center; margin-top: 10px;">{{ $star_video->title }}</h2> --}}
                          </div>
                          </div>
                      @endforeach
                  @endif
            </div>
            <div class="tranding-slider-control" style="margin-top: -280px;">
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


/*
html {
font-size: 62.5%;
font-family: "Montserrat", sans-serif;
scroll-behavior: smooth;
}

@media (min-width: 1440px) {
html {
zoom: 1.5;
}
}

@media (min-width: 2560px) {
html {
zoom: 1.7;
}
}

@media (min-width: 3860px) {
html {
zoom: 2.5;
}
}


::-webkit-scrollbar {
width: 1.3rem;
}

::-webkit-scrollbar-thumb {
border-radius: 1rem;
background: #797979;
transition: all 0.5s ease-in-out;
}

::-webkit-scrollbar-thumb:hover {
background: #222224;
}

::-webkit-scrollbar-track {
background: #f9f9f9;
}*/

/*body {
font-size: 1.6rem;
background: var(--bg);
}

.container {
max-width: 124rem;
padding: 0 1rem;
margin: 0 auto;
}
*/

.text-center {
text-align: center;
}

.section-heading {
font-size: 3rem;
color: var(--primary);
padding: 2rem 0;
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

<!-- CARRUSEL FIN -->

<div class="container" style="padding: 40px;">
    <div class="row" style="justify-content: space-between">
        <div class="col-md-2"></div>
        <div class="col-md-4" style="text-align: center;">
            <a href="https://ninosperu.wixsite.com/sagradafamilia" target="_blank"  class="btn-green">
                <b><i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;&nbsp; Más Información</b>
            </a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
    <!-- Content END-->


    <!-- Footer -->
    <x-peru.footer-area />
    <!-- Footer END-->
@endsection
