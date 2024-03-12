@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.user')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.user_details')}}" pagetitle="{{__('messages.users')}}" route="{{route('users.index')}}"/>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset($user->avatar ? 'storage/images/users/' . $user->avatar : 'storage/images/users/default.jpg') }}" class="card-img-top img-fluid mx-auto d-block float-md-left mr-md-4" @style(['max-height:400px'])>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card p-2">
                <div class="card-body">
                    <h5 class="card-title">{{ucfirst($user->name)}}</h5>
                    <p class="card-text">{{__('messages.joined')}}: {{date_format($user->created_at, 'd-m-Y')}}</p>

                    <h5 class="card-title">{{__('messages.details')}}</h5>
                    <span class="card-text d-block">{{__('messages.email')}}: {{$user->email}}</span>
                    <span class="card-text d-block">{{__('messages.phone')}}: {{$user->phone}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
