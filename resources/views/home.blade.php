@extends('layouts.app')

@section('title', 'Professional Magic Chess Pilot')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-12 col-lg-7 fade-up">
                    <h1 class="hero-title">YEYENIYA<br>Professional Pilot</h1>
                    <p class="hero-subtitle">Magic Chess Go Go boosting service. One player, guaranteed results. 94.7% win
                        rate across 1000+ games.</p>
                    <div class="d-flex flex-column flex-sm-row gap-2">
                        <a href="{{ route('pricing') }}" class="btn-primary-custom">VIEW PRICING</a>
                        <a href="{{ route('about') }}" class="btn-outline-custom">ABOUT ME</a>
                    </div>
                </div>
                <div class="col-12 col-lg-5 fade-up">
                    <div class="bg-black text-white p-4 p-md-5 text-center">
                        <div class="display-1 mb-3">🎯</div>
                        <div class="stat-number mb-2" data-target="{{ $stats['win_rate'] }}">0</div>
                        <div class="stat-label">WIN RATE</div>
                        <hr class="my-3 bg-white-50">
                        <div class="stat-number mb-2" data-target="{{ $stats['players_served'] }}">0</div>
                        <div class="stat-label">PLAYERS SERVED</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Me Section -->
    <section class="py-5 bg-white-smoke">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">WHY ME?</h2>
                <p class="section-subtitle">One player. Complete dedication. No compromises.</p>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="card-clean text-center h-100">
                        <i class="fas fa-user-shield fa-3x mb-3"></i>
                        <h4 class="fw-bold mb-3">100% Personal</h4>
                        <p class="text-muted-dark mb-0">I play every game myself. No outsourcing, no team — just my skill.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card-clean text-center h-100">
                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                        <h4 class="fw-bold mb-3">Proven Results</h4>
                        <p class="text-muted-dark mb-0">94.7% win rate with 1000+ successful boosts completed.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card-clean text-center h-100">
                        <i class="fas fa-headset fa-3x mb-3"></i>
                        <h4 class="fw-bold mb-3">Direct Communication</h4>
                        <p class="text-muted-dark mb-0">24/7 direct chat with me. No middlemen, no delays.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">CLIENT FEEDBACK</h2>
                <p class="section-subtitle">What players say about working with me</p>
            </div>
            <div class="row g-4">
                @foreach($testimonials as $testimonial)
                    <div class="col-12 col-md-4">
                        <div class="testimonial h-100">
                            <div class="mb-3">
                                @for($i = 1; $i <= $testimonial['rating']; $i++)
                                    <i class="fas fa-star text-dark"></i>
                                @endfor
                            </div>
                            <p class="text-muted-dark mb-3">"{{ $testimonial['message'] }}"</p>
                            <div>
                                <strong class="fw-bold">{{ $testimonial['name'] }}</strong>
                                <br>
                                <small class="text-muted-dark">{{ $testimonial['rank'] }} Rank</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-black text-white text-center">
        <div class="container">
            <h2 class="display-6 display-md-5 fw-bold mb-3">READY TO RANK UP?</h2>
            <p class="lead mb-4">Let me help you reach your desired rank. Book your pilot session now.</p>
            <a href="{{ route('pricing') }}" class="btn-outline-custom" style="border-color: #ffffff; color: #ffffff;">START
                NOW →</a>
        </div>
    </section>
@endsection