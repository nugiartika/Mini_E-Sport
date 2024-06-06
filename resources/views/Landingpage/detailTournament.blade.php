<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/humma-01.png') }}" type="image/x-icon">
    <title>Tournament Details User</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
                        <a class="navbar-brand d-flex align-items-center gap-4" href="index.html">
                            <img class="w-100 logo1" src="{{ asset('assets/img/humma-01.png') }}" alt="favicon">
                            {{-- <img class="w-100 logo2" src="{{ asset('assets/img/humma-01.png') }}" alt="logo"> --}}
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- header-section end -->


    {{-- @foreach ($tournaments as Tournament) --}}
    @php
        $isPaidTournament = $tournaments->paidment === 'Berbayar';

        if ($isPaidTournament) {
            $teamCount = $acceptedTeamCounts->get($tournaments->id);
            $teamIdCount = $acceptedTeamIdCounts->get($tournaments->id);
        } else {
            $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))->groupBy('tournament_id')->get();

            $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
                ->groupBy('tournament_id')
                ->get();
            $teamCount = $teamCounts->firstWhere('tournament_id', $tournaments->id);
            $teamIdCount = $teamIdCounts->firstWhere('tournament_id', $tournaments->id);
        }

        $totalTeams = ($teamCount ? $teamCount->count : 0) + ($teamIdCount ? $teamIdCount->count : 0);

        $userTeams = $teams ?? collect();
        $userTeamsInTournament = $userTeams->where('tournament_id', $tournaments->id);
        $isUserInTournament = $userTeamsInTournament->isNotEmpty();

        if ($isUserInTournament) {
            // Ambil ID tim pengguna dalam turnamen berdasarkan ID turnamen
            $userTeamIds = $userTeamsInTournament->pluck('id')->toArray();

            // Cek apakah ada relasi antara tim pengguna dan team_tournaments berdasarkan ID tim dan ID turnamen
            $userTeamsWithRelation = TeamTournament::whereIn('team_id', $userTeamIds)
                ->where('tournament_id', $tournaments->id)
                ->get();
        }
        $userId = Auth::id();

        $userTeamIds = Team::where('user_id', $userId)->pluck('id')->toArray();

        // Cek apakah ada tim pengguna dalam turnamen ini
        $teamtournamentId = TeamTournament::where('tournament_id', $tournaments->id)
            ->whereIn('team_id', $userTeamIds)
            ->exists();
    @endphp
    {{-- @endforeach --}}


    <!-- tournament details banner section start -->
    <div class="tournament-details pb-10 pt-120 mt-lg-0 mt-sm-15 mt-10 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <a href="javascript:void(0)" onclick="window.history.back()" class="back-btn"><i
                                class="ti ti-arrow-narrow-left fs-2xl"></i></a>
                        <h3 class="tcn-1 cursor-scale growDown title-anim">Detail Tournament </h3>
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
                            class="running-tournament d-flex flex-lg-row flex-column position-absolute top-50 start-50 translate-middle w-100 text-center">
                            <div class="running-tournament-thumb w-100">
                                <img class="w-100 h-100" src="{{ asset('storage/' . $tournaments->images) }}"
                                    alt="tournament thumb">
                            </div>
                            <div class="running-tour-info py-sm-6 py-4 px-xl-15 px-lg-10 px-sm-6 px-2 w-100">
                                <h3 class="tcn-1 mb-lg-6 mb-4">{{ $tournaments->name }}</h3>
                                <span class="tcn-1 d-block fs-five fw-semibold mb-4">Penyelenggara :
                                    {{ $tournaments->user->name }}</span>
                                <h5 class="tcn-1 mb-lg-6 mb-4">Nama Game : {{ $tournaments->category->name }}</h5>
                                <div class="list-group-item justify-content-center d-flex align-items-center gap-3">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i class="ti ti-gift fs-base tcn-1"></i>
                                    </div>
                                    @php
                                        $prizesArray = $prizes
                                            ->filter(function ($prize) use ($tournaments) {
                                                return $prize->tournament_id == $tournaments->id;
                                            })
                                            ->map(function ($prize) {
                                                return $prize->prizepool->prize;
                                            })
                                            ->toArray();
                                    @endphp
                                    @if (!empty($prizesArray))
                                        <span class="tcn-1 title-anim">{{ implode(', ', $prizesArray) }}</span>
                                    @endif
                                </div>
                                <div class="d-flex align-items-center justify-content-center gap-md-6 gap-3">
                                    <div class="end-date text-center">
                                        <span class="tcn-6">Tanggal dimulai:
                                            {{ Carbon\Carbon::parse($tournaments->permainan)->translatedFormat('d F Y') }}</span>
                                    </div>
                                </div>
                                <br>
                                <div class="players text-center">
                                    <i class="ti ti-users-group tcn-1"></i>
                                    <span class="tcn-6">Slot Tim:
                                        @if ($totalTeams)
                                            {{ $totalTeams }}/{{ $tournaments->slotTeam }}
                                            Teams
                                        @else
                                            0/{{ $tournaments->slotTeam }} Teams
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tournament details prize section start -->
    <section class="tournament-prize-section mb-10">
        <div class="container bgn-4 p-lg-10 p-sm-6 p-4">
            <div class="row align-items-center gy-4 flex-wrap">
                <div
                    class="col-md-4 d-flex flex-column gap-3 justify-content-center align-items-center tour-prize-card">
                    <div class="icon-area">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week display-five fw-normal tcp-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M8 14v4" />
                            <path d="M12 14v4" />
                            <path d="M16 14v4" />
                        </svg>
                    </div>
                    <p class="tcn-1 title-anim">Dimulai</p>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1"><span>
                            {{ Carbon\Carbon::parse($tournaments->permainan)->translatedFormat('d F Y') }}</span>
                    </h4>
                </div>
                <div
                    class="col-md-4 d-flex flex-column gap-3 justify-content-center align-items-center tour-prize-card">
                    <div class="icon-area">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24"
                            fill="none" stroke="#FFA62F" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-off">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 5h9a2 2 0 0 1 2 2v9m-.184 3.839a2 2 0 0 1 -1.816 1.161h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 1.158 -1.815" />
                            <path d="M16 3v4" />
                            <path d="M8 3v1" />
                            <path d="M4 11h7m4 0h5" />
                            <path d="M3 3l18 18" />
                        </svg>
                    </div>
                    <p class="tcn-1 title-anim">Berakhir</p>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1"><span>
                            {{ Carbon\Carbon::parse($tournaments->end_permainan)->translatedFormat('d F Y') }}</span>
                    </h4>
                </div>
                <v class="col-md-4 d-flex flex-column gap-3 justify-content-center align-items-center tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-users-group display-five fw-normal tcp-2"></i>
                    </div>
                    <p class="tcn-1 title-anim">Jumlah Tim</p>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">{{ $tournaments->slotTeam }}</h4>
                </v>
                <v class="col-md-4 d-flex flex-column gap-3 justify-content-center align-items-center tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-sitemap display-five fw-normal tcp-2"></i>
                    </div>
                    <p class="tcn-1 title-anim">Jenis Tournament</p>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">
                        @if ($tournaments->paidment === 'Gratis')
                            Gratis
                        @elseif ($tournaments->paidment === 'Berbayar')
                            Berbayar
                        @else
                            Status pembayaran
                            <br> tidak valid
                        @endif
                    </h4>
                </v>
                <v class="col-md-4 d-flex flex-column gap-3 justify-content-center align-items-center tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-trophy display-five fw-normal tcp-2"></i>
                    </div>
                    <p class="tcn-1 title-anim">Game</p>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">{{ $tournaments->category->name }}</h4>
                </v>
                <v class="col-md-4 d-flex flex-column gap-3 justify-content-center align-items-center tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-arrow-badge-up  display-five fw-normal tcp-2"></i>
                    </div>
                    <p class="tcn-1 title-anim">Status</p>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">
                        @if ($tournaments->status === 'accepted')
                            Aktif
                        @elseif ($tournaments->status === 'pending')
                            Tertunda
                        @elseif ($tournaments->status === 'rejected')
                            Tolak
                        @else
                            Status pembayaran tidak valid
                        @endif
                    </h4>
                </v>
            </div>
        </div>
    </section>
    <!-- tournament details prize section end -->


    <!-- tournament more details section start -->
    <section class="tournament-more-details pb-120">
        <div class="container">
            <div class="singletab tournaments-tab">
                <ul class="tablinks d-flex flex-wrap align-items-center gap-3 pb-10">
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Rules</button>
                    </li>
                </ul>
                <div class="tabcontents">
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="accordion-section rule-accordion d-grid gap-6">
                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            Deskripsi
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <p class="tcn-6">
                                                {!! $tournaments->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            Aturan Permainan
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <p>{{ $tournaments->rule }}</p>
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
    <!-- footer section start  -->
    <!-- footer section start  -->
    <footer class="footer bgn-4 bt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <div class="footer-logo mb-8">
                            <a href="#" class="d-grid gap-6">
                                <div class="flogo-1">
                                    <img class="w-100" src="{{ asset('assets/img/humma-01.png') }}" alt="favicon">
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
                        <h4 class="footer-title mb-8 title-anim">Quick Links</h4>
                        <ul class="footer-list d-grid gap-4">
                            <li><a href="tournaments.html" class="footer-link d-flex align-items-center tcn-6">
                                    <i class="ti ti-chevron-right"></i> Tournaments</a></li>
                            <li><a href="game.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Games </a></li>
                            <li><a href="teams.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Teams</a></li>
                            <li><a href="faq.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <h4 class="footer-title mb-8 title-anim">Explore</h4>
                        <ul class="footer-list d-grid gap-4">
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Top Players</a></li>
                            <li><a href="chat.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> messages</a></li>
                            <li><a href="profile.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <h4 class="footer-title mb-8 title-anim">Follow Us</h4>
                        <ul class="footer-list d-grid gap-4">
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Facebook</a></li>
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Instagram</a></li>
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Twitter</a></li>
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> Linkedln</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pb-4 pt-lg-4 pt-8 justify-content-between g-2">
                <div class="col-xxl-4 col-lg-6 order-last order-lg-first">
                    <span>Copyright © <span class="currentYear"></span> Humma <a href="" class="tcp-1">Esport
                        </a></span>
                </div>

            </div>
        </div>
        <!-- footer banner img  -->
        <div class="footer-banner-img" id="faa">
            <img class="w-100" src="{{ asset('assets/img/fbanner.png') }}" alt="banner">
        </div>
    </footer>
    <!-- footer section end  -->
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
