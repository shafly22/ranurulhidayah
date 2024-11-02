<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepsekController extends Controller
{
    // Menampilkan halaman kepala sekolah
    public function kepsek()
    {
        // Mengambil nama pengguna yang sedang login
        $userName = Auth::user()->name;

        // Mengembalikan view dan mengirimkan data pengguna
        return view('backend.kepsek', compact('userName'));
    }
}
