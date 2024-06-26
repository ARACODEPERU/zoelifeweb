@extends('layouts.mexico')

@section('content')
    <!-- Encabezado inicio -->
    <x-mexico.header-area></x-mexico.header-area>
    <!-- Encabezado fin -->

    <!-- Content -->
    <div class="page-content">

        <div class="btn-header-pc">
            <div class="dez-bnr-inr ara_centrado_total">
                <img style="width: 100%; height: auto;" src="{{ $banner->content }}" alt="">
            </div>
            <div class="breadcrumb-row" style="margin-top: 15px; position:relative; z-index:1;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Contactanos</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="btn-header-mobile">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row" style="margin-top: 80px;">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                        <li>Contactanos</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
        </div>

        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-7">
                        <div class="dzFormMsg"></div>
                        <div class="p-a30 bg-white selector-d clearfix m-b30">
                            <h3 class="des-producto">Envianos un mensaje</h3>
                            <form class="dzForm" id="pageContactForm">
                                <input type="text" hidden name="country" value="ME" required>
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
                            <h3 class="des-producto">Información de Contacto</h3>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs"  style="background: #00b01a;"> 
                                        <a href="javascript:void(0);" class="icon-cell"><i
                                                class="fa fa-map-marker" style="color: #fff;"></i>
                                        </a> 
                                    </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte des-producto">Oficina Principal</h6>
                                        <p>{{ $datosContacto[0]->content }}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs"  style="background: #00b01a;"> <a href="javascript:void(0);" class="icon-cell"><i
                                                class="fa fa-envelope" style="color: #fff;"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte des-producto">E-MAIl</h6>
                                        <p>{{ $datosContacto[1]->content }}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs"  style="background: #00b01a;"> <a href="javascript:void(0);" class="icon-cell"><i
                                                class="fa fa-phone" style="color: #fff;"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte des-producto">TELÉFONO</h6>
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
                        <h4 class="des-producto" >Nuestra Ubicación</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.214123470971!2d-77.03385612512218!3d-12.097488788143261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8686ffa2705%3A0xd12432b3a0aea053!2sAv.%20Petit%20Thouars%203547%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1699642496706!5m2!1ses-419!2spe"
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
    <x-mexico.footer-area></x-mexico.footer-area>
    <!-- Footer END-->
@endsection
