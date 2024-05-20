@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <a type="button" class="btn btn-primary" data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#tambahModal"
                style="background-color:rgb(40, 144, 204); color:#fff;">
                Tambahkan Game
            </a>

            <form action="{{ route('category.index') }}" method="get">
                <div class="input-group mb-3">
                    <input type="search" name="search" class="form-control" placeholder="Cari sesuatu&hellip;"
                        value="{{ old('search', request('search')) }}" />
                    <button type="submit" class="btn btn-secondary">Cari</button>
                </div>
            </form>

        </div>
        <div class="table-responsive">
            <table class="table table-hover table-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Cover</th>
                        <th>Game</th>
                        <th>Jumlah Anggota / Tim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset("storage/{$category->photo}") }}" class="rounded-3" height="96px"
                                    alt="{{ $category->name }}" />
                            </td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->membersPerTeam }} orang / tim</td>
                            <td>
                                <button type="button" class="badge bg-label-warning me-1 border-0" style="background: none"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $category->id }}">
                                    <i class="ti ti-pencil"></i>
                                </button>
                                <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none"
                                        class="badge bg-label-danger me-1 border-0"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $categories->links() }}


    <div class="modal fade" tabindex="-1" id="tambahModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Tambahkan Kategori</h6>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Kategori</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" placeholder="Masukkan nama kategori" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto Cover</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo"
                                name="photo">
                            @if (old('photo'))
                                <img id="preview" src="{{ asset('storage/' . old('photo')) }}" alt="Old gambar"
                                    style="max-width: 100px; max-height: 100px;">
                            @endif
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="membersPerTeam" class="form-label">Anggota Per Tim</label>
                            <input type="number" class="form-control @error('membersPerTeam') is-invalid @enderror"
                                id="membersPerTeam" value="{{ old('membersPerTeam') }}" name="membersPerTeam">
                            @error('membersPerTeam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="pt-2 d-flex gap-3 justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($categories as $key => $category)
        <div class="modal fade" tabindex="-1" id="editModal{{ $category->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Edit Kategori</h6>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="Category" class="form-label">Kategori</label>
                                <input type="text" class="form-control @error('name_update') is-invalid @enderror"
                                    id="name" name="name_update" value="{{ old('name_update', $category->name) }}">
                                @error('name_update')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Foto Cover</label>
                                <input type="file" class="form-control @error('photo_update') is-invalid @enderror"
                                    id="photo" name="photo_update" />

                                @if ($category->photo)
                                    <img src="{{ asset('storage/' . $category->photo) }}" class="w-100 mt-3 rounded-3"
                                        alt="{{ $category->name }}" />
                                @else
                                    No Image
                                @endif
                                @error('photo_update')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="membersPerTeam" class="form-label">Anggota per Tim</label>
                                <input type="number"
                                    class="form-control @error('membersPerTeam_update') is-invalid @enderror"
                                    id="membersPerTeam" name="membersPerTeam_update"
                                    value="{{ old('membersPerTeam_update', $category->membersPerTeam) }}">
                                @error('membersPerTeam_update')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
