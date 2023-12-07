@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ $banner->content }});">

    </div>
    <!-- inner page banner END -->

    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html">Home</a></li>
                <li>Centros de Distribución</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->

    <div class="content-area">
        <!-- Left & right section start -->
        <div class="container">
            <!-- Gallery -->
            <div class="site-filters clearfix center m-b40">
                <ul class="filters" data-toggle="buttons">
                    <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Todos</span></a>
                    </li>
                    @if (count($departments) > 0)
                        @foreach ($departments as $department)
                            <li data-filter="{{ $department->name }}" class="btn">
                                <input type="radio">
                                <a href="#" class="site-button-secondry"><span>{{ $department->name }}</span></a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <ul id="masonry" class="dez-gallery-listing row gallery-grid-4 m-b0 mfp-gallery">
                @if (count($centers) > 0)
                    @foreach ($centers as $center)
                        <li class="card-container col-md-4 {{ $center->district->department->name }}">
                            <div class="dez-box dez-gallery-box">
                                <a href="" data-toggle="modal" data-target="#centros">
                                    <div class="dez-thum dez-img-overlay1 dez-img-effect">
                                        <img src="{{ asset('storage/' . $center->image) }}" alt="Lima">
                                    </div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                @endif

                {{-- <li class="card-container col-md-4 ayacucho">
                    <div class="dez-box dez-gallery-box">
                        <div class="dez-thum dez-img-overlay1 dez-img-effect">
                            <a href="">
                                <img src="themes/zoelife/peru/images/center/ayacucho.jpg" alt="">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon"> <a href=""> <i class="fa fa-link icon-bx-xs"></i> </a>
                                    <a href="themes/zoelife/peru/images/center/ayacucho.jpg" class="mfp-link"
                                        title="Ayacucho"> <i class="fa fa-picture-o icon-bx-xs"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> --}}
            </ul>
            <!-- Gallery END -->
            <!-- Pagination start -->
            {{-- <div class="pagination-bx">
                <ul class="pagination">
                    <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div> --}}
            <!-- Pagination END -->
        </div>
        <!-- Left & right section  END -->
    </div>


    <!-- Paises / STAR -->
    <div class="container" style="padding: 60px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="p-a30 bg-white m-b30">
                    <div class="section-content">
                        <h2 class="text-uppercase">SELECCIONAR PAIS</h2>
                        <div class="dez-divider divider-2px bg-primary icon-left">
                            <i class="fa fa-thumbs-o-up bg-primary text-white"></i>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($pages as $page)
                            <div class="col-md-2 aracode-flags">
                                <a href=" {{ route($page->route) }} "  class="ara-contenedor-redondo">
                                    @if ($page->country)
                                        <img style="height: 70px; width: auto; " src="{{ $page->country->image }}"
                                            alt="">
                                    @else
                                        SIN PAIS
                                    @endif
                                </a>
                                <br>
                                <span><b>{{ $page->country->description }}</b></span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Paises / END -->

    <br>
    
    <!-- Modal -->
    <div class="modal fade" id="centros" tabindex="-1" role="dialog" aria-labelledby="centrosTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header ara-modal-title">
                <h5 class="modal-title" id="centrosTitle">Centro de Distribución:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <img src="themes/zoelife/peru/images/Independencia-Lima-Peru.jpg" alt="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <b>Representante:</b> Jesus Anaya Aguirre
                    </div>
                    <div class="col-md-6">
                        <b>Teléfono:</b> 977627207
                    </div>
                    <div class="col-md-6">
                        <b>Correo Electrónico:</b> connexion.jesus@gmail.com
                    </div>
                    <div class="col-md-6">
                        <b>Dirección:</b> Av. Pettit touars 1425 - San Isidro
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3902.902428081117!2d-77.0607342!3d-11.981253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce4b619a87fb%3A0x6471351404e01c07!2sMercado%20Los%20Incas!5e0!3m2!1ses-419!2spe!4v1700758432787!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
  
      <br>

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
