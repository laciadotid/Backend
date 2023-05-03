@section('sidebar')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    @if (Auth::user()->user_category == 'admin')
        <ul class="nav">
            <li class="nav-item {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(1) == 'kategori') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kategori.index') }}">
                    <i class="ti-heart menu-icon"></i>
                    <span class="menu-title">kategori</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(2) == 'index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('daftarberita.index') }}">
                    <i class="icon-book menu-icon"></i>
                    <span class="menu-title">Daftar Berita</span>
                </a>
            </li>

             {{-- <li class="nav-item {{ (request()->segment(1) == 'berita') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('berita.index') }}">
                    <i class="ti-heart menu-icon"></i>
                    <span class="menu-title">Pelayanan</span>
                </a>
            </li> --}}
            {{-- <li class="nav-item {{ (request()->segment(1) == 'reservations') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reservations.index') }}">
                    <i class="ti-book menu-icon"></i>
                    <span class="menu-title">Reservasi</span>
                </a>
            </li> --}}
        </ul>
    @else
        <ul class="nav">
            <li class="nav-item {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('penulis.dashboard') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(2) == 'index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('berita.index') }}">
                    <i class="icon-book menu-icon"></i>
                    <span class="menu-title">Berita</span>
                </a>
            </li>
            {{-- <li class="nav-item {{ (request()->segment(2) == 'history' || request()->segment(3) == 'edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reservations.history') }}">
                    <i class="ti-clipboard menu-icon"></i>
                    <span class="menu-title">Riwayat Reservasi</span>
                </a>
            </li> --}}
        </ul>
    @endif
</nav>
@show
