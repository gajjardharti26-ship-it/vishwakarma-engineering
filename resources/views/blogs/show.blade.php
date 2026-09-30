@extends('layouts.app')

@section('title', $pageTitle ?? ($blog['title'] . ' - Vishwakarma Engineering Blogs'))
@section('meta_description', $metaDescription ?? $blog['meta_description'])
@section('meta_keywords', $metaKeywords ?? $blog['meta_keywords'])
@section('canonical', $canonicalUrl ?? url('/blogs/' . $blog['slug']))
@section('og_image', $ogImage ?? asset($blog['image']))

@section('schema')
@if(!empty($schema))
<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif
@if(!empty($blog['faqs']))
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function($faq) {
        return [
            '@type' => 'Question',
            'name' => $faq['question'] ?? '',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'] ?? ''
            ]
        ];
    }, $blog['faqs'])
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif
@endsection

@section('content')
<!-- Blog Header Banner -->
<div class="blog-header-banner position-relative text-white py-5" style="background: linear-gradient(rgba(0, 26, 51, 0.78), rgba(0, 26, 51, 0.78)), url('{{ asset($blog['banner_image'] ?? $blog['image']) }}') center/cover no-repeat;">
    <div class="container position-relative py-4" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <div class="d-inline-flex align-items-center gap-2 mb-3">
                    <span class="badge bg-white text-primary-custom px-3 py-2 rounded-pill fw-bold text-uppercase small shadow-sm">{{ $blog['category'] }}</span>
                    <span class="badge bg-secondary-custom text-white px-3 py-2 rounded-pill small"><i class="far fa-clock me-1"></i> {{ $blog['read_time'] }}</span>
                </div>
                <h1 class="display-5 fw-bold outfit text-white mb-3">{{ $blog['title'] }}</h1>
                
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 text-white text-opacity-90 small mb-3">
                    <span><i class="far fa-calendar-alt text-warning me-1"></i> Published: {{ $blog['date_formatted'] }}</span>
                    <span><i class="fas fa-user-shield text-warning me-1"></i> By {{ $blog['author'] }}</span>
                    <span><i class="fas fa-map-marker-alt text-warning me-1"></i> Ahmedabad, Gujarat</span>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-capitalize small fw-bold m-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/blogs') }}" class="text-white text-opacity-75 text-decoration-none">Blogs</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $blog['short_title'] ?? 'Technical Guide' }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="bg-white py-5">
    <div class="container py-3">
        <div class="row g-5">
            <!-- Main Blog Article Body -->
            <div class="col-lg-8">
                <article class="blog-article-content">
                    <!-- Featured Image -->
                    <div class="featured-img-container mb-4 rounded-4 overflow-hidden shadow-sm border">
                        <img src="{{ asset($blog['image']) }}" class="img-fluid w-100" alt="{{ $blog['title'] }}" style="max-height: 440px; object-fit: cover;">
                    </div>

                    <!-- Key Takeaways Box -->
                    @if(!empty($blog['key_takeaways']))
                    <div class="key-takeaways-card p-4 rounded-4 mb-5 border-start border-4 border-primary-blue bg-light">
                        <h4 class="outfit fw-bold text-primary-custom mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-secondary-blue me-2"></i> Key Engineering Highlights
                        </h4>
                        <ul class="mb-0 ps-3">
                            @foreach($blog['key_takeaways'] as $takeaway)
                            <li class="mb-2 text-dark small fw-medium">{{ $takeaway }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Detailed Content Sections -->
                    @if(!empty($blog['sections']))
                        @foreach($blog['sections'] as $section)
                        <div class="article-section mb-5">
                            <h2 class="outfit fw-bold text-primary-custom mb-3">{{ $section['heading'] }}</h2>
                            <div class="section-body text-secondary lh-lg">
                                {!! $section['content'] !!}
                            </div>
                        </div>
                        @endforeach
                    @endif

                    <!-- Engineering Capabilities Overview -->
                    <div class="my-5 p-4 rounded-4 bg-light-industrial border">
                        <h4 class="outfit fw-bold text-primary-custom mb-3">Why Trust Vishwakarma Engineering for Process Equipment?</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-certificate text-secondary-blue fa-lg mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">ASME & IS Standard Compliance</h6>
                                        <p class="x-small text-muted mb-0">Engineered to ASME Section VIII Div 1, IS 2825, and API 650 design rules.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-microscope text-secondary-blue fa-lg mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">100% Non-Destructive Testing</h6>
                                        <p class="x-small text-muted mb-0">Hydrostatic testing, Radiography (RT), Ultrasonic (UT), and DPT checks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-industry text-secondary-blue fa-lg mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">State-of-the-Art Machine Shop</h6>
                                        <p class="x-small text-muted mb-0">CNC plate rolling, dish end spinning, and automated SAW welding towers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-globe-asia text-secondary-blue fa-lg mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Global Exporter Capabilities</h6>
                                        <p class="x-small text-muted mb-0">Seaworthy packaging, nitrogen purging, and TUV/SGS third-party dossiers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    @if(!empty($blog['faqs']))
                    <div class="faq-article-section my-5">
                        <h3 class="outfit fw-bold text-primary-custom mb-4">Frequently Asked Questions</h3>
                        <div class="accordion accordion-flush" id="blogFaqAccordion">
                            @foreach($blog['faqs'] as $fIndex => $faq)
                            <div class="accordion-item border rounded-3 mb-3 overflow-hidden shadow-none">
                                <h2 class="accordion-header" id="faqHeading{{ $fIndex }}">
                                    <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $fIndex }}" aria-expanded="false" aria-controls="faqCollapse{{ $fIndex }}">
                                        <i class="fas fa-question-circle text-secondary-blue me-2"></i> {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="faqCollapse{{ $fIndex }}" class="accordion-collapse collapse" aria-labelledby="faqHeading{{ $fIndex }}" data-bs-parent="#blogFaqAccordion">
                                    <div class="accordion-body text-muted small bg-light">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Author Box & Share -->
                    <div class="p-4 rounded-4 bg-light border d-flex flex-column flex-md-row align-items-center gap-4 my-5">
                        <div class="rounded-circle bg-primary-custom text-white d-flex align-items-center justify-content-center shadow-sm flex-shrink-0" style="width: 70px; height: 70px; font-size: 1.8rem;">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="text-center text-md-start">
                            <h5 class="outfit fw-bold mb-1">{{ $blog['author'] }}</h5>
                            <p class="text-muted small mb-0">Vishwakarma Engineering is an ISO-certified heavy fabrication facility based in Ahmedabad, Gujarat, specializing in high-pressure vessels, chemical reactors, storage tanks, and ETP equipment.</p>
                        </div>
                    </div>

                    <!-- Call To Action Box -->
                    <div class="p-4 p-md-5 rounded-4 shadow-sm text-white text-center" style="background: linear-gradient(135deg, #1b3168 0%, #006cb7 100%);">
                        <h3 class="outfit fw-bold mb-3">Ready to Discuss Your Custom Fabrication Project?</h3>
                        <p class="text-white text-opacity-90 small mb-4 mx-auto" style="max-width: 600px;">Share your design specifications or process datasheets with our senior engineering team for an accurate quotation and technical review.</p>
                        <a href="{{ url('/contact') }}" class="btn btn-light px-4 py-2 rounded-pill fw-semibold text-primary-custom shadow-sm me-2" style="font-size: 0.9rem;">Request Technical Quote</a>
                        <a href="{{ url('/products') }}" class="btn btn-outline-light px-4 py-2 rounded-pill fw-semibold" style="font-size: 0.9rem;">Explore Products</a>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <aside class="blog-sidebar sticky-top" style="top: 100px; z-index: 5;">
                    <!-- Quick Search / Products Directory -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-light-industrial">
                        <h5 class="outfit fw-bold text-primary-custom mb-3">Product Categories</h5>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-2">
                                <a href="{{ url('/products/category/industrial-vessels') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center hover-blue">
                                    <span><i class="fas fa-chevron-right text-secondary-blue me-2"></i> Industrial Vessels</span>
                                    <span class="badge bg-white text-secondary-blue rounded-pill">ASME / IS</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/products/category/reactors') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center hover-blue">
                                    <span><i class="fas fa-chevron-right text-secondary-blue me-2"></i> Chemical Reactors</span>
                                    <span class="badge bg-white text-secondary-blue rounded-pill">Limpet / Jacket</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/products/category/storage-tanks') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center hover-blue">
                                    <span><i class="fas fa-chevron-right text-secondary-blue me-2"></i> Chemical Storage Tanks</span>
                                    <span class="badge bg-white text-secondary-blue rounded-pill">API 650</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/products/category/etp-effluent-treatment') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center hover-blue">
                                    <span><i class="fas fa-chevron-right text-secondary-blue me-2"></i> ETP & Wastewater Tanks</span>
                                    <span class="badge bg-white text-secondary-blue rounded-pill">ZLD</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/products/category/columns-towers') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center hover-blue">
                                    <span><i class="fas fa-chevron-right text-secondary-blue me-2"></i> Distillation Columns</span>
                                    <span class="badge bg-white text-secondary-blue rounded-pill">Ketchi</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Recent Related Articles -->
                    @if(!empty($relatedBlogs))
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white">
                        <h5 class="outfit fw-bold text-primary-custom mb-3">Related Technical Guides</h5>
                        <div class="d-flex flex-column gap-3">
                            @foreach($relatedBlogs as $rBlog)
                            <div class="d-flex align-items-center">
                                <img src="{{ asset($rBlog['image']) }}" class="rounded-3 me-3 flex-shrink-0" style="width: 75px; height: 65px; object-fit: cover;" alt="{{ $rBlog['title'] }}">
                                <div>
                                    <h6 class="small fw-bold mb-1" style="line-height: 1.3;">
                                        <a href="{{ url('/blogs/' . $rBlog['slug']) }}" class="text-decoration-none text-dark hover-blue">
                                            {{ $rBlog['short_title'] ?? $rBlog['title'] }}
                                        </a>
                                    </h6>
                                    <span class="x-small text-muted"><i class="far fa-calendar-alt me-1 text-secondary-blue"></i> {{ $rBlog['date_formatted'] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Quick Engineering Support Card -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 text-white text-center" style="background: linear-gradient(135deg, #1b3168 0%, #006cb7 100%);">
                        <div class="mb-3">
                            <i class="fas fa-headset fa-2x text-warning"></i>
                        </div>
                        <h5 class="outfit fw-bold mb-2">Technical Inquiry</h5>
                        <p class="small text-white text-opacity-80 mb-3">Speak directly with our process fabrication engineers for custom equipment design.</p>
                        <a href="tel:+919924012425" class="btn btn-outline-light btn-sm w-100 rounded-pill mb-2"><i class="fas fa-phone-alt me-1"></i> Call +91 99240 12425</a>
                        <a href="{{ url('/contact') }}" class="btn btn-light btn-sm w-100 rounded-pill text-primary-custom fw-bold"><i class="fas fa-envelope me-1"></i> Send Online Inquiry</a>
                    </div>
                </aside>
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
    .hover-blue:hover {
        color: #006cb7 !important;
    }
    .x-small {
        font-size: 0.78rem;
    }
    .blog-article-content p {
        line-height: 1.85;
        font-size: 1.02rem;
        color: #334155;
    }
    .blog-article-content ul, .blog-article-content ol {
        line-height: 1.8;
        color: #334155;
    }
    .border-primary-blue {
        border-color: #1b3168 !important;
    }
    .accordion-button:not(.collapsed) {
        color: #006cb7;
        background-color: #f0f7ff;
    }
</style>
@endpush
