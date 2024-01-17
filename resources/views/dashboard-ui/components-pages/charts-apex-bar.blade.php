@extends('components-layouts.master')
@section('title')
    Apex Bar Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Bar Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Bar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="bar_chart" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Custom DataLabels Bar</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="custom_datalabels_bar"
                        data-colors='["--tb-primary", "--tb-secondary", "--tb-success", "--tb-info", "--tb-warning", "--tb-danger", "--tb-dark", "--tb-primary", "--tb-success", "--tb-secondary"]'
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
                    <h4 class="card-title mb-0">Stacked Bar Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="stacked_bar"
                        data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger", "--tb-info"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Stacked Bars 100</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="stacked_bar_100"
                        data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger", "--tb-info"]'
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
                    <h4 class="card-title mb-0">Bar with Negative Values</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="negative_bars" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar with Markers</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="bar_markers" data-colors='["--tb-success", "--tb-primary"]' class="apex-charts" dir="ltr">
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
                    <h4 class="card-title mb-0">Reversed Bar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="reversed_bars" data-colors='["--tb-info"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Patterned Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="patterned_bars" data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger"]'
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
                    <h4 class="card-title mb-0">Grouped Bar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="grouped_bar" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar with Images</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div id="bar_images" class="apex-charts" dir="ltr"></div>
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

    <!-- barcharts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-bar.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
