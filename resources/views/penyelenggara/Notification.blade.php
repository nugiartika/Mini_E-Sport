@extends('layouts.panel')

@section('content')
    <div class="col-12">
        @forelse ($tournaments as $tournament)
            <div class="card text-center">
                <div class="card-header">
                    {{ $tournament->name }}
                </div>
                <div class="card-body d-flex align-items-start">
                    <h5 class="card-title me-3">Alasan :</h5>
                    <p class="card-text">{{ $tournament->reason }}</p>
                </div>

                {{-- <div class="card-footer text-muted">
                    2 days ago
                </div> --}}
            </div>
            @empty
            <div class="col-lg-12 mt-5">
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
@endsection
