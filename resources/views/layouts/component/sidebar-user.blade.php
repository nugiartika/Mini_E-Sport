<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->routeIs('dashboardUser') ? 'active' : '' }}">
        <a href="{{ route('dashboardUser') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-tabler-dashboard"></i>
            <span class="ms-1">Dasbor</span>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('user.tournament') ? 'active' : '' }}">
        <a href="{{ route('user.tournament') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-trophy"></i>
            <span class="ms-1">Turnamen</span>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('team.index') ? 'active' : '' }}">
        <a href="{{ route('team.index') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-user-group"></i>
            <span class="ms-1">Tim</span>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('game') ? 'active' : '' }}">
        <a href="{{ route('game') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-device-gamepad-2"></i>
            <div>Game</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('user.tournament.history') ? 'active' : '' }}">
        <a href="{{ route('user.tournament.history') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-history"></i>
            <div>Riwayat Ikutserta</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('transaction.index') ? 'active' : '' }}">
        <a href="{{ route('transaction.index') }}" class="menu-link d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-2">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path
                        d="M17 8V5a1 1 0 0 0-1-1H6a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2V6" />
                    <path d="M20 12v4h-4a2 2 0 0 1 0-4z" />
                </g>
            </svg>
            <div>Riwayat Transaksi</div>
        </a>
    </li>
</ul>
