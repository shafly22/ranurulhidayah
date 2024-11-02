<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PPDB; // Pastikan model PPDBTK di-import
use Faker\Factory as Faker; // Untuk menghasilkan data dummy

class PpdbSeeder extends Seeder
{
    public function run()
    {
        PPDB::create([
            'nama' => 'Alex Johnson',
            'kelas' => 'Kelompok A',
            'tanggal_lahir' => '2004-02-20',
            'tanggal_daftar' => '2023-01-01',
            'status' => 'Diterima',
            'id_pendaftar' => 1, // Ganti dengan ID pendaftar yang sesuai
        ]);
    }
}

