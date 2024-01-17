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
    <form action="{{route('StoreCategory')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input id="CategoryImage" type="hidden" name="cat_image">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Post Types</h5>
                <p class="text-muted mb-lg-0">This page is allowed for developers only. This page is used to manage post types.</p>
            </div>
            <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="CategoryEnName" name="category_en_name" placeholder="Category english name">
															</div>
															@error("category_en_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" style="direction: rtl; text-align:right;" id="CategoryArName" name="category_ar_name" placeholder="اسم التصنيف بالعربية">
															</div>
															@error("category_ar_name")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->



                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="post_type" multiple placeholder="Choose Post Type">
																	@foreach($PostTypes as $PostType)
																	<option value="{{$PostType->type_slug}}">{{$PostType->type_en_name}}</option>
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
																	<option value="{{$Category->id}}">{{$Category->category_en_name}}</option>
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
																		<div class="dropzone my-dropzone">
																				<div class="dz-message">
																						<div class="mb-3">
																								<i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
																						</div>
						
																						<h5>Drop files here or click to upload.</h5>
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
                                    <button type="submit" class="btn btn-primary">Add Post Type</button>
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

    <div class="row">
        <div class="col-md-8">
					<table class="table table-nowrap">
						<thead>
								<tr>
										<th scope="col">ID</th>
										<th scope="col">Category Name</th>
										<th scope="col">Action</th>
								</tr>
						</thead>
						<tbody>
								@foreach($Categories as $Category)
								<tr id="Category{{$Category->id}}Row">
										<th scope="row"><a href="#" class="fw-semibold">{{$Category->id}}</a></th>
										<td>{{$Category->category_en_name}} - {{$Category->category_ar_name}}</td>
										<td>
											<a href="{{route("EditCategory")}}" class="link-success">Edit <i class="ri-arrow-right-line align-middle"></i></a> /&nbsp;
											<a href="#" class="link-danger" onClick="addLocation('{{route("DeleteCategory", $Category->id)}}')" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Delete <i class="ri-delete-bin-6-line align-middle"></i></a>
										</td>
								</tr>
								@endforeach
						</tbody>
					</table>
                    {{$Categories->onEachSide(2)->withQueryString()->links()}}
				</div>
        <div class="col-md-4"></div>
    </div>

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
                        <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                        <a class="btn w-sm btn-danger btn-hover" id="DeleteThisRecord">Yes, Delete It!</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@push('scripts')
<script src="{{ URL::asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- flatpickr.js -->
<script type='text/javascript' src='{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}'></script>
    <!-- ckeditor -->
		
    <script src="{{ URL::asset('assets/libs/@ckeditor/ckeditor5-build-classic/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/choices.js/choices.min.js') }}"></script>

    <!-- dropzone js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.js" integrity="sha512-9e9rr82F9BPzG81+6UrwWLFj8ZLf59jnuIA/tIf8dEGoQVu7l5qvr02G/BiAabsFOYrIUTMslVN+iDYuszftVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		


<script>
	var Token = $("meta[name=csrf-token]").attr("content");
	var thumbnailArray = [];
	var myDropzone = new Dropzone("div.my-dropzone", { 
    url: "{{route('ImageUpload')}}",
		method: "POST",
		params:{
			filePath: "images/Categories",
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


