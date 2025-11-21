@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

        <!-- Content -->
        <div class="page-content" style="margin-top: 85px;">

            <!-- Slider -->
            {{-- <div class="btn-header-pc">
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
                                            <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default"
                                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default" data-masterspeed="default"
                                                data-thumb="{{ $row->content }}" data-rotate="0" data-fstransition="fade"
                                                data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                                                data-title="" data-param1="" data-param2="" data-param3=""
                                                data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                                                data-param9="" data-param10="" class="ara_centrado_total">
                                                <img src="{{ $row->content }}" alt="" data-bgposition="center center"
                                                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                                        class="rev-slidebg" data-no-retina="" style="background-size: cover; background-position: center; width: 100%; height: auto;"
                                                />
                                                
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
                                                    style="z-index: 2;">
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Slider END -->

            <x-peru-home-slider />



            <div class="btn-header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carouselExampleIndicators" class="slide" data-ride="carousel" style="width: 100%; height: auto;">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner" style="width: 100%;">
                                    <div class="carousel-item active">
                                        <img style="width: 100%;" src="{{ $sliderMobil[0]->content }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img style="width: 100%;" src="{{ $sliderMobil[1]->content }}" alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Antes</span>
                                </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Nuevo</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visión - Misión - Valores / STAR -->
            <x-peru.vision-mision-valores-area></x-peru.vision-mision-valores-area>
            <!-- Visión - Misión - Valores / END -->

            <section style="padding: 120px 30px;">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-md-12" style="text-align:center; padding: 40px 0px 10px 0px;">
                            <div class="section-head">
                                <h2 class="text-uppercase">{{ $equipos[0]->item->content }}</h2>
                                <div class="dez-divider divider-2px icon-left" style="background: #00b01a;">
                                    <i class="fa fa-thumbs-o-up text-white"  style="background: #00b01a;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <li>
                                                <a href="{{ $fundador[4]->content }}"
                                                    class="fab fa-facebook">
                                                </a>
                                            </li>
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
                                <b style="font-size: 30px; color: #00b01a;" >{{ $fundador[1]->content }}</b>
                                <br>
                                <b class="des-producto">{{ $fundador[2]->content }}</b>
                            </h3>
                            <p style="text-align: justify;">
                                {{ $fundador[6]->content }}
                            </p>
                            <p style="text-align: justify;">
                                {{ $fundador[7]->content }}
                            </p>
                            <p style="text-align: justify;">
                                {{ $fundador[8]->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video Presentación / STAR -->
            <div class="section-full text-white bg-img-fix p-t70 p-b70 overlay-black-middle choose-us"
                style="background-image:url({{ asset('themes/zoelife/peru/images/background/fondo.jpg') }});">
                <div class="container" style="padding: 30px 20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-head text-center text-white">
                                <h2 class="h2 text-uppercase">Sobre <span style="color: #fecc00;"> Zoé Life</span></h2>
                                <div class="dez-separator style-icon border-white">
                                    <img src="themes/zoelife/peru/images/leaf-green.png"  alt=""  />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! $video->content !!}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="https://api.whatsapp.com/send?phone=51992914870&text=Hola&nbsp;ZoeLife!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank"  class="site-button btn-zona-descarga" 
                                    style="font-weight: 700; text-align: center; padding: 17px 15px;">
                                    <i class="fab fa-whatsapp" aria-hidden="true" style="font-size: 18px;"></i>&nbsp;&nbsp; Quiero más información 
                            </a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
            <!-- Video Presentación / END -->

            {{-- <section  style="padding: 80px 30px;">

                
                <div class="content-area" style="padding: 10px 10px;">
                    <div class="container">
                        @if ( count($presentacion) > 0)
                        <div class="p-a20 bg-white selector-d m-b20 box-elevado">
                            <div class="section-content" style="text-align: center;">
                                <div class="m-b10">
                                    <h3 class="text-uppercas" style="color: #00b01a;"><b>{{ $presentacion[0]->content }}</b></h3>
                                    <p>{{ $presentacion[1]->content }}</p>
                                    <div class="dez-divider divider-2p icon-center" style="background: #00b01a;">
                                    <i class="fa fa-truck text-white" style="background: #00b01a;"></i></div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                
                <div class="carruselMer">
                    <div class="productosMer">
                        @foreach ($merchandasing as $key => $mer )
                            <div class="productoMer" style="place-items: center;">
                                <img src="{{ $mer->item->items[0]->content }}" alt="Producto 1">
                                <h3>{{ $mer->item->items[3]->content }}</h3>
                                <div class="texto-oculto-js">
                                    <p>
                                        {{ $mer->item->items[4]->content }}
                                    </p>
                                </div>
                                <br>
                                <a href="https://wa.link/7bs0v5" class="btn btn-green">
                                    <i class="fab fa-whatsapp"></i> &nbsp;Adquirir Ahora
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <button class="flechaMer izquierdaMer">&#10094;</button>
                    <button class="flechaMer derechaMer">&#10095;</button>
                    <div class="puntosMer">
                        <span class="puntoMer" data-index="0"></span>
                        <span class="puntoMer" data-index="1"></span>
                        <span class="puntoMer" data-index="2"></span>
                    </div>
                </div>

                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                            <a href="{{ route('web_peru_merchandasing') }}" class="site-button btn-zona-descarga" 
                                style="font-weight: 700; text-align: center; padding: 17px 15px;">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;&nbsp; TODO NUESTRO MERCHANDISING
                            </a>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>

            </section> --}}

            {{-- <section style="padding: 80px 30px;">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-md-12" style="text-align:center; padding: 40px 0px 10px 0px;">
                            <div class="section-head">
                                <h2 class="text-uppercase">Zona de Descarga</h2>
                                <div class="dez-divider divider-2px icon-left" style="background: #00b01a;">
                                    <i class="fa fa-thumbs-o-up text-white"  style="background: #00b01a;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="section-content text-center ">
                            <div class="row" style="justify-content: space-between">
                                <div class="col-md-4" style="padding: 15px;">
                                    <a href="{{ $linkDescarga[0]->content }}" target="_blank" class="site-button btn-zona-descarga" 
                                        style="font-weight: 700; text-align: center; padding: 17px 15px;">
                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp; CATÁLOGO DE PRODUCTOS
                                    </a>
                                </div>
                                <div class="col-md-4" style="padding: 15px;">
                                    <a href="{{ $linkDescarga[1]->content }}" target="_blank"  class="site-button btn-zona-descarga" 
                                        style="font-weight: 700; text-align: center; padding: 17px 15px;">
                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp; PLAN LIBERTAD 
                                    </a>
                                </div>
                                <div class="col-md-4" style="padding: 15px;">
                                    <a href="{{ $linkDescarga[2]->content }}" target="_blank"  class="site-button btn-zona-descarga" 
                                        style="font-weight: 700; text-align: center; padding: 17px 15px;">
                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp; MANUAL DE POLÍTICAS Y PROCESOS
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </section> --}}



        </div>
        <!-- Content END-->

        <!-- Footer -->
        <x-peru.footer-area></x-peru.footer-area>
        <!-- Footer END-->
    @endsection


    



