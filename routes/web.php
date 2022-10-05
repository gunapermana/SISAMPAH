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
    return view('user.dashboard');
});

Route::get('/home', function () {
    return view('user.dashboard');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/poin', function () {
    return view('user.poin');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/news', function () {
    return view('user.news');
});

Route::get('/angkut', function () {
    return view('user.angkut');
});