@extends('penyelenggara.layouts.app')
@section('content')
    <div class="col-12">
        @foreach ($tournaments as $tournament)
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
        @endforeach
    </div>
@endsection
