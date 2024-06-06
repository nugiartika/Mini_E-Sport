@extends('layouts.panel')

@section('content')
    <div class="col-12">
        <div class="d-flex justify-content-between gap-3">
            <h3 class="mb-0">Notifikasi</h3>

            @if($counttournaments > 0)
            <a href="{{ route('Updatenotification') }}" class="btn btn-primary ms-auto gap-2 d-flex align-items-center">
                <i class="fa fa-check mx-2"></i>
                Tandai semua sudah dibaca
            </a>
            @endif
        </div>

        @forelse ($tournaments as $tournament)
            <div class="mt-3">
                <div
                    class="card @if ($tournament->notif == 'belum baca') shadow-sm bg-light @endif gap-3 flex-row align-items-start p-3">
                    <div class="row w-100 align-items-center">
                        <a href="{{ url("/detailTournament/{$tournament->id}") }}" id="tournament-title"
                            class="d-flex col-md-4 gap-3">
                            <div class="d-flex justify-content-center ratio-1x1 ratio"
                                style="height: 5rem; width: 5rem; overflow: hidden;">
                                <img src="{{ asset('storage/' . $tournament->images) }}" class="img-fluid rounded"
                                    style="object-fit: cover;">
                            </div>

                            <div class="d-flex flex-column gap-2">
                                <h5 class="mb-0 card-title">{{ $tournament->name }}</h5>
                                <div class="text-muted">{{ $tournament->permainan->translatedFormat('d F Y') }}</div>
                            </div>
                        </a>

                        <div id="status" class="d-flex flex-column gap-2 align-items-start col-md-2">
                            <strong>Status Turnamen</strong>
                            <p class="badge mb-0 {{ $tournament->status == 'accepted' ? 'bg-success' : 'bg-danger' }}">
                                {{ $tournament->status == 'accepted' ? 'Diterima' : 'Ditolak' }}</p>
                        </div>
                        <div id="status" class="d-flex flex-column gap-2 align-items-start col-md-3">
                            <strong>Catatan</strong>
                            <div class="mb-0">
                                {{ $tournament->status == 'accepted' ? 'Turnamen anda sudah kami setujui' : Str::limit($tournament->reason, 100) }}

                                @if(strlen($tournament->reason) >= 100)
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-reason-{{ $tournament->id }}"><i class="ti ti-eye"></i></a>

                                    <div class="modal fade" id="modal-reason-{{ $tournament->id }}" tabindex="-1"
                                        aria-labelledby="modal-reason-{{ $tournament->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="modal-reason-{{ $tournament->id }}">Alasannya?
                                                    </h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ $tournament->reason }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2 my-auto ms-auto d-flex flex-column align-items-md-end gap-2">
                            <p class="ms-auto mb-0 text-muted">{{ $tournament->created_at->diffForHumans() }}</p>
                            @if ($tournament->notif == 'belum baca')
                                <a href="{{ route('Updatenotification', ['id' => $tournament->id]) }}"
                                    class="btn btn-primary btn-sm ms-auto"><i class="fa fa-check mx-2"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex flex-column align-items-center mt-5">
                <img src="{{ asset('assets/img/No-data.png') }}" alt="No data" class="img-fluid" style="max-width: 20%;">
                <h1 class="table-light text-center mt-3">
                    Data Tidak Tersedia
                </h1>
            </div>
        @endforelse

        @if ($tournaments->hasPages())
            <div class="mt-3">
                {{ $tournaments->links() }}
            </div>
        @endif
    </div>
@endsection
