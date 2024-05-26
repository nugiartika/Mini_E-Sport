@extends('layouts.panel')

@section('content')
    <div class="d-flex pb-4">
        <a href="{{ route('user.tournament') }}" class="btn btn-primary d-flex gap-2 align-items-center"><i
                class="ti ti-arrow-left"></i><span>Kembali Ke Daftar Turnamen</span></a>
    </div>

    <div class="row">
        <div class="col-md-3">
            <img class="w-100 rounded-4" src="{{ asset('storage/' . $teams->profile) }}" alt=" {{ $teams->name }}" />
        </div>
        <div class="col-md-9">
            <h1 class="title-anim"> Nama Tim : {{ $teams->name }}</h1>
            <p class="text-anim">{!! $teams->description !!}</p>

            <div class="row pt-4">
                <div class="col-md-6 border-end p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-user"></i>
                        <span>{{ $teams->user->name }}</span>
                    </div>
                </div>
                <div class="col-md-6 p-3 border-bottom">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-calendar"></i>
                        <span>
                            {{ Carbon\Carbon::parse($teams->created_at)->translatedFormat('d F Y') }}</span>
                    </div>
                </div>
                <div class="col-md-6 border-end p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-device-gamepad-2"></i>
                        <span>{{ $teams->category->name }}</span>
                    </div>
                </div>

                <div class="col-md-6 p-3">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="ti ti-users-group"></i>
                        <span>{{ $teamsCount }} tim</span>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <br>


    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Table Pemain</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemain</th>
                        <th>Status</th>
                        <th>Ketua</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($members as $index => $member) <!-- Ganti $members dengan $member untuk variabel iterasi -->
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $member->nickname }}</td> <!-- Pastikan akses ke properti name -->
                        <td>Pemain : {{ $member->status }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ $member->is_captain }}</span></td> <!-- Asumsi ada properti is_leader -->
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">No members found.</td> <!-- Pesan jika tidak ada data -->
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
