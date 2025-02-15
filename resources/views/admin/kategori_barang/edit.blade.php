@extends('layouts.app')

@section('content')
<div class="row">
    <div class="ms-3">
        <h3 class="mb-0 h4 font-weight-bolder">Edit Kategori Barang</h3>
        <p class="mb-4">Perbarui kategori barang.</p>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body p-3">
                <form action="{{ route('kategori_barang.update', $kategoriBarang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" value="{{ $kategoriBarang->nama_kategori }}" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi">{{ $kategoriBarang->deskripsi }}</textarea>
                        </div>
                    </div>
                    <a href="{{ route('kategori_barang.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                    <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
