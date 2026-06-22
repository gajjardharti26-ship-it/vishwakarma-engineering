@extends('layouts.app')

@section('title', 'Industrial Insights & Engineering Blogs - Vishwakarma Engineering')
@section('meta_description', 'Read the latest blogs and insights on industrial pressure vessels, chemical reactors, and storage tanks by Vishwakarma Engineering in Ahmedabad.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')
@section('content')
<!-- Page Header -->
<div class="page-header" style="background: url('{{ asset('assets/images/vessal.jpg') }}');">
    <div class="container text-center">
        <h1 class="display-3 fw-bold outfit text-white mb-3">Our Blogs</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small fw-bold m-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Insights</li>
            </ol>
        </nav>
    </div>
</div>

<section class="bg-light-industrial py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h6 class="text-secondary-blue fw-bold text-uppercase small mb-2" style="letter-spacing: 2px;">Technical Knowledge Hub</h6>
            <h2 class="display-6 fw-bold outfit text-primary-custom mb-3">Engineering Insights & Industrial Updates</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Stay informed with the latest trends, safety protocols, and technical advancements in the world of heavy industrial fabrication and chemical processing.</p>
        </div>

        <div class="row g-4">
            <!-- Blog Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0">
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
                        <h4 class="outfit h5 fw-bold mb-3">The Precision of Pressure Vessel Fabrication</h4>
                        <p class="text-muted small mb-4">Exploring the critical role of advanced SAW welding and NDT testing in ensuring the safety and longevity of industrial pressure vessels...</p>
                        <a href="{{ url('/blogs/precision-of-pressure-vessel-fabrication') }}" class="btn-industrial-link px-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0">
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

            <!-- Blog Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0">
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

            <!-- Blog Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0">
                    <div class="blog-img-wrapper">
                        <img src="{{ asset('assets/images/vessal.jpg') }}" class="img-fluid" alt="Storage Tank Safety">
                        <div class="blog-date">
                            <span class="day">28</span>
                            <span class="month">APR</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-2">
                            <span class="badge bg-light-industrial text-secondary-blue px-3 py-2 rounded-pill small">Safety</span>
                        </div>
                        <h4 class="outfit h5 fw-bold mb-3">Modern Storage Tank Safety: Standards & Inspections</h4>
                        <p class="text-muted small mb-4">Understanding the importance of regular inspections and adherence to API standards for industrial chemical storage tanks...</p>
                        <a href="{{ url('/blogs/modern-storage-tank-safety') }}" class="btn-industrial-link px-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0">
                    <div class="blog-img-wrapper">
                        <img src="{{ asset('assets/images/unsplash-photo-1513828583688-c52646db42da.jpg') }}" class="img-fluid" alt="Ketchi Columns">
                        <div class="blog-date">
                            <span class="day">20</span>
                            <span class="month">APR</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-2">
                            <span class="badge bg-light-industrial text-secondary-blue px-3 py-2 rounded-pill small">Chemical</span>
                        </div>
                        <h4 class="outfit h5 fw-bold mb-3">The Role of Ketchi Columns in Chemical Processing</h4>
                        <p class="text-muted small mb-4">Exploring the engineering behind efficient separation processes and how custom column designs impact overall production output...</p>
                        <a href="{{ url('/blogs/distillation-columns-chemical-processing') }}" class="btn-industrial-link px-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border-0">
                    <div class="blog-img-wrapper">
                        <img src="{{ asset('assets/images/unsplash-photo-1504328345606-18bbc8c9d7d1.jpg') }}" class="img-fluid" alt="Advanced Welding">
                        <div class="blog-date">
                            <span class="day">12</span>
                            <span class="month">APR</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-2">
                            <span class="badge bg-light-industrial text-secondary-blue px-3 py-2 rounded-pill small">Technique</span>
                        </div>
                        <h4 class="outfit h5 fw-bold mb-3">Advanced Welding Techniques for Heavy Fabrication</h4>
                        <p class="text-muted small mb-4">A deep dive into TIG, MIG, and SAW welding processes and their applications in manufacturing high-pressure industrial equipment...</p>
                        <a href="{{ url('/blogs/advanced-welding-techniques') }}" class="btn-industrial-link px-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination removed as there is currently only one page -->
    </div>
</section>
@endsection

@push('styles')
<style>
    .blog-card-premium {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid #f1f5f9 !important;
    }
    .blog-card-premium:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
    }
    .blog-img-wrapper {
        height: 240px;
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
        background: var(--secondary-blue);
        color: #fff;
        padding: 8px 12px;
        border-radius: 8px;
        text-align: center;
        line-height: 1.2;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .blog-date .day { display: block; font-weight: 800; font-size: 1.2rem; }
    .blog-date .month { display: block; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; }

    .btn-industrial-link {
        color: var(--secondary-blue);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
        text-decoration: none;
        transition: 0.3s;
    }
    .btn-industrial-link:hover { color: var(--primary-blue); }
    .btn-industrial-link i { transition: transform 0.3s; }
    .btn-industrial-link:hover i { transform: translateX(5px); }

    .pagination .page-link {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e2e8f0;
        color: var(--primary-blue);
        font-weight: 600;
        transition: all 0.3s;
    }
    .pagination .page-item.active .page-link {
        background-color: var(--secondary-blue);
        border-color: var(--secondary-blue);
        color: #fff;
    }
    .pagination .page-link:hover {
        background-color: var(--light-grey);
        color: var(--secondary-blue);
    }
</style>
@endpush
