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
                                <a href="{{ $header[0]->content }}" target="_blank" class="fab fa-facebook"
                                    style="padding: 10px; font-size: 16px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ $header[1]->content }}" target="_blank" class="fab fa-instagram"
                                    style="padding: 10px; font-size: 16px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ $header[2]->content }}" target="_blank" class="fab fa-youtube"
                                    style="padding: 10px; font-size: 16px;">
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
                                <i class="fa fa-phone"></i><span>(+591) {{ $header[4]->content }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar END-->
        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="clearfix" style="width: 100%; padding: 0px 40px;">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark mostion">
                        <a href="{{ route('web_peru_inicio') }}">
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
                    <div class="btn-header-pc">
                        <div class="extra-nav hidden-sm-down disnone-md" style="text-align: center;">
                            <div class="extra-cell">
                                <a href="https://zoelife.global//link/store/TIENDAPUBLICA" target="_blank" class="site-button">
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
                    </div>
                    <!--
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
                    -->
                    <!-- Main Nav -->
                    <div class="header-nav navbar-collapse collapse " id="navbarNavDropdown">
                        
                        <div class="extra-nav hidden-sm-down disnone-md" style="text-align: center; padding: 10px;">
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
                        <ul class="nav navbar-nav">
                            <li> 
                                <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_inicio') ? 'active' : '' }}" href="{{ route('web_bolivia_inicio') }}">Inicio</a> </li>
                            
                             <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_productos') ? 'active' : '' }}" href="{{ route('web_bolivia_productos') }}">Productos</a>
                                <ul class="sub-menu">
                                    @foreach ($products as $product)
                                        <li>
                                            <a href="{{ route('web_bolivia_producto_descripcion', $product->id) }}">
                                                {{ $product->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_testimonios') ? 'active' : '' }}" href="{{ route('web_bolivia_testimonios') }}">Testimonios</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_centros') ? 'active' : '' }}" href="{{ route('web_bolivia_centros') }}">Centros de Distribución</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_eventos') ? 'active' : '' }}" href="{{ route('web_bolivia_eventos') }}">Eventos</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_alcanzando_las_estrellas') ? 'active' : '' }}" href="{{ route('web_bolivia_alcanzando_las_estrellas') }}">Alcanzando las
                                    Estrellas</a> </li>
                                    
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_university') ? 'active' : '' }}" href="{{ route('web_bolivia_university') }}">University</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_bolivia_contacto') ? 'active' : '' }}" href="{{ route('web_bolivia_contacto') }}">Contacto</a> </li>
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
