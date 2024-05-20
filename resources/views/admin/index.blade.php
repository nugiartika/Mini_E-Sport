@extends('layouts.panel')

@section('content')
    <div class="row">
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <a href="{{ route('user.index', ['role' => 'organizer']) }}">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded">
                            <i class="ti ti-package"></i>
                        </div>
                        <h6 class="card-title mb-1 pt-2">Penyelenggara</h6>
                        <p class="mb-0 mt-1">{{ $organizer }} penyelenggara</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Total Sales -->
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <a href="{{ route('user.index') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-info mb-2 rounded">
                            <i class="ti ti-users"></i>
                        </div>
                        <h6 class="card-title mb-1 pt-2">Pengguna</h6>
                        <p class="mb-0 mt-1">{{ $user }} pengguna</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Total Sales -->
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <a href="{{ route('category.index') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-warning mb-2 rounded">
                            <i class="ti ti-device-gamepad-2"></i>
                        </div>
                        <h6 class="card-title mb-1 pt-2">Game</h6>
                        <p class="mb-0 mt-1">{{ $category }} game</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="badge p-2 bg-label-secondary mb-2 rounded">
                        <i class="ti ti-users-group"></i>
                    </div>
                    <h6 class="card-title mb-1 pt-2">Tim</h6>
                    <p class="mb-0 mt-1">{{ $team }} tim</p>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <a href="{{ route('DetailTournament') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-primary mb-2 rounded">
                            <i class="ti ti-trophy"></i>
                        </div>
                        <h6 class="card-title mb-1 pt-2">Turnamen</h6>
                        <p class="mb-0 mt-1">{{ $tournament }} turnamen</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <a href="{{ route('konfirmtournament') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-success mb-2 rounded">
                            <i class="ti ti-check"></i>
                        </div>
                        <h6 class="card-title mb-1 pt-2">Pengajuan</h6>
                        <p class="mb-0 mt-1">{{ $eoConfirm }} tertunda</p>
                    </div>
                </div>
            </a>
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
                theme: {
                    mode: 'auto'
                },
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
