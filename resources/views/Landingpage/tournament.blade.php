@extends('Landingpage.layout.asset')
@section('title', 'Tournament')
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
                                <h2 class="display-four tcn-1 cursor-scale growUp title-anim">TOURNAMENTS</h2>
                            </div>
                            <div class="col-md-6 col-sm-4 text-sm-end">
                                <a href=""
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#filter">Cari Bedasarkan Game</a>
                            </div>
                        </div>
                        <div class="row justify-content-between align-items-center g-6">
                            @forelse ($Tournaments as $index => $Tournament)
                                <div class="col-xl-4 col-md-6">
                                    <div class="tournament-card p-xl-4 p-3 bgn-4">
                                        <div class="tournament-img mb-8 position-relative">
                                            <div class="img-area overflow-hidden">
                                                <img class="w-100" src="{{ asset('storage/' . $Tournament->images) }}"
                                                    alt="tournament">
                                            </div>
                                            {{-- <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                         <span class="dot-icon alt-icon ps-3">Playing</span>
                                    </span> --}}
                                        </div>
                                        <div class="tournament-content px-xl-4 px-sm-2">
                                            <div class="tournament-info mb-5">
                                                <a href="tournaments-details.html" class="d-block">
                                                    <h4
                                                        class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                        {{ $Tournament->name }}</h4>

                                                </a>
                                                {{-- <span class="tcn-6 fs-sm">Torneo Individual</span> --}}
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                <div
                                                    class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                    <div class="d-flex align-items-center gap-2">
                                                    </div>
                                                    <div class="v-line"></div>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="ti ti-gift"></i> <span class="tcn-1 fs-sm">
                                                            @if ($Tournament->aktif === 'aktif')
                                                                Status: aktif
                                                            @elseif ($Tournament->aktif === 'aktif')
                                                                Status: Tidak aktif
                                                            @else
                                                                Status: Tidak Diketahui
                                                            @endif

                                                        </span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-ticket fs-base tcp-2"></i>
                                                    <span class="tcn-1 fs-sm">
                                                        @if ($Tournament->paidment === 'Gratis')
                                                            Gratis
                                                        @elseif ($Tournament->paidment === 'Berbayar')
                                                            Berbayar
                                                        @else
                                                            Status pembayaran tidak valid
                                                        @endif
                                                    </span>
                                                </div>
                                                <div
                                                    class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-calendar fs-base tcn-1"></i>
                                                    <span class="tcn-1 fs-sm">{{ $Tournament->permainan }}</span>
                                                </div>
                                            </div>
                                            <div class="hr-line line3"></div>
                                            <div class="card-more-info d-between mt-6">
                                                <div class="teams-info d-between gap-xl-5 gap-3">
                                                    <div class="teams d-flex align-items-center gap-1">
                                                        <i class="ti ti-users fs-base"></i>
                                                        <span class="tcn-6 fs-sm"> Slot Tim :
                                                            {{ $Tournament->slotTeam }}</span>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-sm-4 text-sm-end">
                                                    <a href="{{ route('landingpageDetailTournamet', ['id' => $Tournament->id]) }}"
                                                        class="btn-half-border position-relative d-inline-block py-2 px-3 bgp-1 rounded-pill">Detail</a>

                                                </div>
                                                {{-- <a href="tournaments-details.html" class="btn2">
                                            <i class="ti ti-arrow-right fs-2xl"></i>
                                        </a> --}}
                                            </div>
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
                                        Tournament Tidak Tersedia
                                    </h4>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- tournament section end -->
        
        <!-- Start modal Filter-->
    <div class="modal fade" tabindex="-1" id="filter" style="color: #ffffff;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('index') }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="widget-title text-black"><b>Game Filters</b></h4>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:#7367f0; border:none;">Search</button>
                        </div>

                        @foreach ($Categories as $game)
                            <div class="form-check text-black">
                                <input type="checkbox" class="form-check-input text-black"
                                    id="category{{ $game->id }}" name="categories_id"
                                    value="{{ $game->id }}" <label class="text-black"
                                    for="category{{ $game->id }}">
                                {{ $game->name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal Filter-->

@endsection


