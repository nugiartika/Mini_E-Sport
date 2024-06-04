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
                <div class="col-12 mb-lg-15 mb-10">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Nama </h2>
                </div>
            </div>
            <!-- teams card  -->
            <div class="row g-6 justify-content-md-start justify-content-center mb-lg-15 mb-10">
                {{-- @dd($teams); --}}
                @forelse ($teams as $team)
                @php
                    $membersCount = \App\Models\Member::where('team_id', $team->id)
                        ->whereNotNull('nickname')
                        ->count();
                @endphp
                    <div class="col-xl-4 col-md-6">
                        <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                            <div class="team-thumb">
                                <img class="w-100 rounded-circle" src="{{ asset('storage/' . $team->profile) }}"
                                    alt="team">
                            </div>
                            <div class="team-info w-100">
                                <div class="title-area d-flex gap-5 align-items-end mb-5">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">{{ $team->name }}</h4>
                                </div>
                                <div class="player-info d-flex gap-6 align-items-center mb-6">
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="ti ti-users fs-2xl"></i>
                                        <span class="tcn-6">{{ $membersCount }} players</span>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <i class="ti ti-device-gamepad-2 fs-2xl"></i>
                                        <span class="tcn-6">{{ $team->category ? $team->category->name : $team->tournament->category->name}}</span>
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
