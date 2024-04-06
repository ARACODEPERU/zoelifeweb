@extends('layouts.mexico')

@section('content')
    <!-- Encabezado inicio -->
    <x-mexico.header-area></x-mexico.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <div class="btn-header-pc">
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <div class="breadcrumb-row" style="margin-top: 20px; position:relative; z-index:1;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_mexico_inicio') }}">Home</a></li>
                        <li>University</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="btn-header-mobile">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_mexico_inicio') }}">Home</a></li>
                        <li>University</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <div class="container">
            <x-study-programs></x-study-programs>
        </div>

        
        <div class="container" style="padding: 40px;">
            <div class="row" style="justify-content: space-between">
                <div class="col-md-2"></div>
                <div class="col-md-4" style="text-align: center;">
                    <a href="" target="_blank"  class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px; border-radius: 30px;"> 
                        <b><i class="fa fa-university" aria-hidden="true"></i> Campus Virtual</b>
                    </a>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-mexico.footer-area></x-mexico.footer-area>
    <!-- Footer END-->
@endsection
