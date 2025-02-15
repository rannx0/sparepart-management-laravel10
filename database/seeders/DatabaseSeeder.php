<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan seeder untuk kategori barang
        $this->call(KategoriSeeder::class);

        // Jalankan seeder untuk barang sparepart
        $this->call(MasterBarangSeeder::class);

        // Jalankan seeder untuk penjualan
        $this->call(PenjualanSeeder::class);
    }
}