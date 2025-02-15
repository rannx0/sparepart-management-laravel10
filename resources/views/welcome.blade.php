<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sparepart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="mb-4">Daftar Sparepart</h2>

    <!-- Notifikasi -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">Harga Satuan: Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</p>
                    
                    <!-- Tombol Beli -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#beliModal{{ $barang->id }}">
                        Beli
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Pembelian -->
        <div class="modal fade" id="beliModal{{ $barang->id }}" tabindex="-1" aria-labelledby="beliModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('home.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="barangs_id" value="{{ $barang->id }}">
                    <input type="hidden" name="harga_satuan" value="{{ $barang->harga_jual }}">
                    <input type="hidden" name="tgl_faktur" value="{{ date('Y-m-d') }}">
                    <input type="hidden" name="no_faktur" class="no_faktur">
                    <input type="hidden" name="harga_total" class="harga_total_hidden">
                
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Beli {{ $barang->nama_barang }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Konsumen</label>
                                <input type="text" name="nama_konsumen" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control jumlah" min="1" required data-harga="{{ $barang->harga_jual }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" value="{{ $barang->nama_barang }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Satuan</label>
                                <input type="text" class="form-control " value="Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Total</label>
                                <input type="text" class="form-control harga_total" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Faktur</label>
                                <input type="text" class="form-control" value="{{ date('Y-m-d') }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Faktur</label>
                                <input type="text" class="form-control nomor_faktur_display" readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Konfirmasi Pembelian</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script untuk Menghitung Harga Total -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".jumlah").forEach(input => {
            input.addEventListener("input", function () {
                let hargaSatuan = parseFloat(this.getAttribute("data-harga"));
                let jumlah = parseInt(this.value) || 0;
                let hargaTotal = hargaSatuan * jumlah;

                let modal = this.closest(".modal");
                modal.querySelector(".harga_total").value = "Rp " + hargaTotal.toLocaleString('id-ID');
                modal.querySelector(".harga_total_hidden").value = hargaTotal;

                let noFaktur = "INV-" + new Date().toISOString().slice(0, 10).replace(/-/g, "") + Math.floor(1000 + Math.random() * 9000);
                modal.querySelector(".nomor_faktur_display").value = noFaktur;
                modal.querySelector(".no_faktur").value = noFaktur;
            });
        });
    });
</script>


</body>
</html>
