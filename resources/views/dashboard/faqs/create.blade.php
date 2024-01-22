@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_faq')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_faq')}}" pagetitle="{{__('messages.faqs')}}" route="{{route('faqs.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.faqs.partials.__form', ['action' => 'faqs.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
