@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-0">Riwayat Ikut Turnamen</h3>
        </div>
    </div>
    <div class="row pt-4">
        @forelse ($teams as $team)
            @if ($team->tournament_id != null)
                @php
                    $upload = $uploads->firstWhere('tournament_id', $team['tournament']->id);
                @endphp
                <div class="col-sm-6 col-lg-4 col-xxl-3 mb-3">
                    <div class="card">
                        <div class="gambar overflow-hidden" style="max-height: 300px">
                            <img src="{{ asset('storage/' . $team->tournament->images) }}" alt="{{ $team->tournament->name }}"
                                class="card-img-top" style="object-fit: cover; height:100%; widht:100%;" />
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-3 mb-3 justify-content-between align-items-center">
                                <h3 class="mb-0">{{ $team->tournament->name }}</h3>
                                @if ($team->tournament->paidment !== 'Gratis')
                                    @if (!in_array($team->tournament->id, $uploadedTournamentIds))
                                        <a type="button" data-toggle="tooltip" data-bs-toggle="modal"
                                            data-bs-target="#uploadbukti" class="btn btn-sm btn-primary"
                                            data-tournament-id="{{ $team->tournament->id }}"
                                            data-team-id="{{ $team->id }}">
                                            Kirim Bukti</a>
                                    @endif
                                @endif
                            </div>

                            <div class="d-flex gap-3 justify-content-between py-3">
                                <span>Tanggal Ikut</span>
                                <span>{{ $team->created_at->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}</span>
                            </div>
                            @if ($team->tournament->paidment !== 'Gratis')
                                <div class="d-flex gap-3 border-top justify-content-between py-3">
                                    <span>Sudah Bayar?</span>
                                    @if (!in_array($team->tournament->id, $uploadedTournamentIds))
                                        <span>Belum</span>
                                    @else
                                        <span>Sudah</span>
                                    @endif
                                </div>
                                <div class="d-flex gap-3 border-top justify-content-between pt-3">
                                    <span class="flex-shrink-0">Transaksi Terakhir</span>
                                    <div class="d-flex gap-1 align-items-center">
                                        @if ($upload)
                                            @if ($upload->status === 'pending')
                                                <span>Menungggu Konfirmasi</span>
                                            @elseif ($upload->status === 'accepted')
                                                <span>Diterima</span>
                                            @elseif ($upload->status === 'rejected')
                                                <span>Ditolak</span>
                                                <span data-bs-toggle="tooltip" data-bs-title="Lihat Alasannya">
                                                    <a href="javascript:void(0)" data-bs-target="#alasan-{{ $upload->id }}" data-bs-toggle="modal" class="text-decoration-none text-white"><i
                                                            class="ti ti-help"></i></a>

                                                    <div class="modal fade" id="alasan-{{ $upload->id }}" tabindex="-1"
                                                        aria-labelledby="alasan-{{ $upload->id }}Label"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="alasan-{{ $upload->id }}Label">Alasannya?</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    {{ $upload->reason }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                            @else
                                                <span>Belum Ada Transaksi</span>
                                            @endif
                                        @else
                                            <span>Belum Ada Transaksi</span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif


            @foreach ($team->teamTournament as $teamtournament)
                @php
                    $uploadteam = $uploads->firstWhere('tournament_id', $teamtournament['tournament']->id);
                @endphp
                <div class="col-sm-6 col-xxl-4 mb-3">
                    <div class="card">
                        <div class="gambar" style="width:386px; height:300px;">
                            <img src="{{ asset('storage/' . $teamtournament->tournament->images) }}" alt="No images"
                                class="card-img-top" style="object-fit: cover; height:100%; widht:100%;" />
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-3 mb-3 justify-content-between align-items-center">
                                <h3 class="mb-0">{{ $teamtournament->tournament->name }}</h3>
                                @if ($teamtournament->tournament->paidment !== 'Gratis')
                                    @if (!in_array($teamtournament->tournament->id, $uploadedTournamentIds))
                                        <a type="button" data-toggle="tooltip" data-bs-toggle="modal"
                                            data-bs-target="#uploadbukti" class="btn btn-sm btn-primary"
                                            data-tournament-id="{{ $teamtournament->tournament->id }}"
                                            data-teamtournament-id="{{ $teamtournament->id }}">
                                            kirim bukti</a>
                                    @endif
                                @endif
                            </div>

                            <div class="d-flex gap-3 justify-content-between py-3">
                                <span>Tanggal Ikut</span>
                                <span>{{ $teamtournament->created_at->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}</span>
                            </div>
                            @if ($teamtournament->tournament->paidment !== 'Gratis')
                                <div class="d-flex gap-3 border-top justify-content-between py-3">
                                    <span>Sudah Bayar?</span>
                                    @if (!in_array($teamtournament->tournament->id, $uploadedTournamentIds))
                                        <span>Belum</span>
                                    @else
                                        <span>Sudah</span>
                                    @endif
                                </div>
                                <div class="d-flex gap-3 border-top justify-content-between pt-3">
                                    <span>Transaksi Terakhir</span>
                                    @if ($uploadteam)
                                        @if ($uploadteam->status === 'pending')
                                            <span>Menungggu Konfirmasi</span>
                                        @elseif ($uploadteam->status === 'accepted')
                                            <span>Diterima</span>
                                        @elseif ($uploadteam->status === 'rejected')
                                            <span>Ditolak</span>
                                            <span><i class="ti ti-note"></i>{{ $uploadteam->reason }}</span>
                                        @else
                                            <span>Belum Ada Transaksi</span>
                                        @endif
                                    @else
                                        <span>Belum Ada Transaksi</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @empty
            @if ($teams->isEmpty())
                <div class="col-lg-12">
                    <center>
                        <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                            style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
                    </center>
                    <h1 class="table-light" style="text-align: center;">
                        Data Tidak Tersedia
                    </h1>
                </div>
            @endif
        @endforelse

    </div>


    <div class="modal fade" tabindex="-1" id="uploadbukti">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-2"></i>Kirim Bukti</h6>
                </div>
                <div class="modal-body">
                    <form action="{{ route('Upload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tournament_id" value="">
                        <input type="hidden" name="team_id" value="">
                        <input type="hidden" name="teamtournament_id" value="">

                        <div class="mb-3">
                            <label for="upload" class="form-label">Foto Bukti Pembayaran</label>
                            <input type="file" class="form-control @error('upload') is-invalid @enderror"
                                id="upload" name="upload">
                            @if (old('upload'))
                                <img id="preview" src="{{ asset('storage/' . old('upload')) }}" alt="Old gambar"
                                    style="max-width: 100px; max-height: 100px;">
                            @endif
                            @error('upload')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="pt-2 d-flex gap-3 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Unggah Bukti</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('uploadbukti');

            modal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget; // Button that triggered the modal
                var tournamentId = button.getAttribute(
                    'data-tournament-id'); // Get the tournament ID from data attribute
                var teamId = button.getAttribute('data-team-id'); // Get the team ID from data attribute
                var teamTournamentId = button.getAttribute(
                    'data-teamtournament-id'); // Get the team tournament ID from data attribute

                var inputField = modal.querySelector('input[name="tournament_id"]');
                if (inputField) {
                    inputField.value = tournamentId;
                }

                // Update the hidden input fields for team_id and teamtournament_id
                var teamInputField = modal.querySelector('input[name="team_id"]');
                var teamTournamentInputField = modal.querySelector('input[name="teamtournament_id"]');

                if (teamId) {
                    if (teamInputField) {
                        teamInputField.value = teamId;
                    }
                    if (teamTournamentInputField) {
                        teamTournamentInputField.value = null; // Set teamtournament_id to null
                    }
                } else if (teamTournamentId) {
                    if (teamTournamentInputField) {
                        teamTournamentInputField.value = teamTournamentId;
                    }
                    if (teamInputField) {
                        teamInputField.value = null; // Set team_id to null
                    }
                }
            });

        });
    </script>
@endpush
