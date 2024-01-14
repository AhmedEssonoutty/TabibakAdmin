@extends('layouts.master')
@section('title')
    Create product
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Create product" pagetitle="Product" />
    <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm">
                                    <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                        <i class="bi bi-box-seam"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-1">Product Information</h5>
                                <p class="text-muted mb-0">Fill all information below.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="product-title-input">Product title</label>
                            <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                            <input type="text" class="form-control d-none" id="product-id-input">
                            <input type="text" class="form-control" id="product-title-input" value=""
                                placeholder="Enter product title" required>
                            <div class="invalid-feedback">Please enter a product title.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product description</label>

                            <div id="ckeditor-classic">
                                <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton. Material composition is
                                    100% organic cotton. This is one of the world’s leading designer lifestyle brands and is
                                    internationally recognized for celebrating the essence of classic American cool style,
                                    featuring preppy with a twist designs.</p>
                                <ul>
                                    <li>Full Sleeve</li>
                                    <li>Cotton</li>
                                    <li>All Sizes available</li>
                                    <li>4 Different Color</li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <label class="form-label">Product category</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="float-end text-decoration-underline">Add New</a>
                                </div>
                            </div>
                            <div>
                                <select class="form-select" id="choices-category-input" name="choices-category-input">
                                    <option value="">Select product category</option>
                                    <option value="Appliances">Appliances</option>
                                    <option value="Automotive Accessories">Automotive Accessories</option>
                                    <option value="Electronics" selected>Electronics</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Grocery">Grocery</option>
                                    <option value="Kids">Kids</option>
                                    <option value="Watches">Watches</option>
                                </select>
                            </div>
                            <div class="error-msg mt-1">Please select a product category.</div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

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
                                <h5 class="card-title mb-1">Product Gallery</h5>
                                <p class="text-muted mb-0">Add product gallery images.</p>
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
                        <div class="error-msg mt-1">Please add a product images.</div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm">
                                    <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                        <i class="bi bi-list-ul"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-1">General Information</h5>
                                <p class="text-muted mb-0">Fill all information below.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="manufacturer-name-input">Manufacturer Name</label>
                                    <input type="text" class="form-control" id="manufacturer-name-input"
                                        placeholder="Enter manufacturer name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="manufacturer-brand-input">Manufacturer Brand</label>
                                    <input type="text" class="form-control" id="manufacturer-brand-input"
                                        placeholder="Enter manufacturer brand">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="stocks-input">Stocks</label>
                                    <input type="text" class="form-control" id="stocks-input" placeholder="Stocks"
                                        required>
                                    <div class="invalid-feedback">Please enter a product stocks.</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Price</label>
                                    <div class="input-group has-validation mb-3">
                                        <span class="input-group-text" id="product-price-addon">$</span>
                                        <input type="text" class="form-control" id="product-price-input"
                                            placeholder="Enter price" aria-label="Price"
                                            aria-describedby="product-price-addon" required>
                                        <div class="invalid-feedback">Please enter a product price.</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="product-discount-input">Discount</label>
                                    <div class="input-group has-validation mb-3">
                                        <span class="input-group-text" id="product-discount-addon">%</span>
                                        <input type="text" class="form-control" id="product-discount-input"
                                            placeholder="Enter discount" aria-label="discount"
                                            aria-describedby="product-discount-addon" required>
                                        <div class="invalid-feedback">Please enter a product discount.</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="orders-input">Orders</label>
                                    <input type="text" class="form-control" id="orders-input" placeholder="Orders"
                                        required>
                                    <div class="invalid-feedback">Please enter a product orders.</div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label">Colors</label>
                                    <ul class="clothe-colors list-unstyled hstack gap-2 mb-0 flex-wrap">
                                        <li>
                                            <input type="checkbox" value="success" id="color-1">
                                            <label
                                                class="avatar-xs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-1"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="info" id="color-2">
                                            <label
                                                class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-2"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="warning" id="color-3">
                                            <label
                                                class="avatar-xs btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-3"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="danger" id="color-4">
                                            <label
                                                class="avatar-xs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-4"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="primary" id="color-5">
                                            <label
                                                class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-5"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="secondary" id="color-6">
                                            <label
                                                class="avatar-xs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-6"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="dark" id="color-7">
                                            <label
                                                class="avatar-xs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-7"></label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="light" id="color-8">
                                            <label
                                                class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="color-8"></label>
                                        </li>
                                    </ul>
                                    <div class="error-msg mt-1">Please select a product colors.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <label class="form-label">Sizes</label>
                                    <ul class="clothe-size list-unstyled hstack gap-2 mb-0 flex-wrap" id="size-filter">
                                        <li>
                                            <input type="checkbox" value="xs" id="sizeXs">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="sizeXs">XS</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="s" id="sizeS">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="sizeS">S</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="m" id="sizeM">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="sizeM">M</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="l" id="sizeL">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="sizeL">L</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="xl" id="sizeXl">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="sizeXl">XL</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="2xl" id="size2xl">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="size2xl">2XL</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="3xl" id="size3xl">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="size3xl">3XL</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="40" id="size40">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="size40">40</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="41" id="size41">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="size41">41</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" value="42" id="size42">
                                            <label
                                                class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                for="size42">42</label>
                                        </li>
                                    </ul>
                                    <div class="error-msg mt-1">Please select a product sizes.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publish</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="choices-publish-status-input" class="form-label">Status</label>

                            <select class="form-select" id="choices-publish-status-input" data-choices
                                data-choices-search-false>
                                <option value="Published" selected>Published</option>
                                <option value="Scheduled">Scheduled</option>
                                <option value="Draft">Draft</option>
                            </select>
                        </div>

                        <div>
                            <label for="choices-publish-visibility-input" class="form-label">Visibility</label>
                            <select class="form-select" id="choices-publish-visibility-input" data-choices
                                data-choices-search-false>
                                <option value="Public" selected>Public</option>
                                <option value="Hidden">Hidden</option>
                            </select>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publish Schedule</h5>
                    </div>
                    <!-- end card body -->
                    <div class="card-body">
                        <div>
                            <label for="datepicker-publish-input" class="form-label">Publish Date & Time</label>
                            <input type="text" id="datepicker-publish-input" class="form-control"
                                placeholder="Enter publish date" data-provider="flatpickr" data-date-format="d.m.y"
                                data-enable-time>
                        </div>
                    </div>
                </div>
                <!-- end card -->


                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 align-items-start">
                            <div class="flex-grow-1">
                                <input class="form-control" data-choices data-choices-multiple-remove="true"
                                    placeholder="Enter tags" type="text" value="Cotton">
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Short Description</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-2">Add short description for product</p>
                        <textarea class="form-control" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </form>
@endsection
@section('scripts')
    <!-- ckeditor -->
    <script src="{{ URL::asset('assets/libs/@ckeditor/ckeditor5-build-classic/ckeditor.js') }}"></script>

    <!-- dropzone js -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone-min.js') }}"></script>
    <!-- create-product -->
    <script src="{{ URL::asset('assets/js/backend/create-product.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
