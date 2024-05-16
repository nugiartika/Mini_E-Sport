@extends('user.layouts.app')

@section('content')
    <div class="row mb-5">
<<<<<<< Updated upstream
        @foreach ($categories as $category)
            <div class="col-md-4 col-lg-3 mb-3">
=======
        @forelse ($categories as $category)
            <div class="col-md-6 col-lg-4 mb-3">
>>>>>>> Stashed changes
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('storage/' . $category->photo) }}" alt="Gambar Game    " />
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Game : {{ $category->name }}</h5>
                        <p class="card-text ">
                            Anggota per Tim : {{ $category->membersPerTeam }}
                        </p>
                        {{-- <a href="" data-bs-target="#detail{{ $category->id }}" data-bs-toggle="modal" class="btn btn-primary">
                        Connected
                    </a> --}}
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
