<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-menu-theme"
    id="layout-navbar">

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <ul class="navbar-nav flex-row align-items-center ms-auto">

            <!-- Notification -->
            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                <a class="nav-link dropdown-toggle hide-arrow" href="{{ route('notificationTournament') }}"
                    data-bs-target="#Notifikasi" aria-expanded="false">
                    <i class="ti ti-bell ti-md" style="color: white;"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">{{ $counttournaments }}</span>
                </a>
            </li>

            <!--/ Notification -->
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown ">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <i class="ti ti-user-alt"  style="color: white;"></i>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <i class="fas fa-user-alt"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">
                                        {{ auth()->user()->name }}
                                    </span>
                                    <small class="text-muted">Penyelenggara</small>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="javascript:;"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti ti-login me-2"></i>
                            <span class="align-middle">Keluar</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="mb-0">
                            @csrf
                        </form>

                    </li>


                </ul>
            </li>
        </ul>
    </div>

    <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search...">
        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
    </div>
</nav>
<!-- / Navbar -->
<!-- END: Navbar-->
