<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- <svg width="32" height="20" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg> --}}
                <img src="{{ asset('assets/img/humma-01.png') }}" alt="" width="100%" height="100%">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Huma Esport</span>
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
                <i class="menu-icon ti ti-smart-home"></i>
                <div>Dasboard</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}" class="menu-link">
                        <div>Dasboard</div>
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
                <i class="menu-icon ti ti-trophy"></i>
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

        {{-- User --}}
        <li class="menu-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
            <a href="{{ route('user.index') }}" class="menu-link">
                <i class="menu-icon ti ti-users"></i>
                <div>Pengguna</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('income.index') ? 'active' : '' }}">
            <a href="{{ route('income.index') }}" class="menu-link">
                <div>Penghasilan</div>
            </a>
        </li>
        {{-- User --}}
        <li class="menu-item {{ request()->routeIs('transaction.*') ? 'active' : '' }}">
            <a href="{{ route('transaction.index') }}" class="menu-link">
                <i class="menu-icon ti ti-moneybag"></i>
                <div>Data Transaksi</div>
            </a>
        </li>

    </ul>
</aside>