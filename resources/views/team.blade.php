
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>TEAMS - HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>



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
                            <img class="w-100 logo1" src="assets/img/favicon.png" alt="favicon">
                            <img class="w-100 logo2" src="assets/img/logo.png" alt="logo">
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
                                        <a href="{{ route('user.tournament') }}">TOURNAMENTS</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-link">
                                <a href="{{ route('game') }}">GAME</a>
                            </li>
                            <li class="menu-item">
                                <button>TEAMS</button>
                                <ul class="sub-menu">
                                    <li class="menu-link">
                                        <a href="{{ route('team.index') }}">TEAMS</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <button>PAGES</button>
                                <ul class="sub-menu">
                                    <li class="menu-link">
                                        <a href="{{ route('login') }}">Login</a>
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

    <!-- notification area start -->
    <div class="notification-area p-4" data-lenis-prevent>
        <div class="notification-card d-grid gap-lg-4 gap-2" data-tilt>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar1.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Cristofer Dorwart</span>
                        <span class="card-text d-block tcn-1 fs-sm">Winners The Last Game</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar2.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Piter Maio </span>
                        <span class="card-text d-block tcn-1 fs-sm">Accept your challenge</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Copa Punto Gamer </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Daily Bonus </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar1.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Cristofer Dorwart</span>
                        <span class="card-text d-block tcn-1 fs-sm">Winners The Last Game</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar2.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Piter Maio </span>
                        <span class="card-text d-block tcn-1 fs-sm">Accept your challenge</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Copa Punto Gamer </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Daily Bonus </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- notification area end -->

    <!-- connect your Wallet section start -->
    <div class="connect-wallet-section position-fixed top-0 start-0 w-100 vh-100">
        <div class="connect-wallet-overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="vh-100 wallet-wrapper d-center">
            <div class="wallet-area pt-lg-8 pt-sm-6 pt-4 pb-lg-20 pb-sm-10 pb-6 px-lg-15 px-sm-8 px-3 bgn-4 rounded-5 ">
                <div class="mb-lg-7 mb-sm-5 mb-3 d-flex justify-content-end">
                    <i class="ti ti-circle-x display-four fw-normal pointer wallet-close-btn"></i>
                </div>
                <h3 class="tcn-1 cursor-scale growDown title-anim mb-lg-20 mb-sm-10 mb-6">
                    Connect Your Wallet
                </h3>
                <div class="wallet-option pb-20">
                    <ul class="d-grid gap-sm-8 gap-4">
                        <li class="wallet-item p-sm-6 p-2 bgn-3 rounded-4">
                            <a href="#" class="d-between">
                                <span>Connect with Metamask</span>
                                <div class="wallet-item-thumb">
                                    <img class="w-100" src="assets/img/metamask.png" alt="metamask">
                                </div>
                            </a>
                        </li>
                        <li class="wallet-item p-sm-6 p-2 bgn-3 rounded-4">
                            <a href="#" class="d-between">
                                <span>Connect with Wallet Connect </span>
                                <div class="wallet-item-thumb">
                                    <img class="w-100" src="assets/img/walletconnect.png" alt="wallet connect">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- connect your Wallet section end -->

    <!-- teams banner section start  -->
    <section class="teams-section pb-sm-10 pb-6 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-10 mb-sm-6 mb-4">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">TEAMS</h2>
                </div>
                <div class="col-12">
                    <div class="parallax-banner-area parallax-container">
                        <img class="w-100 rounded-5 parallax-img" src="assets/img/team-banner.png"
                            alt="tournament banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams banner section end  -->



    <div class="modal" tabindex="-1" id="tambahTeam" style="color: #000;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Team</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">NAME TEAM</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="profile" class="form-label">PROFILE</label>
                            <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" onchange="previewImage(event)">
                            @if(old('profile'))
                                <img id="preview" src="{{ asset('storage/' . old('profile')) }}" alt="Old profile" style="max-width: 100px; max-height: 100px;">
                            @endif
                            @error('profile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">GAME</label><br>
                            <select class="form-control @error('categories_id') is-invalid @enderror" id="category" name="categories_id" aria-label="Default select example">
                                <option value="" selected>Select Game</option>
                                @foreach ($category_id as $kat)
                                    <option value="{{ $kat->id }}" {{ old('categories_id') == $kat->id ? 'selected' : '' }}>
                                        {{ $kat->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('categories_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="kapten" class="form-label">Captain Team</label>
                            <input type="text" class="form-control @error('kapten') is-invalid @enderror" id="kapten" name="kapten" value="{{ old('kapten') }}">
                            @error('kapten')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label for="member" class="form-label">Member Team</label>
                            <input type="text" class="form-control @error('member') is-invalid @enderror" id="member" name="member" value="{{ old('member') }}">
                            @error('member')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- teams card section start   -->
    <section class="teams-card-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-15 mb-10 d-flex justify-content-between align-items-center">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">FIND TEAMS</h2>
                    <div class="text-end">
                        <a type="button" class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahTeam">Add Team</a>
                    </div>
                </div>


            </div>
            <!-- teams card  -->
            <div class="row g-6 justify-content-md-start justify-content-center mb-lg-15 mb-10">
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="assets/img/team-logo9.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">EQUIPO DE JUAN</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-center">
                <button
                    class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill z-2 border-0">VIEW
                    MORE</button>
            </div>
        </div>
    </section>
    <!-- teams card section end   -->

    <!-- footer section start  -->
    <footer class="footer bgn-4 bt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <div class="footer-logo mb-8">
                            <a href="#" class="d-grid gap-6">
                                <div class="flogo-1">
                                    <img class="w-100 " src="{{ asset('assets/img/LOGO WEB.png') }}" alt="favicon">
                                </div>
                                <div class="flogo-2">
                                    <span class="text-nowrap d-none d-xl-block mb-8 title-anim">Humma Esport</span>
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
            <img class="w-100" src="assets/img/fbanner.png" alt="banner">
        </div>
    </footer>
    <!-- footer section end  -->

    <!-- ==== js dependencies start ==== -->
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
    <!-- swiper js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- magnific popup  -->
    <script src="assets/js/magnific-popup.js_1.1.0_jquery.magnific-popup.min.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

</html>
