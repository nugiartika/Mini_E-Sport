@php
    if(auth()->user()->role === 'user') {
        $layout = 'user.layouts.app';
    } elseif(auth()->user()->role === 'organizer') {
        $layout = 'layouts.penyelenggara';
    } else {
        $layout = 'admin.layouts.app';
    }
@endphp

@extends($layout)

@section('content')
<div class="card card-body mb-3">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Metode Pembayaran</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactionData as $transaction)
                <tr>
                    <th>
                        <a class="text-white" href="{{ route('transaction.show', $transaction->transaction_id) }}">#{{ $transaction->transaction_id }}</a>
                    </th>
                    <td>{{ \Carbon\Carbon::parse($transaction->created_at)->isoFormat('D MMMM YYYY') }}</td>
                    <td>
                        <div class="bg-white p-2 px-3 rounded-3" style="width: min-content">
                            <img src="{{ $paymentList->where('code', $transaction->payment_method)->first()['icon_url'] }}" alt="{{ $transaction->payment_method }}" height="32" />
                        </div>
                    </td>
                    <td><span class="badge bg-{{ \App\Enums\TransactionStatus::color($transaction->status) }}">{{ \App\Enums\TransactionStatus::label($transaction->status) }}</span></td>
                    <td>{{ number_format($transaction->amount, 0, '.', ',') }} IDR</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="p-3 text-center">
                            <h3 class="mb-2">Tidak Ada Data</h3>
                            <p class="mb-0 text-muted">Tidak ada data transaksi yang tampil untuk saat ini.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{ $transactionData->links() }}
@endsection
