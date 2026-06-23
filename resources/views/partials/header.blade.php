<header>
    <!-- Top Bar -->
    <div class="bg-primary-custom text-white py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <small>
                        <i class="fas fa-envelope me-2 text-white"></i> <a href="mailto:vishwakarma.engineers.co@gmail.com" class="text-white text-decoration-none">vishwakarma.engineers.co@gmail.com</a>
                        <span class="ms-3"><i class="fas fa-phone me-2 text-white"></i> <a href="tel:+919924012425" class="text-white text-decoration-none">+91 99240 12425</a></span>
                    </small>
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-links">
                        <a href="#" class="text-white me-3 small"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3 small"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3 small"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white small"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container px-3 px-lg-0">
            <a class="navbar-brand brand-container" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo(1).jpeg') }}" alt="VE Icon" class="brand-icon">
                <div class="brand-text-wrapper">
                    <span class="brand-text-main">VISHWAKARMA</span>
                    <small class="brand-text-sub">Engineering</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
                    </li>
                    
                    <!-- Full Mega Menu -->
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu mega-menu-content p-4 border-0 rounded-0">
                            <div class="container-fluid">
                                <div class="row g-4">
                                    <!-- Column 1: Vessel & Reactor -->
                                    <div class="col-lg-3">
                                        <h6 class="mega-menu-title"><a href="{{ url('/products/category/industrial-vessels') }}" class="text-decoration-none text-inherit"><i class="fas fa-flask me-2"></i> Industrial Vessel</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/jacketed-vessel') }}">Jacketed Vessel (MS / SS)</a></li>
                                            <li><a href="{{ url('/products/pressure-vessel') }}">Pressure Vessel (MS / SS)</a></li>
                                            <li><a href="{{ url('/products/mixing-vessel') }}">Mixing Vessel</a></li>
                                            <li><a href="{{ url('/products/movable-vessel') }}">Movable Vessel</a></li>
                                            <li><a href="{{ url('/products/hydraulic-movable-vessel') }}">Hydraulic Movable Vessel</a></li>
                                            <li><a href="{{ url('/products/limpet-coil-vessel') }}">Limpet Coil Vessel</a></li>
                                        </ul>
                                        <h6 class="mega-menu-title mt-4"><a href="{{ url('/products/category/reactors') }}" class="text-decoration-none text-inherit"><i class="fas fa-atom me-2 text-primary-custom"></i> Reactor</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/ms-reactor') }}">MS Reactor</a></li>
                                            <li><a href="{{ url('/products/ss-reactor') }}">SS Reactor</a></li>
                                            <li><a href="{{ url('/products/ms-ss-reactor') }}">MS + SS Reactor</a></li>
                                            <li><a href="{{ url('/products/reactor-gearbox') }}">Reactor with Gear Box</a></li>
                                        </ul>
                                    </div>
                                    <!-- Column 2: Tank & Column -->
                                    <div class="col-lg-3">
                                        <h6 class="mega-menu-title"><a href="{{ url('/products/category/storage-tanks') }}" class="text-decoration-none text-inherit"><i class="fas fa-database me-2 text-primary-custom"></i> Storage Tank</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/ms-storage-tank') }}">MS Storage Tank</a></li>
                                            <li><a href="{{ url('/products/ss-storage-tank') }}">SS Storage Tank</a></li>
                                            <li><a href="{{ url('/products/chemical-storage-tank') }}">Chemical Storage Tank</a></li>
                                            <li><a href="{{ url('/products/raw-material-tank') }}">Raw Material Storage Tank</a></li>
                                        </ul>
                                        <h6 class="mega-menu-title mt-4"><a href="{{ url('/products/category/columns-towers') }}" class="text-decoration-none text-inherit"><i class="fas fa-tower-observation me-2 text-primary-custom"></i> Column & Tower</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/ms-ketchi-column') }}">MS Ketchi Column</a></li>
                                            <li><a href="{{ url('/products/ss-ketchi-column') }}">SS Ketchi Column</a></li>

                                            <li><a href="{{ url('/products/column-structure') }}">Column Structure & Platform</a></li>
                                        </ul>
                                    </div>
                                    <!-- Column 3: Agitation & ETP -->
                                    <div class="col-lg-3">
                                        <h6 class="mega-menu-title"><a href="{{ url('/products/category/agitation-mixing') }}" class="text-decoration-none text-inherit"><i class="fas fa-sync me-2 text-primary-custom"></i> Agitation & Mixing</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/ms-stirrer') }}">MS Stirrer</a></li>
                                            <li><a href="{{ url('/products/ss-stirrer') }}">SS Stirrer</a></li>
                                            <li><a href="{{ url('/products/gear-stirrer-assembly') }}">Gear Structure & Stirrer Assembly</a></li>
                                            <li><a href="{{ url('/products/mixing-assemblies') }}">Mixing Assembly</a></li>
                                        </ul>
                                        <h6 class="mega-menu-title mt-4"><a href="{{ url('/products/category/etp-effluent-treatment') }}" class="text-decoration-none text-inherit"><i class="fas fa-water me-2 text-primary-custom"></i> ETP – Effluent Treatment</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/complete-etp-plant') }}">Complete ETP Plant</a></li>
                                            <li><a href="{{ url('/products/primary-settling-tank') }}">Primary Settling Tank</a></li>
                                            <li><a href="{{ url('/products/secondary-treatment-tank') }}">Secondary Treatment Tank</a></li>
                                            <li><a href="{{ url('/products/holding-tank') }}">Holding Tank</a></li>
                                            <li><a href="{{ url('/products/sand-filter') }}">Sand Filter</a></li>
                                            <li><a href="{{ url('/products/carbon-filter') }}">Carbon Filter</a></li>
                                        </ul>
                                    </div>
                                    <!-- Column 4: Fabrication & Assembly -->
                                    <div class="col-lg-3">
                                        <h6 class="mega-menu-title"><a href="{{ url('/products/category/fabrication-structural') }}" class="text-decoration-none text-inherit"><i class="fas fa-tools me-2 text-primary-custom"></i> Fabrication & Structural</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/pipeline-work') }}">MS / SS Pipeline Work</a></li>
                                            <li><a href="{{ url('/products/structural-fabrication') }}">Structural Fabrication</a></li>
                                            <li><a href="{{ url('/products/platform-support') }}">Platform & Support Structure</a></li>
                                            <li><a href="{{ url('/products/gear-structure-fab') }}">Gear Structure Fabrication</a></li>
                                        </ul>
                                        <h6 class="mega-menu-title mt-4"><a href="{{ url('/products/category/assemblies-special') }}" class="text-decoration-none text-inherit"><i class="fas fa-cogs me-2 text-primary-custom"></i> Assembly & Special</a></h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ url('/products/gear-assembly') }}">Gear Assembly</a></li>
                                            <li><a href="{{ url('/products/structural-assembly') }}">Structural Assembly</a></li>
                                            <li><a href="{{ url('/products/customized-equipment') }}">Customized Industrial Equipment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('projects') ? 'active' : '' }}" href="{{ url('/projects') }}">Projects</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-lg-2 ps-lg-3">
                        <a class="nav-link btn btn-industrial-primary text-white px-4 rounded-pill {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}" style="color: white !important;">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
