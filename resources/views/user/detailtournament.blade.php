
@extends('layouts.user')


@section('style')
@endsection
@section('content')

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

    <!-- tournament details banner section start -->
    <div class="tournament-details pb-10 pt-120 mt-lg-0 mt-sm-15 mt-10 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <a href="javascript:void(0)" onclick="window.history.back()" class="back-btn"><i
                                class="ti ti-arrow-narrow-left fs-2xl"></i></a>
                        <h3 class="tcn-1 cursor-scale growDown title-anim">{{ $tournaments->name }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="parallax-banner-area parallax-container position-relative rounded-5 overflow-hidden">
                        <img class="w-100 h-100 parallax-img" src="{{ asset('assets/img/tour-details-banner.png') }}"
                            alt="tournament banner">
                        <!-- running tournament content here -->
                        <div
                            class="running-tournament d-flex flex-lg-row flex-column position-absolute top-50 start-50 translate-middle w-100">
                            <div class="running-tournament-thumb w-100">
                                <img class="w-100 h-100" src="{{ asset('storage/'. $tournaments->images)}}" alt="tournament thumb">
                            </div>
                            <div class="running-tour-info py-sm-6 py-4 px-xl-15 px-lg-10 px-sm-6 px-2 w-100">
                                <h3 class="tcn-1 mb-lg-6 mb-4">Torneo Individual</h3>
                                <span class="tcn-1 d-block fs-five fw-semibold mb-4">Tournament ending in</span>
                                <div class="ending-date d-flex align-items-center gap-sm-5 gap-2 mb-lg-8 mb-6">
                                    <div class="date-box-area">
                                        <div class="date-box mb-4">
                                            <h3 class="tcn-1 title-anim cursor-scale growDown" id="days">00</h3>
                                        </div>
                                        <span class="tcn-1 text-center d-block">Days</span>
                                    </div>
                                    <div class="date-box-area">
                                        <div class="date-box mb-4">
                                            <h3 class="tcn-1 title-anim cursor-scale growDown" id="hours">00
                                            </h3>
                                        </div>
                                        <span class="tcn-1 text-center d-block">Hours</span>
                                    </div>
                                    <div class="date-box-area">
                                        <div class="date-box mb-4">
                                            <h3 class="tcn-1 title-anim cursor-scale growDown" id="minutes">00
                                            </h3>
                                        </div>
                                        <span class="tcn-1 text-center d-block">Minutes</span>
                                    </div>
                                    <div class="date-box-area">
                                        <div class="date-box mb-4">
                                            <h3 class="tcn-1 title-anim cursor-scale growDown" id="seconds">00
                                            </h3>
                                        </div>
                                        <span class="tcn-1 text-center d-block">Seconds</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-md-6 gap-3">
                                    <a href="tournaments.html"
                                        class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-sm-6 px-4 rounded-pill">registration</a>
                                    <div class="d-flex align-items-center flex-wrap gap-md-6 gap-3 w-50">
                                        <div class="end-date">
                                            <span class="tcn-6">OCT 07, 5:10 AM</span>
                                        </div>
                                        <div class="players">
                                            <i class="ti ti-users-group tcn-1"></i>
                                            <span class="tcn-6">{{ $team }}/16 Team</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tournament details banner section end -->

    <!-- tournament details prize section start -->
    <section class="tournament-prize-section mb-10">
        <div class="container bgn-4 p-lg-10 p-sm-6 p-4">
            <div class="d-flex align-items-center gap-xxl-20 gap-6 flex-wrap">
                <div class="tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-coin-bitcoin display-five fw-normal tcp-2"></i>
                    </div>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Prize Pool</h4>
                    <p class="tcn-1 title-anim">50 ~ $50.00</p>
                </div>
                <div class="tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-wallet display-five fw-normal tcp-2"></i>
                    </div>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Entry Fee</h4>
                    <p class="tcn-1 title-anim">$50.00</p>
                </div>
                <div class="tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-users-group display-five fw-normal tcp-2"></i>
                    </div>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Mode</h4>
                    <p class="tcn-1 title-anim">solo</p>
                </div>
                <div class="tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-sitemap display-five fw-normal tcp-2"></i>
                    </div>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Format</h4>
                    <p class="tcn-1 title-anim">Single Elimination</p>
                </div>
                <div class="tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-trophy display-five fw-normal tcp-2"></i>
                    </div>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Type</h4>
                    <p class="tcn-1 title-anim"> -- </p>
                </div>
            </div>
        </div>
    </section>
    <!-- tournament details prize section end -->

    {{-- <!-- tournament registration details section start -->
    <section class="tour-reg-process-section mb-10">
        <div class="container bgn-4 p-lg-10 p-sm-6 px-4 py-8">
            <!-- tournament registration step area  -->
            <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 gy-10 trp-area">
                <div class="col trp-box">
                    <div class="tour-reg-process-area complete mb-6">
                        <div class="step-area">
                            <div class="step">
                                <div class="step-number">
                                    <span class="tcn-1 fs-xl">1</span>
                                </div>
                                <div class="check">
                                    <i class="ti ti-check fs-2xl tcn-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-reg-content-area">
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-2">Registration Open</h4>
                        <span class="tcn-6 d-block mb-5">Register now to play in the tournament.</span>
                        <span class="date rounded py-2 px-3">OCT 04 - NOV 25</span>
                    </div>
                </div>
                <div class="col trp-box">
                    <div class="tour-reg-process-area complete mb-6">
                        <div class="step-area">
                            <div class="step">
                                <div class="step-number">
                                    <span class="tcn-1 fs-xl">1</span>
                                </div>
                                <div class="check">
                                    <i class="ti ti-check fs-2xl tcn-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-reg-content-area">
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-2">Registration Closed</h4>
                        <span class="tcn-6 d-block mb-5">Creating the brackets we'll start soon</span>
                        <span class="date rounded py-2 px-3">OCT 07</span>
                    </div>
                </div>
                <div class="col trp-box">
                    <div class="tour-reg-process-area pending mb-6">
                        <div class="step-area">
                            <div class="step">
                                <div class="step-number">
                                    <span class="tcn-1 fs-xl">1</span>
                                </div>
                                <div class="check">
                                    <i class="ti ti-check fs-2xl tcn-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-reg-content-area">
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-2">Playing</h4>
                        <span class="tcn-6 d-block mb-5">Register now to play in the tournament.</span>
                        <span class="date rounded py-2 px-3">OCT 07 - OCT 31</span>
                    </div>
                </div>
                <div class="col trp-box">
                    <div class="tour-reg-process-area mb-6">
                        <div class="step-area">
                            <div class="step">
                                <div class="step-number">
                                    <span class="tcn-1 fs-xl">4</span>
                                </div>
                                <div class="check">
                                    <i class="ti ti-check fs-2xl tcn-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-reg-content-area">
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-2">Finished</h4>
                        <span class="tcn-6 d-block mb-5">Tournament finished Prizes are on their way.</span>
                        <span class="date rounded py-2 px-3">OCT 31</span>
                    </div>
                </div>
                <div class="col trp-box">
                    <div class="tour-reg-process-area mb-6">
                        <div class="step-area">
                            <div class="step">
                                <div class="step-number">
                                    <span class="tcn-1 fs-xl">5</span>
                                </div>
                                <div class="check">
                                    <i class="ti ti-check fs-2xl tcn-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-reg-content-area">
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-2">Paid</h4>
                        <span class="tcn-6 d-block mb-5">Payments sent to the winners. Congrats!</span>
                        <span class="date rounded py-2 px-3">OCT 04 - NOV 25</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tournament registration details section end --> --}}

    <!-- tournament more details section start -->
    <section class="tournament-more-details pb-120">
        <div class="container">
            <div class="singletab tournaments-tab">
                <ul class="tablinks d-flex flex-wrap align-items-center gap-3 pb-10">
                    <li class="nav-links active">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Brackets</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Players</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Winners</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Rules</button>
                    </li>
                </ul>
                <div class="tabcontents">
                    <div class="tabitem active">
                        <div class="row g-6 mb-10 ">
                            <!-- Brackets-->
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                    <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                        <h4 class="tcn-1">Round 01</h4>
                                        <span class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">BO3</span>
                                    </div>
                                    <span class="tcn-1 d-block mb-3">Agu 17, 5.30 AM</span>
                                    <span class="tcn-6">128 Players</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                    <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                        <h4 class="tcn-1">Round 02</h4>
                                        <span class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">BO3</span>
                                    </div>
                                    <span class="tcn-1 d-block mb-3">Agu 17, 5.30 AM</span>
                                    <span class="tcn-6">64 Players</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                    <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                        <h4 class="tcn-1">Round 03</h4>
                                        <span class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">BO3</span>
                                    </div>
                                    <span class="tcn-1 d-block mb-3">Agu 17, 5.30 AM</span>
                                    <span class="tcn-6">32 Players</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                    <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                        <h4 class="tcn-1">Round 04</h4>
                                        <span class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">BO3</span>
                                    </div>
                                    <span class="tcn-1 d-block mb-3">Agu 17, 5.30 AM</span>
                                    <span class="tcn-6">16 Players</span>
                                </div>
                            </div>
                        </div>

                        <!-- team tree view  -->
                        <div class=" d-lg-block d-none">
                            <div class="row align-items-center">
                                <!-- grand grand child tree view  -->
                                <div class="col-3">
                                    <div class="d-grid gap-20">
                                        <div class="team-tree-view-area">
                                            <div class="d-grid gap-10">
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-tree-view-area">
                                            <div class="d-grid gap-10">
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-tree-view-area">
                                            <div class="d-grid gap-10">
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-tree-view-area">
                                            <div class="d-grid gap-10">
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                                <ul class="team-tree-view-list grand-grand-child d-grid gap-3">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- grand child tree view  -->
                                <div class="col-3">
                                    <div class="d-grid gap-8">
                                        <div class="team-tree-view-area">
                                            <div class="d-grid gap-10">
                                                <ul class="team-tree-view-list grand-child d-grid gap-3 mb-120">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                                <ul class="team-tree-view-list grand-child d-grid gap-3 mt-120 mb-120">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-tree-view-area">
                                            <div class="d-grid gap-10">
                                                <ul class="team-tree-view-list grand-child d-grid gap-3 mb-120 mt-120">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                                <ul class="team-tree-view-list grand-child d-grid gap-3 mt-120">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- child tree view -->
                                <div class="col-3">
                                    <div class="team-tree-view-area">
                                        <div class="d-grid">
                                            <div class="mb-120 pb-120">
                                                <ul class="team-tree-view-list child d-grid gap-3 mb-120">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mt-120 pt-120">
                                                <ul class="team-tree-view-list child d-grid gap-3 mt-120">
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev1.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>1</span>
                                                    </li>
                                                    <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="team-tree-view-thumb">
                                                                <img class="w-100 rounded-circle"
                                                                    src="assets/img/treev2.png" alt="team-thumb">
                                                            </div>
                                                            <span class="d-block">Dianne Russell</span>
                                                        </div>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- parent tree view  -->
                                <div class="col-3">
                                    <div class="team-tree-view-area">
                                        <ul class="team-tree-view-list parent d-grid gap-3">
                                            <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="team-tree-view-thumb">
                                                        <img class="w-100 rounded-circle" src="assets/img/treev1.png"
                                                            alt="team-thumb">
                                                    </div>
                                                    <span class="d-block">Dianne Russell</span>
                                                </div>
                                                <span>1</span>
                                            </li>
                                            <li class="team-tree-view-item d-between p-3 rounded bgn-4">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="team-tree-view-thumb">
                                                        <img class="w-100 rounded-circle" src="assets/img/treev2.png"
                                                            alt="team-thumb">
                                                    </div>
                                                    <span class="d-block">Dianne Russell</span>
                                                </div>
                                                <span>2</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6 gy-md-10">
                            <!-- branch 01 -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 01</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- branch 02  -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 02</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- branch 03  -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 03</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- branch 04  -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 04</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- branch 05  -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 05</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- branch 06  -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 06</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- branch 07  -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 07</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- branch 08  -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 08</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b1.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Maixito</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b2.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Dianne Russell</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b3.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">El nano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b4.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Fermin Medrano</span>
                                        </div>
                                    </li>
                                    <li class="team-branch-item d-between p-3 rounded bgn-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="team-branch-thumb">
                                                <img class="w-100 rounded-circle" src="assets/img/team-b5.png"
                                                    alt="branch-thumb">
                                            </div>
                                            <span class="tcn-1">Murilotm</span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row align-items-center justify-content-center pt-lg-20 pt-sm-10">
                            <div class="col-lg-4 col-sm-6">
                                <div class="d-grid justify-content-center align-items-center gap-10">
                                    <div class="img-area mx-auto winner-img">
                                        <img class="w-100" src="{{ asset('assets/img/winner-prize.png') }}" alt="prize">
                                    </div>
                                    <div class="content-area">
                                        <h4 class="tcn-1 fs-four title-anim mb-3 text-center">The tournament
                                            hasn't finished
                                            yet</h4>
                                        <span class="tcn-6 text-center d-block">Once the tournament is over, the
                                            data takes a few
                                            minutes to appear.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="accordion-section rule-accordion d-grid gap-6">
                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            Paritdas
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <p class="tcn-6">
                                                Molestias excepturi sint occaecati cupiditate non provident,
                                                similique
                                                sunt in culpa qui officia deserunt mollitia animi, id est
                                                laborum et
                                                dolorum fuga. Et harum quidem
                                                rerum facilis est et expedita distinctio.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            Reglamento
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <ol class="tcn-6 lower-alpha-right-parentheses d-grid gap-3">
                                                <li>Treat all members and staff with courtesy and respect.
                                                    Discriminatory or offensive behavior will not be tolerated.
                                                </li>
                                                <li>Communication Maintain open and constructive communication.
                                                    Address concerns through the appropriate channels.</li>
                                                <li>Emergency Procedures: Familiarize yourself with evacuation
                                                    procedures and the location of emergency exits.</li>
                                                <li>Safeguard sensitive information and respect the privacy of
                                                    others.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            Discord
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <p>Molestias excepturi sint occaecati cupiditate non provident,
                                                similique
                                                sunt in culpa qui
                                                officia
                                                deserunt mollitia animi, id est laborum et dolorum fuga. Et
                                                harum
                                                quidem
                                                rerum facilis
                                                est et
                                                expedita distinctio.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tournament more details section end -->
    @endsection
    @section('script')
@endsection
