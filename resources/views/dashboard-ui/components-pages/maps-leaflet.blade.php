@extends('components-layouts.master')
@section('title')
    Leaflet Maps
@endsection
@section('css')
    <!-- add extra css -->
    <!-- leaflet Css -->
    <link href="{{ URL::asset('assets/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Leaflet Maps" pagetitle="Maps" />

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Example</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map" class="leaflet-map"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers, Circles and Polygons</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-marker" class="leaflet-map"></div>
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
                    <h4 class="card-title mb-0">Working with Popups</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-popup" class="leaflet-map"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers with Custom Icons</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
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
                    <h4 class="card-title mb-0">Interactive Choropleth Map</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Layer Groups and Layers Control</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-group-control" class="leaflet-map"></div>
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

    <!-- leaflet plugin -->
    <script src="{{ URL::asset('assets/libs/leaflet/leaflet.js') }}"></script>

    <!-- leaflet map.init -->
    <script src="{{ URL::asset('assets/js/pages/leaflet-us-states.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/leaflet-map.init.js') }}"></script>

    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
