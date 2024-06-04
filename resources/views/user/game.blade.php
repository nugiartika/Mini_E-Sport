@extends('layouts.panel')

@section('content')
    <div class="row mb-5">
        @forelse ($categories as $category)
            <div class="col-md-4 col-lg-3 mb-3">
                <div class="card h-100">
                    {{-- <div class="gambar" style="width:287px; height:200px;"> --}}
                    <img class="card-img-top" src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->name }}" style="object-fit: cover; height:100%; widht:100%;"/>
                    {{-- </div> --}}
                    <div class="card-body text-center">
                        <div class="d-flex gap-2 justify-content-between pb-3 mb-3 border-bottom">
                            <strong>Nama Game</strong>
                            <span>{{ $category->name }}</span>
                        </div>
                        <div class="d-flex gap-2 justify-content-between">
                            <strong>Anggota per Tim</strong>
                            <span>{{ $category->membersPerTeam }} orang</span>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <div class="col-lg-12">
                <center>
                    <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                        style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
                </center>
                <h1 class="table-light" style="text-align: center;">
                    Data Tidak Tersedia
                </h1>
            </div>
        @endforelse
    </div>
@endsection
