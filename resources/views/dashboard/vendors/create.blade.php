@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_vendor')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_vendor')}}"
                  pagetitle="{{__('messages.vendors')}}" route="{{route('vendors.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.vendors.partials.__form', ['action' => 'vendors.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
