@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_doctors')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_doctors')}}"
                  pagetitle="{{__('messages.doctors')}}"
                  route="{{route('doctors.index')}}"/>
    <div class="d-flex justify-content-sm-end">
        <a href="{{route('doctors.create')}}">
            <i class="bi bi-plus-circle"></i>
            {{__('messages.add_new')}}
        </a>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a @class(['nav-link', 'active' => request('doctors_page') !== 'requests']) id="allDoctors"
               aria-current="page" href="{{route('doctors.index')}}">
                {{__('messages.all_doctors')}}
            </a>
        </li>
        <li class="nav-item">
            <a @class(['nav-link', 'active' => request('doctors_page') === 'requests']) id="doctorsRequests"
               href="{{route('doctors.index')}}?doctors_page=requests&requestStatus={{\App\Constants\DoctorRequestStatusConstants::PENDING->value}}">
                {{__('messages.doctors_requests')}}
            </a>
        </li>
    </ul>
    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
            @if(request('doctors_page') === 'requests')
                @include('dashboard.doctors.partials.__doctors-requests-tab')
            @else
                @include('dashboard.doctors.partials.__all-doctors-tab')
            @endif
        </div>
    </div>
@endsection
