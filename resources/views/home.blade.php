<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Yeyeniya | Pilot Service</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}">

    <!-- Google Fonts - Professional Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: #1a1a1a;
            padding-top: 80px;
        }

        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }
        }

        /* ===== NAVIGATION ===== */
        .navbar {
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            border-bottom: 1px solid #eaeaea;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: -0.3px;
            color: #1a1a1a !important;
        }

        .nav-link {
            font-weight: 500;
            color: #4a4a4a !important;
            margin: 0 8px;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .nav-link:hover {
            color: #000000 !important;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.3rem;
            }

            .nav-link {
                margin: 0.5rem 0;
            }
        }

        /* ===== BUTTONS ===== */
        .btn-primary-custom {
            background: #1a1a1a;
            color: #ffffff;
            border: 1px solid #1a1a1a;
            padding: 12px 32px;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-block;
            text-decoration: none;
            font-size: 0.9rem;
            border-radius: 8px;
        }

        .btn-primary-custom:hover {
            background: #ffffff;
            color: #1a1a1a;
        }

        .btn-outline-custom {
            background: transparent;
            color: #1a1a1a;
            border: 1px solid #1a1a1a;
            padding: 12px 32px;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-block;
            text-decoration: none;
            font-size: 0.9rem;
            border-radius: 8px;
        }

        .btn-outline-custom:hover {
            background: #1a1a1a;
            color: #ffffff;
        }

        @media (max-width: 768px) {

            .btn-primary-custom,
            .btn-outline-custom {
                padding: 10px 24px;
                font-size: 0.85rem;
                width: 100%;
                text-align: center;
            }
        }

        /* ===== HERO SECTION ===== */
        .hero {
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: #ffffff;
            padding: 60px 0;
        }

        .hero-title {
            font-weight: 800;
            font-size: 4rem;
            letter-spacing: -1px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            font-weight: 400;
            color: #666666;
            margin-bottom: 30px;
            max-width: 600px;
            line-height: 1.6;
        }

        .hero-badge {
            background: #f0f0f0;
            color: #1a1a1a;
            padding: 6px 16px;
            display: inline-block;
            font-weight: 500;
            font-size: 0.75rem;
            margin-bottom: 25px;
            border-radius: 50px;
        }

        /* ===== HERO IMAGE ===== */
        .hero-image-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .hero-image {
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .hero-image-default {
            position: relative;
            z-index: 1;
        }

        .hero-image-hover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            opacity: 0;
        }

        /* Hover effect - swap images */
        .hero-image-wrapper:hover .hero-image-default {
            opacity: 0;
        }

        .hero-image-wrapper:hover .hero-image-hover {
            opacity: 1;
        }

        /* Hover effect - scale */
        .hero-image-wrapper:hover .hero-image {
            transform: scale(1.02);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-image {
                max-width: 80%;
                margin-top: 20px;
            }

            .hero-image-wrapper {
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: auto;
                padding: 40px 0;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }
        }

        /* ===== PROFILE CARD ===== */
        .profile-card {
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid #eaeaea;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
        }

        .cover-photo {
            width: 100%;
            height: 180px;
            overflow: hidden;
            background: linear-gradient(135deg, #1a1a1a 0%, #333333 100%);
        }

        .cover-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-content {
            padding: 0 30px 30px 30px;
            position: relative;
        }

        .profile-picture-wrapper {
            display: flex;
            justify-content: center;
            margin-top: -60px;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ffffff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background: #f8f8f8;
        }

        .profile-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.3px;
        }

        .profile-location {
            color: #666666;
            font-size: 0.95rem;
            margin-bottom: 25px;
        }

        /* Achievements Section */
        .achievements-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
        }

        .achievements-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: 1px;
            color: #1a1a1a;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .achievement-category {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 16px;
        }

        .category-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1a1a1a;
            padding-bottom: 10px;
            border-bottom: 2px solid #eaeaea;
        }

        .achievement-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .achievement-list li {
            padding: 8px 0;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.85rem;
            color: #555555;
            line-height: 1.5;
        }

        .achievement-list li i {
            width: 20px;
            color: #1a1a1a;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .profile-content {
                padding: 0 20px 20px 20px;
            }

            .profile-picture {
                width: 90px;
                height: 90px;
                margin-top: -45px;
            }

            .profile-name {
                font-size: 1.4rem;
            }

            .achievements-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .cover-photo {
                height: 120px;
            }

            .achievement-category {
                padding: 15px;
            }
        }

        /* ===== SECTION STYLES ===== */
        .section {
            padding: 80px 0;
        }

        .section-dark {
            background: #f8f8f8;
        }

        .section-light {
            background: #ffffff;
        }

        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            letter-spacing: -0.5px;
            margin-bottom: 50px;
            text-align: center;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #1a1a1a;
            margin: 15px auto 0;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .section {
                padding: 50px 0;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        /* ===== CARDS ===== */
        .card-custom {
            background: #ffffff;
            border: 1px solid #eaeaea;
            padding: 30px 25px;
            transition: all 0.3s;
            height: 100%;
            text-align: center;
            border-radius: 16px;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-color: #d0d0d0;
        }

        .card-icon {
            font-size: 42px;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .card-custom h3 {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 12px;
        }

        .card-custom p {
            color: #666666;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* ===== MARQUEE SECTION ===== */
        .marquee-wrapper {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            background: #1a1a1a;
            padding: 20px 0;
        }

        .marquee-text {
            display: inline-block;
            animation: marquee 15s linear infinite;
        }

        .marquee-text span {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: #ffffff;
            display: inline-block;
            padding-right: 50px;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Hover pause effect */
        .marquee-wrapper:hover .marquee-text {
            animation-play-state: paused;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .marquee-text span {
                font-size: 1.2rem;
                letter-spacing: 1px;
            }

            .marquee-wrapper {
                padding: 12px 0;
            }
        }

        /* Pricing Card */
        .pricing-card {
            background: #ffffff;
            border: 1px solid #eaeaea;
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.05);
        }

        .pricing-header {
            background: #fafafa;
            padding: 32px 28px;
            text-align: center;
            border-bottom: 1px solid #eaeaea;
        }

        .pricing-header h3 {
            font-weight: 800;
            font-size: 1.8rem;
            margin-bottom: 8px;
            letter-spacing: -0.3px;
        }

        .pricing-header p {
            color: #888888;
            font-size: 1.1rem;
            margin: 0;
        }

        .pricing-body {
            padding: 36px 32px;
        }

        /* Price Section */
        .price-section {
            text-align: center;
            margin-bottom: 32px;
        }

        .price {
            font-size: 4rem;
            font-weight: 800;
            color: #1a1a1a;
        }

        .price span {
            font-size: 1.2rem;
            font-weight: 400;
            color: #888888;
        }

        .price-note {
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 10px;
            color: #1a1a1a;
        }

        .free-badge {
            display: inline-block;
            background: #f0f0f0;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            margin-top: 15px;
        }

        /* Feature List */
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0 0 32px 0;
        }

        .feature-list li {
            padding: 14px 0;
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 1rem;
            font-weight: 500;
            color: #444444;
            border-bottom: 1px solid #f0f0f0;
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .feature-list li i {
            width: 28px;
            font-size: 1.2rem;
            color: #1a1a1a;
        }

        .feature-list li strong {
            font-weight: 700;
            color: #1a1a1a;
        }

        /* Payment Section */
        .payment-section {
            text-align: center;
            margin-bottom: 32px;
            padding-top: 12px;
            border-top: 1px solid #f0f0f0;
        }

        .payment-section h5 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 16px;
            letter-spacing: 1px;
            color: #666666;
        }

        .payment-methods {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .payment-badge {
            background: #f8f8f8;
            padding: 10px 24px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            font-size: 1rem;
            border: 1px solid #eaeaea;
        }

        .payment-badge i {
            font-size: 1.2rem;
        }

        /* Order Button */
        .btn-order {
            display: block;
            width: 100%;
            text-align: center;
            background: #1a1a1a;
            color: #ffffff;
            padding: 16px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-order:hover {
            background: #333333;
            color: #ffffff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .pricing-header {
                padding: 24px 20px;
            }

            .pricing-header h3 {
                font-size: 1.5rem;
            }

            .pricing-header p {
                font-size: 0.95rem;
            }

            .pricing-body {
                padding: 24px 20px;
            }

            .price {
                font-size: 3rem;
            }

            .price span {
                font-size: 1rem;
            }

            .price-note {
                font-size: 1rem;
            }

            .free-badge {
                font-size: 0.9rem;
                padding: 6px 16px;
            }

            .feature-list li {
                font-size: 0.9rem;
                padding: 12px 0;
            }

            .payment-badge {
                padding: 8px 18px;
                font-size: 0.9rem;
            }

            .btn-order {
                padding: 14px;
                font-size: 1rem;
            }
        }

        /* ===== TESTIMONIALS ===== */
        .testimonial-card {
            border-left: 3px solid #1a1a1a;
            background: #ffffff;
            padding: 25px;
            height: 100%;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid #eaeaea;
        }

        .testimonial-text {
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #4a4a4a;
        }

        .rating {
            color: #ffc107;
            font-size: 0.85rem;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .testimonial-name {
            font-weight: 700;
            margin-top: 10px;
        }

        /* ===== CONTACT SECTION ===== */
        .contact-card {
            background: #ffffff;
            border: 1px solid #eaeaea;
            border-radius: 24px;
            overflow: hidden;
            padding: 40px;
        }

        .contact-details {
            margin: 30px 0;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-icon {
            width: 55px;
            height: 55px;
            background: #f8f8f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .contact-icon i {
            font-size: 1.4rem;
            color: #1a1a1a;
        }

        .contact-item:hover .contact-icon {
            background: #1a1a1a;
        }

        .contact-item:hover .contact-icon i {
            color: #ffffff;
        }

        .contact-content h4 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: #888888;
        }

        .contact-content p {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1a1a1a;
            margin: 0;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .social-link {
            display: inline-block;
            width: 45px;
            height: 45px;
            line-height: 45px;
            text-align: center;
            background: #f8f8f8;
            color: #1a1a1a;
            border-radius: 50%;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-link:hover {
            background: #1a1a1a;
            color: #ffffff;
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-card {
                padding: 25px;
            }

            .contact-item {
                gap: 15px;
                padding: 15px 0;
            }

            .contact-icon {
                width: 45px;
                height: 45px;
            }

            .contact-icon i {
                font-size: 1.2rem;
            }

            .contact-content p {
                font-size: 0.95rem;
            }

            .social-link {
                width: 40px;
                height: 40px;
                line-height: 40px;
                font-size: 1rem;
            }
        }

        /* ===== FOOTER ===== */
        .footer {
            background: #f8f8f8;
            color: #666666;
            padding: 40px 0 30px;
            border-top: 1px solid #eaeaea;
        }

        .footer a {
            color: #666666;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .footer a:hover {
            color: #1a1a1a;
        }

        .social-icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: #ffffff;
            color: #1a1a1a;
            margin: 0 6px;
            transition: all 0.3s;
            font-size: 1.1rem;
            border-radius: 50%;
            border: 1px solid #eaeaea;
        }

        .social-icon:hover {
            transform: translateY(-2px);
            background: #1a1a1a;
            color: #ffffff;
            border-color: #1a1a1a;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .d-flex.gap-3 {
                flex-direction: column;
            }

            .contact-form {
                padding: 25px;
            }

            .hero-title br {
                display: none;
            }

            .payment-badge {
                padding: 8px 20px;
                font-size: 0.85rem;
            }
        }

        /* ===== BACK TO TOP BUTTON ===== */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: #1a1a1a;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .back-to-top:hover {
            background: #333333;
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .back-to-top.show {
            display: flex;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
                font-size: 1rem;
            }
        }

        /* ===== TYPEWRITER EFFECT ===== */
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .typewriter-text {
            font-weight: 800;
            color: #1a1a1a;
            background: linear-gradient(135deg, #1a1a1a 0%, #444444 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .typewriter-cursor {
            display: inline-block;
            width: 4px;
            margin-left: 5px;
            font-weight: 400;
            animation: blink 0.8s infinite;
            color: #1a1a1a;
            background: none;
            -webkit-text-fill-color: #1a1a1a;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .typewriter-text {
                font-size: 1.8rem;
            }
        }

        /* ===== GUIDES SECTION ===== */
        .creator-card {
            background: #f8f8f8;
            padding: 40px;
            border-radius: 24px;
            border: 1px solid #eaeaea;
        }

        .guides-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .guides-tab {
            background: transparent;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            cursor: pointer;
            color: #666666;
        }

        .guides-tab.active {
            background: #1a1a1a;
            color: #ffffff;
        }

        .guides-content {
            display: none;
        }

        .guides-content.active-content {
            display: block;
        }

        .guides-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
        }

        .guide-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #eaeaea;
        }

        .guide-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .guide-thumbnail {
            position: relative;
            overflow: hidden;
            aspect-ratio: 16/9;
        }

        .guide-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .guide-card:hover .guide-thumbnail img {
            transform: scale(1.05);
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .guide-card:hover .play-button {
            opacity: 1;
        }

        .play-button i {
            color: #ffffff;
            font-size: 1.2rem;
            margin-left: 3px;
        }

        .guide-info {
            padding: 15px;
        }

        .guide-info h4 {
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .guide-info p {
            font-size: 0.85rem;
            color: #888888;
            margin-bottom: 8px;
        }

        .guide-duration {
            font-size: 0.75rem;
            color: #aaaaaa;
            display: inline-block;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .guides-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .guides-tab {
                padding: 8px 20px;
                font-size: 0.85rem;
            }

            .creator-card {
                padding: 25px;
            }

            .creator-card h3 {
                font-size: 1.3rem;
            }
        }

        /* ===== TIKTOK MESSAGE ===== */
        .tiktok-message-link {
            text-decoration: none;
            display: block;
        }

        .tiktok-message {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 16px;
            border: 1px solid #eaeaea;
            margin-top: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .tiktok-message:hover {
            background: #1a1a1a;
            border-color: #1a1a1a;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .tiktok-message:hover i {
            color: #ffffff !important;
        }

        .tiktok-message:hover p {
            color: #ffffff;
        }

        .tiktok-message:hover strong {
            color: #ffffff;
        }

        .tiktok-message p {
            font-size: 1rem;
            color: #666666;
            transition: color 0.3s ease;
        }

        .tiktok-message strong {
            color: #1a1a1a;
            font-weight: 700;
            transition: color 0.3s ease;
        }

        .tiktok-message i {
            transition: color 0.3s ease;
        }

        @media (max-width: 768px) {
            .tiktok-message {
                padding: 15px;
            }

            .tiktok-message p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <!-- ===== NAVIGATION ===== -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">YEYENIYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#guides">GUIDES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why">WHY YEYENIYA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pilot-service">PILOT SERVICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">TESTIMONIALS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== HERO SECTION ===== -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="hero-badge"><i class="fas fa-star me-2"></i> PROFESSIONAL PILOT SERVICE</span>
                    <h1 class="hero-title">
                        YEYENIYA<br>
                        <span id="typewriter-text" class="typewriter-text"></span>
                        <span class="typewriter-cursor">|</span>
                    </h1>
                    <p class="hero-subtitle">Professional Magic Chess Go Go pilot service with guaranteed results. Fast,
                        secure, and reliable ranking service for any rank or commander.</p>
                    <div class="d-flex gap-3">
                        <a href="#pilot-service" class="btn-primary-custom">START WINNING <i
                                class="fas fa-arrow-right ms-2"></i></a>
                        <a href="#contact" class="btn-outline-custom">CONTACT ME</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center mt-5 mt-lg-0">
                    <div class="hero-image-wrapper">
                        <img src="{{ asset('images/pnk.png') }}" alt="Yeyeniya" class="hero-image hero-image-default">
                        <img src="{{ asset('images/pnk2.png') }}" alt="Yeyeniya" class="hero-image hero-image-hover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MARQUEE SECTION ===== -->
    <section class="section section-dark" style="padding: 40px 0;">
        <!-- <div class="container"> -->
        <div class="marquee-wrapper">
            <div class="marquee-text">
                <span>✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK
                    YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK
                    YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA ✦ ITIK YEYENIYA</span>
            </div>
        </div>
        <!-- </div> -->
    </section>

    <!-- ===== ABOUT SECTION ===== -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">ABOUT YEYENIYA</h2>

            <!-- Profile Card -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="profile-card">
                        <!-- Cover Photo with Online Image -->
                        <div class="cover-photo">
                            <img src="{{ asset('images/cover.png') }}" alt="Gaming Cover" class="cover-image">
                        </div>

                        <!-- Profile Content -->
                        <div class="profile-content">
                            <!-- Profile Picture -->
                            <div class="profile-picture-wrapper">
                                <img src="{{ asset('images/profile.jpg') }}" alt="Yeyeniya" class="profile-picture">
                            </div>

                            <!-- Profile Info -->
                            <div class="profile-info text-center">
                                <h2 class="profile-name">Laurence Ruiz [LIFT | YEYENIYA]</h2>
                                <p class="profile-location"><i class="fas fa-map-marker-alt me-2"></i>Manila,
                                    Philippines</p>
                            </div>

                            <!-- Achievements/Credentials -->
                            <div class="achievements-section">
                                <h3 class="achievements-title"><i class="fas fa-trophy me-2"></i>ACHIEVEMENTS &
                                    CREDENTIALS</h3>

                                <div class="achievements-grid">
                                    <!-- Mobile Legends Section -->
                                    <div class="achievement-category">
                                        <h4 class="category-title"><i class="fas fa-gamepad me-2"></i>Mobile Legends:
                                            Bang Bang</h4>
                                        <ul class="achievement-list">
                                            <li><i class="fas fa-chalkboard-user"></i> Former Head Coach for TNC Pro
                                                Team</li>
                                            <li><i class="fas fa-calendar-alt"></i> MPL PH Tenure: Led TNC Pro Team in
                                                MPL PH Season 8 (2021)</li>
                                        </ul>
                                    </div>

                                    <!-- Magic Chess Section -->
                                    <div class="achievement-category">
                                        <h4 class="category-title"><i class="fas fa-chess-board me-2"></i>Magic Chess:
                                            Go Go</h4>
                                        <ul class="achievement-list">
                                            <li><i class="fas fa-globe"></i> Top Global</li>
                                            <li><i class="fas fa-crown"></i> Former Top 1 Global Karina</li>
                                            <li><i class="fas fa-flag-checkered"></i> Magic Chess: Go Go Sea Games 2025
                                                Representative (2nd Placer)</li>
                                            <li><i class="fas fa-trophy"></i> Magic Chess: Go Go Go1 Semifinalist</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Cards (100% SECURE, SECURED WIN RATE, QUALITY SERVICE) -->
            <div class="row mt-4 g-4">
                <div class="col-md-4">
                    <div class="card-custom">
                        <i class="fas fa-shield-alt card-icon"></i>
                        <h3>100% SECURE</h3>
                        <p>Fully secured account with complete privacy protection. Your identity remains anonymous.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-custom">
                        <i class="fas fa-chart-line card-icon"></i>
                        <h3>SECURED WIN RATE</h3>
                        <p>Fast and efficient process with guaranteed high win rate. Results you can trust.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-custom">
                        <i class="fas fa-crown card-icon"></i>
                        <h3>QUALITY SERVICE</h3>
                        <p>Any rank, any commander. Professional service tailored to your specific needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== GUIDES SECTION ===== -->
    <section id="guides" class="section">
        <div class="container">
            <h2 class="section-title">GUIDES</h2>

            <!-- Tabs for Commander and Synergy -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="guides-tabs">
                        <button class="guides-tab active" data-tab="commanders">COMMANDER GUIDES</button>
                        <button class="guides-tab" data-tab="synergies">SYNERGY GUIDES</button>
                    </div>

                    <!-- Commander Guides Content -->
                    <div id="commanders-content" class="guides-content active-content">
                        <div class="guides-grid">
                            <!-- Ruby Tutorial -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7628966817532218645?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/ruby1.png') }}" alt="Ruby Tutorial">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Ruby Tutorial</h4>
                                    <p>Complete guide to mastering Ruby in Magic Chess</p>
                                    <span class="guide-duration">3:22</span>
                                </div>
                            </div>

                            <!-- Ruby Tutorial V2 -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7629678717094153493?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/ruby2.png') }}" alt="Ruby Tutorial V2">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Ruby Tutorial V2</h4>
                                    <p>Advanced Ruby strategies and positioning</p>
                                    <span class="guide-duration">7:43</span>
                                </div>
                            </div>

                            <!-- Commander Tier List -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7626666758576966933?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/tier.png') }}" alt="Commander Tier List">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Commander Tier List [Current Patch]</h4>
                                    <p>Best commanders to climb ranked this season</p>
                                    <span class="guide-duration">6:24</span>
                                </div>
                            </div>

                            <!-- How to 3 star 5 cost unit -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7630012662960753940?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/3s5cost.png') }}" alt="How to 3 star 5 cost unit">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>How to 3 Star 5 Cost Unit</h4>
                                    <p>Pro tips and strategies to hit those rare 5-cost 3-stars</p>
                                    <span class="guide-duration">2:43</span>
                                </div>
                            </div>

                            <!-- Lancelot Tutorial -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7626304802456128788?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/lance.png') }}" alt="Lancelot Tutorial">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Lancelot Tutorial</h4>
                                    <p>Master Lancelot's combos and positioning</p>
                                    <span class="guide-duration">6:01</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Synergy Guides Content -->
                    <div id="synergies-content" class="guides-content">
                        <div class="guides-grid">
                            <!-- Sundot Sulasok Build - Gusion -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7629231885805243668?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/sundotsulasok.png') }}" alt="Sundot Sulasok Build">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Sundot Sulasok Build - Gusion</h4>
                                    <p>Complete build guide for Gusion synergy</p>
                                    <span class="guide-duration">8:37</span>
                                </div>
                            </div>

                            <!-- Top 5 Synergies -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7624804195371175189?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/top5syn.png') }}" alt="Top 5 Synergies">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Top 5 Synergies</h4>
                                    <p>Best performing synergies in current meta</p>
                                    <span class="guide-duration">5:54</span>
                                </div>
                            </div>

                            <!-- Nature - Belerick Core -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7622194617420762388?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/nature.png') }}" alt="Nature - Belerick Core">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Nature - Belerick Core</h4>
                                    <p>How to build Nature synergy around Belerick</p>
                                    <span class="guide-duration">12:25</span>
                                </div>
                            </div>

                            <!-- Marksman Vonetis -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7621785109946993941?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/vonetis.png') }}" alt="Marksman Vonetis">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Marksman Vonetis</h4>
                                    <p>Complete Marksman synergy guide with Vonetis</p>
                                    <span class="guide-duration">11:06</span>
                                </div>
                            </div>

                            <!-- Season 6 Synergies -->
                            <div class="guide-card"
                                onclick="window.open('https://www.tiktok.com/@yeyeniya/video/7628904765132426516?lang=en', '_blank')">
                                <div class="guide-thumbnail">
                                    <img src="{{ asset('images/s6.png') }}" alt="Season 6 Synergies">
                                    <div class="play-button"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="guide-info">
                                    <h4>Season 6 Synergies</h4>
                                    <p>Complete overview of all Season 6 synergies</p>
                                    <span class="guide-duration">9:37</span>
                                </div>
                            </div>
                        </div>

                        <!-- TikTok Message -->
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-10">
                                <a href="https://www.tiktok.com/@yeyeniya" target="_blank" class="tiktok-message-link">
                                    <div class="tiktok-message text-center">
                                        <i class="fab fa-tiktok"
                                            style="font-size: 32px; color: #1a1a1a; margin-bottom: 10px;"></i>
                                        <p class="mb-0">Visit my TikTok for more in-depth guides
                                            <strong>@yeyeniya</strong>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- ===== WHY YEYENIYA SECTION ===== -->
    <section id="why" class="section section-dark">
        <div class="container">
            <h2 class="section-title">WHY YEYENIYA</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card-custom">
                        <i class="fas fa-star card-icon"></i>
                        <h3>P10 PER STAR</h3>
                        <p>Affordable pricing with unlimited stars. Pay only for what you need.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-custom">
                        <i class="fas fa-gift card-icon"></i>
                        <h3>FREE SPAM</h3>
                        <p>Completely free spam commander included with every service.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-custom">
                        <i class="fas fa-bolt card-icon"></i>
                        <h3>FAST PROCESS</h3>
                        <p>Quick turnaround time with real-time updates on your progress.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-custom">
                        <i class="fas fa-chart-simple card-icon"></i>
                        <h3>PROVEN RESULTS</h3>
                        <p>Completed multiple pilot services with consistently high win rates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PILOT SERVICE SECTION ===== -->
    <section id="pilot-service" class="section">
        <div class="container">
            <h2 class="section-title">PILOT SERVICE</h2>

            <!-- Pilot Service Packages -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>MAGIC CHESS GO GO</h3>
                            <p>Pilot Service</p>
                        </div>
                        <div class="pricing-body">
                            <div class="price-section">
                                <div class="price">₱10 <span>/star</span></div>
                                <div class="price-note">Can do Unli Stars</div>
                                <div class="free-badge">+ Free Spam Commander</div>
                            </div>

                            <ul class="feature-list">
                                <li><i class="fas fa-user-secret"></i> Hidden Identity — Secured Account</li>
                                <li><i class="fas fa-chart-line"></i> Secured Win Rate — Fast Process</li>
                                <li><i class="fas fa-crown"></i> Quality Service — Any Rank / Commander</li>
                            </ul>

                            <div class="payment-section">
                                <h5>Mode of Payment</h5>
                                <div class="payment-methods">
                                    <span class="payment-badge"><i class="fab fa-gcash"></i> GCash</span>
                                    <span class="payment-badge"><i class="fas fa-university"></i> Bank Transfer</span>
                                </div>
                            </div>

                            <a href="#contact" class="btn-order">Inquire Now →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS SECTION ===== -->
    <section id="testimonials" class="section section-dark">
        <div class="container">
            <h2 class="section-title">TESTIMONIALS</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Solid Boss Man"</p>
                        <div class="testimonial-name">Boss IL10</div>
                        <small style="color: #888888;">Mythic Immortal - Unli Stars</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Fast, reliable, and secure. Will definitely use again for my next
                            rank push!"</p>
                        <div class="testimonial-name">Sarah Chen</div>
                        <small style="color: #888888;">Epic Rank</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Best pilot service I've tried. Yeyeniya is professional and
                            delivers results."</p>
                        <div class="testimonial-name">Alex Rivera</div>
                        <small style="color: #888888;">Grandmaster</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">CONTACT</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card">
                        <div class="contact-info">
                            <div class="text-center mb-5">
                                <i class="fas fa-headset"
                                    style="font-size: 48px; color: #1a1a1a; margin-bottom: 20px;"></i>
                                <h3 class="fw-bold mb-2">Get in Touch</h3>
                                <p class="text-muted">Reach out to me directly for pilot service inquiries</p>
                            </div>

                            <div class="contact-details">
                                <!-- Email -->
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Email</h4>
                                        <p>yeyeniya@gmail.com</p>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Phone / WhatsApp</h4>
                                        <p>+63 960 558 3832</p>
                                    </div>
                                </div>

                                <!-- Discord -->
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fab fa-discord"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Discord</h4>
                                        <p>Yeyeniya#1234</p>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <h5 class="fw-bold mb-3">Follow Me</h5>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/LiftGaming20" class="social-link"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.tiktok.com/@yeyeniya?lang=en" class="social-link"><i
                                            class="fab fa-tiktok"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-discord"></i></a>
                                    <a href="https://www.youtube.com/@yeyeniya?lang=en" class="social-link"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- ===== FOOTER ===== -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">&copy; 2026 ITIK Tami. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Professional Pilot Service • 100% Guaranteed</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scroll and close mobile menu
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    document.querySelector('.navbar-toggler').click();
                }
            });
        });
    </script>



    <script>
        const backToTopButton = document.getElementById('backToTop');

        // Show/hide button based on scroll position
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });

        // Scroll to top when clicked
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>



    <script>// ===== TYPEWRITER EFFECT =====
        // ===== TYPEWRITER EFFECT =====
        const texts = [
            "Sea Games 2025 Representative (2nd Placer)",
            "Go1 Semifinalist"
        ];

        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let isWaiting = false;

        const typewriterElement = document.getElementById('typewriter-text');

        function typeEffect() {
            const currentText = texts[textIndex];

            if (isDeleting) {
                // Deleting text
                charIndex--;
                typewriterElement.textContent = currentText.substring(0, charIndex);

                if (charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                    // Wait before typing next word
                    setTimeout(typeEffect, 500);
                    return;
                }
            } else {
                // Typing text
                if (charIndex < currentText.length) {
                    charIndex++;
                    typewriterElement.textContent = currentText.substring(0, charIndex);
                } else {
                    // Finished typing, wait then delete
                    isDeleting = true;
                    setTimeout(typeEffect, 2000);
                    return;
                }
            }

            // Speed control
            const speed = isDeleting ? 50 : 100;
            setTimeout(typeEffect, speed);
        }

        // Start the typewriter effect when page loads
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(typeEffect, 500);
        });</script>

    <script>
        // ===== GUIDES TABS =====
        const tabs = document.querySelectorAll('.guides-tab');
        const contents = document.querySelectorAll('.guides-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs and contents
                tabs.forEach(t => t.classList.remove('active'));
                contents.forEach(c => c.classList.remove('active-content'));

                // Add active class to clicked tab and corresponding content
                tab.classList.add('active');
                document.getElementById(`${tab.dataset.tab}-content`).classList.add('active-content');
            });
        }); </script>

</body>

</html>