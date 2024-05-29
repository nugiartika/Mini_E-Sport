@extends('layouts.panel')

@section('content')
    <div class="col-12">
        @forelse ($tournaments as $tournament)
                @if ($tournament->status == 'rejected')
                    <div class="card text-center" style="background-color: rgb(141, 41, 41)">
                        <div class="card-header">
                            {{ $tournament->name }}
                        </div>
                        <div class="card-body d-flex align-items-start">
                            <h5 class="card-title me-3">Alasan :</h5>
                            <p class="card-text">{{ $tournament->reason }}</p>
                            @if ($tournament->notif == 'belum baca')
                                <a href="{{ route('Updatenotification', ['id' => $tournament->id]) }}" class="btn btn-primary btn-sm" style="margin-left: 450px">Sudah baca</a>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="card text-center" style="background-color: rgb(29, 95, 64)">
                        <div class="card-header">
                            {{ $tournament->name }}
                        </div>
                        <div class="card-body d-flex align-items-start">
                            <h5 class="card-title me-3">Alasan :</h5>
                            <p class="card-text">Tournament Anda telah kami setujui</p>
                            @if ($tournament->notif == 'belum baca')
                                <a href="{{ route('Updatenotification', ['id' => $tournament->id]) }}" class="btn btn-primary btn-sm" style="margin-left: 450px">Sudah baca</a>
                            @endif
                        </div>
                    </div>
                @endif
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
