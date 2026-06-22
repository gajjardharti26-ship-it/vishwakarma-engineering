@extends('layouts.app')

@section('title', $title . ' - Vishwakarma Engineering Blogs')
@section('meta_description', 'Read about ' . $title . ' and other industrial insights from Vishwakarma Engineering, a leading manufacturer in Ahmedabad.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')
@section('content')
@php
if ($slug == 'optimizing-chemical-reactor-performance') {
    $blogTitle = 'Optimizing Chemical Reactor Performance';
    $blogCategory = 'Manufacturing';
    $blogDate = '10 May 2024';
    $blogImage = asset('assets/images/blog_2.jpg');
} elseif ($slug == 'industrial-fabrication-quality-standards') {
    $blogTitle = 'Industrial Fabrication & Quality Standards';
    $blogCategory = 'Engineering Standards';
    $blogDate = '05 May 2024';
    $blogImage = asset('assets/images/blog_3.jpg');
} else {
    $blogTitle = 'Pressure Vessel Design & Fabrication Best Practices';
    $blogCategory = 'Engineering';
    $blogDate = '15 May 2024';
    $blogImage = asset('assets/images/blog_1.png');
}
@endphp

<!-- Blog Header -->
<div class="page-header" style="background: url('{{ $blogImage }}');">
    <div class="container text-center">
        <h1 class="display-4 fw-bold outfit text-white mb-3">{{ $blogTitle }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small fw-bold m-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/blogs') }}" class="text-white text-opacity-75 text-decoration-none">Blogs</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Blog Detail</li>
            </ol>
        </nav>
    </div>
</div>

<section class="bg-white py-5">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="blog-content">
                    <img src="{{ $blogImage }}" class="img-fluid rounded-4 shadow-sm mb-5" alt="{{ $blogTitle }}">
                    
                    <div class="d-flex align-items-center mb-4 text-muted small">
                        <span class="me-4"><i class="far fa-calendar-alt me-2 text-secondary-blue"></i> {{ $blogDate }}</span>
                        <span><i class="far fa-folder me-2 text-secondary-blue"></i> {{ $blogCategory }}</span>
                    </div>

                    @if($slug == 'optimizing-chemical-reactor-performance')
                    <h2 class="outfit fw-bold mb-4">Introduction</h2>
                    <p class="mb-4">Chemical reactors are the heart of many industrial processes, enabling controlled chemical reactions for the production of pigments, agrochemicals, petrochemicals, and specialty chemicals. Efficient reactor design directly impacts product quality, process efficiency, and operational safety.</p>
                    
                    <p class="mb-4">At Vishwakarma Engineering, we design and manufacture high-performance chemical reactors engineered for demanding industrial applications.</p>

                    <h3 class="outfit fw-bold mb-3">Importance of Reactor Design</h3>
                    <p class="mb-4">A properly designed reactor helps industries achieve:</p>
                    <ul class="mb-4 list-styled">
                        <li class="mb-2">Consistent product quality</li>
                        <li class="mb-2">Improved process efficiency</li>
                        <li class="mb-2">Better heat transfer</li>
                        <li class="mb-2">Reduced production downtime</li>
                        <li class="mb-2">Enhanced operational safety</li>
                    </ul>
                    <p class="mb-5">The right reactor configuration ensures smooth and reliable plant operations.</p>

                    <h3 class="outfit fw-bold mb-3">Key Design Considerations</h3>
                    
                    <h4 class="outfit fw-bold mb-2">Material Selection</h4>
                    <p class="mb-4">Reactors are fabricated using high-quality MS and SS materials selected according to process conditions, operating temperature, and chemical compatibility.</p>

                    <h4 class="outfit fw-bold mb-2">Agitation Systems</h4>
                    <p class="mb-4">Efficient agitators and mixing systems ensure uniform blending and optimal reaction performance.</p>

                    <h4 class="outfit fw-bold mb-2">Heat Transfer Efficiency</h4>
                    <p class="mb-5">Advanced jacket and coil arrangements help maintain precise process temperatures throughout the reaction cycle.</p>

                    <h3 class="outfit fw-bold mb-3">Manufacturing Excellence</h3>
                    <p class="mb-4">Our reactors are manufactured using:</p>
                    <ul class="mb-4 list-styled">
                        <li class="mb-2">Precision plate rolling</li>
                        <li class="mb-2">Advanced welding processes</li>
                        <li class="mb-2">Dimensional accuracy checks</li>
                        <li class="mb-2">Quality-controlled fabrication methods</li>
                    </ul>
                    <p class="mb-5">Every reactor is built to meet stringent industrial requirements.</p>

                    <h3 class="outfit fw-bold mb-3">Quality Testing</h3>
                    <p class="mb-4">Before dispatch, reactors undergo:</p>
                    <ul class="mb-4 list-styled">
                        <li class="mb-2">Hydrostatic Testing</li>
                        <li class="mb-2">Weld Inspection</li>
                        <li class="mb-2">Dimensional Verification</li>
                        <li class="mb-2">Non-Destructive Testing (NDT)</li>
                    </ul>
                    <p class="mb-5">These inspections ensure safe and reliable long-term operation.</p>

                    <h3 class="outfit fw-bold mb-3">Applications</h3>
                    <p class="mb-4">Our chemical reactors are widely used in:</p>
                    <ul class="mb-5 list-styled">
                        <li class="mb-2">Pigments Manufacturing</li>
                        <li class="mb-2">Agro-Chemical Plants</li>
                        <li class="mb-2">Petrochemical Industries</li>
                        <li class="mb-2">Specialty Chemical Processing</li>
                        <li class="mb-2">Industrial Mixing Applications</li>
                    </ul>

                    <h3 class="outfit fw-bold mb-3">Conclusion</h3>
                    <p class="mb-4">A well-engineered chemical reactor improves production efficiency, product consistency, and operational safety. Through precision fabrication and strict quality control, Vishwakarma Engineering delivers reactor solutions built for long-term industrial performance.</p>
                    @elseif($slug == 'industrial-fabrication-quality-standards')
                    <h2 class="outfit fw-bold mb-4">Introduction</h2>
                    <p class="mb-4">In industrial equipment manufacturing, quality fabrication is essential for ensuring safety, reliability, and long-term performance. Every stage—from material selection and cutting to welding, assembly, and final inspection—plays a critical role in delivering dependable equipment.</p>
                    
                    <p class="mb-4">At Vishwakarma Engineering, we follow stringent fabrication standards and advanced manufacturing practices to produce pressure vessels, chemical reactors, storage tanks, and process equipment for demanding industrial applications.</p>

                    <h3 class="outfit fw-bold mb-3">Importance of Quality Fabrication</h3>
                    <p class="mb-4">Industrial equipment operates under challenging conditions involving pressure, temperature, and continuous operation. Precision fabrication helps maintain structural integrity, operational efficiency, and equipment longevity.</p>
                    <p class="mb-5">By following proven engineering methods and strict quality control procedures, manufacturers can minimize downtime and improve overall plant performance.</p>

                    <h3 class="outfit fw-bold mb-3">Key Fabrication Practices</h3>
                    
                    <h4 class="outfit fw-bold mb-2">Material Selection</h4>
                    <p class="mb-4">Selecting the right material grade is the first step in ensuring equipment durability. High-quality MS and SS materials are chosen based on process requirements and operating conditions.</p>

                    <h4 class="outfit fw-bold mb-2">Precision Welding</h4>
                    <p class="mb-4">Advanced welding techniques such as SAW, TIG, and MIG welding provide strong, consistent joints that enhance equipment strength and reliability.</p>

                    <h4 class="outfit fw-bold mb-2">Dimensional Accuracy</h4>
                    <p class="mb-4">Accurate cutting, rolling, and fabrication processes ensure every component meets engineering specifications and fits perfectly during assembly.</p>

                    <h4 class="outfit fw-bold mb-2">Quality Inspection</h4>
                    <p class="mb-5">Comprehensive inspections, including visual checks, dimensional verification, and Non-Destructive Testing (NDT), help identify defects before dispatch.</p>

                    <h3 class="outfit fw-bold mb-3">Quality Assurance Process</h3>
                    <p class="mb-4">Every manufactured equipment undergoes rigorous quality checks throughout the production cycle. Hydro testing, radiographic inspection, and material verification procedures ensure compliance with industry standards and customer requirements.</p>
                    <p class="mb-5">This commitment to quality helps deliver equipment that performs reliably even in demanding industrial environments.</p>

                    <h3 class="outfit fw-bold mb-3">Industries Served</h3>
                    <p class="mb-4">Our fabrication solutions support a wide range of industries including:</p>
                    <ul class="mb-5 list-styled">
                        <li class="mb-2">Chemical Industry</li>
                        <li class="mb-2">Petrochemical Industry</li>
                        <li class="mb-2">Pigments Industry</li>
                        <li class="mb-2">Agro-Chemical Industry</li>
                        <li class="mb-2">Bulk Drug Manufacturing</li>
                        <li class="mb-2">Process Industries</li>
                    </ul>

                    <h3 class="outfit fw-bold mb-3">Conclusion</h3>
                    <p class="mb-4">Quality fabrication is the foundation of dependable industrial equipment. Through advanced manufacturing capabilities, skilled workmanship, and strict quality control, Vishwakarma Engineering delivers equipment that exceeds industry standards.</p>
                    @else
                    <h2 class="outfit fw-bold mb-4">Introduction</h2>
                    <p class="mb-4">Pressure vessels play a vital role in chemical, petrochemical, pigments, agrochemical, and process industries. Designed to safely store liquids, gases, and chemicals under pressure, these vessels require precision engineering and strict quality control to ensure reliable long-term performance.</p>
                    
                    <p class="mb-4">At Vishwakarma Engineering, we manufacture custom-engineered pressure vessels designed to meet demanding industrial requirements while maintaining the highest standards of safety and durability.</p>

                    <h3 class="outfit fw-bold mb-3">What Are Pressure Vessels?</h3>
                    <p class="mb-4">Pressure vessels are specialized containers used to store or process fluids under pressure. They are commonly used in:</p>
                    <ul class="mb-4 list-styled">
                        <li class="mb-2">Chemical Plants</li>
                        <li class="mb-2">Petrochemical Industries</li>
                        <li class="mb-2">Pigments Manufacturing</li>
                        <li class="mb-2">Agro-Chemical Processing</li>
                        <li class="mb-2">Industrial Process Facilities</li>
                    </ul>
                    <p class="mb-5">Proper vessel design is critical to maintaining safe and efficient plant operations.</p>

                    <h3 class="outfit fw-bold mb-3">Importance of Material Selection</h3>
                    <p class="mb-4">The performance of a pressure vessel depends heavily on selecting the right material. We manufacture vessels using:</p>
                    <ul class="mb-4 list-styled">
                        <li class="mb-2">Mild Steel (MS)</li>
                        <li class="mb-2">Stainless Steel 304</li>
                        <li class="mb-2">Stainless Steel 316</li>
                        <li class="mb-2">Custom Industrial Grades</li>
                    </ul>
                    <p class="mb-5">Material selection is based on operating pressure, temperature, corrosion resistance, and process requirements.</p>

                    <h3 class="outfit fw-bold mb-3">Precision Manufacturing Process</h3>
                    <p class="mb-4">Every pressure vessel undergoes a carefully controlled manufacturing process.</p>
                    <ul class="mb-5 list-styled">
                        <li class="mb-2"><strong>Plate Rolling & Forming:</strong> Steel plates are rolled and shaped according to engineering specifications.</li>
                        <li class="mb-2"><strong>Fabrication & Assembly:</strong> Components such as shells, nozzles, flanges, and supports are assembled with precision.</li>
                        <li class="mb-2"><strong>Advanced Welding:</strong> High-strength welding processes ensure structural integrity and long service life.</li>
                    </ul>

                    <h3 class="outfit fw-bold mb-3">Quality Assurance & Testing</h3>
                    <p class="mb-4">Before dispatch, every vessel undergoes extensive quality inspections including:</p>
                    <ul class="mb-5 list-styled">
                        <li class="mb-2">Dimensional Inspection</li>
                        <li class="mb-2">Hydrostatic Testing</li>
                        <li class="mb-2">Weld Inspection</li>
                        <li class="mb-2">Non-Destructive Testing (NDT)</li>
                    </ul>
                    <p class="mb-5">These procedures ensure maximum safety and performance.</p>

                    <h3 class="outfit fw-bold mb-3">Applications</h3>
                    <p class="mb-4">Pressure vessels manufactured by Vishwakarma Engineering are widely used in:</p>
                    <ul class="mb-5 list-styled">
                        <li class="mb-2">Chemical Processing</li>
                        <li class="mb-2">Petrochemical Plants</li>
                        <li class="mb-2">Pigments Industries</li>
                        <li class="mb-2">Agro-Chemical Facilities</li>
                        <li class="mb-2">Storage & Mixing Systems</li>
                    </ul>

                    <h3 class="outfit fw-bold mb-3">Why Vishwakarma Engineering?</h3>
                    <ul class="mb-5 list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Custom Engineered Solutions</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Precision Manufacturing</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Advanced Welding Technology</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Stringent Quality Control</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Timely Project Delivery</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Technical Support</li>
                    </ul>

                    <h3 class="outfit fw-bold mb-3">Conclusion</h3>
                    <p class="mb-4">A well-designed pressure vessel is essential for safe and efficient industrial operations. Through advanced manufacturing practices, rigorous testing, and engineering expertise, Vishwakarma Engineering delivers reliable pressure vessels built for long-term industrial performance.</p>
                    @endif

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="blog-sidebar sticky-top" style="top: 100px; z-index: 5;">


                    <!-- Recent Posts -->
                    <div class="bg-light-industrial p-4 rounded-4 mb-4">
                        <h5 class="outfit fw-bold mb-3">Recent Posts</h5>
                        <div class="recent-post-item d-flex mb-3">
                            <img src="{{ asset('assets/images/unsplash-photo-1516937941344-00b4e0337589.jpg') }}" class="rounded-3 me-3" style="width: 70px; height: 70px; object-fit: cover;">
                            <div>
                                <h6 class="small fw-bold mb-1"><a href="{{ url('/blogs/optimizing-chemical-reactor-efficiency') }}" class="text-decoration-none text-dark hover-blue">Optimizing Chemical Reactor Efficiency</a></h6>
                                <span class="x-small text-muted">May 10, 2024</span>
                            </div>
                        </div>
                        <div class="recent-post-item d-flex mb-3">
                            <img src="{{ asset('assets/images/unsplash-photo-1581092918056-0c4c3acd3789.jpg') }}" class="rounded-3 me-3" style="width: 70px; height: 70px; object-fit: cover;">
                            <div>
                                <h6 class="small fw-bold mb-1"><a href="{{ url('/blogs/sustainable-effluent-treatment-solutions') }}" class="text-decoration-none text-dark hover-blue">Sustainable ETP Solutions</a></h6>
                                <span class="x-small text-muted">May 05, 2024</span>
                            </div>
                        </div>
                        <div class="recent-post-item d-flex">
                            <img src="{{ asset('assets/images/unsplash-photo-1504917595217-d4dc5ebe6122.jpg') }}" class="rounded-3 me-3" style="width: 70px; height: 70px; object-fit: cover;">
                            <div>
                                <h6 class="small fw-bold mb-1"><a href="{{ url('/blogs/modern-storage-tank-safety') }}" class="text-decoration-none text-dark hover-blue">Storage Tank Safety Standards</a></h6>
                                <span class="x-small text-muted">Apr 28, 2024</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Sidebar -->
                    <div class="bg-primary-custom p-4 rounded-4 text-white text-center">
                        <h5 class="outfit fw-bold mb-3">Need a Solution?</h5>
                        <p class="small opacity-75 mb-4">Contact our engineering experts for a customized quote today.</p>
                        <a href="{{ url('/contact') }}" class="btn btn-outline-light w-100 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .hover-blue:hover { color: var(--secondary-blue) !important; }
    .x-small { font-size: 0.75rem; }
    .list-styled { list-style: disc; padding-left: 20px; }
    .italic { font-style: italic; }
    .blog-content p { line-height: 1.8; color: #4a5568; }
</style>
@endpush
