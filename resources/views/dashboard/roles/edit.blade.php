@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_role')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_role')}}" pagetitle="{{__('messages.roles')}}" route="{{route('roles.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.roles.partials.__form', ['action' => ['roles.update', $role->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
