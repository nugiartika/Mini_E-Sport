@extends('layouts.panel')

@section('content')
    <div class="card">
        <h5 class="card-header pb-0 pt-0 mb-0 mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user') && !request()->has('action') && !request()->has('role') ? 'active' : '' }}"
                            href="{{ route('user.index') }}">Semua Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user') && request()->has('action') && request()->action == 'approval' ? 'active' : '' }}"
                            href="{{ route('user.index', ['action' => 'approval']) }}">Penerimaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user') && request()->has('role') && request()->role == 'user' ? 'active' : '' }}"
                            href="{{ route('user.index', ['role' => 'user']) }}">Pengguna Aktif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user') && request()->has('role') && request()->role == 'organizer' ? 'active' : '' }}"
                            href="{{ route('user.index', ['role' => 'organizer']) }}">Penyelenggara Aktif</a>
                    </li>
                </ul>


                <form action="{{ request()->fullUrl() }}" method="GET" class="d-flex mt-n3">
                    @if (request()->input('role'))
                        <input type="hidden" name="role" value="{{ old('role', request()->input('role')) }}" />
                    @endif
                    @if (request()->input('action'))
                        <input type="hidden" name="action" value="{{ old('action', request()->input('action')) }}" />
                    @endif

                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;"
                            value="{{ old('search', request()->input('search')) }}" />
                        <button type="submit" class="btn btn-secondary">Cari</button>
                    </div>
                </form>
            </div>
        </h5>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Surel</th>
                        <th>Tanggal</th>
                        <th>Peran / Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="table-border-bottom-0">
                    @forelse ($users as $user)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="fw-medium">{{ $user->name }}</span>
                                </div>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ \Carbon\Carbon::parse($user->created_at)->locale('id')->isoFormat('D MMMM YYYY') }}
                            </td>
                            <td>
                                @if ($user->role === 'user')
                                    <span class="badge bg-label-success">Pengguna</span>
                                @elseif($user->role === 'admin')
                                    <span class="badge bg-label-primary">Administrator</span>
                                @elseif($user->role === 'organizer')
                                    <span class="badge bg-label-info">Penyelenggara</span>
                                @endif

                                <span>/</span>

                                @if ($user->status === 'active')
                                    <span class="badge bg-label-success">Aktif</span>
                                @elseif($user->status === 'reject')
                                    <span class="badge bg-label-danger">Tertolak</span>
                                @elseif($user->status === 'pending')
                                    <span class="badge bg-label-warning">Menunggu Konfirmasi</span>
                                @endif
                            </td>
                            <td>
                                @if (request()->has('action') && request()->action === 'approval')
                                    <form id="updateForm{{ $user->id }}"
                                        action="{{ route('user.update', $user->id) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('put')

                                        <div class="d-flex gap-2">
                                            <div>
                                                <input type="radio" onchange="submitForm(this)" class="btn-check"
                                                    name="status" id="reject" value="reject" autocomplete="off" />
                                                <label class="btn btn-sm btn-danger" for="reject">Tolak</label>
                                            </div>

                                            <div>
                                                <input type="radio" onchange="submitForm(this)" class="btn-check"
                                                    name="status" id="active" value="active" autocomplete="off" />
                                                <label class="btn btn-sm btn-success" for="active">Terima</label>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="action" value="reject">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" onclick="confirmDeletion({{ $user->id }});">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                            <path fill="#FA7070" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                        </svg>
                                    </button>
                                </form>

                                @endif
                            </td>
                        </tr>
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

    {{ $users->links() }}
@endsection

@push('script')
    <script>
        function submitForm(radioBtn) {
            var form = radioBtn.closest('form').submit();
        }
    </script>


<script>
    function confirmDeletion(userId) {
        Swal.fire({
            title: "Apa kamu yakin?",
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + userId).submit();
            }
        });
    }
</script>
@endpush
