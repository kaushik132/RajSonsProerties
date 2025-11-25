@extends('dashboard.layouts.main')
@section('content')


<!-- bread cum part  -->
<section class="breadcum-part">
    <div class="container">
        <div class="row">
            <h2>All Verified Properties in One Place</h2>
            <p>We bring you a curated selection of trusted PGs and flats — no hidden fees, no surprises.</p>
        </div>
    </div>
</section>

<!-- service card section  -->


<section id="services">
    <div class="container mt-2 mt-md-5 flat-tab-sec-card-cont">
        <ul class="ser-link-ul">
            <li><a href="index.php">Home /</a></li>
            <li><a href="#!"> Featured Flats for Sale</a></li>
        </ul>

        <ul class="main-ul">
            <li>

                <h2 class="sec-title">Featured Flats for Sale</h2>
                <p class="sec-sub-title">4 properties found</p>
            </li>
            <li>
                <div class="filter-bar d-flex gap-3 align-items-center flex-wrap my-3">

                    <!-- Newest First Dropdown -->
                    <div class="dropdown">
                        <button class="btn sort-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Newest First
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Newest First</a></li>
                            <li><a class="dropdown-item" href="#">Oldest First</a></li>
                            <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                            <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                        </ul>
                    </div>
                    <ul>
                        <li><a href="#!"></a></li>
                    </ul>

                    <!-- Filter Dropdown -->
                    <div class="dropdown">
                        <button class="btn filter-btn dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-filter"></i> Filters
                        </button>
                        <div class="dropdown-menu p-3 filter-dropdown">
                            <label class="form-label">Property Type</label>
                            <select class="form-select mb-2">
                                <option>All</option>
                                <option>Apartment</option>
                                <option>Villa</option>
                                <option>Studio</option>
                            </select>

                            <label class="form-label">Price Range</label>
                            <input type="range" class="form-range mb-2" min="0" max="100" step="10">

                            <label class="form-label">Location</label>
                            <input type="text" class="form-control mb-3" placeholder="Enter city or area">

                            <button class="btn apply-btn w-100">Apply Filters</button>
                        </div>
                    </div>
                </div>


            </li>
        </ul>


        <div class="row">


            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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
            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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
            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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
            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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
            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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
            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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
            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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
            <div class="col-md-3">


                <a href="service-detail.php">
                    <div class="property-sec-card">

                        <!-- Top Image Section -->
                        <div class="property-img-wrap">
                            <img src="assets/images/service/ser-1.png" alt="Modern Apartment">

                            <!-- Tags on Image -->
                            <span class="badge-sale">For Sale</span>
                            <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                        </div>

                        <!-- Bottom Content Section -->
                        <div class="property-content">

                            <h4 class="property-heading">Modern 1 BHK Apartment</h4>

                            <div class="property-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Vaishali Nagar, Jaipur
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

            <div class="sec-bottom-btn d-flex justify-content-center">
                <a href="#!" class="sons-btn btn-outline">view All</a>
            </div>


        </div>
    </div>
</section>


@endsection
