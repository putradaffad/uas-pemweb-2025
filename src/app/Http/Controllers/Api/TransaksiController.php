<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    public function index()
    {
        return response()->json(
            Transaksi::with('barang')->latest()->get(),
            200
        );
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'barang_id' => 'required|exists:barangs,id',
            'jenis' => 'required|in:masuk,keluar',
            'jumlah' => 'required|integer|min:1',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        $validated = $validator->validated();

        // Simpan transaksi
        $transaksi = Transaksi::create($validated);

        // Update stok barang
        $barang = Barang::find($validated['barang_id']);
        if ($validated['jenis'] === 'masuk') {
            $barang->stok += $validated['jumlah'];
        } else {
            $barang->stok -= $validated['jumlah'];
        }
        $barang->save();

        return response()->json([
            'message' => 'Transaksi berhasil disimpan',
            'data' => $transaksi->load('barang')
        ], 201);
    }

    public function byBarang($id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            return response()->json([
                'message' => 'Barang tidak ditemukan'
            ], 404);
        }

        $transaksis = $barang->transaksis()->latest()->get();

        return response()->json([
            'barang' => $barang,
            'transaksis' => $transaksis
        ]);
    }
}
