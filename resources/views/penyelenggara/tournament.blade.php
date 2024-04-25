<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>Tournament - HummaEsport</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!-- cursor effect-->
    <div class="cursor"></div>
    <!-- Header area  -->

    <div class="modal" tabindex="-1" id="tambahModal" style="color: #000;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Tournament</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ptournament.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">NAME TOURNAMENT</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="pendaftaran" class="form-label">TIME REGISTER</label>
                            <input type="date" class="form-control @error('pendaftaran') is-invalid @enderror" id="pendaftaran" name="pendaftaran" value="{{ old('pendaftaran') }}">
                            @error('pendaftaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="permainan" class="form-label">TIME GAME</label>
                            <input type="date" class="form-control @error('permainan') is-invalid @enderror" id="permainan" name="permainan" value="{{ old('permainan') }}">
                            @error('permainan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="penyelenggara" class="form-label">ORGANIZER</label>
                            <input type="text" class="form-control @error('penyelenggara') is-invalid @enderror" id="penyelenggara" name="penyelenggara" value="{{ old('penyelenggara') }}">
                            @error('penyelenggara')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- datepicker --}}
                        {{-- <input type="text" name="daterange"  />

                        <script type="text/javascript">
                        $(function() {
                            $('input[name="daterange"]').daterangepicker();
                        });
                        </script> --}}
                        {{-- end --}}
                        <div class="mb-3">
                            <label for="slotTeam" class="form-label">SLOT TEAM</label>
                            <input type="number" class="form-control @error('slotTeam') is-invalid @enderror" id="slotTeam" name="slotTeam" value="{{ old('slotTeam') }}">
                            @error('slotTeam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">GAME</label><br>
                            <select class="form-control @error('categories_id') is-invalid @enderror" id="category" name="categories_id" aria-label="Default select example">
                                <option value="" selected>Select Game</option>
                                @foreach ($category as $kat)
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

                        <div class="mb-3">
                            <label for="images" class="form-label">IMAGE</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images" onchange="previewImage(event)">
                            @if(old('images'))
                                <img id="preview" src="{{ asset('storage/' . old('images')) }}" alt="Old images" style="max-width: 100px; max-height: 100px;">
                            @endif
                            @error('images')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">FILL DESCRIPTION</label><br>

                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            <textarea name="description" id="summernoteModal1" class="custom-summernote" aria-label="With textarea">{{ old('description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="rule" class="form-label">
                                FILL RULE</label><br>
                                @error('rule')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            <textarea name="rule" id="summernoteModal1" class="custom-summernote" aria-label="With textarea">{{ old('rule') }}</textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
                            <img class="w-100 logo1" src="assets/img/favicon.png" alt="favicon">
                            <img class="w-100 logo2" src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-3 gap-lg-7 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="menu-item">
                                <button>TOURNAMENT</button>
                                <ul class="sub-menu">
                                    <li class="menu-link">
                                        <a href="tournaments.html">TOURNAMENT</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="{{ route('ptournament.detail') }}">TOURNAMENT DETAILS</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-link">
                                <a href="game.html">Game</a>
                            </li>
                            <li class="menu-item">
                                <button>Teams</button>
                                <ul class="sub-menu">
                                    <li class="menu-link">
                                        <a href="teams.html">Teams</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="teams-details.html">Teams Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <button>pages</button>
                                <ul class="sub-menu">
                                    <li class="menu-link">
                                        <a href="signup.html">Sign Up</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="signin.html">Sign In</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="error.html">Error</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="faq.html">Faq</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="terms-condition.html">Terms Conditions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                    {{-- <button
                        class="btn-rounded-cus wallet-btn border-0 d-flex align-items-center gap-3 p-xl-2 p-0 pe-xl-6 rounded-5 position-relative">
                        <span class="btn-circle fs-2xl">
                            <i class="ti ti-wallet"></i>
                        </span>
                        <span class="text-nowrap d-none d-xl-block">Connect Wallet</span>
                    </button> --}}
                    <button class="ntf-btn box-style fs-2xl">
                        <i class="ti ti-bell-filled"></i>
                    </button>
                    <div class="header-profile pointer">
                        <div class="profile-wrapper d-flex align-items-center gap-3">
                            <div class="img-area overflow-hidden">
                                <img class="w-100" src="assets/img/profile.png" alt="profile">
                            </div>
                            <span class="user-name d-none d-xxl-block text-nowrap">David Malan</span>
                            <i class="ti ti-chevron-down d-none d-xxl-block"></i>
                        </div>
                    </div>
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
    {{-- <div class="user-account-popup p-4">
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
    </div> --}}
    <!-- user account details popup end  -->

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
                                <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#filter">Filter</button>

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
                                                        <button type="submit" class="btn btn-primary" style="background-color:rgb(40, 144, 204); border:none;">Filter</button>
                                                    </div>
                                                    @php
                                                        $selectedCategories = isset($selectedCategories) ? $selectedCategories : [];
                                                    @endphp
                                                    @foreach ($category as $categories)
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="category{{ $categories->id }}" name="categories_id[]" value="{{ $categories->id }}" @if(in_array($categories->id, (array)$selectedCategories)) checked @endif>
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

                            </li>
                            {{-- <li class="nav-links">
                                <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Active</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Upcoming</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Finished</button>
                            </li> --}}
                        </ul>

                        <div class="px-6">
                            <a type="button"
                                class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal">add tournament</a>
                        </div>
                    </div>
                    <div class="tabcontents">
                        <div class="tabitem active">
                            <div class="row justify-content-md-start justify-content-center g-6">
                                @foreach ($tournaments as $tournament)

                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="{{ asset('storage/'.  $tournament->images ) }}" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
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
                                                        <img class="w-100" src="assets/img/bitcoin.png" alt="bitcoin">
                                                        <span class="tcn-1 fs-sm">75</span>
                                                    </div>
                                                    <div class="v-line"></div>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img class="w-100" src="assets/img/tether.png" alt="tether">
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
                                                    <span class="tcn-1 fs-sm">{{ \Carbon\Carbon::parse($tournament->permainan)->format('d F Y') }}</span>
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                        <div class="tabitem">
                            <div class="row justify-content-md-start justify-content-center  g-6">
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx10.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Azariaria's Battlegrounds
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx12.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        EGamesSV Individual #1
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx13.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        AAG Axie Cup
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Solos Edition</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx14.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Copa Punto Gamers - B
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="row justify-content-md-start justify-content-center  g-6">
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx2.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Azariaria's Battlegrounds
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx3.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        EGamesSV Individual #1
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx4.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Copa Punto Gamers - B
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx5.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Superliga Weekly
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx6.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Azariaria's Battlegrounds
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Bienvenidos a AAG Blast Cup</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx7.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        TDL SEA Pro Series 11
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx1.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Liga Triunfo
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">QUALIFIER 3</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="row justify-content-md-start justify-content-center  g-6">
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx5.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Azariaria's Battlegrounds
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx8.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        EGamesSV Individual #1
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx9.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        AAG Axie Cup
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Solos Edition</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx14.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Copa Punto Gamers - B
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx13.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        AAG Axie Cup
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Solos Edition</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
                                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-10">
                                    <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="assets/img/game-xx3.png" alt="tournament">
                                            </div>
                                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                <span class="dot-icon alt-icon ps-3">Playing</span>
                                            </span>
                                        </div>
                                        <div class="tournament-content px-xxl-4">
                                            <div class="tournament-info mb-5">
                                                <a href="{{ route('ptournament.detail') }}" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        Copa Punto Gamers - B
                                                    </h4>
                                                </a>
                                                <span class="tcn-6 fs-sm">Torneo Individual</span>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
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
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">Free Entry</span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                                <a href="{{ route('ptournament.detail') }}" class="btn2">
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
            </div>
        </div>
    </section>
    <!-- tournament section end -->

    <!-- call to action section start -->
    {{-- <div class="call-to-action pt-120 pb-120 bgn-4 overflow-x-hidden" id="cta">
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
    </div> --}}
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
                    <span>Copyright © <span class="currentYear"></span> GamePlex | Designed by <a
                            href="https://themeforest.net/user/pixelaxis" class="tcp-1">Pixelaxis </a></span>
                </div>
                <div class="col-xxl-3 col-lg-5">
                    <ul class="d-flex align-items-center gap-lg-10 gap-sm-6 gap-4">
                        <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
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
