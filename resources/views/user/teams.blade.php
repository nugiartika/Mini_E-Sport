{{-- @extends('layouts.user') --}}
@extends('user.layouts.app')
@section('style')
<style>
    .saring-btn {
        width: 100px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        border: 2px solid #7367f0 ; /* Warna border */
        border-radius: 20px; /* Bentuk border */
        background-color: #7367f0; /* Warna latar belakang */
        transition: background-color 0.3s ease; /* Transisi warna latar belakang */
    }
    .custom-btn {
        width: 100px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #7367f0;
        border: 2px solid #7367f0 ; /* Warna border */
        border-radius: 20px; /* Bentuk border */
        background-color: #ffffffe6; /* Warna latar belakang */
        transition: background-color 0.3s ease; /* Transisi warna latar belakang */
    }

    .custom-btn:hover {
        background-color: #7367f0 ; /* Warna latar belakang saat dihover */
        color: #ffffff; /* Warna teks saat dihover */
    }
    .custom-icon-detail {
        width: 40px;
        height: 40px;
        display: inline-block;
        border: 2px solid #7367f0; /* Border awal transparan */
        border-radius: 50%; /* Membuat border lingkaran */
        transition: border-color 0.3s ease; /* Transisi warna border saat hover */
    }

    .custom-icon-detail:hover {
        background-color: #7367f0;
        color: #ffffff;
        transform: translateY(-3px); /* Bergerak ke atas saat dihover */
    }

    .profile-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 10px;
    }

    .name-text {
        color: white;
        margin-bottom: 0;
    }

    .border-red {
        border: 2px solid rgb(209, 209, 209) !important;
        /* Menambahkan border merah */
    }
</style>
@endsection
@section('content')

                   
                        <div class="modal fade" id="existing" tabindex="-1" role="dialog" aria-labelledby="existingLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document" style="height: 100vh;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Tim Lama</h5>
                                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button> --}}
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{ route('teams.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="team_id">Pilih Tim:</label>
                                                <div class="row text-black">
                                                    @foreach ($teams as $team)
                                                        {{-- @if ($team->user_id === auth()->user()->id) --}}
                                                        @if ($team->user_id === auth()->user()->id && $team->tournament->categories_id === $tournament->categories_id)
                                                        <input type="hidden" name="tournament_id" value="{{ $tournament->id }}">
                                                        <div class="col-12 mb-3">
                                                            <div class="card"
                                                                id="teamCard{{ $team->id }}"
                                                                onclick="cardRadio(this)">
                                                                <div
                                                                    class="card-body d-flex align-items-center">
                                                                    <input type="radio"
                                                                        id="team_id{{ $team->id }}"
                                                                        name="team_id"
                                                                        value="{{ $team->id }}"
                                                                        style="display: none;">
                                                                    <img src="{{ asset('storage/' . $team->profile) }}"
                                                                        alt=""
                                                                        width="25"
                                                                        height="25"
                                                                        class="profile-image me-8">
                                                                    <label class="name-text"
                                                                        style="font-size: 20px"
                                                                        for="team_id{{ $team->id }}">
                                                                        {{ $team->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            {{-- <input type="hidden" name="tournament_id"
                                                value="{{ $tournament->id }}"> --}}

                                            <button type="submit" class="btn btn-primary">simpan</button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                @empty
                <div class="col-lg-12">
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
        </div>
    </div>
    @endsection
