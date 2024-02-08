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

                    </div>
                </div>
            </div>
        </div>
        <!-- Video Presentación / END -->

        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Nuestro Equipo -->
                <div class="p-a30 bg-white m-b30 selector-d">
                    Hola
                </div>
                <!-- Nuestro Equipo END -->
            </div>
            <!-- Left & right section  END -->
        </div>



        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->
        <style>
            .paginator_aracode {
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
    </div>
    <!-- Content END-->


    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
