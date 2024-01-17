@extends('layouts.master')
@section('title')
    Manage Categories
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Manage Categories" pagetitle="Posts" />
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
    <form action="{{route('UpdateCategory')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input id="CategoryID" value="{{$CurCategory->id}}" type="hidden" name="CategoryID" >
			<input id="CategoryImage" value="{{$CurCategory->cat_image}}" type="hidden" name="cat_image">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Post Types</h5>
                <p class="text-muted mb-lg-0">This page is allowed for developers only. This page is used to manage post types</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="CategoryEnName" name="category_en_name" value="{{$CurCategory->category_en_name}}" placeholder="Category english name">
															</div>
															@error("category_en_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" style="direction: rtl; text-align:right;" id="CategoryArName" name="category_ar_name" value="{{$CurCategory->category_ar_name}}" placeholder="اسم التصنيف بالعربية">
															</div>
															@error("category_ar_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->



                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="post_type" placeholder="Choose Post Type">
																	@foreach($PostTypes as $PostType)
																	<option value="{{$PostType->type_slug}}" @if($PostType->type_slug == $CurCategory->post_type) selected="selected" @endif>{{$PostType->type_en_name}}</option>
																	@endforeach
															</select>
															</div>
															@error("post_type")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="cat_parent" placeholder="Choose Post Type">
																	<option value="0">Choose Parent Category</option>
																	@foreach($ParentCategories as $Category)
																	<option value="{{$Category->id}}" @if($Category->id == $CurCategory->cat_parent) selected="selected" @endif>{{$Category->category_en_name}}</option>
																	@endforeach
															</select>
															</div>
															@error("cat_parent")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->








                            <div class="col-lg-12">
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
																						<h5 class="card-title mb-1">Category Image</h5>
																						<p class="text-muted mb-0">Upload category images.</p>
																				</div>
																		</div>
																</div>
																<div class="card-body">
																		<div class="dropzone MyCustDropZone">
																				<div class="dz-message">
																						<div class="mb-3">
																								<i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
																						</div>
						
																						<h5>
																							Drop files here or click to upload if you want to change category image.
																							<br>
																							Otherwise leave it empty.
																						</h5>
																				</div>
																		</div>
																		<div class="error-msg mt-1">Please add a category images.</div>
																		@error("cat_image")
																		<span class="text-danger">{{$message}}</span>
																		@enderror
																	</div>
															</div>
															<!-- end card -->
															@error("type_ar_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->



														<div class="col-md-12"></div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
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
@section('scripts')
    <!-- prismjs plugin -->
    <script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
@push('scripts')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- flatpickr.js -->
<script type='text/javascript' src='{{ asset('build/libs/flatpickr/flatpickr.min.js') }}'></script>
    <!-- ckeditor -->
    <script src="{{ asset('assets/libs/@ckeditor/ckeditor5-build-classic/ckeditor.js') }}"></script>

    <!-- dropzone js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.js" integrity="sha512-9e9rr82F9BPzG81+6UrwWLFj8ZLf59jnuIA/tIf8dEGoQVu7l5qvr02G/BiAabsFOYrIUTMslVN+iDYuszftVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		


<script>
	var Token = $("meta[name=csrf-token]").attr("content");
	var thumbnailArray = [];
	var MyCustDropZone = new Dropzone("div.MyCustDropZone", { 
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
		maxFilesize: 2,
		timeout: 5000,
    removedfile: function (file) {
			file.previewElement.remove();
			thumbnailArray = [];
    },
		success: function(file, response) 
		{
			$("#CategoryImage").val(response.fileName);
			//console.log(response);
		},
		error: function(file, response)
		{
			//alert(response);
			$("#WarningMessage").show();
			$("#WarningMessage .alert").text(response);
			$("#WarningMessage").delay(5000).hide("slow");
			file.previewElement.remove();
			thumbnailArray = [];
		}
	});

	MyCustDropZone.on("thumbnail", function (file, dataUrl) {
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


