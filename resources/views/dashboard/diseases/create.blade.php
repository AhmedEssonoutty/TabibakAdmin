@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_disease')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_disease')}}"
                  pagetitle="{{__('messages.diseases')}}" route="{{route('diseases.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.diseases.partials.__form', ['action' => 'diseases.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
