@extends('layouts.app')

@section('title', 'Beranda | CV. Putra Jaya Sentosa')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="w-100" alt="Drum Bekas Berkualitas">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white">Drum Bekas Berkualitas</h1>
                        <p class="fs-5 text-white mb-4">
                            Jual drum besi & plastik bekas industri. Bisa custom pengecatan sesuai kebutuhan Anda.
                        </p>
                        <a href="/produk" class="btn btn-primary py-3 px-5">Lihat Produk</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('assets/img/carousel-2.jpg') }}" class="w-100" alt="Layanan Pengecatan Drum">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white">Layanan Pengecatan Drum</h1>
                        <p class="fs-5 text-white mb-4">
                            Tersedia pengecatan custom warna dan pelapisan sesuai permintaan.
                        </p>
                        <a href="/layanan" class="btn btn-primary py-3 px-5">Lihat Layanan</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Tentang Kami Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="{{ asset('assets/img/drum.jpg') }}" class="img-fluid w-100" alt="Tentang Kami">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4">Tentang Kami</h1>
                <p class="mb-4">
                    CV. Putra Jaya Sentosa bergerak di bidang penjualan drum bekas berkualitas, baik drum plastik maupun besi.
                    Kami melayani kebutuhan industri dan rumah tangga, serta menyediakan layanan pengecatan sesuai pesanan.
                </p>
                <a href="/tentang" class="btn btn-primary py-3 px-5 mt-2">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
<!-- Tentang Kami End -->

<!-- Produk Preview Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 600px;">
            <h1 class="mb-3">Produk Unggulan Kami</h1>
            <p>Kami menyediakan berbagai jenis drum bekas industri berkualitas, termasuk drum besi, drum plastik, dan layanan modifikasi sesuai kebutuhan Anda.</p>
        </div>

        <div class="row g-4 mt-4">
            <!-- Drum Besi -->
            <div class="col-lg-4 col-md-6">
                <div class="border rounded p-4 h-100 bg-light">
                    <h4 class="mb-2">Drum Besi Bekas</h4>
                    <p class="mb-1"><strong>Kapasitas:</strong> 200L</p>
                    <p class="mb-2"><strong>Deskripsi:</strong></p>
                    <p class="mb-0">
                        Drum besi bekas industri yang telah melalui proses pembersihan. Cocok digunakan untuk berbagai keperluan penyimpanan atau distribusi bahan dalam kegiatan industri.
                    </p>
                </div>
            </div>

            <!-- Drum Plastik -->
            <div class="col-lg-4 col-md-6">
                <div class="border rounded p-4 h-100 bg-light">
                    <h4 class="mb-2">Drum Plastik Rekondisi</h4>
                    <p class="mb-1"><strong>Kapasitas:</strong> 150L & 200L</p>
                    <p class="mb-2"><strong>Deskripsi:</strong></p>
                    <p class="mb-0">
                        Drum plastik rekondisi berkualitas, bagian dalam telah dibersihkan menyeluruh dan siap digunakan kembali. Cocok untuk kebutuhan penyimpanan cairan non-kimia dan penggunaan umum.
                    </p>
                </div>
            </div>

            <!-- Jasa Pengecatan -->
            <div class="col-lg-4 col-md-6">
                <div class="border rounded p-4 h-100 bg-light">
                    <h4 class="mb-2">Jasa Pengecatan & Modifikasi</h4>
                    <p class="mb-2"><strong>Deskripsi:</strong></p>
                    <p class="mb-0">
                        Kami menyediakan layanan pengecatan ulang, penambahan lubang, serta modifikasi drum sesuai kebutuhan. Warna dan tampilan dapat disesuaikan dengan identitas perusahaan atau fungsi khusus.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="/produk" class="btn btn-outline-primary px-5 py-3">Lihat Semua Produk</a>
        </div>
    </div>
</div>
<!-- Produk Preview End -->


<!-- Pembelian Drum Start -->
<div class="container-fluid bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-3">Punya Drum Bekas?</h2>
        <p>Kami siap membeli drum besi & plastik bekas dari Anda. Cocok untuk pabrik, gudang, atau supplier lokal.</p>
        <a href="/layanan" class="btn btn-primary">Lihat Layanan Lengkap</a>
    </div>
</div>
<!-- Pembelian Drum End -->

<!-- CTA Start -->
<div class="container-fluid bg-primary text-white py-5">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white mb-4">Siap Bekerja Sama?</h1>
        <p class="mb-4">Hubungi kami untuk konsultasi pemesanan drum dalam jumlah besar, custom branding, atau kebutuhan industri lainnya.</p>
        <a href="/kontak" class="btn btn-outline-light py-3 px-5">Hubungi Kami</a>
    </div>
</div>
<!-- CTA End -->

@endsection
