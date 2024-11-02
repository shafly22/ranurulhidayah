<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru; // Pastikan model Guru di-import
use Faker\Factory as Faker; // Untuk menghasilkan data dummy

class GuruSeeder extends Seeder
{
    public function run()
    {
        // Inisialisasi Faker
        $faker = Faker::create();

        // Membuat 10 data guru dummy
        for ($i = 0; $i < 10; $i++) {
            Guru::create([
                'nama' => $faker->name,
                'nip' => $faker->numberBetween(1000000000, 9999999999),
                'email' => $faker->unique()->safeEmail,
                'telepon' => $faker->phoneNumber,
                'mata_pelajaran' => $faker->word,
                'alamat' => $faker->address,
            ]);
        }
    }
}
