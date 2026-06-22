@extends('layouts.app')

@section('title', $title . ' - Vishwakarma Engineering')
@section('meta_description', 'High-quality ' . $title . ' manufactured by Vishwakarma Engineering in Ahmedabad. We specialize in industrial pressure vessels, chemical reactors, and storage tanks.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')
@section('content')
@php
    // COMPREHENSIVE PRODUCT DATABASE WITH UNIQUE IMAGES
    $productData = [
        // Vessels
        'jacketed-vessel' => [
            'category' => 'Industrial Vessels',
            'summary' => "Jacketed Vessels are designed for precise temperature control during mixing, heating, cooling, and storage operations. The external jacket ensures uniform heat transfer throughout the process.\n\nManufactured in MS, SS304, or SS316, these vessels are widely used in chemical, pharmaceutical, food, and specialty processing industries.",
            'features' => [
                'MS / SS304 / SS316 Construction',
                'Heating & Cooling Jacket',
                'Corrosion Resistant Design',
                'Custom Capacities Available'
            ],
            'image' => asset('assets/images/vessal.jpg')
        ],
        'pressure-vessel' => [
            'category' => 'Industrial Vessels',
            'summary' => "Pressure Vessels are engineered to safely handle liquids and gases under controlled pressure conditions. Their robust construction ensures durability and operational safety.\n\nSuitable for chemical plants, refineries, power plants, and industrial processing facilities requiring reliable pressure containment.",
            'features' => [
                'ASME-Based Design',
                'High Pressure Resistance',
                'MS / SS Construction',
                'Custom Sizes Available'
            ],
            'image' => asset('assets/images/pww.png')
        ],
        'mixing-vessel' => [
            'category' => 'Industrial Vessels',
            'summary' => "Mixing Vessels are equipped with agitators for uniform mixing of liquids, powders, and viscous products. They ensure consistent product quality and process efficiency.\n\nWidely used in food, pharmaceutical, chemical, cosmetic, and paint manufacturing industries.",
            'features' => [
                'Heavy Duty Agitator',
                'Variable Mixing Speeds',
                'Hygienic Construction',
                'Customized Capacity'
            ],
            'image' => asset('assets/images/mw.png')
        ],
        'movable-vessel' => [
            'category' => 'Industrial Vessels',
            'summary' => "Movable Vessels provide easy transportation between processing areas through heavy-duty wheels and compact design.\n\nIdeal for batch production, material transfer, and facilities requiring flexible equipment movement.",
            'features' => [
                'Heavy Duty Wheels',
                'Portable Design',
                'Durable Construction',
                'Multiple Capacity Options'
            ],
            'image' => asset('assets/images/movev.png')
        ],
        'hydraulic-movable-vessel' => [
            'category' => 'Industrial Vessels',
            'summary' => "Hydraulic Movable Vessels are designed for easy handling, lifting, and discharge of materials. The hydraulic system improves operator convenience and process efficiency.\n\nCommonly used in pharmaceutical, chemical, and food processing plants.",
            'features' => [
                'Hydraulic Lifting System',
                'Tilting Mechanism',
                'Heavy Duty Castors',
                'Automated Controls'
            ],
            'image' => asset('assets/images/hmv.png')
        ],
        'limpet-coil-vessel' => [
            'category' => 'Industrial Vessels',
            'summary' => "Limpet Coil Vessels utilize external coils for superior heat transfer and temperature control during processing operations.\n\nSuitable for chemical reactions, storage applications, and processes requiring controlled thermal conditions.",
            'features' => [
                'External Limpet Coil',
                'Efficient Heat Transfer',
                'Robust Construction',
                'Custom Design Available'
            ],
            'image' => asset('assets/images/coil.jpg')
        ],

        // Reactors
        'ms-reactor' => [
            'category' => 'Chemical Reactors',
            'summary' => "MS Reactors are manufactured using high-quality mild steel and are suitable for chemical processing, solvent handling, and industrial production applications. Designed for durability and reliable operation under demanding conditions.",
            'features' => [
                'Mild Steel Construction',
                'Industrial Process Applications',
                'Agitator Compatible Design',
                'Custom Capacities Available'
            ],
            'image' => asset('assets/images/msr.jpg')
        ],
        'ss-reactor' => [
            'category' => 'Chemical Reactors',
            'summary' => "SS Reactors are fabricated using SS304 and SS316 materials for pharmaceutical, food, and chemical industries. Designed for superior corrosion resistance, easy cleaning, and long service life.",
            'features' => [
                'SS304 / SS316 Construction',
                'Hygienic Surface Finish',
                'Corrosion Resistant Design',
                'Process Industry Applications'
            ],
            'image' => asset('assets/images/ssrr.jpg')
        ],
        'ms-ss-reactor' => [
            'category' => 'Chemical Reactors',
            'summary' => "MS + SS Reactors feature a mild steel outer shell with stainless steel contact surfaces, providing a cost-effective solution for corrosive and demanding process applications.",
            'features' => [
                'MS Outer Construction',
                'SS Product Contact Surface',
                'Cost-Effective Design',
                'Long Service Life'
            ],
            'image' => asset('assets/images/mssss.png')
        ],
        'reactor-gearbox' => [
            'category' => 'Chemical Reactors',
            'summary' => "Reactors with Gear Box are designed for high-viscosity materials and demanding mixing applications. The integrated gearbox provides controlled speed, high torque, and reliable agitation performance.",
            'features' => [
                'Gearbox Driven Agitator',
                'High Torque Mixing',
                'Industrial Duty Design',
                'Custom Reactor Configuration'
            ],
            'image' => asset('assets/images/gss1.png')
        ],

        // Tanks
        'ms-storage-tank' => [
            'category' => 'Storage Tanks',
            'summary' => "MS Storage Tanks are manufactured using high-quality mild steel and are suitable for storing water, oils, chemicals, and process liquids. Designed for durability and long service life, these tanks are available in various capacities and configurations.",
            'features' => [
                'Robust MS Construction',
                'Custom Capacities Available',
                'Corrosion Protection Options',
                'Suitable for Industrial Storage'
            ],
            'image' => asset('assets/images/msst.jpg')
        ],
        'ss-storage-tank' => [
            'category' => 'Storage Tanks',
            'summary' => "SS Storage Tanks are fabricated using SS304 and SS316 grades for industries requiring hygienic and corrosion-resistant storage solutions. Ideal for food, pharmaceutical, and chemical applications.",
            'features' => [
                'SS304 / SS316 Construction',
                'Hygienic Design',
                'Corrosion Resistant',
                'Easy Maintenance'
            ],
            'image' => asset('assets/images/ssst.jpg')
        ],
        'chemical-storage-tank' => [
            'category' => 'Storage Tanks',
            'summary' => "Chemical Storage Tanks are engineered for the safe storage of acids, alkalis, solvents, and other industrial chemicals. Built with appropriate materials and safety features for demanding environments.",
            'features' => [
                'Chemical Resistant Construction',
                'Safe Storage Design',
                'Custom Capacities',
                'Industrial Grade Fabrication'
            ],
            'image' => asset('assets/images/cst.png')
        ],
        'raw-material-tank' => [
            'category' => 'Storage Tanks',
            'summary' => "Raw Material Storage Tanks provide reliable storage for liquid and semi-liquid raw materials used in industrial manufacturing processes. Designed for easy integration with production systems.",
            'features' => [
                'Bulk Storage Solution',
                'Process Integration Ready',
                'Durable Construction',
                'Custom Design Available'
            ],
            'image' => asset('assets/images/rms.png')
        ],

        // ETP
        'complete-etp-plant' => [
            'category' => 'ETP – Effluent Treatment Plants',
            'summary' => 'Complete ETP Plants are engineered to treat industrial wastewater through multiple treatment stages, ensuring safe discharge and compliance with environmental regulations. Custom-designed based on plant capacity and process requirements.',
            'features' => [
                'Custom Plant Capacity',
                'Industrial Wastewater Treatment',
                'Modular Design',
                'Environmental Compliance'
            ],
            'image' => asset('assets/images/etp.jpg')
        ],
        'primary-settling-tank' => [
            'category' => 'ETP – Effluent Treatment Plants',
            'summary' => 'Primary Settling Tanks are used in the initial treatment stage to separate suspended particles and sludge from wastewater before further processing.',
            'features' => [
                'Solid Separation Process',
                'Heavy-Duty Construction',
                'Low Maintenance Design',
                'Custom Capacities'
            ],
            'image' => asset('assets/images/pst1.png')
        ],
        'secondary-treatment-tank' => [
            'category' => 'ETP – Effluent Treatment Plants',
            'summary' => 'Secondary Treatment Tanks facilitate biological treatment processes that reduce organic pollutants and improve water quality before final treatment stages.',
            'features' => [
                'Biological Treatment Process',
                'Efficient Wastewater Processing',
                'Industrial Duty Design',
                'Custom Fabrication'
            ],
            'image' => asset('assets/images/etp22.png')
        ],
        'holding-tank' => [
            'category' => 'ETP – Effluent Treatment Plants',
            'summary' => 'Holding Tanks are used for collecting and storing wastewater prior to treatment, ensuring smooth process flow and operational efficiency.',
            'features' => [
                'Temporary Storage Solution',
                'Robust Construction',
                'Corrosion Resistant Options',
                'Custom Sizes Available'
            ],
            'image' => asset('assets/images/ners.png')
        ],
        'sand-filter' => [
            'category' => 'ETP – Effluent Treatment Plants',
            'summary' => 'Sand Filters utilize graded filtration media to remove fine suspended solids and improve water clarity as part of the treatment process.',
            'features' => [
                'High Filtration Efficiency',
                'Pressure Vessel Design',
                'Low Maintenance Operation',
                'Custom Flow Rates'
            ],
            'image' => asset('assets/images/sf.png')
        ],
        'carbon-filter' => [
            'category' => 'ETP – Effluent Treatment Plants',
            'summary' => 'Carbon Filters use activated carbon media to remove residual contaminants, odor, and color from treated water, ensuring improved water quality.',
            'features' => [
                'Activated Carbon Media',
                'Odor & Color Removal',
                'Water Polishing Process',
                'Industrial Applications'
            ],
            'image' => asset('assets/images/sdf.png')
        ],

        // Columns
        'ms-ketchi-column' => [
            'category' => 'Columns & Towers',
            'summary' => "MS Ketchi Columns are fabricated using high-quality mild steel and are widely used in chemical and process industries for extraction, washing, and separation operations. Designed for durability and reliable performance under demanding industrial conditions.",
            'features' => [
                'Mild Steel Construction',
                'Industrial Process Applications',
                'Heavy-Duty Fabrication',
                'Custom Sizes Available'
            ],
            'image' => asset('assets/images/mskc.png')
        ],
        'ss-ketchi-column' => [
            'category' => 'Columns & Towers',
            'summary' => "SS Ketchi Columns are manufactured using SS304 and SS316 materials for applications requiring superior corrosion resistance and product purity. Suitable for chemical, pharmaceutical, and food processing industries.",
            'features' => [
                'SS304 / SS316 Material',
                'Corrosion Resistant Design',
                'Hygienic Construction',
                'Custom Fabrication'
            ],
            'image' => asset('assets/images/sssks.png')
        ],
        'column-structure' => [
            'category' => 'Columns & Towers',
            'summary' => "Column Structure & Platforms provide safe access, maintenance support, and structural stability for industrial columns and process equipment. Fabricated to meet plant-specific operational and safety requirements.",
            'features' => [
                'Access Platforms & Staircases',
                'Structural Support Systems',
                'Heavy-Duty Steel Fabrication',
                'Custom Layout Designs'
            ],
            'image' => asset('assets/images/sfst.png')
        ],

        // Agitation
        'ms-stirrer' => [
            'category' => 'Agitation & Mixing',
            'summary' => "MS Stirrers are manufactured for mixing and agitation processes in various industries. Built using robust mild steel construction, they provide reliable performance for blending, circulation, and process mixing operations.",
            'features' => [
                'Mild Steel Construction',
                'Custom Agitator Design',
                'Heavy-Duty Performance',
                'Industrial Applications'
            ],
            'image' => asset('assets/images/mass.png')
        ],
        'ss-stirrer' => [
            'category' => 'Agitation & Mixing',
            'summary' => "SS Stirrers are fabricated using SS304 and SS316 materials for food, pharmaceutical, and chemical industries. They ensure efficient mixing while maintaining hygiene and corrosion resistance.",
            'features' => [
                'SS304 / SS316 Material',
                'Hygienic Design',
                'Corrosion Resistant',
                'Custom Sizes Available'
            ],
            'image' => asset('assets/images/sss.png')
        ],
        'gear-stirrer-assembly' => [
            'category' => 'Agitation & Mixing',
            'summary' => "Gear Structure & Stirrer Assemblies combine precision gearboxes with agitator systems to deliver controlled speed, torque, and mixing performance for industrial processes.",
            'features' => [
                'Precision Gearbox Assembly',
                'Heavy-Duty Construction',
                'Controlled Mixing Performance',
                'Custom Configurations'
            ],
            'image' => asset('assets/images/gsa.png')
        ],
        'mixing-assemblies' => [
            'category' => 'Agitation & Mixing',
            'summary' => "Mixing Assemblies are designed to provide complete agitation solutions for process industries. Available in multiple configurations, they ensure uniform mixing and reliable operation.",
            'features' => [
                'Complete Mixing Solution',
                'Custom Design Available',
                'Industrial Grade Components',
                'Efficient Performance'
            ],
            'image' => asset('assets/images/msms.png')
        ],

        // Fabrication
        'pipeline-work' => [
            'category' => 'Fabrication & Structural Work',
            'summary' => "MS/SS Pipeline Work includes fabrication, erection, and installation of industrial piping systems for chemical, pharmaceutical, food processing, and manufacturing plants. Designed for reliable fluid transfer and long-term performance.",
            'features' => [
                'MS & SS Pipeline Fabrication',
                'Industrial Installation Services',
                'Process Plant Integration',
                'Custom Routing Solutions'
            ],
            'image' => asset('assets/images/pwss.png')
        ],
        'structural-fabrication' => [
            'category' => 'Fabrication & Structural Work',
            'summary' => "Structural Fabrication includes manufacturing of steel structures, machine frames, support systems, platforms, and industrial frameworks. Built for strength, durability, and long service life.",
            'features' => [
                'Heavy Steel Structures',
                'Industrial Frameworks',
                'Machine Support Structures',
                'Custom Fabrication'
            ],
            'image' => asset('assets/images/sff.jpg')
        ],
        'platform-support' => [
            'category' => 'Fabrication & Structural Work',
            'summary' => "Platform & Support Structures are fabricated to provide safe access, equipment support, and operational stability in industrial facilities. Available in customized designs and dimensions.",
            'features' => [
                'Access Platforms',
                'Equipment Supports',
                'Heavy-Duty Construction',
                'Custom Design Available'
            ],
            'image' => asset('assets/images/sff.jpg')
        ],
        'gear-structure-fab' => [
            'category' => 'Fabrication & Structural Work',
            'summary' => "Gear Structure Fabrication includes manufacturing of gear mounting frames, support assemblies, and transmission structures designed for durability and accurate alignment.",
            'features' => [
                'Gear Support Frames',
                'Precision Fabrication',
                'Heavy-Duty Design',
                'Industrial Applications'
            ],
            'image' => asset('assets/images/gss.png')
        ],
        'gear-assembly' => [
            'category' => 'Specialized Assemblies & Equipment',
            'summary' => 'Gear Assemblies are manufactured and assembled using high-quality components to ensure reliable power transmission, efficient operation, and long service life. Suitable for mixers, reactors, conveyors, and various industrial machinery.',
            'features' => [
                'Heavy-Duty Gear Systems',
                'Precision Assembly',
                'Industrial Applications',
                'Custom Configurations Available'
            ],
            'image' => asset('assets/images/ga.png')
        ],
        'structural-assembly' => [
            'category' => 'Specialized Assemblies & Equipment',
            'summary' => 'Structural Assemblies are fabricated and assembled to provide stable support for industrial equipment, platforms, piping systems, and process plants. Designed to meet project-specific requirements.',
            'features' => [
                'Steel Structural Assembly',
                'Heavy-Duty Construction',
                'Industrial Support Systems',
                'Custom Fabrication'
            ],
            'image' => asset('assets/images/sa.png')
        ],
        'customized-equipment' => [
            'category' => 'Specialized Assemblies & Equipment',
            'summary' => 'Customized Industrial Equipment is designed and fabricated according to client specifications and industry standards. Solutions are developed to address unique processing, handling, storage, and production challenges.',
            'features' => [
                'Custom Design & Engineering',
                'Industry-Specific Solutions',
                'Quality Manufacturing',
                'Turnkey Fabrication Support'
            ],
            'image' => asset('assets/images/gas.png')
        ],
    ];

    // Slug matching logic
    $slug = $slug ?? 'default';
    $data = $productData[$slug] ?? [
        'category' => 'Industrial Equipment',
        'summary' => 'Precision manufactured industrial equipment providing durability and technical excellence for your production facility.',
        'features' => ['Custom fabrication to blueprint', 'High-grade industrial materials', 'Full technical testing provided'],
        'image' => asset('assets/images/unsplash-photo-1516937941344-00b4e0337589.jpg')
    ];
@endphp

<!-- Page Header -->
<div class="page-header" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ $data['image'] }}') center/cover;">
    <div class="container text-center py-5">
        <h6 class="text-white text-opacity-75 fw-bold text-uppercase mb-3" style="letter-spacing: 2px;">{{ $data['category'] }}</h6>
        <h1 class="display-4 fw-bold outfit text-white mb-0">{{ $title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small m-0 mt-4 fw-bold">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/products') }}" class="text-white text-opacity-75 text-decoration-none">Products</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>
</div>

<section class="bg-white py-5">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="rounded-4 overflow-hidden shadow-lg feature-img-hover border border-4 border-white">
                        <img src="{{ $data['image'] }}" class="img-fluid w-100" style="object-fit: cover; aspect-ratio: 4/3;" alt="{{ $title }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ps-lg-4">
                    <h2 class="display-5 fw-bold outfit text-secondary-blue mb-3">{{ $title }}</h2>
                    <div class="lead text-muted mb-5" style="line-height: 1.8; font-size: 1.1rem;">
                        {!! nl2br(e($data['summary'])) !!}
                    </div>
                    
                    <h4 class="fw-bold outfit text-dark mb-4">Product Specifications</h4>
                    <div class="specs-grid row g-3 mb-5">
                        @foreach($data['features'] as $feature)
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 rounded-3 bg-light shadow-sm border border-light h-100 transition-hover">
                                <div class="bg-primary-custom text-white rounded-circle flex-shrink-0 me-3 shadow-sm" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="font-size: 0.75rem;"></i>
                                </div>
                                <span class="fw-semibold text-dark small">{{ $feature }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="d-flex gap-3 mt-2">
                        <a href="{{ url('/contact') }}" class="btn btn-primary-custom px-4 py-2 shadow-sm fw-bold" style="letter-spacing: 0.5px; text-transform: none !important; font-size: 0.9rem;">
                            <i class="fas fa-paper-plane me-2"></i> Inquire now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Section -->
<section class="bg-light-industrial border-top py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <div class="section-header-badge mb-3">Manufacturing Excellence</div>
            <h3 class="display-6 fw-bold outfit">Quality Assurance Standards</h3>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm text-center h-100 social-hover border border-light">
                    <i class="fas fa-microscope fa-3x text-primary-custom mb-3"></i>
                    <h5 class="outfit">NDT Inspection</h5>
                    <p class="small text-muted mb-0">Comprehensive quality checks ensure reliable performance and long service life.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm text-center h-100 social-hover border border-light">
                    <i class="fas fa-certificate fa-3x text-primary-custom mb-3"></i>
                    <h5 class="outfit">Material MTC</h5>
                    <p class="small text-muted mb-0">Certified raw materials are used to maintain consistent product quality and traceability.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm text-center h-100 social-hover border border-light">
                    <i class="fas fa-shield-halved fa-3x text-primary-custom mb-3"></i>
                    <h5 class="outfit">Safety Compliance</h5>
                    <p class="small text-muted mb-0">Products are manufactured in accordance with established industrial quality standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .feature-img-hover { transition: 0.4s ease; }
    .feature-img-hover:hover { transform: scale(1.02); }
    .social-hover { transition: 0.3s ease; border-top: 4px solid transparent; }
    .social-hover:hover { border-color: var(--secondary-blue); transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.05) !important; }
</style>
@endpush
