@php
    $user = auth()->user();
    $userRole = $user->role ?? 'user';
@endphp

<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="/admin-panel/assets/" data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <link rel="shortcut icon" href="assets/img/humma-01.png" type="image/x-icon">
    <title>HUMMAESPORT</title>

    <meta name="description" content="" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/admin-panel/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="/admin-panel/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/admin-panel/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/admin-panel/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/admin-panel/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/admin-panel/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/admin-panel/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="/admin-panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/admin-panel/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/admin-panel/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/admin-panel/assets/js/config.js"></script>

    @yield('style')
    @stack('style')

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('index') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('assets/img/humma-01.png') }}" style="width:100%">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">E-Sport</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                @include("layouts.component.sidebar-{$userRole}")
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">



                            <div class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <i class="ti ti-md"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i
                                                    class="ti ti-device-desktop me-2"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            @php
                                $roles = [
                                    'organizer' => 'Penyelenggara',
                                    'admin' => 'Administrator',
                                    'user' => 'Pemain',
                                ];
                                $roleColor = [
                                    'organizer' => 'primary',
                                    'admin' => 'success',
                                    'user' => 'info',
                                ];
                            @endphp

                            <li class="nav-item">
                                <span class="nav-link">
                                    <span
                                        class="badge bg-{{ $roleColor[auth()->user()->role] }}">{{ $roles[auth()->user()->role] }}</span>
                                </span>
                            </li>

                            @if (auth()->user()->role === 'organizer')
                                <!-- Notification -->
                                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1 mx-2">
                                    <a class="nav-link dropdown-toggle hide-arrow"
                                        href="{{ route('notificationTournament') }}" data-bs-target="#Notifikasi"
                                        aria-expanded="false">
                                        <i class="ti ti-bell ti-md" style="color: white;"></i>
                                        <span
                                            class="badge bg-danger rounded-pill badge-notifications">{{ $counttournaments }}</span>
                                    </a>
                                </li>
                                <!-- End Notification -->
                            @endif

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <i class="fas fa-user-alt rounded-circle mt-2"
                                            style="width: 100%; font-size: 25px;"></i>
                                    </div>

                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <i class="fas fa-user-alt rounded-circle mt-2"
                                                            style="width: 100%; font-size: 25px;"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">{{ $user->name }}</span>
                                                    <small class="text-muted">
                                                        @if ($userRole === 'admin')
                                                            Admin
                                                        @elseif($userRole === 'organizer')
                                                            Penyelenggara
                                                        @elseif($userRole === 'user')
                                                            Pengguna
                                                        @endif
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>

                                        <a class="dropdown-item" href="#"
                                            onclick="document.getElementById('logout-form').submit()">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Keluar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    Humma E-Sport
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="/admin-panel/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/admin-panel/assets/vendor/libs/popper/popper.js"></script>
    <script src="/admin-panel/assets/vendor/js/bootstrap.js"></script>
    <script src="/admin-panel/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/admin-panel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/admin-panel/assets/vendor/libs/hammer/hammer.js"></script>

    <script src="/admin-panel/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.css">

    <!-- Main JS -->
    <script src="/admin-panel/assets/js/main.js"></script>

    <!-- Page JS -->
    <script>
        if (typeof TemplateCustomizer !== 'undefined') {
            window.templateCustomizer = new TemplateCustomizer({
                cssPath: assetsPath + 'vendor/css' + (rtlSupport ? '/rtl' : '') + '/',
                themesPath: assetsPath + 'vendor/css' + (rtlSupport ? '/rtl' : '') + '/',
                displayCustomizer: false,
                lang: localStorage.getItem('templateCustomizer-' + templateName + '--Lang') ||
                    'en', // Set default language here
                defaultTheme: 1,
                defaultStyle: 'system',
                defaultContentLayout: 'wide',
                controls: ['rtl', 'style', 'headerType', 'contentLayout', 'layoutCollapsed', 'layoutNavbarOptions',
                    'themes'
                ]
            });
        }
    </script>

    <script>
        $('form').on('submit', function() {
            $(this).find("button[type='submit']").prop('disabled', true);
        })
    </script>

    @if ($errors->any())
        <script>
            toastr.error(`{!! implode('\n', $errors->all()) !!}`);
        </script>
    @endif

    @if (session('warning'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('warning') }}"
            });
        </script>
    @endif


    @if (session('success'))
        <script>
            Swal.fire({
                // title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif

    @stack('script')
</body>

</html>
