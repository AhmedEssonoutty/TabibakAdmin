{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-12">
                        {{Form::label('speciality', __('messages.speciality'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::select('medical_speciality_id', $specialities->pluck('name', 'id')->prepend('Select' , ''),
                            $article->medical_speciality_id ?? '',
                            ['class' => 'form-control']) !!}
                        @error("medical_speciality_id")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('title', __('messages.title_en'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::text('title[en]' , isset($article) ? $article->getTranslation('title', 'en') : '', ['class' => 'form-control']) !!}
                        @error("title.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('title', __('messages.title_ar'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::text('title[ar]' , isset($article) ? $article->getTranslation('title', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("title.ar")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('content', __('messages.content_en'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::textarea('content[en]' , isset($article) ? $article->getTranslation('content', 'en') : '', ['class' => 'form-control']) !!}
                        @error("content.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('content', __('messages.content_ar'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::textarea('content[ar]' , isset($article) ? $article->getTranslation('content', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("content.ar")
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
