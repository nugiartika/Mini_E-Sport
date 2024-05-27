@extends('layouts.panel')

@section('content')
    @php
        use App\Models\TeamTournament;
    @endphp


    <div class="d-flex pb-4">
        <a href="{{ route('user.tournament') }}" class="btn btn-primary d-flex gap-2 align-items-center"><i
                class="ti ti-arrow-left"></i><span>Kembali Ke Daftar Turnamen</span></a>
    </div>




    @php
        // Ambil total tim dari hasil perhitungan
        $teamCount = $teamCounts->firstWhere('tournament_id', $tournament->id);
        $teamIdCount = $teamIdCounts->firstWhere('tournament_id', $tournament->id);
        $totalTeams = ($teamCount ? $teamCount->count : 0) + ($teamIdCount ? $teamIdCount->count : 0);

        $userTeams = $teams ?? collect();
        $userTeamsInTournament = $userTeams->where('tournament_id', $tournament->id);
        // $isUserInTournament = $userTeamsInTournament->isNotEmpty();

        // if ($isUserInTournament) {
        //     // Ambil ID tim pengguna dalam turnamen berdasarkan ID turnamen
        //     $userTeamIds = $userTeamsInTournament->pluck('id')->toArray();

        //     // Cek apakah ada relasi antara tim pengguna dan team_tournaments berdasarkan ID tim dan ID turnamen
        //     $userTeamsWithRelation = TeamTournament::whereIn('team_id', $userTeamIds)
        //         ->where('tournament_id', $tournament->id)
        //         ->get();
        // }
    @endphp

    <div class="row">
        <div class="col-md-3">
            <img class="w-100 rounded-4" src="{{ asset('storage/' . $selectedTournament->images) }}"
                alt="{{ $selectedTournament->name }}" />
        </div>
        <div class="col-md-9">
            <h1 class="title-anim">{{ $selectedTournament->name }}</h1>
            <p class="text-anim">{!! $selectedTournament->description !!}</p>

            <div class="row pt-4">
                <div class="col-md-6 border-end p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-user"></i>
                        <span>{{ $selectedTournament->user->name }}</span>
                    </div>
                </div>
                <div class="col-md-6 p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-calendar"></i>
                        <span>{{ $selectedTournament->created_at->locale('id')->format('d M Y') }}</span>
                    </div>
                </div>
                <div class="col-md-6 border-end p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-device-gamepad-2"></i>
                        <span>{{ $selectedTournament->category->name }}</span>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-users-group"></i>
                        <span>{{ $selectedTournament->slotTeam }} tim</span>
                    </div>
                </div>
            </div>


            @if ($totalTeams && $totalTeams < $tournament->slotTeam && !$userTeamInTournament && !$teamtournamentId)
                <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                    data-tournament-id="{{ $tournament->id }}" class="btn btn-primary btn-lg btn-block text-anim">Gabung
                    Turnamen</a>
            @elseif ($tournament->aktif === 'tidak aktif')

            @elseif (!$totalTeams)
                <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
                    data-tournament-id="{{ $tournament->id }}" class="btn btn-primary btn-lg btn-block text-anim">Gabung
                    Turnamen</a>
            @elseif ($totalTeams)

            @elseif ($totalTeams && $totalTeams == $tournament->slotTeam)
            @endif
        </div>
    </div>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center">
                    <div class="d-flex justify-content-center align-items-center mb-4" style="height: 100px;">
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
            </div>
        </div>
    </div>


    <div class="row py-4">
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-location display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Jenis Turnamen</h4>
                <p class="mb-0">{{ $selectedTournament->paidment }}</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-wallet display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">HTM</h4>
                <p class="mb-0">Rp {{ number_format($selectedTournament->nominal, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-gift display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Prizepool</h4>
                @foreach ($prizes as $prize)
                    @if ($prize->tournament_id == $selectedTournament->id)
                        <p class="mb-0">{{ $prize->prizepool->prize }} ,
                            {{ $prize->note }}</p>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-calendar display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Pendaftaran</h4>
                <p class="mb-0">{{ $selectedTournament->pendaftaran->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-calendar-x display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1"> Permainan</h4>
                <p class="mb-0">{{ $selectedTournament->permainan->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                </p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-users-group display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Slot Tim</h4>
                <p class="mb-0">{{ $selectedTournament->slotTeam }} tim</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-device-gamepad-2 display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Kategori Game</h4>
                <p class="mb-0">{{ $selectedTournament->category->name }}</p>
            </div>
        </div>
    </div>


    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="bracket-tab" data-bs-toggle="tab" data-bs-target="#bracket"
                type="button" role="tab" aria-controls="bracket" aria-selected="true">Bracket</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="juara-tab" data-bs-toggle="tab" data-bs-target="#juara" type="button"
                role="tab" aria-controls="juara" aria-selected="false">Juara</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="detail-info-tab" data-bs-toggle="tab" data-bs-target="#detail-info"
                type="button" role="tab" aria-controls="detail-info" aria-selected="false">Detail dan
                Informasi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="jadwal-tab" data-bs-toggle="tab" data-bs-target="#jadwal" type="button"
                role="tab" aria-controls="jadwal" aria-selected="false">Jadwal</button>
        </li>
        {{-- <li class="nav-item" role="presentation">
            <button class="nav-link" id="list-tim-tab" data-bs-toggle="tab" data-bs-target="#list-tim" type="button"
                role="tab" aria-controls="list-tim" aria-selected="false">Tim</button>
        </li> --}}
    </ul>

    <!-- Tab content -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="bracket" role="tabpanel" aria-labelledby="bracket-tab">
            <div class="d-flex mb-4 justify-content-between">
                <h3 class="mb-0">Bracket</h3>



            </div>

            @if ($selectedTournament->urlBracket)
                <iframe src="{{ $selectedTournament->urlBracket }}" class="w-100" height="750"
                    frameborder="0"></iframe>
            @else
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/No-data.png') }}" width="70%" alt="Image Not Found" />
                            <h3>Maaf, Belum Disediakan.</h3>
                            <p class="mb-3 text-center">Bracket belum disediakan oleh penyelenggara.
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="juara" role="tabpanel" aria-labelledby="juara-tab">

            <h3>Juara</h3>



            @forelse ($juaras as $juara)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Juara 1</th>
                            <th scope="col">Juara 2</th>
                            <th scope="col">Juara 3</th>
                            <th scope="col">MVP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>{{ $juara->nama_juara1 }}</td>
                            <td>{{ $juara->nama_juara2 }}</td>
                            <td>{{ $juara->nama_juara3 }}</td>
                            <td>{{ $juara->mvp }}</td>
                        </tr>
                    </tbody>
                </table>
            @empty
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/No-data.png') }}" width="70%" alt="Image Not Found" />
                            <h3>Maaf, Belum Disediakan.</h3>
                            <p class="mb-3 text-center">Juara belum disediakan oleh penyelenggara.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="tab-pane fade" id="jadwal" role="tabpanel" aria-labelledby="jadwal-tab">
            <h3>Jadwal</h3>


            @forelse ($jadwals as  $jadwal)
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('ptournament.jadwal', ['id' => $jadwal->id]) }}" method="POST">
                                <!-- Tambahkan method POST -->
                                @csrf
                                <!-- Tambahkan ini jika menggunakan Laravel untuk keamanan CSRF -->
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jadwal
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Penyisihan</h5>
                                    <label for="tanggalPenyisihan" class="form-label">Tanggal
                                        Penyisihan</label>
                                    <input type="date" class="form-control" id="tanggalPenyisihan"
                                        name="tanggalPenyisihan" required>
                                    <!-- Tambahkan atribut required -->
                                    <label for="waktuPenyisihan" class="form-label">Waktu
                                        Penyisihan</label>
                                    <input type="time" class="form-control" id="waktuPenyisihan"
                                        name="waktuPenyisihan" required>
                                    <!-- Tambahkan atribut required -->
                                    <label for="boPenyisihan" class="form-label">Best Of</label>
                                    <input type="text" class="form-control" id="boPenyisihan" name="boPenyisihan"
                                        required>
                                    <!-- Tambahkan atribut required -->

                                    <h5>Semi Fiinal</h5>
                                    <label for="tanggalSemi" class="form-label">Tanggal Semi</label>
                                    <input type="date" class="form-control" id="tanggalSemi" name="tanggalSemi"
                                        required>
                                    <!-- Tambahkan atribut required -->
                                    <label for="waktuSemi" class="form-label">Waktu Semi</label>
                                    <input type="time" class="form-control" id="waktuSemi" name="waktuSemi" required>
                                    <!-- Tambahkan atribut required -->
                                    <label for="boSemi" class="form-label">Best Of</label>
                                    <input type="text" class="form-control" id="boSemi" name="boSemi" required>
                                    <!-- Tambahkan atribut required -->

                                    <h5>Final</h5>
                                    <label for="tanggalFinal" class="form-label">Tanggal Final</label>
                                    <input type="date" class="form-control" id="tanggalFinal" name="tanggalFinal"
                                        required>
                                    <!-- Tambahkan atribut required -->
                                    <label for="waktuFinal" class="form-label">Waktu Final</label>
                                    <input type="time" class="form-control" id="waktuFinal" name="waktuFinal"
                                        required>
                                    <!-- Tambahkan atribut required -->
                                    <label for="boFinal" class="form-label">Best Of</label>
                                    <input type="text" class="form-control" id="boFinal" name="boFinal" required>
                                    <!-- Tambahkan atribut required -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <!-- Ubah type dari button menjadi submit -->
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Penyisihan</th>
                            <th scope="col">Semi Final</th>
                            <th scope="col">Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($jadwals as $jadwal)
                                <td>Tanggal Dimulai : {{ $jadwal->tanggalPenyisihan }} <br>
                                    Waktu Dimulai : {{ $jadwal->waktuPenyisihan }} <br>
                                    BO : {{ $jadwal->boPenyisihan }} <br>
                                </td>
                                <td>Tanggal Dimulai : {{ $jadwal->tanggalSemi }} <br>
                                    Waktu Dimulai : {{ $jadwal->waktuSemi }} <br>
                                    BO : {{ $jadwal->boSemi }} <br>
                                </td>
                                <td>Tanggal Dimulai : {{ $jadwal->tanggalFinal }} <br>
                                    Waktu Dimulai : {{ $jadwal->waktuFinal }} <br>
                                    BO : {{ $jadwal->boFinal }} <br>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @empty
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/No-data.png') }}" width="70%" alt="Image Not Found" />
                            <h3>Maaf, Belum Disediakan.</h3>
                            <p class="mb-3 text-center">Jadwal belum disediakan oleh penyelenggara.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="tab-pane fade" id="detail-info" role="tabpanel" aria-labelledby="detail-info-tab">
            <div>
                <h3>Detail dan Informasi</h3>
                <div class="border-end border-bottom">
                    <h6>Deskripsi</h6>
                    <small>{!! $tournament->description !!}</small>
                </div>
                <div class="border-end border-bottom">
                    <h6>Peraturan</h6>
                    <small>{{ $tournament->rule }}</small>
                </div>
                <div class="border-end border-bottom">
                    <h6>Kontak Personal</h6>
                    <small>{{ $tournament->contact }}</small>
                </div>

            </div>
        </div>

    </div>
@endsection


@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var exampleModal = document.getElementById('exampleModalCenter');
            exampleModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget; // Tombol yang memicu modal
                var tournamentId = button.getAttribute(
                    'data-tournament-id'); // Ambil ID turnamen dari atribut data

                // Update tautan dengan ID turnamen yang benar
                var existingTeamLink = exampleModal.querySelector('.btn-secondary');
                var newTeamLink = exampleModal.querySelector('.btn-primary');

                existingTeamLink.href = '/teams/create?tournament_id=' + tournamentId;
                newTeamLink.href = '/team/create?tournament_id=' + tournamentId;
            });
        });
    </script>

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
                cards.forEach(funct ion(card) {
                    card.classList.remove('border-red');
                });

                card.classList.add('border-red');
            }
        }
    </script>
@endpush
