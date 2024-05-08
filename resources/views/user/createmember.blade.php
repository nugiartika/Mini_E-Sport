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

        input{
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
    .custom-radio input[type="radio"]:checked + .radio-dot {
        background-color: #2196F3; /* Warna tanda centang saat dipilih */
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
    <div class="col-12 col-lg-4">
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
            $loggedInUserId = auth()->user()->email; // Mengambil ID pengguna yang sedang login
            $loggedInUserName = auth()->user()->name; // Mengambil ID pengguna yang sedang login
            @endphp

            @foreach ($teams as $team)
                    @php
                        $membersPerTeam = $team->tournament->category->membersPerTeam;
                    @endphp @endforeach

            <h5>pemain inti</h5><br>

            {{-- @for ($i = 1; $i <= $membersPerTeam; $i++)
<div  class="row g-3">
    <div class="col-md-6">
        <label for="member{{ $i }}" class="form-label">Member {{ $i }}</label>
        @if ($i === 1)
            <input type="email" class="form-control @error('member.' . ($i - 1)) is-invalid @enderror"
                id="member{{ $i }}" name="member[]" value="{{ old('member.' . ($i - 1), $loggedInUserId) }}"
                readonly>

        @else
            <input type="email" class="form-control @error('member.' . ($i - 1)) is-invalid @enderror"
                id="member{{ $i }}" name="member[]" value="{{ old('member.' . ($i - 1)) }}"
                placeholder="Entry your email">
        @endif
        @error('member.' . ($i - 1))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="nickname{{ $i }}" class="form-label">Nickname {{ $i }}</label>
        @if ($i === 1)
            <input type="text" class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                id="nickname{{ $i }}" name="nickname[]"
                value="{{ old('nickname.' . ($i - 1), $loggedInUserName) }}" placeholder="Entry nickname game">
        @else
            <input type="text" class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                id="nickname{{ $i }}" name="nickname[]" value="{{ old('nickname.' . ($i - 1)) }}"
                placeholder="Entry nickname game">
        @endif
        @error('nickname.' . ($i - 1))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <input type="hidden" name="team_id" value="{{ $teamId }}">


    @endfor --}}



    @for ($i = 1; $i <= $membersPerTeam; $i++)
    <div class="row g-3">
        <div class="col-md-6">
            <label for="member{{ $i }}" class="form-label">anggota {{ $i }}</label>
            @if ($i === 1)
                <input type="email" class="form-control @error('member.' . ($i - 1)) is-invalid @enderror"
                    id="member{{ $i }}" name="member[]" value="{{ old('member.' . ($i - 1), $loggedInUserId) }}"
                    readonly>
            @else
                <input type="email" class="form-control @error('member.' . ($i - 1)) is-invalid @enderror"
                    id="member{{ $i }}" name="member[]" value="{{ old('member.' . ($i - 1)) }}"
                    placeholder="Enter email">
            @endif
            @error('member.' . ($i - 1))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="nickname{{ $i }}" class="form-label">  </label>
            @if ($i === 1)
                <input type="text" class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                    id="nickname{{ $i }}" name="nickname[]"
                    value="{{ old('nickname.' . ($i - 1), $loggedInUserName) }}" placeholder="Enter nickname">
            @else
                <input type="text" class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                    id="nickname{{ $i }}" name="nickname[]" value="{{ old('nickname.' . ($i - 1)) }}"
                    placeholder="Enter nickname">
            @endif
            @error('nickname.' . ($i - 1))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <input type="hidden" name="team_id" value="{{ $teamId }}">

@endfor

<br><h5>pemain cadangan</h5><br>

@for ($i = 0; $i < 2; $i++)
    <div class="row g-3">
        <div class="col-md-6">
            <label for="member_cadangan{{ $i }}" class="form-label">cadangan {{ $i + 1 }}</label>
            <input type="email" class="form-control @error('member_cadangan.' . ($i - 1)) is-invalid @enderror"
                id="member_cadangan{{ $i }}" name="member_cadangan[]" value="{{ old('member_cadangan.' . ($i - 1)) }}"
                placeholder="Enter email">
            @error('member_cadangan.' . ($i - 1))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="nickname_cadangan{{ $i }}" class="form-label"></label>
            <input type="text" class="form-control @error('nickname_cadangan.' . ($i - 1)) is-invalid @enderror"
                id="nickname_cadangan{{ $i }}" name="nickname_cadangan[]"
                value="{{ old('nickname_cadangan.' . ($i - 1)) }}" placeholder="Enter nickname">
            @error('nickname_cadangan.' . ($i - 1))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <input type="hidden" name="team_id" value="{{ $teamId }}">
@endfor



    <br>
    {{-- <h5>substitute player</h5><br> --}}

    {{-- <div class="row g-3">
                <div class="col-md-6">
                    <label for="substituteMember" class="form-label">Substitute Member</label>
                    <input type="email" class="form-control" id="substituteMember" name="substitute_member"
                        placeholder="Enter substitute member's email">
                </div>
                <div class="col-md-6">
                    <label for="substituteNickname" class="form-label">Substitute Nickname</label>
                    <input type="text" class="form-control" id="substituteNickname" name="substitute_nickname"
                        placeholder="Enter substitute nickname">
                </div>
            </div> --}}

    <button type="submit" class="btn btn-primary ms-2">SAVE</button>
    </div>

    <!-- Charge tax check box -->
    {{-- <div class="mb-3">
                <label for="category" class="form-label">GAME</label><br>
                @foreach ($category as $kat)
                <label class="custom-radio">
                    <input class="form-check-input @error('categories_id') is-invalid @enderror" type="radio" name="categories_id" id="category{{ $kat->id }}" value="{{ $kat->id }}" {{ old('categories_id') == $kat->id ? 'checked' : '' }}>
                    <img src="{{ asset($kat->photo) }}" alt="" style="border: 2px solid #000000; ">
                </label>
                @endforeach
                @error('categories_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> --}}

    {{-- <div class="row">
                <label for="category" class="form-label">GAME</label><br>

                @foreach ($category as $kat)
                <div class="col-md mb-md-0 mb-2">
                    <div class="form-check custom-option custom-option-image custom-option-image-radio">
                        <label class="form-check-label custom-option-content custom-radio" for="category{{ $kat->id }}">
                            <span class="custom-option-body">
                                <input name="categories_id" class="form-check-input" type="radio" value="{{ $kat->id }}" id="category{{ $kat->id }}" {{ old('categories_id') == $kat->id ? 'checked' : '' }}>
                                <img class="rounded my-3"  src="{{ asset($kat->photo) }}" alt="" width="60px"  style="border: 2px solid #000;"/>
                            </span>
                        </label>
                    </div>
                </div>
                @endforeach
            </div> --}}
    <!-- Instock switch -->
    {{-- <div class="d-flex justify-content-between align-items-center border-top pt-3">
              <div class="w-25 d-flex justify-content-end">
                <label class="switch switch-primary switch-sm me-4 pe-2">
                  <input type="checkbox" class="switch-input" checked="">
                  <span class="switch-toggle-slider">
                    <span class="switch-on">
                      <span class="switch-off"></span>
                    </span>
                  </span>
                </label>
              </div>
            </div> --}}
    </div>
    </form>

    </div>
    <!-- /Pricing Card -->

    </div>
    <!-- /Second column -->
    {{-- <div class="col-12 col-lg-8">

        <div class="card mb-4">

            <div class="card-body">
                <h5 class="card-title mb-0">core players</h5><br>
                <div class="row g-3"> --}}
    {{-- <div class="col-md-4">
                        <label for="user_id" class="form-label">Captain Team</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ auth()->user()->name }}" readonly>
                    </div> --}}
    {{-- <div class="col-md-4">
                        <label for="member" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member') is-invalid @enderror" id="member" name="member" value="{{ old('member') }}">
                        @error('member')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
    {{-- <div class="col-md-4">
                        <label for="member3" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member3') is-invalid @enderror" id="member3" name="member3" value="{{ old('member3') }}">
                        @error('member3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}
    {{-- <div class="col-md-4">
                        <label for="member4" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member4') is-invalid @enderror" id="member4" name="member4" value="{{ old('member4') }}">
                        @error('member4')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="member5" class="form-label">Member Team</label>
                        <input type="text" class="form-control @error('member5') is-invalid @enderror" id="member5" name="member5" value="{{ old('member5') }}">
                        @error('member5')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
    {{-- </div>

                <br>
                <h5 class="card-title mb-0">substitute player</h5>
                <br>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="cadangan1" class="form-label">substitute player</label>
                        <input type="text" class="form-control @error('cadangan1') is-invalid @enderror" id="cadangan1" name="cadangan1" placeholder="Optional" value="{{ old('cadangan1') }}">
                        @error('cadangan1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="cadangan2" class="form-label">substitute player</label>
                        <input type="text" class="form-control @error('cadangan2') is-invalid @enderror" id="cadangan2" name="cadangan2" placeholder="Optional"  value="{{ old('cadangan2') }}">
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
        </div> --}}
    {{-- <div class="mb-3">
                <label for="name" class="form-label">NAME TEAM</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                    <label for="profile" class="form-label">PROFILE</label>
                    <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" onchange="previewImage(event)">
                    @if (old('profile'))
                        <img id="preview" src="{{ asset('storage/' . old('profile')) }}" alt="Old profile" style="max-width: 100px; max-height: 100px;">
                    @endif
                    @error('profile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
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
                </div> --}}
    {{-- </div>

              </div> --}}
    </div>
    </div>
    </div>
    </div>


    {{-- <div class="col-md-3">
            <div class="col-md-12">
                <label for="name" class="form-label">NAME TEAM</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="profile" class="form-label">PROFILE</label>
                <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" onchange="previewImage(event)">
                @if (old('profile'))
                    <img id="preview" src="{{ asset('storage/' . old('profile')) }}" alt="Old profile" style="max-width: 100px; max-height: 100px;">
                @endif
                @error('profile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
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
        </div> --}}


    <!-- Default Wizard -->
    {{-- <div class="col-12 mb-4">
    <small class="text-light fw-medium">Basic</small>
    <div class="bs-stepper wizard-numbered mt-2">
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
                <label class="form-label" for="">Email</label>
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




    {{-- <div class="slide active" id="slide1">
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
</form> --}}
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
