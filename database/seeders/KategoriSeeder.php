<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['nama_kategori' => 'LCD', 'deskripsi' => 'LCD Android'],
            ['nama_kategori' => 'Baterai', 'deskripsi' => 'Kategori Baterai'],
            ['nama_kategori' => 'Charger', 'deskripsi' => 'Kategori Charger'],
            ['nama_kategori' => 'Speaker', 'deskripsi' => 'Kategori Speaker'],
            ['nama_kategori' => 'Touchscreen', 'deskripsi' => 'Touchscreen'],
            ['nama_kategori' => 'Tombol On/Off', 'deskripsi' => 'Kategori Tombol'],
            ['nama_kategori' => 'Flexibel Kamera', 'deskripsi' => 'Kategori Kamera'],
            ['nama_kategori' => 'Casing', 'deskripsi' => 'Kategori Casing'],
        ];

        foreach ($kategori as $k) {
            \App\Models\KategoriBarang::create($k);
        }
    }
}
