@extends('layouts.master')
@section('title')
    Starter
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Starter" pagetitle="Pages" />
@endsection
@section('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
