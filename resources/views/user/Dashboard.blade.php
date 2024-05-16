@extends('user.layouts.app')

@section('content')
    {{-- start row             --}}
    <div class="row">


        <div class="card mb-4">

            <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                    <div class="row gy-4 gy-sm-1">
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">Jumlah Game</h6>
                                    <h4 class="mb-2">{{ $categorys }}</h4>
                                    <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                                </div>
                                <span class="avatar me-sm-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-device-gamepad">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M2 6m0 2a2 2 0 0 1 2 -2h16a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-16a2 2 0 0 1 -2 -2z" />
                                            <path d="M6 12h4m-2 -2v4" />
                                            <path d="M15 11l0 .01" />
                                            <path d="M18 13l0 .01" />
                                        </svg></span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none me-4">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">Tournament Tersedia</h6>
                                    <h4 class="mb-2">{{ $tournaments }}</h4>
                                    <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                                </div>
                                <span class="avatar p-2 me-lg-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-pennant">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 21l4 0" />
                                            <path d="M10 21l0 -18" />
                                            <path d="M10 4l9 4l-9 4" />
                                        </svg></span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                <div>
                                    <h6 class="mb-2">Tournament Gratis</h6>
                                    <h4 class="mb-2">{{ $tournamentFree }}</h4>
                                    <p class="mb-0 text-muted">Humma Esport</p>
                                </div>
                                <span class="avatar p-2 me-sm-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti-md ti ti-gift text-body"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="mb-2">Tournament Berbayar</h6>
                                    <h4 class="mb-2">{{ $tournamentPaid }}</h4>
                                    <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                                </div>
                                <span class="avatar p-2">
                                    <span class="avatar-initial bg-label-secondary rounded"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-coin">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path
                                                d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                                            <path d="M12 7v10" />
                                        </svg></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @forelse ($tournament as $index => $tour)
        @if ($index < 3)
        <div class="col-12 col-xl-4 col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="bg-label-primary rounded-3 text-center mb-3 pt-4">
                        <img class="img-fluid" src="{{ asset('storage/'. $tour->images) }}"
                            alt="Card girl image" />
                    </div>
                    <h4 class="mb-2 pb-1">{{ $tour->name }}</h4>
                    <p class="small">{{ $tour->rule }}</p>
                    <div class="row mb-3 g-3">
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="avatar flex-shrink-0 me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="ti ti-calendar-event ti-md"></i></span>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">{{ $tour->permainan }}</h6>
                                    <small>Tanggal</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="avatar flex-shrink-0 me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-currency-dollar"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg></span>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-nowrap">
                                        @if ($tour->paidment === "unpaid")
                                            Gratis
                                        @elseif ($tour->paidment === "paid")
                                            Berbayar
                                        @else
                                            Status pembayaran tidak valid
                                        @endif
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
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
    {{-- end row --}}
@endsection
