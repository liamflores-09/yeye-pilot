@extends('layouts.app')

@section('title', 'About Yeyeniya')

@section('content')
<div class="container py-4 py-md-5">
    <div class="row justify-content-center fade-up">
        <div class="col-12 col-lg-10">
            <!-- Hero About Section -->
            <div class="text-center mb-4 mb-md-5">
                <h1 class="display-4 display-md-3 fw-bold mb-3">YEYENIYA</h1>
                <div class="border-bottom-black d-inline-block mb-3 mb-md-4" style="width: 60px;"></div>
                <p class="lead text-muted-dark">One player. One mission. Excellence.</p>
            </div>
            
            <!-- Main About Content -->
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div class="card-clean h-100">
                        <i class="fas fa-user-circle fa-3x mb-3"></i>
                        <h3 class="fw-bold mb-3">The Player</h3>
                        <p class="text-muted-dark mb-0">I'm Yeyeniya — a dedicated Magic Chess Go Go player with over 5000+ hours of competitive experience. I don't run a team or an agency. It's just me, my skills, and my commitment to delivering results.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-clean h-100">
                        <i class="fas fa-trophy fa-3x mb-3"></i>
                        <h3 class="fw-bold mb-3">The Mission</h3>
                        <p class="text-muted-dark mb-0">Every account I touch gets my full attention. No outsourcing, no shortcuts. Just pure, professional gameplay to help you reach your desired rank.</p>
                    </div>
                </div>
            </div>
            
            <!-- Location & Availability -->
            <div class="row mt-4 mt-md-5">
                <div class="col-12">
                    <div class="bg-black text-white p-4 p-md-5 text-center">
                        <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                        <h3 class="fw-bold mb-3">Based in {{ $location['city'] }}</h3>
                        <p class="mb-2">{{ $location['timezone'] }} Timezone</p>
                        <p class="mb-0">{{ $location['response_time'] }} response time • {{ $location['support_hours'] }} availability</p>
                    </div>
                </div>
            </div>
            
            <!-- Achievements -->
            <div class="mt-4 mt-md-5">
                <h2 class="text-center fw-bold mb-4 mb-md-5">Achievements</h2>
                <div class="row g-4">
                    @foreach($achievements as $achievement)
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <div class="display-1 mb-3">
                                @if($loop->index == 0)🏆
                                @elseif($loop->index == 1)⭐
                                @else🎯
                                @endif
                            </div>
                            <h4 class="fw-bold mb-2">{{ $achievement['year'] }}</h4>
                            <h5 class="mb-2">{{ $achievement['title'] }}</h5>
                            <p class="text-muted-dark small mb-0">{{ $achievement['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Personal Note -->
            <div class="mt-4 mt-md-5 p-4 p-md-5" style="background: #fafafa; border-left: 4px solid #000000;">
                <p class="lead mb-0 fst-italic">"I take every client personally. When you book my service, you're getting me — not a random pilot. Your rank is my reputation."</p>
                <p class="mt-3 fw-bold mb-0">— Yeyeniya</p>
            </div>
        </div>
    </div>
</div>
@endsection