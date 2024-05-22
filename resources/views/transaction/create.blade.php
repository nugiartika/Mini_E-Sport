@extends('layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header d-flex gap-3 align-items-center justify-content-between">
            <h3 class="mb-0">Bayar Untuk Turnamen {{ $eventData->tournament->name }}</h3>
            <button class="btn btn-primary" type="button" onclick="document.getElementById('form-payment').submit()">Bayar
                Sekarang</button>
        </div>
        <div class="card-body">

            @if ($errors->all())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <form method="POST" id="form-payment" action="{{ route('transaction.store') }}">
                @csrf

                <input type="hidden" name="team_tournament_id" value="{{ $eventData->id }}">
                <input type="hidden" name="user_id" value="{{ $eventData->toTeam->user->id }}">

                <div class="row gy-4">
                    @forelse ($paymentList as $index => $payment)
                        <div class="col-md-3">
                            <div class="form-check custom-option custom-option-icon">
                                <label class="form-check-label custom-option-content" for="method-{{ $index }}" />
                                <span class="custom-option-body">
                                    @php
                                        $codeLower = strtolower($payment['code']);
                                    @endphp
                                    <div class="mb-2 bg-white p-2 py-3 rounded-2 mx-auto">
                                        <img src="{{ asset("images/bank/{$codeLower}.svg") }}" style="height: 48px;width: auto;"
                                            alt="{{ $payment['name'] }}" />
                                    </div>
                                    <span class="custom-option-title">{{ $payment['name'] }}</span>
                                    <span>{{ number_format($payment['fee'], 0, ',', '.') }} IDR / transaksi</span>
                                </span>
                                <input name="payment_method" class="form-check-input" type="radio"
                                    value="{{ $payment['code'] }}" id="method-{{ $index }}">
                                </label>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-4 mx-auto text-center">
                            <i class="ti ti-exclamation-triangle"></i>
                            <h3>Maaf, Ada Kesalahan Dari Server</h3>
                        </div>
                    @endforelse
                </div>
            </form>
        </div>
    </div>
@endsection
