<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Dokter
        User::insert([
            ['name' => 'dr. Nunu Suwarnu', 'email' => 'nunu@dr.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'dr. Yuyu Unyu', 'email' => 'yu@dr.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'dr. Esmeralda', 'email' => 'esme@dr.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'dr. Febri Hartanto', 'email' => 'febri@dr.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'dr. Nana Purnama', 'email' => 'nana@dr.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'dr. Faruq Amri', 'email' => 'faruq@dr.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
        ]);

        // Pasien
        User::insert([
            ['name' => 'Wildan Kamil', 'email' => 'wildan@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
            ['name' => 'Ardianti Budiana', 'email' => 'dian@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
            ['name' => 'Massadhib', 'email' => 'adhib@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
            ['name' => 'Alya Aleyda', 'email' => 'alya@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
            ['name' => 'Gilang Dirga', 'email' => 'gilang@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
            ['name' => 'Safa Riana', 'email' => 'safa@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
            ['name' => 'Tegar Windar', 'email' => 'tegar@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
            ['name' => 'Fikri Aprianto', 'email' => 'fikri@gmail.com', 'password' => bcrypt('password'), 'role' => 'pasien'],
        ]);
    }
}
