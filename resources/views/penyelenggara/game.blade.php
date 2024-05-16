@extends('penyelenggara.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex gap-3">
            <h3 class="mb-0">Daftar Game</h3>
        </div>
    </div>

    <div class="row mt-4 mb-5">
        @forelse ($category as $index)
            <div class="col-md-4 col-lg-3 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('storage/' . $index->photo) }}" alt="game"/>
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Game : {{ $index->name }}</h5>
                        <p class="card-text ">
                            Anggota per Tim : {{ $index->membersPerTeam }}
                        </p>
                        {{-- <a href="" data-bs-target="#detail{{ $category->id }}" data-bs-toggle="modal" class="btn btn-primary">
                            Connected
                        </a> --}}
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>No Game found</p>
            </div>
        @endforelse
    </div>


@endsection
