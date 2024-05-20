<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/humma-01.png" type="image/x-icon">
    <title>TOURNAMENT `- HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
=======
>>>>>>> Stashed changes

{{-- @extends('layouts.user') --}}
@extends('user.layouts.app')
@section('style')
    <style>
        .saring-btn {
            width: 100px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            border: 2px solid #7367f0;
            /* Warna border */
            border-radius: 20px;
            /* Bentuk border */
            background-color: #7367f0;
            /* Warna latar belakang */
            transition: background-color 0.3s ease;
            /* Transisi warna latar belakang */
        }

        .custom-btn {
            width: 100px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #7367f0;
            border: 2px solid #7367f0;
            /* Warna border */
            border-radius: 20px;
            /* Bentuk border */
            background-color: #ffffffe6;
            /* Warna latar belakang */
            transition: background-color 0.3s ease;
            /* Transisi warna latar belakang */
        }

        .custom-btn:hover {
            background-color: #7367f0;
            /* Warna latar belakang saat dihover */
            color: #ffffff;
            /* Warna teks saat dihover */
        }

        .custom-icon-detail {
            width: 40px;
            height: 40px;
            display: inline-block;
            border: 2px solid #7367f0;
            /* Border awal transparan */
            border-radius: 50%;
            /* Membuat border lingkaran */
            transition: border-color 0.3s ease;
            /* Transisi warna border saat hover */
        }

        .custom-icon-detail:hover {
            background-color: #7367f0;
            color: #ffffff;
            transform: translateY(-3px);
            /* Bergerak ke atas saat dihover */
        }

        .profile-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 10px;
        }

        .name-text {
            color: white;
            margin-bottom: 0;
        }

        .border-red {
            border: 2px solid rgb(209, 209, 209) !important;
            /* Menambahkan border merah */
        }
    </style>
@endsection
@section('content')
@php
    use App\Models\TeamTournament;
@endphp
    <div class="modal" tabindex="-1" id="filter" style="color: #ffffff;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tournament.filteruser') }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="widget-title"><b>Category</b></h4>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:#7367f0; border:none;">Saring</button>
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
    <div class="tabcontents">
        <div class="tabitem active">
            <div class="row justify-content-md-start justify-content-center g-6">
                <div class="singletab tournaments-tab">
                    <div class="d-flex align-items-center gap-6 flex-wrap mb-lg-5 mb-sm-3 mb-2"
                        style="margin-left: 30px; margin-top: 10px; width: 100px; height: 40px;">
                        <button class="saring-btn" data-toggle="tooltip" data-bs-toggle="modal"
                            data-bs-target="#filter">Saring</button>
                    </div>
<<<<<<< Updated upstream
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
                                                            <a type="button"
                                                                class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill"
                                                                data-toggle="modal"
                                                                data-target="#exampleModalCenter">Daftar</a>
                                                        </div>
                                                    @elseif (!$totalTeams)
                                                        <div class="text-end ms-8">
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

                                                {{-- <div class="modal-body">

                                                    <form action="{{ route('teams.store') }}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="team_id">Select Team:</label>
                                                            <div class="row text-black">
                                                                @foreach ($teams as $team)
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

                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>

                                                </div> --}}

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
=======
                </div>

                @forelse ($tournaments->where('status', 'accepted') as $index => $tournament)
                    <div class="col-xl-4 col-md-6 col-sm-10 mb-4">
                        <div class="card h-100">

                            <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                <div class="tournament-img mb-8 position-relative">
                                    <div class="img-area overflow-hidden rounded"
                                        style="width: auto; height: 200px; border-radius: .5rem;">
                                        <img class="w-100" style="object-fit: cover; width: 100%; height: 100%;"
                                            src="{{ asset('storage/' . $tournament->images) }}" alt="tournament">
                                    </div>
                                </div>
                                <div class="tournament-content px-xxl-4 mt-3 mt-md-4">
                                    <div class="tournament-info mb-4">
                                        <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                            {{ $tournament->name }}
                                        </h4>
                                        <span class="tcn-6 fs-sm">{{ $tournament->penyelenggara }}</span>
                                    </div>

                                    <div class="hr-line line3"></div>
                                    <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                        <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="ti ti-moneybag fs-base tcp-2"></i>
                                                <span class="tcn-1 fs-sm">IDR
                                                    {{ number_format($tournament->nominal, 0, '.', ',') }}</span>
                                            </div>
                                        </div>
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">
                                                {{ $tournament->paidment == 'unpaid' ? 'Gratis' : 'Berbayar' }}
                                            </span>
                                        </div>
                                        <div class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-calendar fs-base tcn-1"></i>
                                            <span
                                                class="tcn-1 fs-sm">{{ \Carbon\Carbon::parse($tournament->permainan)->format('d F Y') }}</span>
                                        </div>
                                    </div>


                                    @php

                                    // Ambil total tim dari hasil perhitungan
                                    $teamCount = $teamCounts->firstWhere('tournament_id', $tournament->id);
                                    $teamIdCount = $teamIdCounts->firstWhere('tournament_id', $tournament->id);
                                    $totalTeams = ($teamCount ? $teamCount->count : 0) + ($teamIdCount ? $teamIdCount->count : 0);

                                    $userTeams = $teams ?? collect();
                                    $userTeamsInTournament = $userTeams->where('tournament_id', $tournament->id);
                                    $isUserInTournament = $userTeamsInTournament->isNotEmpty();

                                    if ($isUserInTournament) {
                                        // Ambil ID tim pengguna dalam turnamen berdasarkan ID turnamen
                                        $userTeamIds = $userTeamsInTournament->pluck('id')->toArray();

                                        // Cek apakah ada relasi antara tim pengguna dan team_tournaments berdasarkan ID tim dan ID turnamen
                                        $userTeamsWithRelation = TeamTournament::whereIn('team_id', $userTeamIds)
                                            ->where('tournament_id', $tournament->id)
                                            ->get();
                                    }
                                    @endphp



                                    <div class="hr-line line3"></div>
                                    <div class="card-more-info d-flex justify-content-between align-items-center mt-6">
                                        <!-- Informasi Jumlah Teams -->
                                        <div class="teams-info d-flex align-items-center gap-3">
                                            <div class="teams d-flex align-items-center gap-1">
                                                <i class="ti ti-users fs-base"></i>
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

                                        @if (($totalTeams && $totalTeams < $tournament->slotTeam) && (!$isUserInTournament && !$userTeamsWithRelation))
                                            <div class="text-center">
                                                <a type="button" class="btn-half position-relative d-inline-block py-2"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                                                    data-tournament-id="{{ $tournament->id }}">
                                                    <div class="custom-btn"
                                                        style="width: 100px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                                        Daftar
                                                    </div>
                                                </a>
                                            </div>
                                        @elseif (!$totalTeams)
                                            <div class="text-center">
                                                <a type="button" class="btn-half position-relative d-inline-block py-2"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                                                    data-tournament-id="{{ $tournament->id }}">
                                                    <div class="custom-btn"
                                                        style="width: 100px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                                        Daftar
                                                    </div>
                                                </a>
                                            </div>
                                        @elseif ($totalTeams)

                                        @elseif ($totalTeams && $totalTeams == $tournament->slotTeam)
                                        @endif

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body d-flex flex-column align-items-center">
                                    <div class="d-flex justify-content-center align-items-center mb-4"
                                        style="height: 100px;">
                                        <center>
                                            <h6 style="color: white;">Create a New Team for the Tournament or Choose an
                                                Existing Team</h6>
                                        </center>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" type="button" class="btn btn-secondary me-2">Existing Team</a>
                                        <a href="#" type="button" class="btn btn-primary">Tim Baru</a>
                                    </div>
                                </div>
>>>>>>> Stashed changes
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
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var exampleModal = document.getElementById('exampleModalCenter');
            exampleModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget; // Tombol yang memicu modal
                var tournamentId = button.getAttribute(
                    'data-tournament-id'); // Ambil ID turnamen dari atribut data

<<<<<<< Updated upstream
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
=======
                // Update tautan dengan ID turnamen yang benar
                var existingTeamLink = exampleModal.querySelector('.btn-secondary');
                var newTeamLink = exampleModal.querySelector('.btn-primary');

                existingTeamLink.href = '/teams/create?tournament_id=' + tournamentId;
                newTeamLink.href = '/team/create?tournament_id=' + tournamentId;
            });
        });
    </script>

>>>>>>> Stashed changes
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
@endsection
