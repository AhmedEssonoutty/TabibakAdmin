@extends('components-layouts.master')
@section('title')
    Apex Radialbar Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Radialbar Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Simple Radialbar Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_radialbar" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Multiple Radialbar</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multiple_radialbar"
                        data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger"]' class="apex-charts"
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
                    <h4 class="card-title mb-0">Circle Chart - Custom Angle</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="circle_radialbar" data-colors='["--tb-primary", "--tb-info", "--tb-danger", "--tb-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Gradient Circle Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="gradient_radialbar" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
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
                    <h4 class="card-title mb-0">Stroked Circle Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="stroked_radialbar" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Radialbars with Image</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="radialbar_with_img" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
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
                    <h4 class="card-title mb-0">Semi Circular Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="semi_radialbar" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
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

    <!-- radialbar charts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-radialbar.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
