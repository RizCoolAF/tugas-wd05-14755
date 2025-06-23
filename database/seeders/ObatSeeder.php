<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    public function run(): void
    {
        Obat::insert([
            ['nama_obat' => 'Bodrex', 'kemasan' => 'Strip 10 tablet', 'harga' => 8000],
            ['nama_obat' => 'Glucophage', 'kemasan' => 'Botol 60 tablet', 'harga' => 22000],
            ['nama_obat' => 'Imodium', 'kemasan' => 'Strip 10 kapsul', 'harga' => 6000],
            ['nama_obat' => 'Valium', 'kemasan' => 'Strip 10 tablet', 'harga' => 9500],
            ['nama_obat' => 'Zocor', 'kemasan' => 'Strip 10 tablet', 'harga' => 11000],
            ['nama_obat' => 'OBH Combi', 'kemasan' => 'Botol 60ml', 'harga' => 7000],
            ['nama_obat' => 'Hydrocortisone Kalbe', 'kemasan' => 'Tube 15g', 'harga' => 18000],
            ['nama_obat' => 'Cozaar', 'kemasan' => 'Strip 10 tablet', 'harga' => 12000],
            ['nama_obat' => 'Ponstan', 'kemasan' => 'Strip 10 tablet', 'harga' => 7500],
            ['nama_obat' => 'Zyrtec Syrup', 'kemasan' => 'Botol 60ml', 'harga' => 14000],
        ]);
    }
}
