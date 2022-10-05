<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuesController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/navbar', function () {
//     return view('layout');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/poin', function () {
//     return view('poin');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/news', function () {
//     return view('news');
// });

// Route::get('/angkut', function () {
//     return view('angkut');
// });

// Guest
Route::get('/', [GuestController::class, 'index'])->name('dashboard');
Route::get('/about-guest', [GuestController::class, 'about'])->name('about');
Route::get('/contact-guest', [GuesController::class, 'contact'])->name('contact');
Route::get('/news-guest', [GuestController::class, 'news'])->name('news');
// Route::get('/angkut-sampah-guest', [GuestController::class, 'angkut_sampah'])->name('angkut-sampah');