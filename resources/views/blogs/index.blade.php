@extends('layouts.app')

@section('title', $pageTitle ?? 'Industrial Insights & Engineering Blogs - Vishwakarma Engineering')
@section('meta_description', $metaDescription ?? 'Explore technical blogs and engineering guides on industrial pressure vessels, chemical reactors, storage tanks, and ETP plants.')
@section('meta_keywords', $metaKeywords ?? 'pressure vessel manufacturer, pressure vessel manufacturing process, jacketed vessel fabrication, chemical storage equipment exporters, chemical storage tanks, limpet coil vessel, ETP tank, Ahmedabad')
@section('canonical', $canonicalUrl ?? url('/blogs'))

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: url('{{ asset('assets/images/about_banner.jpg') }}');">
    <div class="container text-center">
        <h1 class="display-4 fw-bold outfit text-white mb-3">Blogs & Insights</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small m-0 fw-bold">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none"><i class="fas fa-home me-1"></i> Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Blogs</li>
            </ol>
        </nav>
    </div>
</div>

<section class="bg-light-industrial py-5">
    <div class="container py-3">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h6 class="text-secondary-blue fw-bold text-uppercase small mb-2" style="letter-spacing: 2px;">Technical & Engineering Articles</h6>
            <h2 class="display-6 fw-bold outfit text-primary-custom mb-3">Industrial Equipment & Process Knowledge</h2>
            <div class="mx-auto" style="width: 60px; height: 3px; background-color: var(--secondary-blue); border-radius: 2px;"></div>
        </div>

        <!-- Blog Grid -->
        <div class="row g-4">
            @foreach($blogs as $slugKey => $blogItem)
            <div class="col-lg-4 col-md-6">
                <article class="blog-card-premium h-100 bg-white rounded-4 overflow-hidden shadow-sm border d-flex flex-column">
                    <div class="blog-img-wrapper position-relative">
                        <img src="{{ asset($blogItem['image']) }}" class="img-fluid w-100" alt="{{ $blogItem['title'] }}" loading="lazy" style="height: 230px; object-fit: cover;">
                        <div class="blog-date-tag">
                            <span class="day">{{ $blogItem['date_day'] }}</span>
                            <span class="month">{{ $blogItem['date_month'] }}</span>
                        </div>
                        <div class="blog-category-badge">
                            <span class="badge bg-primary-custom text-white px-3 py-1 rounded-pill small shadow-sm">{{ $blogItem['category_badge'] }}</span>
                        </div>
                    </div>
                    <div class="p-4 d-flex flex-column flex-grow-1">
                        <div class="d-flex align-items-center justify-content-between mb-2 text-muted small">
                            <span><i class="far fa-clock me-1 text-secondary-blue"></i> {{ $blogItem['read_time'] }}</span>
                            <span><i class="far fa-calendar-check me-1 text-secondary-blue"></i> {{ $blogItem['date_year'] }}</span>
                        </div>
                        <h3 class="outfit h5 fw-bold mb-3">
                            <a href="{{ url('/blogs/' . $blogItem['slug']) }}" class="text-dark text-decoration-none hover-primary-link">
                                {{ $blogItem['short_title'] ?? $blogItem['title'] }}
                            </a>
                        </h3>
                        <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                            {{ $blogItem['excerpt'] }}
                        </p>
                        <div class="pt-3 border-top d-flex align-items-center justify-content-between mt-auto">
                            <a href="{{ url('/blogs/' . $blogItem['slug']) }}" class="btn-industrial-link fw-bold text-decoration-none">
                                Read Full Guide <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>

        <!-- Interactive Consultation Banner -->
        <div class="mt-5 pt-4">
            <div class="p-4 p-md-5 rounded-4 shadow-sm text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #1b3168 0%, #006cb7 100%);">
                <div class="row align-items-center position-relative" style="z-index: 2;">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <span class="badge bg-white text-primary-custom px-3 py-2 rounded-pill fw-bold small mb-3">Custom Fabrication Consultation</span>
                        <h3 class="outfit fw-bold mb-2">Have a Technical Requirement for Pressure Vessels or Chemical Reactors?</h3>
                        <p class="mb-0 text-white text-opacity-90 small">Our engineering team designs and manufactures tailor-made ASME & IS compliant process equipment to your exact datasheets.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                        <a href="{{ url('/contact') }}" class="btn btn-light px-3 py-2 rounded-pill fw-semibold text-primary-custom shadow-sm me-2" style="font-size: 0.88rem;">Request a Quote</a>
                        <a href="{{ url('/products') }}" class="btn btn-outline-light px-3 py-2 rounded-pill fw-semibold" style="font-size: 0.88rem;">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .bg-light-industrial {
        background-color: #f8fafc;
    }
    .blog-card-premium {
        transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.35s ease, border-color 0.35s ease;
        border: 1px solid #e2e8f0 !important;
    }
    .blog-card-premium:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 32px rgba(27, 49, 104, 0.12) !important;
        border-color: #cbd5e1 !important;
    }
    .blog-img-wrapper {
        height: 230px;
        overflow: hidden;
    }
    .blog-img-wrapper img {
        transition: transform 0.6s ease;
    }
    .blog-card-premium:hover .blog-img-wrapper img {
        transform: scale(1.08);
    }
    .blog-date-tag {
        position: absolute;
        bottom: 12px;
        left: 12px;
        background: #006cb7;
        color: #ffffff;
        padding: 6px 12px;
        border-radius: 8px;
        text-align: center;
        line-height: 1.15;
        box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    }
    .blog-date-tag .day {
        display: block;
        font-weight: 800;
        font-size: 1.15rem;
    }
    .blog-date-tag .month {
        display: block;
        font-size: 0.65rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .blog-category-badge {
        position: absolute;
        top: 12px;
        right: 12px;
    }
    .hover-primary-link {
        color: #1e293b;
        transition: color 0.2s ease;
    }
    .hover-primary-link:hover {
        color: #006cb7;
    }
    .btn-industrial-link {
        color: #006cb7;
        font-size: 0.9rem;
        transition: color 0.2s ease;
    }
    .btn-industrial-link:hover {
        color: #1b3168;
    }
</style>
@endpush
