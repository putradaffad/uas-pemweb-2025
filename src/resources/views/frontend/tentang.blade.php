@extends('layouts.app')

@section('title', 'Tentang Kami | CV. Putra Jaya Sentosa')

@section('content')
<div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-5">
        <h1 class="mb-3">Tentang Kami</h1>
        <p class="mx-auto" style="max-width: 700px;">
            Solusi penyedia drum bekas industri yang bersih, siap pakai, dan bisa disesuaikan sesuai kebutuhan Anda.
        </p>
    </div>

    <!-- Profil & Visi Misi -->
    <div class="row g-4 align-items-start">
        <!-- Profil Perusahaan -->
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h4 class="mb-3">Profil Perusahaan</h4>
                <p>
                    CV. Putra Jaya Sentosa adalah perusahaan yang bergerak di bidang jual beli drum bekas industri, baik drum besi maupun plastik.
                    Kami juga mendaur ulang drum menjadi plat, serta menyediakan jasa pengecatan dan modifikasi drum sesuai permintaan.
                </p>
            </div>
        </div>

        <!-- Visi & Misi -->
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h4 class="mb-3">Visi & Misi</h4>
                <p><strong>Visi:</strong> Menjadi penyedia solusi kemasan industri terpercaya dan berkelanjutan.</p>
                <p class="mb-1"><strong>Misi:</strong></p>
                <ul class="mb-0 ps-3">
                    <li>Menyediakan produk drum berkualitas tinggi dan siap pakai.</li>
                    <li>Memberikan layanan tambahan seperti pengecatan dan modifikasi.</li>
                    <li>Berkomitmen pada praktik usaha yang ramah lingkungan.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Kenapa Memilih Kami -->
    <div class="bg-light p-4 rounded shadow-sm mt-5">
        <h4 class="mb-3">Kenapa Memilih Kami?</h4>
        <ul class="ps-3 mb-0">
            <li>Produk bersih, aman, dan siap pakai.</li>
            <li>Dapat dipesan secara grosir atau satuan.</li>
            <li>Pelayanan cepat dan responsif.</li>
            <li>Menerima pembelian drum dari pelanggan (jual ke kami).</li>
            <li>Harga bersaing dan fleksibel untuk mitra industri.</li>
        </ul>
    </div>

    <!-- Galeri -->
    <div class="mt-5">
        <h4 class="text-center mb-4">Galeri Perusahaan</h4>
        <div class="row g-3">
            @foreach (range(1, 6) as $i)
                <div class="col-sm-6 col-md-4">
                    <div class="overflow-hidden rounded shadow-sm">
                        <img src="{{ asset('assets/img/perusahaan-' . $i . '.jpg') }}"
                             class="img-fluid w-100"
                             style="height: 200px; object-fit: cover;"
                             alt="Foto Perusahaan {{ $i }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
