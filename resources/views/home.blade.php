@extends('welcome')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('public/tyre/img/29a.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Your
                                    ALL-IN-ONE,
                                    ON-DEMAND,
                                    MOBILE auto repair
                                    solution provider.</h1>
                                <a href="tel:+15551234567" class="btn btn-primary py-3 px-5 animated slideInDown">Call Us Now<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="w-100" src="{{ asset('public/tyre/img/19a.png') }}" alt="Image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('public/tyre/img/28a.jpg') }}" alt="Image">

                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Repair Service Center</h1>
                                <a href="tel:+15551234567" class="btn btn-primary py-3 px-5 animated slideInDown">Call Us Now<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <img class="w-100" src="{{ asset('public/tyre/img/26a.png') }}" alt="Image">

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
                        <a class="text-primary border-bottom" href="whatsapp://send?phone=+971585914376">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Dedicated Team</h5>
                        <p>Our team consists of skilled and experienced workers dedicated to providing expert solutions for your vehicle needs. Count on us for professionalism and expertise.</p>
                        <a class="text-primary border-bottom" href="whatsapp://send?phone=+971585914376">WhatsApp Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow rollIn" data-wow-delay="0.5s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Modern Equipment</h5>
                        <p>We use modern equipment to ensure precision and efficiency in our services. Experience the benefits of advanced technology for your vehicle maintenance.</p>
                        <a class="text-primary border-bottom" href="whatsapp://send?phone=+971585914376">WhatsApp Us</a>
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
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/23a.jpg') }}" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                        <h4 class="text-white">of Service</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h1 class="mb-4"><span class="text-primary">Car Hero</span> Is The Best Place For Your Auto Care</h1>
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
                <a href="whatsapp://send?phone=+971585914376" class="btn btn-primary py-3 px-5">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-check fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                <p class="text-white mb-0">Years of Service</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                <p class="text-white mb-0">Expert Technicians</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-users fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up">1200</h2>
                <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
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
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
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
                                        style="object-fit: cover; height:125% !important;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Tyre Services</h3>
                                <p class="mb-4">Our Tyre Services are designed to keep your vehicle running smoothly and safely. Whether you need new tyres, tire repairs, or tire maintenance, we've got you covered.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Quality Tyre Services</p>
                                <p><i class="fa fa-check text-success me-3"></i>Experienced Tyre Technicians</p>
                                <p><i class="fa fa-check text-success me-3"></i>State-of-the-Art Equipment</p>
                                <a href="whatsapp://send?phone=+971585914376" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/21a.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Vehicle Battery Services</h3>
                                <p class="mb-4">Ensure your vehicle starts reliably with our professional Vehicle Battery Services. We offer battery testing, replacement, and maintenance to keep you on the road.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Comprehensive Battery Testing</p>
                                <p><i class="fa fa-check text-success me-3"></i>Expert Battery Replacement</p>
                                <p><i class="fa fa-check text-success me-3"></i>Regular Battery Maintenance</p>
                                <a href="whatsapp://send?phone=+971585914376" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/service-3.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Mobile Car Services</h3>
                                <p class="mb-4">Experience the convenience of our Mobile Car Services. We bring our expertise to your location, offering a range of services including repairs, maintenance, and diagnostics.</p>
                                <p><i class="fa fa-check text-success me-3"></i>On-Site Car Repairs</p>
                                <p><i class="fa fa-check text-success me-3"></i>Mobile Diagnostics</p>
                                <p><i class="fa fa-check text-success me-3"></i>Convenient Maintenance Services</p>
                                <a href="whatsapp://send?phone=+971585914376" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/22a.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Auto Works Services</h3>
                                <p class="mb-4">Trust our expert technicians for all your auto works needs. From routine maintenance to complex repairs, we provide comprehensive services to keep your vehicle running smoothly.</p>
                                <p><i class="fa fa-check text-success me-3"></i>Full-Service Auto Repairs</p>
                                <p><i class="fa fa-check text-success me-3"></i>Car Paint</p>
                                <p><i class="fa fa-check text-success me-3"></i>Diagnostic Services</p>
                                <a href="whatsapp://send?phone=+971585914376" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-5">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('public/tyre/img/service-2.jpg') }}"
                                    style="object-fit: cover; height:125% !important;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">On-Demand Services</h3>
                                <p class="mb-4">Experience convenience like never before with our On-Demand Services. Whether you need emergency repairs, roadside assistance, or scheduled maintenance, we've got you covered.</p>
                                <p><i class="fa fa-check text-success me-3"></i>24/7 Emergency Repairs</p>
                                <p><i class="fa fa-check text-success me-3"></i>Roadside Assistance</p>
                                <p><i class="fa fa-check text-success me-3"></i>Scheduled Maintenance</p>
                                <a href="whatsapp://send?phone=+971585914376" class="btn btn-primary py-3 px-5 mt-3">WhatsApp Us<i class="fa fa-arrow-right ms-3"></i></a>
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
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp text-center" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-12 py-5">
                <div class="py-5">
                    <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                    <p class="text-white mb-0">We are a team of dedicated professionals committed to providing top-notch car repair services. With our certified technicians and state-of-the-art facilities, we ensure the highest quality service for your vehicle. Our commitment to excellence has earned us recognition and awards in the automotive industry. Trust us with your car repair needs, and experience the difference in our service.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->





<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimonial //</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Kumar Shyam</h5>
                <p>Dubai</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Had a very minor issue but a guy came down as soon as he could after Ramadan prayers and fixed it up in a jiffy while also being extremely courteous and polite. One of the knowledgeable mechanics that are hard to find. Best part he didn't create a fuss over a lost in translation misunderstanding moment. Highly recommended.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Sajad Aslam</h5>
                <p>Abu Dhabi</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Excellent & Efficient Tyre Replacement Service by team Lenya Car Hero, Super Fast Service, Reached within few minutes and replaced Tyres, Recommended for Tyres, Battery Replacement and roadside breakdown solutions.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Efren Arroyo Jr.</h5>
                <p>Sharjah</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">I was thoroughly impressed with their professionalism and expertise. The staff was friendly and communicative, keeping me updated on the progress of my repairs throughout the process. The quality of the work was top-notch and I would highly recommend this auto repair service to anyone in need.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/tyre/img/30a.jpg') }}" style="width: 80px; height: 80px;">
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
<div class="container-fluid bg-secondary booking1 trusted-by my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-5 text-center">
                <h1 class="text-white mb-4">Trusted by</h1>
                <!-- Initial Three Brand Images -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_michelin-1024x265.png" class="d-block mx-auto img-fluid" alt="Brand 1">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_goodyear-1024x278.png" class="d-block mx-auto img-fluid" alt="Brand 2">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_bridgestone_res.png" class="d-block mx-auto img-fluid" alt="Brand 3">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/04/brands_pirelli_res.png" class="d-block mx-auto img-fluid" alt="Brand 3">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/bfgoodrich-logo-1024x164.png" class="d-block mx-auto img-fluid" alt="Brand 3">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/continental-logo-1024x205.jpg" class="d-block mx-auto img-fluid" alt="Brand 3">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/firestone-logo-1024x151.png" class="d-block mx-auto img-fluid" alt="Brand 3">
                    </div>
                    <div class="col-md-3 mb-3">
                        <img src="https://carhero.ae/wp-content/uploads/2023/05/falken-logo-1024x181.png" class="d-block mx-auto img-fluid" alt="Brand 3">
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>

<!-- Trusted By End -->



@endsection
