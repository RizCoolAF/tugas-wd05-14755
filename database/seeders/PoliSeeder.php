<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    public function run(): void
    {
        Poli::insert([
            ['nama_poli' => 'Poli Umum', 'keterangan' => 'Melayani konsultasi dan pemeriksaan kesehatan umum, serta penanganan penyakit tidak menular (PTM).'],
            ['nama_poli' => 'Poli Gigi', 'keterangan' => 'Memberikan pelayanan kesehatan gigi dan mulut, seperti pemeriksaan, pembersihan karang gigi, dan penambalan. '],
            ['nama_poli' => 'Poli Anak', 'keterangan' => 'Menangani kesehatan anak usia 0-59 bulan, termasuk deteksi dini dan penanganan penyakit pada balita. '],
        ]);
    }
}

