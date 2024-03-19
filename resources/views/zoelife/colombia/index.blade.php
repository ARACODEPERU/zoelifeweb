    @extends('layouts.colombia')

    @section('content')
        <!-- Encabezado inicio -->
        <x-colombia.header-area></x-colombia.header-area>
        <!-- Encabezado fin -->

        <!-- Content -->
        <div class="page-content">
            <!-- Slider -->
            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                            data-alias="news-gallery36" data-source="gallery"
                            style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                            <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;"
                                data-version="5.3.0.2">
                                <ul>

                                    @foreach ($slider as $k => $row)
                                        <!-- SLIDE  -->
                                        <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="default"
                                            data-thumb="{{ $row->content }}" data-rotate="0" data-fstransition="fade"
                                            data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                                            data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3=""
                                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                            data-param9="" data-param10="">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{ $row->content }}" alt="" data-bgposition="center center"
                                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                                class="rev-slidebg" data-no-retina>
                                            <!-- LAYERS -->
                                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1"
                                                data-x="['center','center','center','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                                data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                                                data-responsive_offset="off" data-responsive="off"
                                                data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                                data-paddingleft="[0,0,0,0]"
                                                style="z-index: 2;background-color:rgba(0, 0, 0, 0.30);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                            </div>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider END -->

            <!-- Visión - Misión - Valores / STAR -->
            <x-colombia.vision-mision-valores-area></x-colombia.vision-mision-valores-area>
            <!-- Visión - Misión - Valores / END -->

            <div class="content-area" style="padding: 80px 0px;">
                <div class="container">
                        <div class="section-head">
                            <h2 class="text-uppercase">{{ $equipos[0]->item->content }}</h2>
                            <div class="dez-divider divider-2px bg-primary icon-left">
                                <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                            </div>
                        </div>
                        <div class="section-content text-center ">
                            <div class="row">
                                <div class="col-md-3" style="padding: 15px;">
                                    <div class="dez-box m-b30">
                                        <div class="dez-media">
                                            <a href="javascript:void(0);">
                                                <img width="358" height="460"
                                                    src="{{ $fundador[0]->content }}" alt="">
                                            </a>
                                            <div class="dez-info-has bg-primary">
                                                <ul class="dez-social-icon dez-border">
                                                    <li><a href="{{ $fundador[4]->content }}"
                                                            class="fab fa-facebook"></a></li>
                                                    <li><a href="{{ $fundador[5]->content }}"
                                                            class="fab fa-instagram"></a></li>
                                                    <li><a href="{{ $fundador[6]->content }}"
                                                            class="fab fa-linkedin"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9" style="padding: 15px;">
                                    <br>
                                    <h3 class="dez-title" style="text-align: left;">
                                        <b style="font-size: 30px;" class=" text-primary" >{{ $fundador[1]->content }}</b>
                                        <br>
                                        <b class="des-producto">{{ $fundador[2]->content }}</b>
                                    </h3>
                                    <p style="text-align: left;">
                                        {{ $fundador[6]->content }}
                                    </p>
                                    <p style="text-align: left;">
                                        {{ $fundador[7]->content }}
                                    </p>
                                    <p style="text-align: left;">
                                        {{ $fundador[8]->content }}
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <!-- Video Presentación / STAR -->
            <div class="section-full text-white bg-img-fix p-t70 p-b70 overlay-black-dark choose-us"
                style="background-image:url(/themes/zoelife/colombia/images/background/fondo.jpg);">
                <div class="container">
                    <div class="section-head  text-center text-white">
                        <h2 class="h2">Sobre <span class="text-primary"> Zoé Life</span></h2>
                        <div class="dez-separator text-primary style-icon border-white">
                            <img alt="" src="/themes/zoelife/colombia/images/leaf-green.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! $video->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Presentación / END -->

            <div class="content-area" style="padding: 80px 0px;">
                <div class="container">
                        <div class="section-head">
                            <h2 class="text-uppercase">Zona de Descarga</h2>
                            <div class="dez-divider divider-2px bg-primary icon-left">
                                <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                            </div>
                        </div>
                        <div class="section-content text-center ">
                            <div class="row" style="justify-content: space-between">
                                <div class="col-md-4" style="text-align: center; padding: 15px;">
                                    <a href="{{ $linkDescarga[0]->content }}" target="_blank" class="site-button" 
                                        style="width: 90%; font-size: 14px; padding: 10px 20px; border-radius: 30px;">
                                        <b><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp; CATÁLOGO DE PRODUCTOS</b>
                                    </a>
                                </div>
                                <div class="col-md-4" style="text-align: center; padding: 15px;">
                                    <a href="{{ $linkDescarga[1]->content }}" target="_blank"  class="site-button" 
                                        style="width: 90%; font-size: 14px; padding: 10px 20px; border-radius: 30px;">
                                        <b><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp; PLAN LIBERTAD </b>
                                    </a>
                                </div>
                                <div class="col-md-4" style="text-align: center; padding: 15px;">
                                    <a href="{{ $linkDescarga[2]->content }}" target="_blank"  class="site-button" 
                                        style="width: 90%; font-size: 14px; padding: 10px 20px; border-radius: 30px;">
                                        <b><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp; MANUAL DE POLÍTICAS Y PROCESOS</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>


        </div>
        <!-- Content END-->

        <!-- Footer -->
        <x-colombia.footer-area></x-colombia.footer-area>
        <!-- Footer END-->
    @endsection
