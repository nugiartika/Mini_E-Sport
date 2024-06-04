@extends('Landingpage.layout.asset')
@section('title', 'Game')
@section('content')
<!-- tournament section start -->
<section class="tournament-section pb-120" id="tournament-hero">
    <!-- Diamond animation -->
    <div class="diamond-area">
        <img class="w-100" src="assets/img/diamond.png" alt="diamond">
    </div>
    <!-- game console animation -->
    <div class="game-console-area">
        <img class="w-100" src="assets/img/game-console2.png" alt="game-console">
    </div>
    <div class="red-ball top-50"></div>


    <div class="tournament-wrapper">
        <div class="tournament-wrapper-border">
            <div class="container pt-120 pb-120">
                <div class="row justify-content-between align-items-center gy-sm-0 gy-4 mb-15">
                    <div class="col-md-6 col-sm-8">
                        <h2 class="display-four tcn-1 cursor-scale growUp title-anim">GAME</h2>
                    </div>

                </div>
                <div class="row justify-content-between align-items-center g-6">
                    @forelse ($Categories as $Category)
                        <div class="col-xl-4 col-md-6">
                            <div class="tournament-card p-xl-4 p-3 bgn-4">
                                <div class="tournament-img mb-8 position-relative">
                                    <div class="img-area overflow-hidden">
                                        <img class="w-100" src="{{ asset('storage/' . $Category->photo) }}"
                                            alt="tournament">
                                    </div>

                                </div>
                                <div class="tournament-content px-xl-4 px-sm-2">
                                    <div class="tournament-info mb-5">
                                        <a href="" class="d-block">
                                            <h4
                                                class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                {{ $Category->name }}</h4>

                                        </a>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-info d-flex justify-content-center gap-3 flex-wrap my-5  ">
                                        <div
                                            class=" price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="ti ti-users-group"></i>
                                                <span class="tcn-1 fs-sm">Jummlah Anggota PerTim</span>
                                            </div>
                                            <div class="v-line"></div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="tcn-1 fs-sm">{{ $Category->membersPerTeam }}</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="hr-line line3"></div>

                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12">
                            <center>
                                <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                    style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                            </center>
                            <h4 class="text-light" style="text-align: center;">
                                game Tidak Tersedia
                            </h4>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>

    </div>
</section>
<!-- tournament section end -->

@endsection


