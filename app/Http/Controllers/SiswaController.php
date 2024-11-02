<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    // Menampilkan halaman siswa
    public function siswa()
    {
        // Mengambil nama pengguna yang sedang login
        $userName = Auth::user()->name;

        // Mengembalikan view dan mengirimkan data pengguna
        return view('backend.siswa', compact('userName'));
    }
}
