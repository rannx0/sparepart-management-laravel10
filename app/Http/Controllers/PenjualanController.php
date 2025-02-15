<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\MasterBarang;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with('barang')->get();
        return view('admin.penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        $barangs = MasterBarang::all();
        return view('admin.penjualan.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_faktur' => 'required|date',
            'no_faktur' => 'required|unique:penjualans',
            'nama_konsumen' => 'required',
            'barangs_id' => 'required|exists:master_barangs,id',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'harga_total' => 'required|numeric',
        ]);

        Penjualan::create($request->all());

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $barangs = MasterBarang::all();
        $penjualan = Penjualan::findOrFail($id);

        return view('admin.penjualan.edit', compact('penjualan', 'barangs'));
    }
    

    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'tgl_faktur' => 'required|date',
            'no_faktur' => 'required|unique:penjualans,no_faktur,' . $penjualan->id,
            'nama_konsumen' => 'required',
            'barangs_id' => 'required|exists:master_barangs,id',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'harga_total' => 'required|numeric',
        ]);

        $penjualan->update($request->all());

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil diperbarui.');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil dihapus.');
    }
}
