@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_user')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_user')}}" pagetitle="{{__('messages.users')}}" route="{{route('users.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.users.partials.__form', ['action' => 'users.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
