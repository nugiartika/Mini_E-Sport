@extends('layouts.panel')

@section('content')
    <div class="d-flex pb-4">
        <a href="{{ route('user.tournament') }}" class="btn btn-primary d-flex gap-2 align-items-center"><i
                class="ti ti-arrow-left"></i><span>Kembali Ke Daftar Turnamen</span></a>
    </div>

    <div class="row">
        <div class="col-md-3">
            <img class="w-100 rounded-4" src="{{ asset('storage/' . $teams->profile) }}"
                alt=" {{ $teams->name }}" />
        </div>
        <div class="col-md-9">
            <h1 class="title-anim"> Nama Tim : {{ $teams->name }}</h1>
            <p class="text-anim">{!! $teams->description !!}</p>

            <div class="row pt-4">
                <div class="col-md-6 border-end p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-user"></i>
                        <span>{{ $teams->user->name }}</span>
                    </div>
                </div>
                <div class="col-md-6 p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-calendar"></i>
                        <span>
                            {{ Carbon\Carbon::parse($teams->created_at)->translatedFormat('d F Y') }}</span>
                    </div>
                </div>
                <div class="col-md-6 border-end p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-device-gamepad-2"></i>
                        <span>{{ $teams->name }}</span>
                    </div>
                </div>

                <div class="col-md-6 p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-users-group"></i>
                        <span>{{ $teamsCount }} tim</span>
                    </div>
                </div>


            </div>

        </div>
    </div>

    {{-- <div class="row py-4">
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-location display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Jenis Turnamen</h4>
                <p class="mb-0">{{ $teams->paidment === 'paid' ? 'Berbayar' : 'Gratis' }}</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-wallet display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">HTM</h4>
                <p class="mb-0">Rp {{ number_format($teams->nominal, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-calendar display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Permainan</h4>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-calendar-x display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Pendaftaran</h4>
                <p class="mb-0">{{ $selectedTournament->end_permainan->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                </p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-users-group display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Slot Tim</h4>
                <p class="mb-0">{{ $teams->slotTeam }} tim</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-device-gamepad-2 display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Kategori Game</h4>
                <p class="mb-0">{{ $teams->category->name }}</p>
            </div>
        </div>
    </div> --}}

@endsection
