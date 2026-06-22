@extends('layouts.app')

@section('title', 'Quality & Safety - Vishwakarma Engineering')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container text-center">
        <h1 class="display-4 fw-bold outfit">Quality & Safety</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Quality & Safety</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Quality Policy -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h6 class="text-secondary-blue fw-bold text-uppercase">Our Commitment</h6>
                <h2 class="mb-4 outfit">Zero Compromise on Quality</h2>
                <p>At Vishwakarma Engineering, quality is not just a department; it's a culture. We follow a rigorous quality management system that ensures every product leaving our facility meets or exceeds customer expectations and international standards.</p>
                <p>Our quality control team performs multi-stage inspections, from raw material procurement to final dispatch. We utilize advanced testing methods to ensure structural integrity and performance efficiency of our industrial equipment.</p>
                
                <div class="row g-4 mt-3">
                    <div class="col-sm-6">
                        <div class="p-3 border rounded border-secondary-blue">
                            <h5 class="outfit h6 mb-2">ASME Standards</h5>
                            <p class="small text-muted mb-0">Compliance with ASME Section VIII for pressure vessels.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded border-secondary-blue">
                            <h5 class="outfit h6 mb-2">NDT Testing</h5>
                            <p class="small text-muted mb-0">X-ray, Ultrasonic, and Dye Penetrant testing availability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/unsplash-photo-1581092160562-40aa08e78837.jpg') }}" class="img-fluid rounded shadow-lg" alt="Quality Testing">
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="bg-light py-5">
    <div class="container py-4">
        <div class="section-title">
            <h2>Our Quality Process</h2>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="text-center">
                    <div class="mb-4 p-4 rounded-circle bg-white shadow-sm d-inline-block position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-secondary-blue p-2">1</span>
                        <i class="fas fa-file-contract fa-xl text-secondary-blue"></i>
                    </div>
                    <h5 class="outfit">Design Approval</h5>
                    <p class="small text-muted">Thorough review of blueprints and material specifications.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="mb-4 p-4 rounded-circle bg-white shadow-sm d-inline-block position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-secondary-blue p-2">2</span>
                        <i class="fas fa-truck-loading fa-xl text-secondary-blue"></i>
                    </div>
                    <h5 class="outfit">Raw Material Inspection</h5>
                    <p class="small text-muted">Verification of MTCs and chemical composition of plates.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="mb-4 p-4 rounded-circle bg-white shadow-sm d-inline-block position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-secondary-blue p-2">3</span>
                        <i class="fas fa-microscope fa-xl text-secondary-blue"></i>
                    </div>
                    <h5 class="outfit">In-Process Check</h5>
                    <p class="small text-muted">Welding inspections and dimensional checks during fabrication.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="mb-4 p-4 rounded-circle bg-white shadow-sm d-inline-block position-relative">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-secondary-blue p-2">4</span>
                        <i class="fas fa-vial fa-xl text-secondary-blue"></i>
                    </div>
                    <h5 class="outfit">Final Testing</h5>
                    <p class="small text-muted">Hydrostatic testing and finishing inspection before dispatch.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Safety Standard -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
                <h6 class="text-secondary-blue fw-bold text-uppercase">Safety First</h6>
                <h2 class="mb-4 outfit">Industrial Safety Standards</h2>
                <p>We prioritize the safety of our team and the users of our equipment. Our manufacturing facility follows strict OSHA guidelines, and all our heavy process equipment is designed with built-in safety features such as relief valves and pressure sensors.</p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-3 d-flex align-items-center"><i class="fas fa-hard-hat text-warning me-3 fa-2x"></i> <span>Mandatory EHS training for all technical staff.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fas fa-fire-extinguisher text-danger me-3 fa-2x"></i> <span>State-of-the-art fire suppression systems.</span></li>
                    <li class="mb-3 d-flex align-items-center"><i class="fas fa-user-shield text-success me-3 fa-2x"></i> <span>100% PPE compliance across the workshop.</span></li>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5 border-start border-5 border-warning bg-light">
                    <h3 class="outfit">Our Safety Goal</h3>
                    <p class="fs-4 fst-italic text-muted">"Zero Accidents. Every Day."</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
