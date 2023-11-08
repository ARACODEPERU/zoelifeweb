@extends('layouts.zoelife')
@section('content')

    <!--========== Header ==============-->
    <header id="gen-header" class="gen-header-style-1 gen-has-sticky">
        <div class="gen-bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">
                                <img class="img-fluid logo" src="{{ asset('themes/zoelife/global/images/logoChico.png') }}"
                                    alt="streamlab-image">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="gen-menu-contain" class="gen-menu-contain">
                                    <ul id="gen-main-menu" class="navbar-nav ml-auto">
                                        <!--
                                        <li class="menu-item active">
                                            <a href="#" aria-current="page">Home</a>
                                            <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="index.html" aria-current="page">Main Home</a>
                                                </li>
                                                <li class="menu-item active">
                                                    <a href="movies-home.html" aria-current="page">Movies Home</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="tv-shows-home.html" aria-current="page">Tv Shows Home</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="video-home.html" aria-current="page">Video Home</a>
                                                </li>
                                            </ul>
                                        </li>
                                        -->
                                        <li>
                                            <a href="#" aria-current="page">
                                                <img style="width: 25px;" src="{{ asset('themes/zoelife/global/images/flags/peru.png') }}" alt="">
                                                &nbsp;Perú
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page">
                                                <img style="width: 25px;" src="{{ asset('themes/zoelife/global/images/flags/bolivia.png') }}" alt="">
                                                &nbsp;Bolivia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page">
                                                <img style="width: 25px;" src="{{ asset('themes/zoelife/global/images/flags/ecuador.png') }}" alt="">
                                                &nbsp;Ecuador
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page">
                                                <img style="width: 25px;" src="{{ asset('themes/zoelife/global/images/flags/colombia.png') }}" alt="">
                                                &nbsp;Colombia
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page">
                                                <img style="width: 25px;" src="{{ asset('themes/zoelife/global/images/flags/mexico.png') }}" alt="">
                                                &nbsp;Mexico
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gen-header-info-box">
                                <div class="gen-menu-search-block">
                                    <a href="javascript:void(0)" id="gen-seacrh-btn"><i class="fa fa-search"></i></a>
                                    <div class="gen-search-form">
                                        <form role="search" method="get" class="search-form" action="#">
                                            <label>
                                                <span class="screen-reader-text"></span>
                                                <input type="search" class="search-field" placeholder="Search …"
                                                    value="" name="s">
                                            </label>
                                            <button type="submit" class="search-submit"><span
                                                    class="screen-reader-text"></span></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="gen-account-holder">
                                    <a href="" id="gen-user-btn"><i class="fa fa-leaf"></i></a>
                                </div>
                                <div class="gen-btn-container">
                                    <a href="https://zoelife.global/LoginSalesForce.php" class="gen-button">
                                        <div class="gen-button-block">
                                            <span class="gen-button-line-left"></span>
                                            <span class="gen-button">
                                                <i class="fa fa-laptop"></i>
                                                Oficina Virtual
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--========== Header ==============-->

    <!-- owl-carousel Banner Start -->
    <section class="pt-0 pb-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="gen-banner-movies">
                        <div class="owl-carousel " data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1"
                            data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                            <div class="item"
                                style="background: url('{{ asset('themes/zoelife/global/images/background/peru.jpg') }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Perú</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p>
                                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1">
                                                        <a href="single-movie.html" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2">
                                                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                                            class="gen-button popup-youtube popup-vimeo popup-gmaps gen-button-link">
                                                            <i aria-hidden="true" class="fa fa-play"></i> <span
                                                                class="text">Banco de Testimonios</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item"
                                style="background: url('{{ asset('themes/zoelife/global/images/background/bolivia.jpg') }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Bolivia</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p>
                                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1">
                                                        <a href="single-movie.html" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2">
                                                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                                            class="gen-button popup-youtube popup-vimeo popup-gmaps gen-button-link">
                                                            <i aria-hidden="true" class="fa fa-play"></i> <span
                                                                class="text">Banco de Testimonios</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item"
                                style="background: url('{{ asset('themes/zoelife/global/images/background/ecuador.jpg') }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Ecuador</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p>
                                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1">
                                                        <a href="single-movie.html" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2">
                                                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                                            class="gen-button popup-youtube popup-vimeo popup-gmaps gen-button-link">
                                                            <i aria-hidden="true" class="fa fa-play"></i> <span
                                                                class="text">Banco de Testimonios</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item"
                                style="background: url('{{ asset('themes/zoelife/global/images/background/colombia.jpg') }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Colombia</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p>
                                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1">
                                                        <a href="single-movie.html" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2">
                                                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                                            class="gen-button popup-youtube popup-vimeo popup-gmaps gen-button-link">
                                                            <i aria-hidden="true" class="fa fa-play"></i> <span
                                                                class="text">Banco de Testimonios</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item"
                                style="background: url('{{ asset('themes/zoelife/global/images/background/mexico.jpg') }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Mexico</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p>
                                                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1">
                                                        <a href="single-movie.html" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2">
                                                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                                            class="gen-button popup-youtube popup-vimeo popup-gmaps gen-button-link">
                                                            <i aria-hidden="true" class="fa fa-play"></i> <span
                                                                class="text">Banco de Testimonios</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- owl-carousel Banner End -->

    <!-- owl-carousel Videos Section-1 Start 
    <section class="gen-section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <h4 class="gen-heading-title">Most Popular</h4>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
                    <div class="gen-movie-action">
                        <div class="gen-btn-container text-right">
                            <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                                <span class="text">More Videos</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <div
                            class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                <div class="gen-movie-contain">
                                    <div class="gen-movie-img">
                                        <img src="{{ asset('themes/zoelife/global/images/background/asset-53.jpg') }}"
                                            alt="owl-carousel-video-image">
                                        <div class="gen-movie-add">
                                            <div class="wpulike wpulike-heart">
                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                    <button type="button"
                                                        class="wp_ulike_btn wp_ulike_put_image"></button>
                                                </div>
                                            </div>
                                            <ul class="menu bottomRight">
                                                <li class="share top">
                                                    <i class="fa fa-share-alt"></i>
                                                    <ul class="submenu">
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-instagram"></i></a>
                                                        </li>
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                <a class="dropdown-toggle" href="#"
                                                    data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                <div class="dropdown-menu mCustomScrollbar">
                                                    <div class="mCustomScrollBox">
                                                        <div class="mCSB_container">
                                                            <a class="login-link" href="register.html">Sign in
                                                                to add this
                                                                movie to a
                                                                playlist.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gen-movie-action">
                                            <a href="single-movie.html" class="gen-button">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gen-info-contain">
                                        <div class="gen-movie-info">
                                            <h3><a href="single-movie.html">My Generation</a>
                                            </h3>
                                        </div>
                                        <div class="gen-movie-meta-holder">
                                            <ul>
                                                <li>1hr 24 mins</li>
                                                <li>
                                                    <a href="action.html"><span>Action</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- owl-carousel Videos Section-1 End -->

    <!-- footer start -->
    <footer id="gen-footer">
        <div class="gen-footer-style-1">
            <!--
            <div class="gen-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{ asset('themes/zoelife/global/images/logo-1.png') }}"
                                            class="gen-footer-logo" alt="gen-footer-logo">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <ul class="social-link">
                                            <li><a href="#" class="facebook"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="facebook"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" class="facebook"><i class="fab fa-skype"></i></a>
                                            </li>
                                            <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Explore</h4>
                                <div class="menu-explore-container">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="index.html" aria-current="page">Home</a>
                                        </li>
                                        <li class="menu-item"><a href="movies-pagination.html">Movies</a></li>
                                        <li class="menu-item"><a href="tv-shows-pagination.html">Tv Shows</a></li>
                                        <li class="menu-item"><a href="video-pagination.html">Videos</a></li>
                                        <li class="menu-item"><a href="#">Actors</a></li>
                                        <li class="menu-item"><a href="#">Basketball</a></li>
                                        <li class="menu-item"><a href="#">Celebrity</a></li>
                                        <li class="menu-item"><a href="#">Cross</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Company</h4>
                                <div class="menu-about-container">
                                    <ul class="menu">
                                        <li class="menu-item"><a href="contact-us.html">Company</a>
                                        </li>
                                        <li class="menu-item"><a href="contact-us.html">Privacy
                                                Policy</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Terms Of
                                                Use</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Help
                                                Center</a></li>
                                        <li class="menu-item"><a href="contact-us.html">contact us</a></li>
                                        <li class="menu-item"><a href="pricing-style-1.html">Subscribe</a></li>
                                        <li class="menu-item"><a href="#">Our Team</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Faq</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Downlaod App</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">
                                            <img src="{{ asset('themes/zoelife/global/images/asset-2.png') }}"
                                                class="gen-playstore-logo" alt="playstore">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('themes/zoelife/global/images/asset-2.png') }}"
                                                class="gen-appstore-logo" alt="appstore">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="gen-copyright-footer" style="background-color: #026410;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center">
                            <span class="gen-copyright"> Copyright 2023 Zoelife International
                                | Desarrollado por <a target="_blank" href="#"> Aracode  </a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->

    <!-- Back-to-Top start -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
@stop
