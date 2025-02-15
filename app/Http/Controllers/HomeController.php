<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarang;
use App\Models\Penjualan;

class HomeController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with('barang')->get();
        $barangs = MasterBarang::all();

        return view('welcome', compact('penjualans', 'barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_faktur' => 'required|date',
            'no_faktur' => 'required|unique:penjualans,no_faktur',
            'nama_konsumen' => 'required',
            'barangs_id' => 'required|exists:master_barangs,id',
            'jumlah' => 'required|integer|min:1',
            'harga_satuan' => 'required|numeric|min:0',
            'harga_total' => 'required|numeric|min:0',
        ]);
    
        // Simpan ke database
        Penjualan::create([
            'tgl_faktur' => $request->tgl_faktur ?? now()->toDateString(),
            'no_faktur' => $request->no_faktur ?? 'INV-' . date('Ymd') . rand(1000, 9999),
            'nama_konsumen' => $request->nama_konsumen,
            'barangs_id' => $request->barangs_id,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'harga_total' => $request->harga_total ?? ($request->jumlah * $request->harga_satuan),
        ]);
    
        return redirect()->route('home')->with('success', 'Pembelian berhasil!');
    }
    

}