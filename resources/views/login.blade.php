@extends('dashboard.layouts.main')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
                    <h4>Hello 👋</h4>
                    <h2>Welcome Back</h2>
                    <p class="mb-4">Access your dashboard and manage your writing projects with ease.</p>

                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="forgot.php" class="forgot-link text-dark">Forgot password?</a>
                        </div>

                        <button type="submit" class="submit-btn">Login</button>
                          <!-- <a href="signup.php" class="submit-btn">Login</a> -->

                        <div class="divider d-flex align-items-center my-3">
                            <span class="line flex-grow-1"></span>
                            <span class="mx-2">Or with email</span>
                            <span class="line flex-grow-1"></span>
                        </div>

                        <div class="d-flex gap-2 login-with">
                            <button type="button" class="btn btn-outline-google w-50">
                                <i class="fab fa-google me-2"></i> Login with Google
                            </button>
                            <button type="button" class="btn btn-outline-apple w-50">
                                <i class="fab fa-apple me-2"></i> Login with Apple
                            </button>
                        </div>

                        <p class="text-center mt-4">Don't have an account? <a style="color: var(--main-color);" href="signup.php">Signup</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
