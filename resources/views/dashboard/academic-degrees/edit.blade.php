@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_academic_degree')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_academic_degree')}}"
                  pagetitle="{{__('messages.academic_degrees')}}" route="{{route('academic-degrees.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.academic-degrees.partials.__form', ['action' => ['academic-degrees.update', $academicDegree->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
