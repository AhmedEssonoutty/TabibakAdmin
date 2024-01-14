@extends('components-layouts.master')
@section('title')
    Apex Line Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Line Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Line Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_basic" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Zoomable Timeseries</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_zoomable" data-colors='["--tb-secondary"]' class="apex-charts" dir="ltr"></div>
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
                    <h4 class="card-title mb-0">Line with Data Labels</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_datalabel" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Dashed Line</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_dashed" data-colors='["--tb-primary", "--tb-danger", "--tb-success"]'
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
                    <h4 class="card-title mb-0">Line with Annotations</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_annotations" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Brush Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div>
                        <div id="brushchart_line2" data-colors='["--tb-danger"]' class="apex-charts" dir="ltr"></div>
                        <div id="brushchart_line" data-colors='["--tb-info"]' class="apex-charts" dir="ltr"></div>
                    </div>
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
                    <h4 class="card-title mb-0">Stepline Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_stepline" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Gradient Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_gradient" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
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
                    <h4 class="card-title mb-0">Missing Data/ Null Value Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_missing_data" data-colors='["--tb-primary", "--tb-danger", "--tb-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Realtimes Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_chart_realtime" data-colors='["--tb-secondary"]' class="apex-charts" dir="ltr"></div>
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
                    <h4 class="card-title mb-0">Syncing Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div>
                        <div id="chart-syncing-line" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr">
                        </div>
                        <div id="chart-syncing-line2" data-colors='["--tb-warning"]' class="apex-charts" dir="ltr">
                        </div>
                        <div id="chart-syncing-area" data-colors='["--tb-success"]' class="apex-charts" dir="ltr">
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection

@section('scripts')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

    <!-- linecharts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-line.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection