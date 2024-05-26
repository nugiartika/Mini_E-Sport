@extends('layouts.panel')


@section('style')

    <style>


        input{
            color: #939393;
        }


    /* Gambar yang digunakan untuk tombol radio */
    .custom-radio input[type="radio"] {
        display: none;
    }


    /* Style ketika tombol radio dipilih */
    .custom-radio input[type="radio"]:checked + .radio-dot {
        background-color: #2196F3; /* Warna tanda centang saat dipilih */
    }


</style>
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="margin-top: 10%; color: #939393">


         <!-- Second column -->
    <div class="col-12 col-lg-4">
        <!-- Pricing Card -->
    <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title mb-0">new team</h5>
          </div>
          <div class="card-body">
        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="customer-avatar-section">
            <div class="mb-3">
                <label for="profile" class="form-label">PROFILE</label>
                <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" onchange="previewImage(event)">
                @error('profile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <!-- Discounted Price -->
            <div class="mb-3">
                <label for="name" class="form-label">NAME TEAM</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                <input type="hidden" name="tournament_id" value="{{ $selectedTournamentId }}">
                <button type="submit" class="btn btn-primary ms-2">SAVE</button>

        </form>
     </div>
    </div>
    </div>
</div>
@endsection
{{--
@push('script')

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

@endpush --}}
