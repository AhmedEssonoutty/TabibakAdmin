{!! Form::open(['route'=> Route::current()->getName(), 'method'=>'GET', 'class' => 'row']) !!}
<div class="col-lg-4">
    {{ Form::label('keyword', __('messages.keyword'), ['class' => 'form-label']) }}
    {!! Form::text('keyword' , request('keyword'), ['class' => 'form-control']) !!}
</div>
<div class="col-lg-2 align-self-end">
    <button type="submit" class="btn btn-primary mb-0">{{__('messages.search')}}</button>
</div>
{!! Form::close() !!}
