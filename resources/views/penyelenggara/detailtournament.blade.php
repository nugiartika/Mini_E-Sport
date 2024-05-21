@extends('layouts.panel')

@section('content')
    <div class="d-flex pb-4">
        <a href="{{ url('ptournament') }}" class="btn btn-primary d-flex gap-2 align-items-center"><i
                class="ti ti-arrow-left"></i><span>Kembali Ke Daftar Turnamen</span></a>
    </div>

    <div class="row">
        <div class="col-md-3">
            <img class="w-100 rounded-4" src="{{ asset('storage/' . $selectedTournament->images) }}"
                alt="{{ $selectedTournament->name }}" />
        </div>
        <div class="col-md-9">
            <h1 class="title-anim">{{ $selectedTournament->name }}</h1>
            <p class="text-anim">{!! $selectedTournament->description !!}</p>

            <div class="row pt-4">
                <div class="col-md-6 border-end p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-user"></i>
                        <span>{{ $selectedTournament->user->name }}</span>
                    </div>
                </div>
                <div class="col-md-6 p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-calendar"></i>
                        <span>{{ $selectedTournament->created_at->locale('id')->format('d M Y') }}</span>
                    </div>
                </div>
                <div class="col-md-6 border-end p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-device-gamepad-2"></i>
                        <span>{{ $selectedTournament->category->name }}</span>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-users-group"></i>
                        <span>{{ $selectedTournament->slotTeam }} tim</span>
                    </div>
                </div>
            </div>

            @if (auth()->user()->role === 'user')
                <a href="{{ $selectedTournament->link }}" class="btn btn-primary btn-lg btn-block text-anim">Gabung
                    Turnamen</a>
            @endif
        </div>
    </div>

    <div class="row py-4">
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-location display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Jenis Turnamen</h4>
                <p class="mb-0">{{ $selectedTournament->paidment }}</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-wallet display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">HTM</h4>
                <p class="mb-0">Rp {{ number_format($selectedTournament->nominal, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-calendar display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Permainan</h4>
                <p class="mb-0">{{ $selectedTournament->permainan->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</p>
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
                <p class="mb-0">{{ $selectedTournament->slotTeam }} tim</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-device-gamepad-2 display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Kategori Game</h4>
                <p class="mb-0">{{ $selectedTournament->category->name }}</p>
            </div>
        </div>
    </div>


    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="bracket-tab" data-bs-toggle="tab" data-bs-target="#bracket" type="button"
                role="tab" aria-controls="bracket" aria-selected="true">Bracket</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="juara-tab" data-bs-toggle="tab" data-bs-target="#juara" type="button"
                role="tab" aria-controls="juara" aria-selected="false">Juara</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="detail-info-tab" data-bs-toggle="tab" data-bs-target="#detail-info" type="button"
                role="tab" aria-controls="detail-info" aria-selected="false">Detail dan
                Informasi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="jadwal-tab" data-bs-toggle="tab" data-bs-target="#jadwal" type="button"
                role="tab" aria-controls="jadwal" aria-selected="false">Jadwal</button>
        </li>
    </ul>

    <!-- Tab content -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="bracket" role="tabpanel" aria-labelledby="bracket-tab">
            <div class="d-flex mb-4 justify-content-between">
                <h3 class="mb-0">Bracket</h3>

                @if (auth()->user()->role === 'organizer')
                    <a href="#" data-bs-toggle="modal" data-bs-target="#updateBracket"
                        class="btn btn-primary">Ubah Tautan Bracket</a>

                    <!-- Modal -->
                    <div class="modal fade" id="updateBracket" tabindex="-1" aria-labelledby="updateBracketLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateBracketLabel">Ubah Tautan Bracket</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="updateBracketForm">
                                        @csrf
                                        @method('PATCH')

                                        <input type="hidden" name="id" value="{{ $selectedTournament->id }}" />
                                        <input type="hidden" name="column" value="urlBracket" />

                                        <div class="mb-3">
                                            <label for="bracketUrl" class="form-label">URL Bracket</label>
                                            <input type="url" class="form-control" id="bracketUrl"
                                                placeholder="Masukkan URL Bracket">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary"
                                        onclick="document.getElementById('updateBracketForm').submit();">Ubah
                                        Status</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

            @if ($selectedTournament->urlBracket)
                <iframe src="{{ $selectedTournament->urlBracket }}" class="w-100" height="750"
                    frameborder="0"></iframe>
            @else
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/No-data.png') }}" class="w-100" alt="Image Not Found" />
                            <h3>Maaf, Belum Disediakan.</h3>
                            <p class="mb-3 text-center">Bracket belum disediakan oleh penyelenggara.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="tab-pane fade" id="juara" role="tabpanel" aria-labelledby="juara-tab">
            <h3>Juara</h3>
            <p>Konten untuk tab Juara.</p>
        </div>
        <div class="tab-pane fade" id="jadwal" role="tabpanel" aria-labelledby="jadwal-tab">
            <h3>Jadwal</h3>
            <p>Konten untuk tab Jadwal.</p>
        </div>
        <div class="tab-pane fade" id="detail-info" role="tabpanel" aria-labelledby="detail-info-tab">
            <h3>Detail dan Informasi</h3>
            <p>Konten untuk tab Detail dan Informasi.</p>
        </div>
    </div>
@endsection
