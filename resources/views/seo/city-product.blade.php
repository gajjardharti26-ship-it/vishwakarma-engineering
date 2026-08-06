@extends('layouts.app')

@section('title', $pageTitle)
@section('meta_description', $metaDescription)
@section('meta_keywords', $metaKeywords)
@section('canonical', $canonicalUrl)
@section('og_image', asset($productData['image']))

@section('schema')
    <script type="application/ld+json">
        {!! $schemas['breadcrumb'] !!}
    </script>
    <script type="application/ld+json">
        {!! $schemas['product'] !!}
    </script>
    <script type="application/ld+json">
        {!! $schemas['localBusiness'] !!}
    </script>
    <script type="application/ld+json">
        {!! $schemas['faq'] !!}
    </script>
@endsection

@section('content')
<!-- MAIN HERO SECTION -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="d-inline-flex align-items-center bg-primary bg-opacity-10 text-primary-custom px-3 py-1 rounded-pill small fw-bold mb-3">
                    <i class="fas fa-industry me-2"></i> Verified Industrial Equipment Manufacturer in {{ $cityData['name'] }}, Gujarat
                </div>
                <h1 class="display-6 fw-bold text-dark mb-3 lh-sm">
                    {{ $productData['title'] }} Manufacturer & Supplier in <span class="text-primary-custom">{{ $cityData['name'] }}, Gujarat</span>
                </h1>
                <p class="lead text-secondary fs-6 mb-4">
                    Vishwakarma Engineering is a leading manufacturer, supplier, and exporter of high-precision <strong>{{ $productData['title'] }}</strong> serving chemical, pharmaceutical, bulk drug, and process manufacturing facilities across <strong>{{ $cityData['name'] }}</strong> and {{ $cityData['district'] }} district.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#inquiry-section" class="btn btn-primary-custom px-4 py-2 fw-semibold">
                        <i class="fas fa-file-invoice me-2"></i> Request Best Price Quote
                    </a>
                    <a href="tel:+919924012425" class="btn btn-outline-dark px-4 py-2 fw-semibold">
                        <i class="fas fa-phone-alt fa-flip-horizontal me-2 text-primary"></i> Call: +91 99240 12425
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="row g-2 pt-3 border-top">
                    <div class="col-6 col-sm-3">
                        <div class="d-flex align-items-center small text-muted">
                            <i class="fas fa-check-circle text-success me-2 fs-5"></i>
                            <span>ASME & IS Standards</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="d-flex align-items-center small text-muted">
                            <i class="fas fa-shield-alt text-primary me-2 fs-5"></i>
                            <span>100% Hydro-Tested</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="d-flex align-items-center small text-muted">
                            <i class="fas fa-truck text-warning me-2 fs-5"></i>
                            <span>Fast {{ $cityData['name'] }} Delivery</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="d-flex align-items-center small text-muted">
                            <i class="fas fa-award text-info me-2 fs-5"></i>
                            <span>Custom Engineered</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="bg-light text-center p-3">
                        <img src="{{ asset($productData['image']) }}" alt="{{ $productData['title'] }} in {{ $cityData['name'] }}" class="img-fluid rounded-3" style="max-height: 340px; object-fit: contain;">
                    </div>
                    <div class="card-body p-4 bg-white">
                        <h6 class="fw-bold mb-3 text-dark"><i class="fas fa-cogs text-primary-custom me-2"></i> Quick Technical Summary</h6>
                        <ul class="list-unstyled small mb-0">
                            <li class="py-1 border-bottom d-flex justify-content-between">
                                <span class="text-muted">Capacity:</span>
                                <span class="fw-semibold text-dark">{{ $productData['capacity'] ?? '50L - 100,000L' }}</span>
                            </li>
                            <li class="py-1 border-bottom d-flex justify-content-between">
                                <span class="text-muted">Material:</span>
                                <span class="fw-semibold text-dark text-end">SS 304, SS 316, MS IS 2062</span>
                            </li>
                            <li class="py-1 border-bottom d-flex justify-content-between">
                                <span class="text-muted">Working Pressure:</span>
                                <span class="fw-semibold text-dark">{{ $productData['operating_pressure'] ?? 'Custom Specified' }}</span>
                            </li>
                            <li class="py-1 d-flex justify-content-between">
                                <span class="text-muted">Testing:</span>
                                <span class="fw-semibold text-dark">Hydrostatic, DPT & NDT</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LOCAL INDUSTRIAL CONTEXT & OVERVIEW -->
<section class="py-5 bg-light border-top">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Overview -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm mb-5">
                    <h2 class="h4 fw-bold text-dark mb-3">
                        Engineered for Industrial Facilities in {{ $cityData['name'] }} & {{ $cityData['district'] }}
                    </h2>
                    <p class="text-secondary lh-lg mb-4">
                        {{ $productData['description'] }} Vishwakarma Engineering specializes in designing, fabricating, testing, and installing robust process equipment tailored for the demanding operational requirements of companies located across <strong>{{ $zonesText }}</strong>.
                    </p>
                    <p class="text-secondary lh-lg mb-0">
                        With severe chemical exposure, rigorous safety requirements, and continuous production schedules common across <strong>{{ $industriesText }}</strong> sectors in {{ $cityData['name'] }}, our equipment is built using certified raw materials with full mill test certification (MTC) and compliant with Indian Standards (IS) and ASME Boiler & Pressure Vessel codes.
                    </p>
                </div>

                <!-- Technical Specifications Table -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm mb-5">
                    <h2 class="h4 fw-bold text-dark mb-4">
                        Technical Specifications & Material Standards
                    </h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle mb-0">
                            <tbody>
                                <tr>
                                    <th class="bg-light text-muted w-35 py-3">Equipment Name</th>
                                    <td class="py-3 fw-bold text-primary-custom">{{ $productData['title'] }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Capacity / Sizing Range</th>
                                    <td class="py-3">{{ $productData['capacity'] ?? '100 Liters to 100,000 Liters (Custom Fabricated)' }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Material of Construction (MOC)</th>
                                    <td class="py-3">{{ $productData['material_grades'] ?? 'Stainless Steel SS304, SS316, SS316L, Mild Steel IS 2062, SA 516 Gr. 70' }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Design Codes & Guidelines</th>
                                    <td class="py-3">{{ $productData['design_standards'] ?? 'ASME Section VIII Div 1, IS 2825, cGMP Norms' }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Operating Pressure Rating</th>
                                    <td class="py-3">{{ $productData['operating_pressure'] ?? 'Full Vacuum to 35 Bar / Tailored to process' }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Operating Temperature</th>
                                    <td class="py-3">{{ $productData['temperature_range'] ?? '-20°C to +350°C' }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Jacket / Thermal Options</th>
                                    <td class="py-3">{{ $productData['jacket_types'] ?? 'Limpet Coil, Dimple Jacket, Plain Jacket, Thermal Insulation' }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Quality Assurance & Testing</th>
                                    <td class="py-3">100% Hydrostatic Test, Dye Penetrant (DPT), Radiography (RT), Ultrasonic Thickness (UT), Surface Roughness Test</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-muted py-3">Surface Finish</th>
                                    <td class="py-3">Internal Mirror / Matte Polish (Up to 0.4 Ra / 240 Grit for Pharma), External High-Build Epoxy Polyurethane Coating</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Key Engineering Features -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm mb-5">
                    <h2 class="h4 fw-bold text-dark mb-4">Key Engineering Features</h2>
                    <div class="row g-3">
                        @foreach($productData['features'] as $feature)
                        <div class="col-md-6">
                            <div class="p-3 rounded-3 bg-light border d-flex align-items-start h-100">
                                <i class="fas fa-check-circle text-primary-custom mt-1 me-3 fs-5"></i>
                                <span class="fw-medium text-dark">{{ $feature }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Industrial Applications in City -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm mb-5">
                    <h2 class="h4 fw-bold text-dark mb-3">
                        Industrial Applications in {{ $cityData['name'] }}
                    </h2>
                    <p class="text-secondary mb-4">
                        Our {{ $productData['short_title'] }} units are extensively utilized across a variety of manufacturing and processing applications throughout the {{ $cityData['region'] }} industrial belt:
                    </p>
                    <div class="row g-3">
                        @foreach($productData['applications'] as $app)
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 rounded-3 border">
                                <i class="fas fa-arrow-right text-primary-custom me-2"></i>
                                <span class="text-dark fw-medium">{{ $app }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>



                <!-- FAQs Accordion -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm mb-5">
                    <h2 class="h4 fw-bold text-dark mb-4">
                        Frequently Asked Questions (FAQs) - {{ $productData['short_title'] }} in {{ $cityData['name'] }}
                    </h2>
                    <div class="accordion" id="faqAccordion">
                        @foreach($schemas['rawFaqs'] as $index => $faq)
                        <div class="accordion-item border mb-3 rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                    {{ $faq['name'] }}
                                </button>
                            </h3>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary lh-base">
                                    {{ $faq['acceptedAnswer']['text'] }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>



                <!-- Internal Semantic Links (Nearby Cities & Other Products) -->
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                    <h3 class="h5 fw-bold text-dark mb-3">Explore {{ $productData['short_title'] }} in Other Gujarat Industrial Cities</h3>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        @foreach($nearbyCities as $nearSlug => $nearData)
                        <a href="{{ url('/' . $productSlug . '-in-' . $nearSlug) }}" class="btn btn-sm btn-outline-secondary">
                            {{ $productData['short_title'] }} in {{ $nearData['name'] }}
                        </a>
                        @endforeach
                    </div>

                    <h3 class="h5 fw-bold text-dark mb-3">Other Industrial Equipment Available in {{ $cityData['name'] }}</h3>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($relatedProducts as $relSlug => $relData)
                        <a href="{{ url('/' . $relSlug . '-in-' . $citySlug) }}" class="btn btn-sm btn-outline-primary">
                            {{ $relData['short_title'] }} in {{ $cityData['name'] }}
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- SIDEBAR: INQUIRY FORM & CONTACT CARD -->
            <div class="col-lg-4">
                <div class="position-sticky" style="top: 100px;">
                    <!-- Direct Quote Card -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4" id="inquiry-section" style="background: #ffffff; border-top: 4px solid var(--primary-blue) !important;">
                        <h4 class="fw-bold text-dark mb-2">Request Best Quote</h4>
                        <p class="small text-muted mb-4">Submit your specifications for <strong>{{ $productData['short_title'] }}</strong> in {{ $cityData['name'] }}.</p>

                        @if(session('success'))
                            <div class="alert alert-success small mb-3">
                                <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger small mb-3">
                                <ul class="mb-0 ps-3">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" id="seoInquiryForm">
                            @csrf
                            <input type="hidden" name="product" value="{{ $productData['title'] }} ({{ $cityData['name'] }})">
                            <input type="hidden" name="subject" value="Quote Request: {{ $productData['short_title'] }} in {{ $cityData['name'] }}">
                            <input type="hidden" name="inquiry_type" value="SEO Landing Page - {{ $productData['title'] }} ({{ $cityData['name'] }})">
                            
                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-dark">Your Name *</label>
                                <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}" placeholder="Enter Full Name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-dark">Company / Organization *</label>
                                <input type="text" name="company" class="form-control form-control-sm" value="{{ old('company') }}" placeholder="Company Name in {{ $cityData['name'] }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-dark">Phone Number (Mobile) *</label>
                                <input type="tel" name="phone" class="form-control form-control-sm" value="{{ old('phone') }}" placeholder="e.g. +91 98765 43210" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-dark">Email Address *</label>
                                <input type="email" name="email" class="form-control form-control-sm" value="{{ old('email') }}" placeholder="name@company.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold text-dark">Required Capacity / Specifications</label>
                                <textarea name="message" rows="3" class="form-control form-control-sm" placeholder="Please mention capacity (Liters/KL), MOC (SS304/SS316/MS), operating pressure, or delivery timeline for {{ $cityData['name'] }} plant..." required>{{ old('message', "Interested in quotation for {$productData['title']} for our plant in {$cityData['name']}.") }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2 fw-semibold">
                                <i class="fas fa-paper-plane me-2"></i> Submit Inquiry Now
                            </button>
                        </form>
                    </div>

                    <!-- Direct Contact Card -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 text-white" style="background-color: var(--primary-blue);">
                        <h5 class="fw-bold mb-3"><i class="fas fa-headset text-white me-2"></i> Direct Sales Support</h5>
                        <p class="small text-white-50 mb-3">Speak directly with our senior process equipment engineers for technical sizing & pricing assistance.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt fa-flip-horizontal fs-5 me-3 text-white"></i>
                            <div>
                                <small class="text-white-50 d-block">Direct Hotline</small>
                                <a href="tel:+919924012425" class="text-white fw-bold text-decoration-none">+91 99240 12425</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope fs-5 me-3 text-white"></i>
                            <div>
                                <small class="text-white-50 d-block">Official Email</small>
                                <a href="mailto:vishwakarma.engineers.co@gmail.com" class="text-white small text-decoration-none">vishwakarma.engineers.co@gmail.com</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt fs-5 me-3 text-white mt-1"></i>
                            <div>
                                <small class="text-white-50 d-block">Manufacturing Facility</small>
                                <span class="small text-white-50">Plot No. 5639/E, Phase-II, GIDC Estate, Vatva, Ahmedabad - 382445, Gujarat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
