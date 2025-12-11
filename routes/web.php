<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Kitchen pages
Route::get('/explore-kitchen', [PageController::class, 'exploreKitchen'])->name('explore-kitchen');
Route::get('/order-comments', [PageController::class, 'orderComments'])->name('order-comments');
Route::get('/max-storage', [PageController::class, 'maxStorage'])->name('max-storage');
Route::get('/wardrobes', [PageController::class, 'wardrobes'])->name('wardrobes');
Route::get('/help-guides', [PageController::class, 'helpGuides'])->name('help-guides');
Route::get('/design-service', [PageController::class, 'designService'])->name('design-service');

