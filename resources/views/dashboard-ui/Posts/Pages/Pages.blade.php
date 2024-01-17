@extends('layouts.master')
@section('title')
    Pages
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Manage Pages" pagetitle="Pages" />
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
    <form action="{{route("StorePage")}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
				<input id="PostImage" type="hidden" name="image">
				<input id="CategoryID" type="hidden" name="category" value="{{$Category->id}}">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="fs-16">Posts</h5>
                <p class="text-muted mb-lg-0">Here you can manage pages.</p>
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" id="PostEnTitle" name="en_title" placeholder="Post Title">
															</div>
															@error("en_title")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<input type="text" class="form-control" style="direction: rtl; text-align:right;" id="ArTitle" name="ar_title" placeholder="العنوان">
															</div>
															@error("ar_title")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->






                            <div class="col-lg-6">
															<div>
																<textarea class="form-control" id="EnExcerpt" name="en_excerpt" placeholder="Page Excerpt"></textarea>
															</div>
															@error("en_excerpt")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<textarea class="form-control" style="direction: rtl; text-align:right;" id="ArExcerpt" name="ar_excerpt" placeholder="مقتطفات"></textarea>
															</div>
															@error("ar_excerpt")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->






                            <div class="col-lg-6">
															<div>
																<textarea class="form-control ckeditor-classic" id="EnContent" name="en_content" placeholder="Page Content"></textarea>
															</div>
															@error("en_content")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<textarea class="form-control sec-ckeditor-classic" style="direction: rtl; text-align:right;" id="ArContent" name="ar_content" placeholder="المحتوى"></textarea>
															</div>
															@error("ar_content")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->






                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="ParentPost" data-choices data-choices-removeItem name="post_parent" placeholder="Parent Post">
																	<option value="0">Parent Post</option>
																	@foreach($ParentPosts as $Post)
																	<option value="{{$Post->id}}">{{$Post->en_title}}</option>
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
																<input type="text" class="form-control" id="PageTags" name="post_tags" placeholder="Page Tags">
															</div>
															@error("post_tags")
															<span class="text-danger">{{$message}}</span>
															@enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
															<div>
																<select class="form-control" id="PostStatus" data-choices data-choices-removeItem name="status" placeholder="Post Status">
																	<option value="0">Draft</option>
																	<option value="1" selected>Published</option>
																	<option value="2">Sticky</option>
																</select>
															</div>
															@error("ar_title")
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
																						<p class="text-muted mb-0">Upload page images.</p>
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
																							Drop files here or click to upload page image.
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
                                    <button type="submit" class="btn btn-primary">Publish</button>
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
										<th scope="col">Page Title</th>
										<th scope="col">Action</th>
								</tr>
						</thead>
						<tbody>
								@foreach($Posts as $Post)
								<tr id="Post{{$Post->id}}Row">
										<th scope="row"><a href="#" class="fw-semibold">{{$Post->id}}</a></th>
										<td>{{$Post->en_title}} - {{$Post->ar_title}}</td>
										<td>
											<a href="{{route("EditPage", $Post->id)}}" class="link-success">Edit <i class="ri-arrow-right-line align-middle"></i></a> /&nbsp;
											<a href="#" class="link-danger" onClick="addLocation('{{route("DeletePage", $Post->id)}}')" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Delete <i class="ri-delete-bin-6-line align-middle"></i></a>
										</td>
								</tr>
									@foreach($ChildrenPosts as $Child)
									@if($Child->post_parent == $Post->id)
									<tr>
										<td colspan="3">
											<table class="table table-nowrap" style="margin-left: 20px;">
												<tr id="Child{{$Child->id}}Row">
													<th scope="row"><a href="#" class="fw-semibold">{{$Child->id}}</a></th>
													<td>{{$Child->en_title}} - {{$Child->ar_title}}</td>
													<td>
														<a href="{{route("EditPage", $Child->id)}}" class="link-success">Edit <i class="ri-arrow-right-line align-middle"></i></a> /&nbsp;
														<a href="#" class="link-danger" onClick="addLocation('{{route("DeletePage", $Child->id)}}')" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Delete <i class="ri-delete-bin-6-line align-middle"></i></a>
													</td>
												</tr>		
											</table>
										</td>
									</tr>
									@endif
									@endforeach
								@endforeach
						</tbody>
					</table>
					{{$Posts->onEachSide(2)->withQueryString()->links()}}
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


