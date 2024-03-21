@extends('welcome')

@section('content')

@section('title', ' Introducing Tires Online Shop & Easy Home Tyre Service Dubai')
@section('meta_description', 'Unveil Tires Online Shop. From the home tire service in Dubai to the convenience of finding the best tire service near you, we redefine your driving experience.')



<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tyre Service Dubai</h1>
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
                <h2>Explore Our Services</h2>
                <i class="fas fa-car text-primary fa-2x ms-3 icon-shake"></i>
            </div>
        </div>
        <div class="row g-4 wow zoomInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="fa fa-car-side fa-2x me-3"></i>
                        <h4 class="m-0">New Tires</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="fa fa-car-battery fa-2x me-3"></i>
                        <h4 class="m-0">Mobile Battery Replacement</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-car fa-2x me-3"></i>
                        <h4 class="m-0">Tyre Repair</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <i class="fa fa-oil-can fa-2x me-3"></i>
                        <h4 class="m-0">Automotive Solutions</h4>
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
                                <h3 class="mb-3">Home New Tire Service Dubai</h3>
                                <p class="mb-4">Experience seamless automotive care with our tailored New Tire Services, ensuring your vehicle runs
                                    smoothly and safely at all times. Whether you require brand-new tires, emergency replacements for a
                                    tire burst, or routine maintenance, rely on us for precision and professionalism.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Premium Tire Solutions:</strong> Step into a realm of premium quality and precision with our New Tire Services.
                                                We offer a diverse range of top-tier tire brands, including Michelin, BF Goodrich, Continental, Goodyear,
                                                Bridgestone, Firestone, Pirelli, Falken, and more. From high-performance tires to all-season options, we
                                                cater to every make and model of car.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Expert Tire Technicians:</strong> Entrust your vehicle to our team of highly experienced and skilled Tire
                                                Technicians. With their wealth of knowledge and expertise, they ensure that every service meets the
                                                highest standards of professionalism and care. Whether you require urgent assistance or routine
                                                maintenance, we've got you covered.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Emergency New Tire Service:</strong> Facing a tire burst or unexpected tire issues? We've got you covered with
                                                our emergency new tire service. Our technicians are equipped to handle any situation, providing quick
                                                and efficient replacements to get you back on the road safely
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
                                <h3 class="mb-3">Mobile Battery Replacement Service Dubai</h3>
                                <p class="mb-4">Guarantee the reliable start of your vehicle with our dedicated Vehicle Battery Services,
                                    meticulously crafted to keep you confidently on the road. Our comprehensive suite of services
                                    goes beyond mere functionality, aiming to elevate your overall driving experience.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Advanced Battery Testing:</strong> Experience peace of mind with our thorough and advanced battery testing services. Our skilled
                                                technicians delve deep to evaluate the health of your battery, providing accurate insights that
                                                guide our subsequent services. It's not just about ensuring your battery works; it's about
                                                understanding its condition for lasting reliability.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Precision Battery Replacement:</strong> In the event of a battery replacement, trust our experts to deliver precision and efficiency. Our
                                                commitment extends beyond the mere swapping of batteries; it involves a thoughtful selection
                                                process, ensuring the replacement aligns with your vehicle's specific requirements. It's not just a
                                                replacement; it's an upgrade for sustained performance.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Proactive Battery Maintenance:</strong> Maintain the durability of your battery with our proactive maintenance services. Our meticulous
                                                approach involves proactive measures, addressing potential issues before they escalate. It's not
                                                just about extending the lifespan of your battery; it's about ensuring a continuous and hassle-free
                                                driving experience.
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
                                <h3 class="mb-3">Mobile Tyre Service For Cars</h3>
                                <p class="mb-4">Experience unparalleled convenience with our mobile car services, where our expertise comes to
                                    you. We offer a comprehensive range of services, including repairs, maintenance, and diagnostics,
                                    tailored to meet your automotive needs at your location.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>On-Site Car Repairs:</strong> Encounter hassle-free solutions with our on-site car repairs. Whether it's a flat tyre repair, engine
                                                issue, or any other concern, our skilled technicians are equipped to address them on the spot. We
                                                bring expertise to your doorstep, minimizing disruptions to your schedule
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Mobile Diagnostics:</strong> Benefit from our mobile diagnostics services, ensuring accurate assessments of your vehicle's
                                                health without the need for a trip to the garage. Our advanced diagnostic tools provide real-time
                                                insights, enabling swift and informed decisions regarding your vehicle's performance
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Convenient Car Maintenance Services:</strong> Explore the ease of convenient maintenance Services near you, where our team handles routine
                                                tasks without you having to leave your location. From oil changes to brake checks, we bring our
                                                expertise to you, saving you time and ensuring your vehicle is always in optimal condition.
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
                                <h3 class="mb-3">Comprehensive Car Paint and Automotive Solutions</h3>
                                <p class="mb-4">Trust our skilled technicians to cater to all your automotive needs, offering a diverse range of services
                                    focused on enhancing your vehicle's performance and appearance</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Complete Auto Repairs:</strong> Experience excellence with our Full-Service Auto Repairs. Our adept technicians
                                                handle everything from routine maintenance to intricate repairs, ensuring your vehicle operates
                                                seamlessly on the road.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Expert Car Paint Services:</strong> Enhance your vehicle's visual appeal with our precision Car Paint services. Our
                                                technicians prioritize attention to detail, delivering flawless paintwork to revitalize your car's
                                                appearance. Whether you're addressing imperfections or seeking a fresh new look, rely on us for top-quality paint services.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>State-of-the-Art Diagnostics:</strong> Navigate automotive challenges effortlessly with our Advanced Diagnostic
                                                Solutions. Equipped with cutting-edge diagnostic tools, our skilled technicians swiftly identify and
                                                resolve issues, ensuring optimal performance for your vehicle.
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
                                <h3 class="mb-3">Convenient On-Demand Solutions</h3>
                                <p class="mb-4">Our platform awaits you with our On-Demand Services, where ease meets efficiency. Whether you're in
                                    need of emergency repairs, roadside assistance, or scheduled maintenance, we've got you covered.</p>
                                    <div class="service-list">
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>24/7 Emergency New Tire Replacement:</strong>Trust us for swift and reliable emergency tire replacements,
                                                available round-the-clock. Our dedicated team ensures you're back on the road safely, no matter the
                                                hour.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Roadside Assistance for Flat Tyre Repair:</strong>  Experience prompt assistance with our Roadside Assistance
                                                services, specializing in swift flat tire repairs. Wherever you are, our team is equipped to handle
                                                unexpected tire issues, providing peace of mind on your journey.
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Comprehensive Automotive Solutions:</strong> : Stay ahead with our comprehensive automotive solutions,
                                                including expert car paint services. Our skilled technicians prioritize attention to detail, ensuring your
                                                vehicle looks its best. Whether it's routine checks or proactive measures, we keep you on the road with
                                                confidence
                                            </p>
                                        </div>
                                        <div class="service-item">
                                            <p>
                                                <i class="fa fa-check text-success"></i>
                                                <strong>Battery Replacement Services:</strong> In need of a battery replacement? Count on our mobile-based services in
                                                Dubai to deliver prompt solutions. Simply give us a call, and we'll have you covered in no time, offering
                                                affordable prices for each service.
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
