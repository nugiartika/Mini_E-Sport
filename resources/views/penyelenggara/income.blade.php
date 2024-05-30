@extends('layouts.panel')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <form action="{{ route('income.index') }}" method="get">
            <div class="input-group mb-3">
                <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;" value="{{ old('search', request('search')) }}" />
                <button type="submit" class="btn btn-secondary">Cari</button>
            </div>
        </form>

    </div>
    <div class="table-responsive">
        <table class="table table-hover table-nowrap">
            <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Nama Tournament</th>
                    <th>Jumlah Pendaftar</th>
                    <th>Total Penghasilan</th>
                    <th>Penghasilan Penyelenggara</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($result as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['tournament']->name}}</td>
                    <td>{{ $item['total_teams'] }}</td>
                    <td>{{ $item['total_nominal'] }}</td>
                    <td>{{ $item['income_organizer'] }}</td>
                </tr>
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