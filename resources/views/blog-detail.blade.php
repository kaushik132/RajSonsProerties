@extends('dashboard.layouts.main')
@section('content')


<section id="blog-detail-sec">
    <div class="container">
        <!-- Blog Heading -->
         <span><a href="blog.php"></a></span>
        <h4>Finding the Perfect PG Accommodation in Jaipur</h4>

        <!-- Author Info -->
        <div class="blog-detia-top-outh">
            <div class="author-info">
                <img src="assets/images/blog-de-pro.png" alt="Author" class="author-img">
                <div class="author-name-date">
                    <span class="author-name">Rohit Kumar</span>
                    <span class="publish-date">Nov 13, 2025</span>
                </div>
                <div class="separator"></div>
                <div class="read-time">8 min read</div>
            </div>
        </div>

        <!-- Blog Image -->
        <div class="row blog-image mt-3 mb-3">
            <img src="assets/images/blog-detail-main.png" alt="Blog Image" class="img-fluid w-100">

            <!-- Share Icons -->
            <div class="share-icons mb-3">
                <span>Share:</span>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>

            <ul class="list-unstyled b-d-listing-ul">
                <li>Finding the Perfect PG Accommodation in Jaipur</li>
                <li>For students and working professionals, finding the right PG (Paying Guest) accommodation is crucial. This guide
                    will help you navigate the Jaipur PG market effectively.</li>
                    <li>Types of PG Accommodations</li>
            </ul>
            <!-- Blog Content -->
            <div class="blog-content">
                <p>For students and working professionals, finding the right PG (Paying Guest) accommodation is crucial. This guide will help you navigate the Jaipur PG market effectively.</p>


                <!-- Author Card -->
                <div class="author-card mt-4 p-3 d-flex align-items-center" style="background-color: #FFF1C9; border-radius: 8px; gap: 15px;">
                    <img src="assets/images/blog-de-pro.png" alt="Author" class="author-img" style="width:60px; height:60px; border-radius:50%;">
                    <div>
                        <h6 class="mb-1">Rohit Kumar</h6>
                        <p style="margin:0; font-size:14px; color:#555;">Rohit is a travel and accommodation expert, helping students and professionals find the best PG options in Jaipur with insights and tips.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- news letter section  -->

<section class="newsletter-section py-5 text-center">
  <div class="container">
    <h2 class="newsletter-title mb-2">Enjoyed this article?</h2>
    <p class="newsletter-desc mb-4">Subscribe to get more real estate insights delivered to your inbox</p>

    <form class="d-flex justify-content-center align-items-center newsletter-form">
      <input type="email" class="form-control me-2" placeholder="Enter your email" required>
      <button type="submit" class="btn btn-subscribe">Subscribe</button>
    </form>
  </div>
</section>

@endsection
