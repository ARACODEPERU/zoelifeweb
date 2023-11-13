@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(themes/zoelife/peru/images/header-page/centrosPeru.jpg);">
        <!--
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
        -->
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html">Home</a></li>
                <li>Centros de Distribución</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->

    <div class="content-area">
        <!-- Left & right section start -->
        <div class="container">
            <!-- Gallery -->
            <div class="site-filters clearfix center m-b40">
                <ul class="filters" data-toggle="buttons">
                    <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Todos</span></a> 
                    </li>
                    <li data-filter="amazonas" class="btn">
                        <input type="radio" >
                        <a href="#" class="site-button-secondry"><span>Amazonas</span></a> 
                    </li>
                    <li data-filter="ancash" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Áncash</span></a> 
                    </li>
                    <li data-filter="apurimac" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry "><span>Apurímac</span></a> 
                    </li>
                    <li data-filter="arequipa" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Arequipa</span></a> 
                    </li>
                    <li data-filter="ayacucho" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Ayacucho</span></a> 
                    </li>
                    <li data-filter="cajamarca" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Cajamarca</span></a> 
                    </li>
                    <li data-filter="cuzco" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Cusco</span></a> 
                    </li>
                    <li data-filter="huancavelica" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Huancavelica</span></a> 
                    </li>
                    <li data-filter="huanuco" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Huánuco</span></a> 
                    </li>
                    <li data-filter="ica" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Ica</span></a> 
                    </li>
                    <li data-filter="junin" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Junín</span></a> 
                    </li>
                    <li data-filter="window" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>La Libertad</span></a> 
                    </li>
                    <li data-filter="window" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Lambayeque</span></a> 
                    </li>
                    <li data-filter="lima" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Lima</span></a> 
                    </li>
                    <li data-filter="loreto" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Loreto</span></a> 
                    </li>
                    <li data-filter="madre de dios" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Madre de Dios</span></a> 
                    </li>
                    <li data-filter="moquegua" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Moquegua</span></a> 
                    </li>
                    <li data-filter="pasco" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Pasco</span></a> 
                    </li>
                    <li data-filter="piura" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Piura</span></a> 
                    </li>
                    <li data-filter="puno" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Puno</span></a> 
                    </li>
                    <li data-filter="san martin" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>San Martín</span></a> 
                    </li>
                    <li data-filter="tacna" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Tacna</span></a> 
                    </li>
                    <li data-filter="tumbes" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Tumbes</span></a> 
                    </li>
                    <li data-filter="ucayali" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Ucayali</span></a> 
                    </li>
                </ul>
            </div>
            <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                <li class="card-container col-md-4 lima">
                    <div class="dez-box dez-gallery-box">
                        <a href="{{ route('web_peru_centros_lima') }}"> 
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> 
                                <img src="themes/zoelife/peru/images/center/lima.jpg"  alt="Lima"> 
                            </div>
                        </a>
                    </div>
                </li>
                <li class="card-container col-md-4 cuzco">
                    <div class="dez-box dez-gallery-box">
                        <a href=""> 
                            <div class="dez-thum dez-img-overlay1 dez-img-effect"> 
                                <img src="themes/zoelife/peru/images/center/cuzco.jpg"  alt=""> 
                                <!--
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/center/cuzco.jpg" class="mfp-link" title="Cuzco"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                </div>
                                -->
                            </div>
                        </a>
                    </div>
                </li>
                <li class="card-container col-md-4 ancash">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href=""> <img src="themes/zoelife/peru/images/center/nuevo-chimbote.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="themes/zoelife/peru/images/center/nuevo-chimbote.jpg" class="mfp-link" title="Nuevo Chimbote"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-md-4 cajamarca">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href=""> <img src="themes/zoelife/peru/images/center/cajamarca.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/center/cajamarca.jpg" class="mfp-link" title="Cajamarca"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-md-4 ancash">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href=""> <img src="themes/zoelife/peru/images/center/chimbote.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/center/chimbote.jpg" class="mfp-link" title="Chimbote"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-md-4 tacna">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href=""> <img src="themes/zoelife/peru/images/center/tacna.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/center/tacna.jpg" class="mfp-link" title="Tacna"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-md-4 arequipa">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href=""> <img src="themes/zoelife/peru/images/center/arequipa.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="themes/zoelife/peru/images/center/arequipa.jpg" class="mfp-link" title="Arequipa"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="card-container col-md-4 ayacucho">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect"> <a href=""> <img src="themes/zoelife/peru/images/center/ayacucho.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="themes/zoelife/peru/images/center/ayacucho.jpg" class="mfp-link" title="Ayacucho"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Gallery END -->
            <!-- Pagination start -->
            <div class="pagination-bx">
                <ul class="pagination">
                    <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Left & right section  END -->
    </div>

    <br>

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection