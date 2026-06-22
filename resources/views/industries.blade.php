@extends('layouts.app')

@section('title', 'Industries We Serve | High-Precision Engineering Solutions - Vishwakarma Engineering')
@section('meta_description', 'Serving Chemical, Pharmaceutical, Water Treatment, and Oil & Gas sectors with high-purity SS tanks, reactors, and pressure vessels. ISO 9001:2015 certified.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: url('{{ asset('assets/images/unsplash-photo-1542332213-31f87348057f.jpg') }}');">
    <div class="container text-center">
        <h1 class="display-3 fw-bold outfit text-white mb-3">Industries We Serve</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small fw-bold m-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Markets & Expertise</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Intro Strategy Section (Design based on User Image) -->
<section class="bg-white py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h6 class="text-secondary-blue fw-bold text-uppercase small mb-3" style="letter-spacing: 2px;">Strategic Engineering</h6>
                <h2 class="display-5 fw-bold outfit mb-4 text-primary-custom" style="font-weight: 800;">Advanced Solutions for Critical Global Sectors</h2>
                <p class="lead text-muted mb-4">Vishwakarma Engineering specializes in the design and fabrication of heavy-duty industrial equipment tailored for high-stakes environments.</p>
                <p class="text-muted mb-0">Our expertise spans across multiple sectors, where we deliver ASME and ISO-compliant Pressure Vessels, Chemical Reactors, and Storage Tanks. We combine traditional craftsmanship with modern CNC technology to ensure your production lines operate with maximum efficiency and zero downtime.</p>
            </div>
            <div class="col-lg-5">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="feature-card-new p-4 bg-light-industrial rounded-4 d-flex align-items-center shadow-sm">
                            <div class="icon-box me-4 bg-white rounded-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; min-width: 70px;">
                                <i class="fas fa-industry fa-2x text-primary-custom"></i>
                            </div>
                            <div>
                                <h4 class="outfit fw-bold mb-1 h5">Industrial Grade</h4>
                                <p class="small text-muted mb-0">Heavy-duty MS & SS fabrication for rugged use.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="feature-card-new p-4 bg-light-industrial rounded-4 d-flex align-items-center shadow-sm">
                            <div class="icon-box me-4 bg-white rounded-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; min-width: 70px;">
                                <i class="fas fa-vial fa-2x text-primary-custom"></i>
                            </div>
                            <div>
                                <h4 class="outfit fw-bold mb-1 h5">Process Focused</h4>
                                <p class="small text-muted mb-0">Optimized mixing and reaction vessels for efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Industries Grid -->
<section class="bg-light-industrial py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold outfit text-primary-custom">Market Specific Expertise</h2>
            <div class="divider-center bg-secondary-blue"></div>
            <p class="text-muted mx-auto mt-3" style="max-width: 600px;">We serve a wide spectrum of industries with specialized engineering solutions.</p>
        </div>

        <div class="row g-4">
            <!-- 1. Chemical & Specialty Chemicals -->
            <div class="col-lg-4 col-md-6">
                <div class="industry-item bg-white rounded-4 overflow-hidden shadow-sm h-100">
                    <div class="industry-thumb">
                        <img src="{{ asset('assets/images/vessal.jpg') }}" alt="Chemical Industry">
                    </div>
                    <div class="p-4">
                        <h4 class="outfit fw-bold h5 mb-3">Chemical & Specialty Chemicals</h4>
                        <p class="text-muted small mb-4">Manufacturing massive reactors and pressure vessels that handle corrosive media and high-temperature reactions.</p>
                        <a href="{{ url('/products/category/reactors') }}" class="btn-industry-link">Related Products <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- 2. Pharmaceuticals & APIs -->
            <div class="col-lg-4 col-md-6">
                <div class="industry-item bg-white rounded-4 overflow-hidden shadow-sm h-100">
                    <div class="industry-thumb">
                        <img src="{{ asset('assets/images/vessal.jpg') }}" alt="Pharma Industry">
                    </div>
                    <div class="p-4">
                        <h4 class="outfit fw-bold h5 mb-3">Pharmaceuticals & APIs</h4>
                        <p class="text-muted small mb-4">Delivering CGMP-compliant SS 316L mixing tanks and sterile vessels with electro-polished finishes.</p>
                        <a href="{{ url('/products/category/industrial-vessels') }}" class="btn-industry-link">Related Products <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- 3. Dyes, Intermediate & Pigments -->
            <div class="col-lg-4 col-md-6">
                <div class="industry-item bg-white rounded-4 overflow-hidden shadow-sm h-100">
                    <div class="industry-thumb">
                        <img src="{{ asset('assets/images/unsplash-photo-1516937941344-00b4e0337589.jpg') }}" alt="Dyes and Pigments">
                    </div>
                    <div class="p-4">
                        <h4 class="outfit fw-bold h5 mb-3">Dyes, Intermediate & Pigments</h4>
                        <p class="text-muted small mb-4">Precision-engineered agitators and high-speed stirrers designed for uniform color dispersion.</p>
                        <a href="{{ url('/products/category/agitation-mixing') }}" class="btn-industry-link">Related Products <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- 4. Water Treatment & Environmental -->
            <div class="col-lg-4 col-md-6">
                <div class="industry-item bg-white rounded-4 overflow-hidden shadow-sm h-100">
                    <div class="industry-thumb">
                        <img src="{{ asset('assets/images/unsplash-photo-1581092918056-0c4c3acd3789.jpg') }}" alt="Water Treatment">
                    </div>
                    <div class="p-4">
                        <h4 class="outfit fw-bold h5 mb-3">Water Treatment & Environmental</h4>
                        <p class="text-muted small mb-4">Fabricating turnkey ETP plants, primary clarifiers, and filtration units for industrial waste management.</p>
                        <a href="{{ url('/products/category/etp-effluent-treatment') }}" class="btn-industry-link">Related Products <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- 5. Agrochemicals & Pesticides -->
            <div class="col-lg-4 col-md-6">
                <div class="industry-item bg-white rounded-4 overflow-hidden shadow-sm h-100">
                    <div class="industry-thumb">
                        <img src="{{ asset('assets/images/vessal.jpg') }}" alt="Agrochemicals">
                    </div>
                    <div class="p-4">
                        <h4 class="outfit fw-bold h5 mb-3">Agrochemicals & Pesticides</h4>
                        <p class="text-muted small mb-4">Robust storage and reaction equipment engineered to resist aggressive chemicals in the agriculture sector.</p>
                        <a href="{{ url('/products/category/storage-tanks') }}" class="btn-industry-link">Related Products <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- 6. Petrochemicals & Refineries -->
            <div class="col-lg-4 col-md-6">
                <div class="industry-item bg-white rounded-4 overflow-hidden shadow-sm h-100">
                    <div class="industry-thumb">
                        <img src="{{ asset('assets/images/unsplash-photo-1513828583688-c52646db42da.jpg') }}" alt="Petrochemicals">
                    </div>
                    <div class="p-4">
                        <h4 class="outfit fw-bold h5 mb-3">Petrochemicals & Refineries</h4>
                        <p class="text-muted small mb-4">Heavy fabrication of distillation towers and API-standard tanks for the petroleum industry.</p>
                        <a href="{{ url('/products/category/columns-towers') }}" class="btn-industry-link">Related Products <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="bg-primary-custom rounded-4 p-5 text-center text-white shadow-lg">
            <h2 class="display-6 fw-bold mb-4 outfit">Partner with Engineering Experts</h2>
            <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 700px;">Our team is ready to provide technical consultation and competitive quotes for your next industrial project.</p>
            <a href="{{ url('/contact') }}" class="btn btn-light btn-lg px-5 py-3 shadow text-primary-custom fw-bold rounded-pill">Contact Us Now</a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .feature-card-new {
        transition: all 0.3s ease;
        border: 1px solid #f1f5f9;
    }
    .feature-card-new:hover {
        transform: translateX(10px);
        background: #fff !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05) !important;
        border-color: var(--secondary-blue);
    }
    .industry-item {
        transition: all 0.4s ease;
    }
    .industry-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 80, 157, 0.1) !important;
    }
    .industry-thumb {
        height: 220px;
        overflow: hidden;
    }
    .industry-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .industry-item:hover .industry-thumb img {
        transform: scale(1.1);
    }
    .btn-industry-link {
        color: var(--secondary-blue);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 1px;
        text-decoration: none;
        transition: 0.3s;
    }
    .btn-industry-link:hover { color: var(--primary-blue); }
    .divider-center { width: 60px; height: 4px; margin: 15px auto; border-radius: 2px; }
</style>
@endpush
