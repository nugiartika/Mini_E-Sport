@extends('layouts.panel')

@section('content')
    <h1>Daftar Turnamen</h1>

    <section class="swiper-3d">
        <div class="row">
            @forelse ($tournaments as $tournament)
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card h-100">
                        <div class="overflow-hidden w-100" style="height: 200px">
                            <img class="w-100 h-100" src="{{ asset("storage/{$tournament->images}") }}" alt="game"
                                style="object-fit: cover;" />
                        </div>
                            <div>
                                @if ($tournament->status === 'accepted')
                                    <span class="badge text-bg-success position-absolute me-4" style="right: 0;">Diterima</span>
                                @elseif ($tournament->status === 'pending')
                                    <span class="badge text-bg-warning position-absolute me-4" style="right: 0;">Menunggu Konfirmasi Admin</span>
                                @else
                                    <span class="badge text-bg-danger position-absolute me-4" style="right: 0;">Ditolak</span>
                                @endif
                            </div>
                            <div class="mt-4 mb-3">
                                @if ($tournament->end_permainan > now())
                                    <span class="badge text-bg-success position-absolute me-4" style="right: 0;">Sedang Berlangsung</span>
                                @else
                                    <span class="badge text-bg-danger position-absolute me-4" style="right: 0;">Sudah Berakhir</span>
                                @endif
                            </div>

                        <div class="card-body">

                            <div class="pb-3 border-bottom mb-3 d-flex justify-content-between">
                                <h5 class="mb-0">Nama Game</h5>
                                <span>{{ $tournament->name }}</span>
                            </div>
                            <div class="pb-2 d-flex justify-content-between">
                                <h5 class="mb-0">Anggota per Tim</h5>
                                <span>{{ $tournament->membersPerTeam }} orang / tim</span>
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
