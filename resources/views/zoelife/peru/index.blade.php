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
                                        <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default"
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
                                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1"
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
                                                style="z-index: 2;background-color:rgba(0, 0, 0, 0.05);border-color:rgba(0, 0, 0, 0);border-width:0px;">
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
                style="background-image:url(themes/zoelife/peru/images/background/garden/bg2.jpg);">
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
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/peru.png"
                                        alt="">
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/bolivia.png"
                                        alt="">
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/colombia.png"
                                        alt="">
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/ecuador.png"
                                        alt="">
                                </div>
                                <div class="col-md-3" style="padding: 20px; text-align:center;">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/mexico.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Dividers with icon END -->
                    </div>
                </div>
            </div>


            <!-- Our Projects
                    <div class="section-full bg-img-fix p-t70 p-b40 overlay-black-middle our-projects-galery" style="background-image:url(themes/zoelife/peru/images/background/garden/bg3.jpg);">
                        <div class="container">
                            <div class="section-head  text-center text-white">
                                <h2 class="h2">Our <span class="text-primary">Project</span></h2>
                                <div class="dez-separator text-primary style-icon border-white"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                            </div>
                            <div class="site-filters clearfix center  m-b40">
                                <ul class="filters" data-toggle="buttons">
                                    <li data-filter="" class="btn active">
                                        <input type="radio">
                                        <a href="#" class="site-button white radius-xl"><span>Show All</span></a> </li>
                                    <li data-filter="home" class="btn">
                                        <input type="radio" >
                                        <a href="#" class="site-button white radius-xl"><span>Planting</span></a> </li>
                                    <li data-filter="office" class="btn">
                                        <input type="radio">
                                        <a href="#" class="site-button white radius-xl"><span>Landscaping</span></a> </li>
                                    <li data-filter="commercial" class="btn">
                                        <input type="radio">
                                        <a href="#" class="site-button white radius-xl"><span>Hardscapes</span></a> </li>
                                    <li data-filter="window" class="btn">
                                        <input type="radio">
                                        <a href="#" class="site-button white radius-xl"><span>Lewis Mcdonald</span></a> </li>
                                </ul>
                            </div>
                            <div class="clearfix">
                                <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 gallery mfp-gallery">
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 home">
                                        <div class="dez-box dez-gallery-box m-b0">
                                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic1.jpg"  alt=""> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic1.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 office">
                                        <div class="dez-box dez-gallery-box m-b0">
                                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic2.jpg"  alt=""> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 commercial">
                                        <div class="dez-box dez-gallery-box m-b0">
                                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic3.jpg"  alt=""> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="themes/zoelife/peru/images/our-work/froot-gardens/pic3.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 window">
                                        <div class="dez-box dez-gallery-box m-b0">
                                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic4.jpg"  alt=""> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic4.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 home">
                                        <div class="dez-box dez-gallery-box m-b0">
                                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic5.jpg"  alt=""> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic5.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 commercial">
                                        <div class="dez-box dez-gallery-box m-b0">
                                            <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic6.jpg"  alt=""> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic6.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

            <!-- Our Projects END -->

            <!-- Team member
                    <div class="section-full bg-white p-t70 p-b40">
                        <div class="container">
                            <div class="section-head text-center ">
                                <h2 class="h2"> Meet The <span class="text-primary">Team?</span></h2>
                                <div class="dez-separator text-primary style-icon border-dark"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                            </div>
                            <div class="section-content text-center">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="dez-box m-b30">
                                            <div class="dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic3.jpg" alt="" width="358" height="460"> </a>
                                                <div class="dez-info-has ">
                                                    <ul class="dez-social-icon dez-social-icon-lg dez-border">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-a10 bg-primary">
                                                <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">Nashid Martines</a></h4>
                                                <span class="dez-member-position">Director</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="dez-box m-b30">
                                            <div class=" dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic4.jpg" alt="" width="358" height="460"> </a>
                                                <div class="dez-info-has ">
                                                    <ul class="dez-social-icon dez-social-icon-lg dez-border">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-a10 bg-primary">
                                                <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">Hackson Willingham</a></h4>
                                                <span class="dez-member-position">Developer</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="dez-box m-b30">
                                            <div class="dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic2.jpg" alt="" width="358" height="460"> </a>
                                                <div class="dez-info-has ">
                                                    <ul class="dez-social-icon dez-border dez-social-icon-lg">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-a10  bg-primary">
                                                <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">konne Backfield</a></h4>
                                                <span class="dez-member-position">Designer</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="dez-box m-b30">
                                            <div class="dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic1.jpg" alt="" width="358" height="460"> </a>
                                                <div class="dez-info-has">
                                                    <ul class="dez-social-icon dez-social-icon-lg dez-border">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-a10 bg-primary">
                                                <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">konne Backfield</a></h4>
                                                <span class="dez-member-position">Manager</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

            <!-- Team member END -->
            <!-- Why Choose Us
                    <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-middle choose-us" style="background-image:url(themes/zoelife/peru/images/background/garden/bg2.jpg);">
                        <div class="container">
                            <div class="section-head  text-center text-white">
                                <h2 class="h2">Why <span class="text-primary">Choose Us</span></h2>
                                <div class="dez-separator text-primary style-icon border-white"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                                        <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img1.png"/></a> </div>
                                        <div class="icon-content">
                                            <h4 class="dez-tilte m-b0">Experience<br/>
                                                Skills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                                        <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img2.png"/></a> </div>
                                        <div class="icon-content">
                                            <h4 class="dez-tilte m-b0">Guarantee<br/>
                                                Services</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                                        <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img3.png"/></a> </div>
                                        <div class="icon-content">
                                            <h4 class="dez-tilte m-b0">Expert<br/>
                                                Gardener</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                                        <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img4.png"/></a> </div>
                                        <div class="icon-content">
                                            <h4 class="dez-tilte m-b0">Online<br/>
                                                Pay</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                                        <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img5.png"/></a> </div>
                                        <div class="icon-content">
                                            <h4 class="dez-tilte m-b0">Trusted<br/>
                                                Work</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                                    <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                                        <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img6.png"/></a> </div>
                                        <div class="icon-content">
                                            <h4 class="dez-tilte m-b0">Quality <br/>
                                                Work</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
            <!-- Why Choose Us End -->

            <!-- Latest blog
                    <div class="section-full p-t70 p-b30">
                        <div class="container">
                            <div class="section-head text-center">
                                <h2 class="h2">Latest Blog <span class="text-primary">Post</span></h2>
                                <div class="dez-separator text-primary style-icon border-dark"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                            </div>
                            <div class="section-content">
                                <div class="row equal-wraper">
                                    <div class="col-lg-4 col-md-4 col-sm-4 equal-col">
                                        <div class="blog-post latest-blog-1 date-style-3">
                                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="themes/zoelife/peru/images/blog/latest-blog/garden/pic1.jpg" alt=""></a> </div>
                                            <div class="dez-post-info p-t20">
                                                <div class="dez-post-title ">
                                                    <h3 class="post-title"><a href="javascript:;">Title of first blog post</a></h3>
                                                </div>
                                                <div class="dez-post-meta ">
                                                    <ul>
                                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">demongo</a> </li>
                                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="dez-post-text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 equal-col">
                                        <div class="blog-post latest-blog-1 date-style-3 ">
                                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="themes/zoelife/peru/images/blog/latest-blog/garden/pic2.jpg" alt=""></a> </div>
                                            <div class="dez-post-info p-t20">
                                                <div class="dez-post-title ">
                                                    <h3 class="post-title"><a href="javascript:;">Title of first blog post</a></h3>
                                                </div>
                                                <div class="dez-post-meta ">
                                                    <ul>
                                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">demongo</a> </li>
                                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="dez-post-text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 equal-col">
                                        <div class="blog-post latest-blog-1 date-style-3">
                                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="themes/zoelife/peru/images/blog/latest-blog/garden/pic3.jpg" alt=""></a> </div>
                                            <div class="dez-post-info p-t20">
                                                <div class="dez-post-title ">
                                                    <h3 class="post-title"><a href="javascript:;">Title of first blog post</a></h3>
                                                </div>
                                                <div class="dez-post-meta ">
                                                    <ul>
                                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">demongo</a> </li>
                                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="dez-post-text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
            <!-- Latest blog END -->



            <!-- Testimonials blog
                    <div class="section-full overlay-black-middle bg-img-fix p-t70 p-b60" style="background-image:url(themes/zoelife/peru/images/background/garden/bg1.jpg);">
                        <div class="container">
                            <div class="section-head text-white text-center">
                                <h2 class="h2">What Peolpe <span class="text-primary"> Are Saying</span></h2>
                                <div class="dez-separator style-icon border-white">
                                    <img alt="" src="themes/zoelife/peru/images/leaf-green.png">
                                </div>
                            </div>
                            <div class="section-content">
                                <div class="testimonial-two owl-theme owl-carousel">
                                    <div class="item">
                                        <div class="testimonial-2 testimonial-bg">
                                            <div class="testimonial-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic quote-left radius shadow"><img src="themes/zoelife/peru/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                                <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-2 testimonial-bg">
                                            <div class="testimonial-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic quote-left radius shadow"><img src="themes/zoelife/peru/images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                                                <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimonial-2 testimonial-bg">
                                            <div class="testimonial-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic quote-left radius shadow"><img src="themes/zoelife/peru/images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                                                <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->


            <!-- Testimonials blog END -->

            <!-- Client logo
                    <div class="section-full dez-we-find bg-img-fix p-t50 p-b50 ">
                        <div class="container">
                            <div class="section-content">
                                <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo"><a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo1.jpg" alt=""></a></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo2.jpg" alt=""></a> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo1.jpg" alt=""></a> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo3.jpg" alt=""></a> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo4.jpg" alt=""></a> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo3.jpg" alt=""></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

            <!-- Client logo END -->
        </div>
        <!-- Content END-->

<<<<<<< HEAD
        
        <div class="container" style="padding: 60px 0px;">
            <div class="row">
                <div class="col-md-12">
                    <!-- Dividers with icon -->
                    <div class="p-a30 bg-white m-b30">
                        <div class="section-content">
                            <h2 class="text-uppercase">SELECCIONAR PAIS</h2>
                            <div class="dez-divider divider-2px bg-primary icon-left"><i class="fa fa-thumbs-o-up bg-primary text-white"></i></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" style="padding: 20px; text-align:center;">
                                <a href="">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/peru.png" alt="">
                                </a>
                                <br>
                                <span><b>Perú</b></span>
                            </div>
                            <div class="col-md-3" style="padding: 20px; text-align:center;">
                                <a href="">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/bolivia.png" alt="">
                                </a>
                                <br>
                                <span><b>Bolivia</b></span>
                            </div>
                            <div class="col-md-3" style="padding: 20px; text-align:center;">
                                <a href="">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/colombia.png" alt="">
                                </a>
                                <br>
                                <span><b>Colombia</b></span>
                            </div>
                            <div class="col-md-3" style="padding: 20px; text-align:center;">
                                <a href="">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/ecuador.png" alt="">
                                </a>
                                <br>
                                <span><b>Ecuador</b></span>
                            </div>
                            <div class="col-md-3" style="padding: 20px; text-align:center;">
                                <a href="">
                                    <img style="width: 70px;" src="themes/zoelife/global/images/flags/mexico.png" alt="">
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


        <!-- Our Projects 
        <div class="section-full bg-img-fix p-t70 p-b40 overlay-black-middle our-projects-galery" style="background-image:url(themes/zoelife/peru/images/background/garden/bg3.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Our <span class="text-primary">Project</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="site-filters clearfix center  m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button white radius-xl"><span>Show All</span></a> </li>
                        <li data-filter="home" class="btn">
                            <input type="radio" >
                            <a href="#" class="site-button white radius-xl"><span>Planting</span></a> </li>
                        <li data-filter="office" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button white radius-xl"><span>Landscaping</span></a> </li>
                        <li data-filter="commercial" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button white radius-xl"><span>Hardscapes</span></a> </li>
                        <li data-filter="window" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button white radius-xl"><span>Lewis Mcdonald</span></a> </li>
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 gallery mfp-gallery">
                        <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 home">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic1.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic1.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 office">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic2.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 commercial">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic3.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="themes/zoelife/peru/images/our-work/froot-gardens/pic3.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 window">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic4.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic4.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 home">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic5.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic5.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 commercial">
                            <div class="dez-box dez-gallery-box m-b0">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="themes/zoelife/peru/images/our-work/froot-gardens/pic6.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/our-work/froot-gardens/pic6.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->

        <!-- Our Projects END -->

        <!-- Team member 
        <div class="section-full bg-white p-t70 p-b40">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="h2"> Meet The <span class="text-primary">Team?</span></h2>
                    <div class="dez-separator text-primary style-icon border-dark"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic3.jpg" alt="" width="358" height="460"> </a>
                                    <div class="dez-info-has ">
                                        <ul class="dez-social-icon dez-social-icon-lg dez-border">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10 bg-primary">
                                    <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">Nashid Martines</a></h4>
                                    <span class="dez-member-position">Director</span> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class=" dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic4.jpg" alt="" width="358" height="460"> </a>
                                    <div class="dez-info-has ">
                                        <ul class="dez-social-icon dez-social-icon-lg dez-border">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10 bg-primary">
                                    <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">Hackson Willingham</a></h4>
                                    <span class="dez-member-position">Developer</span> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic2.jpg" alt="" width="358" height="460"> </a>
                                    <div class="dez-info-has ">
                                        <ul class="dez-social-icon dez-border dez-social-icon-lg">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10  bg-primary">
                                    <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">konne Backfield</a></h4>
                                    <span class="dez-member-position">Designer</span> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect vertical-pan"> <a href="javascript:;"> <img src="themes/zoelife/peru/images/our-team/garden/pic1.jpg" alt="" width="358" height="460"> </a>
                                    <div class="dez-info-has">
                                        <ul class="dez-social-icon dez-social-icon-lg dez-border">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10 bg-primary">
                                    <h4 class="dez-title m-b0"><a href="javascript:;" class="text-white">konne Backfield</a></h4>
                                    <span class="dez-member-position">Manager</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Team member END -->
        <!-- Why Choose Us 
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-middle choose-us" style="background-image:url(themes/zoelife/peru/images/background/garden/bg2.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Why <span class="text-primary">Choose Us</span></h2>
                    <div class="dez-separator text-primary style-icon border-white"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                            <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img1.png"/></a> </div>
                            <div class="icon-content">
                                <h4 class="dez-tilte m-b0">Experience<br/>
                                    Skills</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                            <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img2.png"/></a> </div>
                            <div class="icon-content">
                                <h4 class="dez-tilte m-b0">Guarantee<br/>
                                    Services</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                            <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img3.png"/></a> </div>
                            <div class="icon-content">
                                <h4 class="dez-tilte m-b0">Expert<br/>
                                    Gardener</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                            <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img4.png"/></a> </div>
                            <div class="icon-content">
                                <h4 class="dez-tilte m-b0">Online<br/>
                                    Pay</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                            <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img5.png"/></a> </div>
                            <div class="icon-content">
                                <h4 class="dez-tilte m-b0">Trusted<br/>
                                    Work</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center m-b30">
                            <div class="icon-md text-primary m-b15"><a href="javascript:void(0);" class="icon-cell"><img alt="" src="themes/zoelife/peru/images/choose-us/img6.png"/></a> </div>
                            <div class="icon-content">
                                <h4 class="dez-tilte m-b0">Quality <br/>
                                    Work</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Why Choose Us End -->

        <!-- Latest blog 
        <div class="section-full p-t70 p-b30">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="h2">Latest Blog <span class="text-primary">Post</span></h2>
                    <div class="dez-separator text-primary style-icon border-dark"><img alt="" src="themes/zoelife/peru/images/leaf-green.png"/></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content">
                    <div class="row equal-wraper">
                        <div class="col-lg-4 col-md-4 col-sm-4 equal-col">
                            <div class="blog-post latest-blog-1 date-style-3">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="themes/zoelife/peru/images/blog/latest-blog/garden/pic1.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 equal-col">
                            <div class="blog-post latest-blog-1 date-style-3 ">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="themes/zoelife/peru/images/blog/latest-blog/garden/pic2.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 equal-col">
                            <div class="blog-post latest-blog-1 date-style-3">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:;"><img src="themes/zoelife/peru/images/blog/latest-blog/garden/pic3.jpg" alt=""></a> </div>
                                <div class="dez-post-info p-t20">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="javascript:;">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Latest blog END -->



        <!-- Testimonials blog 
        <div class="section-full overlay-black-middle bg-img-fix p-t70 p-b60" style="background-image:url(themes/zoelife/peru/images/background/garden/bg1.jpg);">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="h2">What Peolpe <span class="text-primary"> Are Saying</span></h2>
                    <div class="dez-separator style-icon border-white">
                        <img alt="" src="themes/zoelife/peru/images/leaf-green.png">
                    </div>
                </div>
                <div class="section-content">
                    <div class="testimonial-two owl-theme owl-carousel">
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="themes/zoelife/peru/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="themes/zoelife/peru/images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="themes/zoelife/peru/images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->


        <!-- Testimonials blog END -->

        <!-- Client logo 
        <div class="section-full dez-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo1.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo1.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo4.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="javascript:void(0);"><img src="themes/zoelife/peru/images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Client logo END -->
    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->

    

    @endsection
=======
        <!-- Footer -->
        <x-peru.footer-area></x-peru.footer-area>
        <!-- Footer END-->
    @endsection
>>>>>>> ae94239cee1513b9a62324db2ae7739846cc5bc6
