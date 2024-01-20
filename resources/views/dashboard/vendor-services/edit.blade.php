@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_medical_specialty')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_medical_specialty')}}"
                  pagetitle="{{__('messages.medical_specialities')}}" route="{{route('medical-specialities.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.vendor-services.partials.__form', ['action' => ['vendor-services.update', $vendorService->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
