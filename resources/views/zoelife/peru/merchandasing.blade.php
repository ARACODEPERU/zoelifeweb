@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <div class="btn-header-pc">
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <div class="breadcrumb-row" style="position:relative; z-index:1;">
                <div class="container-xxl">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_merchandasing') }}">Home</a></li>
                        <li>Merchandasing</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="btn-header-mobile">
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_merchandasing') }}">Home</a></li>
                        <li>Merchandasing</li>
                    </ul>
                </div>
            </div>
        </div>

        <section style="padding: 40px 15px;">
            <div class="container-xxl">
                <div class="row">
                    @foreach ($merchandasing as $key => $mer )
                        <div class="col-md-3" style="padding: 15px;">
                            <div class="box-producto" style="place-items: center;">
                                <div  style="place-items: center;">
                                    <div class="carrusel">
                                        <div class="imagenes" id="imagenes{{ "-".$key + 1}}">
                                            <div class="imagen">
                                                <img src="{{ $mer->item->items[0]->content }}" alt="Producto - Imagen 1">
                                            </div>
                                            <div class="imagen">
                                                <img src="{{ $mer->item->items[1]->content }}" alt="Producto - Imagen 2">
                                            </div>
                                            <div class="imagen">
                                                <img src="{{ $mer->item->items[2]->content }}" alt="Producto - Imagen 3">
                                            </div>
                                        </div>
                                        <button class="flecha izquierda" onclick="anteriorImagen({{ strval($key + 1) }})">&#10094;</button>
                                        <button class="flecha derecha" onclick="siguienteImagen({{ strval($key + 1) }})">&#10095;</button>
                                        <div class="puntos">
                                            <span class="punto" data-index="0"></span>
                                            <span class="punto" data-index="1"></span>
                                            <span class="punto" data-index="2"></span>
                                        </div>
                                    </div>
                                    {{-- <img style="width: 100%;" src="{{ $mer->item->items[0]->content }}" alt="img_producto"> --}}
                                    <h4 class=" pt-2">{{ $mer->item->items[3]->content }}</h4>
                                </div>
                                <div class="texto-oculto-js" style="place-items: center;">
                                    <p style="text-align: center;">
                                        {{ $mer->item->items[4]->content }}
                                    </p>
                                </div>
                                <br>
                                <a href="" class="btn btn-green">
                                    <i class="fab fa-whatsapp"></i> &nbsp;Adquirir Ahora
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <style>

        .carrusel {
            position: relative;
            max-width: 100%; /* Ocupa el 80% de la pantalla */
            margin: auto;
            overflow: hidden;
            border: 2px solid #ddd;
            border-radius: 10px;
        }
        .imagenes {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .imagen {
            min-width: 100%; /* Ocupa el 100% del carrusel */
            box-sizing: border-box;
            text-align: center;
        }
        .imagen img {
            max-width: 100%; /* Las imágenes ocupan todo el ancho */
            border-radius: 10px;
        }
        .puntos {
            text-align: center;
            padding: 10px 0;
        }
        .punto {
            display: inline-block;
            height: 10px;
            width: 10px;
            margin: 0 5px;
            border-radius: 50%;
            background-color: #bbb;
            cursor: pointer;
        }
        .activo {
            background-color: #717171;
        }
        .flecha {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
            z-index: 1;
        }
        .izquierda {
            left: 10px;
        }
        .derecha {
            right: 10px;
        }

        /* Estilos responsivos */
        @media (max-width: 600px) {
            .flecha {
                font-size: 16px;
                padding: 8px;
            }
        }
        </style>

        <script>
            const imagenes = document.querySelector('.imagenes');
            const puntos = document.querySelectorAll('.punto');
            const flechaIzquierda = document.querySelector('.izquierda');
            const flechaDerecha = document.querySelector('.derecha');
            let indiceActual = 0;

            function mostrarImagenes(indice, key) { 
                // let tmp = ".imagenes-"+key;
                let imagenes2 = document.getElementById("imagenes-"+key.toString())
                imagenes2.style.transform = `translateX(-${indice * 100}%)`;
                puntos.forEach((punto, index) => {
                    punto.classList.toggle('activo', index === indice);
                });
            }

            function siguienteImagen(key) {
                indiceActual = (indiceActual + 1) % puntos.length; // Hay 3 imágenes
                mostrarImagenes(indiceActual, key);
            }

            function anteriorImagen(key) {
                indiceActual = (indiceActual - 1 + puntos.length) % puntos.length; // Hay 3 imágenes
                mostrarImagenes(indiceActual, key);
            }

            flechaDerecha.addEventListener('click', siguienteImagen);
            flechaIzquierda.addEventListener('click', anteriorImagen);

            puntos.forEach(punto => {
                punto.addEventListener('click', () => {
                    indiceActual = parseInt(punto.dataset.index);
                    mostrarImagenes(indiceActual);
                });
            });

    mostrarImagenes(indiceActual);
        </script>

    </div>

    <!-- Footer -->
    <x-peru.footer-area />
    <!-- Footer END-->
@endsection
