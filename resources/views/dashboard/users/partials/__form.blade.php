{!! Form::open(['route' => $action, 'method' => $method, 'enctype' => 'multipart/form-data']) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12">
                        {{Form::label('name', __('messages.name'), ['class' => 'form-label'])}}
                        {!! Form::text('name' , isset($user) ? $user->name : '', ['class' => 'form-control']) !!}
                        @error("name")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('email', __('messages.email'), ['class' => 'form-label'])}}
                        {!! Form::email('email' , isset($user) ? $user->email : '', ['class' => 'form-control']) !!}
                        @error("email")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('phone', __('messages.phone'), ['class' => 'form-label'])}}
                        {!! Form::number('phone' , isset($user) ? $user->phone : '', ['class' => 'form-control', 'pattern' => '[0-9]', 'onkeypress' => 'return isNumberKey(event)']) !!}
                        @error("phone")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="position-relative col-lg-6">
                        {{Form::label('password', __('messages.password'), ['class' => 'form-label'])}}
                        {!! Form::password('password' , ['class' => 'form-control', 'placeholder' => 'Enter strong password']) !!}
                        <button class="btn btn-link position-absolute end-0 text-muted password-addon" style="top:30px"
                            type="button" onclick="togglePasswordVisibility()"><i id="eyeIcon" class="bi bi-eye"></i></button>
                        @error("password")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('password_confirmation', __('messages.password_confirm'), ['class' => 'form-label'])}}
                        {!! Form::password('password_confirmation' , ['class' => 'form-control', 'placeholder' => 'Enter strong password']) !!}
                        <button class="btn btn-link position-absolute end-0 text-muted password-addon" style="top:30px"
                                type="button" onclick="toggleConfirmPasswordVisibility()"><i id="eyeConfirmIcon" class="bi bi-eye"></i></button>
                        @error("password_confirmation")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm">
                                            <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                                <i class="bi bi-images"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-1">{{__('messages.profile_image')}}</h5>
                                        <p class="text-muted mb-0">{{__('messages.upload') . ' ' . __('messages.profile_image')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-2 pb-3">
                                {!! Form::file('image', ['class' => 'form-control', 'accept' => 'image/jpeg, image/png']) !!}
                                @error("avatar")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm">
                                            <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                                <i class="bi bi-key"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-1">{{__('messages.roles')}}</h5>
                                        <p class="text-muted mb-0">{{__('messages.select') . ' ' . __('messages.role')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    @foreach ($roles as $role)
                                        <div class="col-lg-6">
                                            <!-- Inline Switches -->
                                            <div class="form-check form-switch form-check-inline" dir="ltr">
                                                <input type="radio" name="role_id" class="form-check-input" value="{{$role->id}}" id="Per{{$role->id}}">
                                                <label class="form-check-label" for="Per{{$role->id}}">{{$role->name}}</label>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    @endforeach
                                    @error("role")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
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
