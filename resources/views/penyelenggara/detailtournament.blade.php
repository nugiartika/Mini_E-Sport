@extends('layouts.panel')

@section('content')
    @php
        use App\Models\TeamTournament;
    @endphp
    <div class="d-flex pb-4">
        <a href="{{ url(auth()->user()->role === 'organizer' ? 'ptournament' : 'tournamentUser') }}"
            class="btn btn-primary d-flex gap-2 align-items-center"><i class="ti ti-arrow-left"></i><span>Kembali Ke Daftar
                Turnamen</span></a>
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



        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center">
                    <div class="d-flex justify-content-center align-items-center mb-4" style="height: 100px;">
                        <div class="d-flex text-center">
                            <h6 style="color: white;">Create a New Team for the Tournament or Choose an
                                Existing Team</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" type="button" class="btn btn-secondary me-2">Existing Team</a>
                        <a href="#" type="button" class="btn btn-primary">Tim Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row py-4 gy-4">
        <div class="col-md-3">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-location display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Jenis Turnamen</h4>
                <p class="mb-0">{{ $selectedTournament->paidment }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-wallet display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">HTM</h4>
                <p class="mb-0">Rp {{ number_format($selectedTournament->nominal, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-gift display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Prizepool</h4>
                @php
                    $prizeStrings = [];
                @endphp

                @foreach ($prizes as $prize)
                    @if ($prize->tournament_id == $selectedTournament->id)
                        @php
                            $prizeStrings[] = $prize->prizepool->prize;
                        @endphp
                    @endif
                @endforeach

                {!! implode(', ', $prizeStrings) !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-calendar display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Pendaftaran</h4>
                <p class="mb-0">{{ $selectedTournament->pendaftaran->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-calendar-x display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1"> Permainan</h4>
                <p class="mb-0">{{ $selectedTournament->permainan->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body rounded-4 text-center">
                <div class="icon-area mb-6">
                    <i class="h1 ti ti-users-group display-five fw-normal tcp-2"></i>
                </div>
                <h4 class="mb-1">Slot Tim</h4>
                <p class="mb-0">{{ $selectedTournament->slotTeam }} tim</p>
            </div>
        </div>
        <div class="col-md-3">
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
            <button class="nav-link" id="detail-info-tab" data-bs-toggle="tab" data-bs-target="#detail-info"
                type="button" role="tab" aria-controls="detail-info" aria-selected="false">Detail dan
                Informasi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="jadwal-tab" data-bs-toggle="tab" data-bs-target="#jadwal" type="button"
                role="tab" aria-controls="jadwal" aria-selected="false">Jadwal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="list-tim-tab" data-bs-toggle="tab" data-bs-target="#list-tim" type="button"
                role="tab" aria-controls="list-tim" aria-selected="false">Tim</button>
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
                                    <form id="updateBracketForm"
                                        action="{{ route('add.bracket', $selectedTournament->id) }}" "
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')

                                                        <input type="hidden" name="id" value="{{ $selectedTournament->id }}" />
                                                        <input type="hidden" name="column" value="urlBracket" />

                                                        <div class="mb-3">
                                                            <label for="bracketUrl" class="form-label">URL Bracket</label>
                                                            <input type="url" class="form-control" id="bracketUrl" name="urlBracket"
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
                                                <img src="{{ asset('assets/img/No-data.png') }}" class="w-100"
                                                    alt="Image Not Found" />
                                                <h3>Maaf, Belum Disediakan.</h3>
                                                <p class="mb-3 text-center">Bracket belum disediakan oleh penyelenggara.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="juara" role="tabpanel" aria-labelledby="juara-tab">

                                <h3>Juara</h3>
                                <!-- Button trigger modal -->

                                @if (count($juaras) < 1)
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleJuara">
                                        Tambah Juara
                                    </button>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleJuara" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('ptournament.juara', ['id' => $tournaments->id]) }}"
                                                method="POST">
                                                <!-- Tambahkan method POST -->
                                                @csrf <!-- Tambahkan ini jika menggunakan Laravel untuk keamanan CSRF -->
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Juara</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="tournament_id"
                                                        value="{{ request('tournament_id') }}">
                                                    <label for="nama_juara1" class="form-label">Juara 1</label>
                                                    <input type="text"
                                                        class="form-control @error('nama_juara1') is-invalid @enderror"
                                                        id="nama_juara1" name="nama_juara1" >
                                                    @error('nama_juara1')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <!-- Tambahkan atribut  -->
                                                    <label for="nama_juara2" class="form-label">Juara 2</label>
                                                    <input type="text"
                                                        class="form-control @error('nama_juara2') is-invalid @enderror""
                                                        id="nama_juara2" name="nama_juara2" >
                                                    @error('nama_juara2')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <!-- Tambahkan atribut  -->
                                                    <label for="nama_juara3" class="form-label">Juara 3</label>
                                                    <input type="text"
                                                        class="form-control @error('nama_juara3') is-invalid @enderror"
                                                        id="nama_juara3" name="nama_juara3" >
                                                    @error('nama_juara3')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <!-- Tambahkan atribut  -->
                                                    <label for="mvp" class="form-label">MVP</label>
                                                    <input type="text"
                                                        class="form-control @error('mvp') is-invalid @enderror"
                                                        id="mvp" name="mvp" >
                                                    @error('mvp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <!-- Tambahkan atribut  -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <!-- Ubah type dari button menjadi submit -->
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                @forelse ($juaras as $juara)
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Juara 1</th>
                                                <th scope="col">Juara 2</th>
                                                <th scope="col">Juara 3</th>
                                                <th scope="col">MVP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>{{ $juara->nama_juara1 }}</td>
                                                <td>{{ $juara->nama_juara2 }}</td>
                                                <td>{{ $juara->nama_juara3 }}</td>
                                                <td>{{ $juara->mvp }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @empty
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/No-data.png') }}" class="w-100"
                                                    alt="Image Not Found" />
                                                <h3>Maaf, Belum Disediakan.</h3>
                                                <p class="mb-3 text-center">Bracket belum disediakan oleh penyelenggara.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                            <div class="tab-pane fade" id="jadwal" role="tabpanel" aria-labelledby="jadwal-tab">
                                <h3>Jadwal</h3>
                                @if (count($jadwals) < 1)
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Tambah Jadwal
                                    </button>
                                @endif

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Tambahkan class modal-lg untuk modal yang lebih besar jika diperlukan -->
                                        <div class="modal-content">
                                            <!-- Form -->
                                            <form action="{{ route('ptournament.jadwal', $tournaments->id) }}"
                                                method="POST">
                                                <!-- Tambahkan method POST -->
                                                @csrf <!-- Tambahkan ini jika menggunakan Laravel untuk keamanan CSRF -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Penyisihan -->
                                                    <h5>Penyisihan</h5>
                                                    <div class="mb-3">
                                                        <label for="tanggalPenyisihan" class="form-label">Tanggal
                                                            Penyisihan</label>
                                                        <input type="date"
                                                            class="form-control @error('tanggalPenyisihan') is-invalid @enderror"
                                                            id="tanggalPenyisihan" name="tanggalPenyisihan"
                                                            min="{{ now()->toDateString() }}" >
                                                        @error('tanggalPenyisihan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="waktuPenyisihan" class="form-label">Waktu
                                                            Penyisihan</label>
                                                        <input type="time"
                                                            class="form-control @error('waktuPenyisihan') is-invalid @enderror"
                                                            id="waktuPenyisihan" name="waktuPenyisihan" >
                                                        @error('waktuPenyisihan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="boPenyisihan" class="form-label">Best Of</label>
                                                        <input type="text"
                                                            class="form-control @error('boPenyisihan') is-invalid @enderror"
                                                            id="boPenyisihan" name="boPenyisihan" >
                                                        @error('boPenyisihan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <!-- Semi Final -->
                                                    <h5>Semi Final</h5>
                                                    <div class="mb-3">
                                                        <label for="tanggalSemi" class="form-label">Tanggal Semi</label>
                                                        <input type="date"
                                                            class="form-control @error('tanggalSemi') is-invalid @enderror "
                                                            id="tanggalSemi" name="tanggalSemi"
                                                            min="{{ now()->toDateString() }}" >
                                                        @error('tanggalSemi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="waktuSemi" class="form-label">Waktu Semi</label>
                                                        <input type="time"
                                                            class="form-control @error('waktuSemi') is-invalid @enderror"
                                                            id="waktuSemi" name="waktuSemi" >
                                                        @error('waktuSemi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="boSemi" class="form-label">Best Of</label>
                                                        <input type="text"
                                                            class="form-control @error('boSemi') is-invalid @enderror"
                                                            id="boSemi" name="boSemi" >
                                                        @error('boSemi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <!-- Final -->
                                                    <h5>Final</h5>
                                                    <div class="mb-3">
                                                        <label for="tanggalFinal" class="form-label">Tanggal Final</label>
                                                        <input type="date"
                                                            class="form-control @error('tanggalFinal') is-invalid @enderror"
                                                            id="tanggalFinal" name="tanggalFinal"
                                                            min="{{ now()->toDateString() }}" >
                                                        @error('tanggalFinal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="waktuFinal" class="form-label">Waktu Final</label>
                                                        <input type="time"
                                                            class="form-control @error('waktuFinal') is-invalid @enderror"
                                                            id="waktuFinal" name="waktuFinal" >
                                                        @error('waktuFinal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="boFinal" class="form-label">Best Of</label>
                                                        <input type="text"
                                                            class="form-control @error('boFinal') is-invalid @enderror"
                                                            id="boFinal" name="boFinal" >
                                                        @error('boFinal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <!-- Ubah type dari button menjadi submit -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @forelse ($jadwals as  $jadwal)
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('ptournament.jadwal', $jadwal->id) }}"
                                                    method="POST">
                                                    <!-- Tambahkan method POST -->
                                                    @csrf
                                                    <!-- Tambahkan ini jika menggunakan Laravel untuk keamanan CSRF -->
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jadwal
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Penyisihan</h5>
                                                        <label for="tanggalPenyisihan" class="form-label">Tanggal
                                                            Penyisihan</label>
                                                        <input type="date"
                                                            class="form-control @error('tanggalPenyisihan') is-invalid @enderror"
                                                            id="tanggalPenyisihan" name="tanggalPenyisihan" >
                                                        @error('tanggalPenyisihan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <!-- Tambahkan atribut  -->
                                                        <label for="waktuPenyisihan" class="form-label">Waktu
                                                            Penyisihan</label>
                                                        <input type="time"
                                                            class="form-control @error('waktuPenyisihan') is-invalid @enderror"
                                                            id="waktuPenyisihan" name="waktuPenyisihan" >
                                                        @error('waktuPenyisihan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <!-- Tambahkan atribut  -->
                                                        <label for="boPenyisihan" class="form-label">Best Of</label>
                                                        <input type="text"
                                                            class="form-control @error('boPenyisihan') is-invalid @enderror"
                                                            id="boPenyisihan" name="boPenyisihan" >
                                                        <!-- Tambahkan atribut  -->
                                                        @error('boPenyisihan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <h5>Semi Final</h5>
                                                        <label for="tanggalSemi" class="form-label">Tanggal Semi</label>
                                                        <input type="date"
                                                            class="form-control @error('tanggalSemi') is-invalid @enderror"
                                                            id="tanggalSemi" name="tanggalSemi" >
                                                        <!-- Tambahkan atribut  -->
                                                        @error('tanggalSemi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="waktuSemi" class="form-label">Waktu Semi</label>
                                                        <input type="time"
                                                            class="form-control @error('waktuSemi') is-invalid @enderror"
                                                            id="waktuSemi" name="waktuSemi" >
                                                        <!-- Tambahkan atribut  -->
                                                        @error('waktuSemi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="boSemi" class="form-label">Best Of</label>
                                                        <input type="text"
                                                            class="form-control @error('boSemi') is-invalid @enderror"
                                                            id="boSemi" name="boSemi" >
                                                        <!-- Tambahkan atribut  -->
                                                        @error('boSemi')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                        <h5>Final</h5>
                                                        <label for="tanggalFinal" class="form-label">Tanggal Final</label>
                                                        <input type="date"
                                                            class="form-control @error('tanggalFinal') is-invalid @enderror"
                                                            id="tanggalFinal" name="tanggalFinal" >
                                                        <!-- Tambahkan atribut  -->
                                                        @error('tanggalFinal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="waktuFinal" class="form-label">Waktu Final</label>
                                                        <input type="time"
                                                            class="form-control @error('waktuFinal') is-invalid @enderror"
                                                            id="waktuFinal" name="waktuFinal" >
                                                        <!-- Tambahkan atribut  -->
                                                        @error('waktuFinal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="boFinal" class="form-label">Best Of</label>
                                                        <input type="text"
                                                            class="form-control @error('boFinal') is-invalid @enderror"
                                                            id="boFinal" name="boFinal" >
                                                        <!-- Tambahkan atribut  -->
                                                        @error('boFinal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <!-- Ubah type dari button menjadi submit -->
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Penyisihan</th>
                                                <th scope="col">Semi Final</th>
                                                <th scope="col">Final</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($jadwals as $jadwal)
                                                    <td>Tanggal Dimulai :
                                                        {{ \Carbon\Carbon::parse($jadwal->tanggalPenyisihan)->locale('id')->format('d F Y') }}<br>
                                                        Waktu Dimulai : {{ $jadwal->waktuPenyisihan }} <br>
                                                        Best Of : {{ $jadwal->boPenyisihan }} <br>
                                                    </td>
                                                    <td>Tanggal Dimulai :
                                                        {{ \Carbon\Carbon::parse($jadwal->tanggalSemi)->locale('id')->format('d F Y') }}<br>
                                                        Waktu Dimulai : {{ $jadwal->waktuSemi }} <br>
                                                        Best Of : {{ $jadwal->boSemi }} <br>
                                                    </td>
                                                    <td>Tanggal Dimulai
                                                        :{{ \Carbon\Carbon::parse($jadwal->tanggalFinal)->locale('id')->format('d F Y') }}
                                                        <br>
                                                        Waktu Dimulai : {{ $jadwal->waktuFinal }} <br>
                                                        Best Of : {{ $jadwal->boFinal }} <br>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                @empty
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/No-data.png') }}" class="w-100"
                                                    alt="Image Not Found" />
                                                <h3>Maaf, Belum Disediakan.</h3>
                                                <p class="mb-3 text-center">Bracket belum disediakan oleh penyelenggara.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                            <div class="tab-pane fade" id="detail-info" role="tabpanel"
                                aria-labelledby="detail-info-tab">
                                <div>
                                    <h3>Detail dan Informasi</h3>
                                    <div class="mb-3 pb-3 border-bottom">
                                        <h6 class="mb-1">Deskripsi</h6>
                                        <small class="mb-0">{!! $tournaments->description !!}</small>
                                    </div>
                                    <div class="mb-3 pb-3 border-bottom">
                                        <h6 class="mb-1">Peraturan</h6>
                                        <small class="mb-0">{{ $tournaments->rule }}</small>
                                    </div>
                                    <div class="border-bottom">
                                        <h6 class="mb-1">Kontak Personal</h6>
                                        <small class="mb-0">{{ $tournaments->contact }}</small>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-tim" role="tabpanel" aria-labelledby="list-tim-tab">
                                <div>
                                    <h3>List Tim</h3>
                                    <div class="row">
                                        @foreach ($teams as $team)
                                            <div class="col-md-3 mb-4">
                                                <div class="card h-100">
                                                    <div
                                                        class="card-body d-flex justify-content-between align-items-center">
                                                        <div class="team-profile">
                                                            <img src="{{ asset('storage/' . $team->profile) }}"
                                                                alt="Profile Image" class="img-fluid rounded-circle"
                                                                style="width: 50px; height: 50px;">
                                                        </div>
                                                        <div class="team-info">
                                                            <h6 class="card-title mb-0">{{ $team->name }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @foreach ($teamtournament as $teamturnamen)
                                            <div class="col-md-3 mb-4">
                                                <div class="card h-100">
                                                    <div
                                                        class="card-body d-flex justify-content-between align-items-center">
                                                        <div class="team-profile">
                                                            <img src="{{ asset('storage/' . $teamturnamen->team->profile) }}"
                                                                alt="Profile Image" class="img-fluid rounded-circle"
                                                                style="width: 50px; height: 50px;">
                                                        </div>
                                                        <div class="team-info">
                                                            <h6 class="card-title mb-0">{{ $teamturnamen->team->name }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if ($teams->isEmpty() && $teamtournament->isEmpty())
                                            <div class="row justify-content-center">
                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                        <img src="{{ asset('assets/img/No-data.png') }}" width="70%"
                                                            alt="Image Not Found" />
                                                        <h5 class="mb-3 text-center">Belum ada Tim yang bergabung.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endsection
