@extends('layouts.ecuador')

@section('content')
    <!-- Encabezado inicio -->
    <x-ecuador.header-area></x-ecuador.header-area>
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
                    <li><a href="{{ route('web_ecuador_inicio') }}">Home</a></li>
                    <li>University</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <div class="container" style="padding: 40px;">
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
    <x-ecuador.footer-area></x-ecuador.footer-area>
    <!-- Footer END-->
@endsection
