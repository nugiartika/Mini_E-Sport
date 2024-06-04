@extends('layouts.panel')

@section('content')
    <div class="col-12">
        @forelse ($tournaments as $tournament)
                @if ($tournament->status == 'rejected')
                    <div class="mt-3">
                        <div class="card d-flex flex-row align-items-start">
                            <img src="assets/img/humma-01.png" width="150" height="110" style="vertical-align: middle; margin-top:25px; margin-left:25px; ">
                            <div class="card-body" style="margin-left: 20px; margin-top:10px;">
                                <div class="d-flex flex-column align-items-start">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title me-3">{{ $tournament->name }}</h5>
                                        <p style="margin-left: 530px">{{ $tournament->updated_at->format('H:i') }}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text me-3">Status :</p>
                                        @if($tournament->status == 'accepted')
                                            <p class="card-text mb-3">Diterima</p>
                                        @else
                                            <p class="card-text mb-3">Ditolak</p>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text me-3">Pesan :</p>
                                        <p class="card-text mb-3">{{ $tournament->reason }}</p>
                                    </div>
                                    @if ($tournament->notif == 'belum baca')
                                        <a href="{{ route('Updatenotification', ['id' => $tournament->id]) }}" class="btn btn-primary btn-sm ms-auto">Tandai sudah baca <i class="fa fa-check mx-2"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mt-3">
                        <div class="card d-flex flex-row align-items-start">
                            <img src="assets/img/humma-01.png" width="150" height="110" style="vertical-align: middle; margin-top:25px; margin-left:25px;">
                            <div class="card-body" style="margin-left: 20px; margin-top:10px;">
                                <div class="d-flex flex-column align-items-start">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title me-3">{{ $tournament->name }}</h5>
                                        <p style="margin-left: 530px">{{ $tournament->updated_at->format('H:i') }}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text me-3">Status :</p>
                                        @if($tournament->status == 'accepted')
                                            <p class="card-text mb-3">Diterima</p>
                                        @else
                                            <p class="card-text mb-3">Ditolak</p>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text me-3">Pesan :</p>
                                        <p class="card-text mb-3">Tournament anda sudah kami setujui</p>
                                    </div>
                                    @if ($tournament->notif == 'belum baca')
                                        <a href="{{ route('Updatenotification', ['id' => $tournament->id]) }}" class="btn btn-primary btn-sm ms-auto">Tandai sudah baca <i class="fa fa-check mx-2"></i></a>
                                    @endif
                                </div>
                            </div>
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
