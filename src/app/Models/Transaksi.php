<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['barang_id', 'jenis', 'jumlah', 'tanggal', 'keterangan'];

    public function barang()
    {
        return $this->belongsTo(\App\Models\Barang::class);
    }


    protected static function booted()
    {
        static::created(function ($transaksi) {
            $barang = $transaksi->barang;
            if ($transaksi->jenis === 'masuk') {
                $barang->stok += $transaksi->jumlah;
            } else {
                $barang->stok -= $transaksi->jumlah;
            }
            $barang->save();
        });
    }

}
