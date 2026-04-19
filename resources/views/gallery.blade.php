@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-3 fw-bold fade-in">Pilot Gallery</h1>
    <p class="text-center text-muted mb-5 fade-in">See our successful boosts and happy clients</p>
    
    <div class="row g-4">
        @foreach($images as $image)
        <div class="col-md-6 col-lg-4">
            <div class="card card-hover h-100">
                <img src="{{ $image['url'] }}" class="card-img-top gallery-img" alt="{{ $image['title'] }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $image['title'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection