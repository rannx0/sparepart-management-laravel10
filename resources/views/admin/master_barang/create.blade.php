@extends('layouts.app')

@section('content')
<div class="row">
    <div class="ms-3">
        <h3 class="mb-0 h4 font-weight-bolder">Tambah Barang</h3>
        <p class="mb-4">Tambahkan barang baru.</p>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body p-3 col">
                <form action="{{ route('master_barang.store') }}" method="POST">
                    @csrf
                        <div class="col-md">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Harga Jual</label>
                                <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Harga Beli</label>
                                <input type="number" class="form-control" id="harga_beli" name="harga_beli" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" required>
                            </div>
                        </div>
                        
                    <a href="{{ route('master_barang.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection