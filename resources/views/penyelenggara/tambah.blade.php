<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/humma-01.png') }}" type="image/x-icon">
    <title>Tournament - HummaEsport</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>


</head>
<style>
    h1 {
        text-align: center;
        color: white;
    }

    label {
        color: white;
    }

    /* Gaya untuk form */
    #regForm {
        background-color: rgb(0, 0, 0);
        margin: 90px auto;

    }

    /* Gaya untuk input fields */
    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }

    .card {
        margin-top: 200px;
        margin-bottom: 100px;
        background-color: rgb(25, 27, 31);
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }


    label {
        display: block;
        margin-bottom: 5px;
    }

    input,
    select,
    {
    margin-bottom: 15px;
    background: none;
    padding: .6em .8em .5em .8em;
    border: 0;
    border-bottom: 1px solid #fff;
    border-radius: 0;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    line-height: 1.3;
    }

    input,
    i {
        width: 150px;
    }

    .main {
        width: 480px;
        margin: 0 auto;
    }


    .input,
    .label {
        padding: 0 20px;
        width: 200px;
    }


    .input {
        height: 55px;
    }

    .input:nth-of-type(3) {
        padding-right: 0;
        width: 220px;
    }

    .input span {
        padding-left: 5px;
    }

    .count {
        padding: .9em 0 0;
        width: 20px;
    }

    .submit {
        margin: 20px auto;
        display: block;
        width: 100px;
        border: 0;
        background-color: #fff;
        color: #222;
        line-height: 45px;
        padding: 0;
        cursor: pointer;
    }

    .select-css {
        background-image: url('https://www.adamlobo.co.uk/apps/otacon/arrow.svg');
        background-repeat: no-repeat;
        background-position: right .7em top 50%;
        background-size: .65em auto;
        width: 190px;
        display: block;
        max-width: 100%;
        box-sizing: border-box;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        cursor: pointer;
    }

    .select-css::-ms-expand {
        display: none;
    }

    .select-css:focus {
        outline: none;
    }

    .select-css option {
        color: #222;
    }
</style>


<body>
    <header class="header-section w-100 bgn-4">
        <div class="py-sm-6 py-3 mx-xxl-20 mx-md-15 mx-3">
            <div class="d-flex align-items-center justify-content-between gap-xxl-10 gap-lg-8 w-100">
                <nav
                    class="navbar-custom d-flex gap-lg-6 align-items-center flex-column flex-lg-row justify-content-start justify-content-lg-between w-100">
                    <div class="top-bar w-100 d-flex align-items-center gap-6">
                        <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <a class="navbar-brand d-flex align-items-center gap-4" href="index.html">
                            <img class="" src="{{ asset('assets/img/humma-01.png') }}" height="60px"
                                width="75px" alt="favicon">
                        </a>
                    </div>
                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        <ul class="custom-nav gap-3 gap-lg-7 cursor-scale growDown2 ms-xxl-10" data-lenis-prevent>
                            <li class="menu-link">
                                <a href="{{ route('dashboardPenyelenggara') }}">HOME </a>
                            </li>

                            <li class="menu-link">
                                <a href="{{ route('ptournament.index') }}">TOURNAMENT</a>
                            </li>
                            <li class="menu-link">
                                <a href="{{ route('games') }}">GAME</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                    @if (auth()->check())
                        <div class="header-profile pointer">
                            <div class="profile-wrapper d-flex align-items-center gap-3">
                                <div class="img-area overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        viewBox="0 0 36 36">
                                        <path fill="currentColor"
                                            d="M30.61 24.52a17.16 17.16 0 0 0-25.22 0a1.51 1.51 0 0 0-.39 1v6A1.5 1.5 0 0 0 6.5 33h23a1.5 1.5 0 0 0 1.5-1.5v-6a1.51 1.51 0 0 0-.39-.98"
                                            class="clr-i-solid clr-i-solid-path-1" />
                                        <circle cx="18" cy="10" r="7" fill="currentColor"
                                            class="clr-i-solid clr-i-solid-path-2" />
                                        <path fill="none" d="M0 0h36v36H0z" />
                                    </svg>
                                </div>
                                <span class="user-name d-none d-xxl-block text-nowrap">{{ auth()->user()->name }}</span>
                                <i class="ti ti-chevron-down d-none d-xxl-block"></i>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                </div>
            </div>
        </div>
    </header>
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
    <form action="{{ route('ptournament.store') }}" method="POST" enctype="multipart/form-data" id="regForm">
        @csrf
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <h1>Tambah Turnamen</h1>
                        <div class="tab">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Turnamen</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Mis: Mobile Legends" id="name" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="pendaftaran" class="form-label">Tanggal Pendaftaran</label>
                                    <input type="date"
                                        class="form-control @error('pendaftaran') is-invalid @enderror" id="pendaftaran"
                                        name="pendaftaran" value="{{ old('pendaftaran') }}">
                                    @error('pendaftaran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="end_pendaftaran" class="form-label">Akhir Pendaftaran</label>
                                    <input type="date"
                                        class="form-control @error('end_pendaftaran') is-invalid @enderror"
                                        id="end_pendaftaran" name="end_pendaftaran"
                                        value="{{ old('end_pendaftaran') }}">
                                    @error('end_pendaftaran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="permainan" class="form-label">Mulai Kompetisi</label>
                                    <input type="date"
                                        class="form-control @error('permainan') is-invalid @enderror" id="permainan"
                                        name="permainan" value="{{ old('permainan') }}">
                                    @error('permainan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="end_permainan" class="form-label">Tanggal Berakhir</label>
                                    <input type="date"
                                        class="form-control @error('end_permainan') is-invalid @enderror"
                                        id="end_permainan" name="end_permainan" value="{{ old('end_permainan') }}">
                                    @error('end_permainan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="slotTeam" class="form-label">Jumlah Tim</label>
                                <input type="number" class="form-control @error('slotTeam') is-invalid @enderror"
                                    id="slotTeam" name="slotTeam" value="{{ old('slotTeam') }}">
                                @error('slotTeam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="tab">

                            <div class="mb-3">
                                <label for="prizepol" class="form-label">Hadiah Turnamen</label>
                                <form id="prizepol-form">
                                    <!-- Tambahkan id "prizepol-form" pada form -->
                                    <div id="inputs">
                                        <div class="form-prize">
                                            <div class="input-group">
                                                <select
                                                    class="form-control prize-dropdown @error('prize') is-invalid @enderror"
                                                    name="prize[]" value="{{ old('prize') }}">
                                                    <option value="">Pilih Salah Satu</option>
                                                    <option value="uang">Uang</option>
                                                    <option value="mendali">Medali</option>
                                                    <option value="trophy">Trophy</option>
                                                    <option value="sertifikat">Sertifikat</option>
                                                </select>

                                                <button type="button" class="addRow rounded-end btn btn-info"><i
                                                        class="ti ti-plus fs-2xl"></i></button>

                                                <button type="button" class="removeRow d-none btn btn-danger"><i
                                                        class="ti ti-trash fs-2xl"></i></button>
                                            </div>
                                            <div class="w-100 mt-3 moneyForm" style="display: none;">
                                                <!-- Ubah id menjadi class untuk "moneyForm" -->
                                                <input class="form-control" type="number"
                                                    placeholder="inputkan jumlah uang" name="jumlah[]" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="mb-3">
                                <label for="contact" class="form-label">Kontak Penanggungjawab</label>
                                <input type="number" class="form-control @error('contact') is-invalid @enderror"
                                    id="contact" name="contact" value="{{ old('contact') }}">
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">GAME</label>
                                <select class="form-select @error('categories_id') is-invalid @enderror"
                                    id="category" name="categories_id" aria-label="Default select example">
                                    <option value="" selected>Pilih Game</option>
                                    @foreach ($category as $kat)
                                        <option value="{{ $kat->id }}"
                                            {{ old('categories_id') == $kat->id ? 'selected' : '' }}>
                                            {{ $kat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('categories_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="images" class="form-label">Unggah Poster</label>
                                <input type="file" class="form-control @error('images') is-invalid @enderror"
                                    id="images" name="images" onchange="previewImage(event)">
                                @if (old('images'))
                                    <img id="preview" src="{{ asset('storage/' . old('images')) }}"
                                        alt="Old images" style="max-width: 100px; max-height: 100px;">
                                @endif
                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="tab">
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea name="description" placeholder="Jelaskan deskripsi turnamennya" id="summernoteModalDescription"
                                    class="form-control" aria-label="With textarea">{{ old('description') }}</textarea>

                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="rule" class="form-label">Aturan Main</label>
                                <textarea name="rule" id="summernoteModalRule" placeholder="Jelaskan aturan main dalam turnamen"
                                    class="form-control" aria-label="With textarea">{{ old('rule') }}</textarea>

                                @error('rule')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="paidment" class="form-label">Event Berbayar atau Gratis?</label>
                                @error('paidment')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <select name="paidment" id="paidment" class="form-select" onchange="toggleDiv1()">
                                    <option value="" selected disabled>Pilih </option>
                                    <option value="paid" {{ old('paidment') == 'paid' ? 'selected' : '' }}>Berbayar
                                    </option>
                                    <option value="unpaid" {{ old('paidment') == 'unpaid' ? 'selected' : '' }}>Tidak
                                        Berbayar</option>
                                </select>
                            </div>
                            <div class="mb-3" id="nominal" style="display: none;">
                                <label for="nominal_input" class="form-label">Masukkan Nominal</label>
                                @error('nominal')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="number" name="nominal" id="nominal_input" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-between">
                            <button type="button" class="btn btn-secondary"
                                onclick="window.location.href='/ptournament'">Batal</button>

                            <div class="d-flex align-items-center gap-2">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)"
                                    class="btn btn-danger">Kembali</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)"
                                    class="btn btn-success">Lanjut</button>
                            </div>
                        </div>
                        <div>

                        </div>
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <footer class="footer bgn-4 bt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <div class="footer-logo mb-8">
                            <a href="#" class="d-grid gap-6">
                                <div class="flogo-1">
                                    <img class="w-100" src="assets/img/LOGO WEB.png" alt="favicon">
                                </div>
                                <div class="flogo-2">
                                    {{-- <img class="w-100" src="{{ asset('assets/img/logo.png') }}" alt="logo"> --}}
                                    <h3>HUMMAESPORT</h3>
                                </div>
                            </a>
                        </div>
                        <div class="social-links">
                            <ul class="d-flex align-items-center gap-3 flex-wrap">
                                <li>
                                    <a href="#"><i class="ti ti-brand-facebook fs-2xl"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti ti-brand-twitter fs-2xl"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti ti-brand-youtube fs-2xl"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti ti-brand-linkedin fs-2xl"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti ti-brand-instagram fs-2xl"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 br br-res py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <h4 class="footer-title mb-8 title-anim">QUICK LINKS</h4>
                        <ul class="footer-list d-grid gap-4">
                            <li><a href="tournament" class="footer-link d-flex align-items-center tcn-6">
                                    <i class="ti ti-chevron-right"></i> TOURNAMENTS</a></li>
                            <li><a href="game" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> GAMES </a></li>
                            <li><a href="team" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> TEAMS</a></li>
                            <li><a href="faq" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <h4 class="footer-title mb-8 title-anim">EXPLORE</h4>
                        <ul class="footer-list d-grid gap-4">
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> TOP PLAYERS</a></li>
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> MESSAGES</a></li>
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> PROFILE</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-lg-20 pt-sm-15 pt-10 footer-card-area">
                    <div class="py-lg-10">
                        <h4 class="footer-title mb-8 title-anim">FOLLOW US</h4>
                        <ul class="footer-list d-grid gap-4">
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> FACEBOOK</a></li>
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> INSTAGRAM</a></li>
                            <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                        class="ti ti-chevron-right"></i> TWITER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pb-4 pt-lg-4 pt-8 justify-content-between g-2">
                <div class="col-xxl-4 col-lg-6 order-last order-lg-first">
                    <span>COPYRIGHT © <span class="currentYear"></span> HUMMAESPORT | DESIGNED BY <a
                            href="https://themeforest.net/user/pixelaxis" class="tcp-1">MAGANG HUMMA </a></span>
                </div>
            </div>
        </div>
        <!-- footer banner img  -->
        <div class="footer-banner-img" id="faa">
            <img class="w-100" src="{{ asset('assets/img/fbanner.png') }}" alt="banner">
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- gsap  -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- gsap scroll trigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- lenis  -->
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
    <!-- gsap split text -->
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <!-- tilt js -->
    <script src="{{ asset('assets/js/vanilla-tilt.js') }}"></script>
    <!-- scroll magic -->
    <script src="{{ asset('assets/js/ScrollMagic.min.js') }}"></script>
    <!-- animation.gsap -->
    <script src="{{ asset('assets/js/animation.gsap.min.js') }}"></script>
    <!-- gsap customization  -->
    <script src="{{ asset('assets/js/gsap-customization.js') }}"></script>
    <!-- apex chart  -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- magnific popup  -->
    <script src="{{ asset('assets/js/magnific-popup.js_1.1.0_jquery.magnific-popup.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    {{-- script untuk memunculkan form nominal apabila memilih paid --}}
    <script>
        function toggleDiv1() {
            let value = document.getElementById("paidment").value;
            console.log("Nilai yang dipilih:", value); // Tambahkan pesan log untuk memeriksa nilai yang dipilih
            let div = document.getElementById("nominal");

            if (value === "paid") {
                console.log("Menampilkan form nominal"); // Tambahkan pesan log untuk memeriksa logika ini
                div.style.display = "block";
            } else {
                console.log("Menyembunyikan form nominal"); // Tambahkan pesan log untuk memeriksa logika ini
                div.style.display = "none";
            }
        }
    </script>
    {{-- script untuk form wizard --}}
    <script>
        var currentTab = 0; // Langkah saat ini diatur menjadi langkah pertama (0)
        showTab(currentTab); // Tampilkan langkah saat ini

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";

            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }

            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }

            fixStepIndicator(n);
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");

            if (n == 1 && !validateForm()) return false;

            x[currentTab].style.display = "none";
            currentTab = currentTab + n;

            if (currentTab >= x.length) {
                // Menghubungkan formulir ke route ptournament.store saat formulir disubmit
                document.getElementById("regForm").action = "{{ route('ptournament.store') }}";
                document.getElementById("regForm").submit(); // Submit formulir
                return false;
            }

            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("select");

            for (i = 0; i < y.length; i++) {
                if (y[i].hasAttribute("required") && y[i].value.trim() === "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }

            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }

            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");

            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }

            x[n].className += " active";
        }
    </script>

    {{-- scrript untuk prizepool --}}
    <script>
        $(document).ready(function() {
            // Event handler untuk tombol "Hapus Baris"
            $(document).on('click', '.removeRow', function() {
                console.log($(this).closest('.form-prize'))
                $(this).closest('.form-prize').remove();
            });

            // Event handler untuk semua select dengan nama "animation[]"
            $(document).on('change', '.prize-dropdown', function() {
                console.log($(this).closest('.form-prize'))
                var moneyForm = $(this).closest('.form-prize').find('.moneyForm');
                if ($(this).val() === "uang") {
                    moneyForm.show();
                } else {
                    moneyForm.hide();
                }
            });

            // Event handler untuk tombol "Tambah Baris"
            $(document).on('click', '.addRow', function() {
                let templateRow = $('#inputs .form-prize:first').clone();
                let lastRow = $('#inputs .form-prize:last');

                templateRow.find('.addRow').remove();
                templateRow.find('.removeRow').removeClass('d-none');
                templateRow.find('.moneyForm').css('display', 'none');

                if (lastRow.length) {
                    let nextNumber = parseInt(lastRow.find('.count').text()) + 1;
                    templateRow.find('.count').text(nextNumber);
                } else {
                    // Jika tidak ada baris lagi, tambahkan baris pertama
                    templateRow.find('.count').text(1);
                }

                $('#inputs').append('<div class="form-prize border-top pt-3 mt-3">' + templateRow.html() +
                    '</div>');

                return false;
            });
        });
    </script>






</body>

</html>
