<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan formulir login
    public function showLoginForm()
    {
        return view('Login.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi data yang diterima dari formulir login
        $request->validate([
            'login_id' => 'required',
            'password' => 'required',
        ]);

        // Coba untuk melakukan otentikasi pengguna
        $credentials = $request->only('login_id', 'password');
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, redirect ke halaman yang sesuai
            return redirect()->intended('/home');
        }

        // Jika otentikasi gagal, kembalikan ke formulir login dengan pesan error
        return redirect()->route('login')->with('error', 'Username atau password salah.');
    }

    // Proses logout
    public function logout()
    {
        // Melakukan logout pengguna
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect('/login');
    }
}
