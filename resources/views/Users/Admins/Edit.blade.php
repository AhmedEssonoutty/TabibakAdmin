@extends('layouts.master')
@section('title')
    Dashboard Users
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Dashboard Users" pagetitle="Accounts" />
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
		<div id="WarningMessage" class="row" style="display: none">
			<div class="col-md-12">
				<div class="alert alert-warning"></div>
			</div>
		</div>
    <form action="{{route("UpdateAdminUser", $user->id)}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" value="{{$user->avatar}}" name="avatar" id="UserAvatar">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Admins</h5>
                <p class="text-muted mb-lg-0">Create dashboard administrators with different permissions.</p>
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<div class="card">
											<div class="card-body">
												<div class="w-100 rounded object-fit-cover bg-secondary" style="height: 120px;"></div>
												<div class="text-center">
													<div class="mt-n4">
														<img id="AvatarPreview" src="{{ URL::asset('storage/images/users/'.$user->avatar) }}" alt="" class="avatar-md rounded-circle p-1 bg-body mt-n2">
													</div>
													<div class="mt-4 border-bottom border-bottom-dashed">
														<h5 class="fs-17">{{$user->first_name}} {{$user->last_name}}</h5>
														<p class="mb-3 text-muted">{{$user->job_title}}</p>
													</div>
													<div class="mt-3">
														<div class="row">
															<div class="col-4">
																<div>
																	<h5><span class="counter-value" data-target="254"></span></h5>
																	<p class="text-muted mb-0">Posts</p>
																</div>
															</div>
															<div class="col-4">
																<div>
																	<h5><span class="counter-value" data-target="12"></span>k</h5>
																	<p class="text-muted mb-0">Followers</p>
																</div>
															</div>
															<div class="col-4">
																<div>
																	<h5><span class="counter-value" data-target="3501"></span></h5>
																	<p class="text-muted mb-0">Follwing</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end card-->
									</div>
									<!--end col-->
								</div>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="FirstName" name="first_name" value="{{$user->first_name}}" placeholder="First Name">
															</div>
															@error("first_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="LastName" name="last_name" value="{{$user->last_name}}" placeholder="Last Name">
															</div>
															@error("last_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Mobile" name="mobile" value="{{$user->mobile}}" placeholder="Mobile">
															</div>
															@error("mobile")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="email" class="form-control" id="Email" name="email" value="{{$user->email}}" placeholder="Email">
															</div>
															@error("email")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->



                            <div class="col-lg-6">
															<div>
																<input type="password" class="form-control" id="Password" name="password" value="" placeholder="Password">
															</div>
															@error("password")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="password" class="form-control" id="ConfirmPassword" name="confirm_password" value="" placeholder="Confirm Password">
															</div>
															@error("confirm_password")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->



                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="JobTitle" name="job_title" value="{{$user->job_title}}" placeholder="Job Title">
															</div>
															@error("job_title")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" id="BirthDate" name="birth_date" value="{{$user->birth_date}}" placeholder="Date of birth">
															</div>
															@error("birth_date")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-md-6">
															<div class="card">
																<div class="card-header">
																	<div class="d-flex">
																		<div class="flex-shrink-0 me-3">
																			<div class="avatar-sm">
																					<div class="avatar-title rounded-circle bg-light text-primary fs-20">
																							<i class="bx bx-key fs-24"></i>
																					</div>
																			</div>
																		</div>
																		<div class="flex-grow-1">
																				<h5 class="card-title mb-1">User Role</h5>
																				<p class="text-muted mb-0">Select User Role.</p>
																		</div>
																</div>
															</div>
															<div class="card-body">
																<div class="row g-3">
																	@foreach ($roles as $role)
																		<div class="col-lg-6">
																			<!-- Inline Switches -->
																			<div class="form-check form-switch form-check-inline" dir="ltr">
																				<input type="radio" name="role" class="form-check-input" value="{{$role->id}}" @if ($role->id == $user->user_role) checked="checked" @endif id="Per{{$role->id}}">
																				<label class="form-check-label" for="Per{{$role->id}}">{{$role->name}}</label>
																			</div>
																		</div>
																		<!--end col-->
																	@endforeach
																	@error("role")
																	<span class="text-danger">{{$message}}</span>
																	@enderror
																</div>
															</div>
															</div>
														</div>



														<div class="col-md-6">
															<div class="card">
																<div class="card-header">
																		<div class="d-flex">
																				<div class="flex-shrink-0 me-3">
																						<div class="avatar-sm">
																								<div class="avatar-title rounded-circle bg-light text-primary fs-20">
																										<i class="bi bi-images"></i>
																								</div>
																						</div>
																				</div>
																				<div class="flex-grow-1">
																						<h5 class="card-title mb-1">Profile Image</h5>
																						<p class="text-muted mb-0">Upload profile images.</p>
																				</div>
																		</div>
																</div>
																<div class="card-body">
																		<div class="dropzone my-dropzone">
																				<div class="dz-message">
																						<div class="mb-3">
																								<i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
																						</div>
						
																						<h5>Drop files here or click to upload.</h5>
																				</div>
																		</div>
																		<div class="error-msg mt-1">Please add a product images.</div>
																		@error("avatar")
																		<span class="text-danger">{{$message}}</span>
																		@enderror
																</div>
															</div>
															<!-- end card -->
														</div>

														<div class="col-md-12"></div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Add Admin</button>
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

@endsection
@push('scripts')
<script src="{{ URL::asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- flatpickr.js -->
<script type='text/javascript' src='{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}'></script>
    <!-- ckeditor -->
    <script src="{{ URL::asset('assets/libs/@ckeditor/ckeditor5-build-classic/ckeditor.js') }}"></script>


    <!-- dropzone js
    <script src="{ { URL::asset('assets/libs/dropzone/dropzone-min.js') }}"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.js" integrity="sha512-9e9rr82F9BPzG81+6UrwWLFj8ZLf59jnuIA/tIf8dEGoQVu7l5qvr02G/BiAabsFOYrIUTMslVN+iDYuszftVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<script>
	var Token = $("meta[name=csrf-token]").attr("content");
	var thumbnailArray = [];
	var myDropzone = new Dropzone("div.my-dropzone", { 
    url: "{{route('ImageUpload')}}",
		method: "POST",
		params:{
			filePath: "images/users",
			_token: Token
		},
    addRemoveLinks: true,
    uploadMultiple: false,
		maxFiles: 1,
		parallelUploads: 1,
    acceptedFiles: ".jpeg, .jpg, .png, .gif",
		maxFilesize: 1,
		timeout: 5000,
    removedfile: function (file) {
			file.previewElement.remove();
			thumbnailArray = [];
    },
		success: function(file, response) 
		{
			var CurFileName = response.fileName;
			$("#UserAvatar").val(response.fileName);
			$("#AvatarPreview").attr("src", "{{ URL::asset('storage/images/users/') }}/"+response.fileName);
		},
		error: function(file, response)
		{
			$("#WarningMessage").show();
			$("#WarningMessage .alert").text(response);
			$("#WarningMessage").delay(5000).hide("slow");
			file.previewElement.remove();
			thumbnailArray = [];
		}
	});

	myDropzone.on("thumbnail", function (file, dataUrl) {
			thumbnailArray.push(dataUrl);
	});
	var mockFile = { name: "Existing file!", size: 12345 };


	/* Dropzone.options.dropzone ={
		url: "{{route('ImageUpload')}}",
		maxFilesize: 12,
		renameFile: function(file) {
				var dt = new Date();
				var time = dt.getTime();
				return time+file.name;
		},
		acceptedFiles: ".jpeg,.jpg,.png,.gif",
		addRemoveLinks: true,
		timeout: 5000,
		success: function(file, response) 
		{
				console.log(response);
		},
		error: function(file, response)
		{
				return false;
		}
	}; */
</script>


<script>
	function addLocation(locationURL){
		console.log(locationURL);
		$("#DeleteThisRecord").prop("href", locationURL);
	}
</script>
@endpush


