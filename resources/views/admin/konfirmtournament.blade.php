@extends('admin.layouts.app')
<style>

.radio-button {
    display: block; /* Mengubah elemen menjadi blok agar dapat diatur posisinya */
    margin-top: 10px; /* Atur jarak dari atas */
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
                <h5 class="card-header">Tournament Confirmation</h5>
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
                                            <form id="updateForm{{ $tournament->id }}" action="{{ route('konfirm.update', $tournament->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="radio-button">
                                                    <span class="badge bg-label-danger me-1">
                                                    <label for="rejected{{ $tournament->id }}">Rejected</label>
                                                    <input type="radio" id="rejected{{ $tournament->id }}" name="status" value="rejected" {{ $tournament->status == 'rejected' ? 'checked' : '' }}>
                                                    </span>

                                                    <span class="badge bg-label-success me-1">
                                                    <label for="accepted{{ $tournament->id }}">Accepted</label>
                                                    <input type="radio" id="accepted{{ $tournament->id }}" name="status" value="accepted" {{ $tournament->status == 'accepted' ? 'checked' : '' }}>
                                                    </span>
                                                </div>
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
