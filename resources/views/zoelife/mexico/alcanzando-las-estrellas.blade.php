@extends('layouts.mexico')

@section('content')
    <!-- Encabezado inicio -->
    <x-mexico.header-area></x-mexico.header-area>
    <!-- Encabezado fin -->


    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ $banner->content }});">

        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.html">Home</a></li>
                    <li>Alcanzando las Estrellas</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->


        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">

                <!-- Gallery -->
                <div class="site-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Todos</span></a>
                        </li>
                        <li data-filter="donaciones" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Donaciones</span></a>
                        </li>
                        <li data-filter="niños" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Niños</span></a>
                        </li>
                        <li data-filter="adolescentes" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry "><span>Adolescentes</span></a>
                        </li>
                    </ul>
                </div>
                <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/01.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/01.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/02.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/02.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/03.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/03.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/04.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/04.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/05.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/05.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/06.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/06.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/07.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/07.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 niños">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/09.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 niños">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/10.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 adolescentes">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/11.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 adolescentes">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/12.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/13.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/14.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
                                            title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-md-4 donaciones">
                        <div class="dez-box dez-gallery-box">
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img
                                        src="/themes/zoelife/mexico/images/gallery/estrellas/15.jpg" alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i
                                                class="fa fa-link icon-bx-xs"></i> </a> <a
                                            href="/themes/zoelife/mexico/images/gallery/estrellas/08.jpg" class="mfp-link"
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
        </div>


        <!-- Paises / STAR -->
        <x-countries-section />
        <!-- Paises / END -->

    </div>
    <!-- Content END-->


    <!-- Footer -->
    <x-ecuador.footer-area />
    <!-- Footer END-->
@endsection
