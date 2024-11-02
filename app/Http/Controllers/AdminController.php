<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa; // Model untuk siswa
use App\Models\Guru;   // Model untuk guru
use App\Models\PPDB;   // Model untuk PPDB

class AdminController extends Controller
{
    // Menampilkan halaman admin
    public function index()
    {
        // Mengambil nama pengguna yang sedang login
        $userName = Auth::user()->name;

        // Mengembalikan view dan mengirimkan data pengguna
        return view('backend.admin', compact('userName'));
    }
        public function getDataCounts()
        {
            $jumlahSiswa = Siswa::count();
            $jumlahGuru = Guru::count();
            $jumlahPPDB = PPDB::count();
    
            return response()->json([
                'jumlah_siswa' => $jumlahSiswa,
                'jumlah_guru' => $jumlahGuru,
                'jumlah_ppdb' => $jumlahPPDB,
            ]);
        }
    }

    

