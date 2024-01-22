@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_faq')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_faq')}}" pagetitle="{{__('messages.faqs')}}" route="{{route('faqs.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.faqs.partials.__form', ['action' => ['faqs.update', $faq->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
