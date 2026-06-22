@extends('layouts.app')

@section('title', 'Our Projects - Vishwakarma Engineering')
@section('meta_description', 'Explore our portfolio of industrial vessels, reactors, and storage tanks manufactured by Vishwakarma Engineering in Ahmedabad.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')
@section('content')
<!-- Page Header -->
<div class="page-header" style="background: url('{{ asset('assets/images/vessal.jpg') }}');">
    <div class="container text-center">
        <h1 class="display-4 fw-bold outfit text-white mb-3">Industrial Masterpieces</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small m-0 fw-bold">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none hover-accent">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <div class="section-header-badge mb-3">Our Portfolio</div>
            <h2 class="display-6 fw-bold outfit text-primary-custom mb-3">Our Projects</h2>
            <p class="text-muted mx-auto" style="max-width: 800px;">Explore a selection of our successfully executed projects showcasing expertise in industrial vessels, reactors, storage tanks, ETP systems, columns & towers, and structural fabrication. Each project reflects our commitment to quality engineering, precision manufacturing, and customer satisfaction.</p>
        </div>
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm project-card">
                    <img src="{{ asset('assets/images/coil.jpg') }}" class="card-img-top" alt="20 KL SS Reactor with Limpet Coil">
                    <div class="card-body p-4">
                        <span class="text-secondary-blue small fw-bold">Chemical Reactor</span>
                        <h5 class="outfit mt-2">20 KL SS Reactor with Limpet Coil</h5>
                        <p class="text-muted small">Design, fabrication, and installation of a Stainless Steel Reactor with Limpet Coil for efficient heating and mixing operations in a chemical processing facility.</p>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm project-card">
                    <img src="{{ asset('assets/images/mskc.png') }}" class="card-img-top" alt="MS Ketchi Column & Support Structure">
                    <div class="card-body p-4">
                        <span class="text-secondary-blue small fw-bold">Column & Tower</span>
                        <h5 class="outfit mt-2">MS Ketchi Column & Support Structure</h5>
                        <p class="text-muted small">Fabrication and erection of an MS Ketchi Column complete with support structure and platform for industrial process applications.</p>
                    </div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm project-card">
                    <img src="{{ asset('assets/images/etp.jpg') }}" class="card-img-top" alt="Industrial Effluent Treatment Plant">
                    <div class="card-body p-4">
                        <span class="text-secondary-blue small fw-bold">ETP Plant</span>
                        <h5 class="outfit mt-2">Industrial Effluent Treatment Plant</h5>
                        <p class="text-muted small">Supply and fabrication of ETP equipment including settling tanks, holding tanks, sand filters, and carbon filters for industrial wastewater treatment.</p>
                    </div>
                </div>
            </div>
            <!-- Project 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm project-card">
                    <img src="{{ asset('assets/images/msst.jpg') }}" class="card-img-top" alt="MS Storage Tank Fabrication Project">
                    <div class="card-body p-4">
                        <span class="text-secondary-blue small fw-bold">Storage Tank</span>
                        <h5 class="outfit mt-2">MS Storage Tank Fabrication Project</h5>
                        <p class="text-muted small">Manufacturing and installation of heavy-duty MS Storage Tanks for industrial raw material storage and handling applications.</p>
                    </div>
                </div>
            </div>
            <!-- Project 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm project-card">
                    <img src="{{ asset('assets/images/msms.png') }}" class="card-img-top" alt="Industrial Mixing Vessel Assembly">
                    <div class="card-body p-4">
                        <span class="text-secondary-blue small fw-bold">Agitation & Mixing</span>
                        <h5 class="outfit mt-2">Industrial Mixing Vessel Assembly</h5>
                        <p class="text-muted small">Custom-designed mixing vessel with agitator assembly developed for efficient blending and process operations.</p>
                    </div>
                </div>
            </div>
            <!-- Project 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm project-card">
                    <img src="{{ asset('assets/images/pwss.png') }}" class="card-img-top" alt="MS Pipeline & Structural Support System">
                    <div class="card-body p-4">
                        <span class="text-secondary-blue small fw-bold">Fabrication & Structural</span>
                        <h5 class="outfit mt-2">MS Pipeline & Structural Support System</h5>
                        <p class="text-muted small">Fabrication of industrial pipeline networks, equipment platforms, and structural support systems for process plant installations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .project-card {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        overflow: hidden;
        border-radius: 12px;
        background: #fff;
    }
    .project-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(27, 49, 104, 0.15) !important;
    }
    .project-card .card-img-top {
        height: 280px;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .project-card:hover .card-img-top {
        transform: scale(1.1);
    }
    .text-accent-industrial { color: #ff9800; }
    .hover-accent:hover { color: #ff9800 !important; }
</style>
@endsection
