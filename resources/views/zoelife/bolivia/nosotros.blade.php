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
                    <li>Nosotros</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <!-- Visión - Misión - Valores / STAR -->
        <x-bolivia.vision-mision-valores-area></x-bolivia.vision-mision-valores-area>
        <!-- Visión - Misión - Valores / END -->


        <!-- Video Presentación / STAR -->
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-dark choose-us"
            style="background-image:url(themes/zoelife/bolivia/images/background/experiencia/cancun.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Experiencias <span class="text-primary"> Zoé Life</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt=""
                            src="themes/zoelife/bolivia/images/leaf-green.png" /></div>
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

                <!-- Team Section Style 2 -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head">
                        <h2 class="text-uppercase">Team Section Style 2</h2>
                    </div>
                    <div class="section-content text-center ">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media"> <a href="javascript:void(0);"> <img width="358"
                                                height="460" src="themes/zoelife/bolivia/images/our-team/pic5.jpg"
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
                                                height="460" src="themes/zoelife/bolivia/images/our-team/pic6.jpg"
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
                                        <h4 class="dez-title m-b0"><a href="javascript:void(0);">Hackson Willingham</a></h4>
                                        <span class="dez-member-position">Developer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media"> <a href="javascript:void(0);"> <img width="358"
                                                height="460" src="themes/zoelife/bolivia/images/our-team/pic7.jpg"
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
                                    <div class="p-a10 bg-white">
                                        <h4 class="dez-title m-b0"><a href="javascript:void(0);">konne Backfield</a></h4>
                                        <span class="dez-member-position">Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="dez-box m-b30">
                                    <div class="dez-media"> <a href="javascript:void(0);"> <img width="358"
                                                height="460" src="themes/zoelife/bolivia/images/our-team/pic8.jpg"
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
                                        <h4 class="dez-title m-b0"><a href="javascript:void(0);">konne Backfield</a></h4>
                                        <span class="dez-member-position">Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team Section Style 2 END -->


            </div>
            <!-- Left & right section  END -->
        </div>



        <!-- Paises / STAR -->
        <x-countries-section />
        <!-- Paises / END -->



    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-bolivia.footer-area></x-bolivia.footer-area>
    <!-- Footer END-->
@endsection
