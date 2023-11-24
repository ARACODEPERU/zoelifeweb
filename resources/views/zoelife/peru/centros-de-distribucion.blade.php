@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ $banner->content }});">

    </div>
    <!-- inner page banner END -->

    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html">Home</a></li>
                <li>Centros de Distribución</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->

    <div class="content-area">
        <!-- Left & right section start -->
        <div class="container">
            <!-- Gallery -->
            <div class="site-filters clearfix center m-b40">
                <ul class="filters" data-toggle="buttons">
                    <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Todos</span></a>
                    </li>
                    @if (count($departments) > 0)
                        @foreach ($departments as $department)
                            <li data-filter="{{ $department->name }}" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry"><span>{{ $department->name }}</span></a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                @if (count($centers) > 0)
                    @foreach ($centers as $center)
                        <li class="card-container col-md-4 {{ $center->district->department->name }}">
                            <div class="dez-box dez-gallery-box">
                                <a href="{{ route('web_peru_centros_lima') }}">
                                    <div class="dez-thum dez-img-overlay1 dez-img-effect">
                                        <img src="{{ asset('storage/' . $center->image) }}" alt="Lima">
                                    </div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                @endif

                {{-- <li class="card-container col-md-4 ayacucho">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect">
                            <a href="">
                                <img src="themes/zoelife/peru/images/center/ayacucho.jpg" alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a>
                                    <a href="themes/zoelife/peru/images/center/ayacucho.jpg" class="mfp-link"
                                        title="Ayacucho"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> --}}
            </ul>
            <!-- Gallery END -->
            <!-- Pagination start -->
            <div class="pagination-bx">
                <ul class="pagination">
                    <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Left & right section  END -->
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
                                        <img style="height: 70px; width: auto; " src="{{ $page->country->image }}"
                                            alt="">
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

    <br>

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
