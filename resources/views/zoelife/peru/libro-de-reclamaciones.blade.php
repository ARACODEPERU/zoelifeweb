@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    {{-- <x-peru.header-area></x-peru.header-area> --}}
    <!-- Encabezado fin -->

    <x-peru-header />

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr " style="background-image:url({{ $banner->content }}); margin-top: 80px;">

        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}" style="color:#00b01a;">Home</a></li>
                    <li>Libro de Reclamaciones</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" onclick="this.parentElement.parentElement.remove()">
                        <title>Cerrar</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        @endif

        <section style="padding: 60px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <form class="form" method="post" action="{{ route('complaints_book_store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>1. INFORMACIÓN DEL CONSUMIDOR RECLAMANTE</h5>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tu Nombre *</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" name="names"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tipo de Documento *</label>
                                        <select class="form-control" name="tipoIdentificacion" id="tipoIdentificcion"
                                            required>
                                            @foreach ($tipoDocumentos as $tipo)
                                                <option value="{{ $tipo->id }}">{{ $tipo->description }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Número de Documento *</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput" name="dni"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tu Correo Electrónico *</label>
                                        <input type="email" class="form-control" id="formGroupExampleInput"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tu Teléfono *</label>
                                        <input type="tel" class="form-control" id="formGroupExampleInput"
                                            name="telefono">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h5>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tipo de Producto *</label>
                                        <select class="form-control" name="tipoBien" id="cbxSer">
                                            <option value="product">Producto</option>
                                            <option value="service">Servicio</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Nombre del Producto/Servicio *</label>
                                        <textarea class="form-control" name="descripcion_bien" id="txtdesc" cols="30" rows="10"
                                            placeholder="nombre del bien o servicio y alguna descripción"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chxMonto" id="cbxMoneda">
                                            <label class="form-check-label" for="exampleCheck1">
                                                Deseo Reclamar un monto por el producto/servicio *
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Elija Tipo Moneda *</label>
                                        <select class="form-control" name="moneda" id="cbxMoneda">
                                            @foreach ($monedas as $moneda)
                                                <option value="{{ $moneda->id }}">{{ $moneda->description }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Monto Reclamado *</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            name="monto">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="form-label">Reclamo o
                                            Queja*</label>
                                        <select class="form-control" name="tipoReclamo" id="cbxTipoQueja">
                                            <option value="queja">Queja</option>
                                            <option value="reclamo">Reclamo</option>
                                        </select>
                                        <span>
                                            Elija "Reclamo" si la disconformidad es con el producto o servicio. Elija
                                            "Queja" si la disconformidad es con la atención, u otros aspectos no
                                            relacionados con el producto o servicio.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Detalle *</label>
                                        <textarea class="form-control" name="reclamo" id="txtReclamo" cols="30" rows="10"
                                            placeholder="Detalle por favor el motivo de su reclamación"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Solución esperada *</label>
                                        <textarea class="form-control" name="pedido" id="txtPedido" cols="30" rows="10"
                                            placeholder="Cuéntenos qué espera como solución a su reclamación"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="acepto">
                                    <label class="form-check-label" for="exampleCheck1">Declaro ser el usuario del
                                        servicio o producto
                                        y acepto el contenido del presente formulario manifestando bajo Declaración
                                        Jurada la veracidad
                                        de los hechos descritos
                                    </label>
                                </div>
                            </div>
                            <button type="submit">Enviar</button>
                        </form>
                        {{-- <div class="tabs">
                            <div class="tabs__content">
                                <form class="form" method="post" action="{{ route('complaints_book_store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>1. INFORMACIÓN DEL CONSUMIDOR RECLAMANTE</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-6">
                                                <label for="formGroupExampleInput" class="form-label">Tu Nombre *</label>
                                                <input required type="text" class="form-control"
                                                    id="formGroupExampleInput" name="names">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="mb-6">
                                                <label for="formGroupExampleInput" class="form-label">Tipo de Documento
                                                    *</label>
                                                <select required name="tipoIdentificacion" id="tipoIdentificcion">
                                                    @foreach ($tipoDocumentos as $tipo)
                                                        <option value="{{ $tipo->id }}">{{ $tipo->description }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Número de Documento
                                                    *</label>
                                                <input required type="number" class="form-control"
                                                    id="formGroupExampleInput" name="dni">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Tu Correo Electrónico
                                                    *</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Tu Teléfono *</label>
                                                <input type="tel" class="form-control" id="formGroupExampleInput"
                                                    name="telefono">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Tipo de Producto
                                                    *</label>
                                                <select name="tipoBien" id="cbxSer">
                                                    <option value="product">Producto</option>
                                                    <option value="service">Servicio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Nombre del
                                                    Producto/Servicio
                                                    *</label>
                                                <textarea name="descripcion_bien" id="txtdesc" cols="30" rows="10"
                                                    placeholder="nombre del bien o servicio y alguna descripción"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Deseo Reclamar un
                                                    monto por el producto/servicio
                                                    *</label>
                                                <input type="checkbox" name="chxMonto" id="cbxMoneda">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Elija Tipo Moneda
                                                    *</label>
                                                <select name="moneda" id="cbxMoneda">
                                                    @foreach ($monedas as $moneda)
                                                        <option value="{{ $moneda->id }}">{{ $moneda->description }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Monto Reclamado
                                                    *</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    name="monto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Reclamo o
                                                Queja*</label>
                                            <select name="tipoReclamo" id="cbxTipoQueja">
                                                <option value="queja">Queja</option>
                                                <option value="reclamo">Reclamo</option>
                                            </select>
                                            <span>Elija "Reclamo" si la disconformidad es con el producto o servicio. Elija
                                                "Queja" si la disconformidad es con la atención, u otros aspectos no
                                                relacionados con el producto o servicio.</span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="mb-6">
                                            <label for="exampleFormControlTextarea1" class="form-label">Detalle*</label>
                                            <textarea name="reclamo" id="txtReclamo" cols="30" rows="10"></textarea>
                                            <span>Detalle por favor el motivo de su reclamación.</span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="mb-6">
                                            <label for="exampleFormControlTextarea1" class="form-label">Solución
                                                esperada*</label>
                                            <textarea name="pedido" id="txtPedido" cols="30" rows="10"></textarea>
                                            <span>Cuéntenos qué espera como solución a su reclamación.</span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                name="acepto">
                                            <label class="form-check-label" for="exampleCheck1">Declaro ser el usuario del
                                                servicio o producto
                                                y acepto el contenido del presente formulario manifestando bajo Declaración
                                                Jurada la veracidad
                                                de los hechos descritos
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit">Enviar</button>
                                </form>
                            </div>

                        </div> --}}
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
        <style>
            a {
                color: #5A9F00;
                text-decoration: none;
            }

            input[type=checkbox] {
                margin: 0;
                padding: 0;
                height: 17px;
            }

            button {
                cursor: pointer;
                background-color: #5A9F00;
                color: white;
                border: none;
                font-weight: bold;
                text-transform: uppercase;
                border-radius: 6px;
                letter-spacing: 1px;
                width: 100%;
                height: 40px;
                transition: 300ms background-color ease-in-out;
            }

            button:hover {
                background-color: #026410;
            }
        </style>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
