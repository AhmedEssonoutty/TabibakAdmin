@extends('layouts.master')
@section('title')
    Shipments
@endsection
@section('css')
    <!-- extra css -->
    <!-- Sweet Alert css-->
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <x-breadcrumb title="Shipments" pagetitle="Toner" />

    <div class="card" id="shipmentsList">
        <div class="card-header border-bottom-dashed">
            <div class="row align-items-center g-3">
                <div class="col-xxl-3 col-sm-6">
                    <h6 class="card-title mb-0">Shipping</h6>
                </div>
                <div class="col-xxl-auto col-sm-auto ms-auto">
                    <button data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-success add-btn"><i
                            class="bi bi-plus-circle me-1 align-middle"></i> Add Shipping</button>
                </div>
            </div>
        </div>
        <div class="card-header border-bottom-dashed">
            <div class="row g-3">
                <div class="col-xxl-3 col-lg-6">
                    <div class="search-box">
                        <input type="text" class="form-control search"
                            placeholder="Search for order ID, shipment no, customer, order status or something...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y"
                        data-range-date="true" id="demo-datepicker" placeholder="Select date">
                </div>
                <div class="col-xxl-2 col-lg-6">
                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default"
                        id="idStatus">
                        <option value="">Status</option>
                        <option value="Pickups">Pickups</option>
                        <option value="Pending">Pending</option>
                        <option value="Shipping">Shipping</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Out Of Delivery">Out Of Delivery</option>
                    </select>
                </div>
                <div class="col-xxl-2 col-lg-6">
                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default">
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
                <div class="col-xxl-2 col-lg-6">
                    <button type="button" class="btn btn-primary w-100" onclick="filterData();">Filters</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table-card">
                <table class="table table-nowrap align-middle" id="shipmentsTable">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" data-sort="id">Order ID</th>
                            <th scope="col" data-sort="shipment_no">Shipment No</th>
                            <th scope="col" data-sort="customer_name">Customer</th>
                            <th scope="col" data-sort="supplier">Supplier</th>
                            <th scope="col" data-sort="location">Location</th>
                            <th scope="col" data-sort="order_date">Order Date</th>
                            <th scope="col" data-sort="arrival_date">Arrival Date</th>
                            <th scope="col" data-sort="status">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <th class="id" scope="row"><a href="javascript:void(0);"
                                    class="fw-medium link-primary">#TBSC2830</a></th>
                            <td class="shipment_no"><a href="javascript:void(0);" class="text-reset">#TBSN15412120001</a>
                            </td>
                            <td class="customer_name">Daniel Gonzalez</td>
                            <td class="supplier">iTest Factory</td>
                            <td class="location">Germany</td>
                            <td class="order_date">23 Dec, 2022</td>
                            <td class="arrival_date">15 Jan, 2023</td>
                            <td class="status"><span class="badge badge-soft-success">Delivered</span></td>
                            <td>
                                <ul class="hstack gap-2 list-unstyled mb-0">
                                    <li>
                                        <a href="#createModal" class="badge badge-soft-primary edit-item-btn"
                                            data-bs-toggle="modal">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#deleteRecordModal" data-bs-toggle="modal"
                                            class="badge badge-soft-danger remove-item-btn">Delete</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="noresult" style="display: none">
                <div class="text-center py-4">
                    <div class="avatar-md mx-auto mb-4">
                        <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                    <h5 class="mt-2">Sorry! No Result Found</h5>
                    <p class="text-muted mb-0">We've searched more than 150+ shipment orders We did not find any shipment
                        orders for you search.</p>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <div class="pagination-wrap hstack gap-2">
                    <a class="page-item pagination-prev disabled" href="#">
                        <i class="mdi mdi-chevron-left align-middle me-1"></i> Previous
                    </a>
                    <ul class="pagination listjs-pagination mb-0"></ul>
                    <a class="page-item pagination-next" href="#">
                        Next <i class="mdi mdi-chevron-right align-middle ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- createModal -->
    <div id="createModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title fs-18" id="exampleModalLabel">Create Shipping</h5>
                    <button type="button" class="btn-close" id="close-createmodal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <form class="tablelist-form" novalidate autocomplete="off">
                        <input type="hidden" id="id-field">
                        <div id="modal-id">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="orderID" class="form-label">Order ID</label>
                                        <input type="text" class="form-control" id="orderID"
                                            placeholder="#TBSC0000" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="shipmentNo" class="form-label">Shipment No</label>
                                        <input type="text" class="form-control" id="shipmentNo"
                                            placeholder="#TBSN00000000000" value="" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="customerName-field" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" id="customerName-field"
                                        placeholder="Enter customer name" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="supplierName-field" class="form-label">Supplier Name</label>
                                    <input type="text" class="form-control" id="supplierName-field"
                                        placeholder="Enter supplier name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="orderDate-field" class="form-label">Order Date</label>
                                    <input type="text" class="form-control" id="orderDate-field"
                                        data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="arrivalDate-field" class="form-label">Arrival Date</label>
                                    <input type="text" class="form-control" id="arrivalDate-field"
                                        data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="locationSelect" class="form-label">Location</label>
                                    <select class="form-control" name="choices-single-default" id="locationSelect"
                                        required>
                                        <option value="">Location</option>
                                        <option value="Ascension Island">Ascension Island</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Europe">Europe</option>
                                        <option value="Finland">Finland</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="France">France</option>
                                        <option value="England">England</option>
                                        <option value="Scotland">Scotland</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="UA">UA</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Jersey">Jersey</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="statusSelect" class="form-label">Status</label>
                                    <select class="form-control" name="choices-single-default" id="statusSelect"
                                        required>
                                        <option value="">Status</option>
                                        <option value="Pickups">Pickups</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Shipping">Shipping</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Out Of Delivery">Out Of Delivery</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="ri-close-line align-bottom me-1"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="add-btn">Add Shipping</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- deleteModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4 fs-15">
                            <h4 class="mb-1">Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this shipping order ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete
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
    <!-- sweetalert2 -->
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/backend/shipments.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
