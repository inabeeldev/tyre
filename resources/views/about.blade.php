@extends('welcome')

@section('content')

@section('title', 'Trusted Mobile Tyre Repair & Replacement Service in Dubai - Online Tyre Shop')
@section('meta_description', 'Explore trusted mobile car tyre repair, battery, & new tyre replacement in Dubai. We are your nearest tyre shop, offering swift and reliable mobile services.')


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeInUpBig" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/23a.jpg') }}" style="object-fit: cover;" alt="" loading="lazy">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                        <h4 class="text-white">of Service</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h1 class="mb-4"><span class="text-primary">OnlineTireShop</span> Is The Best Place For Your Auto Care</h1>
                <p class="mb-4">We are one of the prominent online tyres trading companies in the Middle East. Formed in 2018 and located in Dubai. We have grown in leaps & bounds to become one of the leading tire trading companies with well established network of authorized distributors catering to the UAE market.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Professional & Expert</h6>
                                <span>Our team consists of highly skilled and experienced professionals dedicated to providing expert services for your vehicle. Trust us for quality and precision.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h6>Quality Servicing Center</h6>
                                <span>We take pride in being a quality servicing center, committed to ensuring that your vehicle receives top-notch care and maintenance for optimal performance.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h6>Competitive Price With Warranty</h6>
                                <span>Enjoy competitive pricing without compromising quality. Our services come with a warranty, providing you with peace of mind and satisfaction.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });" class="btn btn-primary py-3 px-5">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.1s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-clock fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">24/7 Service</h5>
                        <p>We understand that vehicle issues can happen anytime. Our 24/7 service ensures that you can rely on us around the clock for any emergency repairs or assistance.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Dedicated Team</h5>
                        <p>Our team consists of skilled and experienced workers dedicated to providing expert solutions for your vehicle needs. Count on us for professionalism and expertise.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.5s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Modern Equipment</h5>
                        <p>We use modern equipment to ensure precision and efficiency in our services. Experience the benefits of advanced technology for your vehicle maintenance.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });">WhatsApp Us</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5 wow rotateInUpRight" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                <p class="text-white mb-0">Years of Service</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                <p class="text-white mb-0">Expert Technicians</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1200</h2>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.9s">
                <i class="fa fa-car fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                <p class="text-white mb-0">No of Services</p>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->




@endsection
