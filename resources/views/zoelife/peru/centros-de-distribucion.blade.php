@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(themes/zoelife/peru/images/header-page/centrosPeru.jpg);">
        <!--
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
        -->
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html">Home</a></li>
                <li>Centros de Distribución</li>
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
                    <li data-filter="home" class="btn">
                        <input type="radio" >
                        <a href="#" class="site-button-secondry"><span>Builder</span></a> 
                    </li>
                    <li data-filter="office" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Electric</span></a> 
                    </li>
                    <li data-filter="commercial" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry "><span>Painting</span></a> 
                    </li>
                    <li data-filter="window" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Hammer</span></a> 
                    </li>
                </ul>
            </div>
            <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 home">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/gallery/pic1.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 office">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 commercial">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic3.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/gallery/pic3.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 window">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic4.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic4.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 home">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic5.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic5.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 office">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic6.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic6.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 commercial">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/gallery/pic1.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-lg-6 col-md-6 col-sm-6 col-6 window">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Gallery END -->
            <!-- Pagination start -->
            <div class="pagination-bx">
                <ul class="pagination">
                    <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Left & right section  END -->
    </div>

    <br>

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection