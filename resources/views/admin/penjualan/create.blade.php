@extends('layouts.app')

@section('content')

<div class="row">
    <div class="ms-3">
        <h3 class="mb-0 h4 font-weight-bolder">Tambah Penjualan</h3>
        <p class="mb-4">
            Form untuk menambahkan penjualan baru.
        </p>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Form Penjualan</div>
            <div class="card-body">
                <form action="{{ route('penjualan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tgl_faktur">Tanggal Faktur</label>
                        <input type="date" id="tgl_faktur" name="tgl_faktur" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_faktur">No Faktur</label>
                        <input type="text" id="no_faktur" name="no_faktur" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_konsumen">Nama Konsumen</label>
                        <input type="text" id="nama_konsumen" name="nama_konsumen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="barangs_id">Nama Barang</label>
                        <select id="barangs_id" name="barangs_id" class="form-control" required>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="number" id="harga_satuan" name="harga_satuan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_total">Harga Total</label>
                        <input type="number" id="harga_total" name="harga_total" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection