@extends('layouts.app')

@section('title', 'Contact Us | Vishwakarma Engineering - Industrial Equipment Manufacturers')
@section('meta_description', 'Contact Vishwakarma Engineering for high-quality industrial vessels, reactors, and storage tanks. Located in Ahmedabad, India. Get a customized quote today.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: url('{{ asset('assets/images/vessal.jpg') }}');">
    <div class="container text-center">
        <h1 class="display-4 fw-bold outfit text-white">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small m-0 fw-bold">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="pe-lg-5">
                    <div class="section-header-badge">Get In Touch</div>
                    <h2 class="mb-4 outfit">Let's Discuss Your Requirements</h2>
                    <p class="mb-4">Looking for Industrial Vessels, Reactors, Storage Tanks, ETP Equipment, or Fabrication Solutions? Contact our team to discuss your project requirements and receive expert engineering support.</p>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-light rounded" style="width: 65px; height: 65px;">
                            <i class="fas fa-map-marker-alt fa-2x text-secondary-blue"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="outfit mb-1">Our Location</h5>
                            <p class="text-muted mb-0"><a href="https://maps.app.goo.gl/gxKWfH92DjGE7hZf8" target="_blank" class="text-muted text-decoration-none">Plot No. 5639/E, Phase-II, GIDC Estate, Vatva, Ahmedabad - 382445, Gujarat, India</a></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-light rounded" style="width: 65px; height: 65px;">
                            <i class="fas fa-phone-alt fa-2x text-secondary-blue" style="transform: rotate(90deg);"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="outfit mb-1">Phone Number</h5>
                            <p class="text-muted mb-0"><a href="tel:+919924012425" class="text-muted text-decoration-none">+91 99240 12425</a>, <a href="tel:+918320749162" class="text-muted text-decoration-none">+91 83207 49162</a></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-light rounded" style="width: 65px; height: 65px;">
                            <i class="fas fa-envelope fa-2x text-secondary-blue"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="outfit mb-1">Email Address</h5>
                            <p class="text-muted mb-0"><a href="mailto:vishwakarma.engineers.co@gmail.com" class="text-muted text-decoration-none">vishwakarma.engineers.co@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="outfit mb-3">Connect With Us</h5>
                        <div class="social-links">
                            <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-outline-secondary"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card p-5 border-0 shadow-sm" style="background-color: #fcfcfc;">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ url('/contact/send') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control p-3 bg-light border-0 rounded-3" placeholder="Enter Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control p-3 bg-light border-0 rounded-3" placeholder="Enter Email Address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="phone" class="form-control p-3 bg-light border-0 rounded-3" placeholder="Enter Phone Number" required>
                            </div>
                            <div class="col-md-6">
                                <select name="product" class="form-select p-3 bg-light border-0 rounded-3" required>
                                    <option value="" selected disabled>Select Product Category</option>
                                    <option value="Industrial Vessel">Industrial Vessel</option>
                                    <option value="Reactor">Reactor</option>
                                    <option value="Storage Tank">Storage Tank</option>
                                    <option value="Column & Tower">Column & Tower</option>
                                    <option value="Agitation & Mixing">Agitation & Mixing</option>
                                    <option value="ETP – Effluent Treatment">ETP – Effluent Treatment</option>
                                    <option value="Fabrication & Structural">Fabrication & Structural</option>
                                    <option value="Assembly & Special">Assembly & Special</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control p-3 bg-light border-0 rounded-3" placeholder="Project Requirement" required>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control p-3 bg-light border-0 rounded-3" rows="5" placeholder="Describe your requirement, equipment specifications, capacity, material (MS/SS), or project details..." required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary-custom px-5 py-2 mt-2 fw-bold" style="letter-spacing: 1px;">Request a Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="p-0">
    <div class="ratio ratio-21x9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3492.005230159599!2d72.63327122508983!3d22.958296879218825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e879daf978cf7%3A0x72c4ec9216401aad!2sVishwakarma%20Engineering!5e1!3m2!1sen!2sin!4v1782145680681!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Auto-dismiss all alerts after 5 seconds
        setTimeout(function () {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                // Use Bootstrap 5 fade class nicely
                alert.classList.remove('show');
                setTimeout(() => alert.remove(), 150); // wait for fade animation
            });
        }, 5000);
    });
</script>
@endsection
