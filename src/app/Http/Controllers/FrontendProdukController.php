<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class FrontendProdukController extends Controller
{
    public function index(Request $request)
    {
        $kategoriSlug = $request->kategori;

        $kategoris = KategoriBarang::all();

        $query = Barang::query()->with('kategori');

        if ($kategoriSlug) {
            $kategori = KategoriBarang::whereRaw("REPLACE(LOWER(nama), ' ', '-') = ?", [$kategoriSlug])->first();
            if ($kategori) {
                $query->where('kategori_barang_id', $kategori->id);
            }
        }

        $produks = $query->get();

        return view('frontend.produk', compact('produks', 'kategoris', 'kategoriSlug'));
    }
}

