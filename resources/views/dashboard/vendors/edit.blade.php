@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_vendor')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_vendor')}}"
                  pagetitle="{{__('messages.vendors')}}" route="{{route('vendors.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.vendors.partials.__form', ['action' => ['vendors.update', $vendor->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
