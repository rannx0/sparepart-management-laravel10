@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="ms-3">
            <h3 class="mb-0 h4 font-weight-bolder">Daftar Barang</h3>
            <p class="mb-4">Berikut adalah daftar barang yang tersedia.</p>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header p-2 ps-3">
                    <div class="d-flex justify-content-start align-items-center mt-2 gap-2">
                        <a href="{{ route('master_barang.create') }}" class="btn btn-lg btn-primary">Tambah Barang</a>
                        <a href="{{ route('kategori_barang.index') }}" class="btn btn-lg btn-success">Kategori Barang</a>
                    </div>
                </div>
                <div class="card-body p-2 ps-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                    <th>Satuan</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($barangs as $barang)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td style="word-break: break-word;">{{ $barang->kode_barang }}</td>
                                        <td style="word-break: break-word;">{{ $barang->nama_barang }}</td>
                                        <td class="text-end">{{ number_format($barang->harga_jual, 0, ',', '.') }}</td>
                                        <td class="text-end">{{ number_format($barang->harga_beli, 0, ',', '.') }}</td>
                                        <td class="text-center">{{ $barang->satuan }}</td>
                                        <td>{{ $barang->kategori }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a href="{{ route('master_barang.edit', $barang->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('master_barang.destroy', $barang->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">
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
