@extends('user.layouts.app')

    @section('content')
 {{-- start row             --}}
 <div class="row">
    <!-- Sales last year -->
    <div class="col-xl-2 col-md-4 col-6 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <h5 class="card-title mb-0">Sales</h5>
                <small class="text-muted">Last Year</small>
            </div>
            <div id="salesLastYear"></div>
            <div class="card-body pt-0">
                <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                    <h4 class="mb-0">175k</h4>
                    <small class="text-danger">-16.2%</small>
                </div>
            </div>
        </div>
    </div>


    <!-- Sales last 6 months -->
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title mb-0">
                    <h5 class="mb-0">Sales</h5>
                    <small class="text-muted">Last 6 Months</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="salesLastMonthMenu"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="salesLastMonthMenu">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="salesLastMonth"></div>
            </div>
        </div>
    </div>


</div>
{{-- end row --}}
    @endsection
