@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_patient')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_patient')}}"
                  pagetitle="{{__('messages.patients')}}" route="{{route('patients.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.patients.partials.__form', ['action' => 'patients.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
