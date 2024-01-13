@extends('layouts.master')
@section('title')
    Statistics
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Statistics" pagetitle="Toner" />

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Sales / Purchase</h5>
                </div>
                <div class="card-body">
                    <div id="line_chart_datalabel" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts"
                        dir="ltr"></div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Income Statistics</h5>
                </div>
                <div class="card-body">
                    <div id="income_statistics" data-colors='["--tb-success", "--tb-primary", "--tb-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-xxl-8">
            <div class="card">
                <div class="card-header d-sm-flex align-items-center">
                    <h5 class="card-title mb-3 mb-sm-0 flex-grow-1">Top Selling Product</h5>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            ALL
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            1M
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            6M
                        </button>
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            1Y
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="selling_product"
                        data-colors='["--tb-primary", "--tb-primary-rgb, 0.80", "--tb-primary-rgb, 0.70", "--tb-primary-rgb, 0.60", "--tb-primary-rgb, 0.50"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header align-items-center d-sm-flex">
                    <h4 class="card-title mb-3 mb-sm-0 flex-grow-1">Orders by Countries</h4>
                    <div>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            ALL
                        </button>
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            1M
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            6M
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="countries_charts"
                        data-colors='["--tb-info", "--tb-info", "--tb-info", "--tb-info", "--tb-info", "--tb-info", "--tb-info","--tb-danger", "--tb-info"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('scripts')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/backend/statistics.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
