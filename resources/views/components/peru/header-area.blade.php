<div>
    <!--
    <div id="loading-area" class="loading-page-1">
        <div class="spinner">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="8" cy="8" r="7" stroke-width="1"/>
            </svg>
        </div>
    </div>
    -->
    <!-- Header -->
    <header class="site-header header-style-1 mo-left dark dark-style-2">
        <!-- Top bar -->
        <div class="top-bar">
            <div class="" style="width: 100%; padding: 0px 40px;">
                <div class="row justify-content-between">
                    <div class="dez-topbar-left">
                        <ul class="social-bx list-inline pull-right">
                            <li>
                                <a href="{{ $header[0]->content }}" class="fab fa-facebook"
                                    style="padding: 10px; font-size: 15px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ $header[1]->content }}" class="fab fa-instagram"
                                    style="padding: 10px; font-size: 15px;">
                                </a>
                            </li>
                            {{-- <li><a href="{{ $header[1]->content }}" class="fab fa-linkedin" style="padding: 10px; font-size: 15px;"></a></li> --}}
                            <li>
                                <a href="{{ $header[2]->content }}" class="fab fa-youtube"
                                    style="padding: 10px; font-size: 15px;">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="dez-topbar-right list-unstyled e-p-bx ">
                        <ul>
                            <li><i class="fa fa-envelope"></i><span>{{ $header[3]->content }}</span></li>
                            <li><i class="fa fa-phone"></i><span>{{ $header[4]->content }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar END-->
        <!-- Main Header -->
        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="clearfix" style="width: 100%; padding: 0px 40px;">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark mostion">
                        <a href="">
                            <img src="{{ $header[5]->content }}" alt="" style="height: 45px;">
                        </a>
                    </div>
                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                        data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Extra Nav -->
                    <div class="extra-nav hidden-sm-down disnone-md">
                        <div class="extra-cell">
                            <a href="https://zoelife.global//link/store/TIENDAPUBLICA" target="_blank" class="site-button">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;
                                Tienda Online
                            </a>
                        </div>
                        <div class="extra-cell">
                            <a href="" class="site-button">
                                <i class="fa fa-laptop" aria-hidden="true"></i> &nbsp;
                                Oficina Virtual
                            </a>
                        </div>
                    </div>
                    <!-- Main Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
                            <li> <a href="{{ route('web_peru_inicio') }}">Home</a> </li>
                            <li> <a href="{{ route('web_peru_nosotros') }}">Nosotros</a> </li>
                            <li> <a href="{{ route('web_peru_productos') }}">Productos</a>
                                <ul class="sub-menu">
                                    @foreach ($products as $product)
                                        <li>
                                            <a href="{{ route('web_peru_producto_descripcion', $product->id) }}">
                                                {{ $product->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li> <a href="{{ route('web_peru_testimonios') }}">Testimonios</a> </li>
                            <li> <a href="{{ route('web_peru_centros') }}">Centros de Distribución</a> </li>
                            <li> <a href="{{ route('web_peru_eventos') }}">Eventos</a> </li>
                            <li> <a href="{{ route('web_peru_alcanzando_las_estrellas') }}">Alcanzando las
                                    Estrellas</a> </li>
                            <li> <a href="{{ route('web_peru_contacto') }}">Contacto</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header END -->
    </header>
    <!-- Header END -->
</div>
