@extends('layouts.bolivia')

@section('content')
    <!-- Encabezado inicio -->
    <x-bolivia.header-area></x-bolivia.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr ara_centrado_total">
            <img style="width: 100%;" src="{{ $banner->content }}" alt="">
        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_bolivia_inicio') }}">Home</a></li>
                    <li>Productos</li>
                </ul>
            </div>
        </div>
        
        <div class="content-area">
            <div class="container">
                <div class="p-a20 bg-white selector-d m-b20">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h2 class="text-uppercase text-primary">Beneficios de los productos</h2>
                            <div class="row" style="justify-content: space-between;">
                                @foreach ( $beneficiop as $bp )
                                <div class="col-md-2" style="padding: 20px 0px;  ">
                                    <img src="{{ $bp->content }}" alt="">
                                </div>
                                @endforeach
                            </div>
                            <div class="dez-divider divider-2px bg-primary icon-center">
                                <i class="fa fa-leaf bg-primary text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-area">
            <div class=""  style="width: 100%; padding: 40px;">
                <div class="p-a30  m-b30">
                    <div class="section-content text-center ">
                        <div class="row">
                            @if (isset($productos))
                                @foreach ($productos as $producto)
                                <div class="col-md-2">
                                    <div class="dez-box m-b30">
                                        <div class="dez-media dez-img-effect zoom">
                                            <a href="{{ route('web_bolivia_producto_descripcion', $producto->id) }}">
                                                <img style="height: 100%;" src="{{ asset($producto->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="p-a10">
                                            <h4 class="dez-title m-b0">
                                                <a href="{{ route('web_bolivia_producto_descripcion', $producto->id) }}">{{ $producto->name }}</a>
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
            <!-- Left & right section  END -->
        </div>
    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-bolivia.footer-area></x-bolivia.footer-area>
    <!-- Footer END-->
@endsection
