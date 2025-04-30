<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Ahmad Hallal',
            'alamat' => 'Jl. Bom No. 420',
            'no_hp' => '0888888888',
        ]);

        Pasien::create([
            'nama' => 'Suharto',
            'alamat' => 'Jl. Presiden No. 2',
            'no_hp' => '08909090909',
        ]);

        foreach ($pasiens as $pasien) {
            Pasien::create($pasien);
        }
    }
}