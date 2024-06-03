@extends('layouts.panel')

@section('style')
    <style>
        .saring-btn {
            width: 100px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            border: 2px solid #7367f0;
            /* Warna border */
            border-radius: 20px;
            /* Bentuk border */
            background-color: #7367f0;
            /* Warna latar belakang */
            transition: background-color 0.3s ease;
            /* Transisi warna latar belakang */
        }

        .radio-button {
            display: block;
            margin-top: 10px;
        }

        .radio-button input[type="radio"] {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">Daftar Tournament</h5>
        {{-- <div class="card-header">
            <div class="row justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-6 flex-wrap" style="margin-left: 30px;">
                    <button class="saring-btn" data-toggle="tooltip" data-bs-toggle="modal"
                        data-bs-target="#filter">Saring</button>
                        <div class="col-md-3 ms-auto">
                            <form action="{{ route('DetailTournament') }}" method="get">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;"
                                        value="{{ old('search', request('search')) }}" />
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div> --}}

        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <button class="saring-btn" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#filter">Saring</button>
                <form action="{{ route('DetailTournament') }}" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Cari tournament&hellip;"
                            value="{{ old('search', request('search')) }}" />
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Game</th>
                        <th>Penyelenggara</th>
                        <th>Status</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($tournaments as $tournament)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> <span class="fw-medium">{{ $tournament->name }}</span></td>
                            <td>{{ $tournament->category->name }}</td>

                            <td>{{ $tournament->user->name }}</td>
                            <td><span class="badge bg-label-primary me-1">
                                    @if ($tournament->status === 'rejected')
                                        <span>Tolak</span>
                                    @elseif ($tournament->status === 'pending')
                                        <span>Tertunda</span>
                                    @elseif ($tournament->status === 'accepted')
                                        <span>Aktif</span>
                                    @else
                                        <span>Status turnamen tidak valid.</span>
                                    @endif
                                </span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32">
                                        <g fill="currentColor">
                                            <path
                                                d="M5 13a8 8 0 1 0 16 0a8 8 0 0 0-16 0m12.348-4.268c.552.957.419 2.068-.299 2.482c-.717.414-1.747-.025-2.299-.982c-.552-.957-.418-2.068.299-2.482c.718-.414 1.747.025 2.3.982" />
                                            <path
                                                d="M2 13c0 6.075 4.925 11 11 11c2.295 0 4.426-.703 6.19-1.905a3.747 3.747 0 0 0 1.005 3.483l3.182 3.182a3.75 3.75 0 0 0 5.303-5.303l-3.182-3.182a3.747 3.747 0 0 0-3.454-1.012A10.95 10.95 0 0 0 24 13c0-6.075-4.925-11-11-11S2 6.925 2 13m20 0a9 9 0 1 1-18 0a9 9 0 0 1 18 0" />
                                        </g>
                                    </svg>
                                </button>
                            </td>
                            <td>
                                <form id="delete-form-{{ $tournament->id }}"
                                    action="{{ route('deleteTournament', ['idTournament' => $tournament->id]) }}"
                                    method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="action" value="reject">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        onclick="confirmDeletion({{ $tournament->id }});">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24">
                                            <path fill="#FA7070"
                                                d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="d-flex flex-column justify-content-center">
                                    <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                        style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                                    <h4 class="table-light" style="text-align: center;">
                                        Data Tidak Tersedia
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $tournaments->links() }}
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="filter">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>Filter</b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tournamentfilter') }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="widget-title">Category</h5>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:#7367f0; border:none; color: #ffffff;">Saring</button>
                        </div>
                        @php
                            $selectedCategories = isset($selectedCategories) ? $selectedCategories : [];
                        @endphp
                        @foreach ($category as $categories)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="category{{ $categories->id }}"
                                    name="categories_id[]" value="{{ $categories->id }}"
                                    @if (in_array($categories->id, (array) $selectedCategories)) checked @endif>
                                <label class="form-check-label" for="category{{ $categories->id }}">
                                    {{ $categories->name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>


    @foreach ($tournaments as $tournament)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Tournamnent</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col text-center">
                                        <img src="{{ asset('storage/' . $tournament->images) }}" alt="Tournament Image"
                                            class="rounded-circle" style="width: 150px; height: 150px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-weight: bold;">Nama : <span
                                                    id="detail-name" style="font-weight: normal;">
                                                    {{ $tournament->name }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Game : <span
                                                    id="detail-email" style="font-weight: normal;">
                                                    {{ $tournament->category->name }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">
                                                Nama Penyelenggara : <span id="detail-place_birth"
                                                    style="font-weight: normal;">{{ $tournament->user->name }}</span>

                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Kontak Penyelenggara :
                                                <span id="detail-national_identity_number"
                                                    style="font-weight: normal;">{{ $tournament->contact }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Slot Tim :
                                                <span id="detail-national_identity_number"
                                                    style="font-weight: normal;">{{ $tournament->slotTeam }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Hadiah :
                                                <span id="detail-student_identity_number" style="font-weight: normal;">
                                                    @foreach ($prizes as $prize)
                                                        @if ($prize->tournament_id == $tournament->id)
                                                            <p class="tcn-1 title-anim">{{ $prize->prizepool->prize }}
                                                            </p>
                                                            <label style="font-weight: bold;">Keterangan:</label>
                                                            <p class="tcn-1 title-anim">
                                                                {{ $prize->note }}</p>
                                                        @endif
                                                    @endforeach
                                                </span>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-weight: bold;">Pendafataran Dibuka :
                                                <span id="detail-gender" style="font-weight: normal;">
                                                    {{ $tournament->pendaftaran->locale('id')->translatedFormat('d F Y') }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Pendaftaran Ditutup :
                                                <span id="detail-national_student_id" style="font-weight: normal;">
                                                    {{ $tournament->end_pendaftaran->locale('id')->translatedFormat('d F Y') }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Tournament Dimulai :
                                                <span id="detail-student_identity_number" style="font-weight: normal;">
                                                    {{ $tournament->permainan->locale('id')->translatedFormat('d F Y') }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Tournament Berakhir :
                                                <span id="detail-student_identity_number" style="font-weight: normal;">
                                                    {{ $tournament->end_permainan->locale('id')->translatedFormat('d F Y') }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Tipe Turnamen :
                                                <span id="detail-national_identity_number"
                                                    style="font-weight: normal;">{{ $tournament->paidment }}</span>
                                            </li>
                                            @if ($tournament->paidment === 'Berbayar')
                                                <li class="list-group-item" style="font-weight: bold;">HTM :
                                                    <span id="detail-national_identity_number"
                                                        style="font-weight: normal;">IDR {{ number_format($tournament->nominal, 0, '.', ',') }}
                                                    </span>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="row mx-2">
                                        <div class="col">
                                            {{-- <div class="list-group"> --}}
                                            <li class="list-group-item" style="font-weight: bold;">Description: <br><span
                                                    style="font-weight: normal;"
                                                    id="detail-family_card_id">{!! $tournament->description !!}</span></li>
                                            <li class="list-group-item" style="font-weight: bold;">Rule: <br><span
                                                    style="font-weight: normal;"
                                                    id="detail-number_siblings">{{ $tournament->rule }}</span></li>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                    {{-- <li class="list-group-item" style="font-weight: bold;">Description :
                                        <span id="detail-family_card_id"
                                            style="font-weight: normal;">{!! $tournament->description !!}</span>
                                    </li>
                                    <li class="list-group-item" style="font-weight: bold;">Rule :
                                        <span id="detail-number_siblings"
                                            style="font-weight: normal;">{{ $tournament->rule }}</span>
                                    </li> --}}
                                </div>
                            </div>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('script')
    <script>
        $('#category-selector').on('change', function() {
            $(this).closest('#category-selector-form').submit();
        });
    </script>


    <script>
        function confirmDeletion(tournamentId) {
            Swal.fire({
                title: "Apa kamu yakin?",
                text: " Untuk menghapus tournament!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + tournamentId).submit();
                }
            });
        }
    </script>
@endpush
