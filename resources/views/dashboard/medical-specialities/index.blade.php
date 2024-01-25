@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_medical_specialties')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_medical_specialties')}}"
                  pagetitle="{{__('messages.medical_specialties')}}"
                  route="{{route('medical-specialities.index')}}"/>
    <div class="d-flex justify-content-sm-end">
        <a href="{{route('medical-specialities.create')}}">
            <i class="bi bi-plus-circle"></i>
            {{__('messages.add_new')}}
        </a>
    </div>
    <x-filter/>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-nowrap">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.name')}}</th>
                    <th scope="col">{{__('messages.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr id="role{{$resource->id}}Row">
                        <th scope="row">
                            <a href="#" class="fw-semibold">#{{$loop->iteration}}</a>
                        </th>
                        <td>{{$resource->name}}</td>
                        <td>
                            @include('dashboard.partials.__table-actions', ['resource' => $resource, 'route' => 'medical-specialities'])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$resources->onEachSide(2)->withQueryString()->links()}}
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
