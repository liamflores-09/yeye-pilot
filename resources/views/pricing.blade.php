@extends('layouts.app')

@section('title', 'Pricing')

@section('content')
<div class="container py-5">
    <div class="section-header">
        <h1 class="section-title">PRICING</h1>
        <p class="section-subtitle">Simple, transparent pricing. No hidden fees.</p>
    </div>
    
    <div class="row g-4 mt-4 justify-content-center">
        @foreach($packages as $package)
        <div class="col-md-6 col-lg-3">
            <div class="pricing-card {{ $package['featured'] ? 'featured' : '' }} h-100">
                @if($package['featured'])
                <div class="mb-2">
                    <span class="tier-badge">RECOMMENDED</span>
                </div>
                @endif
                <h3 class="fw-bold mb-3">{{ $package['name'] }}</h3>
                <div class="price">${{ $package['price'] }}</div>
                <hr>
                <ul class="list-unstyled mt-4">
                    <li class="mb-3">⭐ {{ $package['stars'] }}</li>
                    <li class="mb-3">⏱️ {{ $package['time'] }}</li>
                    <li class="mb-3">✅ {{ $package['guarantee'] }}</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary-custom w-100 text-center mt-4" style="display: inline-block;">BOOK NOW</a>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="text-center mt-5 p-4" style="background: #fafafa; border: 1px solid #e0e0e0;">
        <p class="mb-0 fw-bold">⚠️ Personal service guarantee — I play every game myself</p>
    </div>
</div>
@endsection