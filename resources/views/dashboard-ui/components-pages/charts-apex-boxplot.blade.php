@extends('components-layouts.master')
@section('title')
    Apex Boxplot Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Boxplot Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Box Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_box" data-colors='["--tb-primary", "--tb-info"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Boxplot with Scatter Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="box_plot" data-colors='["--tb-danger", "--tb-info", "--tb-danger", "--tb-primary"]'
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
                    <h4 class="card-title mb-0">Horizontal BoxPlot</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="box_plot_hori" data-colors='["--tb-light", "--tb-card-bg-custom"]' class="apex-charts"
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

    <!-- boxplotcharts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-boxplot.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
