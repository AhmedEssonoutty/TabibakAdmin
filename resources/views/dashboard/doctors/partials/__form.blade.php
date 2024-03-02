{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name'), ['class' => 'form-label'])}}
                        {!! Form::text('name' , $doctor->user->name ?? '', ['class' => 'form-control']) !!}
                        @error("name")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('academic_degree', __('messages.academic_degree'), ['class' => 'form-label'])}}
                        {!! Form::select('academic_degree_id', $academicDegrees->pluck('name', 'id')->prepend('' , ''),
                            $doctor->academic_degree_id ?? '',
                            ['class' => 'form-control']) !!}
                        @error("specialities")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('specialities', __('messages.specialities'), ['class' => 'form-label'])}}
                        {!! Form::select('specialities[]' ,$specialities->pluck('name', 'id'),
                            isset($doctor) ? $doctor->medicalSpecialities->pluck('id') : [],
                            ['class' => 'form-control', 'multiple' => true]) !!}
                        @error("specialities")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('consultation_types', __('messages.consultation_types'), ['class' => 'form-label'])}}
                        <div class="card">
                            <div class="collapse show"
                                 aria-labelledby="collapsibleCardHeading">
                                <div class="card-body">
                                    <div class="form-check">
                                        <input name="with_appointment_consultation_enabled"
                                               @checked($doctor->with_appointment_consultation_enabled ?? false)
                                               class="form-check-input" type="checkbox">
                                        <label class="form-check-label" for="with_appointment_consultation_enabled">
                                            {{__('messages.scheduled')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="urgent_consultation_enabled"
                                               @checked($doctor->urgent_consultation_enabled ?? false)
                                               class="form-check-input" type="checkbox">
                                        <label class="form-check-label" for="urgent_consultation_enabled">
                                            {{__('messages.urgent')}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('email', __('messages.email'), ['class' => 'form-label'])}}
                        {!! Form::email('email' , $doctor->user->email ?? '', ['class' => 'form-control']) !!}
                        @error("email")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('phone', __('messages.phone'), ['class' => 'form-label'])}}
                        {!! Form::number('phone' , $doctor->user->phone ?? '', ['class' => 'form-control']) !!}
                        @error("phone")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('national_id', __('messages.national_id'), ['class' => 'form-label'])}}
                        {!! Form::number('national_id' , $doctor->national_id ?? '', ['class' => 'form-control']) !!}
                        @error("national_id")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('medical_id', __('messages.medical_id'), ['class' => 'form-label'])}}
                        {!! Form::number('medical_id' , $doctor->medical_id ?? '', ['class' => 'form-control']) !!}
                        @error("medical_id")
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
