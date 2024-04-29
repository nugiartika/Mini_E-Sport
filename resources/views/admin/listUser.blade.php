@extends('admin.layouts.app')

<body>
    <div class="layout-page">

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card">
                <h5 class="card-header">List Users</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Aksi</th>
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
                                    <td>{{ \Carbon\Carbon::parse($index->created_at)->isoFormat('D MMMM YYYY') }}
                                    </td>
                                    <td>
                                        <form action="{{ route('deleteUser', ['idUser' => $index->id]) }}"
                                            method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="action" value="reject">
                                            <button type="submit" class="btn p-0 dropdown-toggle hide-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <path fill="#FA7070" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                            </svg></button>
                                        </form>

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
