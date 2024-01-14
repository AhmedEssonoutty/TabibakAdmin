@extends('components-layouts.master')
@section('title')
    Google Maps
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Google Maps" pagetitle="Maps" />

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="gmaps-markers" class="gmaps"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Overlays</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="gmaps-overlay" class="gmaps"></div>
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
                    <h4 class="card-title mb-0">Street View Panoramas</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="panorama" class="gmaps-panaroma"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Map Types</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="gmaps-types" class="gmaps"></div>
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

    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- gmaps plugins -->
    <script src="{{ URL::asset('assets/libs/gmaps/gmaps.min.js') }}"></script>

    <!-- gmaps init -->
    <script src="{{ URL::asset('assets/js/pages/gmaps.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
