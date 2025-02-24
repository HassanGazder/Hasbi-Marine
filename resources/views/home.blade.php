@extends('layouts.template')

@section('content')
<style>
    .service-item {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .service-item .service-description {
        flex-grow: 1;
        /* Ensures the description expands while keeping buttons aligned */
    }

    .service-item .btn {
        align-self: center;
        /* Centers the button at the bottom */
    }

    .service-item img {
        height: 250px;
        object-fit: cover;
    }
</style>

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <!-- Carousel Item 1 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('img/bannernew.jpg') }}" alt="Carousel Image 1">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Item 2 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('img/bannernew2.jpg') }}" alt="Carousel Image 2">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Your Trusted Partner in <span class="text-primary">Global Shipping</span></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                Move your goods with confidence! Our trusted transport solutions guarantee
                                safe, efficient, and on-time deliveries worldwide.
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
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/about2.jpg') }}" style="object-fit: cover;" alt="About Us Image">
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
                <a href="contact" class="btn btn-primary py-3 px-5">Explore More</a>
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
                        <p class="text-primary m-0 fw-bold">+97 15 2103 0161 | +92 323 2985922</p>
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
                    <h4 class="mb-3">Simrad Gyro</h4>
                    <p class="service-description">Ship navigation equipment includes GPS, radar, compasses, depth sounders, and autopilots, ensuring safe and efficient vessel movement.</p>
                    <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid w-100" src="{{ asset('img/service-7.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                    </div>
                    <h4 class="mb-3">Marine Radar Equipments</h4>
                    <p class="service-description">Furuno Radar is a high-performance marine radar ensuring precise navigation, collision avoidance, and all-weather situational awareness.</p>
                    <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid w-100" src="{{ asset('img/service-8.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                    </div>
                    <h4 class="mb-3">Furuno Radar</h4>
                    <p class="service-description">JRC Radar is a reliable marine radar system known for its high-resolution target detection, enhanced navigation safety, and user-friendly interface for vessels of all sizes.</p>
                    <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid w-100" src="{{ asset('img/jrcradar.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                    </div>
                    <h4 class="mb-3">Jrc Radar</h4>
                    <p class="service-description">Koden Radar is a reliable marine radar system offering precise navigation, target detection, and enhanced safety in all weather conditions.</p>
                    <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid w-100" src="{{ asset('img/icomradar.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                    </div>
                    <h4 class="mb-3">Icom Radar</h4>
                    <p class="service-description">Icom Radar is a dependable marine radar system designed for accurate navigation, target detection, and enhanced maritime safety.</p>
                    <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid w-100" src="{{ asset('img/sperry.jpg') }}" alt="servuce" style="height: 250px; object-fit: cover;">
                    </div>
                    <h4 class="mb-3">Sperry Marine</h4>
                    <p class="service-description">Onwa Radar is a reliable marine radar system providing accurate navigation, target detection, and improved maritime safety.</p>
                    <a class="btn btn-danger mt-2" href="contact"><i class="fa fa-arrow-right"></i> Read More</a>
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
                <h1 class="mb-5">A Trusted Logistics Company Since 2024</h1>

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

            </div>

            <!-- Right Column: Feature Image -->
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/feathures.jpg') }}" style="object-fit: cover;" alt="Our Features">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature End -->








@endsection