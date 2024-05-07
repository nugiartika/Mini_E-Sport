@extends('user.layouts.app')

@section('content')
<div class="row mb-5">
@foreach ($categories as $category)
<div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <img class="card-img-top" src="{{ asset('storage/'. $category->photo) }}" alt="Gambar Game    " />
      <div class="card-body text-center">
        <h5 class="card-title">Nama Game : {{ $category->name }}</h5>
        <p class="card-text ">
         Anggota per Tim : {{ $category->membersPerTeam }}
        </p>
      </div>
    </div>
  </div>

@endforeach
  </div>
  <!-- Examples -->


@endsection

