<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasterBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spareparts = [
            [
                'kode_barang' => 'LCD001',
                'nama_barang' => 'LCD Samsung A10',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 1,
            ],
            [
                'kode_barang' => 'LCD002',
                'nama_barang' => 'LCD iPhone 11',
                'harga_beli' => 800000,
                'harga_jual' => 950000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 1,
            ],
            [
                'kode_barang' => 'BT001',
                'nama_barang' => 'Baterai Xiaomi Redmi Note 8',
                'harga_beli' => 120000,
                'harga_jual' => 170000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 2,
            ],
            [
                'kode_barang' => 'BT002',
                'nama_barang' => 'Baterai iPhone 7',
                'harga_beli' => 180000,
                'harga_jual' => 230000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 2,
            ],
            [
                'kode_barang' => 'C001',
                'nama_barang' => 'Charger Samsung 25W',
                'harga_beli' => 100000,
                'harga_jual' => 140000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 3,
            ],
            [
                'kode_barang' => 'C002',
                'nama_barang' => 'Charger iPhone 20W',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 3,
            ],
            [
                'kode_barang' => 'SPK001',
                'nama_barang' => 'Speaker iPhone X',
                'harga_beli' => 90000,
                'harga_jual' => 120000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 4,
            ],
            [
                'kode_barang' => 'SPK002',
                'nama_barang' => 'Speaker Samsung S20',
                'harga_beli' => 110000,
                'harga_jual' => 150000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 4,
            ],
            [
                'kode_barang' => 'TS001',
                'nama_barang' => 'Touchscreen Oppo A5',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 5,
            ],
            [
                'kode_barang' => 'TB001',
                'nama_barang' => 'Tombol On/Off iPhone 7',
                'harga_beli' => 80000,
                'harga_jual' => 110000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 6,
            ],
            [
                'kode_barang' => 'FK001',
                'nama_barang' => 'Flexibel Kamera Samsung S10',
                'harga_beli' => 120000,
                'harga_jual' => 170000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 7,
            ],
            [
                'kode_barang' => 'CS001',
                'nama_barang' => 'Casing iPhone 11',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'satuan' => 'pcs',
                'kategori_barangs_id' => 8,
            ],
        ];

        foreach ($spareparts as $sparepart) {
            \App\Models\MasterBarang::create($sparepart);
        }
    }

}
