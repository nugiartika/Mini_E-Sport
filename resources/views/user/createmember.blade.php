@extends('user.layouts.app')


@section('style')
    {{-- <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>TEAMS - HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> --}}


    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" /> --}}

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet"> --}}

    <!-- Icons -->
    {{-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> --}}

    <!-- Core CSS -->
    {{-- <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
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
        href="../../assets/vendor/libs/@form-validation/form-validation.css" /> --}}

    <!-- Page CSS -->


    <!-- Helpers -->
    {{-- <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script> --}}



    <style>
        /* .slide {
                display: none;
            }

            .slide.active {
                display: block;
            } */

        input {
            color: #939393;
        }


        /* Style untuk tombol radio kustom */
        /* .custom-radio {
            display: inline-block;
            position: relative;
            padding-left: 30px;
            margin-right: 15px;
            cursor: pointer;
        } */

        /* Gambar yang digunakan untuk tombol radio */
        .custom-radio input[type="radio"] {
            display: none;
        }

        /* Style untuk tanda centang */
        /* .custom-radio .radio-dot {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background-color: #ccc;
            transition: background-color 0.3s ease;
        } */

        /* Style ketika tombol radio dipilih */
        .custom-radio input[type="radio"]:checked+.radio-dot {
            background-color: #2196F3;
            /* Warna tanda centang saat dipilih */
        }

        /* .custom-radio img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        } */
    </style>
@endsection
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 10%; color: #939393">

        <!-- Second column -->
        <div class="col-12 col-lg-6">
            <!-- Pricing Card -->
            <div class="card mb-4">
                {{-- <div class="card-header">

            <h5 class="card-title mb-0">new team</h5>
          </div> --}}

                <div class="card-body">
                    <form action="{{ route('member.store') }}" method="POST">
                        @csrf
                        <div class="customer-avatar-section">

                            {{-- @php
                use App\Models\Team;
                $teamIds = [ $selectedTeamId ];
                        @endphp --}}
                            @php
                                // $loggedInUserId = auth()->user()->email; // Mengambil ID pengguna yang sedang login
                                $loggedInUserName = auth()->user()->name; // Mengambil ID pengguna yang sedang login
                            @endphp

                            @foreach ($teams as $team)
                                @php
                                    $membersPerTeam = $team->tournament->category->membersPerTeam;
                                @endphp
                            @endforeach

                            <h5>pemain inti</h5><br>

                            @for ($i = 1; $i <= $membersPerTeam; $i++)
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        {{-- <label for="nickname{{ $i }}" class="form-label">anggota
                                            {{ $i }}</label> --}}
                                        @if ($i === 1)
                                        <label for="nickname{{ $i }}" class="form-label">Kapten</label>

                                            <input type="text"
                                                class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="nickname{{ $i }}" name="nickname[]"
                                                value="{{ old('nickname.' . ($i - 1), $loggedInUserName) }}"
                                                placeholder="Masukkan nickname">

                                        @else
                                        <label for="nickname{{ $i }}" class="form-label">anggota
                                            {{ $i-1 }}</label>

                                            <input type="text"
                                                class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="nickname{{ $i }}" name="nickname[]"
                                                value="{{ old('nickname.' . ($i - 1)) }}" placeholder="Masukkan nickname">

                                        @endif
                                        @error('nickname.' . ($i - 1))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="member{{ $i }}" class="form-label"></label>
                                        @if ($i === 1)
                                            <input type="number"
                                                class="form-control @error('member.' . ($i - 1)) is-invalid @enderror"
                                                id="member{{ $i }}" name="member[]"
                                                value="{{ old('member.' . ($i - 1)) }}" placeholder="Masukkan id game">
                                        @else
                                            <input type="number"
                                                class="form-control @error('member.' . ($i - 1)) is-invalid @enderror"
                                                id="member{{ $i }}" name="member[]"
                                                value="{{ old('member.' . ($i - 1)) }}" placeholder="Masukkan id game">
                                        @endif
                                        @error('member.' . ($i - 1))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <input type="hidden" name="is_captain[]" value="{{ $i === 0 ? '1' : '0' }}">
                                <input type="hidden" name="team_id" value="{{ $teamId }}">
                            @endfor
                            <br>
                            <h5>pemain cadangan</h5><br>

                            @for ($i = 0; $i < 2; $i++)
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="nickname_cadangan{{ $i }}" class="form-label">cadangan
                                            {{ $i + 1 }}</label>
                                        <input type="text"
                                            class="form-control @error('nickname_cadangan.' . ($i - 1)) is-invalid @enderror"
                                            id="nickname_cadangan{{ $i }}" name="nickname_cadangan[]"
                                            value="{{ old('nickname_cadangan.' . ($i - 1)) }}"
                                            placeholder="Masukkan nickname">
                                        @error('nickname_cadangan.' . ($i - 1))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">
                                        <label for="member_cadangan{{ $i }}" class="form-label"></label>
                                        <input type="number"
                                            class="form-control @error('member_cadangan.' . ($i - 1)) is-invalid @enderror"
                                            id="member_cadangan{{ $i }}" name="member_cadangan[]"
                                            value="{{ old('member_cadangan.' . ($i - 1)) }}" placeholder="Masukkan id game">
                                        @error('member_cadangan.' . ($i - 1))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- <input type="hidden" name="is_captain[]" value="false"> --}}

                                    </div>
                                </div>
                                <input type="hidden" name="is_captain[]" value="false">
                                <input type="hidden" name="team_id" value="{{ $teamId }}">
                                @endfor
                            <br>
                            <button type="submit" class="btn btn-primary ms-2">SAVE</button>
                        </div>
                </div>
                </form>

            </div>


        </div>



    </div>
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
    <script src="../../demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"></script>
    <script src="../../demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
    <script src="../../demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"></script>
    <script src="../../demo/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="../../demo/assets/js/mainf696.js?id=8bd0165c1c4340f4d4a66add0761ae8a"></script>

    <script src="../../demo/assets/js/dashboards-crm.js"></script>
    <!-- END: Page JS-->
@endsection
