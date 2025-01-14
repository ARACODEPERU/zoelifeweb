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
                    @foreach ($merchandasing as $key => $mer)
                        <div class="col-md-3" style="padding: 15px;">
                            <div class="box-producto" style="place-items: center;">
                                <div style="place-items: center;">
                                    <div class="carrusel">
                                        <div class="imagenes" id="imagenes{{ '-' . $key + 1 }}"
                                            style="transform: translateX(0%);">
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
                                        <button class="flecha izquierda"
                                            onclick="anteriorImagen('{{ strval($key + 1) }}')">&#10094;</button>
                                        <button class="flecha derecha"
                                            onclick="siguienteImagen('{{ strval($key + 1) }}')">&#10095;</button>
                                        <div class="puntos">
                                            <span id="punto1-{{ $key + 1 }}" class="punto activo"
                                                data-index="0"></span>
                                            <span id="punto2-{{ $key + 1 }}" class="punto" data-index="1"></span>
                                            <span id="punto3-{{ $key + 1 }}" class="punto" data-index="2"></span>
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
                                <a href="https://wa.link/7bs0v5" class="btn btn-green" style="place-items: center;">
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
                max-width: 100%;
                /* Ocupa el 80% de la pantalla */
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
                min-width: 100%;
                /* Ocupa el 100% del carrusel */
                box-sizing: border-box;
                text-align: center;
            }

            .imagen img {
                max-width: 100%;
                /* Las imágenes ocupan todo el ancho */
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
                /* background-color: rgba(255, 255, 255, 0.8); */
                background-color: #5A9F00;
                color: #fff;
                border: none;
                padding: 10px;
                cursor: pointer;
                font-size: 15px;
                border-radius: 5px;
                z-index: 9;
            }

            .izquierda {
                left: 5px;
            }

            .derecha {
                right: 5px;
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
            const flechaIzquierda = document.querySelector('.izquierda');
            const flechaDerecha = document.querySelector('.derecha');
            let indiceActual = 0;

            function mostrarImagenes(indice, key) {
                let imagenes2 = document.getElementById("imagenes-" + key.toString());
                if (indice == 1) {
                    imagenes2.style.transform = cambiaTranslate(imagenes2.style.transform, 1, key);
                } else {
                    imagenes2.style.transform = cambiaTranslate(imagenes2.style.transform, 0, key);
                }

            }

            function siguienteImagen(key) {
                mostrarImagenes(1, key);
            }

            function anteriorImagen(key) {
                mostrarImagenes(0, key);
            }

            flechaDerecha.addEventListener('click', siguienteImagen);
            flechaIzquierda.addEventListener('click', anteriorImagen);

            mostrarImagenes(indiceActual);

            function cambiaTranslate(transformValue, val, key) {
                // Obtener el valor actual de translateX
                const match = transformValue.match(/translateX\((-?\d+)%\)/);
                if (match) {
                    // Extraer el valor numérico de translateX
                    const currentValue = parseInt(match[1]);
                    if (val == 1) {
                        val = -100;
                        if (currentValue == -200) val = 200; // si llego a -200 le suma 200 para dejarlo en 0
                    } else {
                        val = 100;
                        if (currentValue == 0) val = -200; // si llego a -200 le suma 200 para dejarlo en 0
                    }

                    // Sumar 100 al valor actual
                    const newValue = currentValue + val;
                    switch (newValue) {
                        case 0:
                            document.getElementById('punto1-'+key).classList.add('activo');
                            document.getElementById('punto2-'+key).classList.remove('activo');
                            document.getElementById('punto3-'+key).classList.remove('activo');
                            break;
                        case -100:
                            document.getElementById('punto1-'+key).classList.remove('activo');
                            document.getElementById('punto2-'+key).classList.add('activo');
                            document.getElementById('punto3-'+key).classList.remove('activo');
                            break;
                        case -200:
                            document.getElementById('punto1-'+key).classList.remove('activo');
                            document.getElementById('punto2-'+key).classList.remove('activo');
                            document.getElementById('punto3-'+key).classList.add('activo');
                            break;
                    }
                    // Actualizar el valor de translateX con la suma

                    return `translateX(${newValue}%)`;
                }
            }
        </script>

    </div>

    <!-- Footer -->
    <x-peru.footer-area />
    <!-- Footer END-->
@endsection
