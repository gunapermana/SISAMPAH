<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/navbar', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/poin', function () {
    return view('poin');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/angkut', function () {
    return view('angkut');
});