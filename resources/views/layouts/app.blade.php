<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Vishwakarma Engineering | Leading Industrial Equipment Manufacturer')</title>
    <meta name="description" content="@yield('meta_description', 'Vishwakarma Engineering is a premier manufacturer of industrial vessels, chemical reactors, storage tanks, and ETP plants.')">
    <meta name="keywords" content="@yield('meta_keywords', 'pressure vessel manufacturer in Ahmedabad, pressure vessels in Ahmedabad, storage tank manufacturer in Ahmedabad, industrial storage tanks in Ahmedabad, chemical reactor manufacturer in Ahmedabad, process equipment manufacturer in Ahmedabad, stainless steel tanks in Ahmedabad, industrial reactors in Ahmedabad, reactor vessel manufacturer in Ahmedabad, industrial pressure vessels in Ahmedabad, pressure vessel manufacturer, pressure vessels, storage tank manufacturer, industrial storage tanks, chemical reactor manufacturer, process equipment manufacturer, stainless steel tanks, industrial reactors, reactor vessel manufacturer, industrial pressure vessels')">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter & Outfit -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/images/logo(1).jpeg') }}">
    
    <style>
        :root {
            --primary-blue: #1b3168; 
            --secondary-blue: #006cb7;
            --accent-blue: #00a0e9;
            --industrial-grey: #4a5568;
            --light-grey: #f8fafc;
            --white: #ffffff;
            --dark-text: #1e293b;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-text);
            background-color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6, .outfit {
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
        }

        .bg-primary-custom { background-color: var(--primary-blue); }
        .bg-secondary-custom { background-color: var(--secondary-blue); }
        .text-primary-custom { color: var(--primary-blue); }
        .text-secondary-blue { color: var(--secondary-blue); }
        
        /* Navbar */
        .navbar {
            background-color: var(--white);
            padding: 4px 0;
            transition: var(--transition);
        }
        
        .navbar.scrolled {
            padding: 4px 0;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        /* Brand Styles */
        .brand-container {
            display: flex;
            align-items: center;
            padding: 0;
            border-radius: var(--border-radius);
            text-decoration: none !important;
        }
        .brand-icon {
            height: 75px;
            width: auto;
            background: #fff;
            padding: 2px;
            border-radius: 4px;
            margin-right: 1rem;
        }
        .brand-text-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .brand-text-main {
            color: var(--primary-blue);
            letter-spacing: 2px;
            font-family: 'Outfit', sans-serif;
            font-size: 1.6rem;
            line-height: 1;
            font-weight: 700;
        }
        .brand-text-sub {
            color: var(--secondary-blue);
               letter-spacing: 6px;
    font-size: 0.8rem;
            font-family: 'Outfit', sans-serif;
            text-transform: uppercase;
            font-weight: 700;
        }
        
        @media (max-width: 991px) {
            .brand-icon { height: 60px; }
            .brand-text-main { font-size: 1.5rem; }
            .brand-text-sub { font-size: 0.7rem; letter-spacing: 4px; }
        }

        /* Large Screen Container Override */
        @media (min-width: 1400px) {
            .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
                max-width: 1440px !important;
            }
        }

        .navbar-brand {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--primary-blue) !important;
            flex-shrink: 0;
        }

        .nav-link {
            font-weight: 600;
            color: var(--primary-blue) !important;
            padding: 8px 12px !important;
            text-transform: capitalize;
            font-size: 1.05rem;
            letter-spacing: 0.5px;
            white-space: nowrap;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--secondary-blue) !important;
        }

        /* Buttons - BLUE THEME */
        .btn-primary-custom {
            background-color: var(--primary-blue);
            color: white !important;
            border: none;
            font-weight: 700;
            padding: 12px 28px;
            border-radius: 4px;
            text-transform: capitalize;
            letter-spacing: 1px;
            transition: var(--transition);
        }

        .btn-primary-custom:hover {
            background-color: var(--secondary-blue);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 51, 102, 0.2);
        }

        .btn-secondary-custom {
            background-color: var(--secondary-blue);
            color: white !important;
            border: none;
            font-weight: 600;
            padding: 12px 28px;
            border-radius: 4px;
            transition: var(--transition);
        }

        .btn-outline-light {
            border: 2px solid white;
            color: white;
            background: transparent;
            font-weight: 600;
            padding: 11px 28px;
            border-radius: 4px;
            transition: var(--transition);
        }

        .btn-outline-light:hover {
            background: white;
            color: var(--primary-blue);
        }

        /* Carousel Overrides */
        .carousel-control-prev,
        .carousel-control-next {
            width: 10% !important;
        }
        
        .carousel-caption {
            right: 8% !important;
            left: 8% !important;
        }

        /* Footer */
        footer {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 80px 0 20px;
        }

        .footer-title {
            color: var(--white);
            font-size: 1.1rem;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background: var(--secondary-blue);
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li { margin-bottom: 12px; }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            color: var(--secondary-blue);
            padding-left: 8px;
        }

        /* Page Header Fixes */
        .page-header {
            padding: 100px 0;
            background-size: cover !important;
            background-position: center !important;
            background-attachment: fixed !important;
            position: relative;
        }
        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 26, 51, 0.8), rgba(0, 26, 51, 0.8));
            z-index: 1;
        }
        .page-header .container { position: relative; z-index: 2; }
        .page-header h1 { text-shadow: 2px 2px 10px rgba(0,0,0,0.5); color: #fff !important; }
        .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,0.5); }
        .breadcrumb-item a { transition: var(--transition); }
        .breadcrumb-item a:hover { color: var(--white) !important; opacity: 1; }

        /* Sections */
        section { padding: 80px 0; }

        .section-title h2 {
            font-weight: 700;
            color: var(--primary-blue);
            position: relative;
            padding-bottom: 15px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 4px;
            background: var(--secondary-blue);
        }

        .bg-light-industrial { background-color: #f8fafc; }
        
        /* Standard Section Header Badge */
        .section-header-badge {
            display: inline-block;
            background-color: rgba(0, 108, 183, 0.1);
            color: var(--secondary-blue);
            padding: 0.4rem 1.2rem;
            border-radius: 50rem;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 1.5px;
            margin-bottom: 1rem;
            text-transform: capitalize;
        }

        /* === STANDARDIZED SITE-WIDE BUTTONS === */
        .btn-industrial-primary {
            background-color: #006cb7 !important;
            color: #fff !important;
            border: 1.5px solid #006cb7 !important;
            border-radius: 50rem !important;
            padding: 0.6rem 2rem !important;
            font-weight: 600 !important;
            font-size: 0.95rem !important;
            text-decoration: none !important;
            transition: all 0.3s ease !important;
        }
        .btn-industrial-primary:hover {
            background-color: #1b3168 !important;
            border-color: #1b3168 !important;
            color: #fff !important;
            box-shadow: 0 4px 15px rgba(0, 108, 183, 0.3) !important;
            transform: translateY(-2px);
        }
        .btn-industrial-outline {
            background-color: transparent !important;
            color: #1b3168 !important;
            border: 1.5px solid #1b3168 !important;
            border-radius: 50rem !important;
            padding: 0.6rem 2rem !important;
            font-weight: 600 !important;
            font-size: 0.95rem !important;
            text-decoration: none !important;
            transition: all 0.3s ease !important;
        }
        .btn-industrial-outline:hover {
            background-color: #1b3168 !important;
            color: #fff !important;
            box-shadow: 0 4px 15px rgba(27, 49, 104, 0.2) !important;
            transform: translateY(-2px);
        }

        /* MEGA MENU CSS FIX */
        .mega-menu { position: static !important; }

        .mega-menu-content {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 15px 30px rgba(0,0,102,0.1);
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
            border-top: 3px solid var(--secondary-blue) !important;
            display: block !important;
        }

        .mega-menu:hover .mega-menu-content {
            visibility: visible;
            opacity: 1;
            top: 100%;
        }

        .mega-menu-title {
            color: var(--secondary-blue);
            font-weight: 700;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 12px;
            margin-bottom: 15px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .mega-menu-title i {
            color: var(--secondary-blue) !important;
        }

        .mega-menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mega-menu-list li a {
            padding: 4px 0;
            display: block;
            color: #555;
            text-decoration: none;
            font-size: 0.8rem;
            transition: color 0.2s;
        }

        .mega-menu-list li a:hover {
            color: var(--secondary-blue);
            padding-left: 5px;
        }

        /* Feature Items Hover Effect */
        .feature-item-modern {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-item-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(27, 49, 104, 0.1) !important;
        }
        .feature-item-modern::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: var(--hover-border-color, var(--secondary-blue));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .feature-item-modern:hover::after {
            transform: scaleX(1);
        }

        @media (max-width: 991.98px) {
            .navbar { border-bottom: none; }
            .mega-menu-content {
                position: static !important;
                box-shadow: none !important;
                border-top: none !important;
                padding: 0 !important;
                display: none !important;
                visibility: visible !important;
                opacity: 1 !important;
            }
            .mega-menu-content.show, .mega-menu.show .mega-menu-content {
                display: block !important;
                padding: 1rem 0 !important;
            }
            .navbar-collapse {
                max-height: 75vh;
                overflow-y: auto;
                background-color: var(--white);
                padding-bottom: 20px;
            }
        }
    </style>
    @stack('styles')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M0TK82ER25"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-M0TK82ER25');
    </script>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onscroll = function() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.querySelector(".navbar").classList.add("scrolled");
                document.querySelector(".navbar").classList.add("fixed-top");
            } else {
                document.querySelector(".navbar").classList.remove("scrolled");
                document.querySelector(".navbar").classList.remove("fixed-top");
            }
        };
    </script>
    @stack('scripts')
</body>
</html>
