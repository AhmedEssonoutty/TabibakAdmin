@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_vendors')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_vendors')}}"
                  pagetitle="{{__('messages.vendors')}}"
                  route="{{route('vendors.index')}}"/>
    <div class="d-flex justify-content-sm-end">
        <a href="{{route('vendors.create')}}">
            <i class="bi bi-plus-circle"></i>
            {{__('messages.add_new')}}
        </a>
    </div>
    <x-filter>
        <div class="col-lg-4">
            {{Form::label('type', __('messages.type'), ['class' => 'form-label'])}}
            {!! Form::select('vendorType', $types->pluck('name', 'id')->prepend('Select' , ''),
                request('vendorType') ?? '',
                ['class' => 'form-control']) !!}
            @error("vendor_type_id")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </x-filter>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-nowrap">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.name')}}</th>
                    <th scope="col">{{__('messages.type')}}</th>
                    <th scope="col">{{__('messages.no_of_referrals')}}</th>
                    <th scope="col">{{__('messages.activation')}}</th>
                    <th scope="col">{{__('messages.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr id="role{{$resource->id}}Row">
                        <th scope="row">
                            <a href="#" class="fw-semibold">#{{$loop->iteration}}</a>
                        </th>
                        <td>{{$resource->user->name}}</td>
                        <td>{{$resource->vendorType->name}}</td>
                        <td>{{$resource->no_of_referrals}}</td>
                        @include('dashboard.partials.__table-actions', ['resource' => $resource, 'route' => 'vendors'])
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$resources->onEachSide(2)->withQueryString()->links()}}
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
