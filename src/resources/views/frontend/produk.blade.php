@extends('layouts.app')

@section('title', 'Produk | CV. Putra Jaya Sentosa')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Daftar Produk Kami</h2>

    {{-- Kategori Filter --}}
    <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
        <a href="{{ route('produk.index') }}" class="btn btn-outline-primary {{ $kategoriSlug === null ? 'active' : '' }}">
            Semua Kategori
        </a>
        @foreach ($kategoris as $kategori)
            @php
                $slug = str_replace(' ', '-', strtolower($kategori->nama));
            @endphp
            <a href="{{ route('produk.index', ['kategori' => $slug]) }}"
               class="btn btn-outline-primary {{ $kategoriSlug === $slug ? 'active' : '' }}">
                {{ $kategori->nama }}
            </a>
        @endforeach
    </div>

    {{-- Daftar Produk --}}
    <div class="row g-4 {{ $produks->count() === 1 ? 'justify-content-center' : '' }}">
        @forelse ($produks as $produk)
        <div class="col-md-6 col-lg-4 {{ $produks->count() === 1 ? 'mx-auto' : '' }}">
            <div class="card h-100 shadow-sm border-0">
                
                {{-- Carousel Gambar --}}
                @php
                    $fotoArray = is_array($produk->foto) ? $produk->foto : [$produk->foto];
                @endphp

                @if (!empty($fotoArray[0]))
                    <div id="carousel-{{ $produk->id }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($fotoArray as $i => $foto)
                                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $foto) }}"
                                        class="d-block w-100"
                                        style="aspect-ratio: 4 / 3; object-fit: cover; width: 100%;"
                                        alt="Foto {{ $i + 1 }}">
                                </div>
                            @endforeach
                        </div>

                        @if (count($fotoArray) > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $produk->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $produk->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        @endif
                    </div>
                @else
                    <div class="d-flex align-items-center justify-content-center bg-light text-muted"
                         style="height: 260px;">
                        <span>Tidak Ada Gambar</span>
                    </div>
                @endif

                {{-- Informasi Produk --}}
                <div class="card-body text-center">
                    <h5 class="text-orange fw-semibold">{{ $produk->nama }}</h5>
                    <p class="text-muted mb-1">
                        <strong>Stok:</strong> {{ $produk->stok }} {{ $produk->satuan }}
                    </p>
                    <p class="text-muted mb-1">
                        <strong>Kategori:</strong> {{ $produk->kategori->nama ?? '-' }}
                    </p>
                    @if ($produk->keterangan)
                        <div class="small text-secondary" style="max-height: 100px; overflow-y: auto;">
                            {{ $produk->keterangan }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning text-center">
                Tidak ada produk pada kategori ini.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
