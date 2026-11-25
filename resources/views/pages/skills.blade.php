@extends('layouts.app')

@section('title', 'Skills | Anton Portfolio')

@section('content')

<section class="pt-2 pb-5">
    <!-- PAGE HEADER -->
    <section class="pt-2 pb-5">

        <div class="text-center mb-4">
         <h4>  My Skills
        </h4>

        <p class="text-secondary">
            Kemampuan teknis dan perangkat lunak yang saya pelajari
            dalam bidang Teknik Mekatronika.
        </p>

    </div>

    <!-- SKILL CATEGORIES -->
    <div class="row g-4">

        <!-- MECHANICAL -->
        <div class="col-md-6 col-lg-4">
            <div class="glass-card p-4 h-100">

                <h4 class="fw-bold mb-3">
                    01. Mechanical
                </h4>

                <p class="text-secondary">
                    Kemampuan dalam perancangan dan pemahaman
                    sistem mekanik.
                </p>

                <ul class="text-secondary mb-0">
                    <li>Mechanical Design</li>
                    <li>3D Modeling</li>
                    <li>CAD Drawing</li>
                    <li>Machine Maintenance</li>
                    <li>CNC Maintenance</li>
                </ul>

            </div>
        </div>

        <!-- ELECTRICAL -->
        <div class="col-md-6 col-lg-4">
            <div class="glass-card p-4 h-100">

                <h4 class="fw-bold mb-3">
                    02.  Electrical
                </h4>

                <p class="text-secondary">
                    Pemahaman sistem kelistrikan dan
                    komponen elektronika.
                </p>

                <ul class="text-secondary mb-0">
                    <li>Electrical Wiring</li>
                    <li>Basic Electronics</li>
                    <li>Motor Control</li>
                    <li>Power Electronics</li>
                    <li>Electrical Troubleshooting</li>
                </ul>

            </div>
        </div>

        <!-- AUTOMATION -->
        <div class="col-md-6 col-lg-4">
            <div class="glass-card p-4 h-100">

                <h4 class="fw-bold mb-3">
                    03. Automation
                </h4>

                <p class="text-secondary">
                    Pemahaman sistem kontrol dan otomasi
                    dalam bidang industri.
                </p>

                <ul class="text-secondary mb-0">
                    <li>PLC Programming</li>
                    <li>Sensor and Actuator</li>
                    <li>Control Systems</li>
                    <li>Industrial Automation</li>
                    <li>Robotics</li>
                </ul>

            </div>
        </div>

        <!-- PROGRAMMING -->
        <div class="col-md-6 col-lg-4">
            <div class="glass-card p-4 h-100">

                <h4 class="fw-bold mb-3">
                    04. Programming
                </h4>

                <p class="text-secondary">
                    Kemampuan pemrograman untuk mendukung
                    pengembangan sistem mekatronika.
                </p>

                <ul class="text-secondary mb-0">
                    <li>C / C++</li>
                    <li>Python</li>
                    <li>HTML & CSS</li>
                    <li>JavaScript</li>
                    <li>PHP & Laravel</li>
                </ul>

            </div>
        </div>

        <!-- SOFTWARE -->
        <div class="col-md-6 col-lg-4">
            <div class="glass-card p-4 h-100">

                <h4 class="fw-bold mb-3">
                    05. Software
                </h4>

                <p class="text-secondary">
                    Perangkat lunak yang digunakan untuk
                    desain, simulasi, dan pengembangan.
                </p>

                <ul class="text-secondary mb-0">
                    <li>SolidWorks</li>
                    <li>Fusion 360</li>
                    <li>RoboDK</li>
                    <li>Visual Studio Code</li>
                    <li>Arduino IDE</li>
                </ul>

            </div>
        </div>

        <!-- TECHNICAL -->
        <div class="col-md-6 col-lg-4">
            <div class="glass-card p-4 h-100">

                <h4 class="fw-bold mb-3">
                    06. Technical Skills
                </h4>

                <p class="text-secondary">
                    Kemampuan pendukung dalam pengerjaan
                    proyek dan pemecahan masalah teknik.
                </p>

                <ul class="text-secondary mb-0">
                    <li>Technical Troubleshooting</li>
                    <li>Problem Solving</li>
                    <li>Technical Drawing</li>
                    <li>System Integration</li>
                    <li>Teamwork</li>
                </ul>

            </div>
        </div>

    </div>

    <!-- CLOSING -->
    <div class="glass-card p-4 p-md-5 text-center mt-5">

        <h3 class="fw-bold mb-3">
            Always Keep Learning
        </h3>

        <p class="text-secondary mb-0">
            Saya terus mengembangkan kemampuan melalui
            pembelajaran, praktikum, dan proyek di bidang
            Teknik Mekatronika.
        </p>

    </div>

</section>

@endsection
