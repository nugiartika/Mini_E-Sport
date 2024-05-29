<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->routeIs('dashboardUser') ? 'active' : '' }}">
        <a href="{{ route('dashboardUser') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-dashboard"></i>
            <div>Dasbor</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('user.tournament') ? 'active' : '' }}">
        <a href="{{ route('user.tournament') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-trophy"></i>
            <div>Turnamen</div>
        </a>
    </li>

    <li class="menu-item {{ request()->routeIs('team.index') ? 'active' : '' }}">
        <a href="{{ route('team.index') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-users-group"></i>
            <div>Tim</div>
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

    <li class="menu-item {{ request()->routeIs('payment-proof.index') ? 'active' : '' }}">
        <a href="{{ route('payment-proof.index') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-upload"></i>
            <div>Bukti Pembayaran</div>
        </a>
    </li>
</ul>
