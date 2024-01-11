@extends('components-layouts.master')
@section('title')
    Bootstrap Icons
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Bootstrap Icons" pagetitle="Icons" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Examples</h4>
                    <p class="text-muted mb-0">Use <code>&lt;i class="bi bi-**">&lt;/i></code> class.</p>
                </div>
                <div class="card-body pt-0">

                    <div class="row icon-demo-content" id="iconList"></div>
                    <!-- end row -->

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <!-- bootstrap icons init -->
    <script src="{{ URL::asset('assets/js/pages/bootstrap-icons.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
