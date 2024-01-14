@extends('components-layouts.master')
@section('title')
    File Upload
@endsection
@section('css')
    <!-- add extra css -->
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropzone/dropzone.css') }}" type="text/css" />
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="File Upload" pagetitle="Forms" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Dropzone</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">DropzoneJS is an open source library that provides drag’n’drop file uploads with
                        image previews.</p>

                    <div class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                            </div>

                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0" id="dropzone-preview">
                        <li class="mt-2" id="dropzone-preview-list">
                            <!-- This is used as the file preview template -->
                            <div class="border rounded">
                                <div class="d-flex p-2">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm bg-light rounded">
                                            <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                src="{{ URL::asset('assets/images/new-document.png') }}" alt="Dropzone-Image" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="pt-1">
                                            <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                            <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                            <strong class="error text-danger" data-dz-errormessage></strong>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-3">
                                        <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- end dropzon-preview -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('scripts')
    <!-- dropzone min -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone-min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/form-file-upload.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection