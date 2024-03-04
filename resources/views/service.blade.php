@extends('welcome')

@section('content')

@section('title', 'Unveil Tires Online Shop & Effortless Home Tire Service Dubai')
@section('meta_description', 'Unveil Tires Online Shop. From the home tire service in Dubai to the convenience of finding the best tire service near you, we redefine your driving experience.')



<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

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
        <div class="row g-4 wow zoomInUp" data-wow-delay="0.3s">
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
                                        style="object-fit: cover; height:125% !important;" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Tyre Services</h3>
                                <p class="mb-4">Our Tyre Services are designed to keep your vehicle running smoothly and safely. Whether you need new tyres, tire repairs, or tire maintenance, we've got you covered.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Quality Tyre Services</p>
                                <p><i class="fa fa-check text-success me-3"></i>Experienced Tyre Technicians</p>
                                <p><i class="fa fa-check text-success me-3"></i>State-of-the-Art Equipment</p>
                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/21a.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Vehicle Battery Services</h3>
                                <p class="mb-4">Ensure your vehicle starts reliably with our professional Vehicle Battery Services. We offer battery testing, replacement, and maintenance to keep you on the road.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Comprehensive Battery Testing</p>
                                <p><i class="fa fa-check text-success me-3"></i>Expert Battery Replacement</p>
                                <p><i class="fa fa-check text-success me-3"></i>Regular Battery Maintenance</p>
                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/service-3.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Mobile Car Services</h3>
                                <p class="mb-4">Experience the convenience of our Mobile Car Services. We bring our expertise to your location, offering a range of services including repairs, maintenance, and diagnostics.</p>
                                <p><i class="fa fa-check text-success me-3"></i>On-Site Car Repairs</p>
                                <p><i class="fa fa-check text-success me-3"></i>Mobile Diagnostics</p>
                                <p><i class="fa fa-check text-success me-3"></i>Convenient Maintenance Services</p>
                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/22a.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Auto Works Services</h3>
                                <p class="mb-4">Trust our expert technicians for all your auto works needs. From routine maintenance to complex repairs, we provide comprehensive services to keep your vehicle running smoothly.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Full-Service Auto Repairs</p>
                                <p><i class="fa fa-check text-success me-3"></i>Car Paint</p>
                                <p><i class="fa fa-check text-success me-3"></i>Diagnostic Services</p>
                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-5">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/service-2.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">On-Demand Services</h3>
                                <p class="mb-4">Experience convenience like never before with our On-Demand Services. Whether you need emergency repairs, roadside assistance, or scheduled maintenance, we've got you covered.</p>
                                <p><i class="fa fa-check text-success me-3"></i>24/7 Emergency Repairs</p>
                                <p><i class="fa fa-check text-success me-3"></i>Roadside Assistance</p>
                                <p><i class="fa fa-check text-success me-3"></i>Scheduled Maintenance</p>
                                <a href="https://api.whatsapp.com/send?phone=+971585914376&text=Hey%2C%20I%20need%20car%20assistance.%20Are%20you%20available%3F" target="_blank" onclick="gtag('event', 'whatsapp_button_click', { 'event_category': 'WhatsApp', 'event_label': 'Car Assistance' });" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimonial //</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
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




@endsection
