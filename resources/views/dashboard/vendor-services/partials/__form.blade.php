{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name_en'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::text('name[en]' , isset($vendorService) ? $vendorService->getTranslation('name', 'en') : '', ['class' => 'form-control']) !!}
                        @error("name.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name_ar'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::text('name[ar]' , isset($vendorService) ? $vendorService->getTranslation('name', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("name.ar")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('description', __('messages.description_en'), ['class' => 'form-label'])}}
                        {!! Form::textarea('description[en]' , isset($vendorService) ? $vendorService->getTranslation('description', 'en') : '', ['class' => 'form-control']) !!}
                        @error("description.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('description', __('messages.description_ar'), ['class' => 'form-label'])}}
                        {!! Form::textarea('description[ar]' , isset($vendorService) ? $vendorService->getTranslation('description', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("description.ar")
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
