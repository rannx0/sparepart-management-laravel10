<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_faktur',
        'no_faktur',
        'nama_konsumen',
        'barangs_id',
        'jumlah',
        'harga_satuan',
        'harga_total',
    ];

    public function barang()
    {
        return $this->belongsTo(MasterBarang::class, 'barangs_id');
    }
}
