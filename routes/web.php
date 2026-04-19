<?php

use Illuminate\Support\Facades\Route;

// Single route for everything - all URLs go to the same page
Route::get('/{any?}', function () {
    return view('home');
})->where('any', '.*');