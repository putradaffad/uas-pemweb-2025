@extends('layouts.app')

@section('title', 'Layanan | CV. Putra Jaya Sentosa')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="mb-3">Layanan Kami</h1>
        <p class="mx-auto" style="max-width: 700px">Kami tidak hanya menjual drum bekas, tetapi juga menyediakan berbagai layanan pendukung untuk memenuhi kebutuhan industri Anda.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h5 class="mb-3">🧽 Pembersihan & Sterilisasi Drum</h5>
                <p>Kami menyediakan layanan pembersihan menyeluruh untuk drum besi dan plastik. Drum akan dibersihkan dari sisa bahan kimia atau kontaminan sebelum didaur ulang atau digunakan ulang.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h5 class="mb-3">🎨 Pengecatan Custom & Branding</h5>
                <p>Kami menerima jasa pengecatan ulang drum sesuai warna, logo, atau kode produksi Anda. Sangat cocok untuk kebutuhan industri dan branding perusahaan.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h5 class="mb-3">🔧 Modifikasi Drum</h5>
                <p>Kami dapat melakukan modifikasi drum seperti penambahan kran, lubang pengisian, atau penyesuaian bentuk sesuai kebutuhan Anda.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h5 class="mb-3">🔄 Daur Ulang Drum Menjadi Plat</h5>
                <p>Drum besi yang sudah tidak layak pakai akan kami potong dan pipihkan menjadi plat drum. Plat ini dapat dimanfaatkan untuk keperluan pelapisan, pelindung, atau bahan bangunan ringan.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h5 class="mb-3">🚛 Pengiriman & Penjemputan</h5>
                <p>Kami menyediakan layanan pengiriman drum ke lokasi Anda dan juga dapat menjemput drum bekas dari lokasi Anda, sesuai dengan kesepakatan dan wilayah layanan kami.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-light p-4 rounded shadow-sm h-100">
                <h5 class="mb-3">📦 Kami Membeli Drum Bekas Anda</h5>
                <p>Kami juga menerima pembelian drum besi dan plastik bekas dari Anda, baik dalam kondisi layak maupun rusak. Cocok bagi Anda yang ingin menjual drum bekas dari gudang, pabrik, atau tempat penyimpanan.</p>
                <a href="https://wa.me/6289654614720" target="_blank" class="btn btn-success mt-2">
                    Hubungi Kami via WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
