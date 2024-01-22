@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_patient')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_patient')}}"
                  pagetitle="{{__('messages.patients')}}" route="{{route('patients.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.patients.partials.__form', ['action' => ['patients.update', $patient->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
