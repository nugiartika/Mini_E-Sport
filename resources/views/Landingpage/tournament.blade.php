@extends('Landingpage.layout.asset')

@section('title', 'Turnamen')

@section('content')
@php
use App\Models\TeamTournament;
use App\Models\Team;
@endphp
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
                                <h2 class="display-four tcn-1 cursor-scale growUp title-anim">DAFTAR TURNAMEN</h2>
                            </div>
                            <div class="col-md-6 col-sm-4 text-sm-end">
                                <a href=""
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#filter">Cari Bedasarkan Game</a>
                            </div>
                        </div>
                        <div class="row justify-content-between align-items-center g-6">
                            {{-- @php

                            if ($isPaidTournament) {
                                $teamCount = $acceptedTeamCounts->get($Tournaments->id);
                                $teamIdCount = $acceptedTeamIdCounts->get($Tournaments->id);
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
                                $teamCount = $teamCounts->firstWhere('tournament_id', $Tournaments->id);
                                $teamIdCount = $teamIdCounts->firstWhere('tournament_id', $Tournaments->id);
                            }


                            $totalTeams =
                                ($teamCount ? $teamCount->count : 0) +
                                ($teamIdCount ? $teamIdCount->count : 0);

                            $userTeams = $teams ?? collect();
                            $userTeamsInTournament = $userTeams->where('tournament_id', $Tournaments->id);
                            $isUserInTournament = $userTeamsInTournament->isNotEmpty();

                            if ($isUserInTournament) {
                                // Ambil ID tim pengguna dalam turnamen berdasarkan ID turnamen
                                $userTeamIds = $userTeamsInTournament->pluck('id')->toArray();

                                // Cek apakah ada relasi antara tim pengguna dan team_tournaments berdasarkan ID tim dan ID turnamen
                                $userTeamsWithRelation = TeamTournament::whereIn('team_id', $userTeamIds)
                                    ->where('tournament_id', $Tournaments->id)
                                    ->get();
                            }
                            $userId = Auth::id();

                            $userTeamIds = Team::where('user_id', $userId)->pluck('id')->toArray();

                            // Cek apakah ada tim pengguna dalam turnamen ini
                            $teamtournamentId = TeamTournament::where('tournament_id', $Tournaments->id)
                                ->whereIn('team_id', $userTeamIds)
                                ->exists();

                        @endphp --}}
                        @forelse ($Tournaments as $index => $Tournament)
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
                                ($teamCount ? $teamCount->count : 0) +
                                ($teamIdCount ? $teamIdCount->count : 0);

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
                                                <img class="w-100" src="{{ asset('storage/' . $Tournament->images) }}"
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
                                                        <i class="ti ti-brand-flightradar24"></i> <span class="tcn-1 fs-sm">
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
                                                    <span class="tcn-1 fs-sm">{{ $Tournament->permainan->locale('id')->translatedFormat('d F Y H:i') }}</span>
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
                                {{-- @else

                            <div class="col-lg-12">
                                    <center>
                                        <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                            style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                                    </center>
                                    <h4 class="text-light" style="text-align: center;">
                                        Tournament Tidak Tersedia
                                    </h4>
                                </div> --}}
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
                                {{-- @if ($totalTeams === $Tournaments->slotTeam)
                                <div class="col-lg-12">
                                    <center>
                                        <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                            style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                                    </center>
                                    <h4 class="text-light" style="text-align: center;">
                                        Tournament Tidak Tersedia
                                    </h4>
                                </div>
                                @endif --}}
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- tournament section end -->

        <!-- Start modal Filter-->
    <div class="modal fade" tabindex="-1" id="filter" style="color: #ffffff;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('userTournament') }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="widget-title text-black"><b>Game Filters</b></h4>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:#7367f0; border:none;">Search</button>
                        </div>
                        @php
                        $selectedCategories = isset($selectedCategories) ? $selectedCategories : [];
                    @endphp
                        {{-- @foreach ($Categories as $game)
                            <div class="form-check text-black">
                                <input type="checkbox" class="form-check-input text-black"
                                    id="category{{ $game->id }}" name="categories_id"
                                    value="{{ $game->id }}" <label class="text-black"
                                    for="category{{ $game->id }}">
                                {{ $game->name }}
                                </label>
                            </div>
                        @endforeach --}}
                        @foreach ($Categories as $category)
                        <div class="form-check text-black">
                            <input type="checkbox" class="form-check-input text-black" id="category{{ $category->id }}"
                                name="categories_id[]" value="{{ $category->id }}"
                                @if (in_array($category->id, (array) $selectedCategories)) checked @endif>
                            <label class="form-check-label text-black" for="category{{ $category->id }}">
                                {{ $category->name }}
                            </label>
                        </div>
                    @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal Filter-->

@endsection


