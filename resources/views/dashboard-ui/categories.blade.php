@extends('layouts.master')
@section('title')
    Categories
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Categories" pagetitle="Products" />

    <div class="row">
        <div class="col-xxl-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Create Categories</h6>
                </div>
                <div class="card-body">
                    <form autocomplete="off" class="needs-validation createCategory-form" id="createCategory-form" novalidate>
                        <input type="hidden" id="categoryid-input" class="form-control" value="">
                        <div class="row">
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="categoryTitle" class="form-label">Category Title<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="categoryTitle" placeholder="Enter title"
                                        required>
                                    <div class="invalid-feedback">Please enter a category title.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="slugInput" class="form-label">Slug <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="slugInput" placeholder="Enter slug">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="category-image-input" class="form-label d-block">Image <span
                                            class="text-danger">*</span></label>

                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute top-100 start-100 translate-middle">
                                            <label for="category-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Select Category Image">
                                                <span class="avatar-xs d-inline-block">
                                                    <span
                                                        class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </span>
                                                </span>
                                            </label>
                                            <input class="form-control d-none" id="category-image-input" type="file"
                                                accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-3">
                                                <img src="#" alt="" id="category-img"
                                                    class="avatar-md h-auto rounded-3 object-fit-cover">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="error-msg mt-1">Please add a category images.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="descriptionInput" class="form-label">Description</label>
                                    <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Description" required></textarea>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <div class="col-xxl-9">
            <div class="row justify-content-between mb-4">
                <div class="col-xxl-3 col-lg-6">
                    <div class="search-box mb-3 mb-lg-0">
                        <input type="text" class="form-control" id="searchInputList" placeholder="Search Category...">
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

            <div class="row" id="categories-list">
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Headphone</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Wireless</a></li>
                                <li><a href="#!" class="text-muted">Gaming</a></li>
                                <li><a href="#!" class="text-muted">Circumaural (over-ear)</a></li>
                                <li><a href="#!" class="text-muted">Supra-aural (on-ear)</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/headphone.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Watch</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Digital Watches</a></li>
                                <li><a href="#!" class="text-muted">Dive Watches</a></li>
                                <li><a href="#!" class="text-muted">Pilot's Watches</a></li>
                                <li><a href="#!" class="text-muted">Field Watches</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/smart-watch.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Furniture</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Beds</a></li>
                                <li><a href="#!" class="text-muted">Cabinets</a></li>
                                <li><a href="#!" class="text-muted">Chairs & Seating</a></li>
                                <li><a href="#!" class="text-muted">Desks</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/sofa.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Clothing</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Casual Wear</a></li>
                                <li><a href="#!" class="text-muted">Formal Wear</a></li>
                                <li><a href="#!" class="text-muted">Business Attire</a></li>
                                <li><a href="#!" class="text-muted">Sportswear</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/clothes.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Footwear</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Athletic Shoes</a></li>
                                <li><a href="#!" class="text-muted">Leather Shoes</a></li>
                                <li><a href="#!" class="text-muted">Figure Shoes</a></li>
                                <li><a href="#!" class="text-muted">Crocs</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/baby-shoe.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Lighting</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Ambient Lighting</a></li>
                                <li><a href="#!" class="text-muted">Task Lighting</a></li>
                                <li><a href="#!" class="text-muted">Accent Lighting</a></li>
                                <li><a href="#!" class="text-muted">Track Light</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/light-bulb.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Beauty & Personal Care</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Baby Care</a></li>
                                <li><a href="#!" class="text-muted">Deodrants</a></li>
                                <li><a href="#!" class="text-muted">Feminine Care</a></li>
                                <li><a href="#!" class="text-muted">Fragrances</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/cosmetics.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Books</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Fantasy</a></li>
                                <li><a href="#!" class="text-muted">Horror</a></li>
                                <li><a href="#!" class="text-muted">Mystery</a></li>
                                <li><a href="#!" class="text-muted">Romance</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/book.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card categrory-widgets overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <h5 class="flex-grow-1 mb-0">Other Accessories</h5>
                                <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                    <li><a href="#!" class="badge badge-soft-info">Edit</a></li>
                                    <li><a href="#delteModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger">Delete</a></li>
                                </ul>
                            </div>
                            <ul class="list-unstyled vstack gap-2 mb-0">
                                <li><a href="#!" class="text-muted">Bags</a></li>
                                <li><a href="#!" class="text-muted">Eyewear</a></li>
                                <li><a href="#!" class="text-muted">Belts</a></li>
                                <li><a href="#!" class="text-muted">Hair accessories</a></li>
                            </ul>
                            <div class="mt-3">
                                <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"
                                    class="fw-medium link-effect">Read More <i
                                        class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                            <img src="{{ URL::asset('assets/images/ecommerce/smart-watch.png') }}" alt=""
                                class="img-fluid category-img object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row" id="pagination-element">
                <div class="col-lg-12">
                    <div
                        class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                        <div class="page-item">
                            <a href="javascript:void(0);" class="page-link" id="page-prev">←</a>
                        </div>
                        <span id="page-num" class="pagination"></span>
                        <div class="page-item">
                            <a href="javascript:void(0);" class="page-link" id="page-next">→</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="overviewOffcanvas" aria-labelledby="overviewOffcanvasLabel">
        <div class="offcanvas-header bg-primary-subtle">
            <h5 class="offcanvas-title" id="overviewOffcanvasLabel">#TB<span class="overview-id"></span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="avatar-lg mx-auto">
                <div class="avatar-title bg-light rounded">
                    <img src="{{ URL::asset('assets/images/ecommerce/clothes.png') }}" alt="" class="avatar-sm overview-img">
                </div>
            </div>
            <div class="text-center mt-3">
                <h5 class="overview-title">Clothing</h5>
                <p class="text-muted">by <a href="#!" class="text-reset">Admin</a></p>
            </div>

            <h6 class="fs-14">Description</h6>
            <p class="text-muted overview-desc">Beauty Care is basically the science of beauty treatment that involves skin
                Care, hair Care, manicure, pedicure, Anti- aging treatments, facials, styling and so on.</p>

            <h6 class="fs-14 mb-3">Sub Categories</h6>
            <ul class="vstack gap-2 mb-0 subCategory" style="list-style-type: circle;">
                <li><a href="#!" class="text-reset">Casual Wear</a></li>
                <li><a href="#!" class="text-reset">Formal Wear</a></li>
                <li><a href="#!" class="text-reset">Business Attire</a></li>
                <li><a href="#!" class="text-reset">Sportswear</a></li>
                <li><a href="#!" class="text-reset">Lingerie</a></li>
                <li><a href="#!" class="text-reset">Childrens wear</a></li>
                <li><a href="#!" class="text-reset">Cardigan</a></li>
                <li><a href="#!" class="text-reset">Tracksuit</a></li>
                <li><a href="#!" class="text-reset">Sweater</a></li>
                <li><a href="#!" class="text-reset">Dungarees</a></li>
            </ul>
        </div>
        <div class="p-3 border-top">
            <div class="row">
                <div class="col-sm-6">
                    <div data-bs-dismiss="offcanvas">
                        <button type="button" class="btn btn-danger w-100 remove-list" data-bs-toggle="modal"
                            data-bs-target="#delteModal"><i class="ri-delete-bin-line me-1 align-bottom"></i>
                            Delete</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-secondary w-100 edit-list" data-bs-dismiss="offcanvas"><i
                            class="ri-pencil-line me-1 align-bottom"></i> Edit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- delteModal -->
    <div id="delteModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
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
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this category ?</p>
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
    <script src="{{ URL::asset('assets/js/backend/product-categories.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
