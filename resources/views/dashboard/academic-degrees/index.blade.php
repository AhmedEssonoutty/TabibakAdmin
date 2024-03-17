@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_academic_degrees')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_academic_degrees')}}" pagetitle="{{__('messages.academic_degrees')}}" route="{{route('academic-degrees.index')}}"/>
    <div class="d-flex justify-content-sm-end">
        <a href="{{route('academic-degrees.create')}}">
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
                        <td>{{$resource->name}}</td>
                        @include('dashboard.partials.__table-actions', ['resource' => $resource, 'route' => 'academic-degrees', 'showModel' => true])
                        @include('dashboard.academic-degrees.show', ['resource' => $resource])
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('dashboard.layouts.paginate')
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
