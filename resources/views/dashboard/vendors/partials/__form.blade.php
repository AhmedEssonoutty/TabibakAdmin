{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::text('name' , $vendor->user->name ?? '', ['class' => 'form-control']) !!}
                        @error("name")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('type', __('messages.type'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::select('vendor_type_id', $types->pluck('name', 'id')->prepend(__('messages.select'), ''),
                            $vendor->vendor_type_id ?? '',
                            ['class' => 'form-select']) !!}
                        @error("vendor_type_id")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('services', __('messages.services'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::select('services[]' ,$services->pluck('name', 'id'),
                            isset($vendor) ? $vendor->vendorServices->pluck('id') : [],
                            ['class' => 'form-control select2', 'multiple' => true]) !!}
                        @error("services")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('address', __('messages.address'), ['class' => 'form-label'])}}
                        {!! Form::text('address' , $vendor->address ?? '', ['class' => 'form-control']) !!}
                        @error("address")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('email', __('messages.email'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::email('email' , $vendor->user->email ?? '', ['class' => 'form-control']) !!}
                        @error("email")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('phone', __('messages.phone'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::number('phone' , $vendor->user->phone ?? '', ['class' => 'form-control', 'pattern' => '[0-9]', 'onkeypress' => 'return isNumberKey(event)']) !!}
                        @error("phone")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('password', __('messages.password'), ['class' => 'form-label'])}}
                        @if(request()->routeIs('vendors.create'))
                            <span class="text-danger fw-bold">*</span>
                        @endif
                        {!! Form::password('password' , ['class' => 'form-control', 'placeholder' => __('messages.enter_strong_pass')]) !!}
                        <button class="btn btn-link position-absolute {{app()->getLocale() == 'ar' ? 'start-0' : 'end-0'}} text-muted password-addon" style="top:30px"
                                type="button" onclick="togglePasswordVisibility()"><i id="eyeIcon" class="bi bi-eye"></i></button>
                        @error("password")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('password_confirmation', __('messages.password_confirm'), ['class' => 'form-label'])}}
                        @if(request()->routeIs('vendors.create'))
                            <span class="text-danger fw-bold">*</span>
                        @endif
                        {!! Form::password('password_confirmation' , ['class' => 'form-control', 'placeholder' => __('messages.enter_strong_pass')]) !!}
                        <button class="btn btn-link position-absolute {{app()->getLocale() == 'ar' ? 'start-0' : 'end-0'}} text-muted password-addon" style="top:30px"
                                type="button" onclick="toggleConfirmPasswordVisibility()"><i id="eyeConfirmIcon" class="bi bi-eye"></i></button>
                        @error("password_confirmation")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="{{app()->getLocale() == 'ar' ? 'text-start' : 'text-end'}}">
                            <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
{!! Form::close() !!}
