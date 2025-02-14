

    <a class="appFacebook" target="_blanck" href="{{ $footer[0]->items[4]->item->content }}">
        <img src="{{ $footer[0]->items[3]->item->content }}" alt="Facebook">
    </a>
    
    <a class="appInstagram" target="_blanck" href="{{ $footer[0]->items[6]->item->content }}">
        <img src="{{ $footer[0]->items[5]->item->content }}" alt="Instagram">
    </a>
    
    <a class="appYoutube" target="_blanck" href="{{ $footer[0]->items[8]->item->content }}">
        <img src="{{ $footer[0]->items[7]->item->content }}" alt="Youtube">
    </a>

    <a class="appTiktok" target="_blanck" href="{{ $footer[0]->items[10]->item->content }}">
        <img src="{{ $footer[0]->items[9]->item->content }}" alt="Tiktok">
    </a>
{{--     
    <a class="appWhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=51{{ $footer[0]->items[12]->item->content }}&text=Hola&nbsp;ZoeLife!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
        <img src="{{ $footer[0]->items[11]->item->content }}" alt="Whatsapp">
    </a> --}}
    
    <div id="merchandising">
        <a href="{{ route('web_peru_merchandasing') }}" 
            class="mer" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        </a>
    </div>

    
    <div id="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=51{{ $footer[0]->items[12]->item->content }}&text=Hola&nbsp;ZoeLife!&nbsp;me&nbsp;pueden&nbsp;ayudar?" 
            class="wtsapp" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Footer -->
    <footer class="site-footer dark-style-2">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_about">
                            <div class="logo-footer">
                                <img src="{{ $footer[0]->items[0]->item->content }}" alt="">
                            </div>
                            <p class="m-tb20">{{ $footer[0]->items[1]->item->content }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b10 text-uppercase">Testimonios</h4>
                            <div class="dez-separator"  style="background: #00b01a;"></div>
                            <ul>
                                @if (count($testimonies) > 0)
                                    @foreach ($testimonies as $testimony)
                                        <li>
                                            <a
                                                href="javascript:openModalTestimony('{{ $testimony->title }}', '{{ $testimony->video }}')">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp; {{ $testimony->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                                <li>
                                <a href="{{ route('web_peru_testimonios') }}" style="color: orange;">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp;  Ver más testimonios
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b10 text-uppercase">Navegación</h4>
                            <div class="dez-separator"  style="background: #00b01a;"></div>
                            <ul>
                                <li><a href="{{ route('web_peru_inicio') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp;  Inicio</a></li>
                                <li><a href="{{ route('web_peru_productos') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp;  Productos</a></li>
                                <li><a href="{{ route('web_peru_centros') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp;  Centros de Distribución</a></li>
                                <li><a href="{{ route('web_peru_eventos') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp;  Eventos</a></li>
                                <li><a href="{{ route('web_peru_alcanzando_las_estrellas') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp;  Alcanzando las Estrellas</a></li>
                                <li><a href="{{ route('web_peru_contacto') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; &nbsp;  Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b10 text-uppercase">Contáctanos</h4>
                            <div class="dez-separator"  style="background: #00b01a;"></div>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <strong>Oficina Principal:</strong>
                                    {{ $footer[0]->items[2]->item->content }}
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <strong>E-mail:</strong>
                                    {{ $footer[0]->items[13]->item->content }}
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <strong>Teléfono: <strong>
                                            {{ $footer[0]->items[12]->item->content }}
                                            <br />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left">
                        <span>© Copyright 2024</span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span> Desarrollado por <i class="fa fa-heart  heart" style="color: #00b01a;"></i>
                            <a href="">Aracode Smart Solutions</a>
                        </span>
                    </div>
                    <div class="col-lg-4 text-right">
                        <ul class="list-inline">
                            <li><a href="{{ route('web_peru_contacto') }}"> Contáctanos</a></li>
                            <li><a href="{{ $footer[0]->items[8]->item->content }}"> Política de Privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <script>
        function openModalTestimony(title, video) {
            $('#testimoniosTitle').text(title);
            $('#testimoniosBody').html(video);
            $('#testimonios').modal('show');
        }
    </script>
    <!-- Modal -->
    <div class="modal fade" id="testimonios" tabindex="-1" role="dialog" aria-labelledby="testimoniosTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ara-modal-title">
                    <h5 class="modal-title" id="testimoniosTitle">Título del Testimonio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="testimoniosBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


