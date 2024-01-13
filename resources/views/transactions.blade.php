@extends('layouts.master')
@section('title')
    Transactions
@endsection
@section('css')
    <!-- extra css -->
    <!-- Sweet Alert css-->
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <x-breadcrumb title="Transactions" pagetitle="Toner" />

    <div id="transactionsList">

        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-xxl-4 col-md-6">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Search Transactions...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-md-6">
                                <input type="text" class="form-control" data-provider="flatpickr"
                                    data-date-format="d M, Y" data-range-date="true" id="demo-datepicker"
                                    placeholder="Select date">
                            </div>
                            <!--end col-->
                            <div class="col-xxl-2 col-lg-12">
                                <select class="form-control" data-choices data-choices-search-false
                                    name="choices-single-default" id="idStatus">
                                    <option value="all">All</option>
                                    <option value="Successful">Successful</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Denied">Denied</option>
                                </select>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3">
                                <div class="hstack gap-2">
                                    <button type="button" class="btn btn-soft-success w-100"
                                        onclick="filterData();">Filters</button>
                                    <button data-bs-target="#showModal" data-bs-toggle="modal"
                                        class="btn btn-primary w-100"><i class="bi bi-plus-circle me-1 align-middle"></i>
                                        Add Transaction</button>
                                </div>
                            </div>
                            <!--end col-->

                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 50px;">Type</th>
                                        <th scope="col">Transaction ID</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#TB01</a></td>
                                        <td class="vatId" style="display:none;">TB211145424</td>
                                        <td class="clientName" style="display:none;">Diana Nichols</td>
                                        <td class="cleintEmail" style="display:none;">diana@toner.com</td>
                                        <td class="type"><i class="bx bx-trending-down align-middle text-success"></i>
                                        </td>
                                        <th class="transactionID" scope="row"><a href="#!"
                                                class="fw-medium">#TBSC320002830</a></th>
                                        <td class="amount"><span class="fw-medium">$253.32</span></td>
                                        <td class="paymentMethod">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('assets/images/ecommerce/payment/american-express.png') }}"
                                                        alt="" class="avatar-xs object-fit-cover">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">American Express</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="transactionDate">15 Jan, 2023</td>
                                        <td class="status"><span class="badge badge-soft-success">Successful</span></td>
                                        <td>
                                            <a href="#!" class="link-dark text-decoration-underline view-item-btn">View
                                                Details</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center py-4">
                                    <div class="avatar-md mx-auto mb-4">
                                        <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find
                                        any transactions for you search.</p>
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
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title flex-grow-1 mb-0">Payment Details</h5>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="card-body" id="transactionDetails">
                        <div class="table-responsive table-card">
                            <table class="table table-borderless align-middle">
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">Transaction ID</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">#TBSC320002830</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">Date</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">15 Jan, 2023</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">VAT ID:</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">TB211145424</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">Client Name</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">Diana Nichols</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">Email ID</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">diana@toner.com</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">Amount</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">$253.32</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">Payment Method</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/ecommerce/payment/american-express.png') }}"
                                                    alt="" class="avatar-xs object-fit-cover">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">American Express</h6>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-muted text-uppercase">Status</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success">Successful</span>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="mt-3 hstack gap-2">
                            <button type="button" class="btn btn-soft-danger w-100">Download Receipt</button>
                            <button type="button" class="btn btn-soft-secondary w-100">All Statement</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

    <!-- showModal -->
    <div id="showModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title fs-18">Add Transactions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" id="close-modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="tablelist-form" novalidate autocomplete="off">
                        <div class="row">
                            <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                            <input type="hidden" id="id-field" />
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="clientName-field" class="form-label">Client Name</label>
                                    <input type="text" class="form-control" id="clientName-field" placeholder=""
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="cleintEmail-field" class="form-label">Email</label>
                                    <input type="email" id="cleintEmail-field" class="form-control"
                                        placeholder="Enter Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="typeSelect" class="form-label">Type</label>
                                    <select class="form-control" name="choices-single-default" id="type-field">
                                        <option value="">type</option>
                                        <option value="up">Up</option>
                                        <option value="down">Down</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="transactionID-field" class="form-label">Transaction ID</label>
                                    <input type="text" class="form-control" id="transactionID-field"
                                        placeholder="#TBSC320003205" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="vatID-field" class="form-label">Vat ID</label>
                                    <input type="text" class="form-control" id="vatID-field"
                                        placeholder="#TBSC320003205" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="amount-field" class="form-label">Amount</label>
                                    <input type="text" class="form-control" id="amount-field" placeholder="$4564"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="paymentMethod-field" class="form-label">Payment Method</label>
                                    <select id="paymentMethod-field" class="form-control" name="choices-single-default">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="transactionDate-field" class="form-label">Transaction Date</label>
                                    <input type="text" class="form-control" id="transactionDate-field"
                                        data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="statusSelect" class="form-label">Status</label>
                                    <select class="form-control" name="choices-single-default" id="statusSelect">
                                        <option value="">Status</option>
                                        <option value="Successful">Successful</option>
                                        <option value="Denied">Denied</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="ri-close-line align-bottom me-1"></i> Close</button>
                                    <button type="submit" class="btn btn-primary">Add Transaction</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Transaction ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-notification">Yes, Delete
                            It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <!-- list.js min js -->
    <script src="{{ URL::asset('assets/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Transactions js -->
    <script src="{{ URL::asset('assets/js/backend/transactions.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
