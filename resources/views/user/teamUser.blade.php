@extends('user.layouts.app')
@section('content')
<div class="row mb-5">
    @foreach ($teams as $team)
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
          <img class="card-img-top" src="{{ asset('storage/'. $team->profile) }}" alt="Gambar Tim" />
          <div class="card-body text-center">
            <h5 class="card-title">Nama Team : {{ $team->name }}</h5>
            <p class="card-text ">
             Tournament : {{ $team->tournament->name }}
            </p>
            
          </div>
        </div>
      </div>

    @endforeach
      </div>


@endsection
