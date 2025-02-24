@extends('layouts.template')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
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
                <a href="#" class="btn btn-primary py-3 px-5">Explore More</a>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

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
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/feature.jpg') }}" style="object-fit: cover;" alt="Our Features">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature End -->


@endsection