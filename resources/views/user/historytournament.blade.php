@extends('user.layouts.app')

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
                            <img src="{{ asset("storage/{$team->tournament->images}") }}" alt="{{ $team->tournament->name }}"
                                class="card-img-top" />
                            <div class="card-body">
                                <div class="d-flex gap-3 mb-3 justify-content-between align-items-center">
                                    <a
                                        href="{{ route('detailTournament', ['tournament' => $tournament->tournament->id]) }}">
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
            <div class="col-md-6 mx-auto">
                <div class="d-flex align-items-center justify-content-center py-4 flex-column">
                    <h3 class="text-center mb-1">Tidak ada data</h3>
                    <p class="text-center">Silahkan ikuti turnamen yang tersedia...</p>

                    <a href="{{ route('user.tournament') }}" class="btn btn-primary">Lihat Daftar Turnamen</a>
                </div>
            </div>
        @endforelse
    </div>
@endsection
