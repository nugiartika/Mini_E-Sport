@extends('layouts.panel')

@section('content')
@section('style')
<style>
    .custom-icon-detail {
        background-color: #6b5fe5;
        color: #ffffff;
        width: 40px;
        height: 40px;
        display: inline-block;
        border: 2px solid #7367f0;
        /* Border awal transparan */
        border-radius: 50%;
        /* Membuat border lingkaran */
        transition: border-color 0.3s ease;
        /* Transisi warna border saat hover */
    }

    .custom-icon-detail:hover {
        background-color: #6b5fe5;
        color: #ffffff;
        transform: translateY(-3px);
        /* Bergerak ke atas saat dihover */
    }
</style>
@endsection
<div class="row">
    <div class="col-4">
        <form action="{{ route('organizerincome') }}" method="get">
            <div class="input-group mb-3">
                <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;" value="{{ old('search', request('search')) }}" />
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
    </div>
    <div class="col-5"></div>
    <div class="col-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="row gy-4 gy-sm-1">
                    <div class="d-flex justify-content-end align-items-start card-widget-1 pb-3 pb-sm-0">
                        <div>
                            <h6 class="mb-2 fs-6">Saldo Penyelenggara</h6>
                            <h6 class="mb-2">
                                @if (Auth::user()->id == $id_organizer)
                                Rp . {{ number_format($totalIncomeOrganizer, 2, ',', '.') }}
                                @else
                                Rp . 0
                                @endif
                                
                            </h6>
                        </div>
                        <span class="avatar ms-4 mt-1">
                            <span class="avatar-initial bg-label-primary rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                                    <path d="M12 7v10" />
                                </svg></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($result as $item)
    @if ($item['total_teams'] != 0)
    <div class="col-md-6 col-xxl-4 mb-4">
        <div class="card h-100">
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center pb-4">
                    <h4 class="mb-0">{{ $item['tournament']->name }}</h4>
                </div>
                <div class="tournament-img mb-8 position-relative">
                    <div class="img-area overflow-hidden position-relative rounded" style="width: auto; height: 400px; border-radius: .5rem;">
                        <img class="w-100" style="object-fit: cover; width: 100%; height: 100%;" src="{{ asset("storage/{$item['tournament']->images}") }}" alt="tournament">
                    </div>
                </div>
                <div class="py-3">
                    <div class="d-flex gap-2 border-bottom justify-content-between pb-3 mb-3">
                        <strong>Tanggal</strong>
                        <span>{{ \Carbon\Carbon::parse($item['tournament']->permainan)->translatedFormat('d F Y') }}</span>
                    </div>

                    <div class="d-flex gap-2 border-bottom justify-content-between pb-3 mb-3">
                        <strong>Biaya Register</strong>
                        <span>Rp. {{ number_format($item['tournament']->nominal, 0, '.', ',') }}</span>
                    </div>
                    <div class="d-flex gap-2 border-bottom justify-content-between pb-3 mb-3">
                        <strong>Total Pembayaran</strong>
                        <span>{{ number_format($item['total_nominal'], 0, '.', ',') }}</span>
                    </div>
                    <div class="d-flex gap-2 border-bottom justify-content-between pb-3 mb-3">
                        <strong>Penghasilan Penyelenggara</strong>
                        <span>{{ number_format($item['income_organizer'], 0, '.', ',') }}</span>
                    </div>
                    <div class="hr-line line3"></div>
                    <div class="card-more-info d-flex justify-content-between align-items-center mt-6">
                        <!-- Informasi Jumlah Teams -->
                        <div class="teams-info d-flex align-items-center gap-3">
                            <div class="teams d-flex align-items-center gap-1">
                                <i class="ti ti-users fs-base"></i>
                                <span class="tcn-6 fs-sm">
                                    @if ($item['total_teams'])
                                    {{ $item['total_teams'] }}/{{ $item['tournament']->slotTeam }}
                                    Tim
                                    @else
                                    0/{{ $item['tournament']->slotTeam }} Tim
                                    @endif
                                </span>
                            </div>
                        </div>

                        <button class="custom-icon-detail" data-bs-toggle="modal" data-bs-target="#detailPenghasilan{{$item['tournament']->id}}" style="display: flex; justify-content: center; align-items: center;" title="Detail Penghasilan">
                            <i class="ti ti-eye fs-3xl"></i>
                        </button>
                        <div class="modal" tabindex="-1" id="detailPenghasilan{{$item['tournament']->id}}" style="color: #ffffff;">
                            <div class="modal-dialog modal-lg modal-dialog-split">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Detail Penghasilan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-nowrap">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Tanggal diunggah</th>
                                                        <th>Diunggah oleh</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($item['upload_details'] as $upload)
                                                    @if ($upload['tournament_id'] == $item['tournament']->id)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $upload['tanggal']->translatedFormat('d M Y H:i')}}</td>
                                                        <td>{{ $upload['user'] }}</td>
                                                    </tr>
                                                    @endif
                                                    @empty
                                                    <tr>
                                                        <td colspan="6">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <img src="{{ asset('assets/img/No-data.png') }}" alt="" style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                                                                <h4 class="table-light" style="text-align: center;">
                                                                    Data Tidak Tersedia
                                                                </h4>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

@endsection


@push('script')
<script>
    function confirmDeletion(categoryId) {
        Swal.fire({
            title: "Apa kamu yakin?",
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + categoryId).submit();
            }
        });
    }
</script>
@endpush