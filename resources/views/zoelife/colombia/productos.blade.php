@extends('layouts.colombia')

@section('content')
    <!-- Encabezado inicio -->
    <x-colombia.header-area></x-colombia.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">
        <link rel="stylesheet" href="{{ asset('themes/zoelife/global/css/texto-oculto.css') }}">
        <div class="btn-header-pc">
            <!-- inner page banner -->
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row" style="margin-top: 15px; position:relative; z-index:1;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_colombia_inicio') }}">Home</a></li>
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
                        <li><a href="{{ route('web_colombia_inicio') }}">Home</a></li>
                        <li>Productos</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <div class="content-area">
            <div class="container">
                <div class="p-a20 bg-white selector-d m-b20">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h2 class="text-uppercas" style="color: #00b01a; text-transform: uppercase; padding: 15px 0px;">Beneficios de los productos</h2>
                            <div class="row" style="justify-content: space-between;">
                                @foreach ( $beneficiop as $bp )
                                <div class="col-md-2" style="padding: 20px 0px;  ">
                                    <img src="{{ $bp->content }}" alt="">
                                </div>
                                @endforeach
                            </div>
                            <div class="dez-divider divider-2px icon-center" style="background: #00b01a;">
                                <i class="fa fa-leaf  text-white" style="background: #00b01a;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section>
            <div class="container-xxl">
                <div class="row">
                    @if (isset($productos))
                        @foreach ($productos as $producto)
                            <div class="col-md-4" style="padding: 15px;">
                                <div class="box-producto">
                                    <a href="{{ route('web_peru_producto_descripcion', $producto->id) }}">
                                        <img style="height: 100%;" src="{{ asset($producto->image) }}" alt="img_producto">
                                    </a>
                                    <div class="box-producto-body texto-oculto4">
                                        <h4>
                                            <a href="{{ route('web_peru_producto_descripcion', $producto->id) }}">{{ $producto->name }}</a>
                                        </h4>
                                        <p>
                                            {!! $producto->description !!}
                                        </p>
                                    </div>
                                    <div class="box-producto-footer">
                                        <a href="https://api.whatsapp.com/send?phone=51992914870&text=Hola&nbsp;ZoeLife!&nbsp;me&nbsp;pueden&nbsp;ayudar?"
                                        target="_blank"  class="btn-green">
                                            <i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;&nbsp; Más información
                                        </a>
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
    <x-colombia.footer-area></x-colombia.footer-area>
    <!-- Footer END-->
@endsection
