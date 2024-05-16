@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">Daftar Hadiah Tournament</h5>

        <div class="card-header d-flex justify-content-between align-items-center">
            <a type="button" class="btn btn-primary" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal"
                style="background-color:rgb(40, 144, 204); color:#fff;">
                Tambahkan Hadiah
            </a>


            <form action="{{ route('category.index') }}" method="get">
                @csrf
                <div class="input-group mb-3">
                    <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;" />
                    <button type="submit" class="btn btn-secondary">Cari</button>
                </div>
            </form>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Hadiah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($prizepool as $key => $a)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $a->prize }}</td>
                            <td style="width: 15%">
                                <div class="actions-btn">
                                    <form action="{{ route('admin.destroyPrize', ['id' => $a->id]) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none" class="badge bg-label-danger me-1 border-0" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                                <path fill="#FA7070" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                            </svg>
                                        </button>
                                    </form> 
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <div class="text-center py-4">
                                    <h3 class="mb-2">Tidak Ada Data</h3>
                                    <p class="m-0 text-muted">Tambahkan data supaya muncul disini.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="tambahModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Tambahkan Hadiah</h6>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.storePrize') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="prize" class="form-label">Hadiah</label>
                            <input type="text" class="form-control @error('prize') is-invalid @enderror" id="prize"
                                name="prize" value="{{ old('prize') }}" placeholder="Masukkan nama hadiah" />
                            @error('prize')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="pt-2 d-flex gap-3 justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

 @section('content')
 @if (session('success'))
    <!-- Modal Success -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">SUCCESS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Success -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });
    </script>
@endif
@if (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif


