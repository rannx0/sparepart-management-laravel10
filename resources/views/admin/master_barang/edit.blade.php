@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="ms-3">
            <h3 class="mb-0 h4 font-weight-bolder">Edit Barang</h3>
            <p class="mb-4">
                Ubah informasi barang.
            </p>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <p class="text-sm mb-0 text-capitalize">Edit Barang</p>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('master_barang.update', $masterBarang->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md">
                            <div class="input-group input-group-static my-3">
                                <label>Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang"
                                    value="{{ $masterBarang->kode_barang }}" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-static my-3">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                                    value="{{ $masterBarang->nama_barang }}" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-static my-3">
                                <label>Harga Jual</label>
                                <input type="number" class="form-control" id="harga_jual" name="harga_jual"
                                    value="{{ $masterBarang->harga_jual }}" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-static my-3">
                                <label>Harga Beli</label>
                                <input type="number" class="form-control" id="harga_beli" name="harga_beli"
                                    value="{{ $masterBarang->harga_beli }}" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-static my-3">
                                <label>Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="satuan"
                                    value="{{ $masterBarang->satuan }}" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group input-group-static my-3">
                                <label>Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori"
                                    value="{{ $masterBarang->kategori }}" required>
                            </div>
                        </div>

                        <a href="{{ route('master_barang.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
