<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa; // Pastikan model Siswa di-import
use Faker\Factory as Faker; // Untuk menghasilkan data dummy

class SiswaSeeder extends Seeder
{
    public function run()
    {
        // Inisialisasi Faker
        $faker = Faker::create();

        // Membuat 10 data siswa dummy
        for ($i = 0; $i < 10; $i++) {
            Siswa::create([
                'nama' => $faker->name,
                'kelas' => $faker->randomElement(['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6']),
                'tanggal_lahir' => $faker->date(),
                'bulan_spp' => $faker->randomElement(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']),
            ]);
        }
    }
}
