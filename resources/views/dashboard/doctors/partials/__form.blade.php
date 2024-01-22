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
                    <div class="col-lg-6 offset-6">
                        {{Form::label('academic_degree', __('messages.specialities'), ['class' => 'form-label'])}}
                        {!! Form::select('academic_degree' ,$academicDegrees->pluck('name', 'id'),
                            $doctor->academic_degree_id ?? '',
                            ['class' => 'form-control']) !!}
                        @error("specialities")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('specialities', __('messages.specialities'), ['class' => 'form-label'])}}
                        {!! Form::select('specialities[]' ,$specialities->pluck('name', 'id'),
                            isset($doctor) ? $doctor->specialities->pluck('id')->toArray() : [],
                            ['class' => 'form-control', 'multiple' => true]) !!}
                        @error("specialities")
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
