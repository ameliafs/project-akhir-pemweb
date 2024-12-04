<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paket;

class PaketTableSeeder extends Seeder
{
    public function run()
    {
        Paket::create([
            'nomor_resi' => 'TRACK123',
            'pengirim' => 'John Doe',
            'penerima' => 'Jane Smith',
            'status' => 'masuk',
            'diproses_di' => now(),
        ]);

        Paket::create([
            'nomor_resi' => 'TRACK124',
            'pengirim' => 'Alice',
            'penerima' => 'Bob',
            'status' => 'keluar',
            'diproses_di' => now(),
        ]);
    }
}
