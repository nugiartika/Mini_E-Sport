@extends('admin.layouts.app')


<body>
    <!-- Layout page -->
    <div class="layout-page">

        <!-- Content wrapper -->
        {{-- <div class="content-wrapper"> --}}

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Bootstrap Table with Header - Light -->
            <div class="card">
                <h5 class="card-header">List Users</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Date</th>
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
                                    <!-- dalam tag <td> -->
                                    {{-- <td> --}}
                                        {{-- <form action="{{ route('konfirmUser', $index->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name=" action" value="approve">
                                            <button type="submit" class="btn p-0 dropdown-toggle hide-arrow"><i
                                                    class="ti ti-check text-heading" style="margin-right: 5px;"></i></button>
                                        </form> --}}

                                        {{-- <form action="{{ route('rejectUser', $index->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="action" value="reject">
                                            <button type="submit" class="btn p-0 dropdown-toggle hide-arrow"><i class="ti ti-trash me-1"></i></button>
                                        </form> --}}

                                    {{-- </td> --}}
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Bootstrap Table with Header - Light -->


        </div>
        <!-- / Content -->

        <!--/ Content wrapper -->
        {{-- </div> --}}
        <!-- / Layout page -->
    </div>

</body>

</html>







<div class="dropdown-menu">
    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i> Approve</a>
    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Reject</a>
</div>
