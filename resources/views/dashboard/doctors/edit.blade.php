@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_doctor')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_doctor')}}"
                  pagetitle="{{__('messages.doctors')}}" route="{{route('doctors.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.doctors.partials.__form', ['action' => ['doctors.update', $doctor->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
