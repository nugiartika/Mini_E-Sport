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
                    <th>Jenis Transaksi</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactionData as $transaction)
                <tr>
                    <td>
                        <a href="{{ route('transaction.show', $transaction->ref_id) }}">#{{ $transaction->ref_id }}</a>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($transaction->created_at)->isoFormat('D MMMM YYYY') }}</td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>
                        {{-- <a href="{{ route('transaction.detail', $transaction->id) }}" class="btn btn-primary btn-sm">Detail</a> --}}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <div class="p-3 text-center">
                            <h3 class="mb-2">Tidak Ada Data</h3>
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
