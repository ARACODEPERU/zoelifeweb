@extends('layouts.webpage')

@section('content')


    <!-- header-area-start -->
    <x-header />
    <!-- /.Main Header -->

    <section class="page-header" style="padding: 60px;">
        <div class="bg-img">
            <img src="{{ asset('themes/webpage/assets/img/bg-img/page-header-bg.jpg') }}" alt="bg" style="width: 100%;">
        </div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Politicas de privacidad</h1>
                <h4 class="sub-title">
                    <a class="home" href="{{ route('index_main') }}">Home </a>
                    <span class="icon">/</span>
                    <a class="inner-page" href="{{ route('web_privacy_policies') }}"> Politicas de privacidad</a>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="this.parentElement.parentElement.remove()">
                <title>Cerrar</title>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
        </span>
    </div>
@endif

    <section class="about-section pt-80 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabs">
                        <!-- Sign In -->
                        <input type="radio" class="tabs__button" name="signForm" id="signIn" checked />
                        <label class="tabs__text" for="signIn">Persona</label>
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
                                            <input required type="text" class="form-control" id="formGroupExampleInput" name="names">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-6">
                                            <label for="formGroupExampleInput" class="form-label">Tipo de Documento
                                                *</label>
                                            <select required name="tipoIdentificacion" id="tipoIdentificcion">
                                                @foreach ($tipoDocumentos as $tipo)
                                                    <option value="{{ $tipo->id }}">{{ $tipo->description }}</option>
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
                                            <input required type="number" class="form-control" id="formGroupExampleInput" name="dni">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Tu Correo Electrónico
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="email">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Tu Teléfono *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="telefono">
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
                                            <label for="formGroupExampleInput" class="form-label">Nombre del Producto/Servicio
                                                *</label>
                                            <textarea name="descripcion_bien" id="txtdesc" cols="30" rows="10" placeholder="nombre del bien o servicio y alguna descripción"></textarea>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Deseo Reclamar un monto por el producto/servicio
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
                                                <option value="{{ $moneda->id }}">{{ $moneda->description }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Monto Reclamado
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="monto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Reclamo o Queja*</label>
                                        <select name="tipoReclamo" id="cbxTipoQueja">
                                            <option value="queja">Queja</option>
                                            <option value="reclamo">Reclamo</option>
                                        </select>
                                        <span>Elija "Reclamo" si la disconformidad es con el producto o servicio. Elija "Queja" si la disconformidad es con la atención, u otros aspectos no relacionados con el producto o servicio.</span>
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
                                        <label for="exampleFormControlTextarea1" class="form-label">Solución esperada*</label>
                                        <textarea name="pedido" id="txtPedido" cols="30" rows="10"></textarea>
                                        <span>Cuéntenos qué espera como solución a su reclamación.</span>
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
                        </div>

                        <!-- Sign Up -->
                        <input type="radio" class="tabs__button" name="signForm" id="signUp" />
                        <label class="tabs__text" for="signUp">Empresa</label>
                        <div class="tabs__content">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>1. INFORMACIÓN DEL CONSUMIDOR RECLAMANTE</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Razón Social *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">RUC *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Tu Nombre*</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Tus Apellidos *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Tipo de Documento
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Número de Documento
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Tu Teléfono *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Tú Correo Electrónico
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Número de Documento
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
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
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Nombre del Producto
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Monto Reclamado
                                                *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Detalle de la
                                            Reclamación *</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
                    </div>
                    <style>
                        h1,
                        p {
                            margin-top: 0;
                        }

                        h1 {
                            margin-bottom: 10px;
                        }

                        h1+p {
                            color: #999999;
                            margin-bottom: 30px;
                        }

                        p {
                            margin-bottom: 20px;
                        }

                        a {
                            color: #7d876e;
                            text-decoration: none;
                        }

                        input[type=checkbox] {
                            margin: 0;
                            padding: 0;
                            height: 17px;
                        }

                        .wrapper {
                            min-height: 100vh;
                            display: grid;
                            place-items: center;
                            background: #960096;
                            background: linear-gradient(225deg, #960096 0%, #6b24cd 50%, #0068ff 100%);
                        }

                        .container {
                            width: 100%;
                            height: auto;
                        }

                        .flex-space-between {
                            display: flex;
                            justify-content: space-between;
                        }

                        .flex-align-center {
                            display: flex;
                            justify-content: center;
                            gap: 5px;
                        }

                        button {
                            cursor: pointer;
                            background-color: #7d876e;
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
                            background-color: #6C706F;
                        }

                        .input-group {
                            margin-bottom: 20px;
                            position: relative;
                        }

                        .input-group__label {
                            display: block;
                            position: absolute;
                            top: 0;
                            line-height: 40px;
                            color: #aaa;
                            left: 5px;
                            padding: 0 5px;
                            transition: line-height 200ms ease-in-out, font-size 200ms ease-in-out, top 200ms ease-in-out;
                            pointer-events: none;
                        }

                        .input-group__input {
                            width: 100%;
                            height: 40px;
                            border: 1px solid #dddddd;
                            border-radius: 3px;
                            padding: 0 10px;
                        }

                        .input-group__input:not(:-moz-placeholder-shown)+label {
                            background-color: white;
                            line-height: 10px;
                            opacity: 1;
                            font-size: 10px;
                            top: -5px;
                        }

                        .input-group__input:not(:-ms-input-placeholder)+label {
                            background-color: white;
                            line-height: 10px;
                            opacity: 1;
                            font-size: 10px;
                            top: -5px;
                        }

                        .input-group__input:not(:placeholder-shown)+label,
                        .input-group__input:focus+label {
                            background-color: white;
                            line-height: 10px;
                            opacity: 1;
                            font-size: 10px;
                            top: -5px;
                        }

                        .input-group__input:focus {
                            outline: none;
                            border: 1px solid #7d876e;
                        }

                        .input-group__input:focus+label {
                            color: #6C706F;
                        }

                        .tabs {
                            display: flex;
                            flex-flow: row wrap;
                        }

                        .tabs__text {
                            flex: 1;
                            margin: 0;
                            cursor: pointer;
                            padding: 20px 30px;
                            font-size: 1.2em;
                            opacity: 0.5;
                            background-color: #eeeeee;
                            border-top: 3px solid #eeeeee;
                            transition: border-top 300ms ease-out;
                            transform-origin: top;
                            text-transform: uppercase;
                            font-weight: bold;
                            text-align: center;
                        }

                        .tabs__content {
                            display: none;
                            flex: 1 1 100%;
                            order: 99;
                            padding: 40px 30px 30px 30px;
                            background: white;
                        }

                        .tabs__button {
                            visibility: hidden;
                            height: 0;
                            margin: 0;
                            position: absolute;
                        }

                        .tabs__button:checked+.tabs__text {
                            color: #7d876e;
                            opacity: 1;
                            background-color: white;
                            border-top: 3px solid #7d876e;
                        }

                        .tabs__button:checked+.tabs__text+.tabs__content {
                            display: block;
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->



    <x-footer />
    <!-- ./ footer-section -->

@stop
