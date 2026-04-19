@extends('layouts.app')

@section('title', 'Meta Synergies')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-3 fw-bold fade-in">Current Meta Synergies</h1>
    <p class="text-center text-muted mb-5 fade-in">Most powerful compositions in the current patch</p>
    
    <div class="row g-4">
        @foreach($synergies as $synergy)
        <div class="col-md-6 col-lg-4">
            <div class="card card-hover h-100">
                <div class="position-relative">
                    <span class="badge bg-{{ $synergy['tier'] == 'S+' ? 'danger' : ($synergy['tier'] == 'S' ? 'warning' : 'info') }} badge-tier">
                        Tier {{ $synergy['tier'] }}
                    </span>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $synergy['name'] }}</h4>
                    <div class="mb-3">
                        <span class="badge bg-success">{{ $synergy['win_rate'] }} Win Rate</span>
                        <span class="badge bg-secondary">{{ $synergy['difficulty'] }} Difficulty</span>
                    </div>
                    <p class="card-text">{{ $synergy['description'] }}</p>
                    <h6>Key Commanders:</h6>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($synergy['commanders'] as $commander)
                            <span class="badge bg-primary">{{ $commander }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection