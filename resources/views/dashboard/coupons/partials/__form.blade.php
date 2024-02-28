{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12">
                        {{Form::label('code', __('messages.code'), ['class' => 'form-label'])}}
                        {!! Form::text('code' , $coupon->code ?? '', ['class' => 'form-control']) !!}
                        @error("code")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('type', __('messages.discount_type'), ['class' => 'form-label'])}}
                        {!! Form::select('discount_type', $types,
                            '',
                            ['class' => 'form-control']) !!}
                        @error("discount_type")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('discount_amount', __('messages.discount_amount'), ['class' => 'form-label'])}}
                        {!! Form::number('discount_amount' , $coupon->discount_amount ?? '', ['class' => 'form-control']) !!}
                        @error("discount_amount")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('date', __('messages.valid_from'), ['class' => 'form-label'])}}
                        {!! Form::date('valid_from' , $coupon->valid_from ?? '', ['class' => 'form-control']) !!}
                        @error("valid_from")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('date', __('messages.valid_to'), ['class' => 'form-label'])}}
                        {!! Form::date('valid_to' , $coupon->valid_to ?? '', ['class' => 'form-control']) !!}
                        @error("valid_to")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('description', __('messages.description'), ['class' => 'form-label'])}}
                        {!! Form::textarea('description' , $coupon->description ?? '', ['class' => 'form-control']) !!}
                        @error("description.en")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('specialities', __('messages.specialities'), ['class' => 'form-label'])}}
                        {!! Form::select('specialities[]' ,$specialities->pluck('name', 'id'),
                            isset($doctor) ? $coupon->medicalSpecialities->pluck('id') : [],
                            ['class' => 'form-control', 'multiple' => true]) !!}
                        @error("specialities")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('user_limit', __('messages.user_limit'), ['class' => 'form-label'])}}
                        {!! Form::number('user_limit' , $coupon->user_limit ?? '', ['class' => 'form-control']) !!}
                        @error("user_limit")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('total_limit', __('messages.total_limit'), ['class' => 'form-label'])}}
                        {!! Form::number('total_limit' , $coupon->total_limit ?? '', ['class' => 'form-control']) !!}
                        @error("total_limit")
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
