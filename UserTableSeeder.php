<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'jabatan' => 'admin',
        ]);

        User::create([
            'nama' => 'Karyawan',
            'email' => 'karyawan@example.com',
            'password' => Hash::make('password'),
            'jabatan' => 'karyawan',
        ]);
    }
}