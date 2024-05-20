@extends('user.layouts.app')


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

                            @foreach ($teams as $team)
                                @php
                                    $membersPerTeam = $team->tournament->category->membersPerTeam;
                                @endphp
                            @endforeach

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
                                        <label for="email{{ $i }}" class="form-label">anggota
                                            {{ $i-1 }}</label>

                                            <select type="text"
                                                class="form-control @error('nickname.' . ($i - 1)) is-invalid @enderror"
                                                id="email{{ $i }}" name="email[]" placeholder="Masukkan akun pengguna lain">
                                                <option>Pilih Akun Pengguna</option>
                                                @foreach ($user->where('role', 'user') as $u )
                                                <option value="{{ $u->id }}"
                                                    {{ old('email[]') == $u->id ? 'selected' : '' }}>
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
                                            <option>Pilih Akun Pengguna</option>
                                            @foreach ($user->where('role', 'user') as $u )
                                                <option value="{{ $u->id }}"
                                                    {{ old('email[]') == $u->id ? 'selected' : '' }}>
                                                    {{ $u->email }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('nickname_cadangan.' . ($i - 1))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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

    <!-- END: Page JS-->
@endsection
