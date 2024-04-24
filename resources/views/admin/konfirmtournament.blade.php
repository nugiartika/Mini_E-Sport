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
                <h5 class="card-header">User daftar panitia</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Game</th>
                                <th>Organizer</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($tournaments as $index => $tournament)

                            <tr>
                                <td> <span
                                        class="fw-medium">{{ $tournament->name }}</span></td>
                                        <td>{{$tournament->category->name }}</td>

                                        <td>{{ $tournament->user->name }}</td>
                                        <td><span class="badge bg-label-primary me-1">{{ $tournament->status }}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">Edit</button>
                                        <div class="dropdown-menu">
                                            <form id="updateForm{{ $tournament->id }}" action="{{ route('konfirm.update', $tournament->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="dropdown-item">
                                                    <label for="rejected{{ $tournament->id }}">Rejected</label>
                                                    <input type="radio" id="rejected{{ $tournament->id }}" name="status" value="rejected" {{ $tournament->status == 'rejected' ? 'checked' : '' }}>
                                                </div>
                                                <div class="dropdown-item">
                                                    <label for="accepted{{ $tournament->id }}">Accepted</label>
                                                    <input type="radio" id="accepted{{ $tournament->id }}" name="status" value="accepted" {{ $tournament->status == 'accepted' ? 'checked' : '' }}>
                                                </div>
                                            </form>




                                            {{-- <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ti ti-pencil me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ti ti-trash me-1"></i> Delete</a> --}}
                                        </div>
                                    </div>
                                </td>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            @foreach ($tournaments as $tournament)
                var form{{ $tournament->id }} = document.getElementById('updateForm{{ $tournament->id }}');
                var rejectedRadio{{ $tournament->id }} = document.getElementById('rejected{{ $tournament->id }}');
                var acceptedRadio{{ $tournament->id }} = document.getElementById('accepted{{ $tournament->id }}');

                rejectedRadio{{ $tournament->id }}.addEventListener('change', function () {
                    form{{ $tournament->id }}.submit();
                });

                acceptedRadio{{ $tournament->id }}.addEventListener('change', function () {
                    form{{ $tournament->id }}.submit();
                });
            @endforeach
        });
    </script>

</body>

</html>
