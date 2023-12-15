<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OnlineTireShop - Car Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('public/tyre/img/favicon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('public/slick/slick-theme.css')}}"> --}}
    <link href="{{ asset('public/tyre/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/tyre/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/tyre/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public/tyre/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('public/tyre/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Dubai, United Arab Emirates</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>admin@onlinetireshop.ae</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <a href="tel:+971585914376" class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+971 58 591 4376</small>
                </a>

                {{-- <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>OnlineTireShop</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link{{ Request::is('/') ? ' active' : '' }}">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link{{ Request::is('about') ? ' active' : '' }}">About</a>
                <a href="{{ url('/services') }}" class="nav-item nav-link{{ Request::is('services') ? ' active' : '' }}">Services</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link{{ Request::is('contact') ? ' active' : '' }}">Contact</a>
            </div>
            <a href="whatsapp://send?phone=+971585914376" class="btn btn-success py-4 px-lg-5 d-none d-lg-block">Whatsapp Us<i class="fa fa-arrow-right ms-3"></i></a>

        </div>
    </nav>
    <!-- Navbar End -->

@yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3 text-primary"></i>Dubai, United Arab Emirates</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3 text-primary"></i>+971 58 591 4376</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3 text-primary"></i>admin@onlinetireshop.ae</p>
                    {{-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Services</h4>
                    <a class="btn btn-link" href="{{ url('services') }}">Flat Tire Services</a>
                    <a class="btn btn-link" href="{{ url('services') }}">Tire Repairing</a>
                    <a class="btn btn-link" href="{{ url('services') }}">Vehicle Battery</a>
                    <a class="btn btn-link" href="{{ url('services') }}">Pre-RTA Test</a>
                    <a class="btn btn-link" href="{{ url('services') }}">New Tire</a>
                    <a class="btn btn-link" href="{{ url('services') }}">Auto Works</a>
                    <a class="btn btn-link" href="{{ url('services') }}">Car Washing</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">About Us</h4>
                    <p>We are one of the prominent online tyres trading companies in the Middle East. Formed in 2018 and located in Dubai. We have grown in leaps & bounds to become one of the leading tire trading companies with well established network of authorized distributors catering to the UAE market.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ url('/') }}">Online Tire Shop</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://apnadevs.com">ApnaDevs</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/about') }}">About</a>
                            <a href="{{ url('/services') }}">Services</a>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <div class="contact-icons text-center">
    <a href="whatsapp://send?phone=+123456789" class="btn btn-lg btn-success btn-lg-square"><i class="fab fa-whatsapp"></i></a>
    <a href="tel:+123456789" class="btn btn-lg btn-primary btn-lg-square"><i class="fas fa-phone"></i></a>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/tyre/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('public/tyre/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('public/tyre/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/tyre/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('public/tyre/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/tyre/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/tyre/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('public/tyre/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('public/tyre/js/main.js') }}"></script>
</body>

</html>
