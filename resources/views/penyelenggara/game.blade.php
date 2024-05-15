@extends('penyelenggara.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3">
            <h3 class="mb-0">Daftar Game</h3>
        </div>
    </div>

    @forelse ($category as $index)

        <div class="col-lg-3 col-md-6 col-sm-12  ratio-16x9">
            <div class="card">
                <div class="game-card-wrapper mx-auto ">
                    <div class="game-card mb-5 p-2 ">
                        <div class="game-card-border"></div>
                        <div class="game-card-border-overlay"></div>
                        <div class="game-img">
                            <img class="w-100 h-100" src="{{ asset('storage/' . $index->photo) }}" alt="game">
                        </div>
                        <div class="game-link d-center">
                            <a href="tournaments-details.html" class="btn2">
                                <i class="ti ti-arrow-right fs-2xl"></i>
                            </a>
                        </div>
                    </div>
                    <a href="tournaments-details.html">
                        <h4 class="game-title mb-0 tcn-1 cursor-scale growDown2 title-anim">{{ $index->name }}
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p>No Game found</p>
    @endforelse
@endsection
