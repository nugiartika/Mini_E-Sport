@extends('penyelenggara.layouts.app')

@section('style')
<head><link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>

    <style>
        .note-editable {
    color: white; /* Atur warna teks menjadi putih */
}
    </style>
</head>
@endsection
@section('content')
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

        /* Mark the active step: */
        .step.active {
            opacity: 1;
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

    <div class="layout-container">

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
                                    <input type="date" class="form-control @error('pendaftaran') is-invalid @enderror"
                                        id="pendaftaran" name="pendaftaran" value="{{ old('pendaftaran') }}">
                                    @error('pendaftaran')
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
                                    <label for="end_pendaftaran" class="form-label">Akhir Pendaftaran</label>
                                    <input type="date"
                                        class="form-control @error('end_pendaftaran') is-invalid @enderror"
                                        id="end_pendaftaran" name="end_pendaftaran" value="{{ old('end_pendaftaran') }}">
                                    @error('end_pendaftaran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="slotTeam" class="form-label">Jumlah Tim</label>
                                <input type="number"
                                    class="form-control @error('slotTeam') is-invalid @enderror"
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
                                <textarea name="description" id="custom-summernote" class="custom-summernote text-white" aria-label="With textarea">{{ old('description') }}</textarea>
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
                                    <option value="Berbayar" {{ old('paidment') == 'Berbayar' ? 'selected' : '' }}>
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
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    {{-- script untuk memunculkan form nominal apabila memilih paid --}}
    <script>
        function toggleDiv1() {
            let value = document.getElementById("paidment").value;
            console.log("Nilai yang dipilih:", value); // Tambahkan pesan log untuk memeriksa nilai yang dipilih
            let div = document.getElementById("nominal");

            if (value === "Berbayar") {
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

            // Event handler untuk semua select dengan kelas "prize-dropdown"
            $(document).on('change', '.prize-dropdown', function() {
                var selectedValue = $(this).val();
                var noteForm = $(this).closest('.form-prize').find('.noteForm');

                // Periksa apakah nilai yang dipilih adalah bukan tanda placeholder
                if (selectedValue !== "") {
                    // Periksa apakah nilai yang dipilih sesuai dengan kondisi yang diinginkan
                    noteForm.show(); // Tampilkan form deskripsi hadiah
                } else {
                    // Sembunyikan form deskripsi hadiah jika tidak ada opsi yang dipilih
                    noteForm.hide();
                }
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

    <script>
     $(document).ready(function() {
        $('.custom-summernote').summernote({
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
             ],
             callbacks: {
                onInit: function() {
                    // Set background color to white
                    $('.custom-summernote .note-editor').css('background-color', 'white');
                    // Set text color to white
                    $('.custom-summernote .note-editable').css('color', 'white');
                },
                onChange: function(contents, $editable) {
                    // Set text color to white
                    $('.custom-summernote .note-editable').css('color', 'white');
                }
            }
          });
         });

   </script>

@endsection
