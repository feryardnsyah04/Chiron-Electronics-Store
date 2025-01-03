<nav class="navbar navbar-expand-md" id="navbar-color">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="30" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/shop') }}">Belanja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                </li>

                @auth
                    @if(Auth::user()->is_admin)
                        <li class="nav-item dropdown" id="dashboardDropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dashboardDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f8f6f6">
                                Dashboard
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dashboardDropdown">
                                <li><a class="dropdown-item" href="{{ route('stock.index') }}">Lihat Stok</a></li>
                                <li><a class="dropdown-item" href="{{ route('sales.index') }}">Lacak Penjualan</a></li>
                                <li><a class="dropdown-item" href="{{ route('warranty.index') }}">Mengelola Garansi</a></li>
                            </ul>
                        </li>
                    @endif
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                @else
                    <form action="{{ route('login') }}" method="GET" class="d-inline">
                        @csrf
                        <button class="btn btn-primary">Login</button>
                    </form>
                @endauth
            </ul>            
        </div>
    </div>
</nav>
