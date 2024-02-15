@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner | Medidas 1920 x 300 pixeles -->
        <div class="dez-bnr-inr" style="background-image:url({{ $banner->content }});"></div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Testimonios</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->


        <div class="content-area">
            <!-- Left & right section start -->
            <div class="" style="width: 100%; padding: 40px;">



                <div class="section-full text-white bg-img-fix p-t10 p-b30 overlay-black-dark choose-us"
                style="background-image:url({{ asset('themes/zoelife/peru/images/background/fondo.jpg') }});" id="carrusel_aracode_v">
                    <!-- Gallery START -->
                        @foreach ($testimonies as $key => $star_video)
                                @if ($key>0)
                                        @if ( ($key-1) % $elementos_paginator_v == 0 || $key == 1)
                                            <div id="{{ (($key-1)/$elementos_paginator_v)+1 }}_pag_v" {{ $key == 1 ? "" : "hidden" }} class="container paginator_aracode_v">
                                            <div class="row" style="justify-content: space-between;">
                                        @endif

                                            <div class="col-md-6" style="padding: 15px;">
                                                {!! $star_video->video !!}
                                            </div>

                                        @if ( $key % $elementos_paginator_v == 0 && $key > 1 || $key+1 == (count($testimonies)))
                                            </div>
                                        </div>
                                        @endif
                                @endif
                                @if ($key > $elementos_paginator_v && (count($testimonies)-1) == $key)
                                    </ul>
                                @endif
                        @endforeach
                    <!-- Gallery END -->
                </div>
                <!-- Pagination start -->
                @foreach ($testimonies as $key => $star_video)
                @if ($key>0)
                    @if ($key > $elementos_paginator_v)
                        @if ( $key-1 == $elementos_paginator_v )
                        <div class="pagination-bx p-t10 p-b30" style="justify-content: space-between;">
                            <ul class="pagination">
                                <li class="previous"><a onclick="paginator_np_v('p')"><i class="fa fa-angle-double-left"></i></a></li>
                        @endif

                            @if ( ( $key - 1 ) % $elementos_paginator_v == 0)
                                <li id="{{ ($key-1) / $elementos_paginator_v }}_numpag_v" onclick="paginator_v({{ ($key-1) / $elementos_paginator_v }})" class="{{ ($key-1) / $elementos_paginator_v == 1? 'numpag_v active': 'numpag_v' }}"><a >{{ ($key-1) / $elementos_paginator_v }}</a></li>
                            @endif
                            @if ($key > $elementos_paginator_v && (count($testimonies)-1) == $key && $key % $elementos_paginator_v != 0)
                                <li id="{{ intdiv($key, $elementos_paginator_v) + 1 }}_numpag_v" onclick="paginator_v({{ intdiv($key, $elementos_paginator_v) + 1 }})" class="numpag_v"><a >{{ intdiv($key, $elementos_paginator_v) + 1 }}</a></li>
                            @endif
                            @if ($key==count($testimonies)-1 && (count($testimonies)-1) % $elementos_paginator_v == 0)
                                    <li id="{{ intdiv($key, $elementos_paginator_v) }}_numpag_v" onclick="paginator_v({{ intdiv($key, $elementos_paginator_v) }})" class="numpag_v"><a >{{ intdiv($key, $elementos_paginator_v) }}</a></li>
                            @endif
                            @if ( $key > $elementos_paginator_v && (count($testimonies)-1) == $key )
                                <li class="next" onclick="paginator_np_v('n')"><a ><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        @endif
                    @endif
                @endif
                @endforeach
                <!-- Pagination END -->
                <!-- Video Presentación / END -->



















{{--
                <!-- Gallery -->
                <div class="site-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Todos</span></a>
                        </li>
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <li data-filter="{{ $product->name }}" class="btn">
                                    <input type="radio">
                                    <a href="#" class="site-button-secondry"><span>{{ $product->name }}</span></a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                    @if (count($testimonies) > 0)
                        @foreach ($testimonies as $testimony)
                            <li class="card-container col-md-3 {{ $testimony->product->name }}" style="padding: 15px;">
                                <div class="aracode-box-with">
                                    <div class="dez-post-media dez-img-effect zoom-slow">
                                        {!! $testimony->video !!}
                                    </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-title ">
                                            <h3 class="post-title"><a href="">{{ $testimony->title }}</a></h3>
                                        </div>
                                        <div class="dez-post-tags">
                                            <div class="post-tags">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul> --}}
                <!-- Gallery END -->
                <!-- Pagination start -->
                {{-- <div class="pagination-bx">
                    <ul class="pagination">
                        <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a>
                        </li>
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">2</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div> --}}
                <!-- Pagination END -->
            </div>
            <!-- Left & right section  END -->
        </div>

<!-- script del video -->
<script>

    var intervalID_v;
    function startInterval_v() {
    intervalID_v = setInterval(function() {
        paginator_np_v("n");
    }, 16000);
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
        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
