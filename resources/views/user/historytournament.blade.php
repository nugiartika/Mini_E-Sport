@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-0">Riwayat Ikut Turnamen</h3>
        </div>
    </div>
    <div class="row pt-4">
        @forelse ($teams as $team)
            @if ($team->teamTournament)
                @foreach ($team->teamTournament as $tournament)
                    @php
                        $transaction = $tournament->transaction()->where('status', 'PAID');
                        $findIsNotSuccess = $tournament
                            ->transaction()
                            ->whereNotIn('status', ['PAID', 'UNPAID', 'PENDING']);
                        $findIsSuccess = $tournament->transaction()->whereIn('status', ['PAID', 'UNPAID', 'PENDING']);
                        $transactionExists = $transaction->exists();
                        $latestTransaction = $tournament->transaction()->latest()->first();
                    @endphp
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card">
                            <img src="{{ asset("storage/{$tournament->tournament->images}") }}" alt="{{ $tournament->tournament->name }}"
                                class="card-img-top" />
                            <div class="card-body">
                                <div class="d-flex gap-3 mb-3 justify-content-between align-items-center">
                                    <a href="{{ route('user.tournament.history', ['tournament' => $tournament->tournament->id]) }}">
                                        <h3 class="mb-0">{{ $tournament->tournament->name }}</h3>
                                    </a>

                                    @if (!$transactionExists && !$findIsSuccess->exists())
                                        <a href="{{ route('transaction.create', ['tournament_id' => $tournament->id]) }}"
                                            class="btn btn-sm btn-primary">Bayar Sekarang</a>
                                    @endif
                                </div>

                                <div class="d-flex gap-3 justify-content-between py-3">
                                    <span>Tanggal Ikut</span>
                                    <span>{{ $tournament->created_at->locale('id')->isoFormat('dddd, DD MMMM YYYY') }}</span>
                                </div>
                                <div class="d-flex gap-3 border-top justify-content-between py-3">
                                    <span>Sudah Bayar?</span>
                                    <span>{{ $transactionExists ? 'Sudah' : 'Belum' }}</span>
                                </div>
                                <div class="d-flex gap-3 border-top justify-content-between pt-3">
                                    <span>Transaksi Terakhir</span>
                                    @if ($latestTransaction)
                                        <span
                                            class="badge bg-{{ \App\Enums\TransactionStatus::color($latestTransaction->status) }}">{{ \App\Enums\TransactionStatus::label($latestTransaction->status) }}</span>
                                    @else
                                        <span>Belum Ada Transaksi</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
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

@endsection
