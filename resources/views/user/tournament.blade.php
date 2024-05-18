<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/humma-01.png" type="image/x-icon">
    <title>TOURNAMENT - HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .profile-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }

        .name-text {
            color: black;
            margin-bottom: 0;
        }

        .border-red {
            border: 2px solid rgb(0, 0, 0) !important;
            /* Menambahkan border merah */
        }
    </style>
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
                            <img class="" src="assets/img/humma-01.png" width="60px" height="60px"
                                alt="favicon">
                        </a>
                    </div>

                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-lg-7 gap-3 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="{{ route('index') }}">HOME</a>
                            </li>
                            <li class="menu-item">
                            <li class="menu-link">
                                <a href="{{ route('user.tournament') }}">TOURNAMENT</a>
                            </li>
                            </li>
                            <li class="menu-link">
                                <a href="{{ route('game') }}">GAME</a>
                            </li>
                            <li class="menu-item">
                            <li class="menu-link">
                                <a href="{{ route('team.index') }}">TEAMS</a>
                            </li>
                            </li>

                            <li class="menu-item">
                            <li class="menu-link">
                                <a href="{{ route('login') }}">LOGIN</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                    <button class="ntf-btn box-style fs-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 22 22">
                            <path fill="currentColor"
                                d="M13 21H9v-1H8v-6H2v-1H1V9h1V8h6V2h1V1h4v1h1v6h6v1h1v4h-1v1h-6v6h-1M12 5V3h-2v2m-5 7v-2H3v2Z" />
                        </svg>
                    </button>
                </div>

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
                                <span class="user-name d-none d-xxl-block text-nowrap">{{ auth()->user()->name }}</span>
                                <i class="ti ti-chevron-down d-none d-xxl-block"></i>
                            </div>
                        </div>
                    @endif
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


    <!-- tournament section start -->
    <section class="tournament-section pb-120 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="tournament-wrapper alt">
            <div class="container">
                <div class="row justify-content-between align-items-end mb-8">
                    <div class="col">
                        <h2 class="display-four tcn-1 cursor-scale growUp title-anim">TOURNAMENTS</h2>
                    </div>
                </div>
                <div class="singletab tournaments-tab">
                    <div class="d-between gap-6 flex-wrap mb-lg-15 mb-sm-10 mb-6">
                        <ul class="tablinks d-flex flex-wrap align-items-center gap-3">
                            <li class="nav-links active">
                                <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">All</button>
                            </li>
                        </ul>
                        <div class="px-6">
                            <a href="#"
                                class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill">VIEW
                                MORE</a>
                        </div>
                    </div>
                    <div class="tabcontents">
                        <div class="tabitem active">
                            <div class="row justify-content-md-start justify-content-center g-6">
                                @forelse ($tournaments->where('status', 'accepted') as $index => $tournament)
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100"
                                                    src="{{ asset('storage/' . $tournament->images) }}"
                                                    alt="tournament">
                                            </div>
                                            <span
                                                class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                {{-- <a href="{{ route('ptournament.detail') }}" class="d-block"> --}}
                                                <h4
                                                    class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                    {{ $tournament->name }}
                                                </h4>
                                                {{-- </a> --}}
                                                <span class="tcn-6 fs-sm">{{ $tournament->penyelenggara }}</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img class="w-100" src="assets/img/bitcoin.png"
                                                            alt="bitcoin">
                                                        <span class="tcn-1 fs-sm">75</span>
                                                    </div>
                                                    <div class="v-line"></div>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img class="w-100" src="assets/img/tether.png"
                                                            alt="tether">
                                                        <span class="tcn-1 fs-sm">$49.97</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-calendar fs-base tcn-1"></i>
                                                    <span
                                                        class="tcn-1 fs-sm">{{ \Carbon\Carbon::parse($tournament->permainan)->format('d F Y') }}</span>
                                                </div>
                                            </div>

                                            {{-- @php
                                                $teamCount = $teamCounts->firstWhere(
                                                    'tournament_id',
                                                    $tournament->id,
                                                );
                                                $teamIdCount = $teamIdCounts->firstWhere(
                                                    'tournament_id',
                                                    $tournament->id,
                                                );
                                            @endphp --}}

                                            @php
                                                $teamCount = $teamCounts->firstWhere(
                                                    'tournament_id',
                                                    $tournament->id,
                                                );
                                                $teamIdCount = $teamIdCounts->firstWhere(
                                                    'tournament_id',
                                                    $tournament->id,
                                                );
                                                $totalTeams =
                                                    ($teamCount ? $teamCount->count : 0) +
                                                    ($teamIdCount ? $teamIdCount->count : 0);
                                            @endphp

                                            <div class="hr-line line3"></div>
                                            <div class="card-more-info d-between mt-6">
                                                <div class="teams-info d-between gap-xl-5 gap-3">
                                                    <div class="teams d-flex align-items-center gap-1">
                                                        <i class="ti ti-users fs-base"></i>
                                                        {{-- <span class="tcn-6 fs-sm">{{ $teamCounts  }}/12 Teams</span> --}}

                                                        <span class="tcn-6 fs-sm">
                                                            @if ($totalTeams)
                                                                {{ $totalTeams }}/{{ $tournament->slotTeam }}
                                                                Teams
                                                            @else
                                                                0/{{ $tournament->slotTeam }} Teams
                                                            @endif
                                                        </span>

                                                    </div>

                                                </div>

                                                @if ($totalTeams && $totalTeams < $tournament->slotTeam)
                                                    <div class="text-end ms-8">
                                                        {{-- <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}"
                                                            class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill">Add
                                                            Team</a> --}}
                                                        {{-- <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}" type="button" class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill">Join</a> --}}
                                                        <a type="button"
                                                            class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill"
                                                            data-toggle="modal"
                                                            data-target="#exampleModalCenter">Daftar</a>
                                                    </div>
                                                @elseif (!$totalTeams)
                                                    <div class="text-end ms-8">
                                                        {{-- <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}"
                                                            class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill">Add
                                                            Team</a> --}}
                                                        {{-- <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}" type="button"class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill">Join</a> --}}
                                                        <a type="button"
                                                            class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill"
                                                            data-toggle="modal"
                                                            data-target="#exampleModalCenter">Daftar</a>
                                                    </div>
                                                @elseif ($totalTeams)
                                                    {{-- user sudah terdaftar --}}
                                                @elseif ($totalTeams && $totalTeams == $tournament->slotTeam)
                                                    {{-- Jika jumlah tim sama dengan slot tim, tidak ada tindakan yang diambil --}}
                                                @endif



                                                <a href="{{ route('tournament.detailUser', ['tournament' => $tournament->id]) }}"
                                                    class="btn2" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Tooltip on top">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            {{-- <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div> --}}
                                            <div class="modal-body d-flex flex-column align-items-center">
                                                <div class="d-flex justify-content-center align-items-center mb-4"
                                                    style="height: 100px;">
                                                    <center>
                                                        <h6 style="color: black;">Create a New Team for the
                                                            Tournament or Choose an Existing Team</h6>
                                                    </center>
                                                </div>
                                                <div class="d-flex justify-content-center">

                                                    <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}"
                                                        type="button" class="btn btn-secondary me-2"
                                                        data-bs-toggle="modal" data-bs-target="#existing"
                                                        data-bs-dismiss="modal">Existing Team</a>

                                                     <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}"
                                                        type="button" class="btn btn-primary">New Team</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Modal -->
                                <div class="modal fade" id="existing" tabindex="-1" role="dialog"
                                    aria-labelledby="existingLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document" style="height: 100vh;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-black" id="exampleModalLabel">Existing
                                                    Team</h5>
                                                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button> --}}
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ route('teams.store') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="team_id">Select Team:</label>
                                                        <div class="row text-black">
                                                            @foreach ($teams as $team)
                                                                {{-- @if ($team->user_id === auth()->user()->id) --}}
                                                                @if ($team->user_id === auth()->user()->id && $team->tournament->categories_id === $tournament->categories_id)
                                                                    <input type="hidden" name="tournament_id"
                                                                        value="{{ $tournament->id }}">
                                                                    <div class="col-12 mb-3">
                                                                        <div class="card"
                                                                            id="teamCard{{ $team->id }}"
                                                                            onclick="cardRadio(this)">
                                                                            <div
                                                                                class="card-body d-flex align-items-center">
                                                                                <input type="radio"
                                                                                    id="team_id{{ $team->id }}"
                                                                                    name="team_id"
                                                                                    value="{{ $team->id }}"
                                                                                    style="display: none;">
                                                                                <img src="{{ asset('storage/' . $team->profile) }}"
                                                                                    alt="" width="25"
                                                                                    height="25"
                                                                                    class="profile-image me-8">
                                                                                <label class="name-text"
                                                                                    style="font-size: 20px"
                                                                                    for="team_id{{ $team->id }}">
                                                                                    {{ $team->name }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    {{-- <input type="hidden" name="tournament_id"
                                                        value="{{ $tournament->id }}"> --}}

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-lg-12">
                                    <center>
                                        <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                            style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
                                    </center>
                                    <h1 class="table-light" style="text-align: center;">
                                        Data Tidak Tersedia
                                    </h1>
                                </div>
                                @endforelse





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








    <!-- footer section start  -->
    <footer class="footer bgn-4 bt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <div class="footer-logo mb-8">
                            <a href="#" class="d-grid gap-6">
                                <div class="flogo-1">
                                    <img class="w-100 " src="{{ asset('assets/img/humma-01.png') }}" alt="favicon">
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
                    <span>COPYRIGHT © <span class="currentYear"></span> HUMMAESPORT | DESIGNED BY <a
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
    <script>
        $(document).ready(function() {
            $('#existing').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Tombol yang memicu modal
                var tournamentId = button.data(
                    'tournament-id'); // Ambil nilai tournament_id dari atribut data-tournament-id
                var modal = $(this);
                modal.find('.modal-body input[name="tournament_id"]').val(
                    tournamentId); // Isi input tersembunyi di dalam modal dengan tournament_id
            });
        });

        function cardRadio(card) {
            var radioButton = card.querySelector('input[type="radio"]');

            if (!radioButton.checked) {
                radioButton.checked = true;

                var cards = document.querySelectorAll('.card');
                cards.forEach(function(card) {
                    card.classList.remove('border-red');
                });

                card.classList.add('border-red');
            }
        }
    </script>

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
