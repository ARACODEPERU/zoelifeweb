@extends('layouts.peru')

@section('content')

    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(themes/zoelife/peru/images/header-page/centrosPeru.jpg);">
        <!--
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
        -->
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html">Home</a></li>
                <li>Centros de Distribución: <b>Lima</b></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->

    <section style="padding: 60px 0px;">
        <div class="container">
            <table class="table">
                <thead class="table-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Distrito</th>
                      <th scope="col">Distribución</th>
                      <th scope="col">Dirección</th>
                      <th scope="col">Mapa</th>
                      <th scope="col">Celular</th>
                      <th scope="col">E-Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Independencia</td>
                      <td>Eliana Manuela Rondo Polo</td>
                      <td>Mercado los Incas - Segundo piso, puesto 3 (Ref: Estación Naranjal)</td>
                      <td>
                        <a target="_blank" href="https://maps.app.goo.gl/JquQt5bMkYqiB16Y8">Ver Mapa</a>
                      </td>
                      <td>946333256</td>
                      <td>elyrondo@gmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>La Victoria</td>
                      <td>Dina Escobar Castro</td>
                      <td>Jr. Italia 1571 / Ref. Cruce Av Gamarra con Av. Anotnio Bazo (Gamarra)</td>
                      <td>
                        <a target="_blank" href="https://maps.app.goo.gl/5P1T7CCogmNBukJ38">Ver Mapa</a>
                      </td>
                      <td>997398393</td>
                      <td>jazlover.2017@gmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Los Olivos</td>
                      <td>Juana Flora Falcón Enciso</td>
                      <td>Calle los Olivos, Tda. N° 88- 2do piso. (Mercado Mayorista "Merprolima" / Ref: Alt. Cdra 47 de la Av. Universitaria Norte con Av. Los Alisos)</td>
                      <td>
                        <a target="_blank" href="https://maps.app.goo.gl/8oLuoXqNHKYYBTy36">Ver Mapa</a>
                      </td>
                      <td>993995654</td>
                      <td>juanafe24@gmail.com</td>
                    </tr>
                </tbody>
              </table>
        </div>
    </section>


    <br>

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection