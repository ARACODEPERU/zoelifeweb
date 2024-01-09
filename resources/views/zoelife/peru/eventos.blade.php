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
            <div class="" style="width: 100%; padding: 40px;">

                <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/01.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/01.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/02.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/02.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/03.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/03.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/04.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/04.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/12.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/13.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/14.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-3">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="themes/zoelife/peru/images/gallery/estrellas/15.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="themes/zoelife/peru/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
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
