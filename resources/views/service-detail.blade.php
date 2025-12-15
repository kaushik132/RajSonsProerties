@extends('dashboard.layouts.main')
@section('content')
    <section id="property-detail" class="">
        <div class="container">
            <div class="row g-4 align-items-start">

                <!-- Left Column -->
                <div class="col-md-7">
                    <!-- Image Slider -->
                    <div class="property-slider owl-carousel owl-theme mb-4">
                        @foreach ($servicesData->gallery as $item)
                            <div class="item"><img src="{{ url('uploads/' . $item) }}" class="img-fluid rounded-4"
                                    alt=""></div>
                        @endforeach
                    </div>

                    <!-- Property Details -->
                    <div class="property-info  rounded-4 shadow-sm bg-white">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="">
                                <h4 class="fw-bold mb-1">{{ $servicesData->title }}</h4>
                                <p class="text-muted mb-2"><i
                                        class="fa-solid fa-location-dot me-1"></i>{{ $servicesData->location }}</p>
                            </div>
                            @php
                                $rating = $servicesData->star; // 0 – 5
                                $fullStars = floor($rating); // Full stars
                                $halfStar = $rating - $fullStars >= 0.5 ? 1 : 0; // Half star
                                $emptyStars = 5 - ($fullStars + $halfStar); // Empty stars
                            @endphp

                            <div class="d-flex align-items-center mb-3">

                                {{-- Full Stars --}}
                                @for ($i = 0; $i < $fullStars; $i++)
                                    <span><img src="{{ url('assets/images/str.png') }}" alt=""></span>
                                @endfor

                                {{-- Half Star --}}
                                @if ($halfStar)
                                    <span><img src="{{ url('assets/images/lite-star.png') }}" alt=""></span>
                                @endif

                                {{-- Empty Stars (optional) --}}
                                @for ($i = 0; $i < $emptyStars; $i++)
                                    <span><img src="{{ url('assets/images/empty-star.png') }}" alt=""></span>
                                @endfor

                            </div>

                        </div>

                        <h5 class="detail-price">₹ {{ $servicesData->price }}</h5>

                        <div class="d-flex flex-wrap gap-3 mb-3 text-muted small mt-3">
                            <span><i class="fa-solid fa-bed me-1"></i>{{ $servicesData->beds_number }} Bed</span>
                            <span><i class="fa-solid fa-bath me-1"></i>{{ $servicesData->baths_number }} Bath</span>
                            <span><i class="fa-solid fa-ruler-combined me-1"></i>{{ $servicesData->size_of_area }}
                                sq.ft</span>
                        </div>
                        <hr>
                        <h6 class="fw-bold mb-3">Description</h6>
                        <p class="text-muted mb-3">
                            {!! $servicesData->description !!}
                        </p>




                    </div>

                    <div class="amenities rounded-4 shadow-sm bg-white mt-2">
                        <h6 class="fw-bold mb-3">Amenities & Features</h6>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($features as $feature)
                                <span class="amenity">
                                    <i class="fa-solid fa-car"></i> {{ $feature->name }}
                                </span>
                            @endforeach


                        </div>
                    </div>
                    <div class="property-detail p-4 rounded-4 shadow-sm bg-white mt-2 row" style="margin: 0px 4px;">
                        <h6 class="fw-bold mb-3">Property Details</h6>
                        <div class="col-md-6">
                            <div class="pro-detai-info">
                                <span>Property Type</span>
                                <span>{{ $servicesData->property_type }}</span>
                            </div>
                            <hr>
                            <div class="pro-detai-info">
                                <span>Bathrooms</span>
                                <span>{{ $servicesData->baths_number }}</span>
                            </div>
                            <hr>
                            <div class="pro-detai-info">
                                <span>Furnishing</span>
                                <span>{{ $servicesData->furnishing }}</span>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="pro-detai-info">
                                <span>Bedrooms</span>
                                <span>{{ $servicesData->beds_number }}</span>
                            </div>
                            <hr>
                            <div class="pro-detai-info">
                                <span>Area</span>
                                <span>{{ $servicesData->area }}</span>
                            </div>
                            <hr>
                            <div class="pro-detai-info">
                                <span>Parking</span>
                                <span>{{ $servicesData->parking }}</span>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="property-detail p-2 p-md-4 rounded-4 shadow-sm bg-white mt-2 row" style="margin: 0px 4px;">
                        <h6 class="fw-bold mb-3">Location</h6>
                        <div class="map-box">
                            <iframe
                                src="{{ $servicesData->location_map }}"
                                width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-5">
                    <div class="contact-card p-4 bg-white rounded-4 shadow-sm">
                        <h5 class="fw-bold mb-3">Contact Agent</h5>

                        <form>
                            <div class="mb-2">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="mb-2">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="mb-2">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder=" Enter Phone number">
                            </div>
                            <div class="mb-3">
                                <label>Send Message</label>
                                <textarea class="form-control" rows="3" placeholder="I'm interested in this property..."></textarea>
                            </div>
                            <button type="submit" class="btn w-100 send-btn">Send Message</button>
                        </form>
                        <hr class="my-3">

                        <div class="mt-4">
                            <div class="contact-info phone-box p-2 rounded mb-2 d-flex align-items-center">
                                <i class="fa-solid fa-phone me-2"></i> {{ $servicesData->agent_number }}
                            </div>
                            <div class="contact-info email-box p-2 rounded mb-2 d-flex align-items-center">
                                <i class="fa-solid fa-envelope me-2"></i> {{ $servicesData->agent_email }}
                            </div>
                            <div class="contact-info msg-box p-2 rounded d-flex align-items-center">
                                <i class="fa-solid fa-comment me-2"></i> Message
                            </div>
                        </div>


                        <hr class="my-3">
                        <div class="agent-info d-flex align-items-center">
                            <i class="fa-solid fa-user-tie text-warning fs-4 me-3"></i>
                            <div>
                                <h6 class="m-0 fw-bold">{{ $servicesData->agent_name }}</h6>
                                <small class="text-muted">Verified Agent since {{ $servicesData->varify_agent_year }}</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- testimonials section  -->

    <section id="testimonials">
        <div class="container">
            <h2 class="sec-title">Hear From Our Customers</h2>
            <p class="sec-subtitle">Genuine feedback from tenants and owners who trust our platform.</p>

            <div class="owl-carousel test-owl">

                  @foreach ($feedbacks as $feedback)
                    <div class="test-card">
                        @php
                            $rating = $feedback->star; // eg: 2.4, 4.5, 5
                            $fullStars = floor($rating); // poore stars
                            $halfStar = $rating - $fullStars >= 0.5 ? 1 : 0;
                            $emptyStars = 5 - ($fullStars + $halfStar);
                        @endphp

                        <ul class="star-ul">
                            {{-- Full stars --}}
                            @for ($i = 0; $i < $fullStars; $i++)
                                <li>
                                    <img src="{{ url('assets/images/str.png') }}" alt="star">
                                </li>
                            @endfor

                            {{-- Half star --}}
                            @if ($halfStar)
                                <li>
                                    <img src="{{ url('assets/images/half-star.png') }}" alt="half star">
                                </li>
                            @endif

                            {{-- Empty stars --}}
                            @for ($i = 0; $i < $emptyStars; $i++)
                                <li>
                                    <img src="{{ url('assets/images/lite-star.png') }}" alt="empty star">
                                </li>
                            @endfor
                        </ul>

                        <p>{{ $feedback->feedback }}</p>
                        <ul class="test-profile">
                            <li><img src="{{ url('uploads/' . $feedback->image) }}" alt=""></li>
                            <li>
                                <h4 class="m-0">{{ $feedback->name }}</h4>
                                <p>{{ $feedback->location }}</p>
                            </li>
                        </ul>
                        <img class="test-quote" src="{{ url('assets/images/quote.png') }}" alt="quote">
                    </div>
                @endforeach
     






                <!-- Add more test-card items -->
            </div>
        </div>
    </section>

    <!-- faq section  -->

    <section class="faq-section">
        <div class="container">
            <div class="text-start mb-4">
                <h2 class="sec-title">Frequently Asked Question</h2>
                <p class="sec-sub-title">
                    As we couldn’t find anything on the market that checked those boxes, we decided to build our own
                    recruiting software. Our tool is easy to set up.
                </p>
            </div>

            <div class="accordion" id="faqAccordion">
                <?php   if($servicesData->question!=null){   ?>
                <!-- 01 -->
                  <?php

                   $questions = explode("__",$servicesData->question);
                   $answers = explode("__",$servicesData->answer);

                     foreach ($questions as $key => $value) {

                        $mainEntity[$key]['@type'] ='Question';
                        $mainEntity[$key]['name'] =$value.'?';
                        $mainEntity[$key]['acceptedAnswer']['@type'] ='Answer';
                        $mainEntity[$key]['acceptedAnswer']['text'] =$answers[$key].'.';

                    ?>
                    @php
                        $num = $key ;
                        $num++;
                    @endphp
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="heading{{$key}}">
                        <button class="accordion-button collapsed d-flex align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}">
                            <span class="faq-number me-3">@php
                                echo $num;
                            @endphp</span>
                            <span class="faq-question">{!! $value !!}?</span>
                            <i class="fa-solid fa-chevron-down ms-auto"></i>
                        </button>
                    </h2>
                    <div id="collapse{{$key}}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted small ps-5">
                           {!! $answers[$key] !!}
                        </div>
                    </div>
                </div>

   <?php } ?>

 <?php } ?>


            </div>
        </div>
    </section>
@endsection
