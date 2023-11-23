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
                        <a  href=""  data-toggle="modal" data-target="#exampleModalCenter" >Ver Mapa</a>
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
                        <a  href=""  data-toggle="modal" data-target="#exampleModalCenter" >Ver Mapa</a>
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
                        <a  href=""  data-toggle="modal" data-target="#exampleModalCenter" >Ver Mapa</a>
                      </td>
                      <td>993995654</td>
                      <td>juanafe24@gmail.com</td>
                    </tr>
                </tbody>
              </table>
        </div>
    </section>

    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3902.902428081117!2d-77.0607342!3d-11.981253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce4b619a87fb%3A0x6471351404e01c07!2sMercado%20Los%20Incas!5e0!3m2!1ses-419!2spe!4v1700758432787!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
      </div>
    </div>

    <br>

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->




@endsection