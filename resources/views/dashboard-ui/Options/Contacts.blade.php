@extends('layouts.master')
@section('title')
Site Options
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Contacts" pagetitle="Site Options" />
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
        <div class="row">
            <div class="col-lg-4">
							<h5 class="fs-16">Site Identity</h5>
							<p class="text-muted mb-lg-0">Here you can edit your site contacts and social networks links.</p>
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
																<input type="text" class="form-control" id="Phone" name="phone" value="@isset($SiteOptions->phone){{$SiteOptions->phone}}@endisset" placeholder="Phone">
															</div>
															@error("phone")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Mobile" name="mobile" value="@isset($SiteOptions->mobile){{$SiteOptions->mobile}}@endisset" placeholder="Mobile">
															</div>
															@error("mobile")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="email" class="form-control" id="Email" name="email" value="@isset($SiteOptions->email){{$SiteOptions->email}}@endisset" placeholder="Email">
															</div>
															@error("email")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="email" class="form-control" id="FormEmail" name="form_email" value="@isset($SiteOptions->form_email){{$SiteOptions->form_email}}@endisset" placeholder="Form Email">
															</div>
															@error("form_email")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Address" name="address" value="@isset($SiteOptions->address){{$SiteOptions->address}}@endisset" placeholder="Address">
															</div>
															@error("address")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="MapLocation" name="map_loc" value="@isset($SiteOptions->map_loc){{$SiteOptions->map_loc}}@endisset" placeholder="Map Location">
															</div>
															@error("map_loc")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Facebook" name="facebook" value="@isset($SiteOptions->facebook){{$SiteOptions->facebook}}@endisset" placeholder="Facebook">
															</div>
															@error("facebook")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="XAccount" name="x_url" value="@isset($SiteOptions->x_url){{$SiteOptions->x_url}}@endisset" placeholder="X Account">
															</div>
															@error("x_url")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Youtube" name="youtube" value="@isset($SiteOptions->youtube){{$SiteOptions->youtube}}@endisset" placeholder="Youtube">
															</div>
															@error("youtube")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Instagram" name="instagram" value="@isset($SiteOptions->instagram){{$SiteOptions->instagram}}@endisset" placeholder="Instagram">
															</div>
															@error("instagram")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="LinkedIn" name="linked_in" value="@isset($SiteOptions->linked_in){{$SiteOptions->linked_in}}@endisset" placeholder="Linked In">
															</div>
															@error("linked_in")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Vimeo" name="vimeo" value="@isset($SiteOptions->vimeo){{$SiteOptions->vimeo}}@endisset" placeholder="Vimeo">
															</div>
															@error("vimeo")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->


                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="Whatsapp" name="whatsapp" value="@isset($SiteOptions->whatsapp){{$SiteOptions->whatsapp}}@endisset" placeholder="Whatsapp No">
															</div>
															@error("whatsapp")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->



                            {{-- <div class="col-lg-12">
															<div>
																<textarea class="form-control ckeditor-classic" id="SiteDescription" name="site_description" placeholder="Site Description">@isset($SiteOptions->site_description){{$SiteOptions->site_description}}@endisset</textarea>
															</div>
															@error("password")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <!--end row--> --}}







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


