@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.add_article')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.add_article')}}" pagetitle="{{__('messages.articles')}}" route="{{route('articles.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.articles.partials.__form', ['action' => 'articles.store', 'method' => 'POST'])
        </div>
    </div>
@endsection
