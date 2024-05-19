@extends('layouts.panel')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex gap-3">
            <h3 class="mb-0">Daftar Game</h3>
        </div>
    </div>

    <div class="row mt-4 mb-5">
        @forelse ($categories as $cat)
            <div class="col-md-4 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="overflow-hidden w-100" style="height: 200px">
                        <img class="w-100 h-100" src="{{ asset('storage/' . $cat->photo) }}" alt="game"
                            style="object-fit: cover;" />
                    </div>
                    <div class="card-body">
                        <div class="pb-3 border-bottom mb-3 d-flex justify-content-between">
                            <h5 class="mb-0">Nama Game</h5>
                            <span>{{ $cat->name }}</span>
                        </div>
                        <div class="pb-2 d-flex justify-content-between">
                            <h5 class="mb-0">Anggota per Tim</h5>
                            <span>{{ $cat->membersPerTeam }} orang / tim</span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
<<<<<<< Updated upstream
            <div class="col-12 d-flex flex-column justify-content-center">
                <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                    style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                <h4 class="table-light" style="text-align: center;">
                    Data Tidak Tersedia
                </h4>
            </div>
=======

        <div class="col-lg-12">
            <center>
                <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                    style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
            </center>
            <h1 class="table-light" style="text-align: center;">
                Tournament Tidak Tersedia
            </h1>
        </div>
>>>>>>> Stashed changes
        @endforelse
    </div>
@endsection
