@extends('user.layouts.app')

@section('content')
    <div class="row mb-5">
        @foreach ($categories as $category)
            <div class="col-md-4 col-lg-3 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('storage/' . $category->photo) }}" alt="Gambar Game    " />
                    <div class="card-body text-center">
                        <h5 class="card-title">Nama Game : {{ $category->name }}</h5>
                        <p class="card-text ">
                            Anggota per Tim : {{ $category->membersPerTeam }}
                        </p>
                        {{-- <a href="" data-bs-target="#detail{{ $category->id }}" data-bs-toggle="modal" class="btn btn-primary">
                            Connected
                        </a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- @foreach ($categories as $category)
    <div class="modal fade" id="detail{{ $category->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel{{ $category->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Tournamnent</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="font-weight: bold;">Nama Tournament : <span
                                                id="detail-name" style="font-weight: normal;">
                                                {{ $category->name }}</span>
                                        </li>
                                        <li class="list-group-item" style="font-weight: bold;">Member Tiap TIm : <span
                                                id="detail-email" style="font-weight: normal;">
                                                {{ $category->membersPerTeam }}</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}
