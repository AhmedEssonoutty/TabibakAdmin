@extends('components-layouts.master')
@section('title')
    Remix Icons
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Remix Icons" pagetitle="Icons" />

    <div class="row">

    </div><!-- end row -->

    <div class="row">
        <div class="col-12" id="icons"></div> <!-- end col-->
    </div><!-- end row -->
@endsection

@section('scripts')
    <!-- materialdesign icon js-->
    <script src="{{ URL::asset('assets/js/pages/remix-icons-listing.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
