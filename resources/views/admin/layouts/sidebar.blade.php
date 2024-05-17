<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/humma-01.png') }}" alt="" width="100%" height="100%">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Humma Esport</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->routeIs(['admin.index', 'category.index','admin.prizepool']) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dasbor</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}" class="menu-link">
                        <div>Dasbor</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('category.index') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}" class="menu-link">
                        <div>Game</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('admin.prizepool') ? 'active' : '' }}">
                    <a href="{{ route('admin.prizepool') }}" class="menu-link">
                        <div>Hadiah Turnamen</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- end dashboard admin --}}

        {{-- Turnamen --}}
        <li class="menu-item {{ request()->routeIs(['konfirmtournament','DetailTournament']) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon ti-md ti ti-trophy text-body"></i>
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
                <li class="menu-item {{ request()->routeIs('DetailTournament') ? 'active' : '' }} ">
                    <a href="{{ route('DetailTournament') }}" class="menu-link">
                        <div>Daftar Turnamen</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- User Diterima --}}
        <li class="menu-item {{ request()->routeIs('user') ? 'active' : '' }}">
            <a href="{{ route('user.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div>Users</div>
            </a>
        </li>

    </ul>

</aside>
