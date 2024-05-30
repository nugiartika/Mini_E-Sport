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

                <div class="col-sm-6 col-xxl-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $team->tournament->images) }}" alt="{{ $team->tournament->name }}"
                            class="card-img-top" />
                        <div class="card-body">
                            <div class="d-flex gap-3 mb-3 justify-content-between align-items-center">
                                {{-- <a href="{{ route('user.tournament.history', ['tournament' => $team->tournament->id]) }}"> --}}
                                    <h3 class="mb-0">{{ $team->tournament->name }}</h3>
                                {{-- </a> --}}
                                @if ($team->tournament->paidment !== 'Gratis')

                                @if (!in_array($team->tournament->id, $uploadedTournamentIds))
                                <a type="button" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#uploadbukti"
                                        class="btn btn-sm btn-primary"
                                        data-tournament-id="{{ $team->tournament->id }}">Kirim Bukti</a>
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
                                <span>Transaksi Terakhir</span>
                                @foreach ($uploads as $upload)

                                    @if ($upload->status === 'pending')
                                    <span>Menungggu Konfirmasi</span>
                                    @elseif ($upload->status === 'accepted')
                                    <span>Diterima</span>
                                    @elseif ($upload->status === 'rejected')
                                    <span>Ditolak</span>
                                    @else
                                        <span>Belum Ada Transaksi</span>
                                    @endif
                                    @endforeach
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            @endif


            @foreach ($team->teamTournament as $teamtournament)
                {{-- @php
                    $transaction = $teamtournament->transaction()->where('status', 'PAID');
                    $findIsNotSuccess = $teamtournament->transaction()->whereNotIn('status', ['PAID', 'UNPAID', 'PENDING']);
                    $findIsSuccess = $teamtournament->transaction()->whereIn('status', ['PAID', 'UNPAID', 'PENDING']);
                    $transactionExists = $transaction->exists();
                    $latestTransaction = $teamtournament->transaction()->latest()->first();
                @endphp --}}
                <div class="col-sm-6 col-xxl-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $teamtournament->tournament->images) }}" alt="No images"
                            class="card-img-top" />
                        <div class="card-body">
                            <div class="d-flex gap-3 mb-3 justify-content-between align-items-center">
                                {{-- <a href="{{ route('user.tournament.history', ['tournament' => $teamtournament->tournament->id]) }}"> --}}
                                    <h3 class="mb-0">{{ $teamtournament->tournament->name }}</h3>
                                {{-- </a> --}}
                                @if ($teamtournament->tournament->paidment !== 'Gratis')

                            @if (!in_array($teamtournament->tournament->id, $uploadedTournamentIds))
                            <a type="button" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#uploadbukti"
                                class="btn btn-sm btn-primary"
                                data-tournament-id="{{ $teamtournament->tournament->id }}">kirim bukti</a>

                            @endif
                            @endif
                            </div>

                            <div class="d-flex gap-3 justify-content-between py-3">
                                <span>Tanggal Ikut</span>
                                <span>{{ $team->created_at->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}</span>
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
                                    @foreach ($uploads as $upload)

                                    @if ($upload->status === 'pending')
                                    <span>Menungggu Konfirmasi</span>
                                    @elseif ($upload->status === 'accepted')
                                    <span>Diterima</span>
                                    @elseif ($upload->status === 'rejected')
                                    <span>Ditolak</span>
                                    @else
                                        <span>Belum Ada Transaksi</span>
                                    @endif
                                    @endforeach
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
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Kirim Bukti</h6>
                </div>
                <div class="modal-body">
                    <form action="{{ route('Upload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tournament_id" value="">

                        <div class="mb-3">
                            <label for="upload" class="form-label">Foto Bukti Pembayaran</label>
                            <input type="file" class="form-control @error('upload') is-invalid @enderror" id="upload"
                                name="upload">
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
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

    modal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tombol yang memicu modal
        var tournamentId = button.getAttribute('data-tournament-id'); // Ambil nilai dari atribut data-tournament-id

        // Perbarui nilai input hidden tournament_id di dalam modal
        var inputField = modal.querySelector('input[name="tournament_id"]');
        if (inputField) {
            inputField.value = tournamentId;
        }
    });
});
</script>
@endpush
