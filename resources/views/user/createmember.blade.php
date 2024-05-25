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
                    <form action="{{ route('member.store') }}" method="POST">
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
                                                placeholder="Masukkan nickname">

                                        @else
                                        <label for="nickname{{ $i }}" class="form-label">anggota
                                            {{ $i-1 }}</label>

                                            <select type="text"
                                                class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="nickname{{ $i }}" name="nickname[]" placeholder="Masukkan akun pengguna lain">
                                                <option value="">Pilih Akun Pengguna</option>
                                                @foreach ($user->where('role', 'user') as $u )
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
                                                value="{{ old('member.' . ($i - 1)) }}" placeholder="Masukkan id game" required>
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
                            <h5>pemain cadangan</h5><br>

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
                                            @foreach ($user->where('role', 'user') as $u )
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
                                        value="{{ old('member_cadangan.' . ($i - 1)) }}" placeholder="Masukkan id game">
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

@endpush
