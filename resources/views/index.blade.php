@extends('dashboard.layouts.main')
@section('content')
    <!-- hero section   -->

    <section id="main-hero">

        <div class="container">

            <div class="main-content" data-aos="zoom-in" data-aos-duration="1500">

                <h1>Explore the Best Villas and Apartments Near You</h1>

                <p class="">Discover verified accommodations near your college or workplace. Simple search, transparent
                    pricing, and zero hassle.Discover verified accommodations near your college or workplace. Simple search,
                    transparent pricing, </p>
                <div class="d-flex gap-3 justify-content-center banner-btns">
                    <a href="#explore" class="sons-btn btn-outline">Start Exploring</a>
                    <a href="#how-it-works" class="sons-btn  btn-fill">
                        <i class="fas fa-play"></i>&nbsp;
                        See How It Works
                    </a>
                </div>

                <!-- Font Awesome for icon -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


            </div>





        </div>



    </section>

    <!-- Flats tab  section  -->
    <section id="property-section">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-4">
                <h2 class="sec-title" data-aos="flip-up" data-aos-duration="1500">
                    Find the Perfect Place for You
                </h2>
                <p class="sec-subtitle" data-aos="zoom-in" data-aos-duration="1500">
                    Whether it's a shared PG or a private flat, explore options that feel like home.
                </p>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="propertyTab" role="tablist" data-aos="zoom-in"
                data-aos-duration="1500">

                @foreach ($serviceCategories as $serviceCat)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if ($loop->first) active @endif"
                            id="tab-{{ $serviceCat->id }}" data-bs-toggle="tab"
                            data-bs-target="#content-{{ $serviceCat->id }}" type="button" role="tab"
                            aria-controls="content-{{ $serviceCat->id }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">

                            {{ $serviceCat->name }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="propertyTabContent">

                @foreach ($serviceCategories as $serviceCat)
                    <div class="tab-pane fade @if ($loop->first) show active @endif"
                        id="content-{{ $serviceCat->id }}" role="tabpanel">

                        <div class="cards-row">

                            @foreach ($subserviceCategories->where('service_category_id', $serviceCat->id) as $subCat)
                                <div class="property-card text-center sub-btn" data-sub="{{ $subCat->id }}">
                                    <img src="{{ url('uploads/' . $subCat->image) }}" alt="{{ $subCat->name }}"
                                        class="card-icon">

                                    <div>{{ $subCat->name }}</div>
                                </div>
                            @endforeach

                            @if ($subserviceCategories->where('service_category_id', $serviceCat->id)->isEmpty())
                                <p class="text-center text-muted">No subcategories found.</p>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- Bottom Property Cards -->
        <div class="container mt-5 flat-tab-sec-card-cont">
            <div class="row" data-aos="zoom-in" data-aos-duration="1500">

                @foreach ($properties as $property)
                    <div class="col-md-6 col-lg-3 property-item" data-cat="{{ $property->service_id }}"
                        data-sub="{{ $property->service_sub_id }}">


                        <a href="##">
                            <div class="property-sec-card">

                                <!-- Image -->
                                <div class="property-img-wrap">
                                    <img src="{{ asset('uploads/' . $property->thumb_image) }}"
                                        alt="{{ $property->title }}">

                                    @if ($property->for_sale == 1)
                                        <span class="badge-sale">For Sale</span>
                                    @endif

                                    <span class="share-icon"><i class="fas fa-share-alt"></i></span>
                                </div>

                                <!-- Content -->
                                <div class="property-content">

                                    <h4 class="property-heading">{{ $property->title }}</h4>

                                    <div class="property-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $property->location }}
                                    </div>

                                    <div class="property-details">
                                        <div><i class="fas fa-bed"></i> {{ $property->beds_number }} Beds</div>
                                        <div><i class="fas fa-bath"></i> {{ $property->baths_number }} Baths</div>
                                        <div><i class="fas fa-ruler-combined"></i> {{ $property->size_of_area }} sq.ft
                                        </div>
                                    </div>

                                    <div class="property-bottom">
                                        <div class="price">₹{{ $property->price }}</div>
                                        <button class="view-btn">View Details</button>
                                    </div>

                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach

                <div class="sec-bottom-btn d-flex justify-content-center">
                    <a href="{{ url('service') }}" class="sons-btn btn-outline">View All</a>
                </div>

            </div>
        </div>
    </section>



    <!-- explore Properties  section  -->

    <section id="explore-properties">
        <div class="container">

            <ul>
                <li>
                    <h2 class="sec-title" data-aos="flip-up"data-aos-duration="1500">Discover What Makes Our PG & Flat
                        Rentals Stand Out</h2>
                    <p class="sec-subtitle" data-aos="zoom-in" data-aos-duration="1500">Explore our premium selection of
                        properties</p>
                </li>
                <li>
                    <a href="service-detail.php">View All <i class="fa-solid fa-arrow-right"></i></a>
                </li>
            </ul>

            <!-- OWL SLIDER -->
            <div class="property-owl owl-carousel owl-theme mt-4">

                <!-- CARD 1 -->
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>





    <!-- discover-rental section         -->

    <section id="discover-rental">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left column: heading + paragraph + vertical slider -->
                <div class="col-md-6">
                    <h2 class="mb-3 sec-title" data-aos="flip-up"data-aos-duration="1500">Discover What Makes Our PG &
                        Flat Rentals Stand Out</h2>
                    <p class="mb-4 sec-subtitle">Finding the perfect place to stay shouldn’t be stressful. Whether you’re a
                        student, working professional, or family, we make your accommodation search simple, transparent, and
                        affordable — from browsing to booking.</p>

                    <!-- Slider wrapper -->
                    <div class="vertical-slider" aria-roledescription="carousel" aria-label="Rental highlights">
                        <div class="vs-list">
                            <!-- Slides: copy/replace content as needed (must be 1 or more) -->
                            <div class="vs-slide" data-index="0">
                                <div class="vs-slide-img">
                                    <img class="vs-icon" src="assets/images/icons/dis-icon.png" alt="">
                                </div>
                                <div class="vs-slide-content">
                                    <h5>Verified Properties</h5>
                                    <p>Explore fully-furnished PGs with meals, Wi-Fi, and all the essentials — all verified
                                        and ready for you.</p>
                                </div>
                            </div>
                            <div class="vs-slide" data-index="1">
                                <div class="vs-slide-img">
                                    <img class="vs-icon" src="assets/images/icons/dis-icon.png" alt="">
                                </div>
                                <div class="vs-slide-content">
                                    <h5>Verified Properties</h5>
                                    <p>Explore fully-furnished PGs with meals, Wi-Fi, and all the essentials — all verified
                                        and ready for you.</p>
                                </div>
                            </div>
                            <div class="vs-slide" data-index="2">
                                <div class="vs-slide-img">
                                    <img class="vs-icon" src="assets/images/icons/dis-icon.png" alt="">
                                </div>
                                <div class="vs-slide-content">
                                    <h5>Verified Properties</h5>
                                    <p>Explore fully-furnished PGs with meals, Wi-Fi, and all the essentials — all verified
                                        and ready for you.</p>
                                </div>
                            </div>
                            <div class="vs-slide" data-index="3">
                                <div class="vs-slide-img">
                                    <img class="vs-icon" src="assets/images/icons/dis-icon.png" alt="">
                                </div>
                                <div class="vs-slide-content">
                                    <h5>Verified Properties</h5>
                                    <p>Explore fully-furnished PGs with meals, Wi-Fi, and all the essentials — all verified
                                        and ready for you.</p>
                                </div>
                            </div>


                        </div>

                        <!-- Controls -->
                        <div class="vs-controls">
                            <!-- <button class="vs-btn vs-up" aria-label="Previous"><i class="fas fa-chevron-up"></i></button> -->
                            <button class="vs-btn vs-down" aria-label="Next"><i class="fas fa-chevron-down"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Right column: illustrative image -->
                <div class="col-md-6 text-center">
                    <div class="" data-aos="zoom-in" data-aos-duration="1500">
                        <img src="assets/images/dicover-main-image.png" alt="Property" class="img-fluid rounded">
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Modern property section  -->
    <section id="explore-properties">
        <div class="container">
            <ul>
                <li>
                    <h2 class="sec-title" data-aos="flip-up" data-aos-duration="1500">Properties Available for Rent</h2>
                    <p class="sec-subtitle" data-aos="zoom-in" data-aos-duration="1500">Find your perfect rental home
                        from apartments to villas</p>
                </li>
                <li>
                    <a href="service-detail.php">view All <i class="fa-solid fa-arrow-right"></i></a>
                </li>
            </ul>
            <div class="property-owl owl-carousel owl-theme mt-4">

                <!-- CARD 1 -->
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- find Property section  -->
    <section id="find-property" class="d-flex align-items-center justify-content-center text-center">
        <div class="overlay"></div>

        <div class="content text-white">
            <h2 class="mb-3" data-aos="flip-up" data-aos-duration="1500">Ready to Find Your Dream Property?</h2>
            <p class="mb-4 sec-subtitle" data-aos="zoom-in" data-aos-duration="1500">Join thousands of satisfied
                customers who found their perfect home with us</p>

            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="sons-btn btn-outline">Get Started</a>
                <a href="#" class="sons-btn btn-fill">Contact us</a>
            </div>
        </div>
    </section>


    <!-- Accommodations section  -->
    <section id="explore-properties" class="accommodations">
        <div class="container">
            <ul>
                <li>
                    <h2 class="sec-title" data-aos="flip-up" data-aos-duration="1500">Popular PG Accommodations</h2>
                    <p class="sec-subtitle" data-aos="zoom-in" data-aos-duration="1500">Comfortable and affordable PG
                        options for students and working professionals</p>
                </li>
                <li>
                    <a href="service-detail.php">view All <i class="fa-solid fa-arrow-right"></i></a>
                </li>
            </ul>

            <div class="property-owl owl-carousel owl-theme mt-4">

                <!-- CARD 1 -->
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- Accommodations section  -->
    <section id="explore-properties">
        <div class="container">
            <ul>
                <li>
                    <h2 class="sec-title" data-aos="flip-up" data-aos-duration="1500">Properties Available for Rent</h2>
                    <p class="sec-subtitle" data-aos="zoom-in" data-aos-duration="1500">Find your perfect rental home
                        from apartments to villas</p>
                </li>
                <li>
                    <a href="service-detail.php">view All <i class="fa-solid fa-arrow-right"></i></a>
                </li>
            </ul>
            <div class="property-owl owl-carousel owl-theme mt-4">

                <!-- CARD 1 -->
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="service-detail.php">
                        <div class="property-sec-card">
                            <div class="property-img-wrap">
                                <img src="assets/images/service/ser-1.png" alt="Modern Apartment">
                                <span class="badge-sale">For Sale</span>
                                <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                            </div>

                            <div class="property-content">
                                <h4 class="property-heading">Modern 1 BHK Apartment</h4>
                                <div class="property-location">
                                    <i class="fas fa-map-marker-alt"></i> Vaishali Nagar, Jaipur
                                </div>
                                <div class="property-details">
                                    <div><i class="fas fa-bed"></i> 1 Beds</div>
                                    <div><i class="fas fa-bath"></i> 1 Baths</div>
                                    <div><i class="fas fa-ruler-combined"></i> 500 sq.ft</div>
                                </div>
                                <div class="property-bottom">
                                    <div class="price">₹45 Lac</div>
                                    <button class="view-btn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- testimonials section  -->

    <section id="testimonials">
        <div class="container">
            <h2 class="sec-title" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="200">Hear From Our
                Customers</h2>
            <p class="sec-subtitle" data-aos="zoom-in" data-aos-duration="1500">Genuine feedback from tenants and owners
                who trust our platform.</p>

            <div class="owl-carousel test-owl">

                <div class="test-card">
                    <ul class="star-ul">
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/lite-star.png" alt=""></li>
                    </ul>
                    <p>Finding the perfect place to stay shouldn’t be stressful. Whether you’re a student, working
                        professional, or family, we make your accommodation search simple, transparent, and affordable —
                        from
                        browsing to booking.</p>
                    <ul class="test-profile">
                        <li><img src="assets/images/perofile-1.png" alt=""></li>
                        <li>
                            <h4 class="m-0">Sophia</h4>
                            <p>India, Jaipur</p>
                        </li>
                    </ul>
                    <img class="test-quote" src="assets/images/quote.png" alt="">
                </div>
                <div class="test-card">
                    <ul class="star-ul">
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/lite-star.png" alt=""></li>
                    </ul>
                    <p>Finding the perfect place to stay shouldn’t be stressful. Whether you’re a student, working
                        professional, or family, we make your accommodation search simple, transparent, and affordable —
                        from
                        browsing to booking.</p>
                    <ul class="test-profile">
                        <li><img src="assets/images/perofile-1.png" alt=""></li>
                        <li>
                            <h4 class="m-0">Sophia</h4>
                            <p>India, Jaipur</p>
                        </li>
                    </ul>
                    <img class="test-quote" src="assets/images/quote.png" alt="">
                </div>
                <div class="test-card">
                    <ul class="star-ul">
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/lite-star.png" alt=""></li>
                    </ul>
                    <p>Finding the perfect place to stay shouldn’t be stressful. Whether you’re a student, working
                        professional, or family, we make your accommodation search simple, transparent, and affordable —
                        from
                        browsing to booking.</p>
                    <ul class="test-profile">
                        <li><img src="assets/images/perofile-1.png" alt=""></li>
                        <li>
                            <h4 class="m-0">Sophia</h4>
                            <p>India, Jaipur</p>
                        </li>
                    </ul>
                    <img class="test-quote" src="assets/images/quote.png" alt="">
                </div>
                <div class="test-card">
                    <ul class="star-ul">
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/lite-star.png" alt=""></li>
                    </ul>
                    <p>Finding the perfect place to stay shouldn’t be stressful. Whether you’re a student, working
                        professional, or family, we make your accommodation search simple, transparent, and affordable —
                        from
                        browsing to booking.</p>
                    <ul class="test-profile">
                        <li><img src="assets/images/perofile-1.png" alt=""></li>
                        <li>
                            <h4 class="m-0">Sophia</h4>
                            <p>India, Jaipur</p>
                        </li>
                    </ul>
                    <img class="test-quote" src="assets/images/quote.png" alt="">
                </div>
                <div class="test-card">
                    <ul class="star-ul">
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/str.png" alt=""></li>
                        <li><img src="assets/images/lite-star.png" alt=""></li>
                    </ul>
                    <p>Finding the perfect place to stay shouldn’t be stressful. Whether you’re a student, working
                        professional, or family, we make your accommodation search simple, transparent, and affordable —
                        from
                        browsing to booking.</p>
                    <ul class="test-profile">
                        <li><img src="assets/images/perofile-1.png" alt=""></li>
                        <li>
                            <h4 class="m-0">Sophia</h4>
                            <p>India, Jaipur</p>
                        </li>
                    </ul>
                    <img class="test-quote" src="assets/images/quote.png" alt="">
                </div>



                <!-- Add more test-card items -->
            </div>
        </div>
    </section>

    <!-- counter section  -->

    <section id="counter-section">
        <div class="overlay">
            <div class="container">
                <div class="row text-center text-white py-5">

                    <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="100">
                        <h2 class="counter" data-target="10000">0</h2>
                        <p>Properties Listed</p>
                    </div>

                    <div class="col-md-3 col-6 mb-4" data-aos="fade-down" data-aos-duration="2000"
                        data-aos-offset="200">
                        <h2 class="counter" data-target="5000">0</h2>
                        <p>Happy Customers</p>
                    </div>

                    <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="200">
                        <h2 class="counter" data-target="500">0</h2>
                        <p>Verified Agents</p>
                    </div>

                    <div class="col-md-3 col-6 mb-4" data-aos="fade-down" data-aos-duration="1500"
                        data-aos-offset="200">
                        <h2 class="counter" data-target="50">0</h2>
                        <p>Locations</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        let selectedCategory = null;
        let selectedSub = null;

        // ---- CATEGORY CLICK ----
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {

                selectedCategory = this.dataset.id;
                selectedSub = null;

                // Highlight
                document.querySelectorAll('.category-btn').forEach(x => x.classList.remove('active'));
                this.classList.add('active');

                filterProperties();
            });
        });

        // ---- SUBCATEGORY CLICK ----
        document.querySelectorAll('.sub-btn').forEach(btn => {
            btn.addEventListener('click', function() {

                selectedSub = this.dataset.sub;

                filterProperties();
            });
        });

        // ---- FILTER FUNCTION (NO AJAX) ----
        function filterProperties() {
            const props = document.querySelectorAll('.property-item');

            props.forEach(card => {
                const cardCat = card.dataset.cat;
                const cardSub = card.dataset.sub;

                let show = true;

                if (selectedCategory && cardCat !== selectedCategory) {
                    show = false;
                }

                if (selectedSub && cardSub !== selectedSub) {
                    show = false;
                }

                card.style.display = show ? "block" : "none";
            });
        }
    </script>
@endsection
