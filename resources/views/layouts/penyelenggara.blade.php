<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <title>HOME - HUMMAESPORT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .main-content {
    padding: 20px; /* Padding agar konten tidak terlalu dekat dengan tepi layar */
}
    </style>
      @yield('style')
</head>
<body>
 <!-- Preloader -->
 {{-- <div class="preloader">
    <div class="loader">
        <span></span>
    </div>
</div> --}}

<!-- cursor effect-->
<div class="cursor"></div>
<!-- Header area  -->

<!-- header-section start -->
<header class="header-section w-100">
    <div class="py-sm-6 py-3 mx-xxl-20 mx-md-15 mx-3">
        <div class="d-flex align-items-center justify-content-between gap-xxl-10 gap-lg-8 w-100">
            <nav
                class="navbar-custom d-flex gap-lg-6 align-items-center flex-column flex-lg-row justify-content-start justify-content-lg-between w-100">
                <div class="top-bar w-100 d-flex align-items-center gap-lg-0 gap-6">
                    <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <a class="navbar-brand d-flex align-items-center gap-4" href="index.html">
                        <img class="" src="{{ asset('assets/img/LOGO WEB.png') }}" height="75px" width="75px" alt="favicon">
                        {{-- <img class="w-100 logo2" src="assets/img/logo.png" alt="logo"> --}}
                    </a>
                </div>
                <div class="navbar-toggle-item w-100 position-lg-relative">
                    <ul class="custom-nav gap-lg-7 gap-3 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                        <li class="menu-link">
                            <a href="index">HOME</a>
                        </li>
                        <li class="menu-item">
                            <button>TOURNAMENTS</button>
                            <ul class="sub-menu">
                                <li class="menu-link">
                                    <a href="tournament">TOURNAMENTS</a>
                                </li>
                                <li class="menu-link">
                                    <a href="detailtournament">TOURNAMENTS DETAILS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-link">
                            <a href="game">GAME</a>
                        </li>
                        <li class="menu-item">
                            <button>TEAMS</button>
                            <ul class="sub-menu">
                                <li class="menu-link">
                                    <a href="team">TEAMS</a>
                                </li>
                                <li class="menu-link">
                                    <a href="detailteam">TEAMS DETAILS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <button>PAGES</button>
                            <ul class="sub-menu">
                                <li class="menu-link">
                                    <a href="signup.html">SIGN UP</a>
                                </li>
                                <li class="menu-link">
                                    <a href="signin">SIGN IN</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                <button
                    class="btn-rounded-cus wallet-btn border-0 d-flex align-items-center gap-3 p-xl-2 p-0 pe-xl-6 rounded-5 position-relative">
                    <span class="btn-circle fs-2xl">
                        <i class="ti ti-wallet"></i>
                    </span>
                    <span class="text-nowrap d-none d-xl-block">CONNECT WALLET</span>
                </button>
                <button class="ntf-btn box-style fs-2xl">
                    <i class="ti ti-bell-filled"></i>
                </button>
                {{-- <div class="header-profile pointer">
                    <div class="profile-wrapper d-flex align-items-center gap-3">
                        <div class="img-area overflow-hidden">
                            <img class="w-100" src="assets/img/profile.png" alt="profile">
                        </div>
                        <span class="user-name d-none d-xxl-block text-nowrap">David Malan</span>
                        <i class="ti ti-chevron-down d-none d-xxl-block"></i>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</header>
<!-- header-section end -->

<div class="main-content">

    @yield('content')

</div>

 <!-- footer section start  -->
 <footer class="footer bgn-4 bt">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <div class="footer-logo mb-8">
                        <a href="#" class="d-grid gap-6">
                            <div class="flogo-1">
                                <img class="w-100" src="{{ asset('assets/img/logo2.png') }}" alt="favicon">
                            </div>
                            <div class="flogo-2">
                                <img class="w-100" src="{{ asset('assets/img/logo.png') }}" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="social-links">
                        <ul class="d-flex align-items-center gap-3 flex-wrap">
                            <li>
                                <a href="#"><i class="ti ti-brand-facebook fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-twitter fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-youtube fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-linkedin fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-instagram fs-2xl"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 br br-res py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <h4 class="footer-title mb-8 title-anim">QUICK LINKS</h4>
                    <ul class="footer-list d-grid gap-4">
                        <li><a href="tournament" class="footer-link d-flex align-items-center tcn-6">
                                <i class="ti ti-chevron-right"></i> TOURNAMENTS</a></li>
                        <li><a href="game" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> GAMES </a></li>
                        <li><a href="team" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> TEAMS</a></li>
                        <li><a href="faq" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <h4 class="footer-title mb-8 title-anim">EXPLORE</h4>
                    <ul class="footer-list d-grid gap-4">
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> TOP PLAYERS</a></li>
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> MESSAGES</a></li>
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> PROFILE</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <h4 class="footer-title mb-8 title-anim">FOLLOW US</h4>
                    <ul class="footer-list d-grid gap-4">
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> FACEBOOK</a></li>
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> INSTAGRAM</a></li>
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> TWITER</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pb-4 pt-lg-4 pt-8 justify-content-between g-2">
            <div class="col-xxl-4 col-lg-6 order-last order-lg-first">
                <span>COPYRIGHT © <span class="currentYear"></span> HUMMAESPORT | DESIGNED BY  <a
                        href="https://themeforest.net/user/pixelaxis" class="tcp-1">MAGANG HUMMA </a></span>
            </div>
        </div>
    </div>
    <!-- footer banner img  -->
    <div class="footer-banner-img" id="faa">
        <img class="w-100" src="{{ asset('assets/img/fbanner.png') }}" alt="banner">
    </div>
</footer>
<!-- footer section end  -->

@yield('script')

<!-- ==== js dependencies start ==== -->
<!-- jquery  -->
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
</body>

</html>
{{--  --}}
