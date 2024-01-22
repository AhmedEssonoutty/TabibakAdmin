@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_faqs')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_faqs')}}" pagetitle="{{__('messages.faqs')}}" route="{{route('faqs.index')}}"/>
    <div class="d-flex justify-content-sm-end">
        <a href="{{route('faqs.create')}}">
            <i class="bi bi-plus-circle"></i>
            {{__('messages.add_new')}}
        </a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-nowrap">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.question')}}</th>
                    <th scope="col">{{__('messages.creation_date')}}</th>
                    <th scope="col">{{__('messages.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr id="faq{{$resource->id}}Row">
                        <th scope="row">
                            <a href="#" class="fw-semibold">#{{$loop->iteration}}</a>
                        </th>
                        <td>{{$resource->question}}</td>
                        <td>{{date_format($resource->created_at, 'd/m/Y')}}</td>
                        <td>
                            @include('dashboard.partials.__table-actions', ['resource' => $resource, 'route' => 'faqs'])
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
