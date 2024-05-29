@extends('layouts.panel')


@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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

        .select2-container--default .select2-results>.select2-results__options {
            max-height: 200px;
            overflow-y: auto;
            background-color: #2f3349;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #b6bee3;
            line-height: 28px;
        }

        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
            background-color: #0000;
            color: white;
        }

        .select2-container--default .select2-selection--single {
            background-color: #2f3349;
            border: 1px solid #aaa;
            border-radius: 4px;
            color: #b6bee3;
        }
        .select2-container--default .select2-results__option--selected {
    background-color: #50525d;
        }
        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
    background-color: #50525d;
    color: white;
}
.select2-search--dropdown {
    display: block;
    padding: 4px;
    color: #ffff;
}
.select2-search--dropdown {
    display: block;
    padding: 4px;
    color: #ffff;
}

    .select2-search .select2-search--dropdown{
background-color: #b6bee3;
    }
    .select2-search__field{

    }
    </style>
@endsection
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 10%; color: #939393">

        <div class="col-12 col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <input type="text" id="userSearch" class="form-control" placeholder="Search for users by email...">
                        <div id="searchResults" class="mt-2"></div>
                    </div>

                    <form action="{{ route('member.store') }}" method="POST">
                        @csrf
                        <div class="customer-avatar-section">
                            @php
                                $loggedInUserName = auth()->user()->email;
                            @endphp

                            <h5>Pemain Inti</h5><br>

                            @for ($i = 1; $i <= $membersPerTeam; $i++)
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        @if ($i === 1)
                                            <label for="nickname{{ $i }}" class="form-label">Kapten</label>
                                            <input type="text" class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror" id="nickname{{ $i }}" name="nickname[]" value="{{ old('nickname.' . ($i - 1), $loggedInUserName) }}"
                                            placeholder="Masukkan nickname" readonly>
                                        @else
                                            <label for="nickname{{ $i }}" class="form-label">Anggota {{ $i - 1 }}</label>
                                            <input type="text" class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror" id="nickname{{ $i }}" name="nickname[]" value="{{ old('nickname.' . ($i - 1)) }}" placeholder="Masukkan akun pengguna lain" readonly>
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
                            <h5>Pemain Cadangan</h5><br>

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
                            <button type="submit" class="btn btn-danger ms-2">SAVE</button>
                        </div>
                    </form>
                    {{-- <form action="{{ route('member.store') }}" method="POST">
                        @csrf
                        <div class="customer-avatar-section">
                            @php
                                $loggedInUserName = auth()->user()->email;
                            @endphp

                            <h5>Pemain Inti</h5><br>

                            @for ($i = 1; $i <= $membersPerTeam; $i++)
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        @if ($i === 1)
                                            <label for="nickname{{ $i }}" class="form-label">Kapten</label>

                                            <input type="text"
                                                class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="nickname{{ $i }}" name="nickname[]"
                                                value="{{ old('nickname.' . ($i - 1), $loggedInUserName) }}"
                                                placeholder="Masukkan nickname">
                                        @else
                                            <label for="nickname{{ $i }}" class="form-label">Anggota
                                                {{ $i - 1 }}</label>

                                            <select type="text"
                                                class="form-control js-example-basic-single @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="nickname{{ $i }}" name="nickname[]"
                                                placeholder="Masukkan akun pengguna lain">
                                                <option value="">Pilih Akun Pengguna</option>
                                                @foreach ($user->where('role', 'user') as $u)
                                                    <option value="{{ $u->email }}"
                                                        {{ old('nickname.' . ($i - 1)) == $u->email ? 'selected' : '' }}>
                                                        {{ $u->email }}
                                                    </option>
                                                @endforeach
                                            </select>
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
                                                value="{{ old('member.' . ($i - 1)) }}" placeholder="Masukkan id game"
                                                required>
                                        @else
                                            <input type="hidden"
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
                            <h5>Pemain Cadangan</h5><br>

                            @for ($i = 0; $i < 2; $i++)
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nickname_cadangan{{ $i }}" class="form-label">cadangan
                                            {{ $i + 1 }}</label>
                                        <select type="text"
                                            class="form-control @error('nickname_cadangan.' . ($i - 1)) is-invalid @enderror"
                                            id="nickname_cadangan{{ $i }}" name="nickname_cadangan[]"
                                            value="{{ old('nickname_cadangan.' . ($i - 1)) }}"
                                            placeholder="Masukkan nickname">
                                            <option value="">Pilih Akun Pengguna</option>
                                            @foreach ($user->where('role', 'user') as $u)
                                                <option value="{{ $u->email }}"
                                                    {{ old('nickname_cadangan[]') == $u->email ? 'selected' : '' }}>
                                                    {{ $u->email }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('nickname_cadangan.' . ($i - 1))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                        <input type="hidden"
                                            class="form-control @error('member_cadangan.' . ($i - 1)) is-invalid @enderror"
                                            id="member_cadangan{{ $i }}" name="member_cadangan[]"
                                            value="{{ old('member_cadangan.' . ($i - 1)) }}"
                                            placeholder="Masukkan id game">
                                    </div>
                                </div>
                                <input type="hidden" name="is_captain[]" value="false">
                                <input type="hidden" name="team_id" value="{{ $teamId }}">
                            @endfor
                            <br>
                            <button type="submit" class="btn btn-primary ms-2">SAVE</button>
                        </div>
                </div>
                </form> --}}

            </div>


        </div>



    </div>
@endsection

@push('script')
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
 </script> --}}
<script>
document.getElementById('userSearch').addEventListener('keyup', function() {
    var query = this.value;
    if (query.length > 2) {
        fetch('/search-users?query=' + query)
            .then(response => response.json())
            .then(data => {
                var resultsContainer = document.getElementById('searchResults');
                resultsContainer.innerHTML = '';
                data.forEach(user => {
                    var userElement = document.createElement('div');
                    userElement.className = 'search-result';
                    userElement.textContent = user.email;
                    userElement.dataset.email = user.email;

                    var addButton = document.createElement('button');
                    addButton.textContent = 'Add';
                    addButton.className = 'btn btn-sm btn-primary ms-4';
                    addButton.addEventListener('click', function(event) {
                        event.preventDefault();
                        var nicknameInputs = document.querySelectorAll('input[name="nickname[]"], input[name="nickname_cadangan[]"]');
                        for (var i = 0; i < nicknameInputs.length; i++) {
                            if (nicknameInputs[i].value === '') {
                                nicknameInputs[i].value = user.email;
                                break;
                            }
                        }
                        resultsContainer.innerHTML = '';
                    });

                    userElement.appendChild(addButton);
                    resultsContainer.appendChild(userElement);
                });
            });
    }
});


</script>
@endpush
