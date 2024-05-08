{{-- @extends('layouts.user') --}}
@extends('user.layouts.app')
@section('style')
<style>
    .custom-btn {
        width: 100px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #7367f0;
        border: 2px solid #7367f0 ; /* Warna border */
        border-radius: 20px; /* Bentuk border */
        background-color: #ffffffe6; /* Warna latar belakang */
        transition: background-color 0.3s ease; /* Transisi warna latar belakang */
    }

    .custom-btn:hover {
        background-color: #7367f0 ; /* Warna latar belakang saat dihover */
        color: #ffffff; /* Warna teks saat dihover */
    }
    .custom-icon-detail {
        width: 40px;
        height: 40px;
        display: inline-block;
        border: 2px solid #7367f0; /* Border awal transparan */
        border-radius: 50%; /* Membuat border lingkaran */
        transition: border-color 0.3s ease; /* Transisi warna border saat hover */
    }

    .custom-icon-detail:hover {
        background-color: #7367f0;
        color: #ffffff;
        transform: translateY(-3px); /* Bergerak ke atas saat dihover */
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
    <div class="tabcontents">
        <div class="tabitem active">
            <div class="row justify-content-md-start justify-content-center g-6">

                @foreach ($tournaments->where('status', 'accepted') as $index => $tournament)
                    <div class="col-xl-4 col-md-6 col-sm-10">
                        <div class="card h-100">

                            <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                <div class="tournament-img mb-8 position-relative">
                                    <div class="img-area overflow-hidden" style="width:340px; height:200px;">
                                        <img class="w-100" style="object-fit: cover; width: 100%; height: 100%;"
                                            src="{{ asset('storage/' . $tournament->images) }}" alt="tournament">
                                    </div>
                                    {{-- <span
                                class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                <span class="dot-icon alt-icon ps-3">Playing</span>
                            </span> --}}
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
                                                <img class="w-100" src="assets/img/bitcoin.png" alt="bitcoin">
                                                <span class="tcn-1 fs-sm">75</span>
                                            </div>
                                            <div class="v-line"></div>
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="assets/img/tether.png" alt="tether">
                                                <span class="tcn-1 fs-sm">$49.97</span>
                                            </div>
                                        </div>
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">Free Entry</span>
                                        </div>
                                        <div class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
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
                                        $teamCount = $teamCounts->firstWhere('tournament_id', $tournament->id);
                                        $teamIdCount = $teamIdCounts->firstWhere('tournament_id', $tournament->id);
                                        $totalTeams =
                                            ($teamCount ? $teamCount->count : 0) +
                                            ($teamIdCount ? $teamIdCount->count : 0);
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
                                        <!-- Tombol Join -->
                                        @if ($totalTeams && $totalTeams < $tournament->slotTeam)
                                        <div class="text-center">
                                            <div class="custom-btn"
                                                style="width: 100px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                                <a type="button" class="btn-half position-relative d-inline-block py-2"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Join</a>
                                            </div>
                                        </div>


                                        @elseif (!$totalTeams)
                                        <div class="text-center">
                                            <div class="custom-btn"
                                                style="width: 100px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                                <a type="button" class="btn-half position-relative d-inline-block py-2"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Join</a>
                                            </div>
                                        </div>

                                        @elseif ($totalTeams)
                                            {{-- user sudah terdaftar --}}
                                        @elseif ($totalTeams && $totalTeams == $tournament->slotTeam)
                                            {{-- Jika jumlah tim sama dengan slot tim, tidak ada tindakan yang diambil --}}
                                        @endif

                                        <!-- Tombol Detail Tournament -->
                                        <a href="{{ route('detailTournament', ['tournament' => $tournament->id]) }}"
                                            class="custom-icon-detail" data-bs-toggle="tooltip" data-bs-placement="top" style="display: flex; justify-content: center; align-items: center;"
                                            title="Detail Tournament">
                                            <i class="ti ti-arrow-right fs-2xl"></i>
                                        </a>
                                    </div>



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
                                            <h6 style="color: white;">Create a New Team for the
                                                Tournament or Choose an Existing Team</h6>
                                        </center>
                                    </div>
                                    <div class="d-flex justify-content-center">

                                        <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}"
                                            type="button" class="btn btn-secondary me-2" data-bs-toggle="modal"
                                            data-bs-target="#existing" data-bs-dismiss="modal">Existing Team</a>
                                        <a href="{{ route('team.create', ['tournament_id' => $tournament->id]) }}"
                                            type="button" class="btn btn-primary">New Team</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="existing" tabindex="-1" role="dialog" aria-labelledby="existingLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document" style="height: 100vh;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-white" id="exampleModalLabel">Existing
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
                                                    <input type="hidden" name="tournament_id" value="{{ $tournament->id }}">
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
                                                                            alt=""
                                                                            width="25"
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
                @endforeach



            </div>
        </div>
    </div>
    @endsection

    @section('script')
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