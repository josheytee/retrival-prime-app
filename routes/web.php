<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/about', [PageController::class, 'about'])->name('pages.about');
Route::get('/services', [PageController::class, 'services'])->name('pages.services');
Route::get('/service/{service}', [ServiceController::class, 'service'])->name('pages.service');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('pages.testimonials');
Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');
Route::get('/news', [PageController::class, 'news'])->name('pages.news');
Route::get('/contact', [PageController::class, 'contact'])->name('pages.contact');
Route::post('/message', [PageController::class, 'message'])->name('pages.message');

Route::post('/comment', [ServiceController::class, 'comment'])->name('service.comment');

Route::get('/makeme', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('optimize');
    return "Application Optimize Successfully done";
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// Add profile edit for admin.
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__ . '/admin-auth.php';
