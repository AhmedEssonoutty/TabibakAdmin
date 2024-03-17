@extends('layouts.master')
@section('title')
    Invoice Details
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Invoice Details" pagetitle="Invoices" />
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card" id="demo">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header border-bottom-dashed p-4">
                            <div class="d-sm-flex">
                                <div class="flex-grow-1">
                                    <img src="{{ URL::asset('assets/images/logo-dark.png') }}" class="card-logo card-logo-dark"
                                        alt="" height="26">
                                    <img src="{{ URL::asset('assets/images/logo-light.png') }}" class="card-logo card-logo-light"
                                        alt="" height="26">
                                    <div class="mt-sm-5 mt-4">
                                        <h6 class="text-muted text-uppercase fw-semibold fs-14">Address</h6>
                                        <p class="text-muted mb-1" id="address-details">California, United States</p>
                                        <p class="text-muted mb-0" id="zip-code"><span>Zip-code:</span> 90201</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                    <h6><span class="text-muted fw-normal">Legal Registration No:</span> <span
                                            id="legal-register-no">987654</span></h6>
                                    <h6><span class="text-muted fw-normal">Email:</span> <span
                                            id="email">toner@themesbrand.com</span></h6>
                                    <h6><span class="text-muted fw-normal">Website:</span> <a
                                            href="https://themesbrand.com/" class="link-primary" target="_blank"
                                            id="website">www.themesbrand.com</a></h6>
                                    <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span
                                            id="contact-no"> +(314) 234 6789</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-14">Invoice No</p>
                                    <h5 class="fs-15 mb-0">#TTB<span id="invoice-no">30280001</span></h5>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-14">Date</p>
                                    <h5 class="fs-15 mb-0"><span id="invoice-date">14 Jan, 2023</span> <small
                                            class="text-muted" id="invoice-time">12:22PM</small></h5>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-14">Payment Status</p>
                                    <span class="badge badge-soft-success" id="payment-status">Paid</span>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-14">Total Amount</p>
                                    <h5 class="fs-15 mb-0">$<span id="total-amount">1406.92</span></h5>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4 border-top border-top-dashed">
                            <div class="row g-3">
                                <div class="col-6">
                                    <h6 class="text-muted text-uppercase fw-semibold fs-14 mb-3">Billing Address</h6>
                                    <p class="fw-medium mb-2 fs-16" id="billing-name">Edward Diana</p>
                                    <p class="text-muted mb-1" id="billing-address-line-1">4430 Holt Street, Miami,
                                        Florida-33169</p>
                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">(123)
                                            561-238-1000</span></p>
                                    <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">65-498700</span>
                                    </p>
                                </div>
                                <!--end col-->
                                <div class="col-6">
                                    <h6 class="text-muted text-uppercase fw-semibold fs-14 mb-3">Shipping Address</h6>
                                    <p class="fw-medium mb-2 fs-16" id="shipping-name">Edward Diana</p>
                                    <p class="text-muted mb-1" id="shipping-address-line-1">4430 Holt Street, Miami,
                                        Florida-33169</p>
                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">(123)
                                            561-238-1000</span></p>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col" class="text-end">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="products-list">
                                        <tr>
                                            <th scope="row">01</th>
                                            <td class="text-start">
                                                <span class="fw-medium">World's most expensive t shirt</span>
                                                <p class="text-muted mb-0">Graphic Print Men & Women Sweatshirt</p>
                                            </td>
                                            <td>$266.24</td>
                                            <td>03</td>
                                            <td class="text-end">$798.72</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">02</th>
                                            <td class="text-start">
                                                <span class="fw-medium">Ninja Pro Max Smartwatch</span>
                                                <p class="text-muted mb-0">large display of 40mm (1.6″ inch), 27 sports
                                                    mode, SpO2 monitor</p>
                                            </td>
                                            <td>$247.27</td>
                                            <td>01</td>
                                            <td class="text-end">$247.27</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">03</th>
                                            <td class="text-start">
                                                <span class="fw-medium">Girls Mint Green & Off-White Open Toe Flats</span>
                                                <p class="text-muted mb-0">Fabric:Synthetic · Colour:Green · Shoe
                                                    Type:Sandals</p>
                                            </td>
                                            <td>$24.07</td>
                                            <td>05</td>
                                            <td class="text-end">$120.35</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">04</th>
                                            <td class="text-start">
                                                <span class="fw-medium">Carven Lounge Chair Red</span>
                                                <p class="text-muted mb-0">Carven Fabric Lounge Chair in Red Color</p>
                                            </td>
                                            <td>$209.99</td>
                                            <td>01</td>
                                            <td class="text-end">$209.99</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <div class="border-top border-top-dashed mt-2">
                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto"
                                    style="width:250px">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-end">$1376.33</td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax (12.5%)</td>
                                            <td class="text-end">$172.04</td>
                                        </tr>
                                        <tr>
                                            <td>Discount <small class="text-muted">(TONER50)</small></td>
                                            <td class="text-end">- $206.45</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge</td>
                                            <td class="text-end">$65.00</td>
                                        </tr>
                                        <tr class="border-top border-top-dashed fs-15">
                                            <th scope="row">Total Amount</th>
                                            <th class="text-end">$1406.92</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <div class="mt-3">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                <p class="text-muted mb-1">Payment Method: <span class="fw-medium"
                                        id="payment-method">Mastercard</span></p>
                                <p class="text-muted mb-1">Card Holder: <span class="fw-medium"
                                        id="card-holder-name">David Nichols</span></p>
                                <p class="text-muted mb-1">Card Number: <span class="fw-medium" id="card-number">xxx xxxx
                                        xxxx 1234</span></p>
                                <p class="text-muted">Total Amount: <span class="fw-medium">$ </span><span
                                        id="card-total-amount">1406.92</span></p>
                            </div>
                            <div class="mt-4">
                                <div class="alert alert-info">
                                    <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                        <span id="note">All accounts are to be paid within 7 days from receipt of
                                            invoice. To be paid by cheque or
                                            credit card or direct payment online. If account is not paid within 7
                                            days the credits details supplied as confirmation of work undertaken
                                            will be charged the agreed quoted fee noted above.
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                <a href="javascript:window.print()" class="btn btn-success"><i
                                        class="ri-printer-line align-bottom me-1"></i> Print</a>
                                <a href="javascript:void(0);" class="btn btn-primary"><i
                                        class="ri-download-2-line align-bottom me-1"></i> Download</a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('scripts')
    <script src="{{ URL::asset('assets/js/backend/invoicedetails.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
