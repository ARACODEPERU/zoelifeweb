    @extends('layouts.peru')

    @section('content')
        <!-- Encabezado inicio -->
        <x-peru.header-area></x-peru.header-area>
        <!-- Encabezado fin -->

        <!-- Content -->
        <div class="page-content">
<<<<<<< HEAD
            {{-- @php
                dd('hdhdhddhdh');
            @endphp --}}
=======
     
>>>>>>> 61a555dd16cc0436906207d754523d1ab7138c73
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
            <x-peru.vision-mision-valores-area></x-peru.vision-mision-valores-area>
            <!-- Visión - Misión - Valores / END -->


            <!-- Why Choose Us -->
            <div class="section-full text-white bg-img-fix p-t70 p-b70 overlay-black-dark choose-us"
                style="background-image:url(themes/zoelife/peru/images/background/fondo.jpg);">
                <div class="container">
                    <div class="section-head  text-center text-white">
                        <h2 class="h2">Sobre <span class="text-primary"> Zoé Life</span></h2>
                        <div class="dez-separator text-primary style-icon border-white">
                            <img alt="" src="themes/zoelife/peru/images/leaf-green.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <iframe width="1257" height="707" src="https://www.youtube.com/embed/wvYWJ8NlKcU"
                                title="Delicioso COFFEE 3 en 1 ZOE LIFE" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose Us End -->

            <div class="container" style="padding: 60px 0px;">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Dividers with icon -->
                        <div class="p-a30 bg-white m-b30">
                            <div class="section-content">
                                <h2 class="text-uppercase">SELECCIONAR PAIS</h2>
                                <div class="dez-divider divider-2px bg-primary icon-left"><i
                                        class="fa fa-thumbs-o-up bg-primary text-white"></i></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <a href="">
                                        <img style="width: 70px;" src="themes/zoelife/global/images/flags/peru.png"
                                            alt="">
                                    </a>
                                    <br>
                                    <span><b>Perú</b></span>
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <a href="">
                                        <img style="width: 70px;" src="themes/zoelife/global/images/flags/bolivia.png"
                                            alt="">
                                    </a>
                                    <br>
                                    <span><b>Bolivia</b></span>
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <a href="">
                                        <img style="width: 70px;" src="themes/zoelife/global/images/flags/colombia.png"
                                            alt="">
                                    </a>
                                    <br>
                                    <span><b>Colombia</b></span>
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <a href="">
                                        <img style="width: 70px;" src="themes/zoelife/global/images/flags/ecuador.png"
                                            alt="">
                                    </a>
                                    <br>
                                    <span><b>Ecuador</b></span>
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <a href="">
                                        <img style="width: 70px;" src="themes/zoelife/global/images/flags/mexico.png"
                                            alt="">
                                    </a>
                                    <br>
                                    <span><b>Mexico</b></span>
                                </div>
                            </div>
                        </div>
                        <!-- Dividers with icon END -->
                    </div>
                </div>
            </div>

        </div>
        <!-- Content END-->
        <!-- Footer -->
        <x-peru.footer-area></x-peru.footer-area>
        <!-- Footer END-->
    @endsection
