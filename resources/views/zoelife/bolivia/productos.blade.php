@extends('layouts.bolivia')

@section('content')
    <!-- Encabezado inicio -->
    <x-bolivia.header-area></x-bolivia.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">
        <link rel="stylesheet" href="{{ asset('themes/zoelife/global/css/texto-oculto.css') }}">
    <script>
        function mostrarDescripcion(id) {
            document.getElementById(id+"-description").classList.add('mostrar-descripcion');
        }

        function ocultarDescripcion(id) {
            document.getElementById(id+"-description").classList.remove('mostrar-descripcion');
        }
    </script>

        <div class="btn-header-pc">
            <!-- inner page banner -->
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row" style="position:relative; z-index:1;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_bolivia_inicio') }}">Home</a></li>
                        <li>Productos</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <div class="btn-header-mobile">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_bolivia_inicio') }}">Home</a></li>
                        <li>Productos</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <section style="padding: 40px 15px;">
            <div class="container">
                <div class="p-a20 bg-white selector-d m-b20 box-elevado-green">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h2 class="text-uppercas" style="color: #00b01a; text-transform: uppercase; padding: 15px 0px;">
                                Beneficios de los productos
                            </h2>
                            <div class="row" style="justify-content: space-between;">
                                @foreach ( $beneficiop as $bp )
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
            </div>
        </section>

        <section style="padding: 40px 15px;">
            <div class="container-xxl">
                <div class="row">
                    @if (isset($productos))
                        @foreach ($productos as $producto)
                            <div class="col-md-4" style="padding: 15px;">
                                <div class="box-producto" onmouseover="mostrarDescripcion({{ $producto->id }})" onmouseout="ocultarDescripcion({{ $producto->id }})">
                                    <a href="{{ route('web_peru_producto_descripcion', $producto->id) }}">
                                        <img style="height: 100%;" src="{{ asset($producto->image) }}" alt="img_producto">
                                        <div class="title-bg-green">
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
            </div>
        </section>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-bolivia.footer-area></x-bolivia.footer-area>
    <!-- Footer END-->
@endsection
