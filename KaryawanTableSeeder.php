<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanTableSeeder extends Seeder
{
    public function run()
    {
        Karyawan::create([
            'nama' => 'John Doe',
            'email' => 'johndoe@example.com',
            'nomor telepon' => '081234567890',
            'jabatan' => 'Kurir',
        ]);

        Karyawan::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'nomor telepon' => '081298765432',
            'jabatan' => 'Admin',
        ]);
    }
}