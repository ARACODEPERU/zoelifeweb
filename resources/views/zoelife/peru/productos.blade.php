@extends('layouts.peru')
@section('cstyles')
@endsection
@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <link rel="stylesheet" href="{{ asset('themes/zoelife/global/css/texto-oculto.css') }}">
        <script>
            function mostrarDescripcion(id) {
                document.getElementById(id + "-description").classList.add('mostrar-descripcion');
            }

            function ocultarDescripcion(id) {
                document.getElementById(id + "-description").classList.remove('mostrar-descripcion');
            }
        </script>

        <div class="btn-header-pc">
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $bannerCategoria->content }}" alt="">
            </div>
            <div class="breadcrumb-row" style="margin-top: 15px; position:relative; z-index:1;">
                <div class="container-xxl">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Productos</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="btn-header-mobile">
            <div class="breadcrumb-row" style="margin-top: 60px;">
                <div class="ara_centrado_total" style="margin-bottom: 10px;">
                    <img style="width: 100%; height: auto;" src="{{ $bannerCategoria->content }}" alt="">
                </div>
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Productos</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-area">
            <div class="container">
                <div class="p-a20 bg-white selector-d m-b20 {{ $categoryId == 1 ? 'box-elevado-green' : 'box-elevado-plomo' }}">
                    <h2 class="text-uppercas  {{ $categoryId == 1 ? 'title-green' : 'title-plomo' }}"
                        style="text-transform: uppercase; padding: 15px 0px; text-align:center;">
                        Beneficios de los Productos
                    </h2>
                    <div class="row" style="justify-content: space-between;">
                        @foreach ($beneficioProducto as $bp)
                            <div class="col-md-2" style="padding: 20px 0px;  ">
                                <img src="{{ $bp->content }}" alt="">
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="dez-divider divider-2px icon-center" style="background: #00b01a;">
                        <i class="fa fa-leaf  text-white" style="background: #00b01a;"></i>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- <div class="content-area">
            <div class=""  style="width: 100%; padding: 40px;">
                <div class="p-a30  m-b30">
                    <div class="section-content text-center ">
                        <div class="row">
                            @if (isset($productos))
                                @foreach ($productos as $producto)
                                <div class="col-md-2">
                                    <div class="dez-box m-b30">
                                        <div class="dez-media dez-img-effect zoom">
                                            <a href="{{ route('web_peru_producto_descripcion', $producto->id) }}">
                                                <img style="height: 100%;" src="{{ asset($producto->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="p-a10">
                                            <h4 class="dez-title m-b0">
                                                <a href="{{ route('web_peru_producto_descripcion', $producto->id) }}">{{ $producto->name }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <section>
            <div class="container-xxl">
                <div class="row">
                    @if (isset($productos))
                        @foreach ($productos as $producto)
                            <div class="col-md-4" style="padding: 15px;">
                                <div class="box-producto" onmouseover="mostrarDescripcion({{ $producto->id }})"
                                    onmouseout="ocultarDescripcion({{ $producto->id }})">
                                    <a href="{{ route('web_peru_producto_descripcion', $producto->id) }}">
                                        <img style="height: 100%;" src="{{ asset($producto->image) }}" alt="img_producto">
                                        <div class="{{ $categoryId == 1 ? 'title-bg-green' : 'title-bg-plomo' }}">
                                            <b>{{ $producto->name }}</b>
                                        </div>
                                    </a>
                                    <div class="texto-oculto-js" id="{{ $producto->id }}">
                                        <p>
                                            <a class="country" href="{{ route('web_peru_producto_descripcion', $producto->id) }}">
                                                {!! $producto->description !!}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-producto-footer">
                            <a href="https://api.whatsapp.com/send?phone=51992914870&text=Hola&nbsp;ZoeLife!&nbsp;me&nbsp;pueden&nbsp;ayudar&nbsp;acerca&nbsp;de&nbsp;{{ $producto->name }}?"
                                target="_blank" class="{{ $categoryId == 1 ? 'btn-green' : 'btn-plomo' }}">
                                <i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;&nbsp; Más información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Content END-->

    {{-- @if (false)
        <h2>HOLA SOY 1</h2>
        @else
        <h2>No soy 1</h2>
    @endif --}}

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
