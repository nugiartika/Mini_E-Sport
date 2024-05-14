@extends('penyelenggara.layouts.app')

@section('content')


<h1>TOURNAMENT LIST</h1>

<section class="position-relative z-1" id="swiper-3d">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper swiper-3d-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($tournaments as $tournament)
                <div class="swiper-slide">
                    <div class="card-3d d-grid justify-content-center p-3">
                        <div class="img-area w-100 mb-8 position-relative">
                            <img class="w-100" src="{{ asset('storage/' . $tournament->photo) }}" alt="game">
                            <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                <span class="dot-icon alt-icon ps-3">Playing</span>
                            </span>
                        </div>
                        <h5 class="card-title text-center tcn-1 mb-4 title-anim">{{ $tournament->name }}</h5>
                        <div class="d-center">
                            <div class="card-info d-center gap-3 py-1 px-3">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                        <i class="ti ti-calendar-due"></i>{{ $tournament->pendaftaran ? \Carbon\Carbon::parse($tournament->pendaftaran)->format('d F Y') : '-' }}
                                    </span>
                                </div>
                                <div class="v-line"></div>
                                <div class="d-flex align-items-center gap-2">
                                    <img class="w-100" src="assets/img/tether.png" alt="tether">
                                    <span class="tcn-1 fs-xs">$49.97</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-btn-area d-center gap-6">
            <div class="swiper-btn swiper-3d-button-prev box-style">
                <i class="ti ti-chevron-left fs-xl"></i>
            </div>
            <div class="swiper-btn swiper-3d-button-next box-style">
                <i class="ti ti-chevron-right fs-xl"></i>
            </div>
        </div>
    </div>
</section>




@endsection


