@extends('admin.layouts.app')

@section('content')
<style>
    .radio-button {
        display: block;
        margin-top: 10px;
    }

    .radio-button input[type="radio"] {
        display: none;
    }
</style>

<div class="layout-page">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Tournament Confirmation</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Category</th>
                            <th>Photo</th>
                            <th>Members Per Team</th>
                            <th>Del/Edit</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($category as $index => $categories)
                            <tr>
                                <td><span class="fw-medium">{{ $categories->name }}</span></td>
                                <td>{{ $categories->photo }}</td>
                                <td>{{ $categories->membersPerTeam }}</td>
                                {{-- <td>
                                    <form id="updateForm{{ $categories->id }}"
                                        action="{{ route('konfirm.update', $categories->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="radio-button">
                                            <span class="badge bg-label-danger me-1">
                                                <label for="rejected{{ $categories->id }}">Rejected</label>
                                                <input type="radio" id="rejected{{ $categories->id }}" name="status"
                                                    value="rejected" {{ $categories->status == 'rejected' ? 'checked' : '' }}>
                                            </span>
                                            <span class="badge bg-label-success me-1">
                                                <label for="accepted{{ $categories->id }}">Accepted</label>
                                                <input type="radio" id="accepted{{ $categories->id }}" name="status"
                                                    value="accepted" {{ $categories->status == 'accepted' ? 'checked' : '' }}>
                                            </span>
                                        </div>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
