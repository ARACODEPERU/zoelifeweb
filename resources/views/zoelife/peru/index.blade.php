    @extends('layouts.peru')

    @section('content')
        <!-- Encabezado inicio -->
        <x-peru.header-area></x-peru.header-area>
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
                                            data-title="" data-param1="" data-param2="" data-param3=""
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
            <x-peru.vision-mision-valores-area></x-peru.vision-mision-valores-area>
            <!-- Visión - Misión - Valores / END -->


            <!-- Video Presentación / STAR -->
            <div class="section-full text-white bg-img-fix p-t70 p-b70 overlay-black-dark choose-us"
                style="background-image:url({{ asset('themes/zoelife/peru/images/background/fondo.jpg') }});">
                <div class="container">
                    <div class="section-head text-center text-white" style="padding: 10px;">
                        <h2 class="h2">Sobre <span class="text-primary"> Zoé Life</span></h2>
                        <div class="dez-separator text-primary style-icon border-white">
                            <img alt="" src="themes/zoelife/peru/images/leaf-green.png" />
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
                        <h2 class="text-uppercase">{{ $equipos[0]->item->content }}</h2>
                        <div class="dez-divider divider-2px bg-primary icon-left">
                            <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                        </div>
                    </div>
                    <div class="section-content text-center ">
                        <div class="row">
                            @foreach ($equipos as $k => $equipo)
                                @if ($k > 0)
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="dez-box m-b30">
                                            <div class="dez-media">
                                                <a href="javascript:void(0);">
                                                    <img width="358" height="460"
                                                        src="{{ $equipo->item->items[0]->content }}" alt="">
                                                </a>
                                                <div class="dez-info-has bg-primary">
                                                    <ul class="dez-social-icon dez-border">
                                                        <li><a href="{{ $equipo->item->items[3]->content }}"
                                                                class="fab fa-facebook"></a></li>
                                                        <li><a href="{{ $equipo->item->items[4]->content }}"
                                                                class="fab fa-instagram"></a></li>
                                                        <li><a href="{{ $equipo->item->items[5]->content }}"
                                                                class="fab fa-linkedin"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-a10">
                                                <h4 class="dez-title m-b0"><a
                                                        href="">{{ $equipo->item->items[1]->content }}</a></h4>
                                                <span
                                                    class="dez-member-position">{{ $equipo->item->items[2]->content }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>

        <div class="container-area" style="padding: 80px 0px;">
            <div class="container">
                <div class="section-head">
                    <h2 class="text-uppercase">Zona de descargas</h2>
                    <div class="dez-divider divider-2px bg-primary icon-left">
                        <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="text-align: center;">
                        <a href="{{ $linkDescarga[0]->content }}" target="_blank"  class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px; border-radius: 30px;"> 
                            <b><i class="fa fa-download" aria-hidden="true"></i> Descargar Catálogo</b>
                        </a>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <a href="{{ $linkDescarga[1]->content }}" target="_blank"  class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px; border-radius: 30px;"> 
                            <b><i class="fa fa-download" aria-hidden="true"></i> Descargar Productos</b>
                        </a>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <a href="{{ $linkDescarga[2]->content }}" target="_blank"  class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px; border-radius: 30px;"> 
                            <b><i class="fa fa-download" aria-hidden="true"></i> Descargar Presentación</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- Content END-->

        <!-- Footer -->
        <x-peru.footer-area></x-peru.footer-area>
        <!-- Footer END-->
    @endsection
