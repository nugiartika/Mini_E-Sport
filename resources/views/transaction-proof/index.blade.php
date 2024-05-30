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
                        @forelse($paymentProofs as $proof)
                            <tr>
                                <td>#{{ $proof->id }}</td>
                                <td>{{ $proof->created_at->translatedFormat('d M Y H:i') }}</td>
                                <td>
                                    @if ($proof->status === 0)
                                        <span class="badge bg-label-warning me-1">Menunggu</span>
                                    @elseif($proof->status === 1)
                                        <span class="badge bg-label-success me-1">Diterima</span>
                                    @elseif($proof->status === 2)
                                    <span class="badge bg-label-danger me-1">Ditolak</span>
                                    @endif

                                    @if($proof->status === 2)
                                    <div class="d-flex gap-2 text-muted pt-2">
                                        <i class="ti ti-note"></i>
                                        {{ $proof->reason }}
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ asset("storage/{$proof->file}") }}" data-lightbox="image-1"
                                        data-title="Unggahan Tanggal: {{ $proof->created_at->translatedFormat('d M Y H:i') }}">Lihat</a>
                                </td>
                                @if (auth()->user()->role === 'organizer')
                                    <td>{{ $proof->user->name }}</td>

                                    <td>
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#detail-{{ $loop->index }}"><i
                                                class="ti ti-info-circle"></i></a>

                                        @if ($proof->status === 0)
                                        @endif
                                    </td>
                                @endif
                            </tr>

                            {{-- Delete Modal --}}
                            <div class="modal fade" id="delete-{{ $loop->index }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Hapus Bukti</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('payment-proof.destroy', $proof->id) }}"
                                                id="proof-form-delete-{{ $loop->index }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <input type="hidden" name="status" value="1" />

                                                <p class="mb-0">Apakah anda yakin akan menghapus bukti ini?</p>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#detail-{{ $loop->index }}">
                                                Batal
                                            </a>

                                            <button class="btn btn-danger" type="button"
                                                onclick="document.getElementById('proof-form-delete-{{ $loop->index }}').submit()">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Approval Modal --}}
                            <div class="modal fade" id="approval-{{ $loop->index }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Approval Bukti</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('payment-proof.update', $proof->id) }}"
                                                id="proof-form-approve-{{ $loop->index }}" method="post">
                                                @csrf
                                                @method('PATCH')

                                                <input type="hidden" name="status" value="1" />

                                                <p class="mb-0">Apakah anda yakin akan menerima bukti ini?</p>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#detail-{{ $loop->index }}">
                                                Batal
                                            </a>

                                            <button class="btn btn-success" type="button"
                                                onclick="document.getElementById('proof-form-approve-{{ $loop->index }}').submit()">Terima</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Denying Modal --}}
                            <div class="modal fade" id="denying-{{ $loop->index }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tolak Bukti</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('payment-proof.update', $proof->id) }}"
                                                id="proof-form-denying-{{ $loop->index }}" method="post">
                                                @csrf
                                                @method('PATCH')

                                                <input type="hidden" name="status" value="2" />

                                                <div class="mb-3">
                                                    <label for="reason" class="form-label">Alasan</label>
                                                    <textarea class="form-control" name="reason" id="reason" rows="3"></textarea>
                                                </div>

                                                <p class="mb-0">Apakah anda yakin akan menolak bukti ini?</p>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#detail-{{ $loop->index }}">
                                                Batal
                                            </a>

                                            <button class="btn btn-danger" type="button"
                                                onclick="document.getElementById('proof-form-denying-{{ $loop->index }}').submit()">Ya,
                                                Tolak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Detail Modal --}}
                            <div class="modal fade" id="detail-{{ $loop->index }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Bukti</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="list-group list-group-flush">
                                                <div
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Status</span>
                                                    <span>
                                                        @if ($proof->status === 1)
                                                            <i class="ti ti-check text-success"></i> Diterima
                                                        @elseif($proof->status === 2)
                                                            <i class="ti ti-x text-danger"></i> Ditolak
                                                        @else
                                                            <i class="ti ti-clock"></i> Menunggu
                                                        @endif
                                                    </span>
                                                </div>

                                                <div
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Diperbaharui Pada</span>
                                                    <span>{{ $proof->updated_at->translatedFormat('d M Y H:m:s') }}</span>
                                                </div>
                                                <div
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span class="fw-bold">Diunggah Pada</span>
                                                    <span>{{ $proof->payment_date->translatedFormat('d M Y H:m:s') }}</span>
                                                </div>
                                                @if ($proof->status === 2)
                                                    <div
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        <span class="fw-bold">Alasan</span>
                                                        <span>{{ $proof->reason ?? 'Tidak ada alasan yang ditulis' }}</span>
                                                    </div>
                                                @endif
                                            </div>

                                            <img src="{{ Storage::url($proof->file) }}" alt="Bukti"
                                                class="w-100 mt-3 rounded-3">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light me-auto" data-bs-dismiss="modal">
                                                Tutup
                                            </button>

                                            @if ($proof->status === 2)
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete-{{ $loop->index }}" class="btn btn-danger">Hapus</a>
                                            @elseif ($proof->status === 0)
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#denying-{{ $loop->index }}"
                                                    class="btn btn-danger">Tolak Bukti</a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#approval-{{ $loop->index }}"
                                                    class="btn btn-success">Terima</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $paymentProofs->links() }}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Unggah Bukti Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('payment-proof.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"
        integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
