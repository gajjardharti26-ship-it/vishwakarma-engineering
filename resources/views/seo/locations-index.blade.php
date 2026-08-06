@extends('layouts.app')

@section('title', $pageTitle)
@section('meta_description', $metaDescription)
@section('canonical', $canonicalUrl)

@section('content')
<!-- BREADCRUMB & HEADER -->
<section class="bg-light py-5 border-bottom">
    <div class="container text-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-3 small">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page">Gujarat Locations Directory</li>
            </ol>
        </nav>
        <h1 class="display-6 fw-bold text-dark mb-3">
            Industrial Equipment Supply Network Across Gujarat
        </h1>
        <p class="lead text-secondary fs-6 max-w-700 mx-auto mb-0">
            Vishwakarma Engineering supplies ASME & IS compliant Pressure Vessels, Chemical Reactors, Storage Tanks, and ETP Systems across all major industrial districts and GIDC estates of Gujarat.
        </p>
    </div>
</section>

<!-- LOCATIONS DIRECTORY GRID -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            @foreach($cities as $citySlug => $city)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 shadow-sm p-4 bg-light">
                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                        <h4 class="h5 fw-bold text-primary-custom mb-0">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i> {{ $city['name'] }}
                        </h4>
                        <span class="badge bg-secondary-custom text-white small">{{ $city['region'] }}</span>
                    </div>

                    <p class="small text-muted mb-3">
                        <strong>District:</strong> {{ $city['district'] }} | <strong>Zones:</strong> {{ implode(', ', array_slice($city['industrial_zones'], 0, 3)) }}
                    </p>

                    <h6 class="small fw-bold text-dark mb-2">Featured Equipment in {{ $city['name'] }}:</h6>
                    <ul class="list-unstyled small mb-3">
                        <li><a href="{{ url('/pressure-vessel-in-' . $citySlug) }}" class="text-decoration-none text-secondary d-block py-1"><i class="fas fa-angle-right text-primary me-2"></i> Pressure Vessel in {{ $city['name'] }}</a></li>
                        <li><a href="{{ url('/ss-reactor-in-' . $citySlug) }}" class="text-decoration-none text-secondary d-block py-1"><i class="fas fa-angle-right text-primary me-2"></i> SS Reactor in {{ $city['name'] }}</a></li>
                        <li><a href="{{ url('/ms-storage-tank-in-' . $citySlug) }}" class="text-decoration-none text-secondary d-block py-1"><i class="fas fa-angle-right text-primary me-2"></i> Storage Tank in {{ $city['name'] }}</a></li>
                        <li><a href="{{ url('/complete-etp-plant-in-' . $citySlug) }}" class="text-decoration-none text-secondary d-block py-1"><i class="fas fa-angle-right text-primary me-2"></i> ETP Plant in {{ $city['name'] }}</a></li>
                    </ul>

                    <a href="{{ url('/industrial-equipment-manufacturer-in-' . $citySlug) }}" class="btn btn-outline-primary btn-sm w-100 mt-auto fw-semibold">
                        View All Equipment in {{ $city['name'] }} <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
