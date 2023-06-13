<?php

use App\Http\Controllers\UiController;
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

Route::get('/', [UiController::class, 'index'])->name('home');
Route::get('/about', [UiController::class, 'about'])->name('about');
Route::get('/services', [UiController::class, 'services'])->name('services');
Route::get('/contact', [UiController::class, 'contact'])->name('contact');

Route::post('/book', [UiController::class, 'booking'])->name('booking');
