@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_vendor_service')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_vendor_service')}}"
                  pagetitle="{{__('messages.vendor_services')}}" route="{{route('vendor-services.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.vendor-services.partials.__form', ['action' => ['vendor-services.update', $vendorService->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
