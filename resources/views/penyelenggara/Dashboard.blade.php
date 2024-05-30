@extends('layouts.panel')

@section('content')
    <div class="card-widget-separator-wrapper ">
        <div class="card-body card-widget-separator">
            <div class="row gy-4 gy-sm-1 " >
                <div class="card col-sm-6 col-lg-5 mx-5 mt-5">
                    <div
                        class="d-flex justify-content-between align-items-start card-widget-1  pb-3 pb-sm-0 mt-3 mb-3">
                        <div class="ms-4">
                            <h6 class="mb-2">JUMLAH TOURNAMENT DITERIMA</h6>
                            <h4 class="mb-2">{{$tournamentacc}}</h4>

                            <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                        </div>
                        <span class="avatar p-2 me-lg-4 mt-4">
                            <span class="avatar-initial bg-label-secondary rounded"><i
                                    class="fas fa-trophy"></i></span>
                        </span>
                    </div>
                    <hr class="d-none d-sm-block d-lg-none me-4">
                </div>
                <div class="card col-sm-6 col-lg-5 mx-5 mt-5">
                    <div
                        class="d-flex justify-content-between align-items-start card-widget-1  pb-3 pb-sm-0 mt-3 mb-3">
                        <div class="ms-4">
                            <h6 class="mb-2">JUMLAH TOURNAMENT DITOLAK</h6>
                            <h4 class="mb-2">{{$tournamentrej}}</h4>
                            <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                        </div>
                        <span class="avatar p-2 me-lg-4 mt-4">
                            <span class="avatar-initial bg-label-secondary rounded"><i
                                    class="fas fa-trophy"></i></span>
                        </span>
                    </div>
                    <hr class="d-none d-sm-block d-lg-none me-4">
                </div>
                <div class="card col-sm-6 col-lg-5 mx-5 mt-4">
                    <div
                        class="d-flex justify-content-between align-items-start card-widget-1  pb-3 pb-sm-0 mt-3 mb-3">
                        <div class="ms-4">
                            <h6 class="mb-2">JUMLAH TOURNAMENT PENDING</h6>
                            <h4 class="mb-2">{{$tournamentpend}}</h4>
                            <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                        </div>
                        <span class="avatar p-2 me-lg-4 mt-4">
                            <span class="avatar-initial bg-label-secondary rounded"><i
                                    class="fas fa-trophy"></i></span>
                        </span>
                    </div>
                    <hr class="d-none d-sm-block d-lg-none me-4">
                </div>
                <div class="card col-sm-6 col-lg-5 mx-5 mt-4">
                    <div
                        class="d-flex justify-content-between align-items-start card-widget-1  pb-3 pb-sm-0 mt-3 mb-3">
                        <div class="ms-4">
                            <h6 class="mb-2">SALDO PENYELENGGARA</h6>
                            {{-- <h4 class="mb-2">Rp. {{ number_format($tournaments->nominal, 0, '.', ',') }}</h4> --}}
                            <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                        </div>
                        <span class="avatar p-2 me-lg-4 mt-4">
                            <span class="avatar-initial bg-label-secondary rounded"><i
                                    class="fa fa-dollar"></i></span>
                        </span>
                    </div>
                    <hr class="d-none d-sm-block d-lg-none">
                </div>
            </div>
        </div>
    </div>
<br><br>
    <h1>Daftar Turnamen</h1>

    <section class="swiper-3d">
        <div class="row">
            @forelse ($tournaments as $tournament)
                <div class="col-md-4 col-xxl-3 mb-3">
                    <div class="card h-100">
                        <div class="overflow-hidden position-relative w-100" style="height: 200px">
                            <img class="w-100 h-100 rounded-2 border-bottom"
                                src="{{ asset("storage/{$tournament->images}") }}" alt="game" style="object-fit: cover;" />

                            <div class="position-absolute align-items-end pb-3 end-0 bottom-0 flex-column d-flex gap-2">
                                @if ($tournament->status === 'accepted')
                                    <span class="badge text-bg-success me-4">Diterima</span>
                                @elseif ($tournament->status === 'pending')
                                    <span class="badge text-bg-warning me-4">Menunggu
                                        Konfirmasi</span>
                                @else
                                    <span class="badge text-bg-danger me-4">Ditolak</span>
                                @endif
                                @if ($tournament->aktif > now())
                                    <span class="badge text-bg-success me-4">Status : Aktif</span>
                                @elseif ($tournament->tidakaktif > now())
                                    <span class="badge text-bg-danger me-4">Status : Tidak Aktif</span>
                                @endif
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="pb-3 border-bottom mb-3 d-flex justify-content-between">
                                <h5 class="mb-0">Nama Turnamen</h5>
                                <span>{{ $tournament->name }}</span>
                            </div>
                            <div class="pb-3 border-bottom mb-3 d-flex justify-content-between">
                                <h5 class="mb-0">Prizepool</h5>
                                @php
                                    $prizeStrings = [];
                                @endphp

                                @foreach ($prizes as $prize)
                                    @if ($prize->tournament_id == $tournament->id)
                                        @php
                                            $prizeStrings[] = $prize->prizepool->prize;
                                        @endphp
                                    @endif
                                @endforeach

                                <span class="tcn-1 title-anim">{{ implode(', ', $prizeStrings) }}</span>
                            </div>
                            <div class="pb-2 d-flex justify-content-between">
                                <h5 class="mb-0">Slot Tim</h5>
                                <span>{{ $tournament->slotTeam }} tim</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 d-flex flex-column justify-content-center">
                    <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                        style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                    <h4 class="table-light" style="text-align: center;">
                        Data Turnamen Tidak Tersedia
                    </h4>
                </div>
            @endforelse
        </div>
    </section>
@endsection
