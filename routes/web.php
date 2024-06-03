<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
