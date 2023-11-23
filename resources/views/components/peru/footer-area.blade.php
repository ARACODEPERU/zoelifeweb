<div>
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
                            <ul class="dez-social-icon dez-border dez-social-icon-lg">
                                <li><a href="{{ $footer[0]->items[2]->item->content }}"
                                        class="fab fa-facebook fb-btn"></a></li>
                                <li><a href="{{ $footer[0]->items[3]->item->content }}"
                                        class="fab fa-instagram tw-btn"></a></li>
                                {{-- <li><a href="{{ $footer[0]->items[0]->item->content }}" class="fab fa-linkedin link-btn"></a></li> --}}
                                <li><a href="{{ $footer[0]->items[4]->item->content }}"
                                        class="fab fa-youtube pin-btn"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b10 text-uppercase">Testimonios</h4>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
                                @if (count($testimonies) > 0)
                                    @foreach ($testimonies as $testimony)
                                        <li><a href="#" data-toggle="modal"
                                                data-target="#testimonios">{{ $testimony->title }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="m-b10 text-uppercase">Navegación</h4>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">Nosotros</a></li>
                                <li><a href="">Productos</a></li>
                                <li><a href="">Centros de Distribución</a></li>
                                <li><a href="">Alcansando las Estrellas</a></li>
                                <li><a href="">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b10 text-uppercase">Contactanos</h4>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <strong>Oficina Principal:</strong>
                                    {{ $footer[0]->items[5]->item->content }}
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <strong>E-mail:</strong>
                                    {{ $footer[0]->items[6]->item->content }}
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <strong>Teléfono: <strong>
                                            {{ $footer[0]->items[7]->item->content }}
                                            <br />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left">
                        <span>© Copyright 2023</span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <span> Desarrollado por <i class="fa fa-heart text-primary heart"></i>
                            <a href="">Aracode Smart Solutión</a>
                        </span>
                    </div>
                    <div class="col-lg-4 text-right">
                        <ul class="list-inline">
                            <li><a href=""> Nosotros</a></li>
                            <li><a href=""> Contactanos</a></li>
                            <li><a href=""> Politica de Privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <script>
        function openModalTestimony() {

            $('#testimonios').modal('show')
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
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


</div>
