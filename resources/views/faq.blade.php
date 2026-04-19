@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-3 fw-bold fade-in">Frequently Asked Questions</h1>
    <p class="text-center text-muted mb-5 fade-in">Everything you need to know about our service</p>
    
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
                @foreach($faqs as $index => $faq)
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                            <strong>{{ $faq['q'] }}</strong>
                        </button>
                    </h2>
                    <div id="faq{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection