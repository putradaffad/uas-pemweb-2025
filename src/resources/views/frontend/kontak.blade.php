@extends('layouts.app')

@section('title', 'Kontak | CV. Putra Jaya Sentosa')

@section('content')
<!-- Kontak Start -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="mb-3">Hubungi Kami</h1>
        <p class="mx-auto" style="max-width: 700px">
            Silakan hubungi kami melalui formulir atau informasi kontak di bawah ini. Jika Anda memiliki drum bekas (besi/plastik) yang ingin dijual, jangan ragu untuk menghubungi kami.
        </p>
    </div>

    <div class="row g-5">
        <!-- Info Kontak -->
        <div class="col-lg-4">
            <div class="bg-light rounded p-4 shadow-sm h-100">
                <h5 class="mb-4">Informasi Kontak</h5>
                <p><i class="fa fa-map-marker-alt me-2 text-primary"></i>Desa Dukuh, Kec. Cikupa, Kab. Tangerang</p>
                <p><i class="fa fa-phone-alt me-2 text-primary"></i>0838-9072-8485</p>
                <p><i class="fa fa-envelope me-2 text-primary"></i>putrajayasentosa19@gmail.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-outline-primary btn-social me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-social me-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-social me-2" href="https://wa.me/6289654614720" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <!-- Formulir Kontak -->
        <div class="col-lg-8">
            <div class="bg-light rounded p-4 shadow-sm">
                <h5 class="mb-4">Formulir Kontak</h5>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('kontak.kirim') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="nama" class="form-control border-0 bg-white px-4" placeholder="Nama Anda" style="height: 55px;" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control border-0 bg-white px-4" placeholder="Email Anda" style="height: 55px;" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="telp" class="form-control border-0 bg-white px-4" placeholder="No. Telepon" style="height: 55px;" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="judul" class="form-control border-0 bg-white px-4" placeholder="Judul Pesan" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <textarea name="pesan" class="form-control border-0 bg-white px-4 py-3" rows="5" placeholder="Isi Pesan Anda... Misalnya: Saya ingin menjual 10 drum plastik 200L di lokasi XYZ." required></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Kontak End -->
@endsection
