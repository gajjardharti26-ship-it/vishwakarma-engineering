@extends('layouts.app')

@section('title', 'Industrial Engineering Products - Vishwakarma Engineering')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('assets/images/unsplash-photo-1542332213-31f87348057f.jpg') }}') center/cover; padding: 100px 0;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold outfit">Our Engineering Portfolio</h1>
        <p class="lead text-white opacity-75 mx-auto mb-4" style="max-width: 700px;">Comprehensive range of industrial vessels, reactors, and process equipment manufactured to international standards.</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small m-0 fw-bold">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>



<section class="py-5">
    <div class="container py-4">
        <!-- 1. Industrial Vessels -->
        <div id="vessels" class="product-section py-5 scroll-margin">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h6 class="text-secondary-blue fw-bold text-uppercase small">01. Heavy Duty</h6>
                    <h2 class="display-6 fw-bold outfit mb-3">Industrial Vessels</h2>
                    <p class="text-muted">High-precision vessels designed for heat transfer and pressure management in critical industrial processes.</p>
                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled product-feature-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Jacketed Vessel (MS/SS)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Pressure Vessel (MS/SS)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Mixing Vessel</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled product-feature-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> Movable Vessel</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Hydraulic Movable</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Limpet Coil Vessel</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="btn btn-industrial-primary mt-4">Inquire Now</a>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('assets/images/vessal.jpg') }}" class="img-fluid rounded shadow-lg" alt="Industrial Vessels">
                </div>
            </div>
        </div>

        <!-- 2. Reactors -->
        <div id="reactors" class="product-section py-5 scroll-margin border-top">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-5 mb-4 mb-lg-0 ps-lg-5">
                    <h6 class="text-secondary-blue fw-bold text-uppercase small">02. Chemical Process</h6>
                    <h2 class="display-6 fw-bold outfit mb-3">Industrial Reactors</h2>
                    <p class="text-muted">Specialized reactors equipped with precision stirrers and gear box assemblies for consistent chemical reactions.</p>
                    <ul class="list-unstyled product-feature-list mt-4">
                        <li><i class="fas fa-check-circle text-success me-2"></i> MS / SS / MS+SS Reactors</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> Reactor with Gear Box & Stirrer Assembly</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> High Temperature Resistance</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> Custom Agitator Designs</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="btn btn-industrial-primary mt-4">Technical Specs</a>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('assets/images/unsplash-photo-1581093588401-fbb62a02f120.jpg') }}" class="img-fluid rounded shadow-lg" alt="Industrial Reactors">
                </div>
            </div>
        </div>

        <!-- 3. Storage Tanks -->
        <div id="tanks" class="product-section py-5 scroll-margin border-top">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h6 class="text-secondary-blue fw-bold text-uppercase small">03. Storage Solutions</h6>
                    <h2 class="display-6 fw-bold outfit mb-3">Storage Tanks</h2>
                    <p class="text-muted">Robus containers for safe storage of chemicals, raw materials, and finished industrial products.</p>
                    <div class="row g-2 mt-3">
                        <div class="col-12"><div class="p-2 border rounded mb-2"><i class="fas fa-dot-circle text-secondary-blue me-2"></i> MS Storage Tank</div></div>
                        <div class="col-12"><div class="p-2 border rounded mb-2"><i class="fas fa-dot-circle text-secondary-blue me-2"></i> SS Storage Tank</div></div>
                        <div class="col-12"><div class="p-2 border rounded mb-2"><i class="fas fa-dot-circle text-secondary-blue me-2"></i> Chemical Storage Tank</div></div>
                        <div class="col-12"><div class="p-2 border rounded mb-2"><i class="fas fa-dot-circle text-secondary-blue me-2"></i> Raw Material Storage Tank</div></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('assets/images/vessal.jpg') }}" class="img-fluid rounded shadow-lg" alt="Storage Tanks">
                </div>
            </div>
        </div>

        <!-- 4. Columns & Towers -->
        <div id="columns" class="product-section py-5 scroll-margin border-top">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-5 mb-4 mb-lg-0 ps-lg-5">
                    <h6 class="text-secondary-blue fw-bold text-uppercase small">04. Separation Technology</h6>
                    <h2 class="display-6 fw-bold outfit mb-3">Columns & Towers</h2>
                    <p class="text-muted">High-efficiency columns for precise separation and purification processes.</p>
                    <ul class="list-unstyled product-feature-list mt-4">
                        <li><i class="fas fa-chevron-right text-secondary-blue me-2"></i> MS / SS Ketchi Column</li>
                        <li><i class="fas fa-chevron-right text-secondary-blue me-2"></i> Column Structure & Platform Support</li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('assets/images/vessal.jpg') }}" class="img-fluid rounded shadow-lg" alt="Columns">
                </div>
            </div>
        </div>

        <!-- 5. ETP Plant -->
        <div id="etp" class="product-section py-5 scroll-margin border-top">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h6 class="text-secondary-blue fw-bold text-uppercase small">05. Environmental Care</h6>
                    <h2 class="display-6 fw-bold outfit mb-3">ETP – Effluent Treatment Plant</h2>
                    <p class="text-muted">Sustainable waste water treatment solutions with integrated settling and filtration units.</p>
                    <div class="card bg-light border-0 p-4">
                        <ul class="list-unstyled mb-0 row g-3">
                            <li class="col-md-6 fw-bold"><i class="fas fa-tint me-2 text-primary-custom"></i> Primary Settling</li>
                            <li class="col-md-6 fw-bold"><i class="fas fa-tint me-2 text-primary-custom"></i> Secondary Treatment</li>
                            <li class="col-md-6 fw-bold"><i class="fas fa-tint me-2 text-primary-custom"></i> Holding Tanks</li>
                            <li class="col-md-6 fw-bold"><i class="fas fa-tint me-2 text-primary-custom"></i> Sand & Carbon Filters</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('assets/images/unsplash-photo-1581092918056-0c4c3acd3789.jpg') }}" class="img-fluid rounded shadow-lg" alt="ETP Plant">
                </div>
            </div>
        </div>

        <!-- 6. Fabrication & Mixing -->
        <div id="mixing" class="product-section py-5 scroll-margin border-top">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-5 mb-4 mb-lg-0 ps-lg-5">
                    <h2 class="display-6 fw-bold outfit mb-3">Agitation & Fabrication</h2>
                    <p class="text-muted">Complete range of stirring equipment and custom structural fabrication for heavy industries.</p>
                    <div class="mt-4">
                        <h6 class="fw-bold text-uppercase small text-secondary-blue">Agitation Equipment:</h6>
                        <p class="small text-muted mb-3">MS / SS Stirrer, Mixing Assemblies, Gear Structure Fabrication.</p>
                        <h6 class="fw-bold text-uppercase small text-secondary-blue">Structural Work:</h6>
                        <p class="small text-muted mb-0">MS / SS Pipeline Work, Structural Fabrication, Platform & Support Structures.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('assets/images/unsplash-photo-1504328345606-18bbc8c9d7d1.jpg') }}" class="img-fluid rounded shadow-lg" alt="Fabrication">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="bg-primary-custom py-5">
    <div class="container text-center text-white py-4">
        <h2 class="outfit mb-4">Can't find what you're looking for?</h2>
        <p class="opacity-75 mb-5 mx-auto" style="max-width: 600px;">We specialize in customized industrial equipment fabrication based on client designs and specifications.</p>
        <a href="{{ url('/contact') }}" class="btn btn-industrial-primary btn-lg px-5">Consult Our Engineers</a>
    </div>
</section>
@endsection

@push('styles')
<style>
    .scroll-margin {
        scroll-margin-top: 130px;
    }
    .product-nav .nav-link {
        color: var(--dark-grey);
        font-weight: 600;
        margin: 0 10px;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    .product-nav .nav-link:hover {
        color: var(--secondary-blue);
        background: rgba(0, 80, 157, 0.05);
        border-color: var(--secondary-blue);
    }
    .product-feature-list li {
        margin-bottom: 10px;
        font-size: 0.95rem;
    }
    .border-start-lg {
        border-left: 1px solid rgba(0,0,0,0.1);
    }
    @media (max-width: 991px) {
        .border-start-lg { border-left: none; }
    }
</style>
@endpush
