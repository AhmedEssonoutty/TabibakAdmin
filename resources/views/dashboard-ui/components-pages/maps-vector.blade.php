@extends('components-layouts.master')
@section('title')
    Vector Maps
@endsection
@section('css')
    <!-- add extra css -->
    <!-- plugin css -->
    <link href="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Vector Maps" pagetitle="Maps" />

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 420px"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">World Vector Map with Markers</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="world-map-markers" data-colors='["--tb-light"]' style="height: 350px" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">World Vector Map with Image Markers</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="world-map-markers-image" data-colors='["--tb-light"]' style="height: 350px" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">USA Vector Map</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="usa-vectormap" data-colors='["--tb-primary"]' style="height: 350px"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Canada Vector Map</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="canada-vectormap" data-colors='["--tb-info"]' style="height: 350px"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Russia Vector Map</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="russia-vectormap" data-colors='["--tb-success"]' style="height: 350px"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Spain Vector Map</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="spain-vectormap" data-colors='["--tb-secondary"]' style="height: 350px"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <!-- prismjs plugin -->
    <script src="{{ URL::asset('assets/libs/prismjs/prism.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/world-merc.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/us-merc-en.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/canada.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/russia.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/spain.js') }}"></script>

    <!-- vector-maps init -->
    <script src="{{ URL::asset('assets/js/pages/vector-maps.init.js') }}"></script>

    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
