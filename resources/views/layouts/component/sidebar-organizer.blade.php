<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->routeIs('dashboardPenyelenggara') ? 'active' : '' }}">
        <a href="{{ url('DashboardOrganizer') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Dashboard">Dasbor</div>
        </a>
    </li>
    <li class="menu-item {{ request()->routeIs('games') ? 'active' : '' }}">
        <a href="{{ url('games') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-device-gamepad-2"></i>
            <div data-i18n="Dashboard">Game</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-id"></i>
            <div data-i18n="Tournament">Turnamen</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('ptournament.index') }}" class="menu-link">
                    <div data-i18n="All Tournament">Semua Turnamen</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('tambahtournament') }}" class="menu-link">
                    <div data-i18n="Create New">Buat Baru</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item {{ request()->routeIs('organizerincome') ? 'active' : '' }}">
        <a href="{{ url('organizerincome') }}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-wallet"></i>
            <div data-i18n="Dashboard">Penghasilan</div>
        </a>
    </li>
    <li class="menu-item {{ request()->routeIs('accbukti') ? 'active' : '' }}">
        <a href="{{ route('accbukti') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-upload"></i>
            <div>Bukti Pembayaran</div>
        </a>
    </li>
    {{-- <li class="menu-item {{ request()->routeIs('payment-proof.index') ? 'active' : '' }}">
        <a href="{{ route('payment-proof.index') }}" class="menu-link d-flex align-items-center">
            <i class="menu-icon tf-icons ti ti-upload"></i>
            <div>Bukti Pembayaran</div>
        </a>
    </li> --}}
</ul>
