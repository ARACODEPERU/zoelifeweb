
    <!-- Importando darkMode -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/darkMode.css') }}">
    <script src="{{ asset('js/darkMode.js') }}"></script>

    <!-- Header -->
    <header class="site-header header-style-1 mo-left dark dark-style-2">
        <!-- Top bar -->
        <div class="top-bar btn-header-pc">
            <div class="top-bar-content" style="width: 100%; padding: 0px 40px;">
                <div class="top-bar-contect-space row justify-content-between">
                    <div class="dez-topbar-right list-unstyled e-p-bx ">
                        <ul>
                            <li style="float: left;">
                                <a href="https://zoelifeinternational.com/"><i class="fa fa-globe"
                                        aria-hidden="true"></i><span>Zoé Global</span></a>
                            </li>
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

        <div class="top-bar btn-header-mobile">
            <div class="top-bar-content" style="width: 100%; padding: 0px 40px;">
                <div class="top-bar-contect-space row justify-content-between">
                    <div class="dez-topbar-right list-unstyled e-p-bx ">
                        <ul>
                            <li>
                                <a href="https://zoelifeinternational.com/" target="_blank" class=""
                                    title="Zoé Global" style="text-decoration: none; padding: 5px 15px;">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                    Zoé Global
                                </a>
                            </li>
                            <li>
                                <a href="https://zoelife.global/link/store/TIENDAPUBLICA" target="_blank" class=""
                                    title="Tienda Online" style="text-decoration: none; padding: 5px 15px;">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    Tienda Online
                                </a>
                            </li>
                            <li>
                                <a href="https://zoelife.global/LoginSalesForce.php" target="_blank" class=""
                                    title="Oficina Virtual" style="text-decoration: none; padding: 5px 15px;">
                                    <i class="fa fa-laptop" aria-hidden="true"></i>
                                    Oficina Virtual
                                </a>
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
                <div class="clearfix" style="width: 100%; padding: 0px 20px;">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark mostion">
                        <a href="{{ route('web_peru_inicio') }}">
                            <img src="{{ $header[5]->content }}" alt=""
                                style="height: 80px; padding: 15px 0px;">
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
                            <!--
                            <div class="extra-cell">
                                <a href="https://zoelife.global//link/store/TIENDAPUBLICA" target="_blank" class="site-button">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;
                                    Tienda Online
                                </a>
                            </div>
                            -->
                            <div class="extra-cell">
                                <a href="https://zoelife.global/LoginSalesForce.php" target="_blank"
                                    class="site-button">
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
                    <div class="header-nav navbar-collapse collapse justify-content-end div-nav-slide-dark"
                        id="navbarNavDropdown">

                        <div class="extra-nav hidden-sm-down disnone-md" style="text-align: center; padding: 10px;">

                            <div class="extra-cell">
                                <a href="https://zoelife.global//link/store/TIENDAPUBLICA" target="_blank"
                                    class="site-button" title="Tienda Online">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </a>
                            </div>

                            <div class="extra-cell">
                                <a href="https://zoelife.global/LoginSalesForce.php" target="_blank" class="site-button"
                                    title="Oficina Vitual">
                                    <i class="fa fa-laptop" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="nav navbar-nav div-nav-slide-dark">
                            <li>
                                <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_inicio') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_inicio') }}">Inicio
                                </a>
                            </li>
                            @php
                                $currentUrl = request()->url();
                            @endphp
                            <li>
                                <a class="dropdown-item aquitoy {{ $currentUrl == route('web_mexico_productos', 1) ? 'active' : '' }}"
                                    href="{{ route('web_mexico_productos', 1) }}">Zoé nutraceúticos</a>
                                <ul class="sub-menu">
                                    @foreach ($productsct1 as $product)
                                        <li>
                                            <a href="{{ route('web_mexico_producto_descripcion', $product->id) }}">
                                                {{ $product->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item aquitoy {{ $currentUrl == route('web_mexico_productos', 2) ? 'active' : '' }}"
                                    href="{{ route('web_mexico_productos', 2) }}">Cuidado Personal</a>
                                <ul class="sub-menu">
                                    @foreach ($productsct2 as $product2)
                                        <li>
                                            <a href="{{ route('web_mexico_producto_descripcion', $product2->id) }}">
                                                {{ $product2->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            {{-- <li>
                                <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_productos') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_productos') }}">Productos</a>
                                <ul class="sub-menu">
                                    @foreach ($products as $product)
                                        <li>
                                            <a href="{{ route('web_mexico_producto_descripcion', $product->id) }}">
                                                {{ $product->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li> --}}
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_testimonios') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_testimonios') }}">Testimonios</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_centros') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_centros') }}">Centros de Distribución</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_eventos') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_eventos') }}">Eventos</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_alcanzando_las_estrellas') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_alcanzando_las_estrellas') }}">Alcanzando las
                                    Estrellas</a> </li>

                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_university') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_university') }}">University</a> </li>
                            <li> <a class="dropdown-item aquitoy {{ request()->routeIs('web_mexico_contacto') ? 'active' : '' }}"
                                    href="{{ route('web_mexico_contacto') }}">Contacto</a> </li>
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
