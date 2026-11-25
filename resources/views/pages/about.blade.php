@extends('layouts.app')

@section('title', 'About | Anton Portfolio')

@section('content')

<!-- ABOUT SECTION -->
<section class="py-5">

    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">  About Me
        </h1>

    <p class="text-secondary">
            Mengenal lebih dekat latar belakang dan ketertarikan saya.
        </p>
    </div>

    <!-- PROFILE INFORMATION -->
 <div class="row align-items-center g-4">

        <!-- PHOTO -->
       <div class="col-lg-4 text-center">

         <div class="glass-card p-4">
              <img
                 src="{{ route('profile.photo') }}"
                    alt="Foto Anton"
                    class="rounded-circle mb-3"
                    style="
          width:180px;
                        height:180px;
                        object-fit:cover;
               object-position:center;
                    "
                >

               <h3 class="fw-bold">Anton Wisnu Maryanto</h3>
            <p class="text-secondary mb-0">
                    Mechatronics Engineering Student
              </p>

            </div>

        </div>

        <!-- ABOUT DESCRIPTION -->
        <div class="col-lg-8">

            <div class="glass-card p-4 p-md-5">

                <h3 class="fw-bold mb-3">
                    selamat datang di portofolio saya
                </h3>

                <p class="text-secondary">
                    Saya adalah mahasiswa Teknik Mekatronika di
                    Politeknik ATMI Surakarta yang memiliki ketertarikan
                    pada teknologi, sistem otomasi industri, dan
                    pengembangan sistem mekatronika.
                </p>

                <p class="text-secondary">
                    Saya juga memiliki minat dalam bidang perawatan
                    dan reparasi mesin CNC, sistem kontrol, serta
                    integrasi komponen mekanik dan elektronik.
                </p>

                <p class="text-secondary mb-0">
                    Melalui pendidikan dan berbagai kegiatan praktik,
                    saya terus mengembangkan kemampuan teknis,
                    pemecahan masalah, dan pemahaman terhadap
                    teknologi industri.
                </p>

            </div>

        </div>

    </div>

    <!-- INTERESTS -->
    <div class="mt-5">

        <div class="text-center mb-4">
            <h2 class="fw-bold">
                My Interests
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="glass-card p-4 h-100 text-center">
                    <h4 class="fw-bold mb-3">Engineering</h4>
                    <p class="text-secondary mb-0">
                        Perancangan teknik, desain mekanik,
                        dan pemecahan masalah rekayasa.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card p-4 h-100 text-center">
                    <h4 class="fw-bold mb-3">Robotics</h4>
                    <p class="text-secondary mb-0">
                        Pengembangan robot, sistem gerak,
                        dan integrasi perangkat elektronik.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card p-4 h-100 text-center">
                    <h4 class="fw-bold mb-3">Automation</h4>
                    <p class="text-secondary mb-0">
                        PLC, sistem kontrol, CNC maintenance,
                        dan otomasi industri.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection
