@extends('components-layouts.master')
@section('title')
    Apex Polararea Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Polararea Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Polararea Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_polar_area"
                        data-colors='["--tb-primary", "--tb-success", "--tb-warning","--tb-danger", "--tb-info", "--tb-success", "--tb-primary", "--tb-dark", "--tb-secondary"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">PolarArea Monochrome</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="monochrome_polar_area" class="apex-charts" dir="ltr"></div>
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

    <!-- polarareacharts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-polararea.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
