@extends('layouts.bolivia')

@section('content')
    <!-- Encabezado inicio -->
    <x-bolivia.header-area></x-bolivia.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ $banner->content }});">

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
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <div class="p-a30 bg-white m-b30">
                    <div class="section-content text-center ">
                        <div class="row">
                            @if (isset($productos))
                            @foreach ($productos as $producto)

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media dez-img-overlay2 dez-img-effect zoom">
                                        <a href="{{ route('web_bolivia_producto_descripcion', $producto->id) }}">
                                            {{-- <img width="358" height="460" src="{{ asset('themes/zoelife/bolivia/images/our-team/pic8.png') }}" alt=""> --}}
                                            <img width="358" height="460" src="{{ asset($producto->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="p-a10">
                                        <h4 class="dez-title m-b0"><a href="{{ route('web_bolivia_producto_descripcion', $producto->id) }}">{{ $producto->name }}</a></h4>
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
