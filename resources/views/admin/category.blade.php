@extends('admin.layouts.app')

{{-- @section('content') --}}
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

<body>
    <!-- Layout page -->
    <div class="layout-page">


        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Bootstrap Table with Header - Light -->
            <div class="card">
                <h5 class="card-header">Tournament Confirmation</h5>

                <div class="card-header d-flex justify-content-between align-items-center">
                    <a type="button" class="btn btn-primary" data-toggle="tooltip" data-bs-toggle="modal"
                        data-bs-target="#tambahModal" style="background-color:rgb(40, 144, 204); color:#fff;"><b>Add
                            category</b>
                    </a>

                    <form action="{{ route('category.index') }}" method="get">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" name="search" class="form-control" placeholder="search">
                            <button type="submit" class="btn btn-secondary">Cari</button>
                        </div>
                    </form>
                    {{-- </div>
                        </div> --}}
                </div>




                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No.</th>
                                <th>Category</th>
                                <th>Photo</th>
                                <th>Members Per Team</th>
                                <th>Del/Edit</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($category as $key => $a)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $a->name }}</td>
                                    <td>
                                        @if ($a->photo)
                                            <img src="{{ asset('storage/' . $a->photo) }}" alt="Photo" width="100px"
                                                height="70px">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $a->membersPerTeam }}</td>
                                    <td style="width: 15%">
                                        <div class="actions-btn">
                                            <button type="button" class="badge bg-label-warning me-1 border-0"
                                                style="background: none" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $a->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 512 512">
                                                    <path d="M163 439.573l-90.569-90.569L322.78 98.656l90.57 90.569z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M471.723 88.393l-48.115-48.114c-11.723-11.724-31.558-10.896-44.304 1.85l-45.202 45.203 90.569 90.568 45.202-45.202c12.743-12.746 13.572-32.582 1.85-44.305z"
                                                        fill="currentColor" />
                                                    <path d="M64.021 363.252L32 480l116.737-32.021z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>

                                            </button>
                                            <form action="{{ route('category.destroy', ['category' => $a->id]) }}"
                                                method="POST" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background: none"
                                                    class="badge bg-label-danger me-1 border-0"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                        height="22" viewBox="0 0 24 24">
                                                        <path fill="#FA7070"
                                                            d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>



</body>

<div class="modal" tabindex="-1" id="tambahModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Add Category</h6>
            </div>
            <div class="modal-body">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Category</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo"
                            name="photo">
                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="membersPerTeam" class="form-label">Members Per Team:</label>
                        <input type="number" class="form-control @error('membersPerTeam') is-invalid @enderror"
                            id="membersPerTeam" name="membersPerTeam">
                        @error('membersPerTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@forelse ($category as $a)
    <div class="modal" tabindex="-1" id="editModal{{ $a->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Edit Category</h6>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.update', $a->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="Category" class="form-label">Category</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name', $a->name) }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                id="photo" name="photo">
                            @if ($a->photo)
                                <img src="{{ asset('storage/' . $a->photo) }}" alt="" width="50"
                                    height="50">
                            @else
                                No Image
                            @endif
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="membersPerTeam" class="form-label">Category</label>
                            <input type="text" class="form-control @error('membersPerTeam') is-invalid @enderror"
                                id="membersPerTeam" name="membersPerTeam"
                                value="{{ old('membersPerTeam', $a->membersPerTeam) }}">
                            @error('membersPerTeam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@empty
    <tr>
        <td colspan="6">
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table"></table>
                        <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                            style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
                        <h1 class="table-light" style="text-align: center;">Data Kosong</h1>
                    </div>
                </div>
            </div>
        </td>
    </tr>
@endforelse
{{-- @endsection --}}
