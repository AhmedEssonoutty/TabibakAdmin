@extends('layouts.master')
@section('title')
    Shipping List
@endsection
@section('css')
    <!-- extra css -->
    <!-- plugin css -->
    <link href="{{ URL::asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <x-breadcrumb title="Shipping List" pagetitle="Shipping" />

    <div class="row">
        <div class="col-xxl-3">
            <div class="sticky-side-div mb-4">
                <div class="search-box mb-4">
                    <input type="text" class="form-control search" placeholder="Search for ...">
                    <i class="ri-search-line search-icon"></i>
                </div>
                <div data-simplebar style="max-height: calc(100vh - 150px);">
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <span class="badge badge-soft-danger float-end clearfix">Out Of Delivery</span>
                                    <h5 class="fs-18 mb-3">Themesbrand Logistics</h5>
                                    <div class="d-flex align-items-end">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Track ID: TBL18754263542</h6>
                                            <p class="text-muted mb-0">Delivery Date: 20 Jan, 2023</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="text-reset stretched-link">View <i
                                                    class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="card border-primary border-opacity-50 mb-0">
                                <div class="card-body">
                                    <span class="badge badge-soft-info float-end clearfix">Shipping</span>
                                    <h5 class="fs-18 mb-3">Toner Logistics</h5>
                                    <div class="d-flex align-items-end">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Track ID: TTBL147009630</h6>
                                            <p class="text-muted mb-0">Delivery Date: 14 Jan, 2023</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="text-reset stretched-link">View <i
                                                    class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <span class="badge badge-soft-success float-end clearfix">Delivered</span>
                                    <h5 class="fs-18 mb-3">Themesbrand Logistics</h5>
                                    <div class="d-flex align-items-end">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Track ID: TBL18754264568</h6>
                                            <p class="text-muted mb-0">Delivery Date: 26 Dec, 2022</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="text-reset stretched-link">View <i
                                                    class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <span class="badge badge-soft-secondary float-end clearfix">Pickup</span>
                                    <h5 class="fs-18 mb-3">Toner Logistics</h5>
                                    <div class="d-flex align-items-end">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Track ID: TTBL147009672</h6>
                                            <p class="text-muted mb-0">Delivery Date: 03 Feb, 2023</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="text-reset stretched-link">View <i
                                                    class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <span class="badge badge-soft-success float-end clearfix">Delivered</span>
                                    <h5 class="fs-18 mb-3">Zibra Logistics</h5>
                                    <div class="d-flex align-items-end">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Track ID: MFDS1400457854</h6>
                                            <p class="text-muted mb-0">Delivery Date: 07 Nov, 2022</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="text-reset stretched-link">View <i
                                                    class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <span class="badge badge-soft-danger float-end clearfix">Out Of Delivery</span>
                                    <h5 class="fs-18 mb-3">Toner Logistics</h5>
                                    <div class="d-flex align-items-end">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Track ID: TTBL147009390</h6>
                                            <p class="text-muted mb-0">Delivery Date: 05 Feb, 2023</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="text-reset stretched-link">View <i
                                                    class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Shipping Details</h5>
                        <div class="flex-shrink-0">
                            <p class="mb-0">Delivery Date: <b>14 Jan, 2023</b></p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card bg-secondary bg-opacity-10 border-0">
                                <div class="card-body">
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-18 mb-3">Order Information</h6>
                                            <p class="mb-0">ID: <span class="fw-medium">#TBT84000142101</span></p>
                                            <p class="mb-1">Amount Total: <span class="fw-medium">$723.65</span></p>
                                            <p class="mb-0">Order Date: <span class="fw-medium">05 Jan, 2023</span></p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-3">
                                                <i class="ph-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card bg-warning bg-opacity-10 border-0">
                                <div class="card-body">
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-18 mb-3">Shipping Address</h6>
                                            <p class="mb-0">Block A, House 123, Floor 2</p>
                                            <p class="mb-1">Tashkent, Uzbekistan</p>
                                            <p class="mb-0">013-789-9876</p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-warning-subtle text-warning rounded fs-3">
                                                <i class="ph-map-pin"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card bg-success bg-opacity-10 border-0">
                                <div class="card-body">
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-18 mb-3">Customer Info</h6>
                                            <p class="mb-0 fw-medium">Daniel Gonzalez</p>
                                            <p class="mb-1">gabrielle@toner.com</p>
                                            <p class="mb-0">013-789-9876</p>
                                        </div>
                                        <div>
                                            <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                class="avatar-sm rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <h5 class="card-title flex-grow-1 mb-0">Order Status</h5>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-soft-primary btn-sm mt-2 mt-sm-0"><i
                                    class="ri-map-pin-line align-bottom me-1"></i> Change Address</button>
                            <button type="button" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i
                                    class="mdi mdi-archive-remove-outline align-bottom me-1"></i> Cancel Order</button>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-2 order-tracking text-center completed">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0 border-0">
                                <div class="card-body">
                                    <h6 class="fs-17 mb-1">Order Process</h6>
                                    <p class="text-muted fs-15 mb-0">Mon, 24 Dec, 2022</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center completed">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0 border-0">
                                <div class="card-body">
                                    <h6 class="fs-17 mb-1">Packed</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 28 Dec, 2022</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center completed">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0 border-0">
                                <div class="card-body">
                                    <h6 class="fs-17 mb-1">Order Shipped</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 02 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0 border-0">
                                <div class="card-body">
                                    <h6 class="fs-17 mb-1">Out Of Delivery</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 10 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0 border-0">
                                <div class="card-body">
                                    <h6 class="fs-17 mb-1">Delivered</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 14 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="mt-4">
                        <h5 class="card-title mb-4">View Map</h5>
                        <div id="users-by-country" data-colors='["--tb-light"]' class="text-center"
                            style="height: 450px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- createModal -->
    <div id="createModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title fs-18">Create Shipping</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="#1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="shipmentNo" class="form-label">Shipment No</label>
                                    <input type="text" class="form-control" id="shipmentNo"
                                        placeholder="#TBSN00000000000" value="TBSN15414521452" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="orderID" class="form-label">Order ID</label>
                                    <input type="text" class="form-control" id="orderID" placeholder="#TBSC0000"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="orderDate" class="form-label">Order Date</label>
                                    <input type="text" class="form-control" id="orderDate" data-provider="flatpickr"
                                        data-date-format="d M, Y" placeholder="Select date" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="orderTime" class="form-label">Order Time</label>
                                    <input type="text" class="form-control" id="orderTime" data-provider="timepickr"
                                        data-time-inline="11:42" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="customerName" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" id="customerName"
                                        placeholder="Enter customer name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="supplierName" class="form-label">Supplier Name</label>
                                    <input type="text" class="form-control" id="supplierName"
                                        placeholder="Enter supplier name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="arrivalDate" class="form-label">Arrival Date</label>
                                    <input type="text" class="form-control" id="arrivalDate"
                                        data-provider="flatpickr" data-date-format="d M, Y" placeholder="Select date"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="statusSelect" class="form-label">Status</label>
                                    <select class="form-control" data-choices data-choices-search-false
                                        name="choices-single-default" id="statusSelect">
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
                                    <button type="submit" class="btn btn-primary">Add Shipping</button>
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
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this shipping order ?</p>
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
    <!-- Vector map-->
    <script src="{{ URL::asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--shipping list init-->
    <script src="{{ URL::asset('assets/js/backend/shipping-list.init.js') }}"></script>​

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
