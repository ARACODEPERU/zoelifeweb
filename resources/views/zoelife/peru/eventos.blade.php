@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr-eventos " style="background-image:url({{ $banner->content }}); top: 10px;">

        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Eventos</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <div class="container" style="padding: 40px;">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;">
                    <a href="" class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px;"> <b>Inscripciones</b></a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>


            <!-- Left & right section start -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                        @foreach ($galeryEvents as $key => $ge)
                            @if ($key>0)
                            <li class="card-container col-md-3">
                                <div class="dez-box dez-gallery-box">
                                    <div class="dez-thum dez-img-overlay1 dez-img-effect">
                                        <a href="javascript:void(0);">
                                            <img src="{{ $ge->item->items[0]->content }}" alt="img">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <!--
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-link icon-bx-xs"></i>
                                                    </a>
                                                -->
                                                <a href="{{ $ge->item->items[0]->content }}" class="mfp-link"
                                                    title="Eventos">
                                                    <i class="fa fa-picture-o icon-bx-xs"></i> <b  style="color: #fff;">Zoom</b>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                    </div>
                  <div class="carousel-item">
                    <img src="https://assets-global.website-files.com/6410ebf8e483b5bb2c86eb27/6410ebf8e483b53d6186fc53_ABM%20College%20Web%20developer%20main.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://assets-global.website-files.com/6410ebf8e483b5bb2c86eb27/6410ebf8e483b53d6186fc53_ABM%20College%20Web%20developer%20main.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="" style="width: 100%; padding: 40px;">
                <!-- Gallery START -->

                <!-- Gallery END -->


                <!-- Pagination start -->
                <div class="pagination-bx">
                    <ul class="pagination">
                        <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a>
                        </li>
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">2</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Left & right section  END -->

        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
