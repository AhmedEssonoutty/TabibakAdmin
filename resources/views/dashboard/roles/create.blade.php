@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_role')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_role')}}" pagetitle="{{__('messages.roles')}}" route="{{route('roles.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.roles.partials.__form', ['action' => 'roles.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
