@extends('components-layouts.master')
@section('title')
    Apex Area Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Area Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Area Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area_chart_basic" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Spline Area Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area_chart_spline" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Area Chart - Datetime X - Axis Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div>
                        <div class="toolbar d-flex align-items-start justify-content-center flex-wrap gap-2">
                            <button type="button" class="btn btn-soft-primary timeline-btn btn-sm" id="one_month">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-primary timeline-btn btn-sm" id="six_months">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-primary timeline-btn btn-sm active" id="one_year">
                                1Y
                            </button>
                            <button type="button" class="btn btn-soft-primary timeline-btn btn-sm" id="all">
                                ALL
                            </button>
                        </div>
                        <div id="area_chart_datetime" data-colors='["--tb-info"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Area with Negative Values Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area_chart_negative" data-colors='["--tb-success", "--tb-info"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Area Chart - Github Style</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div>
                        <div class="bg-light">
                            <div id="area_chart-months" data-colors='["--tb-danger"]' class="apex-charts" dir="ltr">
                            </div>
                        </div>

                        <div class="github-style d-flex align-items-center my-2">
                            <div class="flex-shrink-0 me-2">
                                <img class="avatar-sm rounded" src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}"
                                    data-hovercard-user-id="634573" alt="" />
                            </div>
                            <div class="flex-grow-1">
                                <a class="font-size-14 text-dark fw-medium">coder</a>
                                <div class="cmeta text-muted font-size-11">
                                    <span class="commits text-dark fw-medium"></span> commits
                                </div>
                            </div>
                        </div>

                        <div class="bg-light">
                            <div id="area_chart-years" data-colors='["--tb-success"]' class="apex-charts" dir="ltr">
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Stacked Area Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area_chart_stacked" data-colors='["--tb-success", "--tb-info", "--tb-light"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Irregular Timeseries Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area_chart_irregular" data-colors='["--tb-primary", "--tb-warning", "--tb-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Area Chart With Null Values Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area-missing-null-value" data-colors='["--tb-success"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- for basic area chart -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <!-- for github style chart -->
    <script src="https://apexcharts.com/samples/assets/github-data.js"></script>
    <!-- for irregular timeseries chart -->
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>

    <!-- areacharts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-area.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
