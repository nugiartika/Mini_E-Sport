@extends('admin.layouts.app')

<style>

.radio-button {
    display: block;
    margin-top: 10px;
}

.radio-button input[type="radio"] {
    display: none;
}

    .dropdown-menu {
        min-width: auto;
        padding: 0;
    }

    .dropdown-menu .dropdown-item {
        display: flex;
        align-items: center;
        padding: 0.5rem 1rem;
    }

    .dropdown-menu .dropdown-item i {
        margin-right: 0.5rem;
    }
</style>

<body>
    <div class="layout-page">

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card">
                <h5 class="card-header">Acc User</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            @foreach ($sainsRole as $index)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="ti ti-user text-primary display-6"></i>
                                            <span class="fw-medium">{{ $index->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $index->email }}</td>
                                    <!-- dalam tag <td> -->
                                    <td>

                                        <form id="updateForm{{ $index->id }}" action="{{ route('konfirmUser', $index->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('put')
                                          
                                            <div class="radio-button">
                                                <span class="badge bg-label-danger me-1">
                                                <label for="rejected{{ $index->id }}">Rejected</label>
                                                <input type="radio" id="rejected{{ $index->id }}" name="status" value="rejected" {{ $index->status == 'rejected' ? 'checked' : '' }}>
                                                </span>

                                                <span class="badge bg-label-success me-1">
                                                <label for="accepted{{ $index->id }}">Accepted</label>
                                                <input type="radio" id="accepted{{ $index->id }}" name="status" value="accepted" {{ $index->status == 'accepted' ? 'checked' : '' }}>
                                                </span>
                                            </div>
                                        </form>
                                        {{-- <form action="{{ route('konfirmUser', $index->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="action" value="approve">
                                            <button  type="submit" class="btn p-0 dropdown-toggle hide-arrow"><i
                                                 class="ti ti-check text-heading" style="margin-right: 5px;"></i></button>
                                        </form>

                                        <form action="{{ route('rejectUser', $index->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="action" value="reject">
                                            <button type="submit" class="btn p-0 dropdown-toggle hide-arrow"><i class="fas fa-times me-1"></i></button>
                                        </form> --}}

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

</html>

<div class="dropdown-menu">
    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i> Approve</a>
    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Reject</a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        @foreach ($sainsRole as $index)
            var form{{ $index->id }} = document.getElementById('updateForm{{ $index->id }}');
            var rejectedRadio{{ $index->id }} = document.getElementById('rejected{{ $index->id }}');
            var acceptedRadio{{ $index->id }} = document.getElementById('accepted{{ $index->id }}');

            rejectedRadio{{ $index->id }}.addEventListener('change', function () {
                form{{ $index->id }}.submit();
            });

            acceptedRadio{{ $index->id }}.addEventListener('change', function () {
                form{{ $index->id }}.submit();
            });
        @endforeach
    });
</script>