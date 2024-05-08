<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/humma-01.png" type="image/x-icon">
    <title>Login Humma Esport</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <span></span>
        </div>
    </div>

    <!-- cursor effect-->
    <div class="cursor"></div>
    <!-- Header area  -->

    <!-- header-section start -->
    <header class="header-section w-100 bgn-4">
        <div class="py-sm-6 py-3 mx-xxl-20 mx-md-15 mx-3">
            <div class="d-flex align-items-center justify-content-between gap-xxl-10 gap-lg-8 w-100">
                <nav
                    class="navbar-custom d-flex gap-lg-6 align-items-center flex-column flex-lg-row justify-content-start justify-content-lg-between w-100">
                    <div class="top-bar w-100 d-flex align-items-center gap-6">
                        <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <a class="navbar-brand d-flex align-items-center gap-4" href="">
                            <img class="w-100 logo1" src="{{ asset('assets/img/humma-01.png') }}" alt="favicon">
                        </a>
                    </div>
                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-3 gap-lg-7 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="{{ route('index') }}">HOME</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('user.tournament') }}">TOURNAMEN</a>
                            </li>
                            <li class="menu-link">
                                <a href="{{ route('game') }}">GAME</a>
                            </li>
                            <li class="menu-item">
                            <li class="menu-link">
                                <a href="{{ route('team.index') }}">TEAM</a>
                            </li>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- header-section end -->


    <section class="sign-in-section pb-120 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="container pt-120">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="form-area">
                        <h1 class="tcn-1 text-center cursor-scale growUp mb-10">Login</h1>
                        <form action="{{ route('login') }}" class="sign-in-form" method="POST">
                            @csrf
                            <div class="single-input mb-3">
                                <input type="email" name="email" placeholder="Masukkan Email Anda">

                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror


                            <div class="single-input mb-3">
                                <input type="password" name="password" placeholder="Masukkan Password Anda">
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror


                            <div class="text-center">
                                <button type="submit" class="bttn py-3 px-6 rounded bgp-1">Login</button>
                            </div>
                        </form>
                        <p class="tcn-4 text-center mt-lg-10 mt-6">Belum Mempunyai Akun ? <a
                                href="{{ route('register') }}" class="text-decoration-underline tcp-1">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery  -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- gsap  -->
    <script src="assets/js/gsap.min.js"></script>
    <!-- gsap scroll trigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- lenis  -->
    <script src="assets/js/lenis.min.js"></script>
    <!-- gsap split text -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- tilt js -->
    <script src="assets/js/vanilla-tilt.js"></script>
    <!-- scroll magic -->
    <script src="assets/js/ScrollMagic.min.js"></script>
    <!-- animation.gsap -->
    <script src="assets/js/animation.gsap.min.js"></script>
    <!-- gsap customization  -->
    <script src="assets/js/gsap-customization.js"></script>
    <!-- apex chart  -->
    <script src="assets/js/apexcharts.js"></script>
    <!-- swiper js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- magnific popup  -->
    <script src="assets/js/magnific-popup.js_1.1.0_jquery.magnific-popup.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

</html>
