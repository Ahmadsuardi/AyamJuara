<!-- Sidebar Layout -->
<div class="sidebar">
    <ul class="nav flex-column">

        <!-- ADMIN MENU -->
        @if (Auth::user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user-list') }}">Dashboard Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}"></a>
            </li>
        @endif

        <!-- PENJUAL MENU -->
        @if (Auth::user()->role === 'penjual')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('penjual.dashboard') }}">Dashboard Penjual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('penjual.index') }}">Data Ayam</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pesanan-penjual.index') }}">Pesanan Masuk</a>
            </li>
        @endif

        <!-- PEMBELI MENU -->
        @if (Auth::user()->role === 'pembeli')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pembeli.index') }}">Dashboard Pembeli</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pesanan.index') }}">Pesanan Saya</a>
            </li>
        @endif

        <!-- LOGOUT -->
        <li class="nav-item mt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link btn btn-link text-danger">Logout</button>
            </form>
        </li>
    </ul>
</div>
