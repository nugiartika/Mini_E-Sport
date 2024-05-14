<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/humma-01.png') }}" type="image/x-icon">
    <title>Tournament Details - Humma Esport</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @include('admin.layouts.meta')

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- laravel style -->
    <script src="{{ asset('demo/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/js/template-customizer.js') }}"></script>

    <script src="{{ asset('demo/assets/js/config.js') }}"></script>

    <script>
        window.templateCustomizer = new TemplateCustomizer({
            cssPath: '',
            themesPath: '',
            defaultStyle: "light",
            defaultShowDropdownOnHover: "true",
            displayCustomizer: "true",
            lang: 'id',
            pathResolver: function(path) {
                var resolvedPaths = {
                    'core.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=9dd8321ea008145745a7d78e072a6e36',
                    'core-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d661bae1d0ada9f7e9e3685a3e1f427e',
                }
                return resolvedPaths[path] || path;
            },
            'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions",
                "themes"
            ],
        });
    </script>
    @yield('style')
</head>
<style>
    .darkened {
        filter: brightness(50%);
        /* Ubah nilai brightness sesuai kebutuhan (antara 0% - 100%) */
    }

    /* Gaya untuk tema gelap */
    .modal-content {
        margin-top: 170px;
        background-color: #343a40;
        /* Warna latar belakang gelap */
        color: #fff;
        /* Warna teks putih */
    }

    .modal-header {
        border-bottom: 1px solid #454d55;
        /* Garis bawah untuk header */
    }

    .modal-title {
        color: #fff;
        /* Warna judul putih */
    }

    .modal-body {
        padding: 20px;
        /* Padding untuk body modal */
    }

    .form-group label {
        color: #fff;
        /* Warna label input putih */
    }

    .form-control {
        background-color: #495057;
        /* Warna latar belakang input */
        color: #fff;
        /* Warna teks input putih */
    }

    .form-control:focus {
        background-color: #495057;
        /* Warna latar belakang input saat fokus */
        color: #fff;
        /* Warna teks input saat fokus */
    }

    .btnpn {
        margin-top: 20px
    }

    .close {
        color: #fff;
        /* Warna ikon close putih */
    }

    .close:hover {
        color: #fff;
        /* Warna ikon close putih saat dihover */
    }
</style>

<body>
    <div class="cursor"></div>
    <!-- Header area  -->
<!-- header-section start -->
    {{-- <header class="header-section w-100 bgn-4">
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
                            <img class="w-100 logo2" src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-3 gap-lg-7 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="{{ route('dashboardPenyelenggara') }}">HOME</a>
                            </li>

                            <li class="menu-link">
                                <a href="{{ route('ptournament.index') }}">TOURNAMENT</a>
                            </li>
                            <li class="menu-link">
                                <a href="{{ route('games') }}">GAME</a>
                            </li>
                            <li class="menu-link">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOG
                                    OUT</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                </div>
            </div>
        </div>
    </header> --}}
<!-- header-section end -->
    @foreach ($tournaments as $tournament)
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            @include('penyelenggara.layouts.sidebar')

            <!-- Layout page -->
            <div class="layout-page">

                <!-- BEGIN: Navbar-->
                @include('penyelenggara.layouts.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Content -->
                        @yield('content')
        <!-- tournament details banner section start -->
                        <div class="tournament-details pb-10 pt-120 mt-lg-0 mt-sm-15 mt-10 overflow-hidden">
                            <div class="container">
                                <a href="{{ route('ptournament.index') }}">
                                    <i class="ti ti-arrow-left" style="color: rgb(0, 0, 0);"></i>
                                </a>
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="parallax-banner-area parallax-container position-relative rounded-5 overflow-hidden">
                                            <!-- Periksa apakah $selectedTournament adalah objek yang valid -->
                                            @if ($selectedTournament)
                                                <img class="w-100 h-100 parallax-img darkened"
                                                    src="{{ asset('storage/' . $selectedTournament->images) }}"
                                                    alt="tournament banner">
                                                <!-- running tournament content here -->
                                                <div
                                                    class="running-tournament d-flex flex-lg-row flex-column position-absolute top-50 start-50 translate-middle w-100">
                                                    <div class="running-tournament-thumb w-100">
                                                        <img class="w-100 h-100"
                                                            src="{{ asset('storage/' . $selectedTournament->images) }}"
                                                            alt="tournament thumb">
                                                    </div>
                                                    <div class="running-tour-info py-sm-6 py-4 px-xl-15 px-lg-10 px-sm-6 px-2 w-100">
                                                        <h3 class="tcn-1 mb-lg-6 mb-4">{{ $selectedTournament->name }}</h3>
                                                        <span class="tcn-1 d-block fs-five fw-semibold mb-4">Tournament ending in</span>
                                                        <div class="ending-date d-flex align-items-center gap-sm-5 gap-2 mb-lg-8 mb-6">
                                                            <!-- Tambahkan logika waktu turnamen di sini -->
                                                        </div>
                                                        <div class="d-flex align-items-center gap-md-6 gap-3">
                                                            <a href="tournaments.html"
                                                                class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-sm-6 px-4 rounded-pill">View
                                                                More</a>
                                                            <div class="d-flex align-items-center flex-wrap gap-md-6 gap-3 w-50">
                                                                <div class="end-date">
                                                                    <span
                                                                        class="tcn-6">{{ $selectedTournament->end_permainan }}</span>
                                                                </div>
                                                                <div class="players">
                                                                    <i class="ti ti-users-group tcn-1"></i>
                                                                    <span class="tcn-6">{{ $selectedTournament->slotTeam }}
                                                                        Team</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="alert alert-danger" role="alert">
                                                    Tournament not found!
                                                </div>
                                            @endif
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
                                        <p class="tcn-1 title-anim">{{ $tournament->prize }} {{ $tournament->jumlah }}</p>
                                    </div>
                                    <div class="tour-prize-card">
                                        <div class="icon-area mb-6">
                                            <i class="ti ti-wallet display-five fw-normal tcp-2"></i>
                                        </div>
                                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Entry Fee</h4>
                                        <p class="tcn-1 title-anim">{{ $selectedTournament->paidment }}
                                            {{ $selectedTournament->nominal }}</p>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!-- Modal -->
                        {{-- <div class="modal fade" id="cobaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="regForm" action="{{ route('ptournament.jadwal') }}" method="POST">
                                            <!-- One "tab" for each step in the form: -->
                                            <div class="tab" id="tab1">
                                                <h5>Penyisihan</h5><br>
                                                <p>Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..."
                                                        class="form-control @error('tanggalPenyisihan') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="tanggalPenyisihan"></p>
                                                @error('tanggalPenyisihan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p>Waktu Mulai<input type="time" placeholder="Waktu Mulai..."
                                                        class="form-control @error('waktuPenyisihan') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="waktuPenyisihan">
                                                </p>
                                                @error('waktuPenyisihan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p>Best Of<input type="text" placeholder="Best Of..."
                                                        class="form-control @error('boPenyisihan') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="boPenyisihan">
                                                </p>
                                                @error('boPenyisihan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="tab" id="tab2">
                                                <h5>Semi Final</h5><br>
                                                <p>Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..."
                                                        class="form-control @error('tanggalSemi') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="tanggalSemi">
                                                </p>
                                                @error('tanggalSemi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p>Waktu Mulai<input type="time" placeholder="Waktu Mulai..."
                                                        class="form-control @error('waktuSemi') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="waktuSemi">
                                                </p>
                                                @error('waktuSemi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p>Best Of<input type="text" placeholder="Best Of..."
                                                        class="form-control @error('boSemi') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="boSemi">
                                                </p>
                                                @error('boSemi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="tab" id="tab3">
                                                <h5>Final</h5><br>
                                                <p>Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..."
                                                        class="form-control @error('tanggalFinal') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="tanggalFinal">
                                                </p>
                                                @error('tanggalFinal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p>Waktu Mulai<input type="time" placeholder="Waktu Mulai..."
                                                        class="form-control @error('waktuFinal') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="waktuFinal">
                                                </p>
                                                @error('waktuFinal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p>Best Of<input type="text" placeholder="Best Of..."
                                                        class="form-control @error('boFinal') is-invalid @enderror"
                                                        oninput="this.className = 'form-control'" name="boFinal">
                                                </p>
                                                @error('boFinal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div style="overflow:auto;" class="btnpn">
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
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                                                data-bs-target="#cobaModal">
                                                <i class="ti ti-plus"></i>
                                                Tambah Jadwal
                                            </button>


                                            <div class="row g-6 mb-10 ">
                                                <!-- Brackets-->
                                                {{-- @foreach ($jadwal as $tournament)
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                                            <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                                                <h4 class="tcn-1">Penyisihan</h4>
                                                                <span
                                                                    class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">{{ $tournament->boPenyisihan }}</span>
                                                            </div>
                                                            <span
                                                                class="tcn-1 d-block mb-3">{{ $tournament->tanggalPenyisihan }},{{ $tournament->waktuPenyisihan }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded"> wire:
                                                            <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                                                <h4 class="tcn-1">Semi Final</h4>
                                                                <span
                                                                    class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">{{ $tournament->boSemi }}</span>
                                                            </div>
                                                            <span class="tcn-1 d-block mb-3"{{ $tournament->tanggalSemi }},
                                                                {{ $tournament->waktuSemi }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                                            <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                                                <h4 class="tcn-1">Final</h4>
                                                                <span
                                                                    class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">{{ $tournament->boFinal }}</span>
                                                            </div>
                                                            <span class="tcn-1 d-block mb-3">{{ $tournament->tanggalFinal }},
                                                                {{ $tournament->waktuFinal }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 ">
                                                        <h4>Link Pembuatan Bracket</h4>
                                                        <a href="https://challonge.com/id/tournament/bracket_generator"
                                                            class="form-control d-block"
                                                            style="width: 100%; ">https://challonge.com/id/tournament/bracket_generator</a><br>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">
                                                            Launch demo modal
                                                        </button>

                                                        <!-- Modal -->

                                                    </div>
                                                @endforeach --}}
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                                                            title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
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
                                                <button
                                                    class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                                    type="button">
                                                    DESKRIPSI
                                                </button>
                                            </h5>
                                            <div class="acc-content-area">
                                                <div class="content-body mt-lg-6 mt-4">
                                                    <p class="tcn-6">
                                                        {!! $tournament->description !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                            <h5 class="acc-header-area">
                                                <button
                                                    class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                                    type="button">
                                                    RULES
                                                </button>
                                            </h5>
                                            <div class="acc-content-area">
                                                <div class="content-body mt-lg-6 mt-4">
                                                    <p class="tcn-6">
                                                        {{ $tournament->rule }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                            <h5 class="acc-header-area">
                                                <button
                                                    class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                                    type="button">
                                                    CONTACT PERSON
                                                </button>
                                            </h5>
                                            <div class="acc-content-area">
                                                <div class="content-body mt-lg-6 mt-4">
                                                    <p class="tcn-6">
                                                        {{ $tournament->contact }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
    @endforeach
    </div>
    </section>
    <!-- tournament more details section end -->

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
                                            </div>
                                        </div>
                                        @foreach ($tournaments as $tournament)
                                            <div class="tabitem">
                                                <div class="row align-items-center justify-content-center pt-lg-20 pt-sm-10">
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="d-grid justify-content-center align-items-center gap-10">
                                                            <div class="img-area mx-auto winner-img">
                                                                <img class="w-100" src="{{ asset('assets/img/winner-prize.png') }}"
                                                                    alt="prize">
                                                            </div>
                                                            <div class="content-area">
                                                                <button class="btn btn-outline-light d-flex " data-toggle="modal"
                                                                    data-target="#exampleModal">
                                                                    <i class="ti ti-plus fs-2xl"></i> <!-- Icon tambah -->
                                                                </button>
                                                                <span class="tcn-6 text-center d-block">Silahkan tambah pemenang
                                                                    setelah turnamen selesai</span>
                                                            </div>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content bg-dark text-light">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title text-light" id="exampleModalLabel">
                                                                                Tambah Jadwal</h4>
                                                                            <button type="button" class="btn btn-danger close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        {{-- <div class="modal-body">
                                                                            <form id="regForm"
                                                                                action="{{ route('ptournament.jadwal') }}">
                                                                                <!-- One "tab" for each step in the form: -->
                                                                                <div class="tab">
                                                                                    <h5>Juara 1</h5><br>
                                                                                    Nama Tim <input type="text"
                                                                                        placeholder="Masukan Nama Tim..."
                                                                                        class="form-control"
                                                                                        oninput="this.className = 'form-control'"
                                                                                        name="nama_juara1">
                                                                                </div>

                                                                                <div class="tab">
                                                                                    <h5>Juara 2</h5><br>
                                                                                    Nama Tim <input type="text"
                                                                                        placeholder="Masukan Nama Tim..."
                                                                                        class="form-control"
                                                                                        oninput="this.className = 'form-control'"
                                                                                        name="nama_juara2">
                                                                                </div>

                                                                                <div class="tab">
                                                                                    <h5>Juara 3</h5><br>
                                                                                    Nama Tim <input type="text"
                                                                                        placeholder="Masukan Nama Tim..."
                                                                                        class="form-control"
                                                                                        oninput="this.className = 'form-control'"
                                                                                        name="nama_juara3">
                                                                                </div>

                                                                                <div style="overflow:auto;">
                                                                                    <div style="float:right;">
                                                                                        <button type="button" class="btn btn-warning"
                                                                                            id="prevBtn"
                                                                                            onclick="nextPrev(-1)">Previous</button>
                                                                                        <button type="button" class="btn btn-success"
                                                                                            id="nextBtn"
                                                                                            onclick="nextPrev(1)">Next</button>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Circles which indicates the steps of the form: -->
                                                                                <div style="text-align:center;margin-top:40px;">
                                                                                    <span class="step"></span>
                                                                                    <span class="step"></span>
                                                                                </div>
                                                                            </form>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table class="table table-dark">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Urutan Juara</th>
                                                                        <th scope="col">Nama Team</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Juara 1</td>
                                                                        <td>Otto</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Juara 2</td>
                                                                        <td>Thornton</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Juara 3</td>
                                                                        <td>the Bird</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabitem">
                                                <div class="row g-6">
                                                    <div class="accordion-section rule-accordion d-grid gap-6">
                                                        <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                                            <h5 class="acc-header-area">
                                                                <button
                                                                    class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                                                    type="button">
                                                                    DESKRIPSI
                                                                </button>
                                                            </h5>
                                                            <div class="acc-content-area">
                                                                <div class="content-body mt-lg-6 mt-4">
                                                                    <p class="tcn-6">
                                                                        {{ $tournament->description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                                            <h5 class="acc-header-area">
                                                                <button
                                                                    class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                                                    type="button">
                                                                    RULES
                                                                </button>
                                                            </h5>
                                                            <div class="acc-content-area">
                                                                <div class="content-body mt-lg-6 mt-4">
                                                                    <p class="tcn-6">
                                                                        {{ $tournament->rule }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                                            <h5 class="acc-header-area">
                                                                <button
                                                                    class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                                                    type="button">
                                                                    CONTACT PERSON
                                                                </button>
                                                            </h5>
                                                            <div class="acc-content-area">
                                                                <div class="content-body mt-lg-6 mt-4">
                                                                    <p class="tcn-6">
                                                                        {{ $tournament->contact }}
                                                                    </p>
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
    @endforeach
</body>
    <!-- tournament more deails section end -->
    <!-- call to action section start -->
    <div class="call-to-action pt-120 pb-120 bgn-4 overflow-x-hidden" id="cta">
        <div class="container">
            <div class="row justify-content-between g-6">
                <div class="col-lg-6">
                    <span class="display-three tcn-1 cursor-scale growUp mb-8 d-block title-anim">Stay up to
                        date</span>
                    <span class="fs-lg tcn-6">
                        Have questions or feedback? We'd love to hear from you. Reach out to our team or use our
                        contact
                        form.
                    </span>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <form action="#">
                        <div class="single-input mb-6">
                            <input type="email" placeholder="Enter your email">
                        </div>
                        <div
                            class="d-flex align-items-md-center align-items-start justify-content-between gap-lg-8 gap-6 flex-md-row flex-column">
                            <div class="d-flex align-items-center gap-lg-4 gap-2">
                                <label class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="fs-base tcn-6">I agree with <a href="#" class="tcp-1">Privacy
                                        Policy</a>
                                    and <a href="terms-condition.html" class="tcp-1">Terms & Conditions</a>
                                </span>
                            </div>
                            <button type="submit"
                                class="bttn py-sm-4 py-3 px-lg-10 px-sm-8 px-6 bgp-1 tcn-1 rounded-4">Submit</button>
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
                                    <img class="w-100" src="assets/img/LOGO WEB.png" alt="favicon">
                                </div>
                                <div class="flogo-2">
                                    {{-- <img class="w-100" src="{{ asset('assets/img/logo.png') }}" alt="logo"> --}}
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
                    <span>COPYRIGHT © <span class="currentYear"></span> HUMMAESPORT | DESIGNED BY <a
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
            var tabs = document.getElementsByClassName("tab");
            // Cek validasi form sebelum pindah ke tab berikutnya
            if (n == 1 && !validateForm()) {
                // Tambahkan pesan kesalahan atau tindakan lain jika validasi gagal
                alert("Harap isi semua bidang sebelum melanjutkan.");
                return false;
            }

            // Sembunyikan tab saat ini dan tampilkan yang berikutnya
            tabs[currentTab].style.display = "none";
            currentTab = currentTab + n;

            // Jika sudah mencapai akhir form, submit form
            if (currentTab >= tabs.length) {
                // Menghubungkan formulir ke route ptournament.jadwal saat formulir disubmit
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

    <script>
        // Array untuk menyimpan link-link yang dimasukkan
        var links = [];

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Get the submit button
        var submitBtn = document.getElementById("submitBtn");

        // Function to handle submission
        submitBtn.onclick = function() {
            var linkInput = document.getElementById("linkInput").value;
            links.push(linkInput); // Menambahkan link ke dalam array
            displayLinks(); // Menampilkan link-link yang sudah dimasukkan
            modal.style.display = "none"; // Menutup modal setelah submission
        }

        // Function to display links
        function displayLinks() {
            var linksContainer = document.getElementById("linksContainer");
            linksContainer.innerHTML = ""; // Menghapus isi container sebelum menampilkan link yang baru

            for (var i = 0; i < links.length; i++) {
                var linkElement = document.createElement("p");
                linkElement.textContent = links[i];
                linksContainer.appendChild(linkElement);
            }
        }
    </script>
</body>

</html>
