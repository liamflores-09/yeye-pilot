<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="#000000">
    <title>Yeyeniya • Professional Magic Chess Pilot</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: #000000;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* IMPORTANT: Fix for fixed navbar - add padding to body */
        body {
            padding-top: 70px;
        }
        
        @media (min-width: 768px) {
            body {
                padding-top: 85px;
            }
        }
        
        @media (min-width: 992px) {
            body {
                padding-top: 95px;
            }
        }
        
        /* Typography - Responsive */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 800;
            letter-spacing: -0.02em;
            word-wrap: break-word;
        }
        
        /* Navigation - Mobile First */
        .navbar {
            background: #ffffff;
            padding: 1rem 0;
            border-bottom: 2px solid #000000;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-brand {
            font-weight: 900;
            font-size: 1.3rem;
            letter-spacing: -0.02em;
            color: #000000 !important;
        }
        
        .navbar-toggler {
            border: 2px solid #000000;
            border-radius: 0;
            padding: 0.5rem 0.75rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .nav-link {
            font-weight: 600;
            color: #000000 !important;
            margin: 0.5rem 0;
            transition: opacity 0.3s;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            padding: 0.5rem 0;
        }
        
        @media (min-width: 992px) {
            .navbar {
                padding: 1.5rem 0;
            }
            
            .navbar-brand {
                font-size: 1.8rem;
            }
            
            .nav-link {
                margin: 0 0.5rem;
                padding: 0.5rem 0;
            }
            
            .nav-link:hover {
                opacity: 0.5;
            }
        }
        
        /* Remove the old main margin-top since we're using body padding */
        main {
            display: block;
        }
        
        /* Hero Section - Remove extra padding since body handles it */
        .hero {
            min-height: auto;
            display: flex;
            align-items: center;
            padding: 2rem 0;
            background: #ffffff;
        }
        
        @media (min-width: 768px) {
            .hero {
                min-height: auto;
                padding: 2rem 0;
            }
        }
        
        .hero-title {
            font-size: 2.5rem;
            font-weight: 900;
            line-height: 1.2;
            margin-bottom: 1rem;
            letter-spacing: -0.03em;
        }
        
        .hero-subtitle {
            font-size: 1rem;
            font-weight: 400;
            color: #666666;
            margin-bottom: 1.5rem;
            max-width: 100%;
        }
        
        @media (min-width: 576px) {
            .hero-title {
                font-size: 3rem;
            }
        }
        
        @media (min-width: 768px) {
            .hero-title {
                font-size: 4rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
                margin-bottom: 2rem;
            }
        }
        
        @media (min-width: 992px) {
            .hero-title {
                font-size: 5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
                max-width: 600px;
            }
        }
        
        /* Buttons - Responsive */
        .btn-primary-custom {
            background: #000000;
            color: #ffffff;
            border: 2px solid #000000;
            padding: 10px 24px;
            font-weight: 700;
            letter-spacing: 1px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            font-size: 0.9rem;
            text-align: center;
        }
        
        .btn-outline-custom {
            background: transparent;
            color: #000000;
            border: 2px solid #000000;
            padding: 10px 24px;
            font-weight: 700;
            letter-spacing: 1px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            font-size: 0.9rem;
            text-align: center;
        }
        
        @media (min-width: 768px) {
            .btn-primary-custom, .btn-outline-custom {
                padding: 12px 32px;
                font-size: 1rem;
            }
        }
        
        .btn-primary-custom:hover {
            background: #ffffff;
            color: #000000;
        }
        
        .btn-outline-custom:hover {
            background: #000000;
            color: #ffffff;
        }
        
        /* Cards - Responsive Grid */
        .card-clean {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            padding: 1.5rem;
            transition: all 0.3s;
            height: 100%;
        }
        
        @media (min-width: 768px) {
            .card-clean {
                padding: 2rem;
            }
        }
        
        .card-clean:hover {
            border-color: #000000;
            transform: translateY(-5px);
        }
        
        /* Stats - Responsive */
        .stat-number {
            font-size: 2rem;
            font-weight: 900;
            color: #000000;
            line-height: 1;
        }
        
        .stat-label {
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            color: #666666;
            margin-top: 0.5rem;
        }
        
        @media (min-width: 576px) {
            .stat-number {
                font-size: 2.5rem;
            }
        }
        
        @media (min-width: 768px) {
            .stat-number {
                font-size: 3rem;
            }
            
            .stat-label {
                font-size: 0.8rem;
            }
        }
        
        @media (min-width: 992px) {
            .stat-number {
                font-size: 3.5rem;
            }
        }
        
        /* Section Headers - Responsive */
        .section-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }
        
        .section-subtitle {
            color: #666666;
            font-size: 0.9rem;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        @media (min-width: 576px) {
            .section-title {
                font-size: 2rem;
            }
        }
        
        @media (min-width: 768px) {
            .section-header {
                margin-bottom: 3rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
                max-width: 600px;
            }
        }
        
        @media (min-width: 992px) {
            .section-title {
                font-size: 2.5rem;
            }
        }
        
        /* Synergy Cards - Responsive */
        .synergy-card {
            border: 1px solid #e0e0e0;
            padding: 1.2rem;
            background: #ffffff;
            transition: all 0.3s;
            height: 100%;
        }
        
        @media (min-width: 768px) {
            .synergy-card {
                padding: 1.5rem;
            }
        }
        
        .synergy-card:hover {
            border-color: #000000;
        }
        
        .tier-badge {
            font-size: 0.65rem;
            font-weight: 800;
            letter-spacing: 1px;
            padding: 3px 8px;
            border: 1px solid #000000;
            display: inline-block;
        }
        
        /* Pricing Cards - Responsive */
        .pricing-card {
            border: 1px solid #e0e0e0;
            padding: 1.5rem;
            text-align: center;
            background: #ffffff;
            transition: all 0.3s;
            height: 100%;
        }
        
        .pricing-card.featured {
            border: 2px solid #000000;
            transform: scale(1);
        }
        
        .price {
            font-size: 2rem;
            font-weight: 900;
            margin: 0.75rem 0;
        }
        
        @media (min-width: 576px) {
            .pricing-card {
                padding: 1.8rem;
            }
            
            .price {
                font-size: 2.5rem;
            }
        }
        
        @media (min-width: 768px) {
            .pricing-card.featured {
                transform: scale(1.02);
            }
            
            .price {
                font-size: 3rem;
            }
        }
        
        /* Testimonials - Responsive */
        .testimonial {
            border-left: 3px solid #000000;
            padding: 1.2rem;
            background: #fafafa;
            height: 100%;
        }
        
        @media (min-width: 768px) {
            .testimonial {
                padding: 1.5rem;
            }
        }
        
        /* Gallery - Responsive Grid */
        .gallery-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        
        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            filter: grayscale(100%);
            transition: all 0.5s;
        }
        
        @media (min-width: 576px) {
            .gallery-item img {
                height: 220px;
            }
        }
        
        @media (min-width: 768px) {
            .gallery-item img {
                height: 250px;
            }
        }
        
        .gallery-item:hover img {
            filter: grayscale(0%);
            transform: scale(1.05);
        }
        
        /* FAQ Accordion - Responsive */
        .accordion-button {
            background: #ffffff;
            color: #000000;
            font-weight: 700;
            border: none;
            box-shadow: none;
            font-size: 0.9rem;
            padding: 1rem;
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: #000000;
        }
        
        .accordion-button:not(.collapsed) {
            background: #000000;
            color: #ffffff;
        }
        
        .accordion-item {
            border: 1px solid #e0e0e0;
            margin-bottom: 1rem;
        }
        
        .accordion-body {
            padding: 1rem;
            font-size: 0.9rem;
        }
        
        @media (min-width: 768px) {
            .accordion-button {
                font-size: 1rem;
                padding: 1.2rem;
            }
            
            .accordion-body {
                padding: 1.2rem;
                font-size: 1rem;
            }
        }
        
        /* Footer - Responsive */
        .footer {
            background: #000000;
            color: #ffffff;
            padding: 3rem 0 1.5rem;
            margin-top: 3rem;
        }
        
        .footer h3 {
            font-size: 1.5rem;
        }
        
        .footer h6 {
            font-size: 0.9rem;
        }
        
        .footer a {
            color: #ffffff;
            text-decoration: none;
            transition: opacity 0.3s;
            font-size: 0.85rem;
        }
        
        @media (min-width: 768px) {
            .footer {
                padding: 4rem 0 2rem;
                margin-top: 4rem;
            }
            
            .footer h3 {
                font-size: 1.8rem;
            }
            
            .footer a {
                font-size: 0.9rem;
            }
        }
        
        /* Form Elements - Responsive */
        .form-control, .form-select {
            border-radius: 0;
            border: 1px solid #e0e0e0;
            padding: 0.6rem 0.8rem;
            font-size: 0.9rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #000000;
            box-shadow: none;
        }
        
        @media (min-width: 768px) {
            .form-control, .form-select {
                padding: 0.7rem 1rem;
                font-size: 1rem;
            }
        }
        
        /* Utility Classes - Responsive */
        .border-bottom-black {
            border-bottom: 2px solid #000000;
        }
        
        .text-muted-dark {
            color: #666666;
        }
        
        .bg-black {
            background: #000000;
        }
        
        .bg-white-smoke {
            background: #fafafa;
        }
        
        /* Container padding for mobile */
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        @media (min-width: 576px) {
            .container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        
        @media (min-width: 768px) {
            .container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
        
        /* Animations */
        .fade-up {
            animation: fadeUp 0.8s ease-out;
        }
        
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        hr {
            border-top: 1px solid #e0e0e0;
        }
        
        /* Row gutter adjustments for mobile */
        .row {
            --bs-gutter-x: 1rem;
        }
        
        @media (min-width: 768px) {
            .row {
                --bs-gutter-x: 1.5rem;
            }
        }
        
        /* Image responsiveness */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Touch-friendly buttons for mobile */
        @media (max-width: 768px) {
            .btn-primary-custom, .btn-outline-custom {
                width: 100%;
                margin-bottom: 0.5rem;
            }
            
            .me-3 {
                margin-right: 0 !important;
                margin-bottom: 1rem;
            }
        }
        
        @media (min-width: 769px) {
            .me-3 {
                margin-right: 1rem !important;
                margin-bottom: 0;
            }
        }
        
        /* Table responsiveness */
        .table-responsive-custom {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        /* Better spacing for sections on mobile */
        section {
            padding: 3rem 0;
        }
        
        @media (min-width: 768px) {
            section {
                padding: 4rem 0;
            }
        }
        
        @media (min-width: 992px) {
            section {
                padding: 5rem 0;
            }
        }
        
        /* Fix for first section after navbar */
        section:first-of-type {
            padding-top: 1rem;
        }
        
        @media (min-width: 768px) {
            section:first-of-type {
                padding-top: 2rem;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">YEYENIYA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('synergies') }}">SYNERGIES</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('commanders') }}">COMMANDERS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">PRICING</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">GALLERY</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h3 class="fw-bold mb-3">YEYENIYA</h3>
                <p class="text-white-50 small">Professional Magic Chess Go Go pilot service. One player, guaranteed results.</p>
            </div>
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <h6 class="fw-bold mb-3">QUICK LINKS</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}">Home</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}">About</a></li>
                    <li class="mb-2"><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h6 class="fw-bold mb-3">CONTACT</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fab fa-discord me-2"></i> Yeyeniya#1234</li>
                    <li class="mb-2"><i class="fab fa-whatsapp me-2"></i> +1 234 567 8900</li>
                    <li class="mb-2"><i class="far fa-clock me-2"></i> 24/7 Response</li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h6 class="fw-bold mb-3">FOLLOW</h6>
                <div>
                    <a href="#" class="me-3"><i class="fab fa-discord fa-xl"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-twitter fa-xl"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-instagram fa-xl"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-4 bg-white-50">
        <div class="text-center mt-4">
            <p class="mb-0 text-white-50 small">&copy; 2024 YEYENIYA. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Counter animation
    const counters = document.querySelectorAll('.stat-number');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        let current = 0;
        const increment = target / 50;
        const updateCounter = () => {
            if(current < target) {
                current += increment;
                counter.innerText = Math.ceil(current);
                setTimeout(updateCounter, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCounter();
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    });
    
    document.querySelectorAll('.stat-number').forEach(counter => {
        observer.observe(counter);
    });
    
    // Smooth scroll for mobile
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if(target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
    
    // Close mobile menu after clicking a link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                document.querySelector('.navbar-toggler').click();
            }
        });
    });
</script>

@stack('scripts')

</body>
</html>