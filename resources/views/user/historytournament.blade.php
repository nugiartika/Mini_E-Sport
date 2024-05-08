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
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card">
                            <img src="{{ asset("storage/{$tournament->tournament->images}") }}"
                                alt="{{ $tournament->tournament->name }}" class="card-img-top" />
                            <div class="card-body">
                                <a class="stretched-link" href="{{ route('detailTournament', ['tournament' => $tournament->tournament->id]) }}">
                                    <h3 class="mb-3">{{ $tournament->tournament->name }}</h3>
                                </a>

                                <div class="d-flex gap-3 border-top justify-content-between pt-4 pb-3">
                                    <span>Tanggal Ikut</span>
                                    <span>{{ $tournament->created_at->isoFormat('dddd, DD MMMM YYYY') }}</span>
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
