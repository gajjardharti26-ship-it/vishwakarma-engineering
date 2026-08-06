@extends('layouts.app')

@section('title', $pageTitle)
@section('meta_description', $metaDescription)
@section('meta_keywords', $metaKeywords)
@section('canonical', $canonicalUrl)

@section('content')
<!-- MAIN HERO SECTION -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <div class="d-inline-flex align-items-center bg-primary bg-opacity-10 text-primary-custom px-3 py-1 rounded-pill small fw-bold mb-3">
                    <i class="fas fa-map-marked-alt me-2"></i> Industrial Hub: {{ $cityData['name'] }}, {{ $cityData['region'] }}
                </div>
                <h1 class="display-6 fw-bold text-dark mb-3 lh-sm">
                    Industrial Process Equipment, Vessels & Reactors in <span class="text-primary-custom">{{ $cityData['name'] }}, Gujarat</span>
                </h1>
                <p class="lead text-secondary fs-6 mb-4">
                    Vishwakarma Engineering is a premier manufacturer and supplier of heavy industrial process equipment, chemical reactors, pressure vessels, storage tanks, and ETP wastewater plants engineered specifically for manufacturing companies in <strong>{{ $cityData['name'] }}</strong> and surrounding GIDC industrial zones.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#products-list" class="btn btn-primary-custom px-4 py-2 fw-semibold">
                        <i class="fas fa-th-list me-2"></i> Browse Products for {{ $cityData['name'] }}
                    </a>
                    <a href="tel:+919924012425" class="btn btn-outline-dark px-4 py-2 fw-semibold">
                        <i class="fas fa-phone-alt fa-flip-horizontal me-2 text-primary"></i> Call: +91 99240 12425
                    </a>
                </div>

                <div class="p-3 bg-light rounded-3 border">
                    <span class="small fw-bold text-dark d-block mb-1"><i class="fas fa-map-pin text-danger me-1"></i> Key Industrial Zones Served in {{ $cityData['name'] }}:</span>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($cityData['industrial_zones'] as $zone)
                        <span class="badge bg-white text-dark border px-2 py-1 small fw-medium">{{ $zone }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Direct Inquiry Form -->
                <div class="card border-0 shadow-sm rounded-4 p-4" style="background-color: var(--white); border-top: 4px solid var(--primary-blue) !important;">
                    <h5 class="fw-bold text-dark mb-2">Request Quote for {{ $cityData['name'] }}</h5>
                    <p class="small text-muted mb-3">Get competitive direct-manufacturer pricing.</p>

                    @if(session('success'))
                        <div class="alert alert-success small mb-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <input type="hidden" name="inquiry_type" value="City Hub Page - {{ $cityData['name'] }}">
                        
                        <div class="mb-2">
                            <label class="form-label small fw-semibold text-dark mb-1">Your Name *</label>
                            <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label small fw-semibold text-dark mb-1">Phone Number *</label>
                            <input type="tel" name="phone" class="form-control form-control-sm" placeholder="+91 98765 43210" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label small fw-semibold text-dark mb-1">Email Address *</label>
                            <input type="email" name="email" class="form-control form-control-sm" placeholder="name@company.com" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-dark mb-1">Equipment / Capacity Details</label>
                            <textarea name="message" rows="2" class="form-control form-control-sm" placeholder="Specify vessel, reactor, or tank requirement...">Looking for industrial equipment supply in {{ $cityData['name'] }}.</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary-custom w-100 py-2 fw-semibold btn-sm">
                            <i class="fas fa-paper-plane me-2"></i> Submit Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS GRID FOR THIS CITY -->
<section class="py-5 bg-light border-top" id="products-list">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-7 fw-bold text-dark mb-2">Industrial Equipment Available for {{ $cityData['name'] }}</h2>
            <p class="text-secondary max-w-700 mx-auto">Explore all specialized equipment engineered by Vishwakarma Engineering and supplied directly to {{ $cityData['name'] }} industrial units.</p>
        </div>

        <div class="row g-4">
            @foreach($allProducts as $pSlug => $prod)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white d-flex flex-column">
                    <div class="bg-light text-center p-3" style="height: 180px;">
                        <img src="{{ asset($prod['image']) }}" alt="{{ $prod['title'] }}" class="img-fluid h-100" style="object-fit: contain;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column flex-grow-1">
                        <span class="badge bg-primary bg-opacity-10 text-primary-custom align-self-start mb-2 small">{{ $prod['category'] }}</span>
                        <h5 class="fw-bold text-dark mb-2">{{ $prod['short_title'] }}</h5>
                        <p class="text-secondary small mb-4 flex-grow-1">
                            {{ Str::limit($prod['description'], 110) }}
                        </p>
                        <a href="{{ url('/' . $pSlug . '-in-' . $citySlug) }}" class="btn btn-outline-primary btn-sm w-100 fw-semibold mt-auto">
                            View {{ $prod['short_title'] }} in {{ $cityData['name'] }} <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- NEARBY CITIES SECTION -->
<section class="py-5 bg-white border-top">
    <div class="container">
        <h3 class="h5 fw-bold text-dark mb-3">Explore Other Industrial Hubs in Gujarat</h3>
        <div class="d-flex flex-wrap gap-2">
            @foreach($nearbyCities as $nSlug => $nData)
            <a href="{{ url('/industrial-equipment-manufacturer-in-' . $nSlug) }}" class="btn btn-outline-secondary btn-sm">
                {{ $nData['name'] }} Industrial Equipment
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
