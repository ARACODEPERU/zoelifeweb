@extends('layouts.peru')

@section('content')
    <!-- Encabezado inicio -->
    {{-- <x-peru.header-area></x-peru.header-area> --}}
    <!-- Encabezado fin -->

    <x-peru-header />

    <!-- Content -->
    <div class="page-content">

        <!-- inner page banner -->
        {{-- <div class="dez-bnr-inr " style="background-image:url({{ $banner->content }});">

        </div> --}}
        <!-- inner page banner END -->

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('web_peru_inicio') }}">Home</a></li>
                    <li>Politicas de Privacidad</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <section style="padding: 60px 0px;">
            <div class="container">
                <div class="row">
                    <h3 class="title">Última actualización: 06/07/2025</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        En <b>ZOE LIFE</b> (en adelante, “nosotros”, “nuestro” o “la empresa”), valoramos tu privacidad y nos comprometemos a proteger la 
                        información personal que nos compartes. Esta política de privacidad explica cómo recopilamos, utilizamos y protegemos tus datos personales 
                        cuando accedes a nuestros productos o servicios a través de nuestro sitio web <b>https://zoelifeinternational.com/peru</b>.
                    </p>
                    <br>
                    <h3 class="title">1. Información que Recopilamos</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        1.1 Información de Registro: Al registrarte en nuestro sitio o adquirir nuestros servicios, recopilamos datos como tu nombre, dirección de correo electrónico, 
                        número de teléfono y cualquier otra información que decidas proporcionar.
                    </p>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        1.2 Información de Navegación: Podemos obtener automáticamente datos sobre tu interacción con nuestro sitio, como dirección IP, tipo de navegador, 
                        páginas visitadas y tiempo de permanencia, mediante cookies y tecnologías similares.
                    </p>
                    <br>
                    <h3 class="title">2. Uso de la Información</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        2.1 Prestación de Servicios: Utilizamos tus datos para administrar tu cuenta, procesar pagos, brindarte acceso a 
                        nuestros servicios y comunicarnos contigo sobre temas relacionados con estos.
                    </p>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        2.2 Mejora de Experiencia: Analizamos la información recopilada para optimizar la funcionalidad de 
                        nuestro sitio y desarrollar nuevos productos o servicios.
                    </p>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        2.3 Comunicaciones Comerciales: Con tu consentimiento, podremos enviarte boletines, promociones y 
                        actualizaciones relacionadas con nuestras ofertas.
                    </p>
                    <br>
                    <h3 class="title">3. Compartir tu Información</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        3.1 Proveedores de Servicios: Podremos compartir tu información con terceros que trabajen en nuestro nombre (procesadores de pago, 
                        servicios de correo electrónico, análisis de datos, etc.), los cuales están obligados a proteger tu información y utilizarla únicamente para 
                        prestar los servicios acordados.
                    </p>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        3.2 Obligaciones Legales: Podremos divulgar tu información si la ley lo requiere, para responder a solicitudes de autoridades competentes o 
                        para proteger los derechos, propiedad o seguridad de <b>[Nombre de la Empresa]</b>, de nuestros usuarios o de terceros.
                    </p>
                    <br>
                    <h3 class="title">4. Seguridad de la Información</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        Adoptamos medidas razonables para proteger tus datos personales contra accesos no autorizados, uso indebido, pérdida o divulgación. 
                        Sin embargo, ningún método de transmisión o almacenamiento digital es completamente seguro.
                    </p>
                    <br>
                    <h3 class="title">5. Tus Derechos</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        5.1 Acceso y Rectificación: Puedes acceder a los datos que tenemos sobre ti y solicitar su corrección si son inexactos o están desactualizados.
                    </p>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        5.2 Cancelación y Oposición: Puedes solicitar la eliminación o limitación del uso de tus datos personales, aunque esto podría afectar la prestación 
                        de algunos servicios.
                    </p>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        5.3 Retiro del Consentimiento: Si autorizaste el uso de tus datos para fines comerciales, puedes retirar tu consentimiento 
                        en cualquier momento a través del enlace de “cancelar suscripción” incluido en nuestras comunicaciones.
                    </p>
                    <br>
                    <h3 class="title">6. Cambios a Esta Política de Privacidad</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        Nos reservamos el derecho de actualizar esta política en cualquier momento. Publicaremos las modificaciones en esta página y, si son 
                        significativas, te lo notificaremos por los medios de contacto que hayas proporcionado.
                    </p>
                    <br>
                    <h3 class="title">7. Contacto</h3>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                        Si tienes preguntas o inquietudes sobre nuestra política de privacidad o el manejo de tu información
                        personal, puedes contactarnos a través de <b>zoelifegrupogreenplanet@gmail.com </b> o nuestra sede principal en 
                        <b>Av. Petit Thouars 2870, San Isidro- Lima - Peru</b>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <!-- Content END-->

    <!-- Footer -->
    <x-peru.footer-area></x-peru.footer-area>
    <!-- Footer END-->
@endsection
