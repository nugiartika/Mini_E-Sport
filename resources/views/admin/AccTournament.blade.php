@extends('admin.layouts.app')

@section('style')
    <style>
        .radio-button {
            display: block;
            margin-top: 10px;
        }

        .radio-button input[type="radio"] {
            display: none;
        }
    </style>
@endsection

@section('content')
    @if ($errors->all())
        <div class="alert bg-danger">
            <h5>Ada kesalahan!</h5>
            <p>Mohon periksa pesan ini dan segera diperbaiki.</p>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Tournament Confirmation</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        <th>Deatail</th>
                    </tr>
                </thead>


                <tbody class="table-border-bottom-0">
                    @forelse ($tournaments as $index => $tournament)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> <span class="fw-medium">{{ $tournament->name }}</span></td>
                            <td><span class="badge bg-label-primary me-1">{{ $tournament->status }}</span></td>
                            <td>
                                <form id="updateForm{{ $tournament->id }}"
                                    action="{{ route('konfirm.update', $tournament->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="radio-button">
                                        <span class="badge bg-label-danger me-1">
                                            <label for="rejected{{ $tournament->id }}">Tolak</label>
                                            <input type="radio" id="rejected{{ $tournament->id }}" name="status"
                                                value="rejected" {{ $tournament->status == 'rejected' ? 'checked' : '' }}>
                                        </span>
                                        <span class="badge bg-label-success me-1">
                                            <label for="accepted{{ $tournament->id }}">Terima</label>
                                            <input type="radio" id="accepted{{ $tournament->id }}" name="status"
                                                value="accepted" {{ $tournament->status == 'accepted' ? 'checked' : '' }}>
                                        </span>
                                    </div>

                                    <!-- Modal untuk input alasan penolakan -->
                                    <div id="reasonModal{{ $tournament->id }}" class="modal fade" tabindex="-1"
                                        aria-labelledby="reasonModalLabel{{ $tournament->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reasonModalLabel{{ $tournament->id }}">
                                                        Reason for Rejection</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <textarea class="form-control reason-input" id="reason{{ $tournament->id }}" name="reason" rows="3"
                                                        placeholder="Alasan penolakan"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary submit-reason">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32">
                                        <g fill="currentColor">
                                            <path
                                                d="M5 13a8 8 0 1 0 16 0a8 8 0 0 0-16 0m12.348-4.268c.552.957.419 2.068-.299 2.482c-.717.414-1.747-.025-2.299-.982c-.552-.957-.418-2.068.299-2.482c.718-.414 1.747.025 2.3.982" />
                                            <path
                                                d="M2 13c0 6.075 4.925 11 11 11c2.295 0 4.426-.703 6.19-1.905a3.747 3.747 0 0 0 1.005 3.483l3.182 3.182a3.75 3.75 0 0 0 5.303-5.303l-3.182-3.182a3.747 3.747 0 0 0-3.454-1.012A10.95 10.95 0 0 0 24 13c0-6.075-4.925-11-11-11S2 6.925 2 13m20 0a9 9 0 1 1-18 0a9 9 0 0 1 18 0" />
                                        </g>
                                    </svg>
                                </button>
                            </td>
                            <td>
                                <form id="updateForm{{ $tournament->id }}"
                                    action="{{ route('konfirm.update', $tournament->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div id="reasonModal{{ $tournament->id }}" class="modal fade" tabindex="-1"
                                        aria-labelledby="reasonModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reasonModalLabel">Reason for Rejection</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <textarea class="form-control" id="reason{{ $tournament->id }}" name="reason" rows="3"
                                                        placeholder="Alasan penolakan"></textarea>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="d-flex flex-column justify-content-center">
                                    <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                        style="display: block; margin: 0 auto; max-width: 20%; height: auto;">
                                    <h1 class="table-light" style="text-align: center;">
                                        Data Tidak Tersedia
                                    </h1>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    @foreach ($tournaments as $tournament)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Tournamnent</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col text-center">
                                        <img src="{{ asset('storage/' . $tournament->images) }}" alt="Tournament Image"
                                            class="rounded-circle" style="width: 150px; height: 150px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-weight: bold;">Nama : <span
                                                    id="detail-name" style="font-weight: normal;">
                                                    {{ $tournament->name }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Game : <span
                                                    id="detail-email" style="font-weight: normal;">
                                                    {{ $tournament->category->name }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Pendafataran Dibuka :
                                                <span id="detail-gender" style="font-weight: normal;">
                                                    {{ $tournament->pendaftaran }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Pendaftaran Ditutup :
                                                <span id="detail-national_student_id" style="font-weight: normal;"></span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Tournament Dimulai :
                                                <span id="detail-student_identity_number" style="font-weight: normal;">
                                                    {{ $tournament->permainan }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-weight: bold;">
                                                Nama Penyelenggara : <span id="detail-place_birth"
                                                    style="font-weight: normal;">{{ $tournament->user->name }}</span>

                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Slot Tim :
                                                <span id="detail-national_identity_number"
                                                    style="font-weight: normal;">{{ $tournament->slotTeam }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Description :
                                                <span id="detail-family_card_id"
                                                    style="font-weight: normal;">{{ $tournament->description }}</span>
                                            </li>
                                            <li class="list-group-item" style="font-weight: bold;">Rule :
                                                <span id="detail-number_siblings"
                                                    style="font-weight: normal;">{{ $tournament->rule }}</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('input[type=radio][name=status]').change(function() {
                if (this.value === 'rejected') {
                    var modalId = '#reasonModal' + $(this).closest('form').attr('id').substring(
                    10); // Get the modal ID
                    $(modalId).modal('show'); // Show the modal
                }
            });

            // Submit form on radio button change
            @foreach ($tournaments as $tournament)
                var form{{ $tournament->id }} = document.getElementById('updateForm{{ $tournament->id }}');
                var rejectedRadio{{ $tournament->id }} = document.getElementById('rejected{{ $tournament->id }}');
                var acceptedRadio{{ $tournament->id }} = document.getElementById('accepted{{ $tournament->id }}');

                rejectedRadio{{ $tournament->id }}.addEventListener('change', function() {
                    form{{ $tournament->id }}.submit();
                });

                acceptedRadio{{ $tournament->id }}.addEventListener('change', function() {
                    form{{ $tournament->id }}.submit();
                });
            @endforeach
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('input[type=radio][name=status]').change(function() {
                if (this.value === 'rejected') {
                    var modalId = '#reasonModal' + $(this).closest('form').attr('id').substring(10);
                    $(modalId).modal('show');

                    // Submit reason form
                    $(modalId).find('.submit-reason').click(function() {
                        var reason = $(modalId).find('.reason-input').val();
                        if (reason.trim() !== '') {
                            $(modalId).find('.reason-input').val(reason);
                            $(modalId).find('form').submit();
                        }
                    });
                }
            });
        });
    </script>
