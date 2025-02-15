<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualans = [
            [
                'tgl_faktur' => Carbon::now()->subDays(3)->format('Y-m-d'),
                'no_faktur' => 'INV-20240211-001',
                'nama_konsumen' => 'Andi Saputra',
                'barangs_id' => 1,
                'jumlah' => 2,
                'harga_satuan' => 250000,
                'harga_total' => 500000,
            ],
            [
                'tgl_faktur' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'no_faktur' => 'INV-20240212-002',
                'nama_konsumen' => 'Budi Santoso',
                'barangs_id' => 3,
                'jumlah' => 1,
                'harga_satuan' => 200000,
                'harga_total' => 200000,
            ],
            [
                'tgl_faktur' => Carbon::now()->subDays(1)->format('Y-m-d'),
                'no_faktur' => 'INV-20240213-003',
                'nama_konsumen' => 'Citra Lestari',
                'barangs_id' => 5,
                'jumlah' => 3,
                'harga_satuan' => 230000,
                'harga_total' => 690000,
            ],
            [
                'tgl_faktur' => Carbon::now()->subDays(4)->format('Y-m-d'),
                'no_faktur' => 'INV-20240210-004',
                'nama_konsumen' => 'Dewi Lestari',
                'barangs_id' => 2,
                'jumlah' => 1,
                'harga_satuan' => 180000,
                'harga_total' => 180000,
            ],
            [
                'tgl_faktur' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'no_faktur' => 'INV-20240209-005',
                'nama_konsumen' => 'Eka Sari',
                'barangs_id' => 4,
                'jumlah' => 2,
                'harga_satuan' => 220000,
                'harga_total' => 440000,
            ],
        ];

        DB::table('penjualans')->insert($penjualans);
    }
}