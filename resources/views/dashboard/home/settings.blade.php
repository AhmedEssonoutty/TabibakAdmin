@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.settings')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.settings')}}" pagetitle="{{__('messages.settings')}}" route="{{route('settings.edit')}}"/>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'settings.update', 'method'=> 'post']) !!}
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
                                @if($settings->count() > 0)
                                    @foreach($settings as $setting)
                                        <div class="col-lg-6">
                                            {{Form::label($setting->option, $setting->option, ['class' => 'form-label'])}}
                                            {!! Form::text($setting->option , $setting->value, ['class' => 'form-control']) !!}
                                            @error($setting->option)
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    @endforeach
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
                                        </div>
                                    </div>
                                @else
                                    {{__('messages.noSettings')}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
