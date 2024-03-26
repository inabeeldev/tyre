@extends('welcome')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('public/tyre/img/39a.webp') }}" alt="car tires">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                <h1 class="display-6 text-white mb-4 pb-2 animated slideInUp">
                                    Experience Excellence at Our Best Online Tyre Shop – The Ultimate Destination for Quality Car Tires in Dubai!
                                </h1>

                                <h2 class="text-white mb-4 pb-2 animated slideInUp mph2">
                                    Reach out to us for immediate assistance with 24/7 Tyre Repair & Emergency Change in Dubai. Your safety on the road is our priority.
                                </h2>
                                <a href="tel:+15551234567" onclick="gtag('event', 'call_button_click', { 'event_category': 'Call', 'event_label': '+971585914376' }); return true;" class="btn btn-primary py-3 px-5 animated slideInDown">Call Us Now<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated shake-slow">
                                <img class="w-100" src="{{ asset('public/tyre/img/19a.webp') }}" alt="tires dubai" loading="lazy">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('public/tyre/img/28a.webp') }}" alt="car tyre price" loading="lazy">

                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                <h2 class="display-5 text-white mb-4 pb-3 animated slideInUp">Your Trustworthy Partner in 24-Hour, Qualified Car Tire Repair Services</h2>
                                <a href="tel:+15551234567" onclick="gtag('event', 'call_button_click', { 'event_category': 'Call', 'event_label': '+971585914376' }); return true;" class="btn btn-primary py-3 px-5 animated slideInDown">Call Us Now<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated shake-slow">
                                <img class="w-100" src="{{ asset('public/tyre/img/26a.webp') }}" alt="car battery service near me" loading="lazy">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->



<!-- Why Choose Us Section Start -->
<div class="container-fluid booking4 my-5 wow bounceInRight text-center" data-wow-delay="0.1s">
    <div class="container">
        <h3 class="section-title mb-4">Why Choose Us</h3>
        <div class="row gx-5">
            <div class="col-lg-3 py-3 bg-column mr-3">
                <div class="py-3">
                    <img src="{{ asset('public/tyre/img/35a.jpg') }}" alt="tyre replacement" class="img-fluid fixed-image-size mb-3" style="border-radius:10px;" loading="lazy">
                    <h4 class="service-title"> Flat Tyre Repair</h4>
                    <p class="service-description">Rely on our skilled technicians for exceptional car repair services, with a specialization in tire
                        repairs. Our commitment ensures the utmost quality, prolonging the lifespan of your tires and
                        elevating your driving experience. Conveniently located as your trusted car tyre shop nearby,
                        we also offer mobile tire repair services in Dubai. Your satisfaction is our priority, providing
                        expert solutions to keep you on the road with confidence.</p>
                </div>
            </div>
            <div class="col-lg-3 py-3 bg-column mr-3">
                <div class="py-3">
                    <img src="{{ asset('public/tyre/img/36a.jpg') }}" alt="flat tire repair dubai" class="img-fluid fixed-image-size mb-3" style="border-radius:10px;" loading="lazy">
                    <h4 class="service-title">Mobile Tyre Service</h4>
                    <p class="service-description">Enjoy the ease of our mobile tyre service, bringing onsite tire repairs directly to you. Our
                        dedicated team ensures swift and reliable services wherever you are. Recognizing the value
                        of your time, we strive to make tyre repairs hassle-free. Explore exclusive tyre offers in Dubai
                        as we prioritize your convenience and satisfaction.</p>
                </div>
            </div>
            <div class="col-lg-3 py-3 bg-column mr-3">
                <div class="py-3">
                    <img src="{{ asset('public/tyre/img/37a.jpg') }}" alt="tyre puncture repair mobile" class="img-fluid fixed-image-size mb-3" style="border-radius:10px;" loading="lazy">
                    <h4 class="service-title">Tyre Replacement</h4>
                    <p class="service-description">Discover our premium selection of new tires, perfect for your Tyre Replacement needs.
                        Whether you seek an upgrade or a replacement, our tyre shop provides a diverse range of
                        options to match your vehicle and driving preferences. Drive with utmost confidence on our
                        top-of-the-line new tires, ensuring a smooth and safe journey on the road</p>
                </div>
            </div>
            <div class="col-lg-3 py-3 bg-column">
                <div class="py-3">
                    <img src="{{ asset('public/tyre/img/38a.jpg') }}" alt="automotive tires" class="img-fluid fixed-image-size mb-3" style="border-radius:10px;" loading="lazy">
                    <h4 class="service-title">Customer Satisfaction</h4>
                    <p class="service-description">Our dedication to ensuring customer satisfaction has garnered acclaim within the automotive
                        industry. Encounter the distinction in our tire services, encompassing both repairs and new
                        tire installations. Your safety and driving comfort are our top priorities. Additionally, explore
                        the convenience of ordering tyres online in the UAE for a seamless experience tailored to your
                        needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.1s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-clock fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">24 hour Tyre Repair Dubai</h5>
                        <p>We acknowledge that vehicle issues can arise at any time. With our 24/7 service, you can trust us
                            around the clock for prompt emergency repairs or assistance. Whether you're in need of 24-hour
                            tyre repair in Dubai or seeking a 24-hour tire repair shop nearby, we're here to provide reliable
                            support whenever you require it.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Dedicated Team</h5>
                        <p>Our team comprises skilled and experienced professionals committed to delivering expert
                            solutions for your vehicle needs. Rely on us for unparalleled professionalism and expertise,
                            whether you require roadside assistance or a quick flat tire fix onsite. Your journey is our priority,
                            and we're here to ensure you receive the highest level of service.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.5s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Modern Equipment</h5>
                        <p>We employ state-of-the-art equipment to guarantee precision and efficiency in <a href="{{ route('service-page') }}">our services</a>.
                            Experience the benefits of advanced technology for your vehicle maintenance, ensuring top-notch
                            service at our car maintenance near me center.</p>
                        <a class="text-primary border-bottom" href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank">WhatsApp Us</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeInUpBig" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/16a.jpg') }}" style="object-fit: cover;" alt="dubai tyre shop" loading="lazy">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                        <h4 class="text-white">of Service</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h2 class="mb-4">Elevate Your Ride With The Best Spot for <span class="text-primary">Online Tyre Shop in Dubai</span></h2>
                <p class="mb-4">Prominent <a href="{{ route('about-page') }}">Online Tyres Trading Company</a> in the Middle East, based in Dubai since 2018. We've rapidly
                    grown to become a leading tire trading entity with a well-established network of authorized distributors
                    in the UAE.</p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary">01</span>
                            </div>
                            <div class="ps-3">
                                <h6>Professional & Expert Team</h6>
                                <span>Our highly skilled and experienced professionals are dedicated to providing expert services for your
                                    vehicle. Trust us for quality and precision.</span>
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
                                <span>Proudly serving as a quality servicing center, we're committed to ensuring your vehicle receives top-notch
                                    care and maintenance for optimal performance.</span>
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
                                <span>Experience competitive pricing without compromising quality. Our services include a warranty, offering
                                    you peace of mind and satisfaction.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" class="btn btn-primary py-3 px-5">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


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


<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Services //</h6>
            <div class="d-flex align-items-center justify-content-center mb-5">
                <i class="fas fa-car text-primary fa-2x me-3 icon-shake"></i>
                <h1>Explore Our Services</h1>
                <i class="fas fa-car text-primary fa-2x ms-3 icon-shake"></i>
            </div>
        </div>

        <div class="row g-4 wow bounceInLeft" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fa fa-car-side fa-2x me-3"></i>
                        <h4 class="m-0">Tyres</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="fa fa-car-battery fa-2x me-3"></i>
                        <h4 class="m-0">Vehicle Battery</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-car fa-2x me-3"></i>
                        <h4 class="m-0">Mobile Car</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <i class="fa fa-oil-can fa-2x me-3"></i>
                        <h4 class="m-0">Auto Works</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                        <i class="fa fa-cog fa-2x me-3"></i>
                        <h4 class="m-0">On-Demand Services</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/6a.jpg') }}"
                                        style="object-fit: cover; height:100% !important;" alt="24 hour tyre repair dubai" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Mobile Tyre Service</h3>
                                <p class="mb-4">Our Best <a href="{{ route('service-page') }}">Tyres Service</a> ensures that your vehicle runs smoothly and safely. From new tyre
                                    installations to tire repairs and maintenance of your car, we've got you covered.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Quality Tyre Services:</strong> Our commitment to excellence ensures top-notch service for your tyres.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Experienced Tyre Technicians:</strong> Trust our skilled technicians for reliable home tire service and car repair mobile service in Dubai.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>State-of-the-Art Equipment:</strong> Equipped with advanced technology, we deliver efficient and precise tire services in Dubai.
                                            </p>
                                        </div>
                                    </div>

                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/21a.jpg') }}"
                                    style="object-fit: cover; height:100% !important;" alt="car battery service near me" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Car Battery Service Near Me</h3>
                                <p class="mb-4">Guarantee your vehicle starts reliably with our professional Vehicle Battery Services. We provide
                                    comprehensive battery testing, expert battery replacement, and regular battery maintenance to
                                    keep you on the road.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Comprehensive Battery Testing:</strong> Rely on our expertise for thorough evaluation and testing.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Expert Battery Replacement:</strong> Choose us for precision in mobile car battery replacement.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Regular Battery Maintenance:</strong> Secure longevity with our reliable Car Battery Service Near Me. We're your trusted partner for a dependable and mobile solution to keep your vehicle powered.
                                            </p>
                                        </div>
                                    </div>

                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/service-3.jpg') }}"
                                    style="object-fit: cover; height:100% !important;" alt="emergency tyre repair" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Mobile Car Services</h3>
                                <p class="mb-4">Experience the convenience of our Mobile Car Services. We provide a variety of services, including
                                    as maintenance, diagnostics, and repairs, while bringing the experience to you.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Mobile Tire Repair Dubai:</strong> We provide mobile tire repair service across Dubai.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Tyre Change Online:</strong> Our services are quite affordable, & customer satisfaction is our top priority.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Mobile Car Battery Replacement:</strong> Experience mobile battery replacement service with us across Dubai.
                                            </p>
                                        </div>
                                    </div>

                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/22a.jpg') }}"
                                    style="object-fit: cover; height:100% !important;" alt="car tyre shop near me" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Auto Works Services</h3>
                                <p class="mb-4">Trust our expert technicians for all your auto work needs. From routine maintenance to complex
                                    repairs, we offer comprehensive services to keep your vehicle running smoothly.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Full-Service Auto Repairs:</strong> Experience top-notch care with our range of services catering to every aspect of your vehicle's needs.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Car Paint:</strong> Transform your vehicle with our skilled team providing expert car paint services.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Diagnostic Services:</strong> Benefit from accurate assessments with our advanced diagnostic services, ensuring precise identification of any issues. Count on us for a seamless auto service experience.
                                            </p>
                                        </div>
                                    </div>

                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-5">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/service-2.jpg') }}"
                                    style="object-fit: cover; height:100% !important;" alt="car maintenance near me" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">On-Demand Services</h3>
                                <p class="mb-4">Experience unmatched convenience by using our On-Demand Services. We can help you with
                                    routine maintenance, roadside assistance, and emergency repairs.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>24-Hour Tyre Repair Dubai:</strong> Count on us around the clock for swift and reliable tyre repairs.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Roadside Assistance Dubai:</strong> Our prompt roadside assistance ensures you're never stranded.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Scheduled Maintenance:</strong> Stay ahead with our scheduled maintenance services for a smooth and hassle-free driving experience.
                                            </p>
                                        </div>
                                    </div>

                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Booking Start -->
<div class="container-fluid bg-secondary booking my-5 wow rollIn text-center" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-12 py-5">
                <div class="py-5">
                    <h2 class="text-white mb-4">Certified and Award Winning Car Tyre Puncture Repair Mobile Service Provider</h2>
                    <p class="text-white mb-0">We are a team of dedicated technicians who are committed to providing excellent automotive
                        repair services. Our modern facilities and experienced experts provide the best quality care for
                        your car. In the automotive industry, we have received awards and acknowledgment for our
                        commitment to excellence. Put your trust in us for your car maintenance needs, and experience
                        the high standard of our services.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->





<!-- Testimonial Start -->
<div class="container-xxl py-5 wow slideInBounce" data-wow-delay="0.3s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimonial //</h6>
            <h2 class="mb-5">Our Clients Say!</h2>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="bg-primary rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;" loading="lazy">
                <h5 class="mb-0">Kumar Shyam</h5>
                <p>Dubai</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Had a very minor issue but a guy came down as soon as he could after Ramadan prayers and fixed it up in a jiffy while also being extremely courteous and polite. One of the knowledgeable mechanics that are hard to find. Best part he didn't create a fuss over a lost in translation misunderstanding moment. Highly recommended.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-primary rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;" loading="lazy">
                <h5 class="mb-0">Sajad Aslam</h5>
                <p>Abu Dhabi</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Excellent & Efficient Tyre Replacement Service by team Lenya OnlineTireShop, Super Fast Service, Reached within few minutes and replaced Tyres, Recommended for Tyres, Battery Replacement and roadside breakdown solutions.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-primary rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;" loading="lazy">
                <h5 class="mb-0">Efren Arroyo Jr.</h5>
                <p>Sharjah</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">I was thoroughly impressed with their professionalism and expertise. The staff was friendly and communicative, keeping me updated on the progress of my repairs throughout the process. The quality of the work was top-notch and I would highly recommend this auto repair service to anyone in need.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-primary rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;" loading="lazy">
                <h5 class="mb-0">Chahrazed Abdennour</h5>
                <p>Dubai</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">So happy with this company,  the service is very quick and professional, and especially Ahmed he is a true Hero and very professional! They even follow up and provide all the information needed.	</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Trusted by Section -->
<div class="container-fluid bg-secondary booking1 trusted-by my-5 wow slideInRight" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-5 text-center">
                <h2 class="text-white mb-4">Trusted by</h2>
                <!-- Initial Three Brand Images -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_michelin-1024x265.png" class="d-block mx-auto img-fluid" alt="Brand 1" loading="lazy">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_goodyear-1024x278.png" class="d-block mx-auto img-fluid" alt="Brand 2" loading="lazy">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_bridgestone_res.png" class="d-block mx-auto img-fluid" alt="Brand 3" loading="lazy">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_pirelli_res.png" class="d-block mx-auto img-fluid" alt="Brand 3" loading="lazy">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/bfgoodrich-logo-1024x164.png" class="d-block mx-auto img-fluid" alt="Brand 3" loading="lazy">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/continental-logo-1024x205.jpg" class="d-block mx-auto img-fluid" alt="Brand 3" loading="lazy">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/firestone-logo-1024x151.png" class="d-block mx-auto img-fluid" alt="Brand 3" loading="lazy">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/falken-logo-1024x181.png" class="d-block mx-auto img-fluid" alt="Brand 3" loading="lazy">
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>

<!-- Trusted By End -->



@endsection
