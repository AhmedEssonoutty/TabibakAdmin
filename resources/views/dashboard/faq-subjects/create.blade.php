@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_faq_subject')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_faq_subject')}}"
                  pagetitle="{{__('messages.faq_subjects')}}" route="{{route('faq-subjects.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.faq-subjects.partials.__form', ['action' => 'faq-subjects.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
