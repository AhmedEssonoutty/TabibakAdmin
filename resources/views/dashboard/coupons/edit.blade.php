@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_coupon')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_coupon')}}"
                  pagetitle="{{__('messages.coupons')}}" route="{{route('coupons.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.coupons.partials.__form', ['action' => ['coupons.update', $coupon->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
