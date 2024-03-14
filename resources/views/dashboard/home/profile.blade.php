@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.user')}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset($user->avatar ? 'storage/images/users/' . $user->avatar : 'assets/images/users/user-dummy-img.jpg') }}" class="card-img-top img-fluid mx-auto d-block float-md-left mr-md-4" @style(['max-height:400px'])>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card p-2">
                <div class="card-body">
                    <h5 class="card-title py-2">{{ucfirst($user->name)}}</h5>
                    <p class="card-text">{{__('messages.joined')}}: {{date_format($user->created_at, 'd-m-Y')}}</p>
                    <h5 class="card-title py-2">{{__('messages.details')}}</h5>
                    <div class="row p-2">
                        <div class="col-6">{{__('messages.email')}}</div>
                        <div class="col-6">{{$user->email}}</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-6">{{__('messages.phone')}}</div>
                        <div class="col-6">{{$user->phone}}</div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-2 pt-3">
                        <a class="w-100 btn btn-primary" href="{{route('users.edit', $user->id)}}">
                            <i data-feather="x"></i>
                            @lang('messages.edit')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
