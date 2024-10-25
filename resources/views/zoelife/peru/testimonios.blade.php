@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <div class="btn-header-pc">
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <div class="breadcrumb-row" style="position:relative; z-index:1;">
                <div class="container-xxl">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Testimonios</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="btn-header-mobile">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Testimonios</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <div class="container-xxl" style="padding: 10px 20px;">
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
                            <li class="card-container col-md-4 {{ $testimony->product->name }}" style="padding: 15px;">
                                <div class="aracode-box-with">
                                    <div class="dez-post-media dez-img-effect zoom-slow">
                                        {!! $testimony->video !!}
                                    </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-title ">
                                            <h4 class="post-title">
                                                <a href="" class=" des-producto">{{ $testimony->title }}</a>
                                            </h4>
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
        </div>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
