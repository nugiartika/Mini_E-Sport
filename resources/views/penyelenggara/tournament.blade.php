<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/humma-01.png" type="image/x-icon">
    <title>Tournament - HummaEsport</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
    /* Gaya untuk tema gelap */
    .modal-content {
        background-color: #343a40; /* Warna latar belakang gelap */
        color: #fff; /* Warna teks putih */
    }

    .modal-header {
        border-bottom: 1px solid #454d55; /* Garis bawah untuk header */
    }

    .modal-title {
        color: #fff; /* Warna judul putih */
    }

    .modal-body {
        padding: 20px; /* Padding untuk body modal */
    }

    .form-group label {
        color: #fff; /* Warna label input putih */
    }

    .form-control {
        background-color: #495057; /* Warna latar belakang input */
        color: #fff; /* Warna teks input putih */
    }

    .form-control:focus {
        background-color: #ffffff; /* Warna latar belakang input saat fokus */
        color: #fff; /* Warna teks input saat fokus */
    }

    .close {
        color: #fff; /* Warna ikon close putih */
    }

    .close:hover {
        color: #fff; /* Warna ikon close putih saat dihover */
    }
</style>


<body>
    <div class="modal" tabindex="-1" id="filter" style="color: #000;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tournament.filter') }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="widget-title"><b>Category</b></h4>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:rgb(40, 144, 204); border:none;">Filter</button>
                        </div>
                        @php
                            $selectedCategories = isset($selectedCategories) ? $selectedCategories : [];
                        @endphp
                        @foreach ($category as $categories)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="category{{ $categories->id }}"
                                    name="categories_id[]" value="{{ $categories->id }}"
                                    @if (in_array($categories->id, (array) $selectedCategories)) checked @endif>
                                <label class="form-check-label" for="category{{ $categories->id }}">
                                    {{ $categories->name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
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
                            <img class="" src="{{ asset('assets/img/humma-01.png') }}" height="60px"
                                width="75px" alt="favicon">
                        </a>
                    </div>
                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-3 gap-lg-7 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="{{ route('dashboardPenyelenggara') }}">HOME </a>
                            </li>

                            <li class="menu-link">
                                <a href="{{ route('ptournament.index') }}">TOURNAMENT</a>
                            </li>
                            <li class="menu-link">
                                <a href="{{ route('games') }}">GAME</a>
                            </li>

                        </ul>
                    </div>
                </nav>
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
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                </div>
            </div>
        </div>
    </header>
    @if (auth()->check())
        <div class="user-account-popup p-4">
            <div class="account-items d-grid gap-1" data-tilt>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bttn account-item" type="submit">Kembali</button>
                </form>
            </div>
        </div>
    @endif

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

    <!-- tournament section start -->
    <section class="tournament-section pb-120 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="tournament-wrapper alt">
            <div class="container">
                <div class="row justify-content-between align-items-end mb-8">
                    <div class="col">
                        <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Tournaments</h2>
                    </div>
                </div>
                <div class="singletab tournaments-tab">
                    <div class="d-between gap-6 flex-wrap mb-lg-15 mb-sm-10 mb-6">
                        <ul class="tablinks d-flex flex-wrap align-items-center gap-3">
                            <li class="nav-links active">
                                <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1"
                                    data-toggle="tooltip" data-bs-toggle="modal"
                                    data-bs-target="#filter">Filter</button>
                            </li>
                        </ul>

                        <div class="px-6">
                            <a type="button"
                                class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill"
                                href="{{ route('ptournament.create') }}">add tournament</a>
                        </div>
                    </div>
                    <div class="tabcontents">
                        <div class="tabitem active">
                            <div class="row justify-content-md-start justify-content-center g-6">
                                @foreach ($tournaments as $tournament)
                                    <div class="col-xl-4 col-md-6 col-sm-10">
                                        <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                            <div class="dropdown" style="margin-bottom: 15px; margin-left:350px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor"
                                                    class="bi bi-three-dots-vertical dropdown-toggle"
                                                    viewBox="0 0 16 16" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <path
                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                </svg>
                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <li><a href="{{ route('ptournament.edittour', $tournament->id) }}"
                                                            class="dropdown-item"><i class="ti ti-edit fs-2xl"></i>
                                                            Edit Tournament</a></li>
                                                    <li>
                                                        <form id="deleteForm{{ $tournament->id }}"
                                                            action="{{ route('ptournament.destroy', $tournament->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item delete"
                                                                data-id="{{ $tournament->id }}">
                                                                <i class="ti ti-trash fs-2xl"></i> Delete Tournament
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <!-- Button trigger modal -->
                                                        <button class="btn" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            <i class="ti ti-plus fs-2xl"></i> <!-- Icon tambah -->
                                                        </button>
                                                        Tambah Jadwal
                                                        <!-- Modal -->

                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content bg-dark text-light">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-light" id="exampleModalLabel">
                                                                Tambah Jadwal</h4>
                                                                <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>                                                                                                                 </div>
                                                        <form>
                                                            <div class="modal-body">
                                                                <form id="regForm" action="">
                                                                    <!-- One "tab" for each step in the form: -->
                                                                    <div class="tab">
                                                                        <h5>Penyisihan</h5><br>
                                                                        <p>Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="tanggalPenyisihan"></p>
                                                                        <p>Waktu Mulai<input type="time" placeholder="Waktu Mulai..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="waktuPenyisihan"></p>
                                                                        <p>Best Of<input type="text" placeholder="Best Of..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="boPenyisihan"></p>
                                                                    </div>

                                                                    <div class="tab">
                                                                        <h5>Semi Final</h5><br>
                                                                        <p>Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="tanggalSemi"></p>
                                                                        <p>Waktu Mulai<input type="time" placeholder="Waktu Mulai..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="waktuSemi"></p>
                                                                        <p>Best Of<input type="text" placeholder="Best Of..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="boSemi"></p>
                                                                    </div>

                                                                    <div class="tab">
                                                                        <h5>Final</h5><br>
                                                                        <p>Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="tanggalFinal"></p>
                                                                        <p>Waktu Mulai<input type="time" placeholder="Waktu Mulai..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="waktuFinal"></p>
                                                                        <p>Best Of<input type="text" placeholder="Best Of..." class="form-control"
                                                                                oninput="this.className = 'form-control'" name="boFinal"></p>
                                                                    </div>

                                                                    <div style="overflow:auto;">
                                                                        <div style="float:right;">
                                                                            <button type="button" class="btn btn-warning" id="prevBtn"
                                                                                onclick="nextPrev(-1)">Previous</button>
                                                                            <button type="button" class="btn btn-success" id="nextBtn"
                                                                                onclick="nextPrev(1)">Next</button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Circles which indicates the steps of the form: -->
                                                                    <div style="text-align:center;margin-top:40px;">
                                                                        <span class="step"></span>
                                                                        <span class="step"></span>
                                                                        <span class="step"></span>
                                                                    </div>

                                                                </form>
                                                                <!-- Tambahkan elemen form lainnya sesuai kebutuhan -->
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <a href="{{ route('tournament.detail', ['id' => $tournament->id]) }}"
                                                        class="d-block">
                                                        <h4
                                                            class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                            {{ $tournament->name }}
                                                        </h4>
                                                    </a>
                                                    <span class="tcn-6 fs-sm">{{ $tournament->penyelenggara }}</span>
                                                </div>
                                                <div class="hr-line line3"></div>
                                                <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                    <div
                                                        class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img class="w-100"
                                                                src="{{ asset('assets/img/tether.png') }}"
                                                                alt="tether">
                                                            <span
                                                                class="tcn-1 fs-sm">Rp.{{ number_format(floatval($tournament->nominal), 0, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                        <i class="ti ti-ticket fs-base tcp-2"></i>
                                                        <span class="tcn-1 fs-sm">{{ $tournament->paidment }}</span>
                                                    </div>
                                                    <div
                                                        class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                        <i class="ti ti-calendar fs-base tcn-1"></i>
                                                        <span
                                                            class="tcn-1 fs-sm">{{ $tournament->permainan ? \Carbon\Carbon::parse($tournament->permainan)->format('d F Y') : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="hr-line line3"></div>
                                                <div
                                                    class="prize bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-gift fs-base tcn-1"></i>
                                                    <span class="tcn-1 fs-sm">{{ $tournament->prizes }}
                                                        {{ $tournament->jumlahs }}</span>
                                                </div>

                                                @php
                                                    $teamCount = $teamCounts->firstWhere(
                                                        'tournament_id',
                                                        $tournament->id,
                                                    );
                                                @endphp
                                                <div class="hr-line line3"></div>
                                                <div class="card-more-info d-between mt-6">
                                                    <div class="teams-info d-between gap-xl-5 gap-3">
                                                        <div class="teams d-flex align-items-center gap-1">
                                                            <i class="ti ti-users fs-base"></i>
                                                            <span class="tcn-6 fs-sm">
                                                                @if ($teamCount)
                                                                    {{ $teamCount->count }}/{{ $tournament->slotTeam }}
                                                                    Teams
                                                                @else
                                                                    0/{{ $tournament->slotTeam }} Teams
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('tournament.detail', ['id' => $tournament->id]) }}"
                                                        class="btn2 ">
                                                        <i class="ti ti-arrow-right fs-2xl"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <footer class="footer bgn-4 bt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <div class="footer-logo mb-8">
                            <a href="#" class="d-grid gap-6">
                                <div class="flogo-1">
                                    <img class="w-100" src="assets/img/humma-01.png" alt="favicon">
                                </div>
                                <div class="flogo-2">
                                    <h3>HUMMAESPORT</h3>
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
                    <span>COPYRIGHT © <span class="currentYear"></span> HUMMAESPORT | DESIGNED BY <a href=""
                            class="tcp-1">MAGANG HUMMA </a></span>
                </div>
            </div>
        </div>

        <div class="footer-banner-img" id="faa">
            <img class="w-100" src="{{ asset('assets/img/fbanner.png') }}" alt="banner">
        </div>
    </footer>

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
    <!-- jQuery (diperlukan untuk Bootstrap JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var currentTab = 0; // Saat ini tab yang ditampilkan
        showTab(currentTab); // Tampilkan tab saat ini

        function showTab(n) {
            // Ambil semua tab dan sembunyikan mereka
            var tabs = document.getElementsByClassName("tab");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
            }

            // Tampilkan tab yang sesuai
            tabs[n].style.display = "block";

            // Perbarui tombol Next/Previous sesuai dengan tab yang ditampilkan
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (tabs.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }

            // Perbarui langkah indikator
            fixStepIndicator(n);
        }

        function nextPrev(n) {
            // Cek validasi form sebelum pindah ke tab berikutnya
            var tabs = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;

            // Sembunyikan tab saat ini dan tampilkan yang berikutnya
            tabs[currentTab].style.display = "none";
            currentTab = currentTab + n;

            // Jika sudah mencapai akhir form, submit form
            if (currentTab >= x.length) {
                // Menghubungkan formulir ke route ptournament.store saat formulir disubmit
                document.getElementById("regForm").action = "{{ route('ptournament.jadwal') }}";
                document.getElementById("regForm").submit(); // Submit formulir
                return false;
            }

            // Tampilkan tab yang sesuai
            showTab(currentTab);
        }

        function validateForm() {
            // Cek validasi form pada setiap tab di sini (jika diperlukan)
            return true; // Kembalikan true jika form valid
        }

        function fixStepIndicator(n) {
            // Ambil semua langkah indikator dan tandai langkah saat ini sebagai selesai
            var steps = document.getElementsByClassName("step");
            for (var i = 0; i < steps.length; i++) {
                if (i <= n) {
                    steps[i].className = steps[i].className.replace(" active", "");
                }
            }
            steps[n].className += " active"; // Tandai langkah saat ini sebagai aktif
        }
    </script>



</body>

</html>
