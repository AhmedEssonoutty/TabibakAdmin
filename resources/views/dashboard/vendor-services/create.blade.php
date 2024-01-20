@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_vendor_service')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_vendor_service')}}"
                  pagetitle="{{__('messages.vendor_services')}}" route="{{route('vendor-services.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.vendor-services.partials.__form', ['action' => 'vendor-services.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
