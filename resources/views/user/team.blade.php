@extends('layouts.user')


@section('style')
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>TEAMS - HUMMAESPORT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet"> --}}

    <!-- Icons -->
    {{-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> --}}

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
<link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->


    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
@endsection
    @section('content')
    <!-- notification area start -->
    <div class="notification-area p-4" data-lenis-prevent>
        <div class="notification-card d-grid gap-lg-4 gap-2" data-tilt>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar1.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Cristofer Dorwart</span>
                        <span class="card-text d-block tcn-1 fs-sm">Winners The Last Game</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar2.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Piter Maio </span>
                        <span class="card-text d-block tcn-1 fs-sm">Accept your challenge</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Copa Punto Gamer </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Daily Bonus </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar1.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Cristofer Dorwart</span>
                        <span class="card-text d-block tcn-1 fs-sm">Winners The Last Game</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-img-area">
                        <img class="w-100 rounded-circle" src="assets/img/avatar2.png" alt="profile">
                    </div>
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Piter Maio </span>
                        <span class="card-text d-block tcn-1 fs-sm">Accept your challenge</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Copa Punto Gamer </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="card-item d-flex align-items-center gap-4">
                    <div class="card-info">
                        <span class="card-title d-block tcn-1"> Daily Bonus </span>
                        <span class="card-text d-block tcn-1 fs-sm">Tournament start</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- notification area end -->

    <!-- connect your Wallet section start -->
    <div class="connect-wallet-section position-fixed top-0 start-0 w-100 vh-100">
        <div class="connect-wallet-overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="vh-100 wallet-wrapper d-center">
            <div class="wallet-area pt-lg-8 pt-sm-6 pt-4 pb-lg-20 pb-sm-10 pb-6 px-lg-15 px-sm-8 px-3 bgn-4 rounded-5 ">
                <div class="mb-lg-7 mb-sm-5 mb-3 d-flex justify-content-end">
                    <i class="ti ti-circle-x display-four fw-normal pointer wallet-close-btn"></i>
                </div>
                <h3 class="tcn-1 cursor-scale growDown title-anim mb-lg-20 mb-sm-10 mb-6">
                    Connect Your Wallet
                </h3>
                <div class="wallet-option pb-20">
                    <ul class="d-grid gap-sm-8 gap-4">
                        <li class="wallet-item p-sm-6 p-2 bgn-3 rounded-4">
                            <a href="#" class="d-between">
                                <span>Connect with Metamask</span>
                                <div class="wallet-item-thumb">
                                    <img class="w-100" src="assets/img/metamask.png" alt="metamask">
                                </div>
                            </a>
                        </li>
                        <li class="wallet-item p-sm-6 p-2 bgn-3 rounded-4">
                            <a href="#" class="d-between">
                                <span>Connect with Wallet Connect </span>
                                <div class="wallet-item-thumb">
                                    <img class="w-100" src="assets/img/walletconnect.png" alt="wallet connect">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- connect your Wallet section end -->

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
                    {{-- <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                        @csrf --}}

                        {{-- <div class="slide active" id="slide1">
                            <div class="row g-3">
                                <div class="mb-3">
                                    <label for="name" class="form-label">NAME TEAM</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="profile" class="form-label">PROFILE</label>
                                    <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" onchange="previewImage(event)">
                                    @if(old('profile'))
                                        <img id="preview" src="{{ asset('storage/' . old('profile')) }}" alt="Old profile" style="max-width: 100px; max-height: 100px;">
                                    @endif
                                    @error('profile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col"></div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary next-slide">Next</button>
                                </div>
                            </div>
                        </div>

                        <div class="slide" id="slide2">
                            <div class="mb-3">
                                <label for="category" class="form-label">GAME</label><br>
                                <select class="form-control @error('categories_id') is-invalid @enderror" id="category" name="categories_id" aria-label="Default select example">
                                    <option value="" selected>Select Game</option>
                                    @foreach ($category as $kat)
                                        <option value="{{ $kat->id }}" {{ old('categories_id') == $kat->id ? 'selected' : '' }}>
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

                            <div class="row g-3">
                                <div class="col">
                                    <button type="button" class="btn btn-primary prev-slide">Previous</button>
                                </div>
                                <div class="col">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                        <button type="submit" class="btn btn-primary">SAVE</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Default Wizard -->
{{-- <div class="col-12 mb-4"> --}}
    {{-- <small class="text-light fw-medium">Basic</small> --}}
    {{-- <div class="bs-stepper wizard-numbered mt-2">
      <div class="bs-stepper-header">
        <div class="step" data-target="#account-details">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">1</span>
            <span class="bs-stepper-label">
            </span>
          </button>
        </div>
        <div class="line">
          <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step" data-target="#personal-info">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">2</span>
            <span class="bs-stepper-label">

            </span>

          </button>
        </div>
        <div class="line">
          <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step" data-target="#social-links">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">3</span>
            <span class="bs-stepper-label">

            </span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <form onSubmit="return false">
          <!-- Account Details -->
          <div id="account-details" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Account Details</h6>
              <small>Enter Your Account Details.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="username">Username</label>
                <input type="text" id="username" class="form-control" placeholder="johndoe" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
              </div>
              <div class="col-sm-6 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password2" />
                  <span class="input-group-text cursor-pointer" id="password2"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>
              <div class="col-sm-6 form-password-toggle">
                <label class="form-label" for="confirm-password">Confirm Password</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="confirm-password2" />
                  <span class="input-group-text cursor-pointer" id="confirm-password2"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Personal Info -->
          <div id="personal-info" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Personal Info</h6>
              <small>Enter Your Personal Info.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="first-name">First Name</label>
                <input type="text" id="first-name" class="form-control" placeholder="John" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="last-name">Last Name</label>
                <input type="text" id="last-name" class="form-control" placeholder="Doe" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="country">Country</label>
                <select class="select2" id="country">
                  <option label=" "></option>
                  <option>UK</option>
                  <option>USA</option>
                  <option>Spain</option>
                  <option>France</option>
                  <option>Italy</option>
                  <option>Australia</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="language">Language</label>
                <select class="selectpicker w-auto" id="language" data-style="btn-transparent" data-icon-base="ti" data-tick-icon="ti-check text-white" multiple>
                  <option>English</option>
                  <option>French</option>
                  <option>Spanish</option>
                </select>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Social Links -->
          <div id="social-links" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Social Links</h6>
              <small>Enter Your Social Links.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="twitter">Twitter</label>
                <input type="text" id="twitter" class="form-control" placeholder="https://twitter.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="facebook">Facebook</label>
                <input type="text" id="facebook" class="form-control" placeholder="https://facebook.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="google">Google+</label>
                <input type="text" id="google" class="form-control" placeholder="https://plus.google.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="linkedin">LinkedIn</label>
                <input type="text" id="linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-success btn-submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> --}}
  <!-- /Default Wizard -->



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
                    <div class="text-end">
                        {{-- <a type="button" class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahTeam">Add Team</a> --}}
                        <a href="{{ route('team.create') }}" class="btn-half position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill" >Add Team</a>
                    </div>
                </div>


            </div>
            <!-- teams card  -->
            <div class="row g-6 justify-content-md-start justify-content-center mb-lg-15 mb-10">
                @foreach ($teams as $team)
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb"
                        style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden;">
                            <img class="w-100 rounded-circle" src="{{ asset('storage/'. $team->profile) }}" alt="team" style="width: 100%; height: 100%; object-fit: cover;">
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
                @endforeach
            </div>
            <div class="d-center">
                <button
                    class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill z-2 border-0">VIEW
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

<script src="../../demo/assets/js/dashboards-crm.js"></script>
<!-- END: Page JS-->
@endsection

