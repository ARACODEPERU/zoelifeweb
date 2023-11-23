@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
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
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Productos</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        
        <div class="content-area">
            <div class="container">




            </div>
        </div>

        
            <!-- Paises / STAR -->
            <div class="container" style="padding: 60px 0px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-a30 bg-white m-b30">
                            <div class="section-content">
                                <h2 class="text-uppercase">SELECCIONAR PAIS</h2>
                                <div class="dez-divider divider-2px bg-primary icon-left">
                                    <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($pages as $page)
                                    <div class="col-md-2 aracode-flags">
                                            <a href=" {{ route($page->route) }} " class="ara-contenedor-redondo">
                                                @if ($page->country)
                                                    <img style="height: 70px; width: auto; " src="{{ $page->country->image }}" alt="">
                                                @else
                                                    SIN PAIS
                                                @endif
                                            </a>
                                        <br>
                                        <span><b>{{ $page->country->description }}</b></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Paises / END -->

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection