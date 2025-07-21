<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 shadow">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-industry me-2"></i>PJS Drum</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
            <a href="{{ url('/tentang') }}" class="nav-item nav-link {{ request()->is('tentang') ? 'active' : '' }}">Tentang</a>
            <a href="{{ url('/produk') }}" class="nav-item nav-link {{ request()->is('produk') ? 'active' : '' }}">Produk</a>
            <a href="{{ url('/layanan') }}" class="nav-item nav-link {{ request()->is('layanan') ? 'active' : '' }}">Layanan</a>
            <a href="{{ url('/kontak') }}" class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>

        </div>
        <a href="{{ url('/kontak') }}" class="btn btn-primary py-3 px-lg-5 d-none d-lg-block">Hubungi Kami</a>
    </div>
</nav>
