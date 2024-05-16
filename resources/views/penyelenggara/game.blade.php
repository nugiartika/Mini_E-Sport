@extends('penyelenggara.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h3 class="mb-0">Daftar Game</h3>
        </div>
    </div>

    <div class="row">
        @forelse ($category as $index)
            <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch ratio-16x9">
                <div class="card">
                    <div class="game-card-wrapper">
                        <div class="game-card mb-5 p-2">
                            <div class="game-card-border"></div>
                            <div class="game-card-border-overlay"></div>
                            <div class="game-img">
                                <img class="w-100 h-100" src="{{ asset('storage/' . $index->photo) }}" alt="game">
                            </div>
                        </div>
                        <a href="tournaments-details.html" style="display: block; text-align: center;">
                            <h4>{{ $index->name }}</h4>
                        </a>

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
