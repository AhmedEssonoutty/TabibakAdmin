@extends('components-layouts.master')
@section('title')
    Apex Scatter Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Scatter Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Scatter Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_scatter" data-colors='["--tb-primary", "--tb-success", "--tb-warning"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Scatter - Datetime Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="datetime_scatter"
                        data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-warning", "--tb-info"]'
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
                    <h4 class="card-title mb-0">Scatter Images Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="images_scatter" data-colors='["--tb-primary", "--tb-danger"]' class="apex-charts"
                        dir="ltr"></div>
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

    <!-- scatter charts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-scatter.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
