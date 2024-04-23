
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <title>TEAMS DETAILS - HUMMAESPORT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
                            <img class="w-100 logo1" src="{{ asset('assets/img/favicon.png')}}" alt="favicon">
                            <img class="w-100 logo2" src="{{ asset('assets/img/logo.png')}}" alt="logo">
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
        <div class="notification-card d-grid gap-lg-4 gap-2" data-tilt>
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
                                    <img class="w-100" src="{{ asset('assets/img/metamask.png') }}" alt="metamask">
                                </div>
                            </a>
                        </li>
                        <li class="wallet-item p-sm-6 p-2 bgn-3 rounded-4">
                            <a href="#" class="d-between">
                                <span>Connect with Wallet Connect </span>
                                <div class="wallet-item-thumb">
                                    <img class="w-100" src="{{ asset('assets/img/walletconnect.png') }}" alt="wallet connect">
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

    <!-- team section start  -->
    <section class="team-profile-banner pb-120 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <a href="javascript:void(0)" onclick="window.history.back()" class="back-btn"><i
                            class="ti ti-arrow-narrow-left fs-2xl"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-lg-20 mb-15 pb-lg-10 pb-6">
                    <div class="parallax-banner-area parallax-container">
                        <div class="parallax-img team-banner position-relative">
                            <img class="w-100 h-100 tbi rounded-5" src="{{ asset('assets/img/team-x.png') }}" alt="tournament banner">
                            <div
                                class="team-profile d-between position-absolute z-1 w-100 px-lg-15 px-md-10 px-sm-6 px-4">
                                <div class="d-flex align-items-center gap-sm-6 gap-3">
                                    <div class="team-thumb">
                                        <img class="w-100 h-100 alt rounded-circle" src="{{ asset('storage/'. $teams->profile ) }}"
                                            alt="team logo">
                                    </div>
                                    <div class="team-details mb-3">
                                        <h3 class="team-name">{{ $teams->name }}</h3>
                                        <div class="d-flex gap-sm-6 gap-2 align-items-center flex-wrap">
                                            <div class="d-flex gap-sm-3 gap-1 align-items-center">
                                                <i class="ti ti-users fs-2xl"></i>
                                                <span class="tcn-6">3 players</span>
                                            </div>
                                            <div class="d-flex gap-sm-3 gap-1 align-items-center">
                                                <i class="ti ti-world fs-2xl"></i>
                                                <span class="tcn-6">English</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="player-lists d-md-flex align-items-center d-none">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="{{ asset('assets/img/player1.png') }}" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="{{ asset('assets/img/player2.png') }}" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="{{ asset('assets/img/player3.png') }}" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="{{ asset('assets/img/player4.png') }}" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-lg-6 g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-info p-xl-8 p-md-6 p-2 bgn-4 d-flex align-items-center gap-lg-6 gap-4 rounded">
                        <div class="team-info-icon">
                            <img class="w-100" src="{{ asset('assets/img/wallet2.png') }}" alt="img">
                        </div>
                        <div class="team-info-details">
                            <h3 class="team-info-text tcn-1">$5960</h3>
                            <span class="team-info-title tcn-6">Money Earned</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-info p-xl-8 p-md-6 p-2 bgn-4 d-flex align-items-center gap-lg-6 gap-4 rounded">
                        <div class="team-info-icon">
                            <img class="w-100" src="{{ asset('assets/img/star.png') }}" alt="img">
                        </div>
                        <div class="team-info-details">
                            <h3 class="team-info-text tcn-1">20</h3>
                            <span class="team-info-title tcn-6">Tournaments Played</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-info p-xl-8 p-md-6 p-2 bgn-4 d-flex align-items-center gap-lg-6 gap-4 rounded">
                        <div class="team-info-icon">
                            <img class="w-100" src="{{ asset('assets/img/tropy2.png') }}" alt="img">
                        </div>
                        <div class="team-info-details">
                            <h3 class="team-info-text tcn-1">15</h3>
                            <span class="team-info-title tcn-6">Tournaments Won</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section end  -->

    <!-- player details section start -->
    <section class="player-details-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills gap-3 mb-lg-10 mb-6" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="parent-tab1" data-bs-toggle="pill"
                                data-bs-target="#pills-parent1" role="tab" aria-selected="true">Players</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="parent-tab2" data-bs-toggle="pill"
                                data-bs-target="#pills-parent2" role="tab" aria-selected="false">Tournaments</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-parent1" role="tabpanel">
                            <div class="player-list-wrapper">
                                <ul class="player-list d-grid gap-6">
                                    <li class="d-between bgn-4 py-sm-4 py-3 px-sm-8 px-3 rounded">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="player-img">
                                                <img class="w-100 rounded-circle" src="{{ asset('assets/img/player1.png') }}"
                                                    alt="player">
                                            </div>
                                            {{-- <h5 class="player-name tcn-1">{{ $teams->user_id->name }}</h5> --}}
                                            <div class="player-badge">
                                                <img src="{{ asset('assets/img/chess-queen.png') }}" alt="badge">
                                            </div>
                                        </div>
                                        <span class="player-type">captain</span>
                                    </li>
                                    <li class="d-between bgn-4 py-sm-4 py-3 px-sm-8 px-3 rounded">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="player-img">
                                                <img class="w-100 rounded-circle" src="{{ asset('assets/img/player2.png') }}"
                                                    alt="player">
                                            </div>
                                            <h5 class="player-name tcn-1">Cucahook</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <di v class="tab-pane fade" id="pills-parent2" role="tabpanel">

                            <!-- nested tabs start here -->
                            <ul class="nested-tabs nav nav-pills gap-6 my-lg-10 my-6" id="pill-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="child-tab1" data-bs-toggle="pill"
                                        data-bs-target="#pill-child1" role="tab" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="child-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-child2" role="tab" aria-selected="false">Active</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="child-tab3" data-bs-toggle="pill"
                                        data-bs-target="#pills-child3" role="tab" aria-selected="false">Played</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pill-tabContent">
                                <div class="tab-pane fade show active" id="pill-child1" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="team-game-table w-100" data-lenis-prevent>
                                            <thead>
                                                <tr>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Game</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Date</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Time</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Entry Fee</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Prize Pool</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Teams</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tdw p-3 tcn-6">Rocket League Rocket League Rocket
                                                        League Rocket League Rocket League RocketLeague
                                                    </td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">30-11-2023</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">11:00 UTC +6</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">200 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">20000 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">BG TEAM</td>
                                                </tr>
                                                <tr>
                                                    <td class="tdw p-3 tcn-6">Rocket League Rocket League Rocket
                                                        League</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">30-11-2023</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">11:00 UTC +6</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">200 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">20000 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">BG TEAM</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-child2" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="team-game-table w-100" data-lenis-prevent>
                                            <thead>
                                                <tr>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Game</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Date</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Time</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Entry Fee</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Prize Pool</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Teams</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tdw p-3 tcn-6">Clash Royale</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">30-11-2023</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">20:00 UTC +6</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">80 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">1000 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">EQUIPO DE JUAN</td>
                                                </tr>
                                                <tr>
                                                    <td class="tdw p-3 tcn-6">Rainbow Six Siege Rainbow Six
                                                        Siege</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">30-12-2023</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">23:00 UTC +6</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">150 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">15000 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">ASIA MOK32</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-child3" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="team-game-table w-100" data-lenis-prevent>
                                            <thead>
                                                <tr>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Game</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Date</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Time</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Entry Fee</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Prize Pool</th>
                                                    <th class="tdw p-3 text-nowrap tcn-5">Teams</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tdw p-3 tcn-6">Clash Royale</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">30-11-2023</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">20:00 UTC +6</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">80 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">1000 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">EQUIPO DE JUAN</td>
                                                </tr>
                                                <tr>
                                                    <td class="tdw p-3 tcn-6">Rainbow Six Siege Rainbow Six
                                                        Siege</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">30-12-2023</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">23:00 UTC +6</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">150 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">15000 USD</td>
                                                    <td class="tdw p-3 text-nowrap tcn-6">ASIA MOK32</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- nested tabs end here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- player details section end -->

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
