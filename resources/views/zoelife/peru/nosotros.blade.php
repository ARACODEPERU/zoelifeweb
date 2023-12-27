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
                    <li>Nosotros</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <!-- Visión - Misión - Valores / STAR -->
        <x-peru.vision-mision-valores-area></x-peru.vision-mision-valores-area>
        <!-- Visión - Misión - Valores / END -->


        <!-- Video Presentación / STAR -->
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-dark choose-us"
            style="background-image:url(themes/zoelife/peru/images/background/experiencia/cancun.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white" style="padding: 10px;">
                    <h2 class="h2">Experiencias <span class="text-primary"> Zoé Life</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt=""
                            src="themes/zoelife/peru/images/leaf-green.png" /></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! $video->content !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Presentación / END -->


        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">

                <!-- Nuestro Equipo -->
                <div class="p-a30 bg-white selector-d  m-b30 ">
                    <div class="section-head">
                        <h2 class="text-uppercase">Nuestro Equipo</h2>
                        <div class="dez-divider divider-2px bg-primary icon-left">
                            <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                        </div>
                    </div>
                    <div class="section-content text-center ">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media"> 
                                        <a href="javascript:void(0);"> 
                                            <img width="358" height="460" 
                                                src="{{ asset('themes/zoelife/peru/images/our-team/pic5.jpg') }}"
                                                alt=""> 
                                        </a>
                                        <div class="dez-info-has bg-primary">
                                            <ul class="dez-social-icon dez-border">
                                                <li><a href="javascript:void(0);" class="fab fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                                                <li><a href="javascript:void(0);" class="fab fa-linkedin"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a10">
                                        <h4 class="dez-title m-b0"><a href="javascript:void(0);">Nashid Martines</a></h4>
                                        <span class="dez-member-position">Director</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media"> <a href="javascript:void(0);"> <img width="358"
                                                height="460" src="themes/zoelife/peru/images/our-team/pic5.jpg"
                                                alt=""> </a>
                                        <div class="dez-info-has bg-primary">
                                            <ul class="dez-social-icon dez-border">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a10">
                                        <h4 class="dez-title m-b0"><a href="javascript:void(0);">Nashid Martines</a></h4>
                                        <span class="dez-member-position">Director</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media"> <a href="javascript:void(0);"> <img width="358"
                                                height="460" src="themes/zoelife/peru/images/our-team/pic5.jpg"
                                                alt=""> </a>
                                        <div class="dez-info-has bg-primary">
                                            <ul class="dez-social-icon dez-border">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a10">
                                        <h4 class="dez-title m-b0"><a href="javascript:void(0);">Nashid Martines</a></h4>
                                        <span class="dez-member-position">Director</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media"> <a href="javascript:void(0);"> <img width="358"
                                                height="460" src="themes/zoelife/peru/images/our-team/pic5.jpg"
                                                alt=""> </a>
                                        <div class="dez-info-has bg-primary">
                                            <ul class="dez-social-icon dez-border">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a10">
                                        <h4 class="dez-title m-b0"><a href="javascript:void(0);">Nashid Martines</a></h4>
                                        <span class="dez-member-position">Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nuestro Equipo END -->


            </div>
            <!-- Left & right section  END -->
        </div>



        <!-- Paises / STAR -->
        <x-countries-section />
        <!-- Paises / END -->



    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
