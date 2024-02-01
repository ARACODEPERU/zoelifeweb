@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr-eventos " style="background-image:url({{ $banner->content }}); top: 10px;">

        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Eventos</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <div class="container" style="padding: 40px;">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;">
                    <a href="" class="site-button" style="width: 80%; font-size: 18px; padding: 10px 30px;"> <b>Inscripciones</b></a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>


                        <!-- Gallery START -->
            <!-- Left & right section start -->
            <div class="" style="width: 100%; padding: 40px;">
                <!-- Gallery START -->
                    @foreach ($galeryEvents as $key => $ge)
                        @if ($key>0)
                                @if ( ($key-1) % $elementos_paginator == 0 || $key == 1)
                                    <ul id="{{ (($key-1)/$elementos_paginator)+1 }}_pag" {{ $key == 1 ? "" : "hidden" }} class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery paginator_aracode">
                                @endif
                                <li class="card-container col-md-3">
                                    <div class="dez-box dez-gallery-box">
                                        <div class="dez-thum dez-img-overlay1 dez-img-effect">
                                            <a href="javascript:void(0);">
                                                <img src="{{ $ge->item->items[0]->content }}" alt="img">
                                            </a>
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <!--
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-link icon-bx-xs"></i>
                                                        </a>
                                                    -->
                                                        <img src="{{ $ge->item->items[0]->content }}" alt="">
                                                    <a href="{{ $ge->item->items[0]->content }}" class="mfp-link"
                                                        title="Eventos">
                                                        <i class="fa fa-picture-o icon-bx-xs"></i> <b  style="color: #fff;">Zoom</b>
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
                        @if ($key > $elementos_paginator && (count($galeryEvents)-1) == $key)
                            </ul>
                        @endif
                    @endforeach

                <!-- Gallery END -->
                <!-- Pagination start -->
                @foreach ($galeryEvents as $key => $ge)
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
                                @if ($key > $elementos_paginator && (count($galeryEvents)-1) == $key && $key % $elementos_paginator != 0)
                                    <li id="{{ intdiv($key, $elementos_paginator) + 1 }}_numpag" onclick="paginator({{ intdiv($key, $elementos_paginator) + 1 }})" class="numpag"><a >{{ intdiv($key, $elementos_paginator) + 1 }}</a></li>
                                @endif
                            @if ( $key > $elementos_paginator && (count($galeryEvents)-1) == $key )
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

        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->
        <style>
            .paginator_aracode {
            transition: opacity 0.5s;
            }
        </style>
            <script>
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
