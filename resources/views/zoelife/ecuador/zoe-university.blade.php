@extends('layouts.ecuador')

@section('content')
    <!-- Encabezado inicio -->
    <x-ecuador.header-area></x-ecuador.header-area>
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
                        <li><a href="{{ route('web_ecuador_inicio') }}">Home</a></li>
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
                        <li><a href="{{ route('web_ecuador_inicio') }}">Home</a></li>
                        <li>University</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <div class="container" style="padding: 40px 0px;">
            <x-study-programs></x-study-programs>
        </div>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-ecuador.footer-area></x-ecuador.footer-area>
    <!-- Footer END-->
@endsection
