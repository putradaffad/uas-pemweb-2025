<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBarang extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    // Relasi ke Barang
    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
