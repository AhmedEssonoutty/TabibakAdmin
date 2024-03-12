@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.role')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.role_details')}}" pagetitle="{{__('messages.roles')}}" route="{{route('roles.index')}}"/>
    <div class="row">
        <div class="col-12">
            <div class="card p-2">
                <div class="card-body">
                    <h5 class="card-title">{{ucfirst($role->name)}}</h5>
                    <p class="card-text">{{__('messages.created')}}: {{date_format($role->created_at, 'd-m-Y')}}</p>

                    <h5 class="card-title">{{__('messages.permissions')}}</h5>
                    <div class="row">
                        @foreach($permissionsModules as $model)
                            <div class="col-md-4 p-2">
                                <span class="">{{$model[0]['model']}}</span>
                                <div class="border rounded px-3 py-4">
                                    @foreach($model as $permission)
                                        <span class="card-text d-block">{{explode('-', $permission->name)[0]}}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
