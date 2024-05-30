@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">

            <form action="{{ route('income.index') }}" method="get">
                <div class="input-group mb-3">
                    <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;"
                        value="{{ old('search', request('search')) }}" />
                    <button type="submit" class="btn btn-secondary">Cari</button>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row gy-4 gy-sm-1">
                        <div class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
                            <div>
                                <h6 class="mb-2 fs-6">Saldo Penyelenggara</h6>
                                <h6 class="mb-2">
                                    @if (Auth::user()->id == $id_organizer)
                                        Rp . {{ number_format($totalIncomeOrganizer, 2, ',', '.') }}
                                    @else
                                        Rp. 0
                                    @endif
                                </h6>
                            </div>
                            <span class="avatar me-sm-4 ms-4 mt-1">
                                <span class="avatar-initial bg-label-secondary rounded"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-coin">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path
                                            d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                                        <path d="M12 7v10" />
                                    </svg></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class="table-responsive">
        <table class="table table-hover table-nowrap">
            <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Nama Tournament</th>
                    <th>Jumlah Pendaftar</th>
                    <th>Biaya Register</th>
                    <th>Total Pembayaran</th>
                    <th>Penghasilan Penyelenggara</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($result as $item)
                @if ($acceptedUploads->contains('tournament_id', $item['tournament']->id))

                @if ($item['total_teams'] != 0)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['tournament']->name }}</td>
                    <td>{{ $item['total_teams'] }}/ {{$item['tournament']->slotTeam}} Tim</td>
                    <td> Rp . {{ number_format($item['biaya_register'],2,',','.') }}</td>
                    <td> Rp . {{ number_format($item['total_nominal'],2,',','.') }}</td>
                    <td> Rp . {{ number_format($item['income_organizer'],2,',','.') }}</td>
                </tr>
                @endif
                @endif

                @empty
                    <tr>
                        <td colspan="6">
                            <div class="d-flex flex-column justify-content-center">
                                <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                    style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
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
    {{ $paginatedResult->links() }}

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
