{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name'), ['class' => 'form-label'])}}
                        {!! Form::text('name' , $vendor->user->name ?? '', ['class' => 'form-control']) !!}
                        @error("name")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('type', __('messages.type'), ['class' => 'form-label'])}}
                        {!! Form::select('vendor_type_id', $types->pluck('name', 'id')->prepend('Select' , ''),
                            $vendor->vendor_type_id ?? '',
                            ['class' => 'form-control']) !!}
                        @error("vendor_type_id")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('services', __('messages.services'), ['class' => 'form-label'])}}
                        {!! Form::select('services[]' ,$services->pluck('name', 'id'),
                            isset($vendor) ? $vendor->vendorServices->pluck('id') : [],
                            ['class' => 'form-control', 'multiple' => true]) !!}
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
                        {!! Form::email('email' , $vendor->user->email ?? '', ['class' => 'form-control']) !!}
                        @error("email")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('phone', __('messages.phone'), ['class' => 'form-label'])}}
                        {!! Form::number('phone' , $vendor->user->phone ?? '', ['class' => 'form-control']) !!}
                        @error("phone")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('password', __('messages.password'), ['class' => 'form-label'])}}
                        {!! Form::password('password' , ['class' => 'form-control']) !!}
                        @error("password")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('password_confirmation', __('messages.password_confirm'), ['class' => 'form-label'])}}
                        {!! Form::password('password_confirmation' , ['class' => 'form-control']) !!}
                        @error("password_confirmation")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="text-end">
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
