@extends('admin.layouts.app')
<style>

.radio-button {
    display: block;
    margin-top: 10px;
}

.radio-button input[type="radio"] {
    display: none;
}


</style>
<body>
    <!-- Layout page -->
    <div class="layout-page">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">


           <div class="card">
                <h5 class="card-header">Tournament detail</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Game</th>
                                <th>Organizer</th>
                                <th>Status</th>
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
