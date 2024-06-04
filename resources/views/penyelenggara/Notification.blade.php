@extends('layouts.panel')

@section('content')
    <div class="col-12">
        @forelse ($tournaments as $tournament)
                @if ($tournament->status == 'rejected')
                    <div class="card  mt-3" >
                        <div class="card-header">
                            <div style="display: inline-block;">
                                <img src="assets/img/humma-01.png" width="60" height="50" style="vertical-align: middle; margin-left:30px">
                                <h6 style="display: inline-block; vertical-align: middle; margin-left: 5px;">Humma E-Sport</h6>
                                <p class="ml-auto" style="display: inline-block; vertical-align: middle; margin-left: 725px;">{{ $tournament->updated_at->format('H:i') }}</p>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex flex-column align-items-start">
                                <div class="mb-2 d-flex align-items-center" style="margin-left:35px">
                                    <h5 class="card-title me-3">Nama Tournament :</h5>
                                    <p class="card-text mb-3">{{ $tournament->name }}</p>
                                </div>
                                <div class="mb-2 d-flex align-items-center" style="margin-left:35px">
                                    <h5 class="card-title me-3">Status :</h5>
                                    @if($tournament->status == 'accepted')
                                        <p class="card-text mb-3">Diterima</p>
                                    @else
                                        <p class="card-text mb-3">Ditolak</p>
                                    @endif
                                </div>
                                <div class="mb-3 d-flex align-items-center" style="margin-left:35px">
                                    <h5 class="card-title me-3">Pesan :</h5>
                                    <p class="card-text mb-3">{{ $tournament->reason }}</p>
                                </div>
                                @if ($tournament->notif == 'belum baca')
                                    <a href="{{ route('Updatenotification', ['id' => $tournament->id]) }}" class="btn btn-primary btn-sm ml-auto" style="margin-left: 815px"> Tandai sudah baca <i class="fa fa-check mx-2"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                @else
                <div class="card  mt-3" >
                    <div class="card-header">
                        <div style="display: inline-block;">
                            <img src="assets/img/humma-01.png" width="60" height="50" style="vertical-align: middle; margin-left:30px">
                            <h6 style="display: inline-block; vertical-align: middle; margin-left: 5px;">Humma E-Sport</h6>
                            <p class="ml-auto" style="display: inline-block; vertical-align: middle; margin-left: 725px;">{{ $tournament->updated_at->format('H:i') }}</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex flex-column align-items-start">
                            <div class="mb-2 d-flex align-items-center" style="margin-left:35px">
                                <h5 class="card-title me-3">Nama Tournament :</h5>
                                <p class="card-text mb-3">{{ $tournament->name }}</p>
                            </div>
                            <div class="mb-2 d-flex align-items-center" style="margin-left:35px">
                                <h5 class="card-title me-3">Status :</h5>
                                @if($tournament->status == 'accepted')
                                    <p class="card-text mb-3">Diterima</p>
                                @else
                                    <p class="card-text mb-3">Ditolak</p>
                                @endif
                            </div>
                            <div class="mb-3 d-flex align-items-center" style="margin-left:35px">
                                <h5 class="card-title me-3">Pesan :</h5>
                                <p class="card-text mb-3">Tournament anda sudah kami setujui</p>
                            </div>
                            @if ($tournament->notif == 'belum baca')
                                <a href="{{ route('Updatenotification', ['id' => $tournament->id]) }}" class="btn btn-primary btn-sm ml-auto" style="margin-left: 815px"> Tandai sudah baca <i class="fa fa-check mx-2"></i></a>
                            @endif
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
