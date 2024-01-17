@extends('components-layouts.master')
@section('title')
    Mixed Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Mixed Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line & Column Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_column_chart" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Multiple Y-Axis Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multi_chart" data-colors='["--tb-primary", "--tb-info", "--tb-success"]' class="apex-charts"
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
                    <h4 class="card-title mb-0">Line & Area Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_area_chart" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line, Column & Area Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="line_area_charts" data-colors='["--tb-primary", "--tb-success", "--tb-danger"]'
                        class="apex-charts" dir="ltr"></div>
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

    <!-- mixed charts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-mixed.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
