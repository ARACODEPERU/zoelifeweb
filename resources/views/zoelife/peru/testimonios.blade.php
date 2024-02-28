@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner | Medidas 1920 x 300 pixeles -->
        <div class="dez-bnr-inr" style="background-image:url({{ $banner->content }});"></div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Testimonios</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <div class="content-area" style="width: 100%; padding: 60px;">
            <!-- Left & right section start -->
            <div>
              {{-- @foreach ($testimonies as $key => $star_video)
                    {!! $star_video->video !!}
              @endforeach --}}

              <section>
                        <div>
                          <div class="swiper tranding-slider">
                            <div class="swiper-wrapper">
                              <!-- Slide-start -->
                              @foreach ($testimonies as $key => $star_video)
                                <div class="swiper-slide tranding-slide">
                                  <div  style=" width: 100%; height: 250px;">
                                    {!! $star_video->video !!}
                                    <h3 style="text-align: center; margin-top: 10px;">{{ $star_video->title }}</h2>
                                  </div>
                                </div>
                               @endforeach
                              <!-- Slide-end -->
                            </div>

                            <div class="tranding-slider-control" style="margin-top: -210px;">
                              <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                              </div>
                              <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                              </div>
                              <div class="swiper-pagination"></div>
                            </div>

                          </div>
                        </div>
              </section>

              <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
              <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
              <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


{{--
                <!-- Gallery -->
                <div class="site-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Todos</span></a>
                        </li>
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <li data-filter="{{ $product->name }}" class="btn">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>{{ $product->name }}</span></a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                    @if (count($testimonies) > 0)
                        @foreach ($testimonies as $testimony)
                            <li class="card-container col-md-3 {{ $testimony->product->name }}" style="padding: 15px;">
                                <div class="aracode-box-with">
                                    <div class="dez-post-media dez-img-effect zoom-slow">
                                        {!! $testimony->video !!}
                                    </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-title ">
                                            <h3 class="post-title"><a href="">{{ $testimony->title }}</a></h3>
                                        </div>
                                        <div class="dez-post-tags">
                                            <div class="post-tags">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul> --}}
                <!-- Gallery END -->
                <!-- Pagination start -->
                {{-- <div class="pagination-bx">
                    <ul class="pagination">
                        <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a>
                        </li>
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">2</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div> --}}
                <!-- Pagination END -->
            </div>
            <!-- Left & right section  END -->
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
        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
