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

        .custom-btn {
            width: 100px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #7367f0;
            border: 2px solid #7367f0;
            /* Warna border */
            border-radius: 20px;
            /* Bentuk border */
            background-color: #ffffffe6;
            /* Warna latar belakang */
            transition: background-color 0.3s ease;
            /* Transisi warna latar belakang */
        }

        .custom-btn:hover {
            background-color: #6b5fe5;
            /* Warna latar belakang saat dihover */
            color: #ffffff;
            /* Warna teks saat dihover */
        }

        .custom-icon-detail {
            width: 40px;
            height: 40px;
            display: inline-block;
            border: 2px solid #7367f0;
            /* Border awal transparan */
            border-radius: 50%;
            /* Membuat border lingkaran */
            transition: border-color 0.3s ease;
            /* Transisi warna border saat hover */
        }

        .custom-icon-detail:hover {
            background-color: #6b5fe5;
            color: #ffffff;
            transform: translateY(-3px);
            /* Bergerak ke atas saat dihover */
        }


        .btn-half {
            width: 150px;
            /* Adjust the width as needed */
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffff;
            border: 2px solid #7367f0;
            border-radius: 5px;
            /* Rectangular shape */
            background-color: #7367f0;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn-half:hover {
            background-color: #6b5fe5;
            color: #ffffff;
        }
    </style>

    <style>
        .no-caret .dropdown-toggle::after {
            display: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="modal fade" tabindex="-1" id="filter" style="color: #fff;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tournament.filter') }}" method="GET">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="widget-title"><b>Category</b></h4>
                            <button type="submit" class="btn btn-primary"
                                style="background-color:rgb(40, 144, 204); border:none;">Filter</button>
                        </div>
                        @php
                            $selectedCategories = isset($selectedCategories) ? $selectedCategories : [];
                        @endphp
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="category{{ $category->id }}"
                                    name="categories_id[]" value="{{ $category->id }}"
                                    @if (in_array($category->id, (array) $selectedCategories)) checked @endif>
                                <label class="form-check-label" for="category{{ $category->id }}">
                                    {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- header-section start -->
    <div class="row mb-4 justify-content-between">
        <div class="col-md-4">
            <button class="saring-btn btn-square" data-toggle="tooltip" data-bs-toggle="modal"
                data-bs-target="#filter">Saring</button>
        </div>

        <div class="col-md-6">
            <div class="d-flex justify-content-end gap-2">
                <form action="{{ route('ptournament.index') }}" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;"
                            value="{{ old('search', request('search')) }}" />
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>

                <a type="button" class="btn-half position-relative d-inline-block py-2 px-6 rounded"
                    href="{{ route('ptournament.create') }}">Buat Turnamen</a>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($tournaments as $tournament)
            <div class="col-md-6 col-xxl-4 mb-4">
                <div class="card h-100">

                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center pb-4">
                            <h4 class="mb-0">{{ $tournament->name }}</h4>
                            <div class="dropdown no-caret">
                                <a href="#" class="dropdown-toggle btn btn-link"
                                    id="dropdownMenuButton-{{ $tournament->id }}" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="margin-left: auto;">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="dropdownMenuButton-{{ $tournament->id }}">
                                    <li>
                                        <a href="{{ route('ptournament.edittour', $tournament->id) }}"
                                            class="dropdown-item"><i class="ti ti-edit fs-2xl"></i> Edit
                                            Tournament</a>
                                    </li>
                                    <li>
                                        <form id="deleteForm{{ $tournament->id }}"
                                            action="{{ route('ptournament.destroy', $tournament->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="dropdown-item"
                                                onclick="confirmDelete('{{ $tournament->id }}')">
                                                <i class="ti ti-trash fs-2xl"></i> Delete Tournament
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <form id="statusForm" action="{{ route('updateStatus', $tournament->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select class="dropdown-item"
                                                onchange="updateStatus('{{ $tournament->id }}', this.value)">
                                                <option value="aktif"
                                                    {{ $tournament->aktif == 'aktif' ? 'selected' : '' }}>
                                                    Aktif</option>
                                                <option value="tidak aktif"
                                                    {{ $tournament->aktif == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif
                                                </option>
                                            </select>
                                        </form>
                                    </li>




                                </ul>
                            </div>
                        </div>

                        <div class="tournament-img mb-8 position-relative">
                            <div class="img-area overflow-hidden position-relative rounded"
                                style="width: auto; height: 400px; border-radius: .5rem;">
                                <img class="w-100" style="object-fit: cover; width: 100%; height: 100%;"
                                    src="{{ asset("storage/{$tournament->images}") }}" alt="tournament">

                                <div class="position-absolute align-items-end pb-3 end-0 bottom-0 flex-column d-flex gap-2">
                                    @if ($tournament->status === 'accepted')
                                        <span class="badge text-bg-success me-4">Diterima</span>
                                    @elseif ($tournament->status === 'pending')
                                        <span class="badge text-bg-warning me-4">Menunggu
                                            Konfirmasi</span>
                                    @else
                                        <span class="badge text-bg-danger me-4">Ditolak</span>
                                    @endif
                                    @if ($tournament->end_permainan > now())
                                        <span class="badge text-bg-success me-4">Sedang
                                            Berlangsung</span>
                                    @else
                                        <span class="badge text-bg-danger me-4">Sudah
                                            Berakhir</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="py-3">

                            <div class="tournament-info mb-4">
                                <span class="tcn-6 fs-sm">{{ $tournament->penyelenggara }}</span>
                            </div>

                            <div class="d-flex gap-2 border-bottom justify-content-between pb-3 mb-3">
                                <strong>Tanggal</strong>
                                <span>{{ \Carbon\Carbon::parse($tournament->permainan)->locale('id')->format('d F Y') }}</span>
                            </div>

                            <div class="d-flex gap-2 border-bottom justify-content-between pb-3 mb-3">
                                <strong>Nominal</strong>
                                <span>IDR {{ number_format($tournament->nominal, 0, '.', ',') }}</span>
                            </div>

                            <div class="d-flex gap-2 border-bottom justify-content-between pb-3 mb-3">
                                <strong>Jenis Turnamen</strong>
                                <span>{{ $tournament->paidment === 'Gratis' ? 'Gratis' : ($tournament->paidment === 'Berbayar' ? 'Berbayar' : '') }}</span>
                            </div>

                            @php
                                $transactionsCount = App\Models\Transaction::where('status', '!=', 'PAID')
                                    ->whereHas('teamTournament', function ($query) use ($tournament) {
                                        $query->where('tournament_id', $tournament->id);
                                    })
                                    ->count();

                                // Get the total number of teams from calculations
                                $totalTeams =
                                    ($teamCounts->firstWhere('tournament_id', $tournament->id)->count ?? 0) +
                                    ($teamIdCounts->firstWhere('tournament_id', $tournament->id)->count ?? 0) -
                                    $transactionsCount;

                                $userTeamsInTournament = ($teams ?? collect())->where('tournament_id', $tournament->id);
                                $isUserInTournament = $userTeamsInTournament->isNotEmpty();

                                if ($isUserInTournament) {
                                    // Get user team IDs in the tournament
                                    $userTeamIds = $userTeamsInTournament->pluck('id');

                                    // Check if there is a relation between user teams and team_tournaments
                                    $userTeamsWithRelation = TeamTournament::whereIn('team_id', $userTeamIds)
                                        ->where('tournament_id', $tournament->id)
                                        ->get();
                                }
                            @endphp

                            <div class="hr-line line3"></div>
                            <div class="card-more-info d-flex justify-content-between align-items-center mt-6">
                                <!-- Informasi Jumlah Teams -->
                                <div class="teams-info d-flex align-items-center gap-3">
                                    <div class="teams d-flex align-items-center gap-1">
                                        <i class="ti ti-users fs-base"></i>
                                        <span class="tcn-6 fs-sm">
                                            @if ($totalTeams)
                                                {{ $totalTeams }}/{{ $tournament->slotTeam }}
                                                Tim
                                            @else
                                                0/{{ $tournament->slotTeam }} Tim
                                            @endif
                                        </span>
                                    </div>
                                </div>

                                <a href="{{ route('tournament.detail', $tournament->id) }}" class="custom-icon-detail"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    style="display: flex; justify-content: center; align-items: center;"
                                    title="Detail Turnamen">
                                    <i class="ti ti-arrow-right fs-2xl"></i>
                                </a>
                            </div>

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
@endsection

@push('script')
    <script>
        function confirmDelete(tournamentId) {
            Swal.fire({
                title: "Apakah anda yakin untuk menghapus tournament ini?",
                text: "Setelah dihapus maka tournament tidak akan muncul dimanapun",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + tournamentId).submit();
                } else {
                    Swal.fire("Tournament masih tersimpan");
                }
            });
        }
    </script>

    <script>
        function updateStatus(tournamentId, aktif) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: `Anda akan mengubah status tournament ini menjadi ${aktif}.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/tournaments/${tournamentId}/update-status`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                aktif: aktif
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire('Updated!', `Status tournament telah diubah menjadi ${aktif}.`,
                                        'success')
                                    .then(() => {
                                        location.reload(); // Reload the page to reflect the changes
                                    });
                            } else {
                                Swal.fire('Error!', 'Gagal mengubah status tournament.', 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Error!', 'Gagal mengubah status tournament.', 'error');
                        });
                }
            });
        }
    </script>
@endpush
