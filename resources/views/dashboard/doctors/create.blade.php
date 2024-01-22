@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_doctor')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_doctor')}}"
                  pagetitle="{{__('messages.doctors')}}" route="{{route('doctors.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.doctors.partials.__form', ['action' => 'doctors.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
