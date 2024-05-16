@extends('penyelenggara.layouts.app')

@section('content')
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
                        {{-- @dd(true); --}}
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
                                <div
                                    class="running-tour-info py-sm-6 py-4 px-xl-15 px-lg-10 px-sm-6 px-2 w-100 text-center">
                                    <h3 class="tcn-1 mb-lg-6 mb-4">
                                        {{ $selectedTournament->name }}</h3>
                                    <span class="tcn-1 d-block fs-five fw-semibold mb-4">Nama Game :
                                        {{ $selectedTournament->category->name }}</span>
                                    <span class="tcn-1 d-block fs-five fw-semibold mb-4">Pembuat Event :
                                        {{ $selectedTournament->user->name }}</span>
                                    <div class="d-flex align-items-center gap-md-6 gap-3 ">
                                        <div class="d-flex align-items-center flex-wrap gap-md-6 gap-3 w-50 ">
                                            <div class="end-date text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                                    <path d="M16 3v4" />
                                                    <path d="M8 3v4" />
                                                    <path d="M4 11h16" />
                                                    <path d="M8 14v4" />
                                                    <path d="M12 14v4" />
                                                    <path d="M16 14v4" />
                                                </svg>
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

    <section class="tournament-prize-section mb-10">
        <div class="row">
            <div class="container bgn-4 p-lg-10 p-sm-6 p-4">
                <div class="d-flex align-items-center gap-xxl-20 gap-6 flex-wrap">
                    <div class="tour-prize-card col-md text-center">
                        <div class="icon-area mb-6">
                            <i class="ti ti-coin-bitcoin display-five fw-normal tcp-2"></i>
                        </div>
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-1">Hadiah</h4>
                        @foreach ($prizes as $prize)
                            @if ($prize->tournament_id == $tournament->id)
                                <p class="tcn-1 title-anim">{{ $prize->prizepool->prize }} {{ $prize->note }}</p>
                            @endif
                        @endforeach
                    </div>
                    <div class="tour-prize-card col-md text-center">
                        <div class="icon-area mb-6">
                            <i class="ti ti-wallet display-five fw-normal tcp-2"></i>
                        </div>
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-1"></h4>
                        <p class="tcn-1 title-anim">Rp
                            {{ $selectedTournament->nominal }} </p>
                    </div>
                    <div class="tour-prize-card col-md text-center">
                        <div class="icon-area mb-6">
                            <i class="ti ti-calendar display-five fw-normal tcp-2"></i>
                        </div>
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-1"></h4>
                        <p class="tcn-1 title-anim ">{{ $selectedTournament->permainan }}</p>
                    </div>
                    <div class="tour-prize-card col-md text-center">
                        <div class="icon-area mb-6">
                            <i class="ti ti-calendar-x display-five fw-normal tcp-2"></i>
                        </div>
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-1"></h4>
                        <p class="tcn-1 title-anim ">{{ $selectedTournament->end_permainan }}</p>
                    </div>
                    <div class="tour-prize-card col-md text-center">
                        <div class="icon-area mb-6">
                            <i class="ti ti-users-group display-five fw-normal tcp-2"></i>
                        </div>
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-1"></h4>
                        <p class="tcn-1 title-anim ">{{ $selectedTournament->slotTeam }}</p>
                    </div>
                    <div class="tour-prize-card col-md text-center">
                        <div class="icon-area mb-6">
                            <i class="ti ti-device-gamepad-2 display-five fw-normal tcp-2"></i>
                        </div>
                        <h4 class="tcn-1 cursor-scale growDown title-anim mb-1"></h4>
                        <p class="tcn-1 title-anim ">{{ $selectedTournament->category->name }}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="tournament-more-details pb-120">
        <div class="container">
            <div class="singletab tournaments-tab">
                <ul class="tablinks d-flex flex-wrap align-items-center gap-3 pb-10">
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Players</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Rules</button>
                    </li>
                </ul>

                <div class="tabcontents">

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

@endsection
