@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner | Medidas 1920 x 300 pixeles -->
        <div class="dez-bnr-inr ara_centrado_total">
            <img style="width: 100%;" src="{{ $banner->content }}" alt="">
        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Testimonios</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->


        <div class="content-area">
            <!-- Left & right section start -->
            <div class="">
                <!-- Gallery -->
                <div class="site-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Todos</span></a>
                        </li>
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <li data-filter="{{ $product->name }}" class="btn">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>{{ $product->name }}</span></a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                    @if (count($testimonies) > 0)
                        @foreach ($testimonies as $testimony)
                            <li class="card-container col-md-3" style="padding: 15px;">
                                <div class="aracode-box-with">
                                    <div class="dez-post-media dez-img-effect zoom-slow">
                                        {!! $testimony->video !!}
                                    </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-title ">
                                            <h4 class="post-title"><a href="" class=" des-producto">{{ $testimony->title }}</a></h4>
                                        </div>
                                        <div class="dez-post-tags">
                                            <div class="post-tags">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
                <!-- Gallery END -->
                <!-- Pagination start -->
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
            <!-- Left & right section  END -->
        </div>

        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
