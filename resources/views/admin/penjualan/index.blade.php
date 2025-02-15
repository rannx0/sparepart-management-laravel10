@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="ms-3">
            <h3 class="mb-0 h4 font-weight-bolder">Data Penjualan</h3>
            <p class="mb-4">Berikut adalah daftar penjualan yang telah dilakukan.</p>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body p-2 ps-2">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Faktur</th>
                                    <th>No Faktur</th>
                                    <th>Nama Konsumen</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan</th>
                                    <th>Harga Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penjualans as $penjualan)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($penjualan->tgl_faktur)->format('d-m-Y') }}</td>
                                        <td class="text-center">{{ $penjualan->no_faktur }}</td>
                                        <td style="word-break: break-word;">{{ $penjualan->nama_konsumen }}</td>
                                        <td style="word-break: break-word;">{{ $penjualan->barang->nama_barang }}</td>
                                        <td class="text-center">{{ $penjualan->jumlah }}</td>
                                        <td class="text-end">{{ number_format($penjualan->harga_satuan, 0, ',', '.') }}</td>
                                        <td class="text-end">{{ number_format($penjualan->harga_total, 0, ',', '.') }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
