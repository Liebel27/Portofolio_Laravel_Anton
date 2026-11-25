@extends('layouts.app')

@section('title', 'Education | Anton Portfolio')

@section('content')

<section class="pt-2 pb-5">

    <!-- PAGE HEADER -->
    <div class="text-center mb-5">

        <h1 class="display-4 fw-bold">
            My <span class="text-blue">Education.</span>
        </h1>

        <p class="text-secondary">
            Perjalanan pendidikan saya dari sekolah dasar
            hingga perguruan tinggi.
        </p>

    </div>


    <!-- EDUCATION HISTORY -->
    <div class="row g-4">

        <!-- ELEMENTARY SCHOOL -->
        <div class="col-md-6">

            <div class="glass-card p-4 h-100">

                <p class="text-blue fw-semibold mb-2">
                    01 · SEKOLAH DASAR
                </p>

                <h4 class="fw-bold mb-3">
                    SDN 7 Bandungbaru
                </h4>

                <p class="text-secondary mb-0">
                    Jalan Raya Bandung Baru–Adiluwih,
                    Bandung Baru, Lampung.
                </p>

            </div>

        </div>


        <!-- JUNIOR HIGH SCHOOL -->
        <div class="col-md-6">

            <div class="glass-card p-4 h-100">

                <p class="text-blue fw-semibold mb-2">
                    02 · SEKOLAH MENENGAH PERTAMA
                </p>

                <h4 class="fw-bold mb-3">
                    SMP Negeri 1 Adiluwih
                </h4>

                <p class="text-secondary mb-0">
                    Jalan Raya Bandung Baru–Adiluwih,
                    Bandung Baru, Lampung.
                </p>

            </div>

        </div>


        <!-- VOCATIONAL HIGH SCHOOL -->
        <div class="col-md-6">

            <div class="glass-card p-4 h-100">

                <p class="text-blue fw-semibold mb-2">
                    03 · SEKOLAH MENENGAH KEJURUAN
                </p>

                <h4 class="fw-bold mb-3">
                    SMK Taman Siswa Purworejo
                </h4>

                <p class="text-secondary mb-0">
                    Pendidikan menengah kejuruan
                    di Purworejo, Jawa Tengah.
                </p>

            </div>

        </div>


        <!-- COLLEGE -->
        <div class="col-md-6">

            <div class="glass-card p-4 h-100">

                <p class="text-blue fw-semibold mb-2">
                    04 · PERGURUAN TINGGI
                </p>

                <h4 class="fw-bold mb-2">
                    Politeknik ATMI Surakarta
                </h4>

                <h6 class="mb-3">
                    Teknik Mekatronika
                </h6>

                <p class="text-secondary mb-3">
                    Mempelajari integrasi sistem mekanik,
                    elektrikal, elektronika, pemrograman,
                    dan otomasi industri.
                </p>

                <span class="badge rounded-pill text-bg-info">
                    Mahasiswa
                </span>

            </div>

        </div>

    </div>


    <!-- LEARNING AREAS -->
    <div class="mt-5">

        <div class="text-center mb-4">

            <h2 class="fw-bold">
                Learning Areas
            </h2>

            <p class="text-secondary">
                Bidang pembelajaran selama menempuh pendidikan.
            </p>

        </div>


        <div class="row g-4">

            <!-- MECHANICAL ENGINEERING -->
            <div class="col-md-6 col-lg-4">

                <div class="glass-card p-4 h-100">

                    <h4 class="fw-bold mb-3">
                        Mechanical Engineering
                    </h4>

                    <p class="text-secondary mb-0">
                        Mempelajari desain mekanik, proses manufaktur,
                        elemen mesin, dan perawatan mesin industri.
                    </p>

                </div>

            </div>


            <!-- ELECTRICAL & ELECTRONICS -->
            <div class="col-md-6 col-lg-4">

                <div class="glass-card p-4 h-100">

                    <h4 class="fw-bold mb-3">
                        Electrical & Electronics
                    </h4>

                    <p class="text-secondary mb-0">
                        Mempelajari rangkaian listrik, elektronika,
                        sistem penggerak, dan instalasi kelistrikan.
                    </p>

                </div>

            </div>


            <!-- AUTOMATION & CONTROL -->
            <div class="col-md-6 col-lg-4">

                <div class="glass-card p-4 h-100">

                    <h4 class="fw-bold mb-3">
                        Automation & Control
                    </h4>

                    <p class="text-secondary mb-0">
                        Mempelajari PLC, sistem kontrol,
                        sensor, aktuator, dan otomasi industri.
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- CLOSING -->
    <div class="glass-card p-4 p-md-5 text-center mt-5">

        <h3 class="fw-bold mb-3">
            Learning Through <span class="text-blue">Practice.</span>
        </h3>

        <p class="text-secondary mb-0">
            Saya berusaha mengembangkan pengetahuan dan keterampilan
            melalui pembelajaran teori, praktikum, serta proyek teknik.
        </p>

    </div>

</section>

@endsection
