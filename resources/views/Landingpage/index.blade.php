<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/humma-01.png" type="image/x-icon">
    <title>HOME - HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    @php
        use App\Models\TeamTournament;
        use App\Models\Team;
    @endphp
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <span></span>
        </div>
    </div>

    <div class="cursor"></div>

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
                            <img class="" src="assets/img/humma-01.png" width="70px" height="50px"
                                alt="favicon">
                        </a>
                    </div>
                    {{-- <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-lg-7 gap-3 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="tournaments.html">Tournaments</a>
                            </li>
                            <li class="menu-link">
                                <a href="game.html">Game</a>
                            </li>
                            <li class="menu-link">
                                <a href="game.html">Team</a>
                            </li>

                        </ul>
                    </div> --}}
                </nav>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">

                    <ul class="custom-nav gap-lg-7 gap-3 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                        <li class="menu-link">
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="menu-link">
                            <a href="{{ route('userTournament') }}">Tournaments</a>
                        </li>
                        <li class="menu-link">
                            <a href="{{ route('userGame') }}">Game</a>
                        </li>
                        <li class="menu-link">
                            <a href="{{ route('userTim') }}">Team</a>
                        </li>
                        <li class="menu-link">
                            <a href="{{ route('login') }}"
                                class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill ">Masuk</a>
                        </li>
                        </li>
                    </ul>

                    <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                        @if (auth()->check())
                            <div class="header-profile pointer">
                                <div class="profile-wrapper d-flex align-items-center gap-3">
                                    <div class="img-area overflow-hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 36 36">
                                            <path fill="currentColor"
                                                d="M30.61 24.52a17.16 17.16 0 0 0-25.22 0a1.51 1.51 0 0 0-.39 1v6A1.5 1.5 0 0 0 6.5 33h23a1.5 1.5 0 0 0 1.5-1.5v-6a1.51 1.51 0 0 0-.39-.98"
                                                class="clr-i-solid clr-i-solid-path-1" />
                                            <circle cx="18" cy="10" r="7" fill="currentColor"
                                                class="clr-i-solid clr-i-solid-path-2" />
                                            <path fill="none" d="M0 0h36v36H0z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="user-name d-none d-xxl-block text-nowrap">{{ auth()->user()->name }}</span>
                                    <i class="ti ti-chevron-down d-none d-xxl-block"></i>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->


    @if (auth()->check())
        <div class="user-account-popup p-4">
            <div class="account-items d-grid gap-1" data-tilt>
                <div class="user-level-area p-3">
                    <div class="user-info d-between">
                        <span class="user-name fs-five">Nama : {{ auth()->user()->name }}</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bttn account-item" type="submit">Log Out</button>
                </form>
            </div>
        </div>
    @endif

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

                        </ul>
                        <h1 class="hero-title display-one tcn-1 cursor-scale growUp mb-10">
                            Humma
                            <span class="d-block tcp-1">Esport</span>
                            GAMERS
                        </h1>

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
                    @foreach ($Categories as $category)
                        <div class="swiper-slide">
                            <div class="card-3d d-grid justify-content-center p-3"style="min-heigt:200px;">
                                <div class="img-area w-100 mb-8 position-relative">
                                    <img class="w-100" src="{{ asset('storage/' . $category->photo) }}"
                                        alt="game" style="width: 200px; height: 200px; object-fit: cover;">
                                </div>

                                <h5 class="card-title text-center tcn-1 mb-4 title-anim">{{ $category->name }}</h5>

                            </div>
                        </div>
                    @endforeach
                    <!-- Slides -->
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
                            <h2 class="display-four tcn-1 cursor-scale growUp title-anim">TOURNAMENT TERBARU</h2>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center g-6">

                        @forelse ($newtournament as $index => $Tournament)
                            @php
                                $isPaidTournament = $Tournament->paidment === 'Berbayar';

                                if ($isPaidTournament) {
                                    $teamCount = $acceptedTeamCounts->get($Tournament->id);
                                    $teamIdCount = $acceptedTeamIdCounts->get($Tournament->id);
                                } else {
                                    $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
                                        ->groupBy('tournament_id')
                                        ->get();

                                    $teamIdCounts = TeamTournament::select(
                                        'tournament_id',
                                        DB::raw('COUNT(*) as count'),
                                    )
                                        ->groupBy('tournament_id')
                                        ->get();
                                    $teamCount = $teamCounts->firstWhere('tournament_id', $Tournament->id);
                                    $teamIdCount = $teamIdCounts->firstWhere('tournament_id', $Tournament->id);
                                }

                                $totalTeams =
                                    ($teamCount ? $teamCount->count : 0) + ($teamIdCount ? $teamIdCount->count : 0);

                                $userTeams = $teams ?? collect();
                                $userTeamsInTournament = $userTeams->where('tournament_id', $Tournament->id);
                                $isUserInTournament = $userTeamsInTournament->isNotEmpty();

                                if ($isUserInTournament) {
                                    // Ambil ID tim pengguna dalam turnamen berdasarkan ID turnamen
                                    $userTeamIds = $userTeamsInTournament->pluck('id')->toArray();

                                    // Cek apakah ada relasi antara tim pengguna dan team_tournaments berdasarkan ID tim dan ID turnamen
                                    $userTeamsWithRelation = TeamTournament::whereIn('team_id', $userTeamIds)
                                        ->where('tournament_id', $Tournament->id)
                                        ->get();
                                }
                                $userId = Auth::id();

                                $userTeamIds = Team::where('user_id', $userId)->pluck('id')->toArray();

                                // Cek apakah ada tim pengguna dalam turnamen ini
                                $teamtournamentId = TeamTournament::where('tournament_id', $Tournament->id)
                                    ->whereIn('team_id', $userTeamIds)
                                    ->exists();
                            @endphp
                            @if ($totalTeams != $Tournament->slotTeam && $Tournament->status === 'accepted' && $Tournament->aktif === 'aktif')
                                <div class="col-xl-4 col-md-6">
                                    <div class="tournament-card p-xl-4 p-3 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100"
                                                    src="{{ asset('storage/' . $Tournament->images) }}"
                                                    alt="tournament" />
                                            </div>
                                        </div>
                                        <div class="tournament-content px-xl-4 px-sm-2">
                                            <div class="tournament-info mb-5">
                                                <a href="tournaments-details.html" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        {{ $Tournament->name }}</h4>
                                                </a>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="ti ti-brand-flightradar24"></i> <span
                                                            class="tcn-1 fs-sm">
                                                            {{ $Tournament->aktif === 'aktif' ? 'Aktif' : ($Tournament->aktif === 'tidak aktif' ? 'Tidak aktif' : 'Tidak Diketahui') }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">
                                                        {{ $Tournament->paidment === 'Gratis' ? 'Gratis' : ($Tournament->paidment === 'Berbayar' ? 'Berbayar' : 'Status pembayaran tidak valid') }}
                                                    </span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-calendar fs-base tcn-1"></i>
                                                    <span
                                                        class="tcn-1 fs-sm">{{ $Tournament->permainan->locale('id')->translatedFormat('d F Y H:i') }}</span>
                                                </div>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-more-info d-between mt-6">
                                                <div class="teams-info d-between gap-xl-5 gap-3">
                                                    <div class="teams d-flex align-items-center gap-1">
                                                        <i class="ti ti-users fs-base"></i>
                                                        <span class="tcn-6 fs-sm"> Slot Tim :
                                                            @if ($totalTeams)
                                                                {{ $totalTeams }}/{{ $Tournament->slotTeam }}
                                                                Teams
                                                            @else
                                                                0/{{ $Tournament->slotTeam }} Teams
                                                            @endif
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-sm-4 text-sm-end">
                                                    <a href="{{ route('landingpageDetailTournamet', ['id' => $Tournament->id]) }}"
                                                        class="btn-half-border position-relative d-inline-block py-2 px-3 bgp-1 rounded-pill">Detail</a>
                                                </div>
                                                {{-- <a href="tournaments-details.html" class="btn2">
                                            <i class="ti ti-arrow-right fs-2xl"></i>
                                        </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div class="col-lg-12">
                                <center>
                                    <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                        style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                                </center>
                                <h4 class="text-light" style="text-align: center;">
                                    Tournament Tidak Tersedia
                                </h4>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- tournament section end -->

    <!-- teams card section start   -->
    <section class="teams-card-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-15 mb-10">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Tim Teraktif</h2>
                </div>
            </div>
            <!-- teams card  -->
            <div class="row g-6 justify-content-md-start justify-content-center mb-lg-15 mb-10">
                {{-- @dd($topTeams); --}}
                @forelse ($topTeams as $team)
                    @php
                        $membersCount = \App\Models\Member::where('team_id', $team->data->id)
                            ->whereNotNull('nickname')
                            ->count();
                    @endphp

                    <div class="col-xl-4 col-md-6">
                        <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                            <div class="team-thumb overflow-hidden rounded-circle" style="height: 5rem; width: 5rem">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="{{ asset('storage/' . $team->data->team->profile) }}" alt="team"
                                    style="object-fit: cover">
                            </div>

                            <div class="team-info w-100">
                                <div class="title-area d-flex gap-5 align-items-end mb-5">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">{{ $team->data->team->name }}</h4>
                                </div>
                                <div class="player-info d-flex gap-6 align-items-center mb-6">
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="ti ti-users fs-2xl"></i>
                                        <span class="tcn-6">{{ $membersCount }} players</span>
                                    </div>
                                    {{-- <div class="d-flex gap-3 align-items-center">
                                        <i class="ti ti-device-gamepad-2 fs-2xl"></i>
                                        <span
                                            class="tcn-6">{{ $team->category ? $team->category->name : $team->tournament->category->name }}</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- teams card section end   -->


    <!-- Start modal Filter-->
    <div class="modal fade" tabindex="-1" id="filter" style="color: #ffffff;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('index') }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="widget-title text-black"><b>Game Filters</b></h4>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:#7367f0; border:none;">Search</button>
                        </div>

                        @foreach ($Categories as $game)
                            <div class="form-check text-black">
                                <input type="checkbox" class="form-check-input text-black"
                                    id="category{{ $game->id }}" name="categories_id"
                                    value="{{ $game->id }}" <label class="text-black"
                                    for="category{{ $game->id }}">
                                {{ $game->name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end modal Filter-->

    <!-- footer section start  -->
    <footer class="footer bgn-4 bt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <div class="flogo-1">
                            <img class="w-100 " src="{{ asset('assets/img/humma-01.png') }}" alt="favicon">
                        </div>
                        <div class="flogo-2">
                            <span class="text-nowrap d-none d-xl-block mb-8 title-anim">Humma Esport</span>
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
                    <span>COPYRIGHT © <span class="currentYear"></span> HUMMAESPORT | DESIGNED BY <a href=""
                            class="tcp-1">MAGANG HUMMA </a></span>
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
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/lenis.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/vanilla-tilt.js"></script>
    <script src="assets/js/ScrollMagic.min.js"></script>
    <script src="assets/js/animation.gsap.min.js"></script>
    <script src="assets/js/gsap-customization.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/magnific-popup.js_1.1.0_jquery.magnific-popup.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
