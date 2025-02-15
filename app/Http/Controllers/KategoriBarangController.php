<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriBarangs = KategoriBarang::all();
        return view('admin.kategori_barang.index', compact('kategoriBarangs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        KategoriBarang::create($request->only(['nama_kategori', 'deskripsi']));

        return redirect()->route('kategori_barang.index')->with('success', 'Kategori barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriBarang $kategoriBarang)
    {
        return view('admin.kategori_barang.show', compact('kategoriBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriBarang $kategoriBarang)
    {
        return view('admin.kategori_barang.edit', compact('kategoriBarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriBarang $kategoriBarang)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kategoriBarang->update($request->only(['nama_kategori', 'deskripsi']));

        return redirect()->route('kategori_barang.index')->with('success', 'Kategori barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriBarang $kategoriBarang)
    {
        $kategoriBarang->delete();

        return redirect()->route('kategori_barang.index')->with('success', 'Kategori barang berhasil dihapus.');
    }
}
