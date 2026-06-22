@extends('layouts.app')

@section('title', 'Vishwakarma Engineering - Premier Industrial Equipment Manufacturer')
@section('meta_description', 'Vishwakarma Engineering is a leading manufacturer of high-precision industrial vessels, chemical reactors, storage tanks, and ETP plants in Ahmedabad, India. ISO 9001:2015 certified.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')

@section('content')
<!-- Hero Slider Section -->
<section class="p-0 position-relative">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slide 1: Industrial Vessels -->
            <div class="carousel-item active hero-slide-1" style="height: 80vh; background-color: var(--primary-blue);">
                <div class="hero-image-overlay" style="background-image: url('{{ asset('assets/images/slide-1.png') }}');"></div>
                <div class="carousel-caption d-flex align-items-center h-100 text-start">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hero-badge mb-3 animated fadeInDown">
                                    <span class="badge rounded-pill bg-accent-industrial py-2 px-3 text-uppercase fw-bold">Precision Engineering</span>
                                </div>
                                <h1 class="display-3 fw-bold mb-4 animated fadeInUp outfit text-white hero-title"><span class="text-accent-industrial">Precision</span> Engineering <br>for Industrial Excellence</h1>
                                <p class="mb-4 animated fadeInUp delay-1s fs-5" style="color: rgba(255,255,255,0.9); max-width: 650px;">Manufacturing high-quality Pressure Vessels, Chemical Reactors, Storage Tanks, and Process Equipment with uncompromising quality, precision, and reliability since 2007.</p>
                                <div class="animated fadeInUp delay-2s d-flex align-items-center gap-3 mt-4">
                                    <a href="{{ url('/products') }}" class="btn btn-primary-premium px-4 py-2 small fw-bold">explore products</a>
                                    <a href="{{ url('/contact') }}" class="btn btn-outline-premium px-4 py-2 small fw-bold">request quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2: Chemical Reactors -->
            <div class="carousel-item" style="height: 80vh; background-color: var(--primary-blue);">
                <div class="hero-image-overlay" style="background-image: url('{{ asset('assets/images/slide-2.png') }}'); background-size: cover; background-position: right center;"></div>
                <div class="carousel-caption d-flex align-items-center h-100 text-start">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hero-badge mb-3 animated fadeInDown">
                                    <span class="badge rounded-pill bg-primary-custom py-2 px-3 text-uppercase fw-bold">TRUSTED INDUSTRIAL PARTNER</span>
                                </div>
                                <h1 class="display-3 fw-bold mb-4 animated fadeInUp outfit text-white hero-title">Advanced <span class="text-accent-industrial">Process</span> <br>Equipment Solutions</h1>
                                <p class="mb-4 animated fadeInUp delay-1s fs-5" style="color: rgba(255,255,255,0.9); max-width: 700px;">Delivering world-class MS & SS process equipment for Petrochemical, Chemical, Pigment, Agro-Chemical, and Industrial applications with engineering excellence and proven performance.</p>
                                <div class="animated fadeInUp delay-2s d-flex align-items-center gap-3 mt-4">
                                    <a href="{{ url('/about') }}" class="btn btn-primary-premium px-4 py-2 small fw-bold">why choose us</a>
                                    <a href="{{ url('/gallery') }}" class="btn btn-outline-premium px-4 py-2 small fw-bold">our gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon-custom" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon-custom" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Company Profile / About Section -->
<section class="bg-white py-5" style="overflow: hidden;">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Full-Bleed Image with PIP Overlay -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative rounded-4 overflow-hidden shadow-lg" style="height: 460px;">

                    <!-- Single Full Image -->
                    <img src="{{ asset('assets/images/about_us.jpg') }}" class="w-100 h-100" style="object-fit: cover;" alt="About Vishwakarma Engineering">

                    <!-- Left blue accent strip -->
                    <div class="position-absolute top-0 start-0 h-100" style="width: 5px; background: linear-gradient(to bottom, #00a0e9, #006cb7); z-index: 2;"></div>

                </div>
            </div>
            
            <!-- Right Side: Text & Details -->
            <div class="col-lg-6 ps-lg-5">
                <div class="section-header-badge">Engineering Excellence</div>
                <h2 class="display-5 fw-bold outfit text-dark mb-4">Industrial Solutions with <span style="color: var(--industrial-blue);">Precision</span></h2>
                
                <div class="about-text-content mb-4">
                    <p class="fs-6 text-muted mb-3" style="line-height: 1.7;">Vishwakarma Engineering manufactures Pressure Vessels, Chemical Reactors, Storage Tanks, Columns, Heat Exchangers, and Customized Process Equipment engineered for demanding industrial operations.</p>
                    <p class="fs-6 text-muted mb-0" style="line-height: 1.7;">Backed by advanced fabrication technology, precision welding, and strict quality standards, we deliver reliable equipment designed for safety, durability, and long-term performance.</p>
                </div>
                
                <div class="mt-4 pt-2">
                    <a href="{{ url('/about') }}" class="btn btn-industrial-primary d-inline-flex align-items-center gap-2">
                        Read More About Us <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-primary-custom text-white py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                <h2 class="text-white fw-bold mb-0 display-4">18+</h2>
                <p class="text-white-50 small fw-bold m-0 border-top mt-2 pt-2 pb-2 border-white border-opacity-25" style="white-space: nowrap; text-transform: capitalize;">Years of Trust</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                <h2 class="text-white fw-bold mb-0 display-4">500+</h2>
                <p class="text-white-50 small fw-bold m-0 border-top mt-2 pt-2 pb-2 border-white border-opacity-25" style="white-space: nowrap; text-transform: capitalize;">Projects Delivered</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0 d-flex flex-column align-items-center">
                <h2 class="text-white fw-bold mb-0 display-4">100+</h2>
                <p class="text-white-50 small fw-bold m-0 border-top mt-2 pt-2 pb-2 border-white border-opacity-25" style="white-space: nowrap; text-transform: capitalize;">Industrial Clients</p>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center">
                <h2 class="text-white fw-bold mb-0 display-4">100%</h2>
                <p class="text-white-50 small fw-bold m-0 border-top mt-2 pt-2 pb-2 border-white border-opacity-25" style="white-space: nowrap; text-transform: capitalize;">Quality Commitment</p>
            </div>
        </div>
    </div>
</section>

<!-- Manufacturing Process Section -->
<section class="bg-light-industrial py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <div class="section-header-badge">How We Work</div>
            <h2 class="display-6 fw-bold outfit">Our Manufacturing Process</h2>
            <p class="text-muted mx-auto mt-3" style="max-width: 750px;">From engineering design to final delivery, every stage is focused on quality, precision, and customer satisfaction.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100 bg-white rounded-4 shadow-sm position-relative">
                    <div class="process-number">01</div>
                    <div class="mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle bg-primary-custom" style="width:70px;height:70px;">
                        <i class="fas fa-drafting-compass fa-2x text-white"></i>
                    </div>
                    <h5 class="outfit fw-bold mt-3">Design & Engineering</h5>
                    <p class="small text-muted mb-0">We prepare detailed engineering drawings and specifications based on project requirements and industry standards.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100 bg-white rounded-4 shadow-sm position-relative">
                    <div class="process-number">02</div>
                    <div class="mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle bg-secondary-custom" style="width:70px;height:70px;">
                        <i class="fas fa-tools fa-2x text-white"></i>
                    </div>
                    <h5 class="outfit fw-bold mt-3">Manufacturing & Fabrication</h5>
                    <p class="small text-muted mb-0">Equipment is fabricated using advanced machinery, certified welding procedures, and skilled workmanship.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100 bg-white rounded-4 shadow-sm position-relative">
                    <div class="process-number">03</div>
                    <div class="mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle bg-primary-custom" style="width:70px;height:70px;">
                        <i class="fas fa-microscope fa-2x text-white"></i>
                    </div>
                    <h5 class="outfit fw-bold mt-3">Inspection & Testing</h5>
                    <p class="small text-muted mb-0">Every product undergoes hydro testing, NDT inspection, and quality checks to ensure reliability and safety.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100 bg-white rounded-4 shadow-sm position-relative">
                    <div class="process-number">04</div>
                    <div class="mb-3 mx-auto d-flex align-items-center justify-content-center rounded-circle bg-secondary-custom" style="width:70px;height:70px;">
                        <i class="fas fa-truck fa-2x text-white"></i>
                    </div>
                    <h5 class="outfit fw-bold mt-3">Dispatch & Delivery</h5>
                    <p class="small text-muted mb-0">Finished equipment is securely packed and delivered with complete documentation and quality records.</p>
                </div>
            </div>
        </div>
    </div>
</section>
                
<!-- Technical Advantage Section (NEW) -->
<section class="py-5 bg-white overflow-hidden">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="section-header-badge">Technical Excellence</div>
                <h2 class="display-5 fw-bold outfit mb-4">Engineering Excellence, <span class="text-accent-industrial">Built for Reliability</span></h2>
                <p class="text-muted mb-4 fs-6" style="line-height: 1.7;">At Vishwakarma Engineering, we manufacture high-quality pressure vessels, reactors, storage tanks, and process equipment designed for long-term industrial performance. Every project is executed with precision engineering, strict quality control, and industry-standard fabrication practices.</p>
                
                <div class="row g-4">
                    <div class="col-sm-6">  
                        <div class="feature-item-modern p-4 rounded-4 shadow-sm h-100" style="background: #f8fbff; --hover-border-color: var(--secondary-blue);">
                            <i class="fas fa-microchip text-secondary-blue fs-2 mb-3"></i>
                            <h5 class="outfit fw-bold">Advanced SAW Welding</h5>
                            <p class="small text-muted mb-0">High-strength welding for durable and reliable equipment.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-item-modern p-4 rounded-4 shadow-sm h-100" style="background: #f8fbff; --hover-border-color: var(--primary-blue);">
                            <i class="fas fa-shield-alt text-primary-custom fs-2 mb-3"></i>
                            <h5 class="outfit fw-bold">100% Quality Inspection</h5>
                            <p class="small text-muted mb-0">Comprehensive testing ensures quality and performance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <div class="tech-image-container ps-lg-5">
                    <img src="{{ asset('assets/images/technical excellence.jpg') }}" alt="Technical Precision" class="img-fluid rounded-5 shadow-lg w-100" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Grid Grouping -->
<section class="bg-white py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <div class="section-header-badge">Our Expertise</div>
            <h2 class="display-5 fw-bold outfit text-primary-custom">Complete Industrial Equipment Portfolio</h2>
            <p class="text-muted mx-auto mt-3" style="max-width: 650px; font-size: 1.05rem; line-height: 1.7;">We manufacture pressure vessels, chemical reactors, storage tanks, and process equipment engineered for reliability, safety, and long-term performance.</p>
        </div>
        <div class="row g-4 mt-4">
            <!-- Vessel Card -->
            <div class="col-lg-4 col-md-6">
                <div class="product-category-card-premium">
                    <div class="img-wrapper-premium">
                        <img src="{{ asset('assets/images/vessal.jpg') }}" alt="Pressure Vessels">
                        <div class="img-overlay-industrial"></div>
                    </div>
                    <div class="content p-4">
                        <h4 class="outfit text-primary-custom mb-3">Pressure Vessels</h4>
                        <p class="text-muted small mb-4">Custom-engineered MS & SS pressure vessels built for safe and efficient industrial operations.</p>
                        <a href="{{ url('/products/category/industrial-vessels') }}" class="btn btn-industrial-link px-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <!-- Reactor Card -->
            <div class="col-lg-4 col-md-6">
                <div class="product-category-card-premium">
                    <div class="img-wrapper-premium">
                        <img src="{{ asset('assets/images/reacter.jpg') }}" alt="Chemical Reactors">
                        <div class="img-overlay-industrial"></div>
                    </div>
                    <div class="content p-4">
                        <h4 class="outfit text-primary-custom mb-3">Chemical Reactors</h4>
                        <p class="text-muted small mb-4">Precision-fabricated reactors designed for chemical and process industries.</p>
                        <a href="{{ url('/products/category/reactors') }}" class="btn btn-industrial-link px-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <!-- ETP Card -->
            <div class="col-lg-4 col-md-6">
                <div class="product-category-card-premium">
                    <div class="img-wrapper-premium">
                        <img src="{{ asset('assets/images/etp.jpg') }}"alt="ETP Plants">
                        <div class="img-overlay-industrial"></div>
                    </div>
                    <div class="content p-4">
                        <h4 class="outfit text-primary-custom mb-3">ETP Plants</h4>
                        <p class="text-muted small mb-4">Complete wastewater treatment solutions for industrial applications.</p>
                        <a href="{{ url('/products/category/etp-effluent-treatment') }}" class="btn btn-industrial-link px-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why Choose Us / WOW Premium Layout -->
<section class="bg-light-industrial py-5 position-relative">
    <div class="container py-4">
        <div class="row mb-5 text-center">
            <div class="col-lg-8 mx-auto">
                <div class="section-header-badge">Why Choose Us</div>
                <h2 class="display-6 fw-bold outfit mb-3">Why Partner With Vishwakarma Engineering?</h2>
                <p class="text-muted mx-auto" style="max-width: 700px; font-size: 1.1rem;">We combine engineering expertise, precision manufacturing, and strict quality standards to deliver reliable industrial equipment built for long-term performance.</p>
            </div>
        </div>

        <div class="row g-4 align-items-center">
            <!-- Left Side Core Features -->
            <div class="col-lg-4">
                <div class="d-flex mb-5 transition-hover">
                    <div class="flex-shrink-0">
                        <div class="d-flex align-items-center justify-content-center bg-white shadow-sm rounded-circle" style="width: 80px; height: 80px; border: 2px solid var(--secondary-blue);">
                            <i class="fas fa-certificate fa-2x text-secondary-blue"></i>
                        </div>
                    </div>
                    <div class="ms-4 pt-2">
                        <h4 class="outfit fw-bold text-dark">Certified Quality</h4>
                        <p class="text-muted small">Every product undergoes rigorous quality inspections, hydro testing, and NDT checks to ensure safety and reliability.</p>
                    </div>
                </div>
                
                <div class="d-flex transition-hover">
                    <div class="flex-shrink-0">
                        <div class="d-flex align-items-center justify-content-center bg-white shadow-sm rounded-circle" style="width: 80px; height: 80px; border: 2px solid var(--secondary-blue);">
                            <i class="fas fa-cogs fa-2x text-secondary-blue"></i>
                        </div>
                    </div>
                    <div class="ms-4 pt-2">
                        <h4 class="outfit fw-bold text-dark">Custom Engineering</h4>
                        <p class="text-muted small">Equipment is designed and manufactured to meet your exact process requirements, dimensions, and operating conditions.</p>
                    </div>
                </div>
            </div>

            <!-- Center Focal Point -->
            <div class="col-lg-4 text-center px-4 d-none d-lg-block">
                <div class="position-relative">
                    <div class="position-absolute top-50 start-50 translate-middle bg-light rounded-circle" style="width: 350px; height: 350px; z-index: 1;"></div>
                    <img src="{{ asset('assets/images/choose.png') }}" alt="Why Partner With Us" class="img-fluid rounded-4 shadow-lg" style="position: relative; z-index: 2; border: 8px solid white;">
                </div>
            </div>

            <!-- Right Side Core Features -->
            <div class="col-lg-4">
                <div class="d-flex mb-5 transition-hover">
                    <div class="ms-4 pt-2 text-lg-end order-2 order-lg-1">
                        <h4 class="outfit fw-bold text-dark">On-Time Delivery</h4>
                        <p class="text-muted small">Efficient project planning and manufacturing processes help ensure timely delivery of every order.</p>
                    </div>
                    <div class="flex-shrink-0 ms-lg-4 me-4 me-lg-0 order-1 order-lg-2">
                        <div class="d-flex align-items-center justify-content-center bg-white shadow-sm rounded-circle" style="width: 80px; height: 80px; border: 2px solid var(--secondary-blue);">
                            <i class="fas fa-shipping-fast fa-2x text-secondary-blue"></i>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex transition-hover">
                    <div class="ms-4 pt-2 text-lg-end order-2 order-lg-1">
                        <h4 class="outfit fw-bold text-dark">Technical Support</h4>
                        <p class="text-muted small">Our team provides expert guidance, project consultation, and responsive after-sales support whenever needed.</p>
                    </div>
                    <div class="flex-shrink-0 ms-lg-4 me-4 me-lg-0 order-1 order-lg-2">
                        <div class="d-flex align-items-center justify-content-center bg-white shadow-sm rounded-circle" style="width: 80px; height: 80px; border: 2px solid var(--secondary-blue);">
                            <i class="fas fa-headset fa-2x text-secondary-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="py-5 bg-light-industrial">
    <div class="container py-4">
        <div class="text-center mb-5">
            <div class="section-header-badge">Industry Insights</div>
            <h2 class="display-5 fw-bold outfit text-primary-custom">Engineering Knowledge & Industry Updates</h2>
            <p class="text-muted mx-auto mt-3" style="max-width: 700px;">Explore expert insights on pressure vessels, chemical reactors, storage tanks, ETP systems, industrial fabrication, welding technology, and process equipment manufacturing.</p>
        </div>

        <div class="row g-4">
            <!-- Blog Post 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0 transition-hover">
                    <div class="blog-img-wrapper">
                        <img src="{{ asset('assets/images/blog_1.png') }}" class="img-fluid" alt="Pressure Vessel Fabrication">
                        <div class="blog-date">
                            <span class="day">15</span>
                            <span class="month">MAY</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-2">
                            <span class="badge bg-light-industrial text-secondary-blue px-3 py-2 rounded-pill small">Engineering</span>
                        </div>
                        <h4 class="outfit h5 fw-bold mb-3">Pressure Vessel Design & Fabrication Best Practices</h4>
                        <p class="text-muted small mb-4">Learn how precision engineering, advanced welding, and rigorous quality testing ensure safe and reliable pressure vessels for industrial applications.</p>
                        <a href="{{ url('/blogs/precision-of-pressure-vessel-fabrication') }}" class="btn-industrial-link px-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0 transition-hover">
                    <div class="blog-img-wrapper">
                        <img src="{{ asset('assets/images/blog_2.jpg') }}" class="img-fluid" alt="Chemical Reactor Optimization">
                        <div class="blog-date">
                            <span class="day">10</span>
                            <span class="month">MAY</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-2">
                            <span class="badge bg-light-industrial text-secondary-blue px-3 py-2 rounded-pill small">Manufacturing</span>
                        </div>
                        <h4 class="outfit h5 fw-bold mb-3">Optimizing Chemical Reactor Performance</h4>
                        <p class="text-muted small mb-4">Discover how reactor design, mixing efficiency, and precision fabrication improve productivity, safety, and process reliability in industrial operations.</p>
                        <a href="{{ url('/blogs/optimizing-chemical-reactor-performance') }}" class="btn-industrial-link px-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0 transition-hover">
                    <div class="blog-img-wrapper">
                        <img src="{{ asset('assets/images/blog_3.jpg') }}" class="img-fluid" alt="Industrial Fabrication Quality">
                        <div class="blog-date">
                            <span class="day">05</span>
                            <span class="month">MAY</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-2">
                            <span class="badge bg-light-industrial text-secondary-blue px-3 py-2 rounded-pill small">Engineering Standards</span>
                        </div>
                        <h4 class="outfit h5 fw-bold mb-3">Industrial Fabrication & Quality Standards</h4>
                        <p class="text-muted small mb-4">Learn how precision fabrication, advanced welding, and quality inspections ensure reliable industrial equipment performance.</p>
                        <a href="{{ url('/blogs/industrial-fabrication-quality-standards') }}" class="btn-industrial-link px-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ url('/blogs') }}" class="btn btn-industrial-outline px-5 py-3">View All Articles</a>
        </div>
    </div>
</section>

<!-- Call To Action / Floating Banner Style -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="position-relative rounded-4 overflow-hidden shadow-lg p-5 text-center text-white" style="background: linear-gradient(135deg, rgba(27, 49, 104, 0.98) 0%, rgba(0, 108, 183, 0.95) 100%);">
            <!-- Subtle background image blended into the gradient -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('{{ asset('assets/images/unsplash-photo-1504917595217-d4dc5ebe6122.jpg') }}') center/cover; opacity: 0.15; mix-blend-mode: overlay; z-index: 1;"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-6 fw-bold mb-3 outfit">Need Reliable Industrial Equipment Solutions?</h2>
                <p class="lead mb-5">Partner with Vishwakarma Engineering for Pressure Vessels, Chemical Reactors, Storage Tanks, ETP Systems, and custom process equipment engineered for reliability, safety, and long-term performance.</p>
                <a href="{{ url('/contact') }}" class="btn btn-light py-2 shadow text-primary-custom fw-bold" style="transition: all 0.3s; border-radius: 50px; font-size: 1.1rem; padding-left: 2rem; padding-right: 2rem;">Request a Quote <i class="fas fa-arrow-right ms-2 pulse-icon"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    :root {
        --logo-blue: #006cb7;
        --industrial-navy: #1b3168;
        --industrial-blue: #006cb7;
    }

    .bg-accent-industrial { background-color: var(--logo-blue); color: #fff; }
    .text-accent-industrial { color: var(--logo-blue); }

    /* Hero Premium Styling */
    .hero-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .hero-slide-1 .hero-image-overlay {
        background-position: right center;
    }
    .hero-image-overlay::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.3) 100%);
    }

    .hero-title {
        text-shadow: 0 4px 25px rgba(0,0,0,0.8);
        line-height: 1.1;
        letter-spacing: -0.5px;
    }

    .btn-industrial-link:hover {
        color: var(--accent-blue-bright);
    }

    .btn-primary-premium {
        background: var(--industrial-blue);
        color: #fff;
        border: 2px solid transparent;
        font-weight: 700;
        border-radius: 4px;
        transition: all 0.3s;
        text-transform: capitalize;
        letter-spacing: 1px;
        padding: 8px 20px;
        font-size: 0.85rem;
    }
    .btn-primary-premium:hover {
        background: var(--industrial-navy);
        color: #fff;
    }

    .btn-outline-premium {
        border: 2px solid #fff;
        color: #fff;
        font-weight: 700;
        border-radius: 4px;
        transition: all 0.3s;
        text-transform: capitalize;
        letter-spacing: 1px;
        background: transparent;
        padding: 8px 20px;
        font-size: 0.85rem;
    }
    .btn-outline-premium:hover {
        background: #fff;
        color: var(--primary-blue);
    }

    .btn-industrial-unique {
        background: transparent;
        color: var(--industrial-navy);
        border: 2px solid var(--industrial-navy);
        border-radius: 50px;
        transition: all 0.4s ease;
        text-transform: capitalize;
        letter-spacing: 0.5px;
    }
    .btn-industrial-unique:hover {
        background: var(--industrial-navy);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(27, 49, 104, 0.2);
olor: var(--logo-blue);
    }



    .carousel-control-prev-icon-custom,
    .carousel-control-next-icon-custom {
        background: rgba(255, 255, 255, 0.1);
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        font-size: 1.2rem;
        transition: 0.3s;
    }
    .carousel-control-prev-icon-custom:hover,
    .carousel-control-next-icon-custom:hover {
        background: var(--industrial-blue);
    }

    /* Product Premium Cards */
    .product-category-card-premium {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        border: 1px solid #f1f5f9;
        height: 100%;
    }
    .product-category-card-premium:hover {
        transform: translateY(-5px);
    }

    .img-wrapper-premium {
        height: 250px;
        position: relative;
        overflow: hidden;
    }
    .img-wrapper-premium img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .product-category-card-premium:hover .img-wrapper-premium img {
        transform: scale(1.1);
    }
    .img-overlay-industrial {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, transparent 0%, rgba(27, 49, 104, 0.2) 100%);
    }

    .btn-industrial-link {
        color: var(--industrial-blue);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
        text-decoration: none;
        transition: 0.3s;
        border: none;
        background: transparent;
    }
    .btn-industrial-link i {
        transition: transform 0.3s;
    }
    .btn-industrial-link:hover i {
        transform: translateX(5px);
    }

    .divider-center {
        width: 60px;
        height: 4px;
        margin: 15px auto;
        border-radius: 2px;
    }

    /* CTA Section Premium Styling */
    .hover-glow:hover {
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.3) !important;
        background: rgba(255, 255, 255, 0.1);
    }
    
    @keyframes pulseRight {
        0% { transform: translateX(0); }
        50% { transform: translateX(5px); }
        100% { transform: translateX(0); }
    }
    .btn:hover .pulse-icon {
        animation: pulseRight 1s infinite;
    }

    /* Process Cards */
    .process-card { transition: all 0.3s ease; }
    .process-card:hover { transform: translateY(-4px); }
    .process-number {
        position: absolute;
        top: 16px;
        right: 20px;
        font-family: 'Outfit', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: rgba(0, 51, 102, 0.07);
        line-height: 1;
    }

    .hover-scale {
        transition: transform 0.4s ease;
    }
    .hover-scale:hover {
        transform: scale(1.05);
        z-index: 10;
    }

    /* Blog Section Styles */
    .blog-card-premium {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    .blog-card-premium:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
    }
    .blog-img-wrapper {
        height: 220px;
        overflow: hidden;
        position: relative;
    }
    .blog-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .blog-card-premium:hover .blog-img-wrapper img {
        transform: scale(1.1);
    }
    .blog-date {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: var(--industrial-blue);
        color: #fff;
        padding: 8px 12px;
        border-radius: 8px;
        text-align: center;
        line-height: 1.2;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .blog-date .day {
        display: block;
        font-weight: 800;
        font-size: 1.2rem;
    }
    .blog-date .month {
        display: block;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .btn-outline-primary-custom {
        border: 2px solid var(--industrial-blue);
        color: var(--industrial-blue);
        transition: all 0.3s;
    }
    .btn-outline-primary-custom:hover {
        background: var(--industrial-blue);
        color: #fff;
    }

    /* Video Pulse Animation */
    @keyframes pulseVideo {
        0% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6); }
        70% { box-shadow: 0 0 0 20px rgba(255, 255, 255, 0); }
        100% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
    }
    .pulse-video-btn {
        animation: pulseVideo 2s infinite;
        transition: transform 0.3s;
    }
    .pulse-video-btn:hover {
        transform: scale(1.1);
    }

    /* Carousel Customization */
    .carousel-item .animated { animation-duration: 1.2s; animation-fill-mode: both; }
    .carousel-item.active .fadeInDown { animation-name: fadeInDown; }
    .carousel-item.active .fadeInUp { animation-name: fadeInUp; }
    .delay-1s { animation-delay: 0.5s; }
    .delay-2s { animation-delay: 1s; }
</style>
@endpush
