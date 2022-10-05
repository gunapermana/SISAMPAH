<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.dashboard');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function news()
    {
        return view('guest.news');
    }

    // public function angkut_sampah()
    // {

    //     return redirect()->route('/login')->with('info','Anda belum melakukan login, silahkan login terlebih dahulu!');
    // }
}