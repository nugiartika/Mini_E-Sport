@extends('penyelenggara.layouts.app')

@section('content')
    <style>
        .darkened {
            filter: brightness(50%);
            /* Ubah nilai brightness sesuai kebutuhan (antara 0% - 100%) */
        }

        /* Gaya untuk tema gelap */
        .modal-content {
            margin-top: 170px;
            background-color: #343a40;
            /* Warna latar belakang gelap */
            color: #fff;
            /* Warna teks putih */
        }

        .modal-header {
            border-bottom: 1px solid #454d55;
            /* Garis bawah untuk header */
        }

        .modal-title {
            color: #fff;
            /* Warna judul putih */
        }

        .modal-body {
            padding: 20px;
            /* Padding untuk body modal */
        }

        .form-group label {
            color: #fff;
            /* Warna label input putih */
        }

        .form-control {
            background-color: #495057;
            /* Warna latar belakang input */
            color: #fff;
            /* Warna teks input putih */
        }

        .form-control:focus {
            background-color: #495057;
            /* Warna latar belakang input saat fokus */
            color: #fff;
            /* Warna teks input saat fokus */
        }

        .btnpn {
            margin-top: 20px
        }

        .close {
            color: #fff;
            /* Warna ikon close putih */
        }

        .close:hover {
            color: #fff;
            /* Warna ikon close putih saat dihover */
        }
    </style>

    <div class="tournament-details pb-10 pt-120 mt-lg-0 mt-sm-15 mt-10 overflow-hidden">
        <div class="container">
            <a href="{{ route('ptournament.index') }}">
                <i class="ti ti-arrow-left" style="color: rgb(0, 0, 0);"></i>
            </a>
            <div class="row">
                <div class="col-12">
                    <div class="parallax-banner-area parallax-container position-relative rounded-5 overflow-hidden">
                        <!-- Periksa apakah $selectedTournament adalah objek yang valid -->
                        @if ($selectedTournament)
                            <img class="w-100 h-100 parallax-img darkened"
                                src="{{ asset('storage/' . $selectedTournament->images) }}" alt="tournament banner">
                            <!-- running tournament content here -->
                            <div
                                class="running-tournament d-flex flex-lg-row flex-column position-absolute top-50 start-50 translate-middle w-100">
                                <div class="running-tournament-thumb w-100">
                                    <img class="w-100 h-100" src="{{ asset('storage/' . $selectedTournament->images) }}"
                                        alt="tournament thumb">
                                </div>
                                <div class="running-tour-info py-sm-6 py-4 px-xl-15 px-lg-10 px-sm-6 px-2 w-100">
                                    <h3 class="tcn-1 mb-lg-6 mb-4">
                                        {{ $selectedTournament->name }}</h3>
                                    <span class="tcn-1 d-block fs-five fw-semibold mb-4">Tournament
                                        ending in</span>
                                    <div class="d-flex align-items-center gap-md-6 gap-3">
                                        <a href="tournaments.html"
                                            class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-sm-6 px-4 rounded-pill">View
                                            More</a>
                                        <div class="d-flex align-items-center flex-wrap gap-md-6 gap-3 w-50">
                                            <div class="end-date">
                                                <span class="tcn-6">{{ $selectedTournament->end_permainan }}</span>
                                            </div>
                                            <div class="players">
                                                <i class="ti ti-users-group tcn-1"></i>
                                                <span class="tcn-6">{{ $selectedTournament->slotTeam }}
                                                    Team</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-danger" role="alert">
                                Tournament not found!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">DAFTAR JUARA $ MVP TOURNAMENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="regForm" action="{{ route('ptournament.juara', ['id' => $tournament->first()->id]) }}"
                        method="POST">
                        @csrf
                        <h5>Juara 1</h5>
                        <div class="form-group">
                            <label for="nama_juara1">Nama Tim</label>
                            <input type="text" id="nama_juara1" placeholder="Masukkan Nama Tim..." class="form-control"
                                name="nama_juara1" required>
                        </div>

                        <h5>Juara 2</h5>
                        <div class="form-group">
                            <label for="nama_juara2">Nama Tim</label>
                            <input type="text" id="nama_juara2" placeholder="Masukkan Nama Tim..." class="form-control"
                                name="nama_juara2" required>
                        </div>

                        <h5>Juara 3</h5>
                        <div class="form-group">
                            <label for="nama_juara3">Nama Tim</label>
                            <input type="text" id="nama_juara3" placeholder="Masukkan Nama Tim..." class="form-control"
                                name="nama_juara3" required>
                        </div>

                        <h5>MVP</h5>
                        <div class="form-group">
                            <label for="mvp">Nama Player</label>
                            <input type="text" id="mvp" placeholder="Masukkan Nama Player..." class="form-control"
                                name="mvp" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="BracketModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukkan URL
                        Bracket
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="bracketLinkInput" placeholder="Masukkan URL Bracket">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveLinkBtn"
                        data-bs-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <section class="tournament-prize-section mb-10">
        <div class="container bgn-4 p-lg-10 p-sm-6 p-4">
            <div class="d-flex align-items-center gap-xxl-20 gap-6 flex-wrap">
                <div class="tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-coin-bitcoin display-five fw-normal tcp-2"></i>
                    </div>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Prize Pool</h4>
                    @foreach ($prizes as $prize)
                        @if ($prize->tournament_id == $tournament->id)
                            <p class="tcn-1 title-anim">{{ $prize->prizepool->prize }} {{ $prize->note }}</p>
                        @endif
                    @endforeach
                </div>
                <div class="tour-prize-card">
                    <div class="icon-area mb-6">
                        <i class="ti ti-wallet display-five fw-normal tcp-2"></i>
                    </div>
                    <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Entry Fee</h4>
                    <p class="tcn-1 title-anim">{{ $selectedTournament->paidment }}
                        {{ $selectedTournament->nominal }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tournament-more-details pb-120">
        <div class="container">
            <div class="singletab tournaments-tab">
                <ul class="tablinks d-flex flex-wrap align-items-center gap-3 pb-10">
                    <li class="nav-links active">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Brackets</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Players</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Winners</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Rules</button>
                    </li>
                </ul>

                <div class="tabcontents">
                    <div class="tabitem active">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#cobaModal" id="btn">
                            <i class="ti ti-plus"></i>
                            Tambah Jadwal
                        </button>

                        <div class="row g-6 mb-10 ">
                            <!-- Brackets-->
                            @foreach ($jadwal as $tournament)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                        <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                            <h4 class="tcn-1">Penyisihan</h4>
                                            <span
                                                class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">{{ $tournament->boPenyisihan }}</span>
                                        </div>
                                        <span
                                            class="tcn-1 d-block mb-3">{{ $tournament->tanggalPenyisihan }},{{ $tournament->waktuPenyisihan }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                        <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                            <h4 class="tcn-1">Semi Final</h4>
                                            <span
                                                class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">{{ $tournament->boSemi }}</span>
                                        </div>
                                        <span class="tcn-1 d-block mb-3">{{ $tournament->tanggalSemi }},
                                            {{ $tournament->waktuSemi }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bracket-card p-lg-8 p-sm-6 p-4 bgn-4 rounded">
                                        <div class="bracket-card-header d-flex align-items-center gap-2 mb-2">
                                            <h4 class="tcn-1">Final</h4>
                                            <span
                                                class="bracket-badge fs-xs tcn-1 rounded-pill py-1 px-2">{{ $tournament->boFinal }}</span>
                                        </div>
                                        <span class="tcn-1 d-block mb-3">{{ $tournament->tanggalFinal }},
                                            {{ $tournament->waktuFinal }}</span>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <h4>Link Pembuatan Bracket</h4>
                                    <a href="https://challonge.com/id/tournament/bracket_generator"
                                        class="form-control d-block"
                                        style="width: 100%;">https://challonge.com/id/tournament/bracket_generator</a>
                                    <!-- Button untuk memasukkan URL langsung -->
                                    <button type="button" class="btn btn-primary mt-3" id="showModalBtn"
                                        data-bs-toggle="modal" data-bs-target="#BracketModal">
                                        Masukkan Link Bracket Pertandingan Disini
                                    </button>
                                    <div class="mt-3">
                                        <h5>Link Bracket:</h5>
                                        <!-- Tautan yang akan diperbarui secara dinamis -->
                                        <a id="dynamicLink" href="#" target="_blank"></a>
                                    </div>
                                    <!-- Modal -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6 gy-md-10">
                            <!-- branch 01 -->
                            <div class="col-lg-4 col-md-6">
                                <h4 class="tcn-1 mb-6">Branch 01</h4>
                                <ul class="team-branch-list d-grid gap-3">
                                    @foreach ($teams as $team)
                                        <li class="team-branch-item d-between p-3 rounded bgn-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="team-branch-thumb">
                                                    <img class="w-100 rounded-circle" src="{{ $team->image }}"
                                                        alt="branch-thumb">
                                                </div>
                                                <span class="tcn-1">{{ $team->name }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        @if ($juara->isEmpty())
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambah Juara
                            </button>
                        @else
                            <p>Data juara sudah terisi. Anda tidak dapat menambahkan data juara lagi.</p>
                        @endif
                        <div class="row align-items-center justify-content-center pt-lg-20 pt-sm-10">
                            <div class="col-lg-4 col-sm-6">
                                <div class="d-grid justify-content-center align-items-center gap-10">
                                    @if ($juara->isEmpty())
                                        <div class="img-area mx-auto winner-img">
                                            <img class="w-100" src="{{ asset('assets/img/winner-prize.png') }}"
                                                alt="prize">
                                        </div>
                                        <div class="content-area">
                                            <span class="tcn-6 text-center d-block">Silahkan tambah pemenang setelah
                                                turnamen selesai</span>
                                        </div>
                                    @else
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Juara 1</th>
                                                    <th scope="col">Juara 2</th>
                                                    <th scope="col">Juara 3</th>
                                                    <th scope="col">MVP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($juara as $j)
                                                    <tr>
                                                        <td>{{ $j->nama_juara1 }}</td>
                                                        <td>{{ $j->nama_juara2 }}</td>
                                                        <td>{{ $j->nama_juara3 }}</td>
                                                        <td>{{ $j->mvp }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="accordion-section rule-accordion d-grid gap-6">
                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            DESKRIPSI
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <p class="tcn-6">
                                                {!! $tournament->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            RULES
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <p class="tcn-6">
                                                {{ $tournament->rule }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-single p-sm-5 p-3 bgn-4 rounded">
                                    <h5 class="acc-header-area">
                                        <button class="accordion-btn rule-acc-btn fs-four position-relative ps-8"
                                            type="button">
                                            CONTACT PERSON
                                        </button>
                                    </h5>
                                    <div class="acc-content-area">
                                        <div class="content-body mt-lg-6 mt-4">
                                            <p class="tcn-6">
                                                {{ $tournament->contact }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="cobaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="regForm" action="{{ route('ptournament.jadwal', ['id' => $tournament->first()->id]) }}"
                        method="POST"> @csrf
                        <div class="row mb-3">
                            <h5>Penyisihan</h5><br>
                            <div class="col-md-6">
                                Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..."
                                    class="form-control @error('tanggalPenyisihan') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="tanggalPenyisihan">
                                @error('tanggalPenyisihan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                Waktu Mulai<input type="time" placeholder="Waktu Mulai..."
                                    class="form-control @error('waktuPenyisihan') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="waktuPenyisihan">

                                @error('waktuPenyisihan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                Best Of<input type="text" placeholder="Best Of..."
                                    class="form-control @error('boPenyisihan') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="boPenyisihan">

                                @error('boPenyisihan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <h5>Semi Final</h5><br>
                            <div class="col-md-6">
                                Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..."
                                    class="form-control @error('tanggalSemi') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="tanggalSemi">

                                @error('tanggalSemi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                Waktu Mulai<input type="time" placeholder="Waktu Mulai..."
                                    class="form-control @error('waktuSemi') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="waktuSemi">

                                @error('waktuSemi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                Best Of<input type="text" placeholder="Best Of..."
                                    class="form-control @error('boSemi') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="boSemi">

                                @error('boSemi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <h5>Final</h5><br>
                            <div class="col-md-6">
                                Tanggal Mulai Game<input type="date" placeholder="Tanggal Mulai Game..."
                                    class="form-control @error('tanggalFinal') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="tanggalFinal">

                                @error('tanggalFinal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                Waktu Mulai<input type="time" placeholder="Waktu Mulai..."
                                    class="form-control @error('waktuFinal') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="waktuFinal">

                                @error('waktuFinal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                Best Of<input type="text" placeholder="Best Of..."
                                    class="form-control @error('boFinal') is-invalid @enderror"
                                    oninput="this.className = 'form-control'" name="boFinal">

                                @error('boFinal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button name="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var currentTab = 0; // Saat ini tab yang ditampilkan
        showTab(currentTab); // Tampilkan tab saat ini

        function showTab(n) {
            // Ambil semua tab dan sembunyikan mereka
            var tabs = document.getElementsByClassName("tab");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
            }

            // Tampilkan tab yang sesuai
            tabs[n].style.display = "block";

            // Perbarui tombol Next/Previous sesuai dengan tab yang ditampilkan
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (tabs.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }

            // Perbarui langkah indikator
            fixStepIndicator(n);
        }

        function nextPrev(n) {
            var tabs = document.getElementsByClassName("tab");
            // Cek validasi form sebelum pindah ke tab berikutnya
            if (n == 1 && !validateForm()) {
                // Tambahkan pesan kesalahan atau tindakan lain jika validasi gagal
                alert("Harap isi semua bidang sebelum melanjutkan.");
                return false;
            }

            // Sembunyikan tab saat ini dan tampilkan yang berikutnya
            tabs[currentTab].style.display = "none";
            currentTab = currentTab + n;

            // Jika sudah mencapai akhir form, submit form
            if (currentTab >= tabs.length) {
                // Menghubungkan formulir ke route ptournament.jadwal saat formulir disubmit
                document.getElementById("regForm").submit(); // Submit formulir
                return false;
            }

            // Tampilkan tab yang sesuai
            showTab(currentTab);
        }


        function validateForm() {
            // Cek validasi form pada setiap tab di sini (jika diperlukan)
            return true; // Kembalikan true jika form valid
        }

        function fixStepIndicator(n) {
            // Ambil semua langkah indikator dan tandai langkah saat ini sebagai selesai
            var steps = document.getElementsByClassName("step");
            for (var i = 0; i < steps.length; i++) {
                if (i <= n) {
                    steps[i].className = steps[i].className.replace(" active", "");
                }
            }
            steps[n].className += " active"; // Tandai langkah saat ini sebagai aktif
        }
    </script>
@endsection
