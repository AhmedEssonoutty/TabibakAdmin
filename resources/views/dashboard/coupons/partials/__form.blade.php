{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12">
                        {{Form::label('code', __('messages.code'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::text('code' , $coupon->code ?? '', ['class' => 'form-control']) !!}
                        @error("code")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('type', __('messages.discount_type'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::select('discount_type', $types,
                            isset($coupon) ? [$coupon->discount_type->value] : [],
                            ['id' => 'discount_type', 'class' => 'form-select', 'onchange' => 'setDiscountValueAttributes()']) !!}
                        @error("discount_type")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('discount_amount', __('messages.discount_amount'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::number('discount_amount' , $coupon->discount_amount ?? '', ['class' => 'form-control', 'min' => '1', 'pattern' => '[0-9]', 'onkeypress' => 'return isNumberKey(event)']) !!}
                        @error("discount_amount")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('date', __('messages.valid_from'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::date('valid_from' , $coupon->valid_from ?? '', ['class' => 'form-control']) !!}
                        @error("valid_from")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('date', __('messages.valid_to'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
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
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::select('specialities[]' ,$specialities->pluck('name', 'id'),
                            isset($coupon) ? $coupon->medicalSpecialities->pluck('id') : [],
                            ['class' => 'form-select', 'multiple' => true]) !!}
                        @error("specialities")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('user_limit', __('messages.user_limit'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::number('user_limit' , $coupon->user_limit ?? '', ['class' => 'form-control', 'pattern' => '[0-9]', 'onkeypress' => 'return isNumberKey(event)']) !!}
                        @error("user_limit")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('total_limit', __('messages.total_limit'), ['class' => 'form-label'])}}
                        <span class="text-danger fw-bold">*</span>
                        {!! Form::number('total_limit' , $coupon->total_limit ?? '', ['class' => 'form-control', 'pattern' => '[0-9]', 'onkeypress' => 'return isNumberKey(event)']) !!}
                        @error("total_limit")
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

@push('scripts')
    <script>
        $(document).ready(function() {
            const discountTypeInput = $('#discount_type');
            const discountAmountInput = $('#discount_amount');

            if (discountTypeInput.val() === '1') {
                discountAmountInput.attr('max', '100');
            } else {
                discountAmountInput.removeAttr('max');
            }
        });
    </script>
@endpush
