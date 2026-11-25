@extends('layouts.app')

@section('title', 'Home | Anton Portfolio')

@section('content')

<!-- =================================
     HERO SECTION
================================= -->
<section class="row align-items-center min-vh-75 py-5">

    <!-- INTRODUCTION CARD -->
    <div class="col-lg-7 mb-5 mb-lg-0">

        <div class="glass-card p-4 p-md-5">

            <p>
                Selamat datang di portofolio saya!
            </p>
<h1 class="display-4 fw-bold mb-3">
    Hello, Saya <br>Anton Wisnu M
</h1>

            <h4 class="mb-4">
                Mechatronics Engineering Student
            </h4>

            <p class="text-secondary mb-4">
                Saya adalah mahasiswa Teknik Mekatronika yang memiliki
                ketertarikan pada teknologi, sistem otomasi industri,
                serta perawatan dan reparasi mesin CNC.
            </p>

            <!-- BUTTON MORE ABOUT ME DAN CONTACT ME -->
            <div class="d-flex flex-wrap gap-3">

                <a href="{{ route('about') }}"
                   class="btn-glass">
                    More About Me
                </a>

                <a href="{{ route('contact') }}"
                   class="btn-glass">
                    Contact Me
                </a>

            </div>

        </div>

    </div>


    <!-- =================================
         PROFILE CARD
    ================================= -->
    <div class="col-lg-5 text-center">

        <div class="glass-card p-4">

            <!-- PROFILE PHOTO -->
            <div class="mx-auto mb-3"
                 style="width:180px; height:180px;">

                <img
    src="{{ route('profile.photo') }}"
    alt="Foto Profil Anton"
    class="rounded-circle"
    style="
        width:180px;
        height:180px;
        object-fit:cover;
        object-position:center;
        border:none;
        box-shadow:none;
    "
>

            </div>

            <!-- PROFILE NAME -->
            <h3 class="fw-bold">
                Anton
            </h3>

            <p class="text-secondary mb-0">
                Mechatronics Engineering
            </p>

        </div>

    </div>

</section>


<!-- =================================
     PROFILE POPUP BUTTON
================================= -->
<div class="text-center mt-4">

    <button
        class="btn-glass"
        type="button"
        data-bs-toggle="modal"
        data-bs-target="#profileModal">

        View Profile

    </button>

</div>


<!-- =================================
     PROFILE POPUP
================================= -->
<div class="modal fade"
     id="profileModal"
     tabindex="-1"
     aria-labelledby="profileModalLabel"
     aria-hidden="true"
     data-bs-backdrop="static"
     data-bs-keyboard="false">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content glass-card text-dark p-3"
             style="background:rgba(255,255,255,.92);">

            <!-- MODAL HEADER -->
            <div class="modal-header border-0">

                <h5 class="modal-title text-blue"
                    id="profileModalLabel">

                    About Anton

                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>


            <!-- MODAL BODY -->
            <div class="modal-body text-center">

                <!-- POPUP PROFILE PHOTO -->
                <div class="mx-auto mb-3"
                     style="width:100px; height:100px;">

                    <img
                        src="{{ route('profile.photo') }}"
                        alt="Foto Profil Anton"
                        class="rounded-circle"
                        style="
                            width:100px;
                            height:100px;
                            object-fit:cover;
                            object-position:center;
                            border:2px solid rgba(66,191,255,.5);
                        "
                    >

                </div>

                <h4>
                    Anton
                </h4>

                <p class="text-secondary">
                    Mahasiswa Teknik Mekatronika
                </p>

                <p>
                    Fokus pada teknologi, sistem otomasi,
                    CNC maintenance, dan pengembangan sistem mekatronika.
                </p>

            </div>


            <!-- MODAL FOOTER -->
            <div class="modal-footer border-0 justify-content-center">

                <button
                    type="button"
                    class="btn-glass"
                    data-bs-dismiss="modal">

                    Close

                </button>

            </div>

        </div>

    </div>

</div>

@endsection
