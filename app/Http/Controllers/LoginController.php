<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login'); // Pastikan path view login sesuai
    }

    // Fungsi untuk proses login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect berdasarkan peran pengguna
            if ($user->role === 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->role === 'kepsek') {
                return redirect()->intended('kepsek');
            } elseif ($user->role === 'siswa') {
                return redirect()->intended('siswa');
            }
        } else {
            // Jika autentikasi gagal, redirect kembali ke halaman login dengan error
            return redirect()->back()
                ->withErrors(['login' => 'Username atau Password yang dimasukkan tidak sesuai'])
                ->withInput();
        }
        
    }
}
