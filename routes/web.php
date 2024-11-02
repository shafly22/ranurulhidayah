<?php

use App\Http\Controllers\{
    AdminController,
    GuruController,
    KepsekController,
    LoginController,
    PPDBController,
    SiswaController
};
use Illuminate\Support\Facades\Route;

// Route untuk menampilkan halaman PPDB
Route::get('/', [PPDBController::class, 'index'])->name('ppdb');

// Route untuk autentikasi (guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

// Route untuk halaman admin setelah login (auth)
Route::middleware(['auth'])->group(function () {
    // Route dashboard dan admin
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/kepsek', [KepsekController::class, 'kepsek']);
    Route::get('/siswa', [SiswaController::class, 'siswa']);

    // Route untuk logout
    Route::get('/logout', function () {
        return view('backend.admin.logout');
    })->name('logout.page');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Route untuk mendapatkan data jumlah
    Route::get('/dashboard/data-counts', [AdminController::class, 'getDataCounts']);
});

// Route untuk mengakses sementara
Route::get('/home', function () {
    return redirect('/admin'); // Ganti dengan logika yang sesuai
});

// Resource route untuk Guru
Route::resource('guru', GuruController::class);

// Route untuk Data Guru
Route::get('/data-guru', [GuruController::class, 'showDataGuru'])->name('data-guru');
