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
                            <button class="btn sort-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                            <button class="btn filter-btn dropdown-toggle d-flex align-items-center gap-2" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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


                @foreach ($servicesList as $servicesLists)
                    <div class="col-md-3">


                        <a href="{{url('service-detail/'.$servicesLists->slug)}}">
                            <div class="property-sec-card">

                                <!-- Top Image Section -->
                                <div class="property-img-wrap">
                                    <img src="{{ url('uploads/' . $servicesLists->thumb_image) }}"
                                        alt="{{ $servicesLists->title }}">

                                    <!-- Tags on Image -->
                                    @if ($servicesLists->for_sale == 1)
                                        <span class="badge-sale">For Sale</span>
                                    @endif

                                    <span class="share-icon"><i class="fas fa-share-alt m-0"></i></span>
                                </div>

                                <!-- Bottom Content Section -->
                                <div class="property-content">

                                    <h4 class="property-heading">{{ $servicesLists->title }}</h4>

                                    <div class="property-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                       {{ $servicesLists->location }}
                                    </div>

                                    <div class="property-details">
                                        <div><i class="fas fa-bed"></i>{{ $servicesLists->beds_number }} Beds</div>
                                        <div><i class="fas fa-bath"></i>{{ $servicesLists->baths_number }} Baths</div>
                                        <div><i class="fas fa-ruler-combined"></i>{{ $servicesLists->size_of_area }} sq.ft</div>
                                    </div>

                                    <div class="property-bottom">
                                        <div class="price">₹{{ $servicesLists->price }}</div>
                                        <button class="view-btn">View Details</button>
                                    </div>

                                </div>
                            </div>
                        </a>


                    </div>
                @endforeach







            </div>

            <div class="sec-bottom-btn d-flex justify-content-center">
                <a href="#!" class="sons-btn btn-outline">view All</a>
            </div>


        </div>
        </div>
    </section>
@endsection
