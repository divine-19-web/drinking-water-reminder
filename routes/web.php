<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

// Static pages
Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/features', [StaticPageController::class, 'features'])->name('features');
Route::get('/how-it-works', [StaticPageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/contact', [StaticPageController::class, 'contact'])->name('contact');
Route::post('/contact', [StaticPageController::class, 'submitContact'])->name('contact.submit');
Route::get('/faq', [StaticPageController::class, 'faq'])->name('faq');
Route::get('/privacy', [StaticPageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [StaticPageController::class, 'terms'])->name('terms');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
