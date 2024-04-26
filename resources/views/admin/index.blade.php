@extends('admin.layouts.app')

@section('style')
    <!-- Add Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-xl-2 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.556 19.948q-.16 0-.32-.037t-.3-.13l-2.346-1.366q-.285-.163-.437-.44T13 17.371v-2.717q0-.328.153-.604t.437-.44l2.347-1.366q.14-.093.3-.13t.322-.037t.308.046t.287.121L19.5 13.61q.287.163.451.44t.164.604v2.717q0 .328-.164.604q-.164.277-.451.44l-2.346 1.368q-.137.079-.287.122t-.31.043M10 11.385q-1.237 0-2.119-.882T7 8.385t.881-2.12T10 5.386t2.119.88t.881 2.12t-.881 2.118t-2.119.882m-7 7.23V16.97q0-.69.348-1.194t.983-.802q1.217-.592 2.51-.975T10 13.615h.235q.092 0 .223.012q-.104.258-.165.505t-.116.483H10q-1.679 0-2.928.345q-1.249.344-2.264.89q-.456.24-.632.504T4 16.969v.646h6.3q.073.237.179.51q.106.271.233.49zm7-8.23q.825 0 1.413-.588T12 8.385t-.587-1.413T10 6.385t-1.412.587T8 8.385t.588 1.412t1.412.588m4.342 3.773l2.216 1.279l2.215-1.28l-2.215-1.272zm2.658 4.7l2.23-1.288v-2.724L17 16.19zm-3.115-1.281l2.23 1.306v-2.668l-2.23-1.325z" />
                            </svg>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Total</h5>
                        <small class="text-muted">Penyelenggara</small>
                        <p class="mb-2 mt-1">{{ $organizer }}</p>
                        <div class="pt-1">
                            {{-- <span class="badge bg-label-secondary">-12.2%</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Sales -->
            <div class="col-xl-2 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-info mb-2 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18.39 14.56C16.71 13.7 14.53 13 12 13s-4.71.7-6.39 1.56A2.97 2.97 0 0 0 4 17.22V20h16v-2.78c0-1.12-.61-2.15-1.61-2.66M9.78 12h4.44c1.21 0 2.14-1.06 1.98-2.26l-.32-2.45C15.57 5.39 13.92 4 12 4S8.43 5.39 8.12 7.29L7.8 9.74c-.16 1.2.77 2.26 1.98 2.26" />
                            </svg>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Total</h5>
                        <small class="text-muted">User</small>
                        <p class="mb-2 mt-1">{{ $user }}</p>
                        <div class="pt-1">
                            {{-- <span class="badge bg-label-secondary">+25.2%</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Sales -->
            <div class="col-xl-2 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-info mb-2 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M176 116h-24a12 12 0 0 1 0-24h24a12 12 0 0 1 0 24m-72-24h-4v-4a12 12 0 0 0-24 0v4h-4a12 12 0 0 0 0 24h4v4a12 12 0 0 0 24 0v-4h4a12 12 0 0 0 0-24m140.76 110.94a40 40 0 0 1-61 5.35a7 7 0 0 1-.53-.56L144.67 164h-33.34l-38.52 43.73c-.17.19-.35.38-.53.56a40 40 0 0 1-67.66-35.24a1.18 1.18 0 0 1 0-.2L21 88.79A63.88 63.88 0 0 1 83.88 36H172a64.08 64.08 0 0 1 62.93 52.48a1.8 1.8 0 0 1 0 .19l16.36 84.17a1.77 1.77 0 0 1 0 .2a39.74 39.74 0 0 1-6.53 29.9M172 140a40 40 0 0 0 0-80H83.89a39.9 39.9 0 0 0-39.27 33.06a1.55 1.55 0 0 0 0 .21l-16.34 84a16 16 0 0 0 13 18.44a16.07 16.07 0 0 0 13.86-4.21l41.76-47.43a12 12 0 0 1 9-4.07Zm55.76 37.31l-7-35.95a63.84 63.84 0 0 1-44.27 22.46l24.41 27.72a16 16 0 0 0 26.85-14.23Z" />
                            </svg></div>
                        <h5 class="card-title mb-1 pt-2">Total</h5>
                        <small class="text-muted">Category Game</small>
                        <p class="mb-2 mt-1">{{ $category }}</p>
                        <div class="pt-1">
                            {{-- <span class="badge bg-label-secondary">+25.2%</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-info mb-2 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M8.385 20v-1H11.5v-3.754q-1.283-.102-2.36-1.047t-1.317-2.21q-1.586-.187-2.705-1.302T4 8V6h3.654V4h8.692v2H20v2q0 1.573-1.118 2.688q-1.119 1.114-2.705 1.3q-.239 1.266-1.316 2.211T12.5 15.246V19h3.115v1zm-.731-9.085V7H5v1q0 1.142.762 1.963q.761.82 1.892.952m8.692 0q1.13-.132 1.892-.952T19 8V7h-2.654z" />
                            </svg></div>
                        <h5 class="card-title mb-1 pt-2">Total</h5>
                        <small class="text-muted">Tournament</small>
                        <p class="mb-2 mt-1">{{ $tournament }}</p>
                        <div class="pt-1">
                            {{-- <span class="badge bg-label-secondary">+25.2%</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-info mb-2 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.5 13c-1.2 0-3.07.34-4.5 1c-1.43-.67-3.3-1-4.5-1C5.33 13 1 14.08 1 16.25V19h22v-2.75c0-2.17-4.33-3.25-6.5-3.25m-4 4.5h-10v-1.25c0-.54 2.56-1.75 5-1.75s5 1.21 5 1.75zm9 0H14v-1.25c0-.46-.2-.86-.52-1.22c.88-.3 1.96-.53 3.02-.53c2.44 0 5 1.21 5 1.75zM7.5 12c1.93 0 3.5-1.57 3.5-3.5S9.43 5 7.5 5S4 6.57 4 8.5S5.57 12 7.5 12m0-5.5c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m9 5.5c1.93 0 3.5-1.57 3.5-3.5S18.43 5 16.5 5S13 6.57 13 8.5s1.57 3.5 3.5 3.5m0-5.5c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2" />
                            </svg></i></div>
                        <h5 class="card-title mb-1 pt-2">Total</h5>
                        <small class="text-muted">Team</small>
                        <p class="mb-2 mt-1">{{ $team }}</p>
                        <div class="pt-1">
                            {{-- <span class="badge bg-label-secondary">+25.2%</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-info mb-2 rounded"><svg xmlns="http://www.w3.org/2000/svg"
                                width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.5 13c-1.2 0-3.07.34-4.5 1c-1.43-.67-3.3-1-4.5-1C5.33 13 1 14.08 1 16.25V19h22v-2.75c0-2.17-4.33-3.25-6.5-3.25m-4 4.5h-10v-1.25c0-.54 2.56-1.75 5-1.75s5 1.21 5 1.75zm9 0H14v-1.25c0-.46-.2-.86-.52-1.22c.88-.3 1.96-.53 3.02-.53c2.44 0 5 1.21 5 1.75zM7.5 12c1.93 0 3.5-1.57 3.5-3.5S9.43 5 7.5 5S4 6.57 4 8.5S5.57 12 7.5 12m0-5.5c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m9 5.5c1.93 0 3.5-1.57 3.5-3.5S18.43 5 16.5 5S13 6.57 13 8.5s1.57 3.5 3.5 3.5m0-5.5c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2" />
                            </svg></i></div>
                        <h5 class="card-title mb-1 pt-2">Total</h5>
                        <small class="text-muted">Submission</small>
                        <p class="mb-2 mt-1">{{ $sainsRole }}</p>
                        <div class="pt-1">
                            {{-- <span class="badge bg-label-secondary">+25.2%</span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Line Chart -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Grafik User</h5>
                            <small class="text-muted">Grafik pertumbuhan user Tiap bulan</small>
                        </div>
                        <div class="d-sm-flex d-none align-items-center">

                        </div>
                    </div>
                    <div class="card-body">
                        <div id="lineChart"></div>
                    </div>
                </div>
            </div>
            <!-- /Line Chart -->

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('demo/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a') }}"></script>
    <script>
        $.ajax({
            url: '{{ route('chart') }}',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                chart(response.user_count)
            },
            error: function(xhr, status, error) {
                // Tangani kesalahan jika ada
            }
        });

function chart(data) {
        var options = {
            series: [{
                name: "User",
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
                text: 'Daftar User Tiap Bulan',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            }
        };

        var chart = new ApexCharts(document.querySelector("#lineChart"), options);
        chart.render();
}
    </script>
@endsection
