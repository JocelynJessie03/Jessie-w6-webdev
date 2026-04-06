<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

Route::get('/', [pageController::class, 'homePage']) ->name('home.show');

Route::get('/about', function () {
    return view('about');
}) ->name('about.show');

Route::get('/services', [pageController::class, 'servicesOption']) ->name('services.show');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact.show');