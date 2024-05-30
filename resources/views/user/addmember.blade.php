@extends('layouts.panel')


@section('style')
    <style>
        input {
            color: #939393;
        }

        /* Gambar yang digunakan untuk tombol radio */
        .custom-radio input[type="radio"] {
            display: none;
        }

        /* Style ketika tombol radio dipilih */
        .custom-radio input[type="radio"]:checked+.radio-dot {
            background-color: #2196F3;
            /* Warna tanda centang saat dipilih */
        }
    </style>
@endsection
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 10%; color: #939393">

        <div class="col-12 col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <input type="text" id="userSearch" class="form-control" placeholder="Cari Email Pengguna...">
                        <div id="searchResults" class="mt-2"></div>
                    </div>

                    <form action="{{ route('team.storemember') }}" method="POST">
                        @csrf
                        <div class="customer-avatar-section">
                            @php
                                $loggedInUserName = auth()->user()->email;
                            @endphp

                            <h5>pemain inti</h5><br>

                            @for ($i = 1; $i <= $membersPerTeam; $i++)
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        @if ($i === 1)
                                            <label for="nickname{{ $i }}" class="form-label">Kapten</label>
                                            <input type="text"
                                                class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="nickname{{ $i }}" name="nickname[]"
                                                value="{{ old('nickname.' . ($i - 1), $loggedInUserName) }}"
                                                placeholder="Masukkan nickname" readonly>
                                        @else
                                            <label for="nickname{{ $i }}" class="form-label">Anggota
                                                {{ $i - 1 }}</label>
                                            <input type="text"
                                                class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="nickname{{ $i }}" name="nickname[]"
                                                value="{{ old('nickname.' . ($i - 1)) }}"
                                                placeholder="Masukkan akun pengguna lain" readonly>
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
                                        <input type="number" class="form-control @error('member.' . ($i - 1)) is-invalid @enderror" id="member{{ $i }}" name="member[]" value="{{ old('member.' . ($i - 1)) }}" placeholder="Masukkan id game" required>
                                        @else
                                        <input type="hidden" class="form-control @error('member.' . ($i - 1)) is-invalid @enderror" id="member{{ $i }}" name="member[]" value="{{ old('member.' . ($i - 1)) }}" placeholder="Masukkan id game">
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
                                        <label for="nickname_cadangan{{ $i }}" class="form-label">Cadangan {{ $i + 1 }}</label>

                                        <input type="text" class="form-control @error('nickname_cadangan.' . ($i)) is-invalid @enderror" id="nickname_cadangan{{ $i }}" name="nickname_cadangan[]"  value="{{ old('nickname_cadangan.' . ($i)) }}" placeholder="Masukkan akun pengguna lain" readonly>
                                        @error('nickname_cadangan.' . ($i))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input type="hidden" class="form-control @error('member_cadangan.' . ($i - 1)) is-invalid @enderror" id="member_cadangan{{ $i }}" name="member_cadangan[]" value="{{ old('member_cadangan.' . ($i - 1)) }}" placeholder="Masukkan id game">

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

@push('script')
<script>
   document.addEventListener('DOMContentLoaded', function () {
        function updateClearButton(input) {
            let clearButton = input.nextElementSibling;
            if (input.value.trim() !== '') {
                if (!clearButton || !clearButton.classList.contains('clear-btn')) {
                    clearButton = document.createElement('button');
                    clearButton.textContent = 'Hapus';
                    clearButton.className = 'btn btn-sm btn-danger ms-2 clear-btn mt-2';
                    clearButton.type = 'button'; // Ensure the button does not submit the form
                    clearButton.addEventListener('click', function () {
                        input.value = '';
                        input.dispatchEvent(new Event('input')); // Trigger input event to update the clear button
                    });
                    input.insertAdjacentElement('afterend', clearButton);
                }
            } else {
                if (clearButton && clearButton.classList.contains('clear-btn')) {
                    clearButton.remove();
                }
            }
        }

        document.querySelectorAll('input[name="nickname[]"], input[name="nickname_cadangan[]"]').forEach(function (input, index) {
            if (index !== 0) { // Exclude the first "nickname" input field where $i is equal to 1
                updateClearButton(input);

                input.addEventListener('input', function () {
                    updateClearButton(input);
                });
            }
        });

        // document.getElementById('userSearch').addEventListener('keyup', function () {
        //     var query = this.value;
        //     if (query.length > 2) {
        //         fetch('/search-users?query=' + query)
        //             .then(response => response.json())
        //             .then(data => {
        //                 var resultsContainer = document.getElementById('searchResults');
        //                 resultsContainer.innerHTML = '';
        //                 data.forEach(user => {
        //                     var userElement = document.createElement('div');
        //                     userElement.className = 'search-result d-flex justify-content-between';
        //                     userElement.textContent = user.email;
        //                     userElement.dataset.email = user.email;

        //                     var addButton = document.createElement('button');
        //                     addButton.textContent = 'Add';
        //                     addButton.className = 'btn btn-sm btn-primary ms-4 mt-2';
        //                     addButton.addEventListener('click', function (event) {
        //                         event.preventDefault();
        //                         var nicknameInputs = document.querySelectorAll('input[name="nickname[]"], input[name="nickname_cadangan[]"]');
        //                         for (var i = 0; i < nicknameInputs.length; i++) {
        //                             if (nicknameInputs[i].value === '') {
        //                                 nicknameInputs[i].value = user.email;
        //                                 nicknameInputs[i].dispatchEvent(new Event('input'));
        //                                 break;
        //                             }
        //                         }
        //                         resultsContainer.innerHTML = '';
        //                     });

        //                     userElement.appendChild(addButton);
        //                     resultsContainer.appendChild(userElement);
        //                 });
        //             });
        //     }
        // });
        document.getElementById('userSearch').addEventListener('keyup', function () {
            var query = this.value;
            if (query.length > 2) {
                fetch('/search-users?query=' + query)
                    .then(response => response.json())
                    .then(data => {
                        var resultsContainer = document.getElementById('searchResults');
                        resultsContainer.innerHTML = '';
                        data.forEach(user => {
                            var userElement = document.createElement('div');
                            userElement.className = 'search-result d-flex justify-content-between';
                            userElement.textContent = user.email;
                            userElement.dataset.email = user.email;

                            var addButton = document.createElement('button');
                            addButton.textContent = 'Add';
                            addButton.className = 'btn btn-sm btn-primary ms-4 mt-2';
                            addButton.addEventListener('click', function (event) {
                                event.preventDefault();
                                var nicknameInputs = document.querySelectorAll('input[name="nickname[]"], input[name="nickname_cadangan[]"]');
                                for (var i = 0; i < nicknameInputs.length; i++) {
                                    if (nicknameInputs[i].value === '') {
                                        nicknameInputs[i].value = user.email;
                                        nicknameInputs[i].dispatchEvent(new Event('input'));
                                        break;
                                    }
                                }
                                resultsContainer.innerHTML = '';
                                document.getElementById('userSearch').value = ''; // Clear the search input field
                            });

                            userElement.appendChild(addButton);
                            resultsContainer.appendChild(userElement);
                        });
                    });
            }
        });
    });


    </script>
@endpush
