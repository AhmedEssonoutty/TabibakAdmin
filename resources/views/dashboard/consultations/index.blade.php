@extends('dashboard.layouts.master')
@section('title')
    {{__('messages.manage_consultations')}}
@endsection
@section('content')
    <x-breadcrumb title="{{__('messages.manage_consultations')}}"
                  pagetitle="{{__('messages.consultations')}}"
                  route="{{route('consultations.index')}}"/>
    <x-filter/>
    <div class="row">
        <div class="col-12">
            <table class="table table-nowrap">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.doctor')}}</th>
                    <th scope="col">{{__('messages.patient')}}</th>
                    <th scope="col">{{__('messages.speciality')}}</th>
                    <th scope="col">{{__('messages.type')}}</th>
                    <th scope="col">{{__('messages.contact_type')}}</th>
                    <th scope="col">{{__('messages.payment_type')}}</th>
                    <th scope="col">{{__('messages.status')}}</th>
                    <th scope="col">{{__('messages.amount')}}</th>
                    <th scope="col">{{__('messages.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr id="role{{$resource->id}}Row">
                        <th scope="row">
                            <a href="#" class="fw-semibold">#{{$loop->iteration}}</a>
                        </th>
                        <td>{{$resource->doctor->user->name}}</td>
                        <td>{{$resource->patient->user->name}}</td>
                        <td>{{$resource->medicalSpeciality->name}}</td>
                        <td>{{ucfirst(strtolower($resource->type->name))}}</td>
                        <td>{{ucfirst(strtolower($resource->contact_type->name))}}</td>
                        <td>{{ucfirst(strtolower($resource->payment_type->name))}}</td>
                        <td>{{ucfirst(strtolower($resource->status->name))}}</td>
                        <td>{{$resource->amount}}</td>
                        @include('dashboard.partials.__table-actions', ['resource' => $resource, 'disableEdit' => true,
                        'route' => 'consultations', 'hideActive' => true, 'showModel' => false])
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('dashboard.layouts.paginate')
        </div>
    </div>
@endsection
