<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kategori_barang_id',
        'nama',
        'satuan',
        'stok',
        'stok_minimum',
        'foto',
        'keterangan',
    ];

    protected $casts = [
        'foto' => 'array', // supaya Laravel tahu ini array (json)
    ];

    public function transaksis()
    {
        return $this->hasMany(\App\Models\Transaksi::class);
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriBarang::class, 'kategori_barang_id');
    }
}
