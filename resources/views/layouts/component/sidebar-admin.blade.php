<ul class="menu-inner py-1">
    {{-- Dasbor --}}
    <li class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
        <a href="{{ route('admin.index') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div>Dasbor</div>
        </a>
    </li>

    {{-- Game --}}
    <li class="menu-item {{ request()->routeIs('category.index') ? 'active' : '' }}">
        <a href="{{ route('category.index') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-device-gamepad-2"></i>
            <div>Game</div>
        </a>
    </li>

    {{-- Hadiah Turnamen --}}
    <li class="menu-item {{ request()->routeIs('admin.prizepool') ? 'active' : '' }}">
        <a href="{{ route('admin.prizepool') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-gift"></i>
            <div>Hadiah Turnamen</div>
        </a>
    </li>

    {{-- end dashboard admin --}}

    {{-- Turnamen --}}
    <li class="menu-item {{ request()->routeIs(['konfirmtournament','DetailTournament']) ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-trophy"></i>
            <div>Turnamen</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item {{ request()->routeIs('konfirmtournament') ? 'active' : '' }}">
                <a href="{{ route('konfirmtournament') }}" class="menu-link">
                    <div>Terima Turnamen</div>
                </a>
            </li>
        </ul>
        <ul class="menu-sub">
            <li class="menu-item {{ request()->routeIs('DetailTournament') ? 'active' : '' }}">
                <a href="{{ route('DetailTournament') }}" class="menu-link">
                    <div>Daftar Turnamen</div>
                </a>
            </li>
        </ul>
    </li>

    {{-- User --}}
    <li class="menu-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
        <a href="{{ route('user.index') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-users"></i>
            <div>Pengguna</div>
        </a>
    </li>

    {{-- Data Transaksi --}}
    <li class="menu-item {{ request()->routeIs('transaction.*') ? 'active' : '' }}">
        <a href="{{ route('transaction.index') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-moneybag"></i>
            <div>Data Transaksi</div>
        </a>
    </li>
</ul>
