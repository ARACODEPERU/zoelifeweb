@extends('layouts.bolivia')

@section('content')
    <!-- Encabezado inicio -->
    <x-bolivia.header-area></x-bolivia.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row" style="margin-top: 80px;">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_bolivia_inicio') }}">Home</a></li>
                    <li><a href="{{ route('web_bolivia_inicio') }}">Productos</a></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <div class="container" style="padding: 60px 0px;">
            <div class="row">
                <div class="col-md-6" style="text-align: center;">
                    <img style="width: 90%;" src="{{ $product->image }}" alt="">
                </div>
                <div class="col-md-6">
                    <!-- Dividers with icon -->
                    <div class="p-a30 bg-white selector-d m-b30">
                        <div class="section-content">
                            <h2 class="text-uppercase">{{ $product->name }}</h2>
                            <div class="dez-divider divider-2px icon-left" style="background: #00b01a;">
                                <i class="fa fa-thumbs-o-up  text-white" style="background: #00b01a;"></i>
                            </div>
                            <div class="m-b10" >
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
            style="background-image:url({{ asset('themes/zoelife/peru/images/background/fondo.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-head  text-center text-white">
                            <h2 class="h2">Recomendaciones <span style="color: #00b01a;"> de Uso Sugerido</span></h2>
                            <div class="dez-separator text-primary style-icon border-white">
                                <img alt="" src="{{ asset('themes/zoelife/peru/images/leaf-green.png') }}" />
                            </div>
                        </div>
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
                <div class="p-a20 bg-white selector-d m-b20 container">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h5 class="text-uppercase">Testimonios del {{ $product->name }}</h5>
                            <p>
                                Sumérgete en una experiencia única y conoce de primera mano cómo nuestro producto ha superado las expectativas y ha transformado rutinas diarias en momentos extraordinarios.
                            </p>
                            <div class="dez-divider divider-2px  icon-center" style="background: #00b01a;"><i
                                    class="fa fa-truck  text-white" style="background: #00b01a;"></i></div>
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
            </div>
        </div>
    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-bolivia.footer-area></x-bolivia.footer-area>
    <!-- Footer END-->
@endsection
