@extends('layouts.user')


@section('style')
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>TEAMS - HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


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

    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <script src="../../assets/js/config.js"></script>



    <style>

        /* .slide {
            display: none;
        }

        .slide.active {
            display: block;
        } */

        input{
            color: #939393;
        }


    /* Gambar yang digunakan untuk tombol radio */
    .custom-radio input[type="radio"] {
        display: none;
    }


    /* Style ketika tombol radio dipilih */
    .custom-radio input[type="radio"]:checked + .radio-dot {
        background-color: #2196F3; /* Warna tanda centang saat dipilih */
    }


</style>
@endsection
@section('content')
<div class="container" style="margin-top: 10%; color: #939393">
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf
         <!-- Second column -->
    <div class="col-12 col-lg-4">
        <!-- Pricing Card -->
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title mb-0">new team</h5>
          </div>
          <div class="card-body">
            <div class="customer-avatar-section">
                <div class="d-flex justify-content-center">
                    <img class="rounded my-3" style="border: 2px solid #000000; object-fit: cover;" width="110px" height="110px" src="{{ asset('assets/img/game-x10.png') }}" alt="User avatar" />
                    {{-- <span class="btn-text" style=" bottom: 5px; right: 5px;"><i class="fas fa-camera"></i></span> --}}
                    {{-- <input type="file" class="upload" name="profile" id="profile-input"> --}}
                </div>
            </div><br>
            <!-- Base Price -->
            <div class="mb-3">
                <label for="profile" class="form-label">PROFILE</label>
                <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" onchange="previewImage(event)">
                @if (old('profile'))
                    <img id="preview" src="{{ asset('storage/' . old('profile')) }}" alt="Old profile" style="max-width: 100px; max-height: 100px;"> @endif
                @error('profile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <!-- Discounted Price -->
            <div class="mb-3">
    <label for="name" class="form-label">NAME TEAM</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name') }}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <input type="hidden" name="tournament_id" value="{{ $selectedTournamentId }}">

    </div>
    </div>
    <!-- /Pricing Card -->

    </div>
    <!-- /Second column -->
    <div class="col-12 col-lg-8">

        <div class="card mb-4">

            <div class="card-body">
                <h5 class="card-title mb-0">core players</h5><br>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="user_id" class="form-label">Captain Team</label>
                        <input type="text" class="form-control" id="user_id" name="user_id"
                            value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="member2" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member2') is-invalid @enderror" id="member2"
                            name="member2" value="{{ old('member2') }}">
                        @error('member2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="member3" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member3') is-invalid @enderror" id="member3"
                            name="member3" value="{{ old('member3') }}">
                        @error('member3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="member4" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member4') is-invalid @enderror" id="member4"
                            name="member4" value="{{ old('member4') }}">
                        @error('member4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="member5" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member5') is-invalid @enderror" id="member5"
                            name="member5" value="{{ old('member5') }}">
                        @error('member5')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <br>
                <h5 class="card-title mb-0">substitute player</h5>
                <br>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="cadangan1" class="form-label">substitute player</label>
                        <input type="text" class="form-control @error('cadangan1') is-invalid @enderror"
                            id="cadangan1" name="cadangan1" placeholder="Optional" value="{{ old('cadangan1') }}">
                        @error('cadangan1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="cadangan2" class="form-label">substitute player</label>
                        <input type="text" class="form-control @error('cadangan2') is-invalid @enderror"
                            id="cadangan2" name="cadangan2" placeholder="Optional" value="{{ old('cadangan2') }}">
                        @error('cadangan2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-primary ms-2">SAVE</button>
                </div>

                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>



    </form>
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

    <script src="../../demo/assets/js/dashboards-crm.js"></script>
    <!-- END: Page JS-->
@endsection
