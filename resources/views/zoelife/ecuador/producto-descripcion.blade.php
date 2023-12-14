@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-ecuador.header-area></x-ecuador.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle"
            style="background-image:url(themes/zoelife/peru/images/header-page/contactanosPeru.jpg);">
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
                    <img src="{{ $product->image }}" alt="">
                </div>
                <div class="col-md-6">
                    <!-- Dividers with icon -->
                    <div class="p-a30 bg-white m-b30">
                        <div class="section-content">
                            <h2 class="text-uppercase">{{ $product->name }}</h2>
                            <div class="dez-divider divider-2px bg-primary icon-left">
                                <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                            </div>
                            <div class="m-b10">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                    <!-- Dividers with icon END -->
                </div>
            </div>
        </div>


        <!-- Why Choose Us -->
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-dark choose-us"
            style="background-image:url(themes/zoelife/peru/images/background/fondo.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Recomendaciones <span class="text-primary"> de Uso Sugerido</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt=""
                            src="themes/zoelife/peru/images/leaf-green.png" /></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {!! $product->additional !!}
                    </div>
                    <div class="col-md-6">
                        {!! $product->additional1 !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us End -->


        <div class="content-area">
            <div class="container">


                <!-- Dividers with icon -->
                <div class="p-a20 bg-white m-b20">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h5 class="text-uppercase">Testimonios del Coffee 3 en 1</h5>
                            <p>Lorem Ipsum is simply dummy text of the een the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a Gallery of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                            </p>
                            <div class="dez-divider divider-2px bg-primary icon-center"><i
                                    class="fa fa-truck bg-primary text-white"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Dividers with icon END -->

                <!-- blog grid -->
                <div id="masonry" class="dez-blog-grid-3 row">
                    @if (count($testimonies) > 0)
                        @foreach ($testimonies as $testimony)
                            <div class="post card-container col-md-4">
                                <div class="blog-post blog-grid date-style-2">
                                    <div class="dez-post-media dez-img-effect zoom-slow">
                                        {!! $testimony->video !!}
                                    </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-title ">
                                            <h3 class="post-title">
                                                <a href="">
                                                    {{ $testimony->title }}
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="dez-post-tags">
                                            <div class="post-tags">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- blog grid END -->

                <!-- Pagination -->
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
        </div>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-ecuador.footer-area></x-ecuador.footer-area>
    <!-- Footer END-->
@endsection
