<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Husbi Marine</title>
    <!-- Favicon -->
    <!-- <link href="{{ asset('img/favicon.ico') }}" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Include static CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<style>
    .navbar-toggler:focus,
    .navbar-toggler:active {
        box-shadow: none !important;
        outline: none !important;
        border: none !important;
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">
                <img src="{{ asset('img/logo-hasbi-marine.jpg') }}" alt="" style="max-height: 60px; width: auto;">
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block">
                <i class="fa fa-headphones text-primary me-3"></i>+97 15 2103 0161 | +92 323 2985922
            </h4>
        </div>
    </nav>



    <!-- Main Content -->
    @yield('content')
    <!-- Main Content -->

    <!-- Footer -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Karachi, Pakistan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+97 15 2103 0161</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 323 2985922</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>husbimarine@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/husbi_marine_electronics?igsh=OXM4NnY3dGtyaHFl&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/share/129fSwtKP2T/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/husbi-marine-78a126351" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="services">Simrad Gyro</a>
                    <a class="btn btn-link" href="services">Marine Radar Equipments</a>
                    <a class="btn btn-link" href="services">Furuno Radar</a>
                    <a class="btn btn-link" href="services">Jrc Radar </a>
                    <a class="btn btn-link" href="services">Icom Radar</a>
                    <a class="btn btn-link" href="services">Sperry Marine </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ route('services') }}">Our Services</a>
                </div>
            </div>
        </div>

        <!-- Secret Admin Login Button (Only Admin Knows) -->
        <div class="container text-center mt-4">
            <a href="{{ route('login.form') }}" class="btn btn-outline-light btn-sm" title="Admin Panel Access">🔒</a>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Husbi Marine</a>, All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Managed By <a class="border-bottom" href="https://htmlcodex.com">Zarnix Tech</a>
                        <br><a class="border-bottom" href="https://themewagon.com" target="_blank">zarnixtech@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->

    <!-- jQuery and Bootstrap JS (served from CDN, no need to place in public) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Local Libraries (in public/lib folder) -->
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>