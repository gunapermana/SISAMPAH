<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Validator;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Berhasil Login!');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'address' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        // $validate = Validator::make($request->all(), [
        //     'username.required' => 'Username sudah digunakan, silahkan menggunakan username lainnya.',
        //     'nik.required' => 'Pastikan kembali nomor NIK anda',
        //     'email.required' => 'Email sudah terdaftar, silahkan gunakan email lainnya.'
        // ]);
        // if ($validate->fails()) {
        //     return back()->withErrors($validate->errors())->withInput();
        // }
        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Anda Berhasil Registrasi, Silahkan Login!');
    }

    public function create(array $data)
    {
        return User::create([
            'nik' => $data['nik'],
            'name' => $data['name'],
            'address' => $data['address'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}