@extends('layouts.master')
@section('title')
    Order Overview
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Overview" pagetitle="Orders" />

    <div class="row mb-4 align-items-center">
        <div class="col">
            <h6 class="fs-18 mb-0">Order ID: #22830</h6>
        </div>
        <div class="col text-end">
            <button type="button" class="btn btn-secondary"><i class="ph-download-simple me-1 align-middle"></i>
                Invoice</button>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-3 col-lg-6">
            <div class="card bg-success bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <div class="flex-grow-1">
                            <h6 class="fs-18 mb-3">Customer Info</h6>
                            <p class="mb-0 fw-medium">Daniel Gonzalez</p>
                            <p class="mb-1">gabrielle@toner.com</p>
                            <p class="mb-0">013-789-9876</p>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <div class="avatar-title bg-success-subtle text-success rounded fs-3">
                                <i class="ph-user-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6">
            <div class="card bg-primary bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <div class="flex-grow-1">
                            <h6 class="fs-18 mb-3">Shipping Address</h6>
                            <p class="mb-0">Block A, House 123, Floor 2</p>
                            <p class="mb-1">Tashkent, Uzbekistan</p>
                            <p class="mb-0">013-789-9876</p>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <div class="avatar-title bg-primary-subtle text-primary rounded fs-3">
                                <i class="ph-map-pin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6">
            <div class="card bg-info bg-opacity-10 border-0">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <div class="flex-grow-1">
                            <h6 class="fs-18 mb-3">Billing Address</h6>
                            <p class="mb-0">Block A, House 123, Floor 2</p>
                            <p class="mb-1">Tashkent, Uzbekistan</p>
                            <p class="mb-0">013-789-9876</p>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <div class="avatar-title bg-info-subtle text-info rounded fs-3">
                                <i class="ph-file-text"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6">
            <div class="card card-primary overflow-hidden">
                <div class="position-absolute end-0 start-0 bottom-0 z-0">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="400" height="250" preserveAspectRatio="none" viewBox="0 0 400 250">
                        <g mask="url(&quot;#SvgjsMask1551&quot;)" fill="none">
                            <path d="M306 65L446 -75" stroke-width="8" stroke="url(#SvgjsLinearGradient1558)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M399 2L315 86" stroke-width="10" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M83 77L256 -96" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M281 212L460 33" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M257 62L76 243" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M305 123L214 214" stroke-width="6" stroke="url(#SvgjsLinearGradient1558)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M327 222L440 109" stroke-width="6" stroke="url(#SvgjsLinearGradient1558)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M287 109L362 34" stroke-width="10" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M259 194L332 121" stroke-width="8" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M376 186L240 322" stroke-width="8" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M308 153L123 338" stroke-width="6" stroke="url(#SvgjsLinearGradient1559)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M218 62L285 -5" stroke-width="8" stroke="url(#SvgjsLinearGradient1558)"
                                stroke-linecap="round" class="BottomLeft"></path>
                        </g>
                        <defs>
                            <mask id="SvgjsMask1551">
                                <rect width="400" height="250" fill="#ffffff"></rect>
                            </mask>
                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%"
                                id="SvgjsLinearGradient1558">
                                <stop stop-color="rgba(var(--tb-white-rgb), 0)" offset="0"></stop>
                                <stop stop-color="rgba(var(--tb-white-rgb), 0.1)" offset="1"></stop>
                            </linearGradient>
                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%"
                                id="SvgjsLinearGradient1559">
                                <stop stop-color="rgba(var(--tb-white-rgb), 0)" offset="0"></stop>
                                <stop stop-color="rgba(var(--tb-white-rgb), 0.1)" offset="1"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="card-body position-relative">
                    <h5 class="card-title fw-medium">Add New Orders</h5>
                    <p class="text-white-75">Orders are one of the main building blocks of creating an an ad campaign in Ad
                        Manager.</p>
                    <a href="#!" class="link-light">Create Order <i class="ph-arrow-right align-middle"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-9">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col" class="text-end">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#!" class="fw-medium link-primary">#00541</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/products/img-1.png') }}" alt=""
                                                    class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">Rockerz Ear Bluetooth Headphones</div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="text-secondary">$658.00</span>
                                    </td>

                                    <td>01 PCS</td>
                                    <td class="text-end">$658.00</td>
                                </tr><!-- end tr -->
                                <tr>
                                    <td>
                                        <a href="#!" class="fw-medium link-primary">#07484</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/products/img-5.png') }}" alt=""
                                                    class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">United Colors Of Benetton</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-secondary">$145.00</span>
                                    </td>

                                    <td>02 PCS</td>
                                    <td class="text-end">$290.00</td>
                                </tr><!-- end tr -->
                                <!--  end tr -->
                                <tr>
                                    <td>
                                        <a href="#!" class="fw-medium link-primary">#00065</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/products/img-3.png') }}" alt=""
                                                    class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">350 ml Glass Grocery Container</div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="text-secondary">$79.99</span>
                                    </td>

                                    <td>3 PCS</td>
                                    <td class="text-end">$239.97</td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <td>
                                        <a href="#!" class="fw-medium link-primary">#00156</a>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <img src="{{ URL::asset('assets/images/products/img-2.png') }}" alt=""
                                                    class="avatar-xs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">One Seater Sofa</div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="text-secondary">$264.99</span>
                                    </td>

                                    <td>02 PCS</td>
                                    <td class="text-end">$528.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td colspan="2" class="p-0">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total:</td>
                                                    <td class="text-end">$1715.97</td>
                                                </tr>
                                                <tr>
                                                    <td>Estimated Tax (12.5%):</td>
                                                    <td class="text-end">$200.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charge:</td>
                                                    <td class="text-end">$65.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount (TONER42):</td>
                                                    <td class="text-end">$97.00</td>
                                                </tr>
                                                <tr class="border-top">
                                                    <th>Total (USD) :</th>
                                                    <th class="text-end">$1868.97</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Logistics Details</h5>
                            <div class="flex-shrink-0">
                                <a href="#track-order" class="btn btn-sm btn-info">Track Order</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <i class="bi bi-truck fs-1"></i>
                                <h5 class="fs-18">Toner Logistics </h5>
                                <p class="mb-0">ID: MFDS1400457854</p>
                                <p class="mb-0">Payment Mode : Dedit Card</p>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Payment Detail:</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-borderless align-middle description-table mb-0">
                                    <tr>
                                        <td>Transactions:</td>
                                        <td><span class="fw-medium">#VLZ124561278124</span></td>
                                    </tr>
                                    <tr>
                                        <td>Payment Method</td>
                                        <td><span class="fw-medium">Debit Card</span></td>
                                    </tr>
                                    <tr>
                                        <td>Card Number:</td>
                                        <td><span class="fw-medium">XXXX XXXX XXXX 3028</span></td>
                                    </tr>
                                    <tr>
                                        <td>Card Holder Name</td>
                                        <td><span class="fw-medium">Daniel Gonzalez</span></td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount</td>
                                        <td><span class="fw-medium">$1868.98</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card" id="track-order">
                <div class="card-header d-flex  align-items-center gap-3">
                    <h5 class="card-title flex-grow-1 mb-0">Order Status</h5>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm mt-2 mt-sm-0"><i
                                class="ri-map-pin-line align-bottom me-1"></i> Change Address</button>
                        <button type="button" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0"><i
                                class="mdi mdi-archive-remove-outline align-bottom me-1"></i> Cancel Order</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-lg-2 order-tracking text-center completed">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0">
                                <div class="card-body">
                                    <h6 class="fs-17">Order Process</h6>
                                    <p class="text-muted fs-15 mb-0">Mon, 24 Dec, 2022</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center completed">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0">
                                <div class="card-body">
                                    <h6 class="fs-17">Packed</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 28 Dec, 2022</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center completed">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0">
                                <div class="card-body">
                                    <h6 class="fs-17">Order Shipped</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 02 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0">
                                <div class="card-body">
                                    <h6 class="fs-17">Out Of Delivery</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 10 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 order-tracking text-center">
                            <span class="is-complete"></span>
                            <div class="card mt-3 mb-0">
                                <div class="card-body">
                                    <h6 class="fs-17">Delivered</h6>
                                    <p class="text-muted fs-15 mb-0">Thu, 16 Jan, 2023</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
@endsection
@section('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
