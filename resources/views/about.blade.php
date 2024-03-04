@extends('welcome')

@section('content')

@section('title', 'Trusted Mobile Tyre Repair & Replacement Service in Dubai - Online Tyre Shop')
@section('meta_description', 'Explore trusted mobile car tyre repair, battery, & new tyre replacement in Dubai. We are your nearest tyre shop, offering swift and reliable mobile services.')


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h2 class="display-3 text-white mb-3 animated slideInDown">About Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
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
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/23a.jpg') }}" style="object-fit: cover;" alt="tire ae" loading="lazy">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                        <h4 class="text-white">of Service</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h1 class="mb-4"><span class="text-primary"> Online Tyre Shop</span> Is A Trusted Mobile Tyre Repair & Replacement Service in Duba</h1>
                <p class="mb-4">Welcome to our Online Tyres Trading Hub, your trusted companion in navigating the dynamic tire market
                    of the Middle East. Established in 2018 and headquartered in Dubai, we've swiftly risen to prominence,
                    transforming into a leading tire trading company. Our extensive network of authorized distributors is
                    meticulously designed to exclusively cater to the unique needs of the UAE market.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h3 class="aup1">Guiding Your Tire Journey</h3>
                                <span>Embark on your tire exploration with our team of dedicated professionals, blending highly skilled and
                                    experienced expertise. Whether you're on a quest to buy tires online or seeking a reliable tyre workshop
                                    near you, trust us for quality and precision.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">02</span>
                            </div>
                            <div class="ps-3">
                                <h3 class="aup1">Your Haven for Quality Servicing</h3>
                                <span>Discover our quality servicing center, a haven ensuring your vehicle receives top-notch care and
                                    maintenance for optimal performance. Our commitment extends beyond the workshop, reaching into
                                    your local community for hassle-free car maintenance near you.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">03</span>
                            </div>
                            <div class="ps-3">
                                <h3 class="aup1"> Competitive Prices, Endless Satisfaction</h3>
                                <span>Explore competitive pricing without compromising on quality, backed by services that come with a
                                    warranty. Delight in a seamless journey to buy tires online in the UAE, find reliable roadside assistance in
                                    Dubai, and experience efficient tyre replacement services.</span>
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
                        <h4 class="mb-3">24/7 Service</h4>
                        <p>We understand that vehicle issues can happen anytime. Our 24/7 service ensures that you can rely on us around the clock for any emergency repairs or assistance.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h4 class="mb-3">Dedicated Team</h4>
                        <p>Our team consists of skilled and experienced workers dedicated to providing expert solutions for your vehicle needs. Count on us for professionalism and expertise.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.5s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h4 class="mb-3">Modern Equipment</h4>
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
