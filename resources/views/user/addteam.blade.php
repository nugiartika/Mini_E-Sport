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
    <div class="row" style="margin-top: 10%; color: #939393">


        <!-- Second column -->
        <div class="col-12 col-lg-4 mx-auto">
            <!-- Pricing Card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Buat Tim Baru</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('team.storeteam') }}" method="POST" enctype="multipart/form-data"
                        class="row g-3">
                        @csrf
                        <div class="customer-avatar-section">
                            <div class="mb-3">
                                <label for="profile" class="form-label">Foto</label>
                                <input type="file" class="form-control @error('profile') is-invalid @enderror"
                                    id="profile" name="profile" onchange="previewImage(event)">
                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <!-- Discounted Price -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Tim</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="categories" class="form-label">Game</label>
                                    <select class="form-control @error('categories_id') is-invalid @enderror" id="categories" name="categories_id" aria-label="Default select example">
                                        <option value="" selected>Pilih Game</option>
                                        @foreach ($category as $x)
                                            <option value="{{ $x->id }}" {{ old('categories_id') == $x->id ? 'selected' : '' }}>
                                                {{ $x->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                @error('categories_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="tournament_id" value="{{ $selectedTournamentId }}">
                            <button type="submit" class="btn btn-primary ms-2">Buat Baru</button>

                    </form>

                </div>
            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            profileInput.addEventListener('change', function() {
                const file = this.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.setAttribute('src', e.target.result);
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    previewImage.setAttribute('src', '{{ asset('images/LOGO/profil.jpeg') }}');
                }
            });
        });
    </script>
@endsection
