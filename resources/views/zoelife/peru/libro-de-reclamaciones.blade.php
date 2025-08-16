@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

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
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Libro de Reclamaciones</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <section style="padding: 60px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs">
                            <!-- Sign In -->
                            <input type="radio" class="tabs__button" name="signForm" id="signIn" checked />
                            <label class="tabs__text" for="signIn">Persona</label>
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
                                                <label for="formGroupExampleInput" class="form-label">Tu Nombre *</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Tus Apellidos
                                                    *</label>
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
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Número de Documento
                                                    *</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Tu Teléfono *</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Tu Correo Electrónico
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
                                            <label class="form-check-label" for="exampleCheck1">Declaro ser el usuario del servicio o producto 
                                                y acepto el contenido del presente formulario manifestando bajo Declaración Jurada la veracidad 
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
                                                <label for="formGroupExampleInput" class="form-label">Tipo de Documento *</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Número de Documento *</label>
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
                                                <label for="formGroupExampleInput" class="form-label">Tú Correo Electrónico *</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Número de Documento *</label>
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
                                            <label class="form-check-label" for="exampleCheck1">Declaro ser el usuario del servicio o producto 
                                                y acepto el contenido del presente formulario manifestando bajo Declaración Jurada la veracidad 
                                                de los hechos descritos
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                color: #5A9F00;
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
                border: 1px solid #5A9F00;
            }

            .input-group__input:focus+label {
                color: #5A9F00;
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
                color: #5A9F00;
                opacity: 1;
                background-color: white;
                border-top: 3px solid #5A9F00;
            }

            .tabs__button:checked+.tabs__text+.tabs__content {
                display: block;
            }
        </style>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
