<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/service', [PortfolioController::class, 'service'])->name('service');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('/profile-photo', function () {
    return response()->file(resource_path('Asset/Photo1.png'));
})->name('profile.photo');