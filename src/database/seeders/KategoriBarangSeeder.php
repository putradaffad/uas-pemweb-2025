<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriBarang;

class KategoriBarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Drum Besi'],
            ['nama' => 'Drum Rekondisi'],
            ['nama' => 'Drum Plastik'],
            ['nama' => 'Aksesori & Pelengkap'],
            ['nama' => 'Plat Drum'],
            ['nama' => 'Layanan Tambahan'],
        ];

        foreach ($data as $kategori) {
            KategoriBarang::create($kategori);
        }
    }
}
