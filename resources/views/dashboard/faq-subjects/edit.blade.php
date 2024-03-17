@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_faq_subject')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_faq_subject')}}"
                  pagetitle="{{__('messages.faq_subjects')}}" route="{{route('faq-subjects.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.faq-subjects.partials.__form', ['action' => ['faq-subjects.update', $faqSubject->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
