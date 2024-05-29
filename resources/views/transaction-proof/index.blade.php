@extends('layouts.panel')

@section('content')
<div class="card">
    <div class="card-header flex-column flex-lg-row d-flex justify-content-between">
        <h3 class="mb-0">Bukti Transaksi</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
