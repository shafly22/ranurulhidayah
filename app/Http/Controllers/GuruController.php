<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function showDataGuru()
    {
        $dataGuru = Guru::all();
        return view('backend.admin.data-guru', compact('dataGuru'));
    }


    // Menampilkan form untuk membuat guru baru
    public function create()
    {
        return view('guru.create');
    }

    // Menyimpan data guru baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:gurus',
            'email' => 'required|email|unique:gurus',
            'telepon' => 'nullable',
            'mata_pelajaran' => 'nullable',
            'alamat' => 'nullable',
        ]);

        Guru::create($request->all());
        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan.');
    }

    // Menampilkan detail guru
    public function show(Guru $guru)
    {
        return view('guru.show', compact('guru'));
    }

    // Menampilkan form untuk mengedit guru
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    // Mengupdate data guru
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:gurus,nip,' . $guru->id,
            'email' => 'required|email|unique:gurus,email,' . $guru->id,
            'telepon' => 'nullable',
            'mata_pelajaran' => 'nullable',
            'alamat' => 'nullable',
        ]);

        $guru->update($request->all());
        return redirect()->route('guru.index')->with('success', 'Guru berhasil diupdate.');
    }

    // Menghapus data guru
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus.');
    }
}