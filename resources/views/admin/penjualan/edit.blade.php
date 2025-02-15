@extends('layouts.app')

@section('content')

<div class="row">
    <div class="ms-3">
        <h3 class="mb-0 h4 font-weight-bolder">Edit Penjualan</h3>
        <p class="mb-4">
            Form untuk mengedit penjualan yang sudah ada.
        </p>
    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-header">Form Edit Penjualan</div>
            <div class="card-body">
                <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tgl_faktur">Tanggal Faktur</label>
                        <input type="date" id="tgl_faktur" name="tgl_faktur" class="form-control" value="{{ $penjualan->tgl_faktur }}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_faktur">No Faktur</label>
                        <input type="text" id="no_faktur" name="no_faktur" class="form-control" value="{{ $penjualan->no_faktur }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_konsumen">Nama Konsumen</label>
                        <input type="text" id="nama_konsumen" name="nama_konsumen" class="form-control" value="{{ $penjualan->nama_konsumen }}" required>
                    </div>
                    <div class="form-group">
                        <label for="barangs_id">Nama Barang</label>
                        <select id="barangs_id" name="barangs_id" class="form-control" required>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}" {{ $barang->id == $penjualan->barangs_id ? 'selected' : '' }}>{{ $barang->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" class="form-control" value="{{ $penjualan->jumlah }}" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="number" id="harga_satuan" name="harga_satuan" class="form-control" value="{{ $penjualan->harga_satuan }}" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_total">Harga Total</label>
                        <input type="number" id="harga_total" name="harga_total" class="form-control" value="{{ $penjualan->harga_total }}" required>
                    </div>
                    <div class="row">
                        <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection