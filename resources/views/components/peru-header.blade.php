<div>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link rel="stylesheet" href="{{ asset('css/darkMode.css') }}">
    <script src="{{ asset('js/darkMode.js') }}"></script> --}}

    <header class="site-header" role="banner" style="z-index: 10000">
        <div class="wrap">
            <a class="brand" href="#" aria-label="Home">
                <img src="{{ $header[5]->content }}" alt="banner" style="height: 70px; padding: 0px;">
            </a>
            <button class="burger negro" aria-controls="mobile-drawer" aria-expanded="false">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z" />
                </svg>
                Menu
            </button>

            <nav aria-label="Primary">
                <ul class="nav-list">
                    @php
                        $currentUrl = request()->url();
                    @endphp

                    <li class="nav-item">
                        <a class="dropdown-item aquitoy {{ request()->routeIs('web_peru_inicio') ? 'active' : '' }}"
                            href="{{ route('web_peru_inicio') }}">Conócenos</a>
                    </li>
                    <!-- Products (Mega) -->
                    <li class="nav-item" data-type="mega" aria-expanded="false">
                        <a class="nav-link aquitoy" href="{{ route('web_peru_productos', 1) }}" aria-haspopup="true"
                            aria-expanded="false">Nutraceúticos
                            <svg class="caret" viewBox="0 0 10 6" aria-hidden="true">
                                <path d="M1 1l4 4l4-4" stroke="currentColor" stroke-width="1.6" fill="none"
                                    stroke-linecap="round" />
                            </svg>
                        </a>
                        <div class="panel" role="menu" aria-label="Products">
                            <div class="menu-grid">
                                @foreach ($productsct1 as $product)
                                    <div class="menu-col">
                                        <a class="item"
                                            href="{{ route('web_peru_producto_descripcion', $product->id) }}">
                                            <span class="icn" aria-hidden="true">
                                                <img style="width: 20px;"
                                                    src="{{ asset('themes/zoelife/global/images/favicon.png') }}"
                                                    alt="">
                                            </span>
                                            <span>
                                                <span class="label">{{ $product->name }}</span>
                                            </span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    <li class="nav-item" data-type="mega" aria-expanded="false">
                        <a class="nav-link aquitoy {{ $currentUrl == route('web_peru_productos', 2) ? 'active' : '' }}"
                            href="{{ route('web_peru_productos', 2) }}" aria-haspopup="true"
                            aria-expanded="false">Cuidado personal
                            <svg class="caret" viewBox="0 0 10 6" aria-hidden="true">
                                <path d="M1 1l4 4l4-4" stroke="currentColor" stroke-width="1.6" fill="none"
                                    stroke-linecap="round" />
                            </svg>
                        </a>
                        <div class="panel" role="menu" aria-label="Products2">
                            <div class="menu-grid">
                                @foreach ($productsct2 as $product2)
                                    <div class="menu-col">
                                        <a class="item"
                                            href="{{ route('web_peru_producto_descripcion', $product2->id) }}">
                                            <span class="icn" aria-hidden="true">
                                                <img style="width: 20px;"
                                                    src="{{ asset('themes/zoelife/global/images/favicon.png') }}"
                                                    alt="">
                                            </span>
                                            <span>
                                                <span class="label">{{ $product2->name }}</span>
                                            </span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="dropdown-item aquitoy {{ request()->routeIs('web_peru_testimonios') ? 'active' : '' }}"
                            href="{{ route('web_peru_testimonios') }}">
                            Testimonios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item aquitoy {{ request()->routeIs('web_peru_centros') ? 'active' : '' }}"
                            href="{{ route('web_peru_centros') }}">
                            Puntos de venta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item aquitoy {{ request()->routeIs('web_peru_eventos') ? 'active' : '' }}"
                            href="{{ route('web_peru_eventos') }}">
                            Oportunidad
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item aquitoy {{ request()->routeIs('web_peru_alcanzando_las_estrellas') ? 'active' : '' }}"
                            href="{{ route('web_peru_alcanzando_las_estrellas') }}">
                            Legado
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item aquitoy {{ request()->routeIs('web_peru_contacto') ? 'active' : '' }}"
                            href="{{ route('web_peru_contacto') }}">
                            Contáctanos
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="utils">
                <li class="switch" style="top: 0px;">
                    <i class="bx bxs-sun"></i> /
                    <i class="bx bxs-moon"></i>
                </li>
                <a href="https://zoelife.global/LoginSalesForce.php">
                    <button class="btn">Oficina Virtual</button>
                </a>
            </div>
        </div>
    </header>


    <div class="drawer-backdrop" id="drawer-backdrop" hidden></div>
    <aside class="drawer" id="mobile-drawer" aria-hidden="true" aria-label="Mobile menu">

        <div class="section">
            <a href="{{ route('web_peru_inicio') }}"class=" negro">Conócenos</a>
            <a href="{{ route('web_peru_productos', 1) }}"class=" negro">Nutraceúticos</a>
            <a href="{{ route('web_peru_productos', 2) }}"class=" negro">Cuidado personal</a>
            <a href="{{ route('web_peru_testimonios') }}"class=" negro">Conócenos</a>
            <a href="{{ route('web_peru_centros') }}"class=" negro">Puntos de venta</a>
            <a href="{{ route('web_peru_eventos') }}"class=" negro">Oportunidad</a>
            <a href="{{ route('web_peru_alcanzando_las_estrellas') }}"class=" negro">Legado</a>
            <a href="{{ route('web_peru_contacto') }}"class=" negro">Contáctanos</a>
        </div>

        <div class="section">
            <a href="https://zoelife.global/LoginSalesForce.php" class="btn"
                style="display:inline-block; text-align:center">Oficina Virtual
            </a>
        </div>
    </aside>


    <style>
        /* --- CSS ORIGINAL DEL USUARIO --- */
        :root {
            --bg: #fff;
            --surface: #fff;
            --surface-2: #fff;
            --text: #e6edf3;
            --muted: #9fb0c3;
            --brand: #5A9F00;
            --brand-2: #00b01a;
            --ring: 0 0 0 3px rgba(91, 156, 255, 0.35);
            --radius: 14px;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
            color-scheme: dark light;
        }

        @media (prefers-color-scheme: light) {
            :root {
                --bg: #ffffff;
                --surface: #f7f8fb;
                --surface-2: #ffffff;
                --text: #0b1220;
                --muted: #516170;
                --brand: #5A9F00;
                --brand-2: #00b01a;
                --shadow: 0 10px 30px rgba(15, 23, 42, 0.1);
            }
        }
/* 
        html[data-theme="dark"] {
            color-scheme: dark;
        }

        html[data-theme="light"] {
            color-scheme: light;
        }

        * {
            box-sizing: border-box;
        } */

        /* Header */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: saturate(1.2) blur(8px);
            /* background: color-mix(in srgb, var(--surface-2) 85%, transparent); */
            background: #fff;
            border-bottom: 1px solid color-mix(in srgb, var(--muted) 18%, transparent);
        }

        .wrap {
            max-width: 100%;
            margin: 0 auto;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text);
        }

        .brand .logo {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--brand), var(--brand-2));
            display: grid;
            place-items: center;
            box-shadow: var(--shadow);
        }

        .brand strong {
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        /* Primary nav */
        nav {
            margin-left: auto;
        }

        .nav-list {
            display: flex;
            align-items: center;
            gap: 14px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /* MODIFICACION 1: Cambiado de 'relative' a 'static' */
        .nav-item {
            position: static;
        }

        .nav-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 12px;
            border-radius: 10px;
            text-decoration: none;
            color: var(--text);
        }

        .nav-link:hover,
        .nav-link:focus-visible {
            background: color-mix(in srgb, var(--brand) 10%, var(--surface-2));
            outline: none;
            box-shadow: var(--ring);
        }

        .caret {
            width: 10px;
            height: 10px;
            display: inline-block;
            transform: translateY(1px);
        }

        /* Dropdown & mega panels */
        /* MODIFICACION 2: Panel Full Width */
        .panel {
            position: fixed;
            /* Cambiado a 'fixed' para ocupar el viewport */
            left: 0;
            right: 0;
            top: 90px;
            /* Posicionado justo debajo del header */
            min-width: 100vw;
            background: var(--surface-2);
            border: 1px solid color-mix(in srgb, var(--muted) 25%, transparent);
            border-radius: 0 0 var(--radius) var(--radius);
            /* Redondea solo las esquinas inferiores */
            box-shadow: var(--shadow);
            padding: 12px 0;
            /* Padding horizontal ajustado para pantallas grandes */
            display: none;
            opacity: 0;
            transform: translateY(6px);
            transition: opacity 0.18s ease, transform 0.18s ease;
            z-index: 999;
        }

        .nav-item[aria-expanded="true"]>.panel {
            display: grid;
            opacity: 1;
            transform: translateY(0);
        }

        /* MODIFICACION 3: Centrar el contenido dentro del panel full-width */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(6, minmax(180px, 1fr));
            gap: 8px;
            max-width: 100%;
            /* Limita el contenido a un ancho máximo */
            margin: 0 auto;
            /* Centra el contenido */
            padding: 0 20px;
            /* Añade padding para móviles */
        }

        .menu-col {
            padding: 8px 6px;
        }

        .panel a.item {
            display: grid;
            grid-template-columns: 34px 1fr;
            gap: 10px;
            align-items: center;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
            color: var(--text);
        }

        .panel a.item:hover,
        .panel a.item:focus-visible {
            background: color-mix(in srgb, var(--brand) 10%, transparent);
            outline: none;
        }

        .icn {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            display: grid;
            place-items: center;
            background: color-mix(in srgb, var(--brand) 18%, var(--surface));
        }

        .label {
            font-weight: 600;
        }

        .sub {
            font-size: 0.9rem;
            color: var(--muted);
        }

        /* Simple dropdown list */
        /* MODIFICACION 4: Centrar la lista simple */
        .panel ul {
            list-style: none;
            margin: 0 auto;
            /* Centra la lista */
            padding: 4px 20px;
            /* Ajusta el padding para móviles */
            max-width: 1200px;
            /* Limita el ancho */
        }

        .panel li a {
            display: block;
            padding: 10px 12px;
            border-radius: 10px;
            color: var(--text);
            text-decoration: none;
        }

        .panel li a:hover,
        .panel li a:focus-visible {
            background: color-mix(in srgb, var(--brand) 10%, transparent);
        }

        /* Utilities: search + CTA */
        .utils {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-left: 10px;
        }

        .search {
            position: relative;
            min-width: 220px;
            flex: 1 1 auto;
        }

        .search input {
            width: 100%;
            background: var(--surface-2);
            border: 1px solid color-mix(in srgb, var(--muted) 25%, transparent);
            color: var(--text);
            padding: 10px 36px 10px 12px;
            border-radius: 12px;
        }

        .search svg {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.6;
        }

        .btn {
            appearance: none;
            border: none;
            background: linear-gradient(135deg, var(--brand), var(--brand-2));
            color: white;
            padding: 10px 14px;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: var(--shadow);
        }

        .btn:focus-visible {
            outline: none;
            box-shadow: var(--ring);
        }

        /* Burger (mobile) */
        .burger {
            display: none;
            margin-left: auto;
            background: transparent;
            border: 1px solid color-mix(in srgb, var(--muted) 30%, transparent);
            color: var(--text);
            padding: 8px 10px;
            border-radius: 10px;
        }

        /* Mobile drawer */
        .drawer-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            display: none;
        }

        .drawer {
            margin-top: 100px;
            position: fixed;
            inset: 0 0 0 auto;
            width: min(92vw, 380px);
            background: var(--surface-2);
            transform: translateX(100%);
            transition: transform 0.35s ease;
            box-shadow: var(--shadow);
            overflow: auto;
            z-index: 1000;
        }

        .drawer.open {
            transform: translateX(0);
        }

        .drawer-backdrop.open {
            display: block;
        }

        .drawer .section {
            padding: 16px 18px;
            border-bottom: 1px solid color-mix(in srgb, var(--muted) 15%, transparent);
        }

        .drawer .section h4 {
            margin: 0 0 10px;
            font-size: 0.95rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .drawer a {
            display: grid;
            grid-template-columns: 100% 1fr;
            gap: 10px;
            align-items: center;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
            color: var(--text);
        }

        .drawer a:hover {
            background: color-mix(in srgb, var(--brand) 10%, transparent);
        }

        /* Responsive */
        @media (max-width: 1024px) {

            nav,
            .utils {
                display: none;
            }

            .burger {
                display: inline-flex;
                align-items: center;
                gap: 8px;
            }
        }

        /* Demo hero to show transparent header */
        .hero {
            padding: 90px 20px 120px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            gap: 18px;
            /* Fondo de demostración para ver el menú sobre el contenido */
            background: linear-gradient(to bottom, var(--surface), var(--bg));
            min-height: 80vh;
        }

        .hero h1 {
            font-size: clamp(28px, 4vw, 56px);
            margin: 10px 0;
        }

        .hero p {
            color: var(--muted);
            font-size: clamp(16px, 1.6vw, 20px);
            margin: 0;
        }

        .hero .cta-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .ghost {
            background: transparent;
            border: 1px solid color-mix(in srgb, var(--muted) 30%, transparent);
            color: var(--text);
        }

        /* Theme toggle button */
        .theme-toggle {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 10px;
            border-radius: 12px;
            border: 1px solid color-mix(in srgb, var(--muted) 30%, transparent);
            background: var(--surface-2);
            color: var(--text);
            cursor: pointer;
        }

        .theme-toggle:focus-visible {
            outline: none;
            box-shadow: var(--ring);
        }

        .theme-toggle .mode {
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* === Theme variable overrides (make toggle actually change colours) === */
        html[data-theme="dark"] {
            --bg: #0b0f14;
            --surface: #121821;
            --surface-2: #0f141c;
            --text: #e6edf3;
            --muted: #9fb0c3;
            --brand: #5A9F00;
            --brand-2: #00b01a;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
        }

        html[data-theme="light"] {
            --bg: #ffffff;
            --surface: #f7f8fb;
            --surface-2: #ffffff;
            --text: #0b1220;
            --muted: #516170;
            --brand: #5A9F00;
            --brand-2: #00b01a;
            --shadow: 0 10px 30px rgba(15, 23, 42, 0.1);
        }
    </style>

    <script>
        // === Utilities ===
        const qs = (s, el = document) => el.querySelector(s);
        const qsa = (s, el = document) => Array.from(el.querySelectorAll(s)); // robust: always returns Array

        // === Desktop: hover / click / keyboard for dropdowns ===
        const navItems = qsa(".nav-item");
        navItems.forEach((item) => {
            const link = qs(".nav-link", item);
            if (!link) return;

            const open = () => {
                item.setAttribute("aria-expanded", "true");
                link.setAttribute("aria-expanded", "true");
            };
            const close = () => {
                item.setAttribute("aria-expanded", "false");
                link.setAttribute("aria-expanded", "false");
            };

            // Toggle on click
            link.addEventListener("click", (e) => {
                e.preventDefault();
                const expanded = item.getAttribute("aria-expanded") === "true";
                navItems.forEach((i) => {
                    if (i !== item) i.setAttribute("aria-expanded", "false");
                });
                item.setAttribute("aria-expanded", String(!expanded));
                link.setAttribute("aria-expanded", String(!expanded));
            });

            // Hover intent (desktop pointers)
            let hoverTimer;
            item.addEventListener("mouseenter", () => {
                if (window.matchMedia("(pointer: fine)").matches) {
                    clearTimeout(hoverTimer);
                    hoverTimer = setTimeout(open, 80);
                }
            });
            item.addEventListener("mouseleave", () => {
                if (window.matchMedia("(pointer: fine)").matches) {
                    clearTimeout(hoverTimer);
                    hoverTimer = setTimeout(close, 120);
                }
            });

            // Close on Escape
            item.addEventListener("keydown", (e) => {
                if (e.key === "Escape") {
                    close();
                    link.focus();
                }
            });

            // Click outside closes
            document.addEventListener("click", (e) => {
                if (!item.contains(e.target)) close();
            });
        });

        // === Mobile drawer ===
        const burger = qs(".burger");
        const drawer = qs("#mobile-drawer");
        const backdrop = qs("#drawer-backdrop");

        function openDrawer() {
            if (!drawer || !backdrop || !burger) return;
            drawer.classList.add("open");
            backdrop.classList.add("open");
            backdrop.hidden = false;
            drawer.setAttribute("aria-hidden", "false");
            burger.setAttribute("aria-expanded", "true");
            const first = drawer.querySelector("input, a, button");
            if (first) first.focus();
        }

        function closeDrawer() {
            if (!drawer || !backdrop || !burger) return;
            drawer.classList.remove("open");
            backdrop.classList.remove("open");
            drawer.setAttribute("aria-hidden", "true");
            burger.setAttribute("aria-expanded", "false");
            setTimeout(() => {
                backdrop.hidden = true;
            }, 250);
            burger.focus();
        }

        if (burger)
            burger.addEventListener("click", () => {
                const expanded = burger.getAttribute("aria-expanded") === "true";
                expanded ? closeDrawer() : openDrawer();
            });
        if (backdrop) backdrop.addEventListener("click", closeDrawer);
        window.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && drawer && drawer.classList.contains("open"))
                closeDrawer();
        });

        // === Header shadow on scroll ===
        const header = qs(".site-header");
        const onScroll = () => {
            if (header)
                header.style.boxShadow = window.scrollY > 6 ? "var(--shadow)" : "none";
        };
        document.addEventListener("scroll", onScroll, {
            passive: true
        });
        onScroll();

        // === Keyboard navigation between top-level nav links ===
        const navLinks = qsa(".nav-link"); // ensure Array, not NodeList, not document.links
        // Basic runtime checks (non-fatal tests)
        console.assert(Array.isArray(navLinks), "navLinks should be an Array");
        console.assert(
            typeof navLinks.forEach === "function",
            "navLinks.forEach should exist"
        );

        navLinks.forEach((lnk, idx) => {
            lnk.addEventListener("keydown", (e) => {
                if (e.key === "ArrowRight" || e.key === "ArrowLeft") {
                    e.preventDefault();
                    const nextIndex =
                        e.key === "ArrowRight" ?
                        (idx + 1) % navLinks.length :
                        (idx - 1 + navLinks.length) % navLinks.length;
                    const target = navLinks[nextIndex];
                    if (target) target.focus();
                }
                if (e.key === "ArrowDown") {
                    const item = lnk.closest(".nav-item");
                    if (item) {
                        item.setAttribute("aria-expanded", "true");
                        lnk.setAttribute("aria-expanded", "true");
                        const first = item.querySelector(
                            ".panel a, .panel button, .panel input"
                        );
                        if (first) first.focus();
                    }
                }
            });
        });

        // === Theme Switcher (Light / Dark / System) ===
        (function() {
            const STORAGE_KEY = "theme-preference";
            const root = document.documentElement;
            const label = document.getElementById("theme-mode-label");
            const btn = document.getElementById("theme-toggle");

            const getSystem = () =>
                window.matchMedia("(prefers-color-scheme: dark)").matches ?
                "dark" :
                "light";
            const getStored = () => localStorage.getItem(STORAGE_KEY) || "system";
            const apply = (mode) => {
                const effective = mode === "system" ? getSystem() : mode;
                root.setAttribute("data-theme", effective);
                if (label) label.textContent = mode.charAt(0).toUpperCase() + mode.slice(1);
                document.dispatchEvent(
                    new CustomEvent("themechange", {
                        detail: {
                            mode,
                            effective
                        }
                    })
                );
            };
            const set = (mode) => {
                localStorage.setItem(STORAGE_KEY, mode);
                apply(mode);
            };

            // Init
            apply(getStored());
            window
                .matchMedia("(prefers-color-scheme: dark)")
                .addEventListener("change", () => {
                    if (getStored() === "system") apply("system");
                });

            // Cycle button (desktop)
            if (btn)
                btn.addEventListener("click", () => {
                    const order = ["system", "light", "dark"];
                    const current = getStored();
                    const next = order[(order.indexOf(current) + 1) % order.length];
                    set(next);
                });

            // Drawer controls (mobile)
            const light = document.getElementById("theme-light");
            const dark = document.getElementById("theme-dark");
            const system = document.getElementById("theme-system");
            if (light)
                light.addEventListener("click", (e) => {
                    e.preventDefault();
                    set("light");
                });
            if (dark)
                dark.addEventListener("click", (e) => {
                    e.preventDefault();
                    set("dark");
                });
            if (system)
                system.addEventListener("click", (e) => {
                    e.preventDefault();
                    set("system");
                });
        })();
    </script>

</div>
