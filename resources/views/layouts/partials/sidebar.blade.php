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
                    <i class="ti-view-list-alt menu-icon"></i>
                    <span class="menu-title">kategori</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(2) == 'index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('daftarberita.index') }}">
                    <i class="icon-book menu-icon"></i>
                    <span class="menu-title">Daftar Berita</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(3) == 'index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('history.historyadmin') }}">
                    <i class="ti-receipt menu-icon"></i>
                    <span class="menu-title">History Pembayaran</span>
                </a>
            </li>

            
        </ul>
    @else
        <ul class="nav">
            <li class="nav-item {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
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
             <li class="nav-item {{ (request()->segment(3) == 'history') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('history.history') }}">
                    <i class="ti-clipboard menu-icon"></i>
                    <span class="menu-title">Riwayat Penghasilan</span>
                </a>
            </li> 
        </ul>
    @endif
</nav>
@show
