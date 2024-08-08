<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;



Route::redirect('/', '/index');

Route::get('/index', [WeddingController::class, 'index']);
Route::get('/index-multipage', [WeddingController::class, 'multipage']);
Route::post('/rsvp', [WeddingController::class, 'rsvp'])->name('rsvp');
