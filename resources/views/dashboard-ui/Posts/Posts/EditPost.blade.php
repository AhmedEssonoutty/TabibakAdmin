@extends('layouts.master')
@section('title')
    Posts
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Edit Post" pagetitle="Posts" />
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
    <form action="{{route("UpdatePost")}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
				<input id="PostImage" type="hidden" value="{{$Post->image}}" name="image">
				<input type="hidden" value="{{$Post->id}}" name="post_id">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Posts</h5>
                <p class="text-muted mb-lg-0">Here you can manage posts.</p>
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="PostEnTitle" name="en_title" value="{{$Post->en_title}}" placeholder="Post Title">
															</div>
															@error("en_title")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" style="direction: rtl; text-align:right;" id="ArTitle" name="ar_title" value="{{$Post->ar_title}}" placeholder="العنوان">
															</div>
															@error("ar_title")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->






                            <div class="col-lg-6">
															<div>
																<textarea class="form-control" id="PostEnExcerpt" name="en_excerpt" placeholder="Post Excerpt">{{$Post->en_excerpt}}</textarea>
															</div>
															@error("en_excerpt")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<textarea class="form-control" id="ArExcerpt" style="direction: rtl; text-align:right;" name="ar_excerpt" placeholder="مقتطفات">{{$Post->ar_excerpt}}</textarea>
															</div>
															@error("ar_excerpt")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->






                            <div class="col-lg-6">
															<div>
																<textarea class="form-control ckeditor-classic" id="PostEnContent" name="en_content" placeholder="Post Content">{{$Post->en_content}}</textarea>
															</div>
															@error("en_content")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<textarea class="form-control sec-ckeditor-classic" id="ArContent" name="ar_content" placeholder="المحتوى">{{$Post->ar_content}}</textarea>
															</div>
															@error("ar_content")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->






                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="PostCategory" data-choices data-choices-removeItem name="category" placeholder="Choose Category">
																	<option value="0">Select Category</option>
																	@foreach($Categories as $Category)
																	<option value="{{$Category->id}}" @if($Post->category == $Category->id) selected="selected" @endif>{{$Category->category_en_name}}</option>
																	@endforeach
																</select>
															</div>
															@error("category")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="ParentPost" data-choices data-choices-removeItem name="post_parent" placeholder="Parent Post">
																	<option value="0">Parent Post</option>
																	@foreach($ParentPosts as $P_Post)
																	<option value="{{$P_Post->id}}" @if($Post->post_parent == $P_Post->id) selected="selected" @endif>{{$P_Post->en_title}}</option>
																	@endforeach
																</select>
															</div>
															@error("parent_post")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->








                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="PostTags" name="post_tags" value="{{implode(",", ($Post->post_tags))}}" placeholder="Post Tags">
															</div>
															@error("post_tags")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="PostStatus" data-choices data-choices-removeItem name="status" placeholder="Post Status">
																	<option value="0" @if($Post->status == "0") selected="selected" @endif>Draft</option>
																	<option value="1" @if($Post->status == "1") selected="selected" @endif>Published</option>
																	<option value="2" @if($Post->status == "2") selected="selected" @endif>Sticky</option>
																</select>
															</div>
															@error("status")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->






                            <div class="col-lg-6">
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
						
																						<h5>
																							Drop files here or click to upload if you want to change category image.
																							<br>
																							Otherwise leave it empty.
																						</h5>
																				</div>
																		</div>
																		<div class="error-msg mt-1">Please add a category images.</div>
																		@error("bg_image")
																		<span class="text-danger">{{$message}}</span>
																		@enderror
																	</div>
															</div>
															<!-- end card -->
                            </div>
                            <!--end col-->



														<div class="col-md-12"></div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
    <script src="{{ URL::asset('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
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
	var myDropzone = new Dropzone("div.my-dropzone", { 
    url: "{{route('ImageUpload')}}",
		method: "POST",
		params:{
			filePath: "images/Posts",
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
			$("#PostImage").val(response.fileName);
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


