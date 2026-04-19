@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header">
                    <h1 class="section-title">CONTACT</h1>
                    <p class="section-subtitle">Direct line to Yeyeniya — I respond within hours</p>
                </div>

                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="card-clean text-center">
                            <i class="fab fa-discord fa-3x mb-3"></i>
                            <h4 class="fw-bold">DISCORD</h4>
                            <p class="text-muted-dark">Yeyeniya#1234</p>
                            <small class="text-muted-dark">Fastest response</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-clean text-center">
                            <i class="fab fa-whatsapp fa-3x mb-3"></i>
                            <h4 class="fw-bold">WHATSAPP</h4>
                            <p class="text-muted-dark">+1 234 567 8900</p>
                            <small class="text-muted-dark">24/7 availability</small>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="card-clean">
                        <h3 class="fw-bold mb-4">Send a Message</h3>
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control"
                                    style="border-radius: 0; border: 1px solid #e0e0e0;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Discord / WhatsApp</label>
                                <input type="text" class="form-control"
                                    style="border-radius: 0; border: 1px solid #e0e0e0;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Current Rank</label>
                                <select class="form-select" style="border-radius: 0; border: 1px solid #e0e0e0;">
                                    <option>Warrior</option>
                                    <option>Elite</option>
                                    <option>Master</option>
                                    <option>Grandmaster</option>
                                    <option>Mythic</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Message</label>
                                <textarea rows="4" class="form-control" style="border-radius: 0; border: 1px solid #e0e0e0;"
                                    placeholder="What rank do you want to reach?"></textarea>
                            </div>
                            <button type="submit" class="btn-primary-custom w-100">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection