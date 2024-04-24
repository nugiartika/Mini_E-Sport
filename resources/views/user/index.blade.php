
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>HOME - HUMMAESPORT</title>
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
                            <img class="w-100 logo1" src="assets/img/LOGO WEB.png" alt="favicon">
                            {{-- <img class="w-100 logo2" src="assets/img/logo.png" alt="logo"> --}}
                        </a>
                    </div>
                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul  class="custom-nav gap-lg-7 gap-3 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
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
                                <button>Login</button>
                                <ul class="sub-menu">
                                    <li class="menu-link">
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="{{ route('register') }}">Register</a>
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
        <div class="notification-card d-grid gap-4" data-tilt>
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

    <!-- user account details popup start  -->
    <div class="user-account-popup p-4">
        <div class="account-items d-grid gap-1" data-tilt>
            <div class="user-level-area p-3">
                <div class="user-info d-between">
                    <span class="user-name fs-five">David Malan</span>
                    <div class="badge d-flex align-items-center">
                        <i class="ti ti-medal fs-three fs-normal tcp-2"></i>
                        <i class="ti ti-medal fs-three fs-normal tcp-2"></i>
                        <i class="ti ti-medal fs-three fs-normal tcp-2"></i>
                    </div>
                </div>
                <div class="user-level">
                    <span class="level-title tcn-6">Level</span>
                    <div class="level-bar my-1">
                        <div class="level-progress" style="width: 30%;"></div>
                    </div>
                </div>
            </div>
            <a href="profile.html" class="account-item">View Profile</a>
            <a href="chat.html" class="account-item">Message</a>
            <button class="bttn account-item">Logout</button>
        </div>
    </div>
    <!-- user account details popup end  -->

    <!-- Hero Section start  -->
    <section class="hero-section pt-20 pb-120 position-relative">
        <div class="gradient-bg"></div>
        <div class="gradient-bg2"></div>
        <div class="star-area">
            <div class="big-star">
                <img class="w-100" src="assets/img/big-star.png" alt="star">
            </div>
            <div class="small-star">
                <img class="w-100" src="assets/img/small-star.png" alt="star">
            </div>
        </div>
        <div class="rotate-award">
            <img class="w-100" src="assets/img/award.png" alt="award">
        </div>
        <div class="container pt-120 pb-15">
            <div class="row g-6 justify-content-between">
                <div class="col-lg-5 col-md-6 col-sm-8">
                    <div class="hero-content">
                        <ul class="d-flex gap-3 fs-2xl fw-semibold heading-font mb-5 list-icon title-anim">
                            <li>Play</li>
                            <li>Earn</li>
                            <li>Enjoy</li>
                        </ul>
                        <h1 class="hero-title display-one tcn-1 cursor-scale growUp mb-10">
                            Humma
                            <span class="d-block tcp-1">Esport</span>
                            GAMERS
                        </h1>
                        <a href="https://www.youtube.com/watch?v=G5kzUpWAusI"
                            class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill popupvideo mfp-iframe">Play
                            Now</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-2 col-4 order-md-last order-lg-1">
                    <div class="hero-banner-area">
                        <div class="hero-banner-bg">
                            <img class="w-100" src="assets/img/bg-1.png" alt="banner">
                        </div>
                        <div class="hero-banner-img">
                            <img class="w-100 hero" src="assets/img/hero.png" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 order-md-1 order-lg-last">
                    <div class="hero-content">
                        {{-- <div class="card-area py-lg-8 py-6 px-lg-6 px-3 rounded-5 tilt mb-10" data-tilt>
                            <h3 class="tcn-1 dot-icon cursor-scale growDown mb-6 title-anim">
                                Last Winners
                            </h3>
                            <div class="hr-line mb-6"></div>
                            <div class="card-items d-grid gap-5">
                                <div class="card-item d-flex align-items-center gap-4">
                                    <div class="card-img-area rounded-circle overflow-hidden">
                                        <img class="w-100" src="assets/img/avatar1.png" alt="profile">
                                    </div>
                                    <div class="card-info">
                                        <h4 class="card-title fw-semibold tcn-1 mb-1 cursor-scale growDown2 title-anim">
                                            Cristofer Dorwart
                                        </h4>
                                        <p class="card-text tcs-1 fw-medium">+$220</p>
                                    </div>
                                </div>
                                <div class="hr-line"></div>
                                <div class="card-item d-flex align-items-center gap-4">
                                    <div class="card-img-area rounded-circle overflow-hidden">
                                        <img class="w-100" src="assets/img/avatar2.png" alt="profile">
                                    </div>
                                    <div class="card-info">
                                        <h4 class="card-title fw-semibold tcn-1 mb-1 cursor-scale growDown2 title-anim">
                                            Cristofer Dorwart
                                        </h4>
                                        <p class="card-text tcs-1 fw-medium">+$220</p>
                                    </div>
                                </div>
                                <div class="hr-line"></div>
                                <div class="card-item d-flex align-items-center gap-4">
                                    <div class="card-img-area rounded-circle overflow-hidden">
                                        <img class="w-100" src="assets/img/avatar3.png" alt="profile">
                                    </div>
                                    <div class="card-info">
                                        <h4 class="card-title fw-semibold tcn-1 mb-1 cursor-scale growDown2 title-anim">
                                            Cristofer Dorwart
                                        </h4>
                                        <p class="card-text tcs-1 fw-medium">+$220</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="active-player-list d-grid justify-content-end gap-2">
                            <ul class="player-lists d-flex align-items-center">
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="assets/img/player1.png" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="assets/img/player2.png" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="assets/img/player3.png" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="assets/img/player4.png" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6 heading-font fs-xl">
                                    99+
                                </li>
                            </ul>
                            <span class="d-block tcn-1 dot-icon cursor-scale growDown2 fs-xl text-end">Active
                                Players</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-lines overflow-hidden">
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="lines">
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
            </div>
        </div>
    </section>
    <!-- Hero Section end  -->

    <!-- 3D swiper section start-->
    <section class="swiper-3d-section position-relative z-1" id="swiper-3d">
        <div class="container">
            <!-- Slider main container -->
            <div class="swiper swiper-3d-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="assets/img/slide-3d-7.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">Apex Legends</h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="assets/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="assets/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-btn-area d-center gap-6">
                <div class="swiper-btn swiper-3d-button-prev box-style">
                    <i class="ti ti-chevron-left fs-xl"></i>
                </div>
                <div class="swiper-btn swiper-3d-button-next box-style">
                    <i class="ti ti-chevron-right fs-xl"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- 3D swiper section end-->



    <!-- tournament section start -->
    <section class="tournament-section pb-120" id="tournament-hero">
        <!-- Diamond animation -->
        <div class="diamond-area">
            <img class="w-100" src="assets/img/diamond.png" alt="diamond">
        </div>
        <!-- game console animation -->
        <div class="game-console-area">
            <img class="w-100" src="assets/img/game-console2.png" alt="game-console">
        </div>
        <div class="red-ball top-50"></div>

        <div class="tournament-wrapper">
            <div class="tournament-wrapper-border">
                <div class="container pt-120 pb-120">
                    <div class="row justify-content-between align-items-center gy-sm-0 gy-4 mb-15">
                        <div class="col-md-6 col-sm-8">
                            <h2 class="display-four tcn-1 cursor-scale growUp title-anim">TOURNAMENTS</h2>
                        </div>
                        <div class="col-md-6 col-sm-4 text-sm-end">
                            <a href="tournaments.html"
                                class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill">VIEW
                                MORE</a>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center g-6">
                        <div class="col-xl-4 col-md-6">
                            <div class="tournament-card p-xl-4 p-3 bgn-4">
                                <div class="tournament-img mb-8 position-relative">
                                    <div class="img-area overflow-hidden">
                                        <img class="w-100" src="assets/img/tournament3.png" alt="tournament">
                                    </div>
                                    <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                        <span class="dot-icon alt-icon ps-3">Playing</span>
                                    </span>
                                </div>
                                <div class="tournament-content px-xl-4 px-sm-2">
                                    <div class="tournament-info mb-5">
                                        <a href="tournaments-details.html" class="d-block">
                                            <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                Liga
                                                Triunfo</h4>
                                        </a>
                                        <span class="tcn-6 fs-sm">Torneo Individual</span>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                        <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="assets/img/bitcoin.png" alt="bitcoin">
                                                <span class="tcn-1 fs-sm">75</span>
                                            </div>
                                            <div class="v-line"></div>
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="assets/img/tether.png" alt="tether">
                                                <span class="tcn-1 fs-sm">$49.97</span>
                                            </div>
                                        </div>
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">Free Entry</span>
                                        </div>
                                        <div class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-calendar fs-base tcn-1"></i>
                                            <span class="tcn-1 fs-sm">OCT 07, 5:10 AM</span>
                                        </div>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-more-info d-between mt-6">
                                        <div class="teams-info d-between gap-xl-5 gap-3">
                                            <div class="teams d-flex align-items-center gap-1">
                                                <i class="ti ti-users fs-base"></i>
                                                <span class="tcn-6 fs-sm">12/12 Teams</span>
                                            </div>
                                            <div class="player d-flex align-items-center gap-1">
                                                <i class="ti ti-user fs-base"></i>
                                                <span class="tcn-6 fs-sm">128 Players</span>
                                            </div>
                                        </div>
                                        <a href="tournaments-details.html" class="btn2">
                                            <i class="ti ti-arrow-right fs-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tournament section end -->


    <!-- call to action section start -->
    <div class="call-to-action pt-120 pb-120 bgn-4 overflow-x-hidden" id="cta">
        <div class="container">
            <div class="row justify-content-between g-6">
                <div class="col-lg-6">
                    <span class="display-three tcn-1 cursor-scale growUp mb-8 d-block title-anim">Humma Esport</span>
                    <span class="fs-lg tcn-6">
                       Ingin memmbuat even tourname sendiri? Daftarkan diri anda sebagai penylenggara
                    </span>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <form action="#">

                        <div
                            class="d-flex align-items-md-center align-items-start justify-content-between gap-lg-8 gap-6 flex-md-row flex-column">
                            <div class="d-flex align-items-center gap-lg-4 gap-2">
                                <label class="custom-checkbox">
                                    <input type="checkbox">
                                </label>
                                <span class="fs-base tcn-6"><a href="" class="tcp-1"></a>
                                </span>
                            </div>
                            <button type="submit"
                                class="bttn py-sm-4 py-3 px-lg-10 px-sm-8 px-6 bgp-1 tcn-1 rounded-4">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- call to action section end -->

    <!-- footer section start  -->
    <footer class="footer bgn-4 bt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <div class="footer-logo mb-8">
                            <a href="#" class="d-grid gap-6">
                                <div class="flogo-1">
                                    <img class="w-100" src="assets/img/logo2.png" alt="favicon">
                                </div>
                                <div class="flogo-2">
                                    <img class="w-100" src="assets/img/logo.png" alt="logo">
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
