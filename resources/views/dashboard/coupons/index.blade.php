@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_coupons')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_coupons')}}"
                  pagetitle="{{__('messages.coupons')}}"
                  route="{{route('coupons.index')}}"/>
    <div class="d-flex justify-content-sm-end">
        <a href="{{route('coupons.create')}}">
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
                    <th scope="col">{{__('messages.code')}}</th>
                    <th scope="col">{{__('messages.discount_type')}}</th>
                    <th scope="col">{{__('messages.discount_amount')}}</th>
                    <th scope="col">{{__('messages.valid_from')}}</th>
                    <th scope="col">{{__('messages.valid_to')}}</th>
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
                        <td>{{$resource->code}}</td>
                        <td>{{$resource->discount_type}}</td>
                        <td>{{$resource->discount_amount}}</td>
                        <td>{{date_format($resource->valid_from, 'd-m-Y')}}</td>
                        <td>{{date_format($resource->valid_to, 'd-m-Y')}}</td>
                        @include('dashboard.partials.__table-actions', ['resource' => $resource, 'route' => 'coupons', 'showModel' => true])
                        @include('dashboard.coupons.show', ['resource' => $resource])
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('dashboard.layouts.paginate')
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
