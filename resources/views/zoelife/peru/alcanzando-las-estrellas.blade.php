@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->


    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr" style="background-image:url({{ $banner->content }});">

        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.html">Home</a></li>
                    <li>Alcanzando las Estrellas</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->


        <div class="content-area">
            <div class="container">
                <!-- Dividers with icon -->
                <div class="p-a20 bg-white selector-d m-b20">
                    <div class="section-content" style="text-align: center;">
                        <div class="m-b10">
                            <h3 class="text-uppercase text-primary">¿Qué es alcanzando las estrellas?</h3>
                            <p>Lorem Ipsum is simply dummy text of the een the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a Gallery of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                            </p>
                            <div class="dez-divider divider-2px bg-primary icon-center"><i
                                    class="fa fa-truck bg-primary text-white"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Dividers with icon END -->
            </div>

            <!-- Left & right section start -->

            <div class="" style="width: 100%; padding: 40px;" id="carrusel_aracode">
                <!-- Gallery START -->
                    @foreach ($stars as $key => $star)
                            @if ($key>0)
                                    @if ( ($key-1) % $elementos_paginator == 0 || $key == 1)
                                        <ul id="{{ (($key-1)/$elementos_paginator)+1 }}_pag" {{ $key == 1 ? "" : "hidden" }} class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery paginator_aracode">
                                    @endif
                                    <li class="card-container col-md-3">
                                        <div class="dez-box dez-gallery-box">
                                            <div class="dez-thum dez-img-overlay1 dez-img-effect">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ $star->item->items[0]->content }}" alt="img">
                                                </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <!--
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-link icon-bx-xs"></i>
                                                            </a>
                                                        -->

                                                        <a href="{{ $star->item->items[0]->content }}" class="mfp-link"
                                                            title="Eventos">
                                                            <img src="{{ $star->item->items[0]->content }}" alt=""><b  style="color: #fff;">Zoom</b>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    @if ( $key % $elementos_paginator == 0 && $key > 1)
                                        </ul>
                                    @endif
                            @endif
                            @if ($key > $elementos_paginator && (count($stars)-1) == $key)
                                </ul>
                            @endif
                    @endforeach
                <!-- Gallery END -->

                <!-- Pagination start -->
                @foreach ($stars as $key => $star)
                    @if ($key>0)
                        @if ($key > $elementos_paginator)
                            @if ( $key-1 == $elementos_paginator )
                            <div class="pagination-bx">
                                <ul class="pagination">
                                    <li class="previous"><a onclick="paginator_np('p')"><i class="fa fa-angle-double-left"></i></a></li>
                            @endif

                                @if ( ( $key - 1 ) % $elementos_paginator == 0)
                                    <li id="{{ ($key-1) / $elementos_paginator }}_numpag" onclick="paginator({{ ($key-1) / $elementos_paginator }})" class="{{ ($key-1) / $elementos_paginator == 1? 'numpag active': 'numpag' }}"><a >{{ ($key-1) / $elementos_paginator }}</a></li>
                                @endif
                                @if ($key > $elementos_paginator && (count($stars)-1) == $key && $key % $elementos_paginator != 0)
                                    <li id="{{ intdiv($key, $elementos_paginator) + 1 }}_numpag" onclick="paginator({{ intdiv($key, $elementos_paginator) + 1 }})" class="numpag"><a >{{ intdiv($key, $elementos_paginator) + 1 }}</a></li>
                                @endif
                                @if ($key==count($stars)-1 && (count($stars)-1) % $elementos_paginator == 0)
                                    <li id="{{ intdiv($key, $elementos_paginator) }}_numpag" onclick="paginator({{ intdiv($key, $elementos_paginator) }})" class="numpag"><a >{{ intdiv($key, $elementos_paginator) }}</a></li>
                                @endif
                            @if ( $key > $elementos_paginator && (count($stars)-1) == $key )
                                    <li class="next" onclick="paginator_np('n')"><a ><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            @endif
                        @endif
                    @endif
                @endforeach
                <!-- Pagination END -->
            </div>
            <!-- Left & right section  END -->

            <!-- Left & right section  END -->
        </div>


        <!-- Video Presentación / STAR -->

        <div class="section-full text-white bg-img-fix p-t70 p-b70 overlay-black-dark choose-us"
        style="background-image:url({{ asset('themes/zoelife/peru/images/background/fondo.jpg') }});" id="carrusel_aracode_v">
            <!-- Gallery START -->
                @foreach ($star_videos as $key => $star_video)
                        @if ($key>0)
                                @if ( ($key-1) % $elementos_paginator_v == 0 || $key == 1)
                                    <div id="{{ (($key-1)/$elementos_paginator_v)+1 }}_pag_v" {{ $key == 1 ? "" : "hidden" }} class="container paginator_aracode_v">
                                    <div class="row" style="justify-content: space-between;">
                                @endif

                                    <div class="col-md-6" style="padding: 15px;">
                                        {!! $star_video->item->items[0]->content !!}
                                    </div>

                                @if ( $key % $elementos_paginator_v == 0 && $key > 1)
                                    </div>
                                </div>
                                @endif
                        @endif
                        @if ($key > $elementos_paginator_v && (count($star_videos)-1) == $key)
                            </ul>
                        @endif
                @endforeach
            <!-- Gallery END -->
        </div>
 <!-- Pagination start -->
 @foreach ($star_videos as $key => $star_video)
 @if ($key>0)
     @if ($key > $elementos_paginator_v)
         @if ( $key-1 == $elementos_paginator_v )
         <div class="pagination-bx">
             <ul class="pagination">
                 <li class="previous"><a onclick="paginator_np_v('p')"><i class="fa fa-angle-double-left"></i></a></li>
         @endif

             @if ( ( $key - 1 ) % $elementos_paginator_v == 0)
                 <li id="{{ ($key-1) / $elementos_paginator_v }}_numpag_v" onclick="paginator_v({{ ($key-1) / $elementos_paginator_v }})" class="{{ ($key-1) / $elementos_paginator_v == 1? 'numpag_v active': 'numpag_v' }}"><a >{{ ($key-1) / $elementos_paginator_v }}</a></li>
             @endif
             @if ($key > $elementos_paginator_v && (count($star_videos)-1) == $key && $key % $elementos_paginator_v != 0)
                 <li id="{{ intdiv($key, $elementos_paginator_v) + 1 }}_numpag_v" onclick="paginator_v({{ intdiv($key, $elementos_paginator_v) + 1 }})" class="numpag_v"><a >{{ intdiv($key, $elementos_paginator_v) + 1 }}</a></li>
             @endif
             @if ($key==count($star_videos)-1 && (count($star_videos)-1) % $elementos_paginator_v == 0)
                     <li id="{{ intdiv($key, $elementos_paginator_v) }}_numpag_v" onclick="paginator_v({{ intdiv($key, $elementos_paginator_v) }})" class="numpag_v"><a >{{ intdiv($key, $elementos_paginator_v) }}</a></li>
             @endif
             @if ( $key > $elementos_paginator_v && (count($star_videos)-1) == $key )
                 <li class="next" onclick="paginator_np_v('n')"><a ><i class="fa fa-angle-double-right"></i></a></li>
             </ul>
         </div>
         @endif
     @endif
 @endif
@endforeach
 <!-- Pagination END -->
        <!-- Video Presentación / END -->

        
        <div class="container" style="padding: 40px;">
            <div class="row" style="justify-content: space-between">
                <div class="col-md-2"></div>
                <div class="col-md-4" style="text-align: center;">
                    <a href="" target="_blank"  class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px; border-radius: 30px;"> 
                        <b><i class="fa fa-users" aria-hidden="true"></i> Más Información</b>
                    </a>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>



        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->
        <style>
            .paginator_aracode {
            transition: opacity 0.5s;
            }
            .paginator_aracode_v {
            transition: opacity 0.5s;
            }
        </style>
            <script>

                    var intervalID;
                    function startInterval() {
                    intervalID = setInterval(function() {
                        paginator_np("n");
                    }, 3000);
                    }

                    function stopInterval() {
                    clearInterval(intervalID);
                    }

                var elementoHTML = document.getElementById("carrusel_aracode");

                elementoHTML.addEventListener("mouseenter", stopInterval);
                elementoHTML.addEventListener("mouseleave", startInterval);
                function paginator(n){
                    var elements = document.querySelectorAll(".paginator_aracode");
                    for (var i = 0; i < elements.length; i++) {
                    elements[i].hidden = true;
                    }
                    document.getElementById(n+"_pag").hidden=false;
                    var elements = document.querySelectorAll(".numpag");

                    for (var i = 0; i < elements.length; i++) {
                    elements[i].classList.remove("active");
                    }

                    var targetElement = document.getElementById(n + "_numpag");
                    targetElement.classList.add("active");
                }

                function paginator_np(n){
                    var elements = document.querySelectorAll(".paginator_aracode");
                    var id;
                    for (var i = 0; i < elements.length; i++) {
                    if (!elements[i].hidden) {
                        id = elements[i].id;
                        console.log("El ID del elemento sin atributo hidden es: " + id);
                        break; // Rompe el bucle una vez que se encuentra el primer elemento sin hidden
                    }
                    }
                    var pagina = id;
                    var numero = parseInt(pagina.match(/\d+/)[0]);

                    if(n=="p"){
                        if(numero>1)paginator(--numero);
                    }
                    if(n=="n"){
                            if(document.getElementById((numero+1)+"_pag")){
                            paginator(++numero);
                            }else{
                                paginator(1);
                            }
                    }
                }
            </script>

            <!-- script del video -->
            <script>

                var intervalID_v;
                function startInterval_v() {
                intervalID_v = setInterval(function() {
                    paginator_np_v("n");
                }, 12000);
                }

                function stopInterval_v() {
                clearInterval(intervalID_v);
                }

            var elementoHTML_v = document.getElementById("carrusel_aracode_v");

            elementoHTML_v.addEventListener("mouseenter", stopInterval_v);
            elementoHTML_v.addEventListener("mouseleave", startInterval_v);
            function paginator_v(n){
                var elements_v = document.querySelectorAll(".paginator_aracode_v");
                for (var i = 0; i < elements_v.length; i++) {
                elements_v[i].hidden = true;
                }
                document.getElementById(n+"_pag_v").hidden=false;
                var elements_v = document.querySelectorAll(".numpag_v");

                for (var i = 0; i < elements_v.length; i++) {
                elements_v[i].classList.remove("active");
                }

                var targetElement_v = document.getElementById(n + "_numpag_v");
                targetElement_v.classList.add("active");
            }

            function paginator_np_v(n){
                var elements_v = document.querySelectorAll(".paginator_aracode_v");
                var id_v;
                for (var i = 0; i < elements_v.length; i++) {
                if (!elements_v[i].hidden) {
                    id_v = elements_v[i].id;
                    console.log("El ID del elemento sin atributo hidden es: " + id_v);
                    break; // Rompe el bucle una vez que se encuentra el primer elemento sin hidden
                }
                }
                var pagina_v = id_v;
                var numero_v = parseInt(pagina_v.match(/\d+/)[0]);

                if(n=="p"){
                    if(numero_v>1)paginator_v(--numero_v);
                }
                if(n=="n"){
                        if(document.getElementById((numero_v+1)+"_pag_v")){
                        paginator_v(++numero_v);
                        }else{
                            paginator_v(1);
                        }
                }
            }
        </script>
    </div>
    <!-- Content END-->


    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
