@extends('penyelenggara.layouts.app')

@section('content')
    <div class="modal" tabindex="-1" id="filter" style="color: #000;">
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
    <!-- cursor effect-->
    <div class="cursor"></div>
    <!-- Header area  -->

    <!-- header-section start -->

    @if (auth()->check())
        <div class="user-account-popup p-4">
            <div class="account-items d-grid gap-1" data-tilt>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bttn account-item" type="submit">Kembali</button>
                </form>
            </div>
        </div>
    @endif

    <section class="tournament-section pb-120 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="tournament-wrapper alt">
            <div class="container">
                <div class="">
                    <div class="col">
                        <h2 class="display-four tcn-1 cursor-scale growUp title-anim" style="color:#ffffff">Tournaments</h2>
                    </div>
                </div>
                <div class="singletab tournaments-tab">
                    <div class="d-between gap-6 flex-wrap mb-lg-15 mb-sm-10 mb-6">
                        <ul class="tablinks d-flex flex-wrap align-items-center gap-3">
                            <li class="nav-links active">
                                <button class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill"
                                    data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#filter">Saring</button>
                            </li>
                        </ul>

                        <div class="px-6">
                            <a type="button" class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill"
                                href="{{ route('ptournament.create') }}" style="color :white">Buat Turnamen</a>
                        </div>
                    </div>
                    <div class="tabcontents">
                        <div class="tabitem active">
                            <div class="row justify-content-md-start justify-content-center g-6">
                                @forelse ($tournaments as $tournament)
                                    <div class="col-xl-4 col-md-6 col-sm-10 mb-4">
                                        <!-- Tambahkan kelas mb-4 untuk memberi jarak bawah antara card -->
                                        <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                            <div class="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor" class="bi bi-three-dots-vertical dropdown-toggle"
                                                    viewBox="0 0 16 16" id="dropdownMenuButton-{{ $tournament->id }}"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="margin-left:345px ;">
                                                    <path
                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                </svg>
                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton-{{ $tournament->id }}">
                                                    <li><a href="{{ route('ptournament.edittour', $tournament->id) }}"
                                                            class="dropdown-item"><i class="ti ti-edit fs-2xl"></i> Edit
                                                            Tournament</a></li>
                                                    <li>
                                                        <form id="deleteForm{{ $tournament->id }}" action="{{ route('ptournament.destroy', $tournament->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item" onclick="confirmDelete('{{ $tournament->id }}')">
                                                                <i class="ti ti-trash fs-2xl"></i> Delete Tournament
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div><br>
                                            <div class="tournament-img mb-8 position-relative">
                                                <div class="img-area overflow-hidden">
                                                    <img class="w-100" src="{{ asset('storage/' . $tournament->images) }}"
                                                        alt="tournament">
                                                </div>
                                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                                </span>
                                            </div>
                                            <div class="tournament-content px-xxl-4">
                                                <div class="tournament-info mb-5">
                                                    <a href="{{ route('tournament.detail', ['id' => $tournament->id]) }}"
                                                        class="d-block">
                                                        <h4
                                                            class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                            {{ $tournament->name }}
                                                        </h4>
                                                    </a>
                                                    <span class="tcn-6 fs-sm">{{ $tournament->penyelenggara }}</span>
                                                </div>
                                                <div class="hr-line line3"></div>
                                                <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                                    <div
                                                        class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img class="w-100" src="{{ asset('assets/img/tether.png') }}"
                                                                alt="tether">
                                                            <span
                                                                class="tcn-1 fs-sm">Rp.{{ number_format(floatval($tournament->nominal), 0, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                        <i class="ti ti-ticket fs-base tcp-2"></i>
                                                        <span class="tcn-1 fs-sm">{{ $tournament->paidment }}</span>
                                                    </div>
                                                    <div
                                                        class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                        <i class="ti ti-calendar fs-base tcn-1"></i>
                                                        <span
                                                            class="tcn-1 fs-sm">{{ $tournament->permainan ? \Carbon\Carbon::parse($tournament->permainan)->format('d F Y') : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="hr-line line3"></div>
                                                <div class="prize bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                                    <i class="ti ti-gift fs-base tcn-1"></i>
                                                    @foreach ($prizes as $prize)
                                                        @if ($prize->tournament_id == $tournament->id)
                                                            <p class="tcn-1 title-anim">{{ $prize->prizepool->prize }} ,
                                                                {{ $prize->note }}</p>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @php
                                                    $teamCount = $teamCounts->firstWhere(
                                                        'tournament_id',
                                                        $tournament->id,
                                                    );
                                                @endphp
                                                <div class="hr-line line3"></div>
                                                <div class="card-more-info d-between mt-6">
                                                    <div class="teams-info d-between gap-xl-5 gap-3">
                                                        <div class="teams d-flex align-items-center gap-1">
                                                            <i class="ti ti-users fs-base"></i>
                                                            <span class="tcn-6 fs-sm">
                                                                @if ($teamCount)
                                                                    {{ $teamCount->count }}/{{ $tournament->slotTeam }}
                                                                    Teams
                                                                @else
                                                                    0/{{ $tournament->slotTeam }} Teams
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('tournament.detail', ['id' => $tournament->id]) }}"
                                                        class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Tournament">
                                                        <i class="ti ti-arrow-right fs-2xl"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>No tournaments found</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('form[id^="deleteForm"]').forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault(); // Prevent the form from submitting immediately
                    const tournamentId = this.id.replace('deleteForm', '');
                    confirmDelete(tournamentId, this);
                });
            });
        });

        function confirmDelete(tournamentId, form) {
            swal({
                title: "apakah anda yakin untuk menghapus tournament ini?",
                text: "Setelah dihapus maka tournament tidak akan muncul dimanapun",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit(); // Submit the form if the user confirms
                } else {
                    swal("Tournament masih tersimpan");
                }
            });
        }
    </script>
@endsection
