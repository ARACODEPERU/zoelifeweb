@extends('layouts.bolivia')

@section('content')
    <!-- Encabezado inicio -->
    <x-bolivia.header-area></x-bolivia.header-area>
    <!-- Encabezado fin -->

    <!-- inner page banner -->
        <div class="dez-bnr-inr ara_centrado_total">
            <img style="width: 100%;" src="{{ $banner->content }}" alt="">
        </div>
    <!-- inner page banner END -->

    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('web_bolivia_inicio') }}">Home</a></li>
                <li>Centros de Distribución</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->

    <div class="content-area">
        <div class="">
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
                        <li class="card-container col-md-4 {{ $center->district->department->name }}" style="padding: 15px;">
                            <div class="dez-box dez-gallery-box">
                                <a href="#" onclick="openModalCenterDetails(event, {{ json_encode($center) }})">
                                    <div class="dez-thum dez-img-overlay1 dez-img-effect">
                                        <img src="{{ asset('storage/' . $center->image) }}" alt="">
                                    </div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>

    <br>

    <!-- Modal -->
    <div class="modal fade" id="modal-centros" tabindex="-1" role="dialog" aria-labelledby="centrosTitle"
        aria-hidden="true">
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
                            <img id="modal-centros-img" src="" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <b>Representante:</b><span id="modal-centros-res"> Jesus Anaya Aguirre</span>
                        </div>
                        <div class="col-md-6">
                            <b>Teléfono:</b> <span id="modal-centros-tel"> Jesus Anaya Aguirre</span>
                        </div>
                        <div class="col-md-6">
                            <b>Correo Electrónico:</b> <span id="modal-centros-ele"> Jesus Anaya Aguirre</span>
                        </div>
                        <div class="col-md-6">
                            <b>Dirección:</b> <span id="modal-centros-dir"> Jesus Anaya Aguirre</span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12" id="modal-centros-ifr">

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
    <script>
        function openModalCenterDetails(event, centerObject) {
            // Evitar que el enlace abra el modal directamente
            event.preventDefault();
            console.log(centerObject)

            // Cambiar el atributo src de la imagen en el modal
            document.getElementById('modal-centros-img').src = "{{ asset('storage') }}" + "/" + centerObject.image;
            document.getElementById('modal-centros-res').innerHTML = centerObject.agent;
            document.getElementById('modal-centros-tel').innerHTML = centerObject.phone;
            document.getElementById('modal-centros-ele').innerHTML = centerObject.email;
            document.getElementById('modal-centros-dir').innerHTML = centerObject.address;
            document.getElementById('modal-centros-ifr').innerHTML = centerObject.map;
            // Abre el modal después de procesar la lógica
            // ...

            // Ejemplo: abrir modal usando Bootstrap
            $('#modal-centros').modal('show');
        }
    </script>
    <!-- Footer -->
    <x-bolivia.footer-area></x-bolivia.footer-area>
    <!-- Footer END-->
@endsection
