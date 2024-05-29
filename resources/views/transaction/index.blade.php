@extends('layouts.panel')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="mb-0">Riwayat Transaksi</h3>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaction.index') && !request('action') ? 'active' : '' }}" href="{{ route('transaction.index') }}">Semua</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaction.index') && request('action') === 'tournament' ? 'active' : '' }}" href="{{ route('transaction.index', ['action' => 'tournament']) }}">Per-Turnamen</a>
                </li>
            </ul>
        </div>
        @if(request()->routeIs('transaction.index') && request('action') === 'tournament' ? 'active' : '')
        @else
        <div class="table-responsive">
            <table class="table table-hover">
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
                                <a class="text-white"
                                href="{{ route('transaction.show', $transaction->transaction_id) }}">#{{ $transaction->transaction_id }}</a>
                            </th>
                            <td>{{ \Carbon\Carbon::parse($transaction->created_at)->isoFormat('D MMMM YYYY') }}</td>
                            <td>
                                @php
                                    $codeLower = strtolower($transaction->payment_method);
                                    @endphp
                                <div class="bg-white p-2 px-3 rounded-3" style="width: min-content">
                                    <img src="{{ asset("images/bank/{$codeLower}.svg") }}" alt="{{ $transaction->payment_method }}" height="32" />
                                </div>
                            </td>
                            <td><span
                                    class="badge bg-{{ \App\Enums\TransactionStatus::color($transaction->status) }}">{{ \App\Enums\TransactionStatus::label($transaction->status) }}</span>
                                </td>
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
        @endif
    </div>

    {{ $transactionData->links() }}
@endsection
