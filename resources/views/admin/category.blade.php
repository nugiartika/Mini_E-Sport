@extends('admin.layouts.app')

@section('content')
    @if(session('success'))
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
            $(document).ready(function () {
                $('#successModal').modal('show');
            });
        </script>
    @endif
    @if(session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif

    <div class="layout-page">

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">List Users</h5>
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
                            @foreach ($users as $index)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ti ti-user text-primary display-6"></i>
                                            <span class="fw-medium">{{ $index->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $index->email }}</td>
                                    <td>{{ \Carbon\Carbon::parse($index->created_at)->isoFormat('D MMMM YYYY') }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a type="button" class="btn btn-primary" data-toggle="tooltip"
                            data-bs-toggle="modal" data-bs-target="#tambahModal"
                            style="background-color:rgb(40, 144, 204); color:#fff;"><b>Add category</b></a>
                        <div class="d-widget-title"></div>

                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                                <!-- Perbaikan tag form -->
                                <form action="{{ route('category.index') }}" method="get">
                                    @csrf
                                    <input type="search" name="search" class="form-control">
                                    <button type="submit" class="btn btn-secondary">Cari</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table-default manage-user table table-striped table-responsive-md">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Category</th>
                                    <th>Photo</th>
                                    <th>Members Per Team</th>
                                    <th>Del/Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $key => $a)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $a->name }}</td>
                                        <td>
                                            @if ($a->photo)
                                                <img src="{{ asset('storage/'.$a->photo) }}" alt="Photo" width="100px" height="70px">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $a->membersPerTeam }}</td>
                                        <td style="width: 10%">
                                            <div class="actions-btn">
                                                <button type="button"
                                                    class="iconbox button soft-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $a->id }}"><i
                                                    class="icofont-pen-alt-1"></i>
                                                </button>
                                                <form action="{{ route('category.destroy', ['category' => $a->id]) }}" id="deleteForm_{{ $a->id }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="iconbox button soft-danger" onclick="deleteContent('{{ $a->id }}')">
                                                        <i class="icofont-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$category->links()}}
                    </div>
                </div>
            </div>

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
                                    <label for="Category" class="form-label">Category</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}">
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
                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="membersPerTeam">Members Per Team:</label>
                                    <input type="number" id="membersPerTeam" name="membersPerTeam">
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

            @foreach ($category as $a)
                <div class="modal" tabindex="-1" id="editModal{{ $a->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Edit Category</h6>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('category.update', $a->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="Category" class="form-label">Category</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name"
                                            value="{{ old('name', $a->name) }}">
                                        @error('name')
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
            @endforeach
        </div>
    </div> --}}

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
                            <label for="Category" class="form-label">Category</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}">
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
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="membersPerTeam">Members Per Team:</label>
                            <input type="number" id="membersPerTeam" name="membersPerTeam">
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

    @foreach ($category as $a)
        <div class="modal" tabindex="-1" id="editModal{{ $a->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="m-0 font-weight-bold"><i class="fas fa-newspaper me-1"></i>Edit Category</h6>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('category.update', $a->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="Category" class="form-label">Category</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name"
                                    value="{{ old('name', $a->name) }}">
                                @error('name')
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
    @endforeach
@endsection
