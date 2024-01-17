@extends('layouts.master')
@section('title')
    Grid View - Sellers
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Grid View" pagetitle="Sellers" />
    <div class="row mb-4">
        <div class="col-xxl-12">
            <div class="card text-center bg-primary border-0 mb-0">
                <div class="card-body p-5">
                    <h4 class="text-white">Search for Best Sellers</h4>
                    <p class="text-center text-white-75 fs-17 mb-3">when you'r searching for a sellers, then are a things you
                        can do to get the most out of your search</p>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-6 col-md-10 mx-auto">
            <form action="#!" class="mt-n4">
                <div class="seller-search-box position-relative">
                    <i class="ri-search-2-line position-absolute my-auto d-flex align-items-center"></i>
                    <input type="text" class="form-control rounded-pill border-0 shadow" id="searchInputList"
                        autocomplete="off" placeholder="Search for sellers name & code ...">
                    <button class="btn btn-soft-danger fw-normal position-absolute rounded-pill"><i
                            class="ri-map-pin-2-line align-bottom me-1"></i> Germany</button>
                </div>
            </form>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row mb-4 justify-content-between">
        <div class="col-xxl-2 col-sm-6">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">Add
                Seller</button>
        </div>
        <div class="col-xxl-2 col-sm-6">
            <select class="form-control mt-3 mt-sm-0" data-choices data-choices-search-false name="choices-single-default"
                id="idStatus">
                <option value="all">All</option>
                <option value="Today">Today</option>
                <option value="Yesterday">Yesterday</option>
                <option value="Last 7 Days">Last 7 Days</option>
                <option value="Last 30 Days">Last 30 Days</option>
                <option value="This Month" selected>This Month</option>
                <option value="Last Month">Last Month</option>
            </select>
        </div>
    </div>

    <div class="row" id="seller-list"></div>
    <!-- end seller-list -->

    <div id="noresult" class="d-none">
        <div class="text-center py-4">
            <div class="avatar-md mx-auto mb-4">
                <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                    <i class="bi bi-search"></i>
                </div>
            </div>
            <h5 class="mt-2">Sorry! No Result Found</h5>
        </div>
    </div>

    <div class="row mb-4" id="pagination-element">
        <div class="col-lg-12">
            <div
                class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                <div class="page-item">
                    <a href="javascript:void(0);" class="page-link" id="page-prev"><i class="mdi mdi-chevron-left"></i></a>
                </div>
                <span id="page-num" class="pagination"></span>
                <div class="page-item">
                    <a href="javascript:void(0);" class="page-link" id="page-next"><i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end pagination-element -->

    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createModalLabel">Add Seller</h1>
                    <button type="button" class="btn-close" id="createModal-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" novalidate class="create-form">
                        <input type="hidden" id="id-field">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <div>
                            <div class="text-center mb-3">
                                <div class="position-relative d-inline-block">
                                    <div class="position-absolute top-100 start-100 translate-middle">
                                        <label for="companyLogo-image-input" class="mb-0" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Select company logo">
                                            <span class="avatar-xs d-inline-block">
                                                <span
                                                    class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </span>
                                            </span>
                                        </label>
                                        <input class="form-control d-none" id="companyLogo-image-input" type="file"
                                            accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-3">
                                            <img src="#" alt="" id="companyLogo-img"
                                                class="avatar-md h-auto rounded-3 object-fit-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="sellerName-input" class="form-label">Seller Name</label>
                                <input type="text" id="sellerName-input" class="form-control"
                                    placeholder="Enter seller name" required>
                            </div>
                            <div class="mb-3">
                                <label for="webUrl-input" class="form-label">Web url</label>
                                <input type="text" id="webUrl-input" class="form-control" placeholder="Enter web url"
                                    required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="itemStock-input" class="form-label">Stock</label>
                                        <input type="text" id="itemStock-input" class="form-control"
                                            placeholder="Enter stock" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="revenue-input" class="form-label">Revenue</label>
                                        <input type="text" id="revenue-input" class="form-control"
                                            placeholder="Enter revenue" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="addNew" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- createModal -->

    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="close-removeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted fs-17 mx-4 mb-0">Are you sure you want to remove this seller ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" id="remove-item" class="btn w-sm btn-danger btn-hover">Yes, Delete
                            It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <!-- sellers grid list -->
    <script src="{{ URL::asset('assets/js/backend/sellers-grid-list.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
