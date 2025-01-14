@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row" style="margin-top: 80px;">
            <div class="container-xxl">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li><a href="{{ route('web_peru_productos') }}">Productos</a></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <div class="container-xl" style="padding: 60px 0px;">
            <div class="row">
                <div class="col-md-6" style="text-align: center; align-items: center;">
                    <img style="height: 600px;" src="{{ $product->image }}" alt="">
                </div>
                <div class="col-md-6">
                    <!-- Dividers with icon -->
                    <div class="p-a30 bg-white selector-d m-b30">
                        <div class="section-content">
                            <h2 class="text-uppercase"><b class="amarillo">{{ $product->name }}</b></h2>
                            {{-- <div class="dez-divider divider-2px icon-left" style="background: #00b01a;">
                                <i class="fa fa-thumbs-o-up  text-white" style="background: #00b01a;"></i>
                            </div> --}}
                            <div class="m-b10">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="text-align: center;">
                                <a href="https://wa.link/isjo6j" 
                                    class="btn btn-green">
                                    <i class="fab fa-whatsapp"></i> &nbsp;Deseo adquirir los productos
                                </a>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <!-- Dividers with icon END -->
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="section-full text-white bg-img-fix p-t90 p-b90 overlay-black-middle choose-us"
            style="background-image:url({{ asset('themes/zoelife/peru/images/background/fondo.jpg') }});">
            <div class="container" style="padding: 20px 30px;">
                <div class="row">
                    <div class="col-md-6" style="padding: 0px 40px;">
                        <div class="section-head  text-center text-white">
                            <h2 class="h2 text-uppercase">Recomendaciones <span style="color: #fecc00;"> de Uso
                                    Sugerido</span></h2>
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
            <div class="" style="width: 100%; padding: 20px 0px;">

                <!-- Dividers with icon -->
                <div class="p-a20 bg-white selector-d m-b20 container">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h5 class="text-uppercase">Testimonios del {{ $product->name }}</h5>
                            <p>
                                Sumérgete en una experiencia única y conoce de primera mano cómo nuestro producto ha
                                superado las expectativas y ha transformado rutinas diarias en momentos extraordinarios.
                            </p>
                            <div class="dez-divider divider-2px  icon-center" style="background: #00b01a;"><i
                                    class="fa fa-truck  text-white" style="background: #00b01a;"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Dividers with icon END -->
                <br>

                <section>
                    <div class="container-xxl">
                        <div class="row">
                            @if (count($testimonies) > 0)
                                @foreach ($testimonies as $testimony)
                                    <div class="col-md-4">
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
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="text-align: center;">
                                <a href="https://wa.link/isjo6j" 
                                    class="btn btn-green">
                                    <i class="fab fa-whatsapp"></i> &nbsp;Deseo adquirir los productos
                                </a>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </section>

                {{-- <div id="masonry" class="dez-blog-grid-3 row">
                    @if (count($testimonies) > 0)
                        @foreach ($testimonies as $testimony)
                            <div class="post card-container col-md-3">
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
                </div> --}}
            </div>
        </div>
        
    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
