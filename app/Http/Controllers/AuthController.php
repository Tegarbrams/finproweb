<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard'); // Ganti dengan halaman setelah login
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

      // Menampilkan form register
      public function showRegisterForm()
      {
          return view('auth.register');
      }
  
      // Proses register
      public function register(Request $request)
      {
          // Validasi input
          $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|email|unique:users',
              'password' => 'required|string|min:6|confirmed',
          ]);
  
          // Simpan user baru ke database
          User::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
          ]);
  
          // Login otomatis setelah register
          Auth::attempt($request->only('email', 'password'));
  
          return redirect()->intended('dashboard'); // Ganti dengan halaman tujuan setelah register
      }
}
