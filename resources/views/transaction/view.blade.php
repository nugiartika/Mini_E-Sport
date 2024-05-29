@extends('layouts.panel')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
@endpush

@section('content')
    <div class="card card-body mb-4 d-flex gap-2 flex-row justify-content-between">
        <h3 class="mb-0">Informasi Tagihan <span
                class="badge bg-{{ \App\Enums\TransactionStatus::color($transaction->status) }}">{{ \App\Enums\TransactionStatus::label($transaction->status) }}</span>
        </h3>
        <a href="{{ route('transaction.show', $transaction->transaction_id) }}" class="btn btn-primary"><i
                class="ti ti-sync"></i>Muat
            Ulang</a>
    </div>

    <div class="row">
        <div class="col-md-7 col-xxl-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Detail Tagihan</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Produk</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>#1</th>
                                <td>Pendaftaran "{{ $transaction->teamTournament->tournament->name }}"</td>
                                <td>{{ number_format($transaction->teamTournament->tournament->nominal, 2, ',', '.') }}
                                    IDR
                                </td>
                            </tr>
                            <tr>
                                <th>#2</th>
                                <td>Biaya Admin</td>
                                <td>
                                    {{ number_format($paymentList->where('code', $transaction->payment_method)->first()['fee'], 2, '.', ',') }}
                                    IDR</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-end">Total</th>
                                <td>{{ number_format($transaction->amount, 0, '.', ',') }}
                                    IDR</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            @if (auth()->user()->role === 'organizer')
                @php
                    $income =
                        $transaction->teamTournament->tournament->nominal -
                        0.15 * $transaction->teamTournament->tournament->nominal;
                @endphp
                <div class="card mb-3">
                    <h3 class="card-header">Pendapatan anda</h3>
                    <div class="card-body">
                        <p>Pendapatan anda ini adalah potongan 15% dari harga penjualan harga tiket turnamen.</p>

                        <div class="list-group-flush list-group">
                            <div class="list-group-item mb-0 d-flex justify-content-between">
                                <span>Harga Tiket Masuk</span>
                                <span>{{ number_format($transaction->teamTournament->tournament->nominal, 2, ',', '.') }}
                                    IDR</span>
                            </div>
                            <div class="list-group-item mb-0 d-flex justify-content-between">
                                <span>Potongan Admin</span>
                                <span>&minus;{{ number_format($transaction->teamTournament->tournament->nominal * 0.15, 2, ',', '.') }}
                                    IDR</span>
                            </div>
                            <div class="list-group-item mb-0 d-flex justify-content-between">
                                <span>Total pendapatan anda</span>
                                <span class="text-success">{{ number_format($income, 0, '.', ',') }} IDR</span>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif(auth()->user()->role === 'admin')
                @php
                    $income = 0.15 * $transaction->teamTournament->tournament->nominal;
                    $feeOrganizer = $transaction->teamTournament->tournament->nominal - $income;
                @endphp
                <div class="card mb-3">
                    <h3 class="card-header">Pendapatan anda</h3>
                    <div class="card-body">
                        <p>Pendapatan anda ini adalah 15% dari harga penjualan harga tiket turnamen.</p>

                        <div class="list-group-flush list-group">
                            <div class="list-group-item mb-0 d-flex justify-content-between">
                                <span>Harga Tiket Masuk</span>
                                <span>{{ number_format($transaction->teamTournament->tournament->nominal, 2, ',', '.') }}
                                    IDR</span>
                            </div>
                            <div class="list-group-item mb-0 d-flex justify-content-between">
                                <span>Potongan Admin</span>
                                <span>&minus;{{ number_format($feeOrganizer, 2, ',', '.') }}
                                    IDR</span>
                            </div>
                            <div class="list-group-item mb-0 d-flex justify-content-between">
                                <span>Total pendapatan anda</span>
                                <span class="text-success">{{ number_format($income, 0, '.', ',') }} IDR</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-md-5 col-xxl-4">
            <div class="card mb-3">
                <h3 class="mb-0 card-header">Informasi Tagihan</h3>

                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Metode</span>
                        <span>
                            {{ $paymentList->where('code', $transaction->payment_method)->first()['name'] }}
                        </span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Tanggal Pembayaran</span>
                        <span>{{ $transaction->created_at->format('d M Y') }}</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Status</span>
                        <span><span
                                class="badge bg-{{ \App\Enums\TransactionStatus::color($transaction->status) }}">{{ \App\Enums\TransactionStatus::label($transaction->status) }}</span></span>
                    </div>

                    @if (auth()->user()->role !== 'user')
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="fw-bold">ID Referensi</span>
                            <div class="d-flex gap-2 align-items-center">
                                <a class="text-white text-decoration-none" href="javascript:copyAndShowAlert('refId')"><i
                                        class="ti ti-copy"></i></a>
                                <span id="refId">{{ $transaction->ref_id }}</span>
                            </div>
                        </div>
                    @endif
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">ID Transaksi</span>
                        <div class="d-flex gap-2 align-items-center">
                            <a class="text-white text-decoration-none" href="javascript:copyAndShowAlert('transId')"><i
                                    class="ti ti-copy"></i></a>
                            <span id="transId">{{ $transaction->transaction_id }}</span>
                        </div>
                    </div>
                </div>
            </div>

            @if(in_array(auth()->user()->role, ['organzer', 'user']))
            <div class="card mt-4">
                <h3 class="card-header">Bukti Pembayaran</h3>

                @php
                    $status = $transactionProofsIsNotPending ? $transactionProofsIsNotPending->status : 2;
                @endphp

                @if (auth()->user()->role === 'user' && $status === 2)
                    <div class="card-body">
                        <form action="{{ route('payment-proof.store') }}" enctype="multipart/form-data" method="post">
                            @csrf

                            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}" />
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}" />
                            <input type="hidden" name="payment_date" value="{{ now() }}" />

                            <div class="mb-3">
                                <label for="file" class="form-label">Bukti</label>
                                <input type="file" class="form-control" name="file" id="file"
                                    accept="image/png,image/jpg,image/jpeg" />

                                @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Unggah</button>
                            </div>
                        </form>
                    </div>
                @endif

                <div class="list-group list-group-flush">
                    @forelse ($transactionProofs as $proof)
                        <div class="list-group-item gap-2 d-flex flex-column">
                            <div class="d-flex gap-2 justify-content-between align-items-center">
                                <a href="{{ Storage::url($proof->file) }}" data-lightbox="imageproof-{{ $loop->index }}"
                                    data-title="Bukti {{ $proof->created_at->translatedFormat('d M Y') }}">Lihat Bukti</a>
                                <div class="d-flex gap-2">
                                    <span>
                                        @if ($proof->status === 1)
                                            <i class="ti ti-check text-success"></i>
                                        @elseif($proof->status === 2)
                                            <i class="ti ti-x text-danger"></i>
                                        @else
                                            <i class="ti ti-clock"></i>
                                        @endif
                                    </span>
                                    <span>{{ $proof->payment_date->translatedFormat('d M Y') }}</span>

                                    @if (auth()->user()->role == 'organizer')
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#detail-{{ $loop->index }}"><i
                                                class="ti ti-info-circle"></i></a>
                                    @endif
                                </div>
                            </div>

                            @if ($proof->status === 2)
                                <div class="text-muted">
                                    <i class="ti ti-note me-2"></i>{{ $proof->reason ?? 'Tidak ada alasan yang ditulis' }}
                                </div>
                            @endif

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
                                                    <textarea class="form-control" name="reason" id="reason"
                                                        rows="3"></textarea>
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
                                                onclick="document.getElementById('proof-form-denying-{{ $loop->index }}').submit()">Ya, Tolak</button>
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
                                            <button type="button" class="btn btn-light me-auto"
                                                data-bs-dismiss="modal">
                                                Tutup
                                            </button>

                                            @if ($proof->status === 2)
                                                <a href="#" class="btn btn-danger">Hapus</a>
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
                        </div>
                    @empty
                        <div class="card-body">
                            <p class="text-center mb-0">Tidak ada unggahan</p>
                        </div>
                    @endforelse
                </div>
            </div>
            @endif

            @if (auth()->user()->role === 'organizer')
                <div class="card mt-4">
                    <h3 class="card-header">Ubah Status</h3>
                    <div class="card-body">
                        <form action="{{ route('transaction.update', $transaction->id) }}" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status" id="status">
                                    @foreach (\App\Enums\TransactionStatus::cases() as $status)
                                        <option value="{{ $status->value }}"
                                            {{ $status->value === $transaction->status ? 'selected' : '' }}>
                                            {{ $status->label($status->value) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Ubah Status</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"
        integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function copyAndShowAlert(id) {
            // Get element
            const el = document.getElementById(id);

            // Copy text
            navigator.clipboard.writeText(el.textContent);

            // Tampilkan SweetAlert
            Toastify({
                text: "Tersalin ke papan salinan!",
                duration: 3000,
                gravity: "top",
                position: "right",
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        }
    </script>
@endpush
