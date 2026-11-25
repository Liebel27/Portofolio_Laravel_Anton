
@extends('layouts.app')

@section('title', 'Home | Anton Portfolio')

@section('content')

<section class="row align-items-center min-vh-75 py-5">

    <!-- INTRODUCTION -->
    <div class="col-lg-7 mb-5 mb-lg-0">

        <div class="glass-card p-4 p-md-5">

            <p class="text-blue fw-semibold mb-2">
                WELCOME TO MY PORTFOLIO
            </p>

            <h1 class="display-4 fw-bold mb-3">
                Hello, I'm <span class="text-blue">Anton.</span>
            </h1>

            <h4 class="mb-4">
                Mechatronics Engineering Student
            </h4>

            <p class="text-white-50 mb-4">
                Saya adalah mahasiswa Teknik Mekatronika yang memiliki
                ketertarikan pada teknologi, sistem otomasi industri,
                serta perawatan dan reparasi mesin CNC.
            </p>

            <div class="d-flex flex-wrap gap-3">
                <a href="{{ route('about') }}" class="btn btn-glass">
                    More About Me
                </a>

                <a href="{{ route('contact') }}" class="btn btn-outline-light">
                    Contact Me
                </a>
            </div>

        </div>
    </div>

    <!-- PROFILE -->
    <div class="col-lg-5 text-center">

        <div class="glass-card p-4">

            <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                 style="width:180px;height:180px;background:rgba(66,191,255,.15);border:2px solid rgba(66,191,255,.5);">

                <span class="display-1 text-blue fw-bold">A</span>

            </div>

            <h3 class="fw-bold">Anton</h3>

            <p class="text-white-50 mb-0">
                Mechatronics Engineering
            </p>

        </div>

    </div>

</section>

<!-- PROFILE POPUP -->
<div class="text-center mt-4">

    <button class="btn btn-glass"
            data-bs-toggle="modal"
            data-bs-target="#profileModal">
        View Profile Popup
    </button>

</div>

<div class="modal fade" id="profileModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content glass-card text-white p-3"
             style="background:rgba(10,20,35,.85);">

            <div class="modal-header border-0">

                <h5 class="modal-title text-blue">
                    About Anton
                </h5>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body text-center">

                <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                     style="width:100px;height:100px;background:rgba(66,191,255,.2);">

                    <span class="display-4 text-blue">A</span>

                </div>

                <h4>Anton</h4>

                <p class="text-white-50">
                    Mahasiswa Teknik Mekatronika
                </p>

                <p>
                    Fokus pada teknologi, sistem otomasi,
                    CNC maintenance, dan pengembangan sistem mekatronika.
                </p>

            </div>

            <div class="modal-footer border-0 justify-content-center">

                <button type="button"
                        class="btn btn-glass"
                        data-bs-dismiss="modal">
                    Close
                </button>

            </div>

        </div>

    </div>

</div>

@endsection
