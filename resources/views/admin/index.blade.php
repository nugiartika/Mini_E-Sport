@extends('layouts.panel')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title mb-0">Statistik</h5>
            {{-- <small class="text-muted">Updated 1 month ago</small> --}}
        </div>
        <div class="card-body pt-2">
            <div class="row gy-3">
                <div class="col-md-2 col-6">
                    <a href="{{ route('user.index') }}" class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-danger me-3 p-2">
                            <i class="ti ti-user ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">{{ $user }}</h5>
                            <small class="text-white">Pengguna</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="{{ route('user.index', ['role' => 'organizer']) }}" class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-warning me-3 p-2">
                            <i class="ti ti-calendar-time ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">{{ $organizer }}</h5>
                            <small class="text-white">Penyelenggara</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="{{ route('category.index') }}" class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-primary me-3 p-2">
                            <i class="ti ti-device-gamepad ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">{{ $category }}</h5>
                            <small class="text-white">Game</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <div class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-info me-3 p-2">
                            <i class="ti ti-users ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">{{ $team }}</h5>
                            <small class="text-white">Tim</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <a href="{{ route('DetailTournament') }}" class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-trophy ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">{{ $tournament }}</h5>
                            <small class="text-white">Turnamen</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-6">
                    <a href="{{ route('konfirmtournament') }}" class="d-flex align-items-center">
                        <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-checklist ti-sm"></i>
                        </div>
                        <div class="card-info">
                            <h5 class="mb-0">{{ $eoConfirm }}</h5>
                            <small class="text-white">Konfirmasi Pendaftaran</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h5 class="card-title mb-0">Perkembangan Situs</h5>
                <small class="text-muted">Grafik pengguna setiap bulannya.</small>
            </div>
            <div class="d-sm-flex d-none align-items-center">

            </div>
        </div>
        <div class="card-body">
            <div id="lineChart"></div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('admin-panel/dist/libs/apex-charts/apexcharts.js') }}"></script>

    <script>
        $.ajax({
            url: '{{ route('chart') }}',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                chart(response.user_count)
            },
            error: function(xhr, status, error) {}
        });

        function chart(data) {
            var options = {
                series: [{
                    name: "Pengguna",
                    data: data
                }],
                chart: {
                    height: 350,
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                title: {
                    text: 'Daftar Pengguna',
                    align: 'left'
                },
                grid: {
                    row: {
                        colors: ['#f3f3f3', 'transparent'],
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', "Nov", "Des"],
                }
            };

            var chart = new ApexCharts(document.querySelector("#lineChart"), options);
            chart.render();
        }
    </script>
@endpush
