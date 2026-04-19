<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Make sure this line exists and is NOT commented out
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/meta-synergies', [PageController::class, 'synergies'])->name('synergies');
Route::get('/meta-commanders', [PageController::class, 'commanders'])->name('commanders');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');