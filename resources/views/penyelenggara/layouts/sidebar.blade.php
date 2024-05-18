<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">

                <img src="{{ asset('assets/img/humma-01.png') }}" alt="" width="100%" height="100%">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Huma Esport</span>
        </a>

    </div>
    <div class="menu-inner-shadow"></div>

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
    </ul>
</aside>
