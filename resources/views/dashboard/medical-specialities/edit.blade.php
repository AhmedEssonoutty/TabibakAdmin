@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_medical_specialty')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_medical_specialty')}}"
                  pagetitle="{{__('messages.medical_specialities')}}" route="{{route('medical-specialities.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.medical-specialities.partials.__form', ['action' => ['medical-specialities.update', $medicalSpeciality->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
