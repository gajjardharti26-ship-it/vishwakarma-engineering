@extends('layouts.app')

@section('title', 'Gallery - Vishwakarma Engineering')
@section('meta_description', 'View the photo gallery of industrial equipment, pressure vessels, and chemical reactors manufactured by Vishwakarma Engineering in Ahmedabad.')
@section('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad')
@section('content')
<!-- Page Header -->
<div class="page-header" style="background: url('{{ asset('assets/images/unsplash-photo-1518152006812-edab29b069ac.jpg') }}')">
    <div class="container text-center">
        <h1 class="display-4 fw-bold outfit text-white">Photo Gallery</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-capitalize small m-0 fw-bold">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-opacity-75 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container py-4">
        <div class="row g-4 mt-4">
            <!-- Gallery Item 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item rounded overflow-hidden shadow-sm position-relative">
                    <img src="{{ asset('assets/images/unsplash-photo-1590959651373-a3db0f38a961.jpg') }}" class="img-fluid w-100" alt="Gallery 1">
                    <div class="gallery-overlay d-flex align-items-center justify-content-center">
                        <a href="{{ asset('assets/images/unsplash-photo-1590959651373-a3db0f38a961.jpg') }}" target="_blank" class="btn btn-light rounded-circle"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <p class="mt-2 fw-bold text-center outfit">Jacketed SS Vessel</p>
            </div>
            <!-- Gallery Item 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item rounded overflow-hidden shadow-sm position-relative">
                    <img src="{{ asset('assets/images/unsplash-photo-1581091226825-a6a2a5aee158.jpg') }}" class="img-fluid w-100" alt="Gallery 2">
                    <div class="gallery-overlay d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light rounded-circle"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <p class="mt-2 fw-bold text-center outfit">Manufacturing Floor</p>
            </div>
            <!-- Gallery Item 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item rounded overflow-hidden shadow-sm position-relative">
                    <img src="{{ asset('assets/images/unsplash-photo-1565514020179-026b92b84bb6.jpg') }}" class="img-fluid w-100" alt="Gallery 3">
                    <div class="gallery-overlay d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light rounded-circle"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <p class="mt-2 fw-bold text-center outfit">Heavy Structural Base</p>
            </div>
            <!-- Gallery Item 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item rounded overflow-hidden shadow-sm position-relative">
                    <img src="{{ asset('assets/images/unsplash-photo-1581092160562-40aa08e78837.jpg') }}" class="img-fluid w-100" alt="Gallery 4">
                    <div class="gallery-overlay d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light rounded-circle"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <p class="mt-2 fw-bold text-center outfit">Reactor Assembly</p>
            </div>
            <!-- Gallery Item 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item rounded overflow-hidden shadow-sm position-relative">
                    <img src="{{ asset('assets/images/unsplash-photo-1504328345606-18bbc8c9d7d1.jpg') }}" class="img-fluid w-100" alt="Gallery 5">
                    <div class="gallery-overlay d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light rounded-circle"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <p class="mt-2 fw-bold text-center outfit">ETP Tank Setup</p>
            </div>
            <!-- Gallery Item 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item rounded overflow-hidden shadow-sm position-relative">
                    <img src="{{ asset('assets/images/vessal.jpg') }}" class="img-fluid w-100" alt="Gallery 6">
                    <div class="gallery-overlay d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-light rounded-circle"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
                <p class="mt-2 fw-bold text-center outfit">Precision Welding</p>
            </div>
        </div>
    </div>
</section>

<style>
    .gallery-item {
        height: 300px;
    }
    .gallery-item img {
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .gallery-item:hover img {
        transform: scale(1.1);
    }
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 51, 102, 0.7);
        opacity: 0;
        transition: var(--transition);
    }
    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }
</style>
@endsection
