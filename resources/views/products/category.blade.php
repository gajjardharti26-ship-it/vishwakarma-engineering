@extends('layouts.app')

@section('title', ucwords(str_replace('-', ' ', $category)) . ' - Vishwakarma Engineering')
@section('meta_description', 'Explore ' . ucwords(str_replace('-', ' ', $category)) . ' manufactured by Vishwakarma Engineering in Ahmedabad. We specialize in industrial pressure vessels, chemical reactors, and storage tanks.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')
@section('content')
@php
    // Title mapping to match Header/Footer exactly
    $titleMap = [
        'industrial-vessels' => 'Industrial Vessels',
        'reactors' => 'Chemical Reactors',
        'storage-tanks' => 'Storage Tanks',
        'columns-towers' => 'Columns & Towers',
        'agitation-mixing' => 'Agitation & Mixing',
        'etp-effluent-treatment' => 'ETP – Effluent Treatment Plants',
        'fabrication-structural' => 'Fabrication & Structural Work',
        'assemblies-special' => 'Specialized Assemblies & Equipment'
    ];

    $categoryTitle = $titleMap[$category] ?? ucwords(str_replace('-', ' ', $category));
    
    // Data mapping for products with unique HD images
    $products = [];
    
    if($category == 'industrial-vessels') {
        $products = [
            ['name' => 'Jacketed Vessel (MS / SS)', 'slug' => 'jacketed-vessel', 'img' => asset('assets/images/js11.png'), 'desc' => 'Efficient heating and cooling vessel designed for temperature-controlled industrial processes.'],
            ['name' => 'Pressure Vessel (MS / SS)', 'slug' => 'pressure-vessel', 'img' => asset('assets/images/pww.png'), 'desc' => 'High-strength vessels designed for safe storage and processing under pressure.'],
            ['name' => 'Mixing Vessel', 'slug' => 'mixing-vessel', 'img' => asset('assets/images/mw.png'), 'desc' => 'Designed for efficient blending, mixing, and homogenization of materials.'],
            ['name' => 'Movable Vessel', 'slug' => 'movable-vessel', 'img' => asset('assets/images/movev.png'), 'desc' => 'Portable processing vessel designed for flexible production environments.'],
            ['name' => 'Hydraulic Movable Vessel', 'slug' => 'hydraulic-movable-vessel', 'img' => asset('assets/images/hmv.png'), 'desc' => 'Mobile vessel with hydraulic lifting and tilting functionality.'],
            ['name' => 'Limpet Coil Vessel', 'slug' => 'limpet-coil-vessel', 'img' => asset('assets/images/coil.jpg'), 'desc' => 'Efficient heating and cooling vessel with external limpet coil design.']
        ];
    } elseif($category == 'reactors') {
        $products = [
            ['name' => 'MS Reactor', 'slug' => 'ms-reactor', 'img' => asset('assets/images/msr.jpg'), 'desc' => 'Heavy-duty mild steel reactors designed for industrial processing, mixing, and chemical reactions.'],
            ['name' => 'SS Reactor', 'slug' => 'ss-reactor', 'img' => asset('assets/images/ssrr.jpg'), 'desc' => 'Stainless steel reactors engineered for hygienic and corrosion-resistant processing applications.'],
            ['name' => 'MS + SS Reactor', 'slug' => 'ms-ss-reactor', 'img' => asset('assets/images/mssss.png'), 'desc' => 'Dual-material reactors combining MS strength with SS corrosion-resistant contact surfaces.'],
            ['name' => 'Reactor with Gear Box', 'slug' => 'reactor-gearbox', 'img' => asset('assets/images/gss1.png'), 'desc' => 'High-torque reactors equipped with gearbox-driven agitators for efficient mixing applications.'],
        ];
    } elseif($category == 'storage-tanks') {
        $products = [
            ['name' => 'MS Storage Tank', 'slug' => 'ms-storage-tank', 'img' => asset('assets/images/msst.jpg'), 'desc' => 'Heavy-duty mild steel storage tanks designed for water, oil, and industrial liquid storage applications.'],
            ['name' => 'SS Storage Tank', 'slug' => 'ss-storage-tank', 'img' => asset('assets/images/ssst.jpg'), 'desc' => 'Stainless steel storage tanks for hygienic and corrosion-resistant liquid storage applications.'],
            ['name' => 'Chemical Storage Tank', 'slug' => 'chemical-storage-tank', 'img' => asset('assets/images/cst.png'), 'desc' => 'Specially designed storage tanks for safe handling of corrosive and hazardous chemicals.'],
            ['name' => 'Raw Material Storage Tank', 'slug' => 'raw-material-tank', 'img' => asset('assets/images/rms.png'), 'desc' => 'Storage tanks designed for bulk raw material handling and process integration.'],
        ];
    } elseif($category == 'columns-towers') {
        $products = [
            ['name' => 'MS Ketchi Column', 'slug' => 'ms-ketchi-column', 'img' => asset('assets/images/mskc.png'), 'desc' => 'Mild steel Ketchi columns designed for industrial extraction, separation, and process applications.'],
            ['name' => 'SS Ketchi Column', 'slug' => 'ss-ketchi-column', 'img' => asset('assets/images/sssks.png'), 'desc' => 'Stainless steel Ketchi columns engineered for hygienic and corrosion-resistant processing.'],

            ['name' => 'Column Structure & Platform', 'slug' => 'column-structure', 'img' => asset('assets/images/sfst.png'), 'desc' => 'Fabricated support structures and access platforms for industrial columns and towers.'],
        ];
    } elseif($category == 'agitation-mixing') {
        $products = [
            ['name' => 'MS Stirrer', 'slug' => 'ms-stirrer', 'img' => asset('assets/images/mass.png'), 'desc' => 'Heavy-duty mild steel stirrers designed for efficient mixing in industrial applications.'],
            ['name' => 'SS Stirrer', 'slug' => 'ss-stirrer', 'img' => asset('assets/images/sss.png'), 'desc' => 'Stainless steel stirrers designed for hygienic and corrosion-resistant mixing applications.'],
            ['name' => 'Gear Structure & Stirrer Assembly', 'slug' => 'gear-stirrer-assembly', 'img' => asset('assets/images/gsa.png'), 'desc' => 'Integrated gear and stirrer assemblies for controlled and efficient mixing operations.'],
            ['name' => 'Mixing Assembly', 'slug' => 'mixing-assemblies', 'img' => asset('assets/images/msms.png'), 'desc' => 'Complete mixing assemblies engineered for efficient industrial blending and processing.'],
        ];
    } elseif($category == 'etp-effluent-treatment') {
        $products = [
            ['name' => 'Complete ETP Plant', 'slug' => 'complete-etp-plant', 'img' => asset('assets/images/etp.jpg'), 'desc' => 'Complete effluent treatment systems designed for industrial wastewater treatment and environmental compliance.'],
            ['name' => 'Primary Settling Tank', 'slug' => 'primary-settling-tank', 'img' => asset('assets/images/pst1.png'), 'desc' => 'Settling tanks designed for efficient removal of suspended solids from wastewater.'],
            ['name' => 'Secondary Treatment Tank', 'slug' => 'secondary-treatment-tank', 'img' => asset('assets/images/etp22.png'), 'desc' => 'Treatment tanks designed for biological and secondary wastewater processing applications.'],
            ['name' => 'Holding Tank', 'slug' => 'holding-tank', 'img' => asset('assets/images/ners.png'), 'desc' => 'Storage and balancing tanks designed for temporary wastewater holding applications.'],
            ['name' => 'Sand Filter', 'slug' => 'sand-filter', 'img' => asset('assets/images/sf.png'), 'desc' => 'Pressure sand filters designed for efficient removal of suspended particles from treated water.'],
            ['name' => 'Carbon Filter', 'slug' => 'carbon-filter', 'img' => asset('assets/images/sdf.png'), 'desc' => 'Activated carbon filtration systems designed for odor, color, and impurity removal.'],
        ];
    } elseif($category == 'fabrication-structural') {
        $products = [
            ['name' => 'MS / SS Pipeline Work', 'slug' => 'pipeline-work', 'img' => asset('assets/images/pwss.png'), 'desc' => 'Industrial MS/SS pipeline fabrication and installation solutions for process industries.'],
            ['name' => 'Structural Fabrication', 'slug' => 'structural-fabrication', 'img' => asset('assets/images/sff.jpg'), 'desc' => 'Heavy-duty structural fabrication for industrial plants, equipment, and support systems.'],
            ['name' => 'Platform & Support Structure', 'slug' => 'platform-support', 'img' => asset('assets/images/pss.jpg'), 'desc' => 'Custom engineered platforms and support structures for industrial equipment and operations.'],
            ['name' => 'Gear Structure Fabrication', 'slug' => 'gear-structure-fab', 'img' => asset('assets/images/gss.png'), 'desc' => 'Precision fabricated gear support structures for industrial drive and transmission systems.'],
        ];
    } elseif($category == 'assemblies-special') {
        $products = [
            ['name' => 'Gear Assembly', 'slug' => 'gear-assembly', 'img' => asset('assets/images/ga.png'), 'desc' => 'Precision gear assemblies designed for smooth power transmission and industrial equipment performance.'],
            ['name' => 'Structural Assembly', 'slug' => 'structural-assembly', 'img' => asset('assets/images/sa.png'), 'desc' => 'Fabricated structural assemblies designed for industrial platforms, supports, and equipment installations.'],
            ['name' => 'Customized Industrial Equipment', 'slug' => 'customized-equipment', 'img' => asset('assets/images/gas.png'), 'desc' => 'Custom-engineered industrial equipment manufactured to meet specific process and operational requirements.'],
        ];
    } else {
        // Generic fallback for other categories
        $products = [
            ['name' => 'Standard Industrial Solution', 'slug' => 'standard-solution', 'img' => asset('assets/images/unsplash-photo-1565514020179-026b92b84bb6.jpg'), 'desc' => 'Standard industrial manufacturing solutions for varied plant operations.'],
            ['name' => 'Custom Engineered Equipment', 'slug' => 'custom-equipment', 'img' => asset('assets/images/vessal.jpg'), 'desc' => 'Precision engineered custom equipment designed to your unique specifications.'],
        ];
    }
@endphp

<!-- Page Header -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('assets/images/vessal.jpg') }}') center/cover; padding: 100px 0;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold outfit text-white mb-3">{{ $categoryTitle }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small m-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/products') }}" class="text-white-50 text-decoration-none">Products</a></li>
                <li class="breadcrumb-item active text-white fw-bold" aria-current="page">{{ $categoryTitle }}</li>
            </ol>
        </nav>
    </div>
</div>

<section class="bg-light-industrial py-5">
    <div class="container py-4">
        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm transition-hover">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img src="{{ $product['img'] }}" class="card-img-top h-100 w-100 transition-hover-img" style="object-fit: cover; object-position: center top;" alt="{{ $product['name'] }}">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title outfit text-primary-custom mb-3">{{ $product['name'] }}</h5>
                        <p class="card-text small text-muted mb-4">{{ $product['desc'] }}</p>
                        <div class="mt-auto">
                            <a href="{{ url('/products/' . $product['slug']) }}" class="btn btn-outline-custom w-100 py-2 fw-bold small" style="letter-spacing: 0.5px;">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="position-relative rounded-4 overflow-hidden shadow-lg p-5 text-center text-white" style="background: linear-gradient(135deg, rgba(27, 49, 104, 0.98) 0%, rgba(0, 108, 183, 0.95) 100%);">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('{{ asset('assets/images/unsplash-photo-1504917595217-d4dc5ebe6122.jpg') }}') center/cover; opacity: 0.15; mix-blend-mode: overlay; z-index: 1;"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-6 fw-bold mb-3 outfit text-white">Need a Custom Configuration for {{ $categoryTitle }}?</h2>
                <p class="lead mb-5 mx-auto text-white-50" style="max-width: 750px;">From design and material selection to fabrication and testing, we deliver vessel solutions tailored to your industrial process requirements.</p>
                <a href="{{ url('/contact') }}" class="btn btn-light py-2 px-4 shadow text-primary-custom fw-bold hover-glow" style="transition: all 0.3s; border-radius: 50px; font-size: 1rem;">Request Technical Quote <i class="fas fa-arrow-right ms-2 pulse-icon"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .transition-hover {
        transition: all 0.3s ease;
    }
    .transition-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    .transition-hover-img { transition: transform 0.5s ease; }
    .card:hover .transition-hover-img { transform: scale(1.08); }
    
    .btn-outline-custom {
        color: var(--primary-blue);
        border: 1px solid var(--primary-blue);
        background-color: transparent;
        transition: all 0.3s ease;
    }
    .btn-outline-custom:hover {
        background-color: transparent !important;
        color: var(--secondary-blue) !important;
        border-color: var(--secondary-blue) !important;
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(27, 49, 104, 0.15);
    }
</style>
@endpush
