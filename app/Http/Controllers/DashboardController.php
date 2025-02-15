<?php

namespace App\Http\Controllers;

use App\Models\MasterBarang;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = MasterBarang::count(); // Jumlah barang tersedia
        $totalPenjualan = Penjualan::count(); // Jumlah transaksi penjualan
        $totalPendapatan = Penjualan::sum('harga_total'); // Total pendapatan dari semua penjualan
        $totalKonsumen = Penjualan::distinct('nama_konsumen')->count('nama_konsumen'); // Total konsumen unik

        return view('admin.dashboard', compact('totalBarang', 'totalPenjualan', 'totalPendapatan', 'totalKonsumen'));
    }
}
