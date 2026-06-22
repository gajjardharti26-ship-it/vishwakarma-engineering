@extends('layouts.app')

@section('title', 'About Us | Vishwakarma Engineering - Trusted Industrial Manufacturer Since 2007')
@section('meta_description', 'Learn about Vishwakarma Engineering, a leading manufacturer of Pressure Vessels, Chemical Reactors, Storage Tanks, and ETP Systems in Ahmedabad, serving Petrochemical, Chemical, Pigment, and Agro-Chemical industries since 2007.')

@section('content')

{{-- ===== 1. PAGE BANNER ===== --}}
<div class="page-header" style="background: url('{{ asset('assets/images/abt_banner.jpg') }}') center/cover no-repeat;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold outfit text-white mb-3">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small fw-bold m-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>

{{-- ===== 2. COMPANY INTRODUCTION ===== --}}
<section class="bg-white py-5">
    <div class="container py-3">
        <div class="row align-items-center g-5">

            {{-- Left: Image --}}
            <div class="col-lg-6 order-lg-2">
                <div class="position-relative rounded-4 overflow-hidden shadow-lg" style="height:450px;">
                    <img src="{{ asset('assets/images/about_sec.jpg') }}" class="w-100 h-100" style="object-fit:cover;" alt="Vishwakarma Engineering Pressure Vessel Manufacturing">
                    {{-- Blue left strip --}}
                    <div class="position-absolute top-0 start-0 h-100" style="width:5px;background:linear-gradient(to bottom,#00a0e9,#1b3168);z-index:2;"></div>
                </div>
            </div>

            {{-- Right: Text --}}
            <div class="col-lg-6 order-lg-1">
                <div class="section-header-badge mb-2">About Vishwakarma Engineering</div>
                <h2 class="display-6 fw-bold outfit text-dark mb-3">Engineering Excellence In Industrial <span style="color:var(--secondary-blue);">Process Equipment</span></h2>
                <p class="text-muted mb-3" style="line-height:1.7; font-size: 0.95rem;">Vishwakarma Engineering is a trusted manufacturer of Pressure Vessels, Chemical Reactors, Storage Tanks, Columns, Heat Exchangers, and ETP Systems. Based in Ahmedabad, Gujarat, we provide high-quality process equipment solutions for Petrochemical, Chemical, Pigment, Agro-Chemical, and allied industrial sectors.</p>
                <p class="text-muted mb-4" style="line-height:1.7; font-size: 0.95rem;">With advanced fabrication facilities, skilled engineers, and stringent quality control practices, we manufacture customized equipment designed for safety, durability, efficiency, and long-term operational performance. Our commitment to precision engineering and customer satisfaction has made us a preferred industrial equipment partner for clients across India.</p>



                <a href="{{ url('/contact') }}" class="btn btn-industrial-primary d-inline-flex align-items-center gap-2 py-2 px-4">
                    Get In Touch <i class="fas fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ===== 3. VISION · MISSION · VALUES ===== --}}
<section class="py-5" style="background:#f0f4f8;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <div class="section-header-badge mb-3">Our Foundation</div>
            <h2 class="display-6 fw-bold outfit" style="color:var(--primary-blue);">Vision, Mission & Core Values</h2>
            <p class="text-muted mx-auto mt-3" style="max-width:600px;">The guiding principles behind everything we engineer, fabricate, and deliver to our industrial clients.</p>
        </div>
        <div class="row g-4">
            {{-- Vision --}}
            <div class="col-lg-4">
                <div class="vmv-card h-100 p-4 bg-white rounded-4 shadow-sm text-center position-relative overflow-hidden" style="border-top:4px solid #1b3168;">
                    <div class="vmv-bg-icon position-absolute" style="top:-5px;right:-5px;font-size:5rem;opacity:0.04;color:#1b3168;"><i class="fas fa-eye"></i></div>
                    <div class="vmv-icon mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width:60px;height:60px;background:linear-gradient(135deg,#1b3168,#006cb7);">
                        <i class="fas fa-eye fa-lg text-white"></i>
                    </div>
                    <h4 class="outfit fw-bold mb-2" style="color:var(--primary-blue);">Our Vision</h4>
                    <p class="text-muted small mb-0" style="line-height:1.7;">To become a leading industrial equipment manufacturer recognized for quality, innovation, and reliable engineering solutions across Petrochemical, Chemical, Pigment, and Agro-Chemical industries.</p>
                </div>
            </div>
            {{-- Mission --}}
            <div class="col-lg-4">
                <div class="vmv-card h-100 p-4 bg-white rounded-4 shadow-sm text-center position-relative overflow-hidden" style="border-top:4px solid #006cb7;">
                    <div class="vmv-bg-icon position-absolute" style="top:-5px;right:-5px;font-size:5rem;opacity:0.04;color:#006cb7;"><i class="fas fa-bullseye"></i></div>
                    <div class="vmv-icon mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width:60px;height:60px;background:linear-gradient(135deg,#006cb7,#00a0e9);">
                        <i class="fas fa-bullseye fa-lg text-white"></i>
                    </div>
                    <h4 class="outfit fw-bold mb-2" style="color:var(--secondary-blue);">Our Mission</h4>
                    <p class="text-muted small mb-0" style="line-height:1.7;">To manufacture high-quality industrial equipment through precision engineering, advanced fabrication techniques, and a strong commitment to customer satisfaction and long-term operational reliability.</p>
                </div>
            </div>
            {{-- Values --}}
            <div class="col-lg-4">
                <div class="vmv-card h-100 p-4 bg-white rounded-4 shadow-sm text-center position-relative overflow-hidden" style="border-top:4px solid #00a0e9;">
                    <div class="vmv-bg-icon position-absolute" style="top:-5px;right:-5px;font-size:5rem;opacity:0.04;color:#00a0e9;"><i class="fas fa-gem"></i></div>
                    <div class="vmv-icon mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width:60px;height:60px;background:linear-gradient(135deg,#00a0e9,#006cb7);">
                        <i class="fas fa-gem fa-lg text-white"></i>
                    </div>
                    <h4 class="outfit fw-bold mb-2" style="color:#00a0e9;">Core Values</h4>
                    <p class="text-muted small mb-0" style="line-height:1.7;"><strong>Quality, Reliability, Integrity, Innovation,</strong> and <strong>Customer Commitment</strong> form the foundation of every project we undertake — from raw material to final dispatch.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== 4. INDUSTRIES WE SERVE ===== --}}
<section class="bg-white py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <div class="section-header-badge mb-3">Our Clientele</div>
            <h2 class="display-6 fw-bold outfit" style="color:var(--primary-blue);">Industries We Serve</h2>
            <p class="text-muted mx-auto mt-3" style="max-width:650px;">Our equipment is trusted by clients across multiple industrial sectors where safety, durability, and process efficiency are critical requirements.</p>
        </div>
        <div class="row g-4">
            @php
            $industries = [
                [
                    'icon'  => 'fa-flask',
                    'bg'    => 'linear-gradient(135deg, #1b3168, #2a4c9d)',
                    'title' => 'Chemical Industry',
                    'desc'  => 'Providing reliable reactors, vessels, storage tanks, and process equipment for chemical manufacturing and processing applications.'
                ],
                [
                    'icon'  => 'fa-palette',
                    'bg'    => 'linear-gradient(135deg, #006cb7, #0093ec)',
                    'title' => 'Pigment Industry',
                    'desc'  => 'Supplying reactors, mixing vessels, agitators, and storage tanks designed for efficient pigment, color, and specialty chemical production processes.'
                ],
                [
                    'icon'  => 'fa-leaf',
                    'bg'    => 'linear-gradient(135deg, #1b3168, #2a4c9d)',
                    'title' => 'Agro-Chemical Industry',
                    'desc'  => 'Manufacturing process equipment and storage solutions for fertilizer, pesticide, and agrochemical production facilities.'
                ],
                [
                    'icon'  => 'fa-cogs',
                    'bg'    => 'linear-gradient(135deg, #006cb7, #0093ec)',
                    'title' => 'Process Industries',
                    'desc'  => 'Delivering customized industrial equipment, ETP systems, and fabrication solutions for diverse process manufacturing applications.'
                ],
            ];
            @endphp
            @foreach($industries as $ind)
            <div class="col-lg-3 col-md-6">
                <div class="industry-card-v3 h-100 rounded-4 p-4 text-white position-relative overflow-hidden shadow-sm" style="background:{{ $ind['bg'] }}; transition: all 0.3s ease;">
                    {{-- Decorative huge icon --}}
                    <i class="fas {{ $ind['icon'] }} position-absolute" style="font-size: 8rem; right: -20px; bottom: -20px; opacity: 0.06; transform: rotate(-15deg);"></i>
                    
                    <div class="position-relative" style="z-index: 2;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-4" style="width: 56px; height: 56px; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.2);">
                            <i class="fas {{ $ind['icon'] }} fa-lg text-white"></i>
                        </div>
                        <h4 class="outfit fw-bold mb-3 fs-5">{{ $ind['title'] }}</h4>
                        <p class="small mb-0" style="color: rgba(255,255,255,0.85); line-height: 1.7;">{{ $ind['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== 5. MANUFACTURING FACILITY ===== --}}
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            {{-- Left: Image --}}
            <div class="col-lg-6">
                <div class="position-relative rounded-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/abt-new.jpg') }}" class="w-100" style="object-fit:cover; height: 500px;" alt="Manufacturing Facility">
                   
                  
                </div>
            </div>

            {{-- Right: Text --}}
            <div class="col-lg-6">
                <div>
                    <div class="section-header-badge mb-3">Manufacturing Facility</div>
                    <h2 class="display-6 fw-bold outfit mb-4" style="color:var(--primary-blue);">Advanced Infrastructure for <span style="color:var(--secondary-blue);">Industrial Fabrication</span></h2>
                    <p class="text-muted mb-4" style="line-height:1.8;">Our manufacturing facility is equipped with modern fabrication machinery, advanced welding systems, material handling equipment, and quality inspection tools. From raw material processing to final assembly and testing, every stage is managed with strict quality control to ensure reliable and high-performance industrial equipment.</p>

                  

                    <div class="row g-4 mt-2">
                        @php
                        $highlights = [
                            'Heavy Duty Plate Rolling',
                            'CNC Plasma Cutting',
                            'TIG / MIG / SAW Welding',
                            'Hydraulic Pressing',
                            'Precision Fabrication',
                            'Quality Inspection & Testing',
                        ];
                        @endphp
                        @foreach($highlights as $text)
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle" style="width:32px;height:32px;background:rgba(0,108,183,0.1);">
                                    <i class="fas fa-check" style="color:var(--secondary-blue); font-size:0.9rem;"></i>
                                </div>
                                <span class="fw-semibold" style="color:var(--dark-text); font-size:0.95rem;">{{ $text }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== 6. WHY CHOOSE US ===== --}}
<section class="py-4 position-relative" style="background: url('{{ asset('assets/images/choose.png') }}') center/cover no-repeat;">
    {{-- Dark gradient overlay --}}
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(135deg,rgba(27,49,104,0.92) 0%,rgba(0,108,183,0.88) 100%);"></div>
    
    <div class="container py-3 position-relative" style="z-index: 2;">
        <div class="text-center mb-4">
            <div class="section-header-badge mb-3" style="background: rgba(255,255,255,0.15); color: #fff;">Our Strengths</div>
            <h2 class="display-6 fw-bold outfit text-white">Why Partner With Vishwakarma Engineering?</h2>
            <p class="text-white-50 mx-auto mt-3" style="max-width: 650px;">We deliver excellence through proven expertise, rigorous quality control, and a commitment to long-term industrial performance.</p>
        </div>

        <div class="row g-4">
            @php
            $features = [
                ['icon'=>'fa-drafting-compass',  'title'=>'Precision Engineering',          'desc'=>'Every product is built to exacting specifications for safe, reliable industrial performance.'],
                ['icon'=>'fa-certificate',        'title'=>'Certified Quality Standards',    'desc'=>'Stringent quality control and testing at every stage of the manufacturing process.'],
                ['icon'=>'fa-sliders',            'title'=>'Custom Manufacturing Solutions', 'desc'=>'Fully tailored equipment designed to meet your specific process and site requirements.'],
                ['icon'=>'fa-clock',              'title'=>'On-Time Project Delivery',       'desc'=>'Disciplined project management ensures timely dispatch without quality compromise.'],
                ['icon'=>'fa-users-gear',         'title'=>'Experienced Technical Team',     'desc'=>'Skilled engineers and fabricators with decades of hands-on industrial expertise.'],
                ['icon'=>'fa-headset',            'title'=>'Technical Support & Assistance',   'desc'=>'Responsive technical guidance and assistance to help clients maintain smooth and efficient plant operations.'],
            ];
            @endphp
            @foreach($features as $f)
            <div class="col-lg-4 col-md-6">
                <div class="why-card h-100 p-3 rounded-4" style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12); backdrop-filter:blur(8px); transition:all 0.3s;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle" style="width:42px;height:42px;background:rgba(255,255,255,0.15);">
                            <i class="fas {{ $f['icon'] }} text-white"></i>
                        </div>
                        <h5 class="outfit fw-bold text-white mb-0 ms-3" style="font-size: 1.05rem;">{{ $f['title'] }}</h5>
                    </div>
                    <p class="small mb-0" style="color: rgba(255,255,255,0.7); line-height:1.7;">{{ $f['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Spacer before footer --}}
<div class="bg-white" style="height: 80px; width: 100%;"></div>

@endsection

@push('styles')
<style>
    .x-small { font-size: 0.75rem; }

    /* VMV Cards */
    .vmv-card { transition: transform 0.35s ease, box-shadow 0.35s ease; }
    .vmv-card:hover { transform: translateY(-7px); box-shadow: 0 20px 45px rgba(0,0,0,0.12) !important; }

    /* Industry Cards */
    .industry-card { transition: transform 0.35s ease, box-shadow 0.35s ease; }
    .industry-card:hover { transform: translateY(-8px); box-shadow: 0 22px 45px rgba(0,0,0,0.18) !important; }

    /* Why Cards */
    .why-card:hover { background: rgba(255,255,255,0.15) !important; transform: translateY(-3px); }

    /* Feature chips */
    .info-chip { transition: transform 0.25s; }
    .info-chip:hover { transform: translateY(-2px); }

    @media (max-width: 767px) {
        .page-header h1 { font-size: 2.2rem !important; }
    }
</style>
@endpush
