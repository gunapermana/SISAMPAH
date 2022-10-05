<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

// User
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/action-login', [AuthController::class, 'action-login'])->name('action-login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/action-register', [AuthController::class, 'action-register'])->name('action-register');

// Angkut Sampah
Route::get('/angkut-sampah', [PickTrashController::class, 'index'])->name('angkut-sampah');

// News
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Poin
Route::get('/poin', [PoinController::class, 'index'])->name('poin');

