@extends('layouts.app')

@section('title', 'Meta Commanders')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-3 fw-bold fade-in">Meta Commanders</h1>
    <p class="text-center text-muted mb-5 fade-in">Top performing heroes in the current meta</p>
    
    <div class="row g-4">
        @foreach($commanders as $commander)
        <div class="col-md-6 col-lg-4">
            <div class="card card-hover h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h4 class="card-title mb-0">{{ $commander['name'] }}</h4>
                        <span class="badge bg-{{ $commander['rarity'] == 'Legendary' ? 'warning' : ($commander['rarity'] == 'Epic' ? 'info' : 'secondary') }}">
                            {{ $commander['rarity'] }}
                        </span>
                    </div>
                    <div class="mb-3">
                        <span class="badge bg-primary">{{ $commander['role'] }}</span>
                        <span class="badge bg-success">{{ $commander['synergy'] }} Synergy</span>
                    </div>
                    <p><strong>Skill:</strong> {{ $commander['skill'] }}</p>
                    <div class="text-center mt-3">
                        <div class="win-rate">{{ $commander['win_rate'] }}</div>
                        <small class="text-muted">Win Rate</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection