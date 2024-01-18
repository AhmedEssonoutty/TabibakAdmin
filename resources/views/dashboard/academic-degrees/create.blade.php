@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_academic_degree')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_academic_degree')}}"
                  pagetitle="{{__('messages.academic_degrees')}}" route="{{route('academic-degrees.index')}}"/>
    {{$errors}}
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.academic-degrees.partials.__form', ['action' => 'academic-degrees.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
