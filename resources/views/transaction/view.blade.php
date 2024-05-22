@extends('layouts.panel')

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
        <div class="col-md-8">
            <div class="card card-body mb-4">
                {{-- <div class="row">
                    <div class="col-md-6">
                        <h5>Penagih</h5>

                        <p class="fw-bold mb-2">Humma Esport</p>
                        <p class="mb-1">Perum Permata Regency 1, Blk. 10 No.28, Perun Gpa, Ngijo, Kec. Karang Ploso,
                            Kabupaten Malang, Jawa Timur 65152</p>
                        <p class="mb-1">0851-7677-7785</p>
                        <p class="mb-1">admin@humma-esport.com</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <h5>Ditagihkan Kepada</h5>
                        <p class="fw-bold mb-2">{{ $transaction->customer_name }}</p>
                        <p class="mb-1">{{ $transaction->customer_phone }}</p>
                        <p class="mb-1">{{ $transaction->customer_email }}</p>
                    </div>
                </div> --}}

                <div class="mt-4 mb-2">
                    <h3>Detail Tagihan</h3>

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
                                    <td>{{ number_format($transaction->amount + $paymentList->where('code', $transaction->payment_method)->first()['fee'], 0, '.', ',') }}
                                        IDR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- @if (!in_array($transaction->status, ['PAID', 'EXPIRED', 'REFUND', 'FAILED']))
                    <div class="mt-4">
                        <div class="row align-items-center">
                            <div class="col-md-9 @if (!$paymentDetail['data']['pay_code']) mx-auto text-center @endif">
                                @if ($paymentDetail['data']['pay_code'])
                                    <h3 class="mb-0" id="paymentCode">{{ $paymentDetail['data']['pay_code'] }}</h3>
                                @else
                                    <img class="p-2 bg-white rounded-3" src="{{ $paymentDetail['data']['qr_url'] }}"
                                        height="150" alt="URL QR Code" />
                                @endif

                                <p class="fw-bold mb-0 mt-2">Kode / QR Pembayaran</p>
                            </div>
                            @if ($paymentDetail['data']['pay_code'])
                                <div class="col-md-3">
                                    <button onclick="copyAndShowAlert('paymentCode')" type="button"
                                        class="btn ms-auto btn-primary d-flex align-items-center gap-2"><i
                                            class="ti ti-copy"></i><span>Salin Kode</span></button>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif --}}
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

                        <div class="mb-0 d-flex justify-content-between">
                            <span>Total pendapatan anda</span>
                            <span class="text-success">{{ number_format($income, 0, '.', ',') }} IDR</span>
                        </div>
                    </div>
                </div>
            @elseif(auth()->user()->role === 'admin')
                @php
                    $income = 0.15 * $transaction->teamTournament->tournament->nominal;
                    @endphp
                <div class="card mb-3">
                    <h3 class="card-header">Pendapatan anda</h3>
                    <div class="card-body">
                        <p>Pendapatan anda ini adalah 15% dari harga penjualan harga tiket turnamen.</p>
                        <div class="mb-0 d-flex justify-content-between">
                            <span>Total pendapatan anda</span>
                            <span class="text-success">{{ number_format($income, 0, '.', ',') }} IDR</span>
                        </div>
                    </div>
                </div>
            @endif

            {{-- <p class="mb-0 mt-3">Didukung oleh <a href="https://tripay.co.id">PT Trijaya Digital Group (Tripay)</a></p> --}}
        </div>

        <div class="col-md-4">
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
                    {{-- <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Biaya Admin</span>
                        <span>{{ number_format($paymentDetail['data']['total_fee'], 0, '.', ',') }} IDR</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Total Tagihan</span>
                        <span>{{ number_format($orderItem['subtotal'] + $paymentDetail['data']['total_fee'], 0, '.', ',') }}
                            IDR</span>
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
                    </div> --}}

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

            {{-- <div class="card overflow-hidden">
                <div class="card-body pb-0">
                    <h3 class="mb-0">Panduan Pembayaran</h3>
                </div>
                <div id="accordion" class="accordion">
                    @foreach ($paymentDetail['data']['instructions'] as $key => $instruction)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $key }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $key }}" aria-expanded="false"
                                    aria-controls="collapse{{ $key }}">
                                    {{ $instruction['title'] }}
                                </button>
                            </h2>
                            <div id="collapse{{ $key }}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $key }}" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <ol class="mb-0">
                                        @foreach ($instruction['steps'] as $step)
                                            <li>{!! $step !!}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div> --}}
        </div>
    </div>
@endsection

@push('script')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

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
