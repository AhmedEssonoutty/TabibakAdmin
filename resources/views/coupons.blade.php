@extends('layouts.master')
@section('title')
    Coupons
@endsection
@section('css')
    <!-- extra css -->
    <!-- Sweet Alert css-->
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <x-breadcrumb title="Coupons" pagetitle="Toner" />
    <div id="couponsList">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-xxl-3 col-md-5">
                                <div class="search-box mb-3 mb-md-0">
                                    <input type="text" class="form-control search" id="searchProductList"
                                        placeholder="Search by coupons code & name...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-auto ms-auto">
                                <button data-bs-target="#showModal" data-bs-toggle="modal"
                                    class="btn btn-success add-btn"><i class="bi bi-plus-circle me-1 align-middle"></i>Add
                                    Coupon</button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Coupon Title</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Product Type</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#TB01</a></td>
                                        <td class="discount">
                                            <h5 class="mb-0 fs-16">$15.9</h5>
                                        </td>
                                        <td class="couponTitle">Winter Gift Voucher</td>
                                        <td class="code">WINTER145</td>
                                        <td class="productType">Other Accessories</td>
                                        <td class="startDate">23 Dec, 2022</td>
                                        <td class="endDate">15 Jan, 2023</td>
                                        <td class="status"><span class="badge badge-soft-success">Active</span></td>
                                        <td>
                                            <ul class="hstack gap-2 list-unstyled mb-0">
                                                <li>
                                                    <a href="#couponDetails" data-bs-toggle="offcanvas"
                                                        class="badge badge-soft-dark view-item-btn">View</a>
                                                </li>
                                                <li>
                                                    <a class="badge badge-soft-primary edit-item-btn" href="#showModal"
                                                        data-bs-toggle="modal">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#deleteModal" data-bs-toggle="modal"
                                                        class="badge badge-soft-danger remove-item-btn">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We
                                        did not find any orders for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    <i class="mdi mdi-chevron-left align-middle me-1"></i> Previous</a>
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next <i class="mdi mdi-chevron-right align-middle ms-1"></i></a>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>

    <!-- createModal -->
    <div id="showModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title fs-18" id="exampleModalLabel">Add Coupons</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="tablelist-form" novalidate autocomplete="off">
                        <div class="row">
                            <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                            <input type="hidden" id="id-field" />
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="couponTitle" class="form-label">Coupon Title</label>
                                    <input type="text" class="form-control" id="couponTitle-field"
                                        placeholder="Coupon title" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="couponCode" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code-field"
                                        placeholder="Enter coupon code" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="ProductSelect" class="form-label">Product Type</label>
                                    <select class="form-control" name="categorySelect" id="productType-field">
                                        <option value="">Select Product</option>
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
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="text" class="form-control" id="startdate-field"
                                        data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="endDate" class="form-label">END Date</label>
                                    <input type="text" class="form-control" id="enddate-field"
                                        data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="amountPercentage" class="form-label">Amount/Percentage</label>
                                    <input type="text" class="form-control" id="discount-field"
                                        placeholder="Enter amount/percentage" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="statusSelect" class="form-label">Status</label>
                                    <select class="form-control" name="choices-single-default" id="status-Field">
                                        <option value="">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Expired">Expired</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="ri-close-line align-bottom me-1"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="add-btn">Add Coupons</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="couponDetails" aria-labelledby="couponDetailsLabel">
        <div class="offcanvas-header bg-warning-subtle">
            <h5 class="offcanvas-title" id="couponDetailsLabel">Great Festival Sale</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <img src="{{ URL::asset('assets/images/ecommerce/offer-banner.jpg') }}" alt="" class="img-thumbnail">
            </div>
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tr>
                            <td><span class="text-muted">Use Code</span></td>
                            <td><span class="fw-medium">FESTIVAL15</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">Discount</span></td>
                            <td><span class="fw-medium text-uppercase">15% up to</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">Start Date</span></td>
                            <td><span class="fw-medium">09 Dec, 2022</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">END Date</span></td>
                            <td><span class="fw-medium">21 Dec, 2022</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">Product Type</span></td>
                            <td><span class="fw-medium">Footwear, Watch</span></td>
                        </tr>
                        <tr>
                            <td><span class="text-muted">Status</span></td>
                            <td><span class="badge badge-soft-success">Active</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="offcanvas-header border-top">
            <div class="hstack gap-3 w-100">
                <button type="button" class="btn btn-danger w-100"><i class="ri-delete-bin-line me-1 align-bottom"></i>
                    Delete</button>
                <button type="button" class="btn btn-secondary w-100"><i class="ri-pencil-line me-1 align-bottom"></i>
                    Edit</button>
            </div>
        </div>
    </div>
    <!--end offcanvas-->


    <!-- deleteModal -->
    <div id="deleteModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
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
                        <div class="mt-4 fs-15">
                            <h4 class="mb-1">Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this coupons ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover" id="deleteRecord-close"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete
                            It!</button>
                    </div>
                </div>
            </div>
            <!--end modal-content -->
        </div>
        <!--end modal-dialog -->
    </div><!-- end modal -->
@endsection
@section('scripts')
    <!-- list.js min js -->
    <script src="{{ URL::asset('assets/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/backend/coupons.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
