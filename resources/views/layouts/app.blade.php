<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Anton | Portfolio')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        /* =========================
           RESET
        ========================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================
           BACKGROUND UTAMA
        ========================= */
        body {
            font-family: 'Poppins', sans-serif;
            color: #263445;
            min-height: 100vh;
            background: #ffffff;
        }


        /* =========================
           NAVBAR
        ========================= */
        .glass-navbar {
            background: rgba(255, 255, 255, 0.65);

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid rgba(190, 205, 220, 0.55);
            border-radius: 18px;

            box-shadow: 0 4px 25px rgba(40, 70, 100, 0.06);
        }


        /* BRAND */
        .navbar-brand {
            color: #000000 !important;
            font-weight: 800;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #42bfff !important;
        }



        /* =========================
   NAVIGATION GLASS HOVER
========================= */

        .navbar-nav {
            gap: 8px;
        }

        .nav-link {
            color: #344054 !important;

            padding: 10px 18px !important;

            border-radius: 12px;

            border: 1px solid transparent;

            background: transparent;

            transition:
                color 0.3s ease,
                background 0.3s ease,
                border-color 0.3s ease,
                box-shadow 0.3s ease,
                transform 0.3s ease;

            position: relative;
        }

        /* SAAT MOUSE DIARAHKAN */
        .nav-link:hover {
            color: #2196d2 !important;

            background: rgba(66, 191, 255, 0.13);

            border-color: rgba(66, 191, 255, 0.35);

            box-shadow: 0 5px 18px rgba(66, 191, 255, 0.12);

            transform: translateY(-3px);
        }

        /* HALAMAN YANG SEDANG AKTIF */
        .nav-link.active {
            color: #2196d2 !important;
        }

        /* EFEK KEMBALI SAAT MOUSE MENJAUH */
        .nav-link:not(:hover) {
            transform: translateY(0);
        }



        /* =========================
           GLASS CARD
           TANPA BLUR PADA KONTEN
        ========================= */
        .glass-card {
            position: relative;

            background: rgba(235, 245, 255, 0.48);

            /* Blur dihilangkan agar tampilan tetap tajam */
            backdrop-filter: none;
            -webkit-backdrop-filter: none;

            border: 1px solid rgba(190, 210, 230, 0.65);
            border-radius: 22px;

            box-shadow: 0 8px 32px rgba(40, 70, 100, 0.08);

            /* Animasi */
            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease,
                background 0.35s ease,
                border-color 0.35s ease;

            transform: translateY(0);

            filter: none;
        }


        /* CARD HOVER */
        .glass-card:hover {
            transform: translateY(-8px);

            background: rgba(235, 245, 255, 0.75);

            border-color: rgba(150, 195, 230, 0.9);

            box-shadow: 0 15px 35px rgba(40, 70, 100, 0.15);

            filter: none;
        }


        /* =========================
           FOTO PROFIL
        ========================= */
        .glass-card img {
            filter: none !important;
            opacity: 1 !important;
        }


        /* =========================
           TEKS
        ========================= */
        .text-blue {
            color: #2196d2;
        }

        .glass-card h1,
        .glass-card h2,
        .glass-card h3,
        .glass-card h4,
        .glass-card h5,
        .glass-card p,
        .glass-card span {
            filter: none !important;
        }


        /* =========================
           BUTTON GLASS
        ========================= */
        .btn-glass {
            display: inline-block;
            text-decoration: none;

            background: rgba(66, 191, 255, 0.12);

            border: 1px solid rgba(66, 191, 255, 0.5);

            color: #263445;

            border-radius: 12px;
            padding: 10px 24px;

            font-family: 'Poppins', sans-serif;
            font-size: 16px;

            transition: all 0.3s ease;
            cursor: pointer;
        }


        /* BUTTON HOVER */
        .btn-glass:hover {
            background: rgba(66, 191, 255, 0.28);

            border-color: #42bfff;

            color: #2196d2;

            transform: translateY(-3px);

            box-shadow: 0 5px 15px rgba(66, 191, 255, 0.2);
        }


        /* BUTTON FOCUS */
        .btn-glass:focus-visible {
            outline: 3px solid rgba(66, 191, 255, 0.4);
            outline-offset: 3px;
        }


        /* =========================
           FOOTER
        ========================= */
        footer {
            color: #64748b;

            border-top: 1px solid rgba(120, 140, 160, 0.2);
        }


        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 768px) {

            .glass-card:hover {
                transform: translateY(-5px);
            }

            .navbar-brand img {
                width: 35px !important;
                height: 35px !important;
            }

        }


        /* =========================
           REDUCED MOTION
        ========================= */
        @media (prefers-reduced-motion: reduce) {

            .glass-card,
            .nav-link,
            .btn-glass,
            .navbar-brand {
                transition: none;
            }

            .glass-card:hover,
            .btn-glass:hover {
                transform: none;
            }

        }
        /* Sembunyikan scrollbar tanpa mematikan fungsi scroll */
html {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

html::-webkit-scrollbar,
body::-webkit-scrollbar {
    display: none;
}
    </style>

    @stack('styles')

</head>

<body>

    <!-- =========================
         HEADER DAN NAVBAR
    ========================= -->
    <header class="container py-3">

        <nav class="navbar navbar-expand-lg glass-navbar px-3">

            <!-- BRAND DAN FOTO PROFIL -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}"
                style="text-decoration:none;">

                <img src="{{ route('profile.photo') }}" alt="Foto Anton" class="rounded-circle"
                    style="
                        width:40px;
                        height:40px;
                        object-fit:cover;
                        border:none;
                        box-shadow:none;
                    ">

                <span>Anton Wisnu Maryanto</span>

            </a>


            <!-- NAVBAR TOGGLER -->
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarPortfolio" aria-controls="navbarPortfolio" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- NAVIGATION MENU -->
            <div class="collapse navbar-collapse" id="navbarPortfolio">

                <ul class="navbar-nav ms-auto gap-lg-3">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">
                            About
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}"
                            href="{{ route('service') }}">
                            Service
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}"
                            href="{{ route('skills') }}">
                            Skills
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('education') ? 'active' : '' }}"
                            href="{{ route('education') }}">
                            Education
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>


    <!-- =========================
         MAIN CONTENT
    ========================= -->
    <main class="container py-4">

        @yield('content')

    </main>


    <!-- =========================
         FOOTER
    ========================= -->
    <footer class="container text-center py-4 mt-5">

        <p class="mb-0">
            &copy; {{ date('Y') }} Anton Wisnu Maryanto 
        </p>

    </footer>


    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>
