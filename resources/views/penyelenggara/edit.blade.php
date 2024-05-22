@extends('layouts.panel')

@section('style')

    <head>
        <link href="summernote-bs5.css" rel="stylesheet">
        <script src="summernote-bs5.js"></script>

        <style>
            .note-editable {
                color: white;
                /* Atur warna teks menjadi putih */
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

    <form action="{{ route('ptournament.updatetour', ['id' => $id]) }}" method="POST" enctype="multipart/form-data"
        id="regForm">
        @csrf
        <div class="row justify-content-center">
            <div class="col-sm-6 col-xxl-5">

                <div class="card w-100">
                    <div class="card-body">
                        <h1>Edit Turnamen</h1>
                        <div class="tab">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Turnamen</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Mis: Mobile Legends" id="name" name="name"
                                    value="{{ old('name', $tournament->name) }}">
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
                                        id="pendaftaran" name="pendaftaran"
                                        value="{{ old('pendaftaran', $tournament->pendaftaran ? $tournament->pendaftaran->format('Y-m-d') : '') }}">
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
                                        value="{{ old('end_pendaftaran', $tournament->end_pendaftaran ? $tournament->end_pendaftaran->format('Y-m-d') : '') }}">
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
                                        id="permainan" name="permainan"
                                        value="{{ old('permainan', $tournament->permainan ? $tournament->permainan->format('Y-m-d') : '') }}">
                                    @error('permainan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="end_permainan" class="form-label">Tanggal Berakhir</label>
                                    <input type="date" class="form-control @error('end_permainan') is-invalid @enderror"
                                        id="end_permainan" name="end_permainan"
                                        value="{{ old('end_permainan', $tournament->end_permainan ? $tournament->end_permainan->format('Y-m-d') : '') }}">
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
                                    id="slotTeam" name="slotTeam" value="{{ old('slotTeam', $tournament->slotTeam) }}">
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
                                <div id="prizepol-form">
                                    <div id="inputs">
                                            @foreach ($tournament->tournament_prize as $index => $prizepools)
                                            <div class="form-prize @if($index > 0) pt-3 mt-3 border-top @endif">
                                                <div class="input-group">
                                                    <select class="form-select prize-dropdown" name="prizepool_id[]">
                                                        <option value="">Pilih Hadiah</option>
                                                        @foreach ($prizes as $prize)
                                                            <option value="{{ $prize->id }}"
                                                                @php
                                                                $selectedPrizeIds = old('prizepool_id', [$prizepools->id]); // Ensure it's an array
                                                                if (!is_array($selectedPrizeIds)) {
                                                                    $selectedPrizeIds = [$selectedPrizeIds];
                                                                } @endphp
                                                                {{ in_array($prize->id, $selectedPrizeIds) ? 'selected' : '' }}>
                                                                {{ $prize->prize }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('prizepool_id')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                    @if($index === 0)
                                                    <button type="button" class="addRow rounded-end btn btn-info"><i
                                                            class="ti ti-plus fs-2xl"></i></button>
                                                    @endif

                                                    <button type="button" class="removeRow @if($index === 0) d-none @endif btn btn-danger"><i
                                                            class="ti ti-trash fs-2xl"></i></button>
                                                </div>

                                                <div class="w-100 mt-3 noteForm" style="display: block;">
                                                    <input class="form-control" type="text"
                                                        placeholder="Isikan deskripsi hadiah" value="{{ $prizepools->note }}" name="note[]" />
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="contact" class="form-label">Kontak Penanggungjawab</label>
                                <input type="number" class="form-control @error('contact') is-invalid @enderror"
                                    id="contact" name="contact" value="{{ old('contact', $tournament->contact) }}">
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
                                            {{ old('categories_id', $tournament->categories_id) == $kat->id ? 'selected' : '' }}>
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
                                    id="images" name="images">
                                @if ($tournament->images)
                                    <img src="{{ asset('storage/' . $tournament->images) }}" alt=""
                                        class="w-100 mt-3 rounded-3">
                                @else
                                    No Image
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
                                <textarea name="description" id="custom-summernote" class="custom-summernote" aria-label="With textarea">{{ old('description', $tournament->description) }}</textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- /Full Editor -->

                            <div class="mb-3">
                                <label for="rule" class="form-label">Aturan Main</label>
                                <textarea name="rule" id="summernoteModalRule" placeholder="Jelaskan aturan main dalam turnamen"
                                    class="form-control" aria-label="With textarea">{{ old('rule', $tournament->rule) }}</textarea>

                                @error('rule')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="paidment" class="form-label">Pilih Status Pembayaran</label>
                                <select name="paidment" id="paidment" class="form-control">
                                    <option value="Berbayar" {{ old('paidment') == 'Berbayar' ? 'selected' : '' }}>
                                        Berbayar</option>
                                    <option value="Gratis" {{ old('paidment') == 'Gratis' ? 'selected' : '' }}>Gratis
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3" id="nominal" style="display: none;">
                                <label for="nominal_input" class="form-label">Masukkan Nominal</label>
                                <input type="text" name="nominal" id="nominal_input" value="{{ old('nominal') }}"
                                    class="form-control" />

                                @error('nominal')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-between">
                            <button type="button" class="btn btn-secondary"
                                onclick="window.location.href='/ptournament'">Batal</button>

                            <div class="d-flex align-items-center gap-2">
                                <button type="button" disabled id="prevBtn" onclick="nextPrev(-1)"
                                    class="btn btn-danger">Kembali</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)"
                                    class="btn btn-success">Lanjut</button>
                                <button type="submit" id="submitButton"
                                    class="btn d-none btn-success">Perbaharui</button>
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
    {{-- </div> --}}
@endsection

@push('script')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    {{-- script untuk memunculkan form nominal apabila memilih paid --}}
    {{-- <script>
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
</script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function toggleDiv1() {
                let value = document.getElementById("paidment").value;
                let div = document.getElementById("nominal");
                let inputNominal = document.getElementById("nominal_input");

                if (value === "Berbayar") {
                    div.style.display = "block";
                    inputNominal.value =
                    "{{ old('nominal', (int) $tournament->nominal ?? '') }}"; // Set old value to the input
                } else {
                    div.style.display = "none";
                    inputNominal.value = ""; // Clear input value if not Berbayar
                }
            }

            // Initialize the state on page load
            toggleDiv1();

            // Add event listener for the dropdown change
            document.getElementById("paidment").addEventListener('change', toggleDiv1);
        });
    </script>
    {{-- script untuk form wizard --}}
    <script>
        var currentTab = 0;
        showTab(currentTab);

        @if ($errors->any())
            swal({
                title: "Error",
                text: "{{ $errors->all()[0] }}",
                icon: "error",
                button: "ok",
            });
        @endif

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

            if (currentTab >= 1) {
                $('#prevBtn').removeAttr('disabled');
            } else {
                $('#prevBtn').attr('disabled', 'disabled');
            }

            if (currentTab == (x.length - 1)) {
                $('#nextBtn').addClass('d-none');
                $('#submitButton').removeClass('d-none');
            } else {
                $('#nextBtn').removeClass('d-none');
                $('#submitButton').addClass('d-none');
            }

            if (currentTab >= x.length) {
                document.getElementById("regForm").action = "{{ route('ptournament.store') }}";
                document.getElementById("regForm").submit();
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

                console.log(templateRow.find('select'))

                templateRow.find('select').val();
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
            $('#custom-summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['insert', ['link', 'picture']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                ],
            });
        });
    </script>
@endpush
