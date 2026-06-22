<footer class="pt-5 pb-0">
    <div class="container pt-4 pb-0">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('assets/images/logo(1).jpeg') }}" alt="VE Icon" style="height: 60px; width: auto; background: white; padding: 5px; border-radius: 4px;" class="me-3">
                    <div class="d-flex flex-column justify-content-center">
                        <span class="fw-bold fs-3 d-block lh-1 text-white" style="letter-spacing: 2px; font-family: 'Outfit', sans-serif;">VISHWAKARMA</span>
                        <small class="fw-bold text-uppercase" style="color: var(--secondary-blue); letter-spacing: 5px; font-size: 0.8rem; font-family: 'Outfit', sans-serif;">Engineering</small>
                    </div>
                </div>
                <p class="text-white-50 small pe-lg-5">Vishwakarma Engineering is a trusted manufacturer of Industrial Vessels, Reactors, Storage Tanks, ETP Equipment, and Fabricated Process Systems for Chemical, Pharmaceutical, Pigment, and Process Industries.</p>
                <div class="social-links mt-4">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="footer-title">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h6 class="footer-title">Our Products</h6>
                <ul class="footer-links">
                    <li><a href="{{ url('/products/category/industrial-vessels') }}">Industrial Vessel</a></li>
                    <li><a href="{{ url('/products/category/reactors') }}">Reactor</a></li>
                    <li><a href="{{ url('/products/category/storage-tanks') }}">Storage Tank</a></li>
                    <li><a href="{{ url('/products/category/etp-effluent-treatment') }}">ETP Equipment</a></li>
                    <li><a href="{{ url('/products/category/fabrication-structural') }}">Fabrication & Structural</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Contact Info</h6>
                <ul class="footer-links list-unstyled p-0">
                    <li class="d-flex mb-3">
                        <i class="fas fa-map-marker-alt text-white mt-1 me-3"></i>
                        <a href="https://maps.app.goo.gl/gxKWfH92DjGE7hZf8" target="_blank" class="text-white-50 small text-decoration-none">Plot No. 5639/E, Phase-II, GIDC Estate, Vatva, Ahmedabad - 382445</a>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="fas fa-phone-alt text-white mt-1 me-3" style="transform: rotate(90deg);"></i>
                        <a href="tel:+919924012425" class="text-white-50 small text-decoration-none">+91 99240 12425</a>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="fas fa-envelope text-white mt-1 me-3"></i>
                        <a href="mailto:vishwakarma.engineers.co@gmail.com" class="text-white-50 small text-decoration-none">vishwakarma.engineers.co@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="mt-5 mb-0 bg-white bg-opacity-10">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-white-50 small">&copy; 2026 Vishwakarma Engineering. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0 text-white-50 small">Engineering Excellence Through Precision Fabrication.</p>
            </div>
        </div>
    </div>
</footer>

<style>
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: rgba(255,255,255,0.05);
        color: #fff;
        border-radius: 50%;
        margin-right: 10px;
        text-decoration: none;
        transition: all 0.3s;
    }
    .social-icon:hover {
        background: var(--secondary-blue);
        color: #fff;
        transform: translateY(-3px);
    }
</style>
