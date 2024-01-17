{!! Form::open(['route' => $action, 'method'=> $method]) !!}
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-6">
                        {{Form::label('name', __('messages.name'), ['class' => 'form-label'])}}
                        {!! Form::text('name' , $role->name ?? '', ['class' => 'form-control']) !!}
                        @error("name")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="offset-6"></div>
                    @error("role_permissions")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    @foreach($permissionsModules as $module => $permissions)
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header" id="collapsibleCardHeading">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn btn-link" data-bs-toggle="collapse"
                                           data-bs-target="#{{$module}}" aria-expanded="true"
                                           aria-controls="{{$module}}">
                                            {{$module}}
                                        </a>
                                    </h5>
                                </div>
                                <div id="{{$module}}" class="collapse show"
                                     aria-labelledby="collapsibleCardHeading">
                                    <div class="card-body">
                                        @foreach($permissions as $permission)
                                            <div class="form-check">
                                                <input name="role_permissions[]" value="{{$permission->id}}"
                                                       @checked(in_array($permission->id, $role->permissions->pluck('id')->toArray() ?? []))
                                                       class="form-check-input" type="checkbox" id="checkbox{{$permission->id}}">
                                                <label class="form-check-label" for="checkbox{{$permission->id}}">
                                                    {{$permission->action}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
