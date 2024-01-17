@extends('layouts.master')
@section('title')
    Sub Categories
@endsection
@section('css')
    <!-- extra css -->
    <!-- gridjs css -->
        <link rel="stylesheet" href="{{ URL::asset('assets/libs/gridjs/mermaid.min.css') }}">
@endsection
@section('content')
    <x-breadcrumb title="Sub Categories" pagetitle="Products" />

    <div class="row">
        <div class="col-xxl-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0" id="addCategoryLabel">Create Sub Categories</h6>
                </div>
                <div class="card-body">
                    <form autocomplete="off" class="needs-validation createCategory-form" id="createCategory-form" novalidate>
                        <input type="hidden" id="categoryid-input" class="form-control" value="">
                        <div class="row">
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="SubcategoryTitle" class="form-label">Sub Category Title <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="SubcategoryTitle"
                                        placeholder="Enter title" required>
                                    <div class="invalid-feedback">Please enter a sub category title.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="categorySelect" class="form-label">Category <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="categorySelect" id="categorySelect">
                                        <option value="">Select Category</option>
                                        <option value="Headphone">Headphone</option>
                                        <option value="Watch">Watch</option>
                                        <option value="Furniture">Furniture</option>
                                        <option value="Clothing">Clothing</option>
                                        <option value="Footwear">Footwear</option>
                                        <option value="Lighting">Lighting</option>
                                        <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                                        <option value="Books">Books</option>
                                        <option value="Other Accessories">Other Accessories</option>
                                    </select>

                                    <div class="error-msg mt-n3">Please select a category.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="descriptionInput" class="form-label">Description</label>
                                    <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Description" required></textarea>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" id="addNewCategory" class="btn btn-success">Add Sub
                                        Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="row justify-content-between mb-4">
                <div class="col-xxl-3 col-lg-6">
                    <div class="search-box mb-3 mb-lg-0">
                        <input type="text" class="form-control" id="searchResultList" autocomplete="off"
                            placeholder="Search category & sub category...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-6">
                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default"
                        id="idStatus">
                        <option value="">Status</option>
                        <option value="all" selected>All</option>
                        <option value="Today">Today</option>
                        <option value="Yesterday">Yesterday</option>
                        <option value="Last 7 Days">Last 7 Days</option>
                        <option value="Last 30 Days">Last 30 Days</option>
                        <option value="This Month">This Month</option>
                        <option value="Last Month">Last Month</option>
                    </select>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="card">
                <div class="card-body">
                    <div id="product-sub-categories" class="table-card"></div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="close-removecategoryModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4 fs-15">
                            <h4 class="mb-1">Are you sure ?</h4>
                            <p class="text-muted mx-3 fs-16 mb-0">Are you sure you want to remove this sub category ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="remove-category">Yes, Delete
                            It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <!-- gridjs js -->
    <script src="{{ URL::asset('assets/libs/gridjs/gridjs.umd.js') }}"></script>

    <!-- product-sub-categories js -->
    <script src="{{ URL::asset('assets/js/backend/product-sub-categories.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
