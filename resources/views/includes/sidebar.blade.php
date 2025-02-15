<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-3 py-2 m-0" href="#" target="_blank">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26"
                alt="main_logo">
            <span class="ms-1 text-sm text-dark">Sparepart Management</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->routeIs('home.admin') ? 'active bg-gradient-primary text-white' : '' }}" href="{{ route('home.admin') }}">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->routeIs(['master_barang.index', 'master_barang.edit', 'master_barang.create']) ? 'active bg-gradient-primary text-white' : '' }}" href="{{ route('master_barang.index') }}">
                    <i class="material-symbols-rounded opacity-5">inventory_2</i>
                    <span class="nav-link-text ms-1">Master Barang</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->routeIs('penjualan.index') ? 'active bg-gradient-primary text-white' : '' }}" href="{{ route('penjualan.index') }}">
                    <i class="material-symbols-rounded opacity-5">point_of_sale</i>
                    <span class="nav-link-text ms-1">Data Penjualan</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
