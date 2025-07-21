<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return response()->json(Barang::all());
    }

    public function show($id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }
        return response()->json($barang);
    }

    public function stokMenipis()
    {
        $barangMenipis = Barang::whereColumn('stok', '<', 'stok_minimum')->get();
        return response()->json($barangMenipis);
    }
}
