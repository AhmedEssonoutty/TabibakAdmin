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
                    @if(auth()->user()->vendor)
                        <th scope="col">{{__('messages.vendor_status')}}</th>
                    @endif
                    <th scope="col">{{__('messages.amount')}}</th>
                    <th scope="col">{{__('messages.actions')}}</th>
                    <th scope="col">{{__('messages.request_actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr id="role{{$resource->id}}Row">
                        <th scope="row">
                            <a href="#" class="fw-semibold">#{{$loop->iteration}}</a>
                        </th>
                        <td>{{$resource->doctor?->user->name}}</td>
                        <td>{{$resource->patient->user->name}}</td>
                        <td>{{$resource->medicalSpeciality->name}}</td>
                        <td>{{ucfirst(strtolower($resource->type->name))}}</td>
                        <td>{{ucfirst(strtolower($resource->contact_type->name))}}</td>
                        <td>{{ucfirst(strtolower($resource->payment_type->name))}}</td>
                        <td>{{ucfirst(strtolower($resource->status->name))}}</td>
                        @if(auth()->user()->vendor)
                            <td><span class="text-{{$resource->getVendorStatusColor(auth()->user()->vendor->id)}}">{{$resource->getVendorStatusTxt(auth()->user()->vendor->id)}}</td>
                            @endif
                        <td>{{$resource->amount}}</td>
                        @include('dashboard.partials.__table-actions', ['resource' => $resource, 'disableEdit' => true,
                        'disableDelete' => !auth()->user()->can('delete-consultation'),
                        'route' => 'consultations', 'hideActive' => true, 'showModel' => false])
                        <td>
                            @if($resource->isPendingVendor(auth()->user()?->vendor->id))
                                <a class="link-success accept-vendor-consultation cursor-pointer px-2"
                                   data-id="{{$resource->id}}">
                                    {{__('messages.accept')}} <i class="bi bi-check"></i>
                                </a>
                                <form action="{{route("consultations.vendor-accept", $resource->id)}}" class="d-inline"
                                      method="POST" id="acceptResourceForm-{{$resource->id}}">
                                    @csrf
                                    @method('PUT')
                                </form>
                                <a class="link-warning reject-vendor-consultation cursor-pointer px-2"
                                   data-id="{{$resource->id}}">
                                    {{__('messages.reject')}} <i class="bi bi-sign-stop"></i>
                                </a>
                                <form action="{{route("consultations.vendor-reject", $resource->id)}}" class="d-inline"
                                      method="POST" id="rejectResourceForm-{{$resource->id}}">
                                    @csrf
                                    @method('PUT')
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('dashboard.layouts.paginate')
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.accept-vendor-consultation').on('click', function (e) {
                e.preventDefault();
                let id = $(this).data('id');
                Swal.fire({
                    title: '{{__('messages.confirm.are_you_sure')}}',
                    text: "{{__('messages.confirm.vendor_approve_case')}}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#2a4fd7',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '{{__('messages.confirm.yes_change')}}',
                    cancelButtonText: '{{__('messages.confirm.cancel')}}',
                }).then((result) => {
                    if (result.isConfirmed && result.value) {
                        $('#acceptResourceForm-' + id).submit();
                    }
                })
            })

            $('.reject-vendor-consultation').on('click', function (e) {
                e.preventDefault();
                let id = $(this).data('id');
                Swal.fire({
                    title: '{{__('messages.confirm.are_you_sure')}}',
                    text: "{{__('messages.confirm.vendor_reject_case')}}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#2a4fd7',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '{{__('messages.confirm.yes_change')}}',
                    cancelButtonText: '{{__('messages.confirm.cancel')}}',
                }).then((result) => {
                    if (result.isConfirmed && result.value) {
                        $('#rejectResourceForm-' + id).submit();
                    }
                })
            })
        });
    </script>
@endPush
