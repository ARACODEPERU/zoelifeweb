@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">
        
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(themes/zoelife/peru/images/header-page/contactanosPeru.jpg);">
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
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li><a href="{{ route('web_peru_inicio') }}">Productos</a></li>
                    <li>Coffe 3 en 1</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <div class="container" style="padding: 60px 0px;">
            <div class="row">
                <div class="col-md-6">
                    <img src="themes/zoelife/peru/images/product/cafe.png" alt="">
                </div>
                <div class="col-md-6">
                    <!-- Dividers with icon -->
                    <div class="p-a30 bg-white m-b30">
                        <div class="section-content">
                            <h2 class="text-uppercase">COFFEE 3 EN 1</h2>
                            <div class="dez-divider divider-2px bg-primary icon-left"><i class="fa fa-thumbs-o-up bg-primary text-white"></i></div>
                        
                            <div class="m-b10">
                                <h5 class="text-uppercase">
                                    Disfrute la saludable combinación de sabor, suavidad y aroma, 
                                    exquisito para el paladar, 100% natural.
                                </h5>
                                <p>Zoe Life Moringa COFFEE 3 EN 1, es una bebida diseñada para brindar una mejor 
                                    calidad de vida, esto gracias a la Moringa Oleifera la cual ofrece múltiples 
                                    nutrientes para la salud y tiene principios activos como la Zeatina, fitohormona 
                                    para el rejuvenecimiento.
                                </p>
                                <p>
                                    Coffee 3 en 1 es la perfecta formulación de ciencia y Gourmet que garantizan la exelencia exclusiva de este producto.
                                </p>
                            </div>
                            <div class="m-b10">
                                <h5 class="text-uppercase">
                                    BENEFICIOS
                                </h5>
                                <div class="row">
                                    <div class="col-md-6"><i class="fa fa-check"></i> Aporta energía.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Regenera las células.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Eleva el sistema inmunológico.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Mejora el sistema circulatorio.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Ayuda a regular el peso.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Regenera el sistema óseo.</div>
                                    <div class="col-md-6"><i class="fa fa-check"></i> Previene el daño celular del cerebro para evitar males como Alzheimer, Parkinson, etc, etc.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dividers with icon END -->
                </div>
            </div>
        </div>

        
        <!-- Why Choose Us -->
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-middle choose-us" style="background-image:url(images/background/garden/bg2.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Why <span class="text-primary">Choose Us</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt="" src="images/leaf-green.png"/></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    Hola
                </div>
            </div>
        </div>
        <!-- Why Choose Us End -->

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection