<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;



Route::redirect('/', '/index');

// Route::get('/index', [WeddingController::class, 'index']);
Route::get('/index', [WeddingController::class, 'index'])->name('index');

Route::get('/gallery', [WeddingController::class, 'gallery'])->name('gallery');

Route::get('/rsvp', [WeddingController::class, 'rsvp'])->name('rsvp.index');
Route::post('/send-rsvp', [WeddingController::class, 'storeRsvp'])->name('rsvp.store');


// Route::get('/admin', [AdminController::class, 'login'])->name('login');
// Route::post('/login', [AdminController::class, 'signIn'])->name('signin');
// Route::get('/admin/gallery', [AdminController::class, 'gallery'])->name('gallery');
