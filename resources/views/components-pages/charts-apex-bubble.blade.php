@extends('components-layouts.master')
@section('title')
    Apex Bubble Charts
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Bubble Charts" pagetitle="Apexcharts" />

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Bubble Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="simple_bubble" data-colors='["--tb-primary", "--tb-info", "--tb-warning", "--tb-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">3D Bubble Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="bubble_chart" data-colors='["--tb-primary", "--tb-success", "--tb-warning", "--tb-danger"]'
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

    <!-- bubblecharts init -->
    <script src="{{ URL::asset('assets/js/pages/apexcharts-bubble.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
