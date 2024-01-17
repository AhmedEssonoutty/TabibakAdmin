@extends('layouts.master')
@section('title')
    Settings
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Users' Roles" pagetitle="Accounts" />
		@if (session('success'))
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			</div>
		</div>
		@endif
		@if (session('error'))
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-error">
					{{ session('error') }}
				</div>
			</div>
		</div>
		@endif
    <form action="{{route("CreateRole")}}" method="post">
			{{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Roles</h5>
                <p class="text-muted mb-lg-0">Group users and give them their permissions that enable them to do their missions.</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <div>
                                    <label for="RoleName" class="form-label">Users' Roles</label>
                                    <input type="text" class="form-control" id="RoleName" name="name" placeholder="Role Name">
                                </div>
                            </div>
                            <!--end col-->
                            @foreach (config("global.permissions") as $name => $value)
															<div class="col-lg-4">
																<!-- Inline Switches -->
																<div class="form-check form-switch form-check-inline" dir="ltr">
																	<input type="checkbox" name="permissions[]" class="form-check-input" value="{{$name}}" id="Per{{$name}}">
																	<label class="form-check-label" for="Per{{$name}}">{{$value}}</label>
																</div>
															</div>
															<!--end col-->
                            @endforeach
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--edn row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </form>
    <!--end form-->

    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted fs-17 mx-4 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-notification">Yes, Delete
                            It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
@endsection
