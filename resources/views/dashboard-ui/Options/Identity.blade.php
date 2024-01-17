@extends('layouts.master')
@section('title')
    Site Options
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Site Identity" pagetitle="Site Options" />
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
    <form action="{{route("UpdateOptions")}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" value="@isset($SiteOptions->logo){{$SiteOptions->logo}}@endisset" name="logo" id="SiteLogo">
			<input type="hidden" value="@isset($SiteOptions->sec_logo){{$SiteOptions->sec_logo}}@endisset" name="sec_logo" id="SiteSecLogo">
			<input type="hidden" value="@isset($SiteOptions->fav_icon){{$SiteOptions->fav_icon}}@endisset" name="fav_icon" id="SiteFavIcon">
        <div class="row">
            <div class="col-lg-4">
							<h5 class="fs-16">Site Identity</h5>
							<p class="text-muted mb-lg-0">Here you can edit your site identity.</p>
							<div class="row">
									<div class="col-lg-12">
											<div class="card">
													<div class="card-header">
															<h5 class="card-title mb-0">Basic Preview</h5>
													</div>
													<div class="card-body">
															<div class="card border-0 shadow-none mb-0">
																	<div class="card-body rounded profile-basic"
																			style="background-image: url('../assets/images/small/img-4.jpg');background-size: cover;"></div>
																	<div class="card-body">
																			<div class="mt-n5">
																					<img id="LogoPreview" src="@isset($SiteOptions->logo){{ URL::asset('storage/images/SiteIdentity/'.$SiteOptions->logo) }}@endisset" alt="Primary Site Logo" title="Primary Site Logo" class="avatar-lg rounded-circle p-1 bg-body mt-n3">
																					<img id="SecLogoPreview" src="@isset($SiteOptions->sec_logo){{ URL::asset('storage/images/SiteIdentity/'.$SiteOptions->sec_logo) }}@endisset" alt="Secondary Site Logo" title="Secondary Site Logo" class="avatar-lg rounded-circle p-1 bg-body mt-n3">
																					<img id="FavIconPreview" src="@isset($SiteOptions->fav_icon){{ URL::asset('storage/images/SiteIdentity/'.$SiteOptions->fav_icon) }}@endisset" alt="Site Fav Icon" title="Site Fav Icon" class="avatar-lg rounded-circle p-1 bg-body mt-n3">
																			</div>
																	</div>
																	<div class="card-body pt-0">
																			<div class="row justify-content-between gy-4">
																					<div class="col-md-12">
																						<h5 class="fs-17">@isset($SiteOptions->site_name){{$SiteOptions->site_name}}@endisset</h5>
																						<div class="mb-3 text-muted">
																								<i class="bi bi-geo-alt"></i> @isset($SiteOptions->address){{$SiteOptions->address}}@endisset
																						</div>
																						<p>@isset($SiteOptions->site_description){{strip_tags($SiteOptions->site_description)}}@endisset</p>
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
							<!--end row-->
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="ApiUrl" name="api_url" value="@isset($SiteOptions->api_url){{$SiteOptions->api_url}}@endisset" placeholder="API URL">
															</div>
															@error("api_url")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="SiteUrl" name="site_url" value="@isset($SiteOptions->site_url){{$SiteOptions->site_url}}@endisset" placeholder="Site URL">
															</div>
															@error("site_url")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="SiteName" name="site_name" value="@isset($SiteOptions->site_name){{$SiteOptions->site_name}}@endisset" placeholder="Site Name">
															</div>
															@error("site_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Slogan" name="slogan" value="@isset($SiteOptions->slogan){{$SiteOptions->slogan}}@endisset" placeholder="Slogan">
															</div>
															@error("slogan")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->



                            <div class="col-lg-12">
															<div>
																<textarea class="form-control ckeditor-classic" id="SiteDescription" name="site_description" placeholder="Site Description">@isset($SiteOptions->site_description){{$SiteOptions->site_description}}@endisset</textarea>
															</div>
															@error("password")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <!--end row-->




                            {{-- <div class="col-md-6">
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
																				<input type="radio" name="role" class="form-check-input" value="{{$role->id}}" @if ($role->id == $SiteOptions->user_role) checked="checked" @endif id="Per{{$role->id}}">
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
														</div> --}}



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
																						<h5 class="card-title mb-1">Primary Logo</h5>
																						<p class="text-muted mb-0">Upload site primary logo.</p>
																				</div>
																		</div>
																</div>
																<div class="card-body">
																		<div class="dropzone PrimaryLogo">
																				<div class="dz-message">
																						<div class="mb-3">
																								<i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
																						</div>
						
																						<h5>Drop files here or click to upload.</h5>
																				</div>
																		</div>
																		<div class="error-msg mt-1">Please add site primary logo.</div>
																		@error("logo")
																		<span class="text-danger">{{$message}}</span>
																		@enderror
																</div>
															</div>
															<!-- end card -->
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
																						<h5 class="card-title mb-1">Secondary Logo</h5>
																						<p class="text-muted mb-0">Upload site secondary logo.</p>
																				</div>
																		</div>
																</div>
																<div class="card-body">
																		<div class="dropzone SecondaryLogo">
																				<div class="dz-message">
																						<div class="mb-3">
																								<i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
																						</div>
						
																						<h5>Drop files here or click to upload.</h5>
																				</div>
																		</div>
																		<div class="error-msg mt-1">Please add site secondary logo.</div>
																		@error("sec_logo")
																		<span class="text-danger">{{$message}}</span>
																		@enderror
																</div>
															</div>
															<!-- end card -->
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
																						<h5 class="card-title mb-1">Fav Icon</h5>
																						<p class="text-muted mb-0">Upload Fav Icon.</p>
																				</div>
																		</div>
																</div>
																<div class="card-body">
																		<div class="dropzone SiteFavIcon">
																				<div class="dz-message">
																						<div class="mb-3">
																								<i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
																						</div>
						
																						<h5>Drop files here or click to upload.</h5>
																				</div>
																		</div>
																		<div class="error-msg mt-1">Please add FavIcon.</div>
																		@error("fav_icon")
																		<span class="text-danger">{{$message}}</span>
																		@enderror
																</div>
															</div>
															<!-- end card -->
														</div>

														<div class="col-md-12"></div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update Settings</button>
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
		<script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>


    <!-- dropzone js
    <script src="{ { URL::asset('assets/libs/dropzone/dropzone-min.js') }}"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.js" integrity="sha512-9e9rr82F9BPzG81+6UrwWLFj8ZLf59jnuIA/tIf8dEGoQVu7l5qvr02G/BiAabsFOYrIUTMslVN+iDYuszftVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<script>
	var Token = $("meta[name=csrf-token]").attr("content");
	var thumbnailArray = [];
	var myDropzone = new Dropzone("div.PrimaryLogo", { 
    url: "{{route('ImageUpload')}}",
		method: "POST",
		params:{
			filePath: "images/SiteIdentity",
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
			$("#SiteLogo").val(response.fileName);
			$("#LogoPreview").attr("src", "{{ URL::asset('storage/images/SiteIdentity/') }}/"+response.fileName);
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
</script>


<script>
	var Token = $("meta[name=csrf-token]").attr("content");
	var thumbnailArray = [];
	var myDropzone = new Dropzone("div.SecondaryLogo", { 
    url: "{{route('ImageUpload')}}",
		method: "POST",
		params:{
			filePath: "images/SiteIdentity",
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
			$("#SiteSecLogo").val(response.fileName);
			$("#SecLogoPreview").attr("src", "{{ URL::asset('storage/images/SiteIdentity/') }}/"+response.fileName);
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
</script>



<script>
	var Token = $("meta[name=csrf-token]").attr("content");
	var thumbnailArray = [];
	var myDropzone = new Dropzone("div.SiteFavIcon", { 
    url: "{{route('ImageUpload')}}",
		method: "POST",
		params:{
			filePath: "images/SiteIdentity",
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
			$("#SiteFavIcon").val(response.fileName);
			$("#FavIconPreview").attr("src", "{{ URL::asset('storage/images/SiteIdentity/') }}/"+response.fileName);
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
</script>


<script>
	function addLocation(locationURL){
		console.log(locationURL);
		$("#DeleteThisRecord").prop("href", locationURL);
	}
</script>
@endpush


