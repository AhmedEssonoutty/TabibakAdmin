{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name_en'), ['class' => 'form-label'])}}
                        {!! Form::text('name[en]' , isset($medicalSpeciality) ? $medicalSpeciality->getTranslation('name', 'en') : '', ['class' => 'form-control']) !!}
                        @error("name.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name_ar'), ['class' => 'form-label'])}}
                        {!! Form::text('name[ar]' , isset($medicalSpeciality) ? $medicalSpeciality->getTranslation('name', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("name.ar")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('description', __('messages.description_en'), ['class' => 'form-label'])}}
                        {!! Form::textarea('description[en]' , isset($medicalSpeciality) ? $medicalSpeciality->getTranslation('description', 'en') : '', ['class' => 'form-control']) !!}
                        @error("description.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('description', __('messages.description_ar'), ['class' => 'form-label'])}}
                        {!! Form::textarea('description[ar]' , isset($medicalSpeciality) ? $medicalSpeciality->getTranslation('description', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("description.ar")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('percentage', __('messages.percentage'), ['class' => 'form-label'])}}
                        {!! Form::number('percentage' , $medicalSpeciality->percentage ?? '', ['class' => 'form-control']) !!}
                        @error("percentage")
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
