@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_consultations')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_consultations')}}"
                  pagetitle="{{__('messages.consultations')}}"
                  route="{{route('consultations.index')}}"/>
    <x-filter/>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-nowrap">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr id="role{{$resource->id}}Row">
                        <th scope="row">
                            <a href="#" class="fw-semibold">#{{$loop->iteration}}</a>
                            @include('dashboard.partials.__table-actions', ['resource' => $resource, 'disableEdit' => true,
                            'route' => 'consultations', 'hideActive' => true, 'showModel' => false])
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('dashboard.layouts.paginate')
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
