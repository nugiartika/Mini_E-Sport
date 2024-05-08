@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">List Users</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="table-border-bottom-0">
                    @forelse ($users as $index)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-user text-primary display-6"></i>
                                    <span class="fw-medium">{{ $index->name }}</span>
                                </div>
                            </td>
                            <td>{{ $index->email }}</td>
                            <td>{{ \Carbon\Carbon::parse($index->created_at)->isoFormat('D MMMM YYYY') }}</td>
                            <td>
                                <form action="{{ route('deleteUser', ['idUser' => $index->id]) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="action" value="reject">
                                    <button type="submit" class="btn p-0 dropdown-toggle hide-arrow"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24">
                                            <path fill="#FA7070"
                                                d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                        </svg></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                    style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
                                <h1>Tidak Ada Data</h1>
                            </div>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
