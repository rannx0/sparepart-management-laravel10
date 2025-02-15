<?php

namespace App\Http\Controllers;

use App\Models\MasterBarang;
use Illuminate\Http\Request;

class MasterBarangController extends Controller
{
    public function index()
    {
        $barangs = MasterBarang::all();
        return view('admin.master_barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('admin.master_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:master_barangs',
            'nama_barang' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'satuan' => 'required',
            'kategori' => 'required',
        ]);

        MasterBarang::create($request->all());

        return redirect()->route('master_barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $masterBarang = MasterBarang::findOrFail($id);
        
        return view('admin.master_barang.edit', compact('masterBarang'));
    }

    public function update(Request $request, MasterBarang $masterBarang)
    {
        $request->validate([
            'kode_barang' => 'required|unique:master_barangs,kode_barang,' . $masterBarang->id,
            'nama_barang' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'satuan' => 'required',
            'kategori' => 'required',
        ]);

        $masterBarang->update($request->all());

        return redirect()->route('master_barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(MasterBarang $masterBarang)
    {
        $masterBarang->delete();

        return redirect()->route('master_barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
