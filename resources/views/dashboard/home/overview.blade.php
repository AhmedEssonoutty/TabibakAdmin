@extends('dashboard.layouts.master')
@section('title')
    Overview
@endsection
@section('content')
    <x-breadcrumb title="Overview" pagetitle="Tabibak" />

    <div class="row">
        <div class="col-lg-4">
            <h5 class="fs-16">Overview</h5>
            <p class="text-muted mb-lg-0">Tabibak Overview.</p>
        </div>
    </div>
    <div class="row justify-content-between py-2">
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Patients</h3>
            <span class="rounded fs-5">{{ $patientsCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Doctors</h3>
            <span class="rounded fs-5">{{ $doctorsCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Admins</h3>
            <span class="rounded fs-5">{{ $adminsCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Hospitals</h3>
            <span class="rounded fs-5">{{ $hospitalsCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Clinics</h3>
            <span class="rounded fs-5">{{ $clinicsCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Pharmacies</h3>
            <span class="rounded fs-5">{{ $pharmaciesCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">HomeCares</h3>
            <span class="rounded fs-5">{{ $homeCaresCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Labs</h3>
            <span class="rounded fs-5">{{ $labsCount }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Total Transactions</h3>
            <span class="rounded fs-5">{{ $totalTransactions }}</span>
        </div>
        <div class="py-4 px-5 mb-3 mt-2 mx-lg-3 text-center rounded bg-light col-md-5 col-lg-3">
            <h3 class="rounded text-center fs-6">Total Revenues</h3>
            <span class="rounded fs-5">{{ $totalRevenues }}</span>
        </div>
    </div>
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
            url: "",
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


