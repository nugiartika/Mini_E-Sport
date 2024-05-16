@php
    if (auth()->user()->role === 'user') {
        $layout = 'user.layouts.app';
    } elseif (auth()->user()->role === 'organizer') {
        $layout = 'layouts.penyelenggara';
    } else {
        $layout = 'admin.layouts.app';
    }
@endphp

@extends($layout)

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
            <div class="card card-body">
                <div class="row">
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
                        <p class="fw-bold mb-2">{{ $paymentDetail['data']['customer_name'] }}</p>
                        <p class="mb-1">{{ $paymentDetail['data']['customer_phone'] }}</p>
                        <p class="mb-1">{{ $paymentDetail['data']['customer_email'] }}</p>
                    </div>
                </div>

                <div class="mt-4 mb-2">
                    <h3>Detail Tagihan</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paymentDetail['data']['order_items'] as $orderItem)
                                    <tr>
                                        <th>#{{ $orderItem['sku'] }}</th>
                                        <td>{{ $orderItem['name'] }}</td>
                                        <td>1 item</td>
                                        <td>{{ number_format($orderItem['subtotal'], 0, '.', ',') }} IDR</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th>&nbsp;</th>
                                    <td>Biaya Admin</td>
                                    <td>1 item</td>
                                    <td>{{ number_format($paymentDetail['data']['total_fee'], 0, '.', ',') }} IDR</td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="text-end">Total</th>
                                    <td>2 item</td>
                                    <td>{{ number_format($orderItem['subtotal'] + $paymentDetail['data']['total_fee'], 0, '.', ',') }}
                                        IDR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                @if (!in_array($transaction->status, ['PAID', 'EXPIRED', 'REFUND', 'FAILED']))
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
                @endif
            </div>

            <p class="mb-0 mt-3">Didukung oleh <a href="https://tripay.co.id">PT Trijaya Digital Group (Tripay)</a></p>
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
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Biaya Admin</span>
                        <span>{{ number_format($paymentDetail['data']['total_fee'], 0, '.', ',') }} IDR</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Total Tagihan</span>
                        <span>{{ number_format($orderItem['subtotal'] + $paymentDetail['data']['total_fee'], 0, '.', ',') }}
                            IDR</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="fw-bold">ID Referensi</span>
                        <div class="d-flex gap-2 align-items-center">
                            <a class="text-white text-decoration-none" href="javascript:copyAndShowAlert('refId')"><i
                                    class="ti ti-copy"></i></a>
                            <span id="refId">{{ $transaction->ref_id }}</span>
                        </div>
                    </div>
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

            <div class="card overflow-hidden">
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

            </div>
        </div>
    </div>
@endsection

@section('script')
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
@endsection
