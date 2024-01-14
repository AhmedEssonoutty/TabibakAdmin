@extends('components-layouts.master')
@section('title')
    Apex Timeline Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Timeline Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic TimeLine Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_timeline" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Different Color For Each Bar</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="color_timeline"
                        data-colors='["--tb-primary", "--tb-danger", "--tb-success", "--tb-warning", "--tb-info"]'
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
                    <h4 class="card-title mb-0">Multi Series Timeline</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multi_series" data-colors='["--tb-primary","--tb-success"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Advanced Timeline (Multiple Range)</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="advanced_timeline" data-colors='["--tb-primary", "--tb-success", "--tb-warning"]'
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
                    <h4 class="card-title mb-0">Multiple series � Group rows</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multi_series_group"
                        data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger", "--tb-info","--tb-gray","--tb-pink","--tb-purple","--tb-secondary", "--tb-dark"]'
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

    <script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>

    <!-- timeline charts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-timeline.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
