@extends('layouts.panel')

@section('content')
    {{-- start row    --}}
    <div class="row">
        <div class="col-lg-12">
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
                                        <span class="avatar-initial bg-label-secondary rounded"><i
                                                class="fas fa-gamepad"></i></span>
                                    </span>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none me-4">
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h6 class="mb-2">Tournament Tersedia</h6>
                                        @php
                                            // Ambil koleksi turnamen dari model atau dari sumber data
                                            $acceptedCount = App\Models\Tournament::where(
                                                'status',
                                                'accepted',
                                            )->count();
                                        @endphp
                                        <h4 class="mb-2">{{ $acceptedCount }}</h4>
                                        <p class="mb-0"><span class="text-muted me-2">Humma Esport</span></p>
                                    </div>
                                    <span class="avatar p-2 me-lg-4">
                                        <span class="avatar-initial bg-label-secondary rounded"><i
                                                class="fa fa-check-circle"></i></span>
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
                                            </svg></i></span>
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
        </div>

        @forelse ($tournament->where('status', 'accepted') as $index => $tour)
            <div class="col-12 col-xxl-4 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid rounded-3 overflow-hidden mb-3" src="{{ asset('storage/' . $tour->images) }}" alt="Card image" />
                        </div>

                        <div class="d-flex pb-3 justify-content-between align-items-center">
                            <div>
                                <h4 class="pb-1 mb-0">{{ $tour->name }}</h4>
                                <p class="small mb-0">{{ $tour->category->name }}</p>
                            </div>

                            @if ($tour->aktif === 'aktif')
                                <span class="badge text-bg-success">Aktif</span>
                            @elseif ($tour->aktif === 'tidak aktif')
                                <span class="badge text-bg-danger">Tidak aktif</span>
                            @endif
                        </div>

                        <div class="row w-100 gy-3">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-2">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="fas fa-calendar-alt ti-md"></i></span>
                                    </div>
                                    <div>
                                        <small>Tanggal Pendaftaran</small>
                                        <h6 class="mb-0 text-nowrap">
                                            {{ \Carbon\Carbon::parse($tour->permainan)->format('d F Y') }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-2">
                                        <span class="avatar-initial rounded bg-label-primary"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-currency-dollar">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                <path d="M12 3v3m0 12v3" />
                                            </svg></span>
                                    </div>
                                    <div>
                                        <small>Jenis Event</small>
                                        <h6 class="mb-0 text-nowrap">
                                            @if ($tour->paidment === 'Gratis')
                                                Gratis
                                            @elseif ($tour->paidment === 'Berbayar')
                                                Berbayar
                                            @else
                                                Status pembayaran tidak valid
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-2">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="fa fa-gift "></i></span>
                                    </div>
                                    <div>
                                        <small>Prizepool</small>
                                        <h6 class="mb-0 text-nowrap">
                                            @php
                                                $prizesArray = $prizes
                                                    ->filter(function ($prize) use ($tour) {
                                                        return $prize->tournament_id == $tour->id;
                                                    })
                                                    ->map(function ($prize) {
                                                        return $prize->prizepool->prize;
                                                    })
                                                    ->toArray();
                                            @endphp

                                            @if (!empty($prizesArray))
                                                <span class="tcn-1 title-anim">{{ implode(', ', $prizesArray) }}</span>
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    {{-- end row --}}
@endsection
