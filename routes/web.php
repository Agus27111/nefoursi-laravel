<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;


//FrontController
Route::get('/', function () {
    return view('front.index');
});
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/pengumuman', [FrontController::class, 'pengumuman'])->name('front.pengumuman');
// Route::get('/about', [FrontController::class, 'about'])->name('front.about');
// Route::get('/appointment', [FrontController::class, 'appointment'])->name('front.appointment');
// Route::post('/appointment/store', [FrontController::class, 'appointment_store'])->name('front.appointment_store');
// Route::get('/ppdb', [FrontController::class, 'ppdb'])->name('front.ppdb');
// Route::get('/book', [FrontController::class, 'book'])->name('front.book');
// Route::get('/blog', [FrontController::class, 'blogs'])->name('front.blogs');
// Route::get('/dokumentasi', [FrontController::class, 'dokumentasi'])->name('front.dokumentasi');

//slug
// Route::get('blog/{slug}', [BlogController::class, 'show'])->name('front.blog');
// Route::get('/blogs/category/{category:slug}', [FrontController::class, 'blogsByCategory'])->name('front.blogs.category');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
