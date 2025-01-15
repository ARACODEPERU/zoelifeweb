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
                                        @foreach ($pages as $page)
                                            <li class="menu-item">
                                                <a href=" {{ route($page->route) }} " aria-current="page">
                                                    @if ($page->country)
                                                        <img style="width: 25px;" src="{{ $page->country->icon }}"
                                                            alt="">
                                                        &nbsp;{{ $page->country->description }}
                                                    @else
                                                        SIN PAIS
                                                    @endif
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="gen-header-info-box">
                                <!--
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
                                -->
                                <div class="gen-account-holder">
                                    <a href="" id="gen-user-btn"><i class="fa fa-leaf"></i></a>
                                </div>
                                <!--
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
                                -->
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
                                style="background: url('{{ $paisesintro[0]->content }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-7">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Perú</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p style="font-size: 24px;  line-height: 35px;">
                                                        {{ $paisesintro[1]->content }}
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="{{ route('web_peru_inicio') }}" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="https://zoelife.global/LoginSalesForce.php" class="gen-button">
                                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                                            <span class="text">Oficina Virtual</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2" style="padding: 10px 5px;">
                                                        <a href="{{ $paisesintro[2]->content }}"
                                                            class="gen-button gen-button-link">
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
                                style="background: url('{{ $paisesintro[3]->content }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-7">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Bolivia</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p style="font-size: 24px;  line-height: 35px;">
                                                        {{ $paisesintro[4]->content }}
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="{{ route('web_bolivia_inicio') }}" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="https://zoelife.global/LoginSalesForce.php" class="gen-button">
                                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                                            <span class="text">Oficina Virtual</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2" style="padding: 10px 5px;">
                                                        <a href="{{ $paisesintro[5]->content }}"
                                                            class="gen-button  gen-button-link">
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
                                style="background: url('{{ $paisesintro[6]->content }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-7">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Ecuador</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p style="font-size: 24px;  line-height: 35px;">
                                                        {{ $paisesintro[7]->content }}
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="{{ route('web_ecuador_inicio') }}" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="https://zoelife.global/LoginSalesForce.php" class="gen-button">
                                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                                            <span class="text">Oficina Virtual</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2" style="padding: 10px 5px;">
                                                        <a href="{{ $paisesintro[8]->content }}"
                                                            class="gen-button gen-button-link">
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
                                style="background: url('{{ $paisesintro[9]->content }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-7">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Colombia</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p style="font-size: 24px;  line-height: 35px;">
                                                        {{ $paisesintro[10]->content }}
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="{{ route('web_colombia_inicio') }}" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="https://zoelife.global/LoginSalesForce.php" class="gen-button">
                                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                                            <span class="text">Oficina Virtual</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2" style="padding: 10px 5px;">
                                                        <a href="{{ $paisesintro[11]->content }}"
                                                            class="gen-button gen-button-link">
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
                                style="background: url('{{ $paisesintro[12]->content }}')">
                                <div class="gen-movie-contain h-100">
                                    <div class="container h-100">
                                        <div class="row align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span></span></div>
                                                <div class="gen-movie-info">
                                                    <h3>Mexico</h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <p style="font-size: 24px;  line-height: 35px;">
                                                        {{ $paisesintro[13]->content }}
                                                    </p>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="{{ route('web_mexico_inicio') }}" class="gen-button">
                                                            <i class="fa fa-leaf" aria-hidden="true"></i>
                                                            <span class="text">Ingresar Ahora</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-1" style="padding: 10px 5px;">
                                                        <a href="https://zoelife.global/LoginSalesForce.php" class="gen-button">
                                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                                            <span class="text">Oficina Virtual</span>
                                                        </a>
                                                    </div>
                                                    <div class="gen-btn-container button-2" style="padding: 10px 5px;">
                                                        <a href="{{ $paisesintro[14]->content }}"
                                                            class="gen-button gen-button-link">
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

    <!-- footer start -->
    <footer id="gen-footer">
        <div class="gen-footer-style-1">
            <div class="gen-copyright-footer" style="background-color: #026410;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center">
                            <span class="gen-copyright"> 
                                Copyright 2025 Zoelife International
                                | Desarrollado por 
                                <a class="linkaracode" target="_blank" href="https://aracodeperu.com/"> 
                                    Aracode Smart Solutions
                                </a>
                            </span>
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
