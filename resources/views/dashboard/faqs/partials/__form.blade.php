{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-6">
                        {{Form::label('question', __('messages.question_en'), ['class' => 'form-label'])}}
                        {!! Form::text('question[en]' , isset($faq) ? $faq->getTranslation('question', 'en') : '', ['class' => 'form-control']) !!}
                        @error("question.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('question', __('messages.question_ar'), ['class' => 'form-label'])}}
                        {!! Form::text('question[ar]' , isset($faq) ? $faq->getTranslation('question', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("question.ar")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('answer', __('messages.answer_en'), ['class' => 'form-label'])}}
                        {!! Form::text('answer[en]' , isset($faq) ? $faq->getTranslation('answer', 'en') : '', ['class' => 'form-control']) !!}
                        @error("answer.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('answer', __('messages.answer_ar'), ['class' => 'form-label'])}}
                        {!! Form::text('answer[ar]' , isset($faq) ? $faq->getTranslation('answer', 'ar') : '', ['class' => 'form-control']) !!}
                        @error("answer.ar")
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
