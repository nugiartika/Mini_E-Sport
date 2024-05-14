<!DOCTYPE html>

<html lang="id" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed   " dir="ltr"
    data-theme="theme-default"
    data-assets-path="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1" data-framework="laravel"
    data-template="vertical-menu-theme-default-light">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
        <title>Tournament - HummaEsport tes</title>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
            <meta charset="utf-8" />
            <meta name="viewport"
                content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

            <title>
                Dashboard Penyelenggara
            </title>
            <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
            <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
            <!-- laravel CRUD token -->
            <meta name="csrf-token" content="y0lzh53YmoH0xFgY2vFjhD4S1TOiq6lE58zbW7ec">
            <!-- Canonical SEO -->
            <link rel="canonical" href="https://1.envato.market/vuexy_admin">
            <!-- Favicon -->
            <link rel="icon" type="image/x-icon"
                href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />



            <link rel="preconnect" href="https://fonts.googleapis.com/">
            <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
                rel="stylesheet">

            <link rel="stylesheet"
                href="{{ asset('demo/assets/vendor/fonts/tabler-iconsea04.css?id=6ad8bc28559d005d792d577cf02a2116') }}" />
            <link rel="stylesheet"
                href="{{ asset('demo/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5') }}" />
            <link rel="stylesheet"
                href="{{ asset('demo/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d') }}" />
            <!-- Core CSS -->
            <link rel="stylesheet"
                href="{{ asset('') }}demo/assets/vendor/css/rtl/core6cc1.css?id=9dd8321ea008145745a7d78e072a6e36"
                class="template-customizer-core-css" />
            <link rel="stylesheet"
                href="{{ asset('demo/assets/vendor/css/rtl/theme-defaultfc79.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9"
                                class="template-customizer-theme-css') }}" />
            <link rel="stylesheet" href="{{ asset('demo/assets/css/demof1ed.css?id=ddd2feb83a604f9e432cdcb29815ed44') }}" />
            <link rel="stylesheet"
                href="{{ asset('demo/assets/vendor/libs/node-waves/node-wavesd178.css?id=aa72fb97dfa8e932ba88c8a3c04641bc') }}" />
            <link rel="stylesheet"
                href="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar7358.css?id=280196ccb54c8ae7e29ea06932c9a4b6') }}" />
            <link rel="stylesheet"
                href="{{ asset('demo/assets/vendor/libs/typeahead-js/typeaheadb5e1.css?id=2603197f6b29a6654cb700bd9367e2a3') }}" />

        @include('penyelenggara.layouts.meta')


            <!-- Vendor Styles -->
            <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

            <!-- laravel style -->
            <script src="{{ asset('demo/assets/vendor/js/helpers.js') }}"></script>
            <script src="{{ asset('demo/assets/vendor/js/template-customizer.js') }}"></script>

            <script src="{{ asset('demo/assets/js/config.js') }}"></script>

            <script>
                window.templateCustomizer = new TemplateCustomizer({
                    cssPath: '',
                    themesPath: '',
                    defaultStyle: "light",
                    defaultShowDropdownOnHover: "true",
                    displayCustomizer: "true",
                    lang: 'en',
                    pathResolver: function(path) {
                        var resolvedPaths = {
                            'core.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=9dd8321ea008145745a7d78e072a6e36',
                            'core-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d661bae1d0ada9f7e9e3685a3e1f427e',


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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- gsap  -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- gsap scroll trigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- lenis  -->
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
    <!-- gsap split text -->
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <!-- tilt js -->
    <script src="{{ asset('assets/js/vanilla-tilt.js') }}"></script>
    <!-- scroll magic -->
    <script src="{{ asset('assets/js/ScrollMagic.min.js') }}"></script>
    <!-- animation.gsap -->
    <script src="{{ asset('assets/js/animation.gsap.min.js') }}"></script>
    <!-- gsap customization  -->
    <script src="{{ asset('assets/js/gsap-customization.js') }}"></script>
    <!-- apex chart  -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- magnific popup  -->
    <script src="{{ asset('assets/js/magnific-popup.js_1.1.0_jquery.magnific-popup.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/node-waves/node-waves259f.js?id=4fae469a3ded69fb59fce3dcc14cd638') }}">
    </script>
    <script
        src="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a') }}">
    </>
    <script src="{{ asset('demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8') }}"></script>

    <script src="{{ asset('demo/assets/js/mainf696.js?id=8bd0165c1c4340f4d4a66add0761ae8a') }}"></script>

    <script src="{{ asset('demo/assets/js/dashboards-crm.js') }}"></script>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @yield('script')

</body>

</html>
