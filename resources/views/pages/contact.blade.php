@extends('layouts.app')

@section('title', 'Contact | Anton Portfolio')

@section('content')

<section class="container py-5">

    <!-- HEADER -->
    <div class="text-center mb-5">
        <h1 class="fw-bold mt-2">
            Kontak Saya
        </h1>

        <p class="text-secondary">
            Jangan ragu untuk menghubungi saya untuk keperluan kolaborasi, proyek, atau diskusi
        </p>
    </div>

    <div class="row g-4">

        <!-- CONTACT INFORMATION -->
        <div class="col-lg-5">
            <div class="glass-card p-4 h-100">

                <h3 class="fw-bold mb-3">Hubungi saya</h3>

                <p class="text-secondary mb-4">
                    Saya terbuka terhadap berbagai peluang yang berkaitan dengan mekatronika, otomasi industri, perawatan dan pemeliharaan CNC, serta teknologi
                </p>

                <div class="d-flex flex-column gap-3">

                    <!-- EMAIL -->
                    <div class="contact-info-box">

                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                                <path d="m3 7 9 7 9-7"/>
                            </svg>
                        </div>

                        <div class="contact-details">
                            <h6>Email</h6>
                            <p>anton.20246007@student.atmi.ac.id</p>
                        </div>

                    </div>

                    <!-- LOCATION -->
                    <div class="contact-info-box">

                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </div>

                        <div class="contact-details">
                            <h6>Location</h6>
                            <p>Jalan Adi Sucipto, Gajahan · (0271) 7686220</p>
                        </div>

                    </div>

                    <!-- EDUCATION -->
                    <div class="contact-info-box">

                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="m2 9 10-5 10 5-10 5L2 9Z"/>
                                <path d="M6 11v5c4 3 8 3 12 0v-5"/>
                                <path d="M22 9v6"/>
                            </svg>
                        </div>

                        <div class="contact-details">
                            <h6>Education</h6>
                            <p>Politeknik ATMI Surakarta</p>
                        </div>

                    </div>

                    <!-- SOCIAL MEDIA -->
                    <div class="contact-info-box">

                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="18" cy="5" r="3"/>
                                <circle cx="6" cy="12" r="3"/>
                                <circle cx="18" cy="19" r="3"/>
                                <path d="m8.7 10.7 6.6-4.4M8.7 13.3l6.6 4.4"/>
                            </svg>
                        </div>

                        <div class="contact-details">
                            <h6>Social Media</h6>
                            <p>GitHub | LinkedIn</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <!-- CONTACT FORM -->
        <div class="col-lg-7">

            <div class="glass-card p-4 h-100">

                <h3 class="fw-bold mb-4">Send Me a Message</h3>

                <form id="contactForm">

                    <!-- NAME -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Your Name
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Enter your name"
                            required>
                    </div>

                    <!-- EMAIL -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Your Email
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter your email"
                            required>
                    </div>

                    <!-- SUBJECT -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Subject
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Enter subject"
                            required>
                    </div>

                    <!-- MESSAGE -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">
                            Message
                        </label>

                        <textarea
                            class="form-control"
                            rows="5"
                            placeholder="Write your message..."
                            required></textarea>
                    </div>

                    <!-- BUTTON -->
                    <button type="submit" class="btn-glass">
                        Send Message
                    </button>

                </form>

            </div>
        </div>

    </div>

</section>


<style>

/* =====================================
   CONTACT INFORMATION BOX
===================================== */

.contact-info-box {
    display: flex;
    align-items: center;
    gap: 15px;

    padding: 17px;

    background: rgba(255, 255, 255, 0.75);
    border: 1px solid rgba(190, 210, 230, 0.7);
    border-radius: 16px;

    transition: all 0.3s ease;
}

.contact-info-box:hover {
    transform: translateY(-4px);

    background: #ffffff;
    border-color: #42bfff;

    box-shadow: 0 8px 20px rgba(40, 130, 190, 0.12);
}


/* =====================================
   ICON CONTAINER
===================================== */

.contact-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(66, 191, 255, 0.15);
    color: #000000;

    border-radius: 13px;
}

.contact-icon svg {
    width: 25px;
    height: 25px;

    fill: none;
    stroke: currentColor;

    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
}


/* =====================================
   CONTACT TEXT
===================================== */

.contact-details {
    flex: 1;
}

.contact-details h6 {
    color: #000000;
    font-weight: 700;
    margin-bottom: 5px;
}

.contact-details p {
    color: #344054;
    margin-bottom: 0;
}


/* =====================================
   CONTACT FORM
===================================== */

.form-control {
    border: 1px solid rgba(190, 210, 230, 0.8);
    border-radius: 12px;

    padding: 12px 15px;

    background: rgba(255, 255, 255, 0.8);
    color: #263445;
}

.form-control:focus {
    border-color: #42bfff;

    box-shadow: 0 0 0 0.2rem rgba(66, 191, 255, 0.15);
}

.form-control::placeholder {
    color: #9aa8b8;
}

textarea {
    resize: none;
}


/* =====================================
   RESPONSIVE
===================================== */

@media (max-width: 768px) {

    .contact-info-box {
        padding: 14px;
    }

    .contact-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
    }

    .contact-icon svg {
        width: 23px;
        height: 23px;
    }

}

</style>

@endsection