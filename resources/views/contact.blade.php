@extends('dashboard.layouts.main')
@section('content')





<!-- bread cum part  -->
<section class="breadcum-part">
    <div class="container">
        <div class="row">
            <h2>Get in Touch With Us</h2>
            <p>Have questions or need help finding your ideal PG or flat? Our team is here to assist you every step of the way.</p>
        </div>
    </div>
</section>

<!-- contact section  -->

<section id="contact-section" class="py-3 py-lg-5">
    <div class="container">
        <div class="row align-items-start">

            <!-- LEFT SIDE -->
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Get in Touch –<br>We’re Here to Help!</h2>
                <p class="text-muted mb-4">
                    Have questions or need assistance? Our team is always ready to guide you on your journey.
                </p>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h6 class="fw-bold">Call Center</h6>
                        <p class="mb-1 text-muted">(208) 555–0112</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h6 class="fw-bold">Our Location</h6>
                        <p class="mb-1 text-muted">1901 Thornridge Cir.<br>Shiloh, Hawaii</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h6 class="fw-bold">Social Network</h6>
                        <p class="mb-1 text-muted">Nusa Penida, Indonesia</p>

                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h6 class="fw-bold">Email</h6>
                        <p class="mb-1 text-muted">nathan.roberts@example.com</p>
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE FORM -->
            <div class="col-lg-6">
                <div class="contact-box shadow-sm">

                    <h5 class="fw-bold mb-2">Send Us a Message</h5>
                    <p class="text-muted mb-4">
                        Have questions or need assistance? Our team is always ready to guide you on your journey.
                    </p>

                    <form>

                        <!-- FULL NAME -->
                        <div class="mb-3 position-relative">
                            <i class="bi bi-person input-icon"></i>
                            <input type="text" class="form-control" placeholder="Your full name">
                        </div>

                        <!-- EMAIL -->
                        <div class="mb-3 position-relative">
                            <i class="bi bi-envelope input-icon"></i>
                            <input type="email" class="form-control" placeholder="yourname@gmail.com">
                        </div>

                        <!-- MESSAGE -->
                        <div class="mb-4 position-relative">
                            <i class="bi bi-chat-dots input-icon"></i>
                            <textarea class="form-control" placeholder="Your message"></textarea>
                        </div>

                        <!-- BUTTON -->
                        <button class="send-btn">Send Message</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>





@endsection
