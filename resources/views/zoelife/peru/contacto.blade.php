@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    <x-peru.header-area></x-peru.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        <div class="dez-bnr-inr ara_centrado_total">
            <img src="{{ $banner->content }}" alt="">
        </div>
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-7">
                        <div class="dzFormMsg"></div>
                        <div class="p-a30 bg-white selector-d clearfix m-b30">
                            <h3>Envianos un mensaje</h3>
                            <form class="dzForm" id="pageContactForm">
                                <input type="text" hidden name="country" value="PE" required>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                                <input name="full_name" id="full_name" type="text" required
                                                    class="form-control" placeholder="Nombre Completo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </div>
                                                <input name="phone" id="phone" type="telephone" required
                                                    class="form-control" placeholder="Teléfono">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input name="email" id="email" type="email" required
                                                    class="form-control" placeholder="Correo Electrónico">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend v-align-t">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                </div>
                                                <textarea name="message" id="message" rows="4" required class="form-control"
                                                    placeholder="Escribe tu mensaje aqui..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="site-button"
                                            id="submitPageContactButton">
                                            <i class="fa fa-envelope"></i> &nbsp;
                                            <span>Enviar Ahora</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-md-5">
                        <div class="p-a30 bg-white selector-d m-b30">
                            <h3>Información de Contacto</h3>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i
                                                class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Oficina Principal</h6>
                                        <p>{{ $datosContacto[0]->content }}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i
                                                class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">E-MAIl</h6>
                                        <p>{{ $datosContacto[1]->content }}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i
                                                class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">TELÉFONO</h6>
                                        <p>{{ $datosContacto[2]->content }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Map part start -->
                        <h4>Nuestra Ubicación</h4>
                        <iframe
                            src="{{ $datosContacto[3]->content }}"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- Map part END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area  END -->


        <!-- Paises / STAR -->
        {{-- <x-countries-section /> --}}
        <!-- Paises / END -->

    </div>
    <!-- Content END-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let form = document.getElementById('pageContactForm');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                var formulario = document.getElementById('pageContactForm');
                var formData = new FormData(formulario);

                // Deshabilitar el botón
                var submitButton = document.getElementById('submitPageContactButton');
                submitButton.disabled = true;
                submitButton.style.opacity = 0.25;

                // Crear una nueva solicitud XMLHttpRequest
                var xhr = new XMLHttpRequest();

                // Configurar la solicitud POST al servidor
                xhr.open('POST', "{{ route('apisubscriber') }}", true);

                // Configurar la función de callback para manejar la respuesta
                xhr.onload = function() {
                    // Habilitar nuevamente el botón
                    submitButton.disabled = false;
                    submitButton.style.opacity = 1;
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        Swal.fire({
                            icon: 'success',
                            title: 'Enhorabuena',
                            text: response.message,
                            customClass: {
                                container: 'sweet-modal-zindex' // Clase personalizada para controlar el z-index
                            }
                        });
                        formulario.reset();
                    } else if (xhr.status === 422) {
                        var errorResponse = JSON.parse(xhr.responseText);
                        // Maneja los errores de validación aquí, por ejemplo, mostrando los mensajes de error en algún lugar de tu página.
                        var errorMessages = errorResponse.errors;
                        var errorMessageContainer = document.getElementById('messagePageContact');
                        errorMessageContainer.innerHTML = 'Errores de validación:<br>';
                        for (var field in errorMessages) {
                            if (errorMessages.hasOwnProperty(field)) {
                                errorMessageContainer.innerHTML += field + ': ' + errorMessages[field]
                                    .join(', ') +
                                    '<br>';
                            }
                        }
                    } else {
                        console.error('Error en la solicitud: ' + xhr.status);
                    }


                };

                // Enviar la solicitud al servidor
                xhr.send(formData);
            });
        });
    </script>
    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
