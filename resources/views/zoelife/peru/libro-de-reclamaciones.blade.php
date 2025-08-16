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
                                {{-- <p>Get back on your track</p> --}}
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <h4>1. INFORMACIÓN DEL CONSUMIDOR RECLAMANTE</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example
                                                    label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example
                                                    label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <h4>2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Example
                                                    label</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Example input placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Example
                                                textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                    </div>
                                    <!-- Normally I would create a grid system or use an existing to cater this issue -->
                                    <div class="flex-space-between">
                                        <label class="flex-align-center"><input type="checkbox" /> Remember Me</label>
                                        <p><a href="#">Forgot Password?</a></p>
                                    </div>
                                    <button type="submit">Submit</button>
                                </form>
                            </div>

                            <!-- Sign Up -->
                            <input type="radio" class="tabs__button" name="signForm" id="signUp" />
                            <label class="tabs__text" for="signUp">Empresa</label>
                            <div class="tabs__content">
                                <h1>New Account</h1>
                                <p>Start your journey now</p>
                                <form class="form">
                                    <div class="input-group">
                                        <input class="input-group__input" type="email" placeholder="&nbsp;"
                                            name="username" id="username" autocomplete="off" required />
                                        <label class="input-group__label" for="email">Email</label>
                                    </div>
                                    <div class="input-group">
                                        <input class="input-group__input" type="password" name="password"
                                            placeholder="&nbsp;" id="password" required />
                                        <label class="input-group__label" for="password">Password</label>
                                    </div>
                                    <p><small>By submitting this form, you confirm you have read and agreed to the <a
                                                href="#">Terms and Conditions.</a></small></p>
                                    <button type="submit">Submit</button>
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
                color: #0086e4;
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
                background-color: #0086e4;
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
                background-color: #18a0ff;
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
                border: 1px solid #0086e4;
            }

            .input-group__input:focus+label {
                color: #0086e4;
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
                color: #0086e4;
                opacity: 1;
                background-color: white;
                border-top: 3px solid #0086e4;
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
