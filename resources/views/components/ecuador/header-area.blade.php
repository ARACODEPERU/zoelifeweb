<div>
        <!-- Importando darkMode -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('css/darkMode.css') }}">
        <script src="{{ asset('js/darkMode.js') }}"></script>
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
            <div class="top-bar-content" style="width: 100%; padding: 0px 40px;">
                <div class="top-bar-contect-space row justify-content-between">
                    <!--
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
                            <li>
                                <a href="{{ $header[2]->content }}" class="fab fa-youtube"
                                    style="padding: 10px; font-size: 15px;">
                                </a>
                            </li>
                        </ul>
                    </div>
                    -->
                    <div class="dez-topbar-right list-unstyled e-p-bx ">
                        <ul>
                            <li style="float: left;">
                                <a href="https://zoelifeinternational.com/"><i class="fa fa-globe" aria-hidden="true"></i><span>Zoé Global</span></a>
                            </li>
                            <!--
                            <li style="float: left;">
                                <span>
                                    <div class="dropdown">
                                        <button class="btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <a class="dropdown-item" href="{{ route($country[0]->route) }}">
                                                <img  style="height: 25px;" src="{{ $country[0]->country->image }}" alt="">
                                                <b style="color: #fff;"> &nbsp; {{ $country[0]->country->description }}</b>
                                                <i class="dropdown-toggle"></i>
                                            </a>
                                        </button>
                                        <div class="dropdown-menu">
                                            @foreach ($pages as $page)
                                            <a class="dropdown-item" href="{{ route($page->route) }}">
                                                 <img  style="height: 25px;" src="{{ $page->country->image }}" alt="">
                                                <b class="country"> &nbsp; {{ $page->country->description }}</b>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </span>
                            </li>
                            -->
                            <li>
                                <i class="fa fa-envelope"></i><span>{{ $header[3]->content }}</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i><span>{{ $header[4]->content }}</span>
                            </li>
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
                        <a href="{{ route('web_ecuador_inicio') }}">
                            <img src="{{ $header[5]->content }}" alt="" style="height: 80px; padding: 15px 0px;">
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
                            <a href="https://zoelife.global//link/store/TIENDAPUBLICA" target="_blank"
                                class="site-button">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;
                                Tienda Online
                            </a>
                        </div>
                        <div class="extra-cell">
                            <a href="https://zoelife.global/LoginSalesForce.php" target="_blank" class="site-button">
                                <i class="fa fa-laptop" aria-hidden="true"></i> &nbsp;
                                Oficina Virtual
                            </a>
                        </div>
                    </div>
                    <div class="btn-header-mobile">
                        <div class="extra-nav hidden-sm-down disnone-md" style="text-align: center;">
                            <div class="extra-cell">
                                <a href="https://zoelife.global//link/store/TIENDAPUBLICA" target="_blank" 
                                    class="site-button" title="Tienda Online">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="extra-cell">
                                <a href="https://zoelife.global/LoginSalesForce.php" target="_blank" 
                                    class="site-button" title="Oficina Vitual">
                                    <i class="fa fa-laptop" aria-hidden="true"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Main Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_ecuador_inicio') ? 'active' : '' }}" href="{{ route('web_ecuador_inicio') }}">Inicio</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_ecuador_productos') ? 'active' : '' }}" href="{{ route('web_ecuador_productos') }}">Productos</a>
                                <ul class="sub-menu">
                                    @foreach ($products as $product)
                                        <li>
                                            <a href="{{ route('web_ecuador_producto_descripcion', $product->id) }}">
                                                {{ $product->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_ecuador_testimonios') ? 'active' : '' }}" href="{{ route('web_ecuador_testimonios') }}">Testimonios</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_ecuador_centros') ? 'active' : '' }}" href="{{ route('web_ecuador_centros') }}">Centros de Distribución</a> </li>
                            <li> <a class="dropdown-item  {{ request()->routeIs('web_ecuador_eventos') ? 'active' : '' }}" href="{{ route('web_ecuador_eventos') }}">Eventos</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_ecuador_alcanzando_las_estrellas') ? 'active' : '' }}" href="{{ route('web_ecuador_alcanzando_las_estrellas') }}">Alcanzando las
                                    Estrellas</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_ecuador_university') ? 'active' : '' }}" href="{{ route('web_ecuador_university') }}">University</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_ecuador_contacto') ? 'active' : '' }}" href="{{ route('web_ecuador_contacto') }}">Contacto</a> </li>
                            <li class="switch" style="top: 25px;">
                                <i class="bx bxs-sun"></i>
                                <i class="bx bxs-moon"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header END -->
    </header>
    <!-- Header END -->
</div>
