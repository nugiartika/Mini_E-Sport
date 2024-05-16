@extends('layouts.user')


@section('style')
    <link rel="shortcut icon" href="assets/img/humma-01.png" type="image/x-icon">
    <title>TEAMS - HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">



    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet"
        href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->


    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <script src="../../assets/js/config.js"></script>
@endsection
    @section('content')

    <!-- teams banner section start  -->
    <section class="teams-section pb-sm-10 pb-6 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-10 mb-sm-6 mb-4">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">TEAMS</h2>
                </div>
                <div class="col-12">
                    <div class="parallax-banner-area parallax-container">
                        <img class="w-100 rounded-5 parallax-img" src="assets/img/team-banner.png"
                            alt="tournament banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams banner section end  -->



    <div class="modal" tabindex="-1" id="tambahTeam" style="color: #000;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-split">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Team</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

  <div class="slide active" id="slide1">
    <div class="row g-3">
        <div class="col">
        <label for="" class="form-label"></label>
        <input class="input form-control @error('') is-invalid @enderror" id="" type="text"
            name="" value="{{ old('nama') }}" required autocomplete="" autofocus>

    </div>

    <div class="col">
        <label for="nisn" class="form-label"></label>
        <input class="input form-control @error('nisn') is-invalid @enderror" id="nisn" type="text"
            name="" value="{{ old('nisn') }}" required autocomplete="nisn" autofocus>

    </div>
</div>
<div class="row g-3">
    <div class="col">
        <label for="telepon" class="form-label"></label>
        <input class="input form-control @error('telepon') is-invalid @enderror" id="telepon" type="text"
            name="" value="{{ old('telepon') }}" required autocomplete="telepon" autofocus>

    </div>
    <div class="col">
        <label for="alamat" class="form-label">{{ __('Alamat') }}</label>
        <textarea class="input form-control @error('alamat') is-invalid @enderror" id="alamat" type="text"
            name="" required autocomplete="alamat" autofocus>{{ old('alamat') }}</textarea>

    </div>
</div>
    <div class="row g-3">
        <div class="col">
            <label for="tempat_lahir" class="form-label">{{ __('Tempat Lahir') }}</label>
            <input class="input form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" type="text"
                name="" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus>

        </div>

        <div class="col">
            <label for="tanggal_lahir" class="form-label">TANGGAL LAHIR</label>
            <input type="" class="input form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" max="{{ now()->toDateString() }}" required>

        </div>
    </div>

        <div class="col">
            <label class="form-label">{{ __('Jenis kelamin') }}</label>


        </div>
    <div class="row g-3">
        <div class="col"></div>
        <div class="col">
    <button type="button" class="btn btn-primary next-slide">Next</button>
        </div></div>
</div>

<div class="slide" id="slide2">
    <div class="mb-3">
        <label for="" class="form-label">{{ __('email') }}</label>
        <input class="input form-control @error('') is-invalid @enderror" id="" type=""
            name="" value="{{ old('email') }}" required autocomplete="">

    </div>

    <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input class="input form-control @error('password') is-invalid @enderror" id="password" type="password"
            name="" required autocomplete="new-password">

    </div>

    <div class="mb-3">
        <label for="password-confirm" class="form-label">{{ __('Password Confirm') }}</label>
        <input class="input form-control" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>

    <input type="hidden" name="status" value="menunggu konfirmasi">
    <div class="row g-3">
        <div class="col">
    <button type="button" class="btn btn-primary prev-slide">Previous</button></div>
    <div class="col">
    <div class="input-box button">
        <button type="button" class="btn btn-primary">
            {{ __('Register') }}
        </button></div>
    </div>
</div>
</div>
<div class="text">
    <p>Sudah Punya Akun?<a href="{{ route('login') }}"> Login</a></p>
    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>



    <!-- teams card section start   -->
    <section class="teams-card-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-15 mb-10 d-flex justify-content-between align-items-center">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">FIND TEAMS</h2>
                </div>


            </div>
            <!-- teams card  -->
            <div class="row g-6 justify-content-md-start justify-content-center mb-lg-15 mb-10">
                @forelse ($teams as $team)
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb"
                        style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden;">
                            <img class="w-100 rounded-circle" src="{{ asset('storage/' . $team->profile) }}" alt="team" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">{{ $team->name }}</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="assets/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="{{ route('team.detail', ['team' => $team->id]) }}"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-12">
                    <center>
                        <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                            style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
                    </center>
                    <h1 class="table-light" style="text-align: center;">
                        Data Tidak Tersedia
                    </h1>
                </div> @endforelse

            </div>
            <div class="d-center">
    <button class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill z-2 border-0">VIEW
        MORE</button>
    </div>
    </div>
    </section>
    <!-- teams card section end   -->
@endsection




@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            function showSlide(slideIndex) {
                slides.forEach((slide, index) => {
                    if (index === slideIndex) {
                        slide.style.display = 'block';
                    } else {
                        slide.style.display = 'none';
                    }
                });
            }

            document.querySelector('.next-slide').addEventListener('click', function() {
                currentSlide++;
                showSlide(currentSlide);
            });

            document.querySelector('.prev-slide').addEventListener('click', function() {
                currentSlide--;
                showSlide(currentSlide);
            });
        });
    </script>

    <script src="../../demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"></script>
    <script src="../../demo/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c"></script>
    <script src="../../demo/assets/vendor/js/bootstraped84.js?id=9a6c701557297a042348b5aea69e9b76"></script>
    <script src="../../demo/assets/vendor/libs/node-waves/node-waves259f.js?id=4fae469a3ded69fb59fce3dcc14cd638"></script>
    <script
        src="../../demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a">
    </script>
    <script src="../../demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"></script>
    <script src="../../demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
    <script src="../../demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"></script>
    <script src="../../demo/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="../../demo/assets/js/mainf696.js?id=8bd0165c1c4340f4d4a66add0761ae8a"></script>

@endsection
