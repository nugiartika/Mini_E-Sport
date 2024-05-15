<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <title>Tournament - HummaEsport</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        {{-- <meta charset="utf-8" /> --}}
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>
            Dashboard Penyelenggara
        </title>
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
        <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
        <!-- laravel CRUD token -->
        <meta name="csrf-token" content="y0lzh53YmoH0xFgY2vFjhD4S1TOiq6lE58zbW7ec">
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://1.envato.market/vuexy_admin">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon"
            href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />


        <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    '{{ asset('') }}www.googletagmanager.com/gtm5445.html?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
        </script>
        <!-- End Google Tag Manager -->


        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
<link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css"/>
<link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="../../assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/quill/typography.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/quill/katex.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />

<!-- Page CSS -->

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Helpers -->
<script src="../../assets/vendor/js/helpers.js"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="../../assets/vendor/js/template-customizer.js"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="../../assets/js/config.js"></script>

        {{-- <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet">

        <link rel="stylesheet"
            href="{{ asset('demo/assets/vendor/fonts/tabler-iconsea04.css?id=6ad8bc28559d005d792d577cf02a2116') }}" />
        <link rel="stylesheet"
            href="{{ asset('demo/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5') }}" />
        <link rel="stylesheet"
            href="{{ asset('demo/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d') }}" />
        <!-- Core CSS -->
        <link rel="stylesheet"
            href="{{ asset('') }}demo/assets/vendor/css/rtl/core6cc1.css?id=9dd8321ea008145745a7d78e072a6e36"
            class="template-customizer-core-css" />
        <link rel="stylesheet"
            href="{{ asset('demo/assets/vendor/css/rtl/theme-defaultfc79.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9"
                            class="template-customizer-theme-css') }}" />
        <link rel="stylesheet" href="{{ asset('demo/assets/css/demof1ed.css?id=ddd2feb83a604f9e432cdcb29815ed44') }}" />
        <link rel="stylesheet"
            href="{{ asset('demo/assets/vendor/libs/node-waves/node-wavesd178.css?id=aa72fb97dfa8e932ba88c8a3c04641bc') }}" />
        <link rel="stylesheet"
            href="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar7358.css?id=280196ccb54c8ae7e29ea06932c9a4b6') }}" />
        <link rel="stylesheet"
            href="{{ asset('demo/assets/vendor/libs/typeahead-js/typeaheadb5e1.css?id=2603197f6b29a6654cb700bd9367e2a3') }}" /> --}}

        <!-- Vendor Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/apex-charts/apex-charts.css') }}" />


        <script src="{{ asset('demo/assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('demo/assets/vendor/js/template-customizer.js') }}"></script>

        <script src="{{ asset('demo/assets/js/config.js') }}"></script> --}}

        <script>
            window.templateCustomizer = new TemplateCustomizer({
                cssPath: '',
                themesPath: '',
                defaultStyle: "dark",
                defaultShowDropdownOnHover: "true",
                displayCustomizer: "true",
                lang: 'en',
                pathResolver: function(path) {
                    var resolvedPaths = {
                        'core.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=9dd8321ea008145745a7d78e072a6e36',
                        'core-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d661bae1d0ada9f7e9e3685a3e1f427e',

                        // Themes
                        'theme-default.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=a4539ede8fbe0ee4ea3a81f2c89f07d9',
                        'theme-default-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ce86d777a4c5030f51d0f609f202bcc5',
                        'theme-bordered.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=786794ca0c68d96058e8ceeb20f4e7c5',
                        'theme-bordered-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=e7122ef6338b22f7cea9eaff5a96aa8b',
                        'theme-semi-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=a0a317e88e943fdd62d514e00deebb22',
                        'theme-semi-dark-dark.css': 'https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=e9a2f7cd6ace727264936f6bf93ab1e2',
                    }
                    return resolvedPaths[path] || path;
                },
                'controls': ["rtl", "style", "headerType", "contentLayout", "layoutCollapsed", "layoutNavbarOptions",
                    "themes"
                ],
            });
        </script>
         @yield('style')


</head>
<style>
    .custom-summernote {
        color: white !important;
    }

        h1 {
            text-align: center;
            color: white;
        }

        label {
            color: white;
        }

        /* Gaya untuk form */
        #regForm {
            margin: 90px auto;

        }

    /* Gaya untuk input fields */
    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        border: 1px solid #aaaaaa;
    }
    /* textarea{
        color: #ffffff;
    } */

        textarea {
            color: #ffffff;
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

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }

        .step.finish {
            background-color: #04AA6D;
        }

        .card {
            background-color: rgb(25, 27, 31);
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-right: 100px;
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
        border-bottom: 1px solid #fff;
        border-radius: 0;
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        line-height: 1.3;
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


<body>
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            @include('penyelenggara.layouts.sidebar')

            <!-- Layout page -->
            <div class="layout-page">

                <!-- BEGIN: Navbar-->
                @include('penyelenggara.layouts.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Content -->
                        @yield('content')
                        <!-- / Content -->
                    </div>
                </div>
                @if (auth()->check())
                <div class="user-account-popup p-4">
                    <div class="account-items d-grid gap-1" data-tilt>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="bttn account-item" type="submit">Log Out</button>
                        </form>
                    </div>
                </div>
            @endif
            <form action="{{ route('ptournament.store') }}" method="POST" enctype="multipart/form-data" id="regForm">
                @csrf
                @if ($errors->all())
                    <div class="alert bg-danger">
                        <h5>Ada kesalahan!</h5>
                        <p>Mohon periksa pesan ini dan segera diperbaiki.</p>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row justify-content-center">

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
                                        <input type="date" class="form-control @error('permainan') is-invalid @enderror"
                                            id="permainan" name="permainan" value="{{ old('permainan') }}">
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
                                                    <select class="form-control prize-dropdown @error('prize') is-invalid @enderror" name="prize">
                                                        <option value="">Pilih Salah Satu</option>
                                                        <option value="uang">Uang</option>
                                                    </select>


                                                    <button type="button" class="addRow rounded-end btn btn-info"><i
                                                            class="ti ti-plus fs-2xl"></i></button>

                                                    <button type="button" class="removeRow d-none btn btn-danger"><i
                                                            class="ti ti-trash fs-2xl"></i></button>
                                                </div>
                                                <div class="w-100 mt-3 noteForm" style="display: none;">
                                                    <!-- Ubah id menjadi class untuk "moneyForm" -->
                                                    <input class="form-control" type="text"
                                                        placeholder="Isikan deskripsi hadiah" name="note" />
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
                                    <select class="form-control @error('categories_id') is-invalid @enderror"
                                        id="category" name="categories_id" aria-label="Default select example">
                                        <option value="" selected>Select Game</option>
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
                                    <textarea name="description" class="form-control" id="custom-summernote"
                                        aria-label="With textarea">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- <div class="row">
                                    <!-- Full Editor -->
                                    <div class="col-12">
                                      <div class="card">
                                        <h5 class="card-header">Full Editor</h5>
                                        <div class="card-body">
                                          <div id="full-editor">
                                            <h6>Quill Rich Text Editor</h6>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /Full Editor -->
                                  </div> --}}






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
                                    <select name="paidment" id="paidment" class="form-control" onchange="toggleDiv1()">
                                        <option value="" selected disabled>Pilih</option>
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

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="permainan" class="form-label">Mulai Kompetisi</label>
                                    <input type="date" class="form-control @error('permainan') is-invalid @enderror"
                                        id="permainan" name="permainan" value="{{ old('permainan') }}">
                                    @error('permainan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="end_permainan" class="form-label">Tanggal Berakhir</label>
                                    <input type="date" class="form-control @error('end_permainan') is-invalid @enderror"
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
                                    <div id="inputs">
                                        <div class="form-prize">
                                            <div class="input-group">
                                                <select class="form-control prize-dropdown" name="prizepool_id[]">
                                                    <option value="">Pilih Hadiah</option>
                                                    @foreach ($prizes as $kat)
                                                        <option value="{{ $kat->id }}"
                                                            {{ old('prizepool_id') == $kat->id ? 'selected' : '' }}>
                                                            {{ $kat->prize }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                <button type="button" class="addRow rounded-end btn btn-info"><i
                                                        class="ti ti-plus fs-2xl"></i></button>

                                                <button type="button" class="removeRow d-none btn btn-danger"><i
                                                        class="ti ti-trash fs-2xl"></i></button>
                                            </div>

                                            <div class="w-100 mt-3 noteForm" style="display: none;">
                                                <input class="form-control" type="text"
                                                    placeholder="Isikan deskripsi hadiah" name="note[]" />
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
                                <select class="form-control @error('categories_id') is-invalid @enderror" id="category"
                                    name="categories_id" aria-label="Default select example">
                                    <option value="" selected>Select Game</option>
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
                                    <img id="preview" src="{{ asset('storage/' . old('images')) }}" alt="Old images"
                                        style="max-width: 100px; max-height: 100px;">
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
                                <textarea name="description" id="custom-summernote" class="custom-summernote" aria-label="With textarea">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- /Full Editor -->

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
                                <select name="paidment" id="paidment" class="form-control" onchange="toggleDiv1()">
                                    <option value="" selected disabled>Pilih</option>
                                    <option value="Berbayar" {{ old('paidment') == 'paid' ? 'selected' : '' }}>
                                        Berbayar
                                    </option>
                                    <option value="Gratis" {{ old('paidment') == 'Gratis' ? 'selected' : '' }}>
                                        Gratis</option>
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
            </form>
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                            <div>
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                , Humma <span>Esport</span>
                            </div>
                            <div class="d-none d-lg-inline-block">
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
        {{-- <header class="header-section w-100 bgn-4">
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
    </header> --}}

    </div>
    {{-- <footer class="footer bgn-4 bt">
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
        <div class="footer-banner-img" id="faa">
            <img class="w-100" src="{{ asset('assets/img/fbanner.png') }}" alt="banner">
        </div>
    </footer> --}}

    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
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

    <script src="{{ asset('demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c') }}"></script>
    <script src="{{ asset('demo/assets/vendor/js/bootstraped84.js?id=9a6c701557297a042348b5aea69e9b76') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/node-waves/node-waves259f.js?id=4fae469a3ded69fb59fce3dcc14cd638') }}">
    </script>
    <script
        src="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8') }}"></script>

    <script src="{{ asset('demo/assets/js/mainf696.js?id=8bd0165c1c4340f4d4a66add0761ae8a') }}"></script>

    <script src="{{ asset('demo/assets/js/dashboards-crm.js') }}"></script> --}}







      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->

      <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
      <script src="../../assets/vendor/libs/popper/popper.js"></script>
      <script src="../../assets/vendor/js/bootstrap.js"></script>
      <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
      <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
      <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
      <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
      <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
       <script src="../../assets/vendor/js/menu.js"></script>

      <!-- endbuild -->

      <!-- Vendors JS -->
      <script src="../../assets/vendor/libs/quill/katex.js"></script>
    <script src="../../assets/vendor/libs/quill/quill.js"></script>

      <!-- Main JS -->
      <script src="../../assets/js/main.js"></script>


      <!-- Page JS -->
      <script src="../../assets/js/forms-editors.js"></script>

    @yield('script')

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
        var currentTab = 0;
        showTab(currentTab);

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
                swal({
                    title: "Berhasi membuat tournament baru!",
                    text: "tunggu persetujuan admin",
                    icon: "success",
                    button: "ok",
                }).then((willSubmit) => {
                    if (willSubmit) {
                        document.getElementById("regForm").action = "{{ route('ptournament.store') }}";
                        document.getElementById("regForm").submit();
                    }
                });
                return false;
            }

            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

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
                $(this).closest('.form-prize').remove();
            });

            // Event handler untuk semua select dengan nama "animation[]"
            $(document).on('change', '.prize-dropdown', function() {
                var selectedValue = $(this).val();
                var noteForm = $(this).closest('.form-prize').find('.noteForm');
                // Periksa apakah nilai yang dipilih adalah 'uang', 'mendali', 'trophy', atau 'sertifikat'
                noteForm.toggle(selectedValue === "uang" || selectedValue === "mendali" || selectedValue ===
                    "trophy" ||
                    selectedValue === "sertifikat");
            });


            // Event handler untuk tombol "Tambah Baris"
            $(document).on('click', '.addRow', function() {
                let templateRow = $('#inputs .form-prize:first').clone();
                let lastRow = $('#inputs .form-prize:last');

                templateRow.find('.addRow').remove();
                templateRow.find('.removeRow').removeClass('d-none');
                templateRow.find('.noteForm').hide();

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

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> --}}


<!-- include libraries(jQuery, bootstrap) -->


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}


    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap 4 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script> --}}

    <script>
        $('#custom-summernote').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
      </script>
    {{-- <script>
     $(document).ready(function() {
        $('#custom-summernote').summernote({
             placeholder: 'Isi deskripsi tournament',
             tabsize: 2,
             height: 120,
             toolbar: [
               ['style', ['style']],
               ['font', ['bold', 'underline', 'clear']],
               ['color', ['color']],
               ['para', ['ul', 'ol', 'paragraph']],
               ['table', ['table']],
               ['insert', ['link', 'picture', 'video']],
               ['view', ['fullscreen', 'codeview', 'help']]
             ]
            //  ,
            //  callbacks: {
            //     onChange: function(contents, $editable) {
            //         $('.custom-summernote .note-editable').css('color', 'white'); // Mengatur warna teks menjadi putih
            //     }
            // }
           });
         });
   </script> --}}


</body>

</html>
