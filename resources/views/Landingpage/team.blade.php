@extends('Landingpage.layout.asset')
@section('title', 'Team')
@section('content')

    <!-- teams banner section start  -->
    <section class="teams-section pb-sm-10 pb-6 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-10 mb-sm-6 mb-4">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Teams</h2>
                </div>
                <div class="col-12">
                    <div class="parallax-banner-area parallax-container">
                        <img class="w-100 rounded-5 parallax-img" src="{{ asset('assets/img/team-banner.png') }}"
                            alt="tournament banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams banner section end  -->

    <!-- teams card section start   -->
    <section class="teams-card-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-9"></div> <!-- Empty columns to push the form to the right -->

                <div class="col-3 mb-lg-15 mb-10 mt-4">
                    {{-- <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Nama </h2> --}}
                    <form action="{{ route('userTim') }}" method="get" class="d-flex gap-3 align-items-center">
                        @csrf
                        <div class="input-group me-3">

                        <input type="search" name="search" class="form-control" placeholder="Cari Team..."
                            value="{{ old('search', request('search')) }}">
                        <button type="submit" class="btn btn-primary" style="background-color: #1791C8;">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- teams card  -->
            <div class="row g-6 justify-content-md-start align-items-center justify-content-center mb-lg-15 mb-10">
                {{-- @dd($teams); --}}
                @forelse ($teams as $team)
                    @php
                        $membersCount = \App\Models\Member::where('team_id', $team->id)
                            ->whereNotNull('nickname')
                            ->count();
                    @endphp
                    <div class="col-xl-4 col-md-6">
                        <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                            <div class="team-thumb flex-shrink-0 overflow-hidden rounded-circle" style="height: 5rem; width: 5rem">
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('storage/' . $team->profile) }}"
                                    alt="team" style="object-fit: cover">
                            </div>

                            <div class="team-info w-100">
                                <div class="title-area d-flex gap-5 align-items-end mb-5">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">{{ $team->name }}</h4>
                                </div>
                                <div class="player-info d-flex flex-wrap gap-2 align-items-center">
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="ti ti-users fs-2xl"></i>
                                        <span class="tcn-6">{{ $membersCount }} players</span>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="ti ti-device-gamepad-2 fs-2xl"></i>
                                        <span
                                            class="tcn-6">{{ $team->category ? $team->category->name : $team->tournament->category->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- teams card section end   -->

@endsection
