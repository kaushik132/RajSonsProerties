@extends('dashboard.layouts.main')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">



<!-- bread cum part  -->


<!-- login  section  -->

<section class="login-section">
    <a href="index.php" class="text-decoration-none d-flex align-items-center mb-2 text-white">
        <i class="fas fa-arrow-left me-2"></i> Back to Home
    </a>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Side Image -->
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center image-side p-0">
                <img src="assets/images/login-form.png" alt="Login Image" class="img-fluid">
            </div>

            <!-- Right Side Form -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center form-side">
                <div class="login-form">

                    <h2>Enter Verification Code</h2>
                    <p class="mb-4">We’ve sent a 6-digit code to your registered email. Enter it below to verify your identity.</p>

                    <form>

                        <div class="mb-3">
                            <label for="code" class="form-label">Enter Code</label>
                            <input type="text" class="form-control" id="code" placeholder="For 6-digit code">
                        </div>

                        <a href="set-new-pass.php" class="submit-btn">Verify</a>




                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
