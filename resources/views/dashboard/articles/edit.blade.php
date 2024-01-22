@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.edit_article')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.edit_article')}}" pagetitle="{{__('messages.articles')}}" route="{{route('articles.index')}}"/>
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.articles.partials.__form', ['action' => ['articles.update', $article->id], 'method' => 'PUT'])
        </div>
    </div>
@endsection
