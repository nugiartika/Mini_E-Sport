<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed   " dir="ltr"
    data-theme="theme-default"
    data-assets-path="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1" data-framework="laravel"
    data-template="vertical-menu-theme-default-light">


    <head>


        @include('penyelenggara.layouts.meta')


            <!-- Vendor Styles -->
            <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

            <!-- laravel style -->
            <script src="{{ asset('demo/assets/vendor/js/helpers.js') }}"></script>
            {{-- <script src="{{ asset('demo/assets/vendor/js/template-customizer.js') }}"></script> --}}

            <script src="{{ asset('demo/assets/js/config.js') }}"></script>

            <script>
        window.templateCustomizer = new TemplateCustomizer({
            cssPath: '',
            themesPath: '',
            defaultStyle: "dark",
            defaultShowDropdownOnHover: "true",
            displayCustomizer: "true",
            lang: 'en',
            pathResolver: function(path) {
                var resolvedPaths = {
                    'core.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=9dd8321ea008145745a7d78e072a6e36',
                    'core-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d661bae1d0ada9f7e9e3685a3e1f427e',

                    // Themes
                    'theme-default.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9',
                    'theme-default-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ce86d777a4c5030f51d0f609f202bcc5',
                    'theme-bordered.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=786794ca0c68d96058e8ceeb20f4e7c5',
                    'theme-bordered-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=e7122ef6338b22f7cea9eaff5a96aa8b',
                    'theme-semi-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=a0a317e88e943fdd62d514e00deebb22',
                    'theme-semi-dark-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=e9a2f7cd6ace727264936f6bf93ab1e2',
                }
                return resolvedPaths[path] || path;
            },
            'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions",
                "themes"
            ],
        });
    </script>
            @yield('style')
        </head>

<body>
    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            @include('penyelenggara.layouts.sidebar')

            <!-- Layout page -->
            <div class="layout-page">

                <!-- BEGIN: Navbar-->
                @include('penyelenggara.layouts.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper" >
                    <div class="container-xxl flex-grow-1 container-p-y" >
                        <!-- Content -->
                        @yield('content')


                        <!-- / Content -->
                    </div>
                </div>
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                            <div>
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                , Humma <span>Esport</span>
                            </div>
                            <div class="d-none d-lg-inline-block">
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
    </div>

    <script src="{{ asset('demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c') }}"></script>
    <script src="{{ asset('demo/assets/vendor/js/bootstraped84.js?id=9a6c701557297a042348b5aea69e9b76') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/node-waves/node-waves259f.js?id=4fae469a3ded69fb59fce3dcc14cd638') }}">
    </script>
    <script
        src="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8') }}"></script>

    <script src="{{ asset('demo/assets/js/mainf696.js?id=8bd0165c1c4340f4d4a66add0761ae8a') }}"></script>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @yield('script')

</body>

</html>
