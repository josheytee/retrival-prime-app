<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\AdminProfileController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth:admin']], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->middleware('verified')->name('admin.dashboard');

        Route::resource('testimonials', TestimonialController::class);
        Route::resource('comments', CommentController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('site', AboutController::class);
        Route::get('/contacts/{contact}/acknowledged', [ContactController::class, 'acknowledge'])->name('contact.acknowledge');
        Route::resource('comments', CommentController::class);
        Route::get('/commment/{comment}/approve', [CommentController::class, 'approve'])->name('comment.approve');
        Route::get('/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::patch('/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
        Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
    });
});
