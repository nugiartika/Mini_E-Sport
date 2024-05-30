@extends('layouts.panel')

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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID Unggahan</th>
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
                        @foreach ($uploads as $upload)
                        <tr>
                            <td>#{{ $upload->id }}</td>
                            <td>{{ $upload->created_at->translatedFormat('d M Y H:i') }}</td>
                            <td>{{ $upload->status }}</td>
                            <td>{{ $upload->status }}</td>
                            <td>{{ $upload->user_id }}</td>
                            <td>
                                <form id="updateForm{{ $upload->id }}" action="{{ route('Upload.update', $upload->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="radio-button">
                                        <span class="badge bg-label-danger me-1">
                                            <label for="rejected{{ $upload->id }}">Tolak</label>
                                            <input type="radio" id="rejected{{ $upload->id }}" name="status" value="rejected" {{ $upload->status == 'rejected' ? 'checked' : '' }}>
                                        </span>

                                        <span class="badge bg-label-success me-1">
                                            <label for="accepted{{ $upload->id }}">Terima</label>
                                            <input type="radio" id="accepted{{ $upload->id }}" name="status" value="accepted" {{ $upload->status == 'accepted' ? 'checked' : '' }}>
                                        </span>
                                    </div>

                                    <div id="reasonModal{{ $upload->id }}" class="modal fade" tabindex="-1" aria-labelledby="reasonModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reasonModalLabel">Alasan upload Ditolak</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <textarea class="form-control" id="reason{{ $upload->id }}" name="reason" rows="3" placeholder="Alasan penolakan">{{ old('reason', $upload->reason) }}</textarea>
                                                    @error('reason')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <!-- Modifikasi JavaScript -->
    @push('script')
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

@endpush
