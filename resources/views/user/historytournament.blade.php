@extends('user.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-0">Riwayat Ikut Turnamen</h3>
        </div>
    </div>

    <div class="row pt-4">
        @forelse ($historyData as $history)
            <div class="col-md-6 col-lg-4 mb-3">
            </div>
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
