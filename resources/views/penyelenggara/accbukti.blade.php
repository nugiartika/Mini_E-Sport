@extends('layouts.panel')
@push('script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css"
        integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
    <div class="card">
        <div class="card-header flex-column flex-lg-row d-flex justify-content-between">
            <h3 class="mb-0">Bukti Transaksi</h3>
            @if (auth()->user()->role === 'user')
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload</a>
                </div>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table table-striped " style="text-align: center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tournament</th>
                        <th>Tanggal Diunggah</th>
                        <th>Status</th>
                        <th>Lihat Bukti</th>
                        @if (auth()->user()->role === 'organizer')
                            <th>Diunggah Oleh</th>
                            <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if ($counttournaments)
                    @forelse ($uploads as $upload)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $upload->tournament->name }}</td>
                            <td>{{ $upload->created_at->translatedFormat('d M Y H:i') }}</td>
                            <td>
                                @if ($upload->status === 'pending')
                                    <span class="badge bg-warning">Menunggu Konfirmasi</span>
                                @elseif ($upload->status === 'accepted')
                                    <span class="badge bg-success">Dikonfirmasi</span>
                                @elseif ($upload->status === 'rejected')
                                    <span class="badge bg-danger">Ditolak</span>
                                @else
                                    <span>{{ $upload->status }}</span>
                                @endif
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $upload->id }}">
                                    <i class="far fa-eye"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $upload->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel{{ $upload->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fs-5" id="exampleModalLabel">Bukti Transaksi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset("storage/{$upload->upload}") }}" alt="Uploaded Image"
                                                    style="max-width: 100%;">
                                                <p class="mt-2">Unggahan Tanggal:
                                                    {{ $upload->created_at->locale('id')->translatedFormat('d F Y H:i') }}
                                                </p>
                                                <p class="mt-2">Nama Tournament: {{ $upload->tournament->name }}</p>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            @if (auth()->user()->role === 'organizer')
                                <td>
                                    @if ($user = \App\Models\User::find($upload->user_id))
                                        {{ $user->email }}
                                    @else
                                        User tidak ditemukan
                                    @endif
                                </td>
                                <td>
                                    @if($upload->status === 'pending')
                                    <form id="updateForm{{ $upload->id }}"
                                        action="{{ route('Upload.update', $upload->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="radio-button ">
                                            <span class="badge bg-label-danger me-1">
                                                <label for="rejected{{ $upload->id }}">Tolak</label>
                                                <input style="display:none;" type="radio"
                                                    id="rejected{{ $upload->id }}" name="status" value="rejected"
                                                    {{ $upload->status == 'rejected' ? 'checked' : '' }}>
                                            </span>
                                            <span class="badge bg-label-success me-1">
                                                <label for="accepted{{ $upload->id }}">Terima</label>
                                                <input style="display:none;" type="radio"
                                                    id="accepted{{ $upload->id }}" name="status" value="accepted"
                                                    {{ $upload->status == 'accepted' ? 'checked' : '' }}>
                                            </span>
                                        </div>

                                        <div id="reasonModal{{ $upload->id }}" class="modal fade" tabindex="-1"
                                            aria-labelledby="reasonModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="reasonModalLabel">Alasan upload Ditolak
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <textarea class="form-control" id="reason{{ $upload->id }}" name="reason" rows="3"
                                                            placeholder="Alasan penolakan">{{ old('reason', $upload->reason) }}</textarea>
                                                        @error('reason')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    @else
                                    &mdash;
                                    @endif
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <div class="d-flex flex-column justify-content-center">
                                    <img src="{{ asset('assets/img/No-data.png') }}" alt=""
                                        style="display: block; margin: 0 auto; max-width: 16%; height: auto;">
                                    <h4 class="table-light" style="text-align: center;">
                                        Data Tidak Tersedia
                                    </h4>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('script')
    <!-- Modifikasi JavaScript -->
    <script>
        $(document).ready(function() {
            $('input[type=radio][name=status]').change(function() {
                var formId = $(this).closest('form').attr('id');
                if (this.value === 'accepted') {
                    // Directly submit the form for 'accepted' status
                    $('#' + formId).submit();
                } else if (this.value === 'rejected') {
                    var modalId = '#reasonModal' + formId.substring(10);
                    $(modalId).modal('show');

                    // Submit reason form
                    $(modalId).find('.btn-primary').click(function() {
                        var reason = $(modalId).find('.form-control').val();
                        if (reason.trim() !== '') {
                            $('#' + formId).submit();
                        }
                    });
                }
            });
        });
    </script>
@endpush
