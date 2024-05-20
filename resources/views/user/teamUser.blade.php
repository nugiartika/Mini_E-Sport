@extends('user.layouts.app')
@section('content')

    <div class="row mb-5">
        <div class="mb-4">
            <a href="{{ route('team.addteam')}}"  class=" btn btn-primary"> Buat Team</a>
        </div>
        @forelse ($teams as $team)
            <div class="col-md-6 col-lg-4 mb-3">

                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('storage/' . $team->profile) }}" alt="Gambar Tim" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Team : {{ $team->name }}</h5>
                        <div>
                            <a href="{{ route('user.detailTeam', ['id' => $team->id]) }}" class="btn btn-primary">
                                Detail
                            </a>
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
@endsection
