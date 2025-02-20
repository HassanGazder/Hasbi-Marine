@extends('layouts.template')

@section('content')
<!-- <style>
    .service-item {
        background: #f8f9fa;
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .service-item:hover {
        background: #FF3E41;
        color: white;
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .service-item i {
        font-size: 30px;
        color: #FF3E41;
        transition: all 0.3s ease-in-out;
    }

    .service-item:hover i {
        color: white;
    }

    .service-item h4 {
        font-size: 18px;
        /* font-weight: 600; */
        margin-top: 10px;
    }
</style> -->
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <!-- Carousel Item 1 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="Carousel Image 1">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Logistics</span> Solution</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                Reliable, fast, and secure logistics services tailored to your business needs.
                                From warehousing to last-mile delivery, we ensure a smooth shipping experience.
                            </p>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Item 2 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('img/carousel-2.jpg') }}" alt="Carousel Image 2">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Your Trusted Partner in <span class="text-primary">Global Shipping</span></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                Move your goods with confidence! Our trusted transport solutions guarantee
                                safe, efficient, and on-time deliveries worldwide.
                            </p><a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel End -->

<!-- About Section Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <!-- About Image -->
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/about.jpg') }}" style="object-fit: cover;" alt="About Us Image">
                </div>
            </div>

            <!-- About Text Content -->
            <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                <h1 class="mb-5">Fast, Reliable & Efficient Logistics Solutions</h1>
                <p class="mb-5">
                    We are a trusted logistics company committed to delivering excellence in transportation, warehousing, and supply chain solutions.
                    With our global network and cutting-edge technology, we ensure secure and timely deliveries that keep your business moving forward.
                    Whether it’s domestic or international shipping, we offer customized solutions tailored to your needs.
                </p>

                <!-- Features Section -->
                <div class="row g-4 mb-5">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                        <h5>Global Coverage</h5>
                        <p class="m-0">
                            Seamless logistics solutions across multiple countries, ensuring your goods reach any destination safely and on time.
                        </p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                        <h5>On-Time Delivery</h5>
                        <p class="m-0">
                            Punctual and efficient delivery services backed by real-time tracking to keep your shipments on schedule.
                        </p>
                    </div>
                </div>

                <!-- Explore More Button -->
                <a href="#" class="btn btn-primary py-3 px-5">Explore More</a>
            </div>
        </div>
    </div>
</div>

<!-- About Section End -->


<!-- Fact Section Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Left Column: Text Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                <h1 class="mb-5">#1 Place To Manage All Of Your Shipments</h1>
                <p class="mb-5">
                    We provide seamless logistics and transport solutions, ensuring secure and timely deliveries for businesses worldwide.
                    With years of expertise and a trusted network, we simplify the complexities of supply chain management.
                </p>
                <div class="d-flex align-items-center">
                    <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Call for any query!</h6>
                        <h3 class="text-primary m-0">97 15 2103 0161</h3>
                    </div>
                </div>
            </div>

            <!-- Right Column: Statistics -->
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <!-- Stat: Happy Clients -->
                    <div class="col-sm-6">
                        <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-users fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Happy Clients</p>
                        </div>
                        <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-ship fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Complete Shipments</p>
                        </div>
                    </div>

                    <!-- Stat: Customer Reviews -->
                    <div class="col-sm-6">
                        <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-star fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Customer Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fact Section End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
            <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid w-100" src="{{ asset('img/service-13.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                            </div>
                            <h4 class="mb-3">Ship navigation equipment</h4>
                            <p class="service-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, ab.</p>
                            <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid w-100" src="{{ asset('img/service-7.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                            </div>
                            <h4 class="mb-3">Furuno Radar</h4>
                            <p class="service-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, ab.</p>
                            <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid w-100" src="{{ asset('img/service-8.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                            </div>
                            <h4 class="mb-3">JRC Radar</h4>
                            <p class="service-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, ab.</p>
                            <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid w-100" src="{{ asset('img/service-9.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                            </div>
                            <h4 class="mb-3">Koden Radar</h4>
                            <p class="service-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, ab.</p>
                            <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid w-100" src="{{ asset('img/service-10.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                            </div>
                            <h4 class="mb-3">Icom Radar</h4>
                            <p class="service-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, ab.</p>
                            <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid w-100" src="{{ asset('img/service-12.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                            </div>
                            <h4 class="mb-3">onwa Radar</h4>
                            <p class="service-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, ab.</p>
                            <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
            </div>
    </div>
</div>
        </div>
    </div>
</div>

<!-- Service End -->

<!-- Service End -->

<!-- Feature Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <!-- Left Column: Feature Text -->
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">A Trusted Logistics Company Since 1990</h1>

                <!-- Feature 1: Worldwide Service -->
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Worldwide Service</h5>
                        <p class="mb-0">
                            We provide global logistics solutions, ensuring seamless cross-border shipping
                            with efficient customs clearance and real-time tracking.
                        </p>
                    </div>
                </div>

                <!-- Feature 2: On-Time Delivery -->
                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>On-Time Delivery</h5>
                        <p class="mb-0">
                            Our commitment to punctuality ensures that your shipments arrive safely
                            and on schedule, minimizing delays and maximizing efficiency.
                        </p>
                    </div>
                </div>

                <!-- Feature 3: 24/7 Support -->
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>24/7 Customer Support</h5>
                        <p class="mb-0">
                            Our dedicated support team is available around the clock to assist you
                            with tracking, inquiries, and logistics solutions, ensuring a hassle-free experience.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Feature Image -->
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;" alt="Our Features">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature End -->


<!-- Pricing Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Pricing Plan</h6>
            <h1 class="mb-5">Flexible Pricing for Your Logistics Needs</h1>
        </div>
        <div class="row g-4">
            <!-- Basic Plan -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">Basic Plan</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00
                            <small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Shipment</small>
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <p><i class="fa fa-check text-success me-3"></i>Local Deliveries</p>
                        <p><i class="fa fa-check text-success me-3"></i>Standard Shipping</p>
                        <p><i class="fa fa-check text-success me-3"></i>Real-Time Tracking</p>
                        <p><i class="fa fa-check text-success me-3"></i>Basic Insurance</p>
                        <p><i class="fa fa-check text-success me-3"></i>Customer Support (Business Hours)</p>
                        <a class="btn-slide mt-2" href="contact">
                            <i class="fa fa-arrow-right"></i><span>Order Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">Standard Plan</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00
                            <small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Shipment</small>
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <p><i class="fa fa-check text-success me-3"></i>Domestic & International Shipping</p>
                        <p><i class="fa fa-check text-success me-3"></i>Express Delivery Options</p>
                        <p><i class="fa fa-check text-success me-3"></i>Advanced Tracking System</p>
                        <p><i class="fa fa-check text-success me-3"></i>Premium Insurance Coverage</p>
                        <p><i class="fa fa-check text-success me-3"></i>24/7 Customer Support</p>
                        <a class="btn-slide mt-2" href="contact">
                            <i class="fa fa-arrow-right"></i><span>Order Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Advanced Plan -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">Advanced Plan</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00
                            <small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Shipment</small>
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <p><i class="fa fa-check text-success me-3"></i>Custom Logistics Solutions</p>
                        <p><i class="fa fa-check text-success me-3"></i>Priority & Same-Day Delivery</p>
                        <p><i class="fa fa-check text-success me-3"></i>Dedicated Logistics Manager</p>
                        <p><i class="fa fa-check text-success me-3"></i>High-Value Shipment Insurance</p>
                        <p><i class="fa fa-check text-success me-3"></i>VIP 24/7 Dedicated Support</p>
                        <a class="btn-slide mt-2" href="contact">
                            <i class="fa fa-arrow-right"></i><span>Order Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pricing End -->

<!-- Quote start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left Section: Quote Info -->
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                <h1 class="mb-5">Request A Free Quote!</h1>
                <p class="mb-5">
                    Get customized logistics solutions tailored to your shipping needs.
                    Whether it's local or international freight, we offer cost-effective,
                    secure, and efficient transport services. Request a free quote now!
                </p>
                <div class="d-flex align-items-center">
                    <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Call for any query!</h6>
                        <h3 class="text-primary m-0">97 15 2103 0161</h3>
                    </div>
                </div>
            </div>

            <!-- Right Section: Quote Form -->
            <div class="col-lg-7">
                <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Mobile" required style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" required style="height: 55px;">
                                    <option selected>Select A Freight Type</option>
                                    <option value="1">Air Freight</option>
                                    <option value="2">Sea Freight</option>
                                    <option value="3">Road Transport</option>
                                    <option value="4">Rail Transport</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Special Instructions (Optional)"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Get Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quote End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Team</h6>
            <h1 class="mb-5">Expert Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('img/team-1.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('img/team-2.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('img/team-3.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('img/team-4.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <p>Designation</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Testimonial</h6>
            <h1 class="mb-0">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


@endsection