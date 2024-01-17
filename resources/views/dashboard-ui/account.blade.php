@extends('layouts.master')
@section('title')
    My Account
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <x-breadcrumb title="My Account" pagetitle="Accounts" />

    <div class="row">
        <div class="col-xxl-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="profile-user-img position-relative">
                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                    class="rounded object-fit-cover">
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge border border-3 border-white rounded-circle bg-success p-1 mt-1 me-1"><span
                                        class="visually-hidden">unread messages</span></span>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-9">
                            <div class="d-flex border-bottom border-bottom-dashed pb-3 mb-3 mt-4 mt-lg-0">
                                <div class="flex-grow-1">
                                    <h5>Raquel Murillo</h5>
                                    <p class="text-muted mb-0">Sales & Marketing Manager</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="dropdown">
                                        <button class="btn btn-ghost-primary btn-icon" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ph-dots-three-outline"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-sm mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Location
                                                    </td>
                                                    <td class="fw-medium">
                                                        Phoenix, USA
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Email ID
                                                    </td>
                                                    <td class="fw-medium">
                                                        raquelmurillo@sales.com
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Date of Birth
                                                    </td>
                                                    <td class="fw-medium">
                                                        29 Oct, 1986
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Mobile / Phone No.
                                                    </td>
                                                    <td class="fw-medium">
                                                        +(235) 01234 5678
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Total Reviews
                                                    </td>
                                                    <td class="fw-medium">
                                                        <i class="bi bi-star-half text-warning align-middle me-1"></i> 365
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-sm mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Designation
                                                    </td>
                                                    <td class="fw-medium">
                                                        Sales & Marketing Managers
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Total Products
                                                    </td>
                                                    <td class="fw-medium">
                                                        237
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Orders
                                                    </td>
                                                    <td class="fw-medium">
                                                        3,412
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Earnings
                                                    </td>
                                                    <td class="fw-medium">
                                                        $2,960.32
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Joining Date
                                                    </td>
                                                    <td class="fw-medium">
                                                        16 Aug, 2000
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                            <div class="mt-3">
                                <ul class="list-unstyled hstack gap-2 mb-0">
                                    <li>
                                        Social Media:
                                    </li>
                                    <li>
                                        <a href="#!" class="btn btn-soft-secondary btn-icon btn-sm"><i
                                                class="ph-facebook-logo"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="btn btn-soft-danger btn-icon btn-sm"><i
                                                class="ph-envelope"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="btn btn-soft-primary btn-icon btn-sm"><i
                                                class="ph-twitter-logo"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="btn btn-soft-success btn-icon btn-sm"><i
                                                class="ph-whatsapp-logo"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                <ul class="nav nav-pills flex-grow-1 mb-0" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" data-bs-toggle="tab" href="#recentOrders" role="tab">
                            Recent Orders
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-bs-toggle="tab" href="#products" role="tab">
                            Products
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-bs-toggle="tab" href="#transactions" role="tab">
                            Transactions
                        </a>
                    </li>
                </ul>
                <div class="flex-shrink-0">
                    <a href="account-settings" class="btn btn-success">Profile Settings</a>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="recentOrders" role="tabpanel">
                    <div class="card">
                        <div class="card-header d-sm-flex align-items-center gap-3">
                            <h5 class="card-title mb-0 flex-grow-1">Recent Orders</h5>
                            <div class="search-box mt-3 mt-sm-0">
                                <input type="text" class="form-control search w-md"
                                    placeholder="Search for order ID, customer, order status or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card mb-1">
                                <table class="table align-middle table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th>
                                            <th class="fw-medium" data-sort="id">Order ID</th>
                                            <th class="fw-medium" data-sort="product_name">Product Name</th>
                                            <th class="fw-medium" data-sort="amount">Amount</th>
                                            <th class="fw-medium" data-sort="order_date">Order Date</th>
                                            <th class="fw-medium" data-sort="payment_method">Payment Method</th>
                                            <th class="fw-medium" data-sort="status">Delivery Status</th>
                                            <th class="fw-medium" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42101</a></td>
                                            <td class="product_name">Carven Lounge Chair Red</td>
                                            <td class="amount">$874.30</td>
                                            <td class="order_date">18 Dec, 2022</td>
                                            <td class="payment_method">Mastercard</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">Delivered</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42102</a></td>
                                            <td class="product_name">World's Most Expensive T-Shirt</td>
                                            <td class="amount">$1452.00</td>
                                            <td class="order_date">02 Jan, 2023</td>
                                            <td class="payment_method">Visa</td>
                                            <td class="status">
                                                <span class="badge badge-soft-info">Pickups</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42103</a></td>
                                            <td class="product_name">Ninja Pro Max Smartwatch</td>
                                            <td class="amount">$341.23</td>
                                            <td class="order_date">24 Nov, 2022</td>
                                            <td class="payment_method">COD</td>
                                            <td class="status">
                                                <span class="badge badge-soft-secondary">Inprogress</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42104</a></td>
                                            <td class="product_name">Like Style Women Black Handbag</td>
                                            <td class="amount">$671.00</td>
                                            <td class="order_date">12 Jan, 2023</td>
                                            <td class="payment_method">Visa</td>
                                            <td class="status">
                                                <span class="badge badge-soft-warning">Pending</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42105</a></td>
                                            <td class="product_name">Funky Prints T-shirt</td>
                                            <td class="amount">$803.11</td>
                                            <td class="order_date">08 Aug, 2022</td>
                                            <td class="payment_method">Mastercard</td>
                                            <td class="status">
                                                <span class="badge badge-soft-primary">Returns</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42106</a></td>
                                            <td class="product_name">Innovative Education Book</td>
                                            <td class="amount">$203.65</td>
                                            <td class="order_date">08 Oct, 2022</td>
                                            <td class="payment_method">Visa</td>
                                            <td class="status">
                                                <span class="badge badge-soft-danger">Cancelled</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42107</a></td>
                                            <td class="product_name">Leather band Smartwatches</td>
                                            <td class="amount">$2145.20</td>
                                            <td class="order_date">11 Feb, 2021</td>
                                            <td class="payment_method">COD</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">Delivered</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42107</a></td>
                                            <td class="product_name">Galaxy Watch4</td>
                                            <td class="amount">$3468.41</td>
                                            <td class="order_date">28 Oct, 2022</td>
                                            <td class="payment_method">Mastercard</td>
                                            <td class="status">
                                                <span class="badge badge-soft-info">Pickups</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42108</a></td>
                                            <td class="product_name">Borosil Paper Cup</td>
                                            <td class="amount">$351.91</td>
                                            <td class="order_date">19 June, 2021</td>
                                            <td class="payment_method">Visa</td>
                                            <td class="status">
                                                <span class="badge badge-soft-warning">Pending</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42109</a></td>
                                            <td class="product_name">Apple Headphone</td>
                                            <td class="amount">$1876.02</td>
                                            <td class="order_date">25 Nov, 2021</td>
                                            <td class="payment_method">COD</td>
                                            <td class="status">
                                                <span class="badge badge-soft-primary">Returns</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="orders-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-0 text-center text-md-start align-items-center">
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-md-0">Showing <b>1</b> to <b>10</b> of <b>18</b> entries</p>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <ul
                                        class="pagination pagination-separated justify-content-center justify-content-md-end flex-wrap gap-1 gap-sm-0 mb-0">
                                        <li class="page-item disabled"> <a href="#" class="page-link"><i
                                                    class="mdi mdi-chevron-left align-middle me-1"></i> Previous</a> </li>
                                        <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                                        <li class="page-item "> <a href="#" class="page-link">2</a> </li>
                                        <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                                        <li class="page-item"> <a href="#" class="page-link">4</a> </li>
                                        <li class="page-item"> <a href="#" class="page-link">Next <i
                                                    class="mdi mdi-chevron-right align-middle ms-1"></i></a></li>
                                    </ul>
                                </div><!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="products" role="tabpanel">
                    <div class="card">
                        <div class="card-header d-sm-flex align-items-center gap-3">
                            <h5 class="card-title mb-3 mb-sm-0 flex-grow-1">Products</h5>
                            <div class="search-box">
                                <input type="text" class="form-control search w-md"
                                    placeholder="Search for product ID, product, order or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card mb-1">
                                <table class="table align-middle table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div>
                                            </th>
                                            <th class="fw-medium" data-sort="id">ID</th>
                                            <th class="fw-medium" data-sort="product_name">Product Name</th>
                                            <th class="fw-medium" data-sort="stock">Stock</th>
                                            <th class="fw-medium" data-sort="rate">Rate</th>
                                            <th class="fw-medium" data-sort="price">Price</th>
                                            <th class="fw-medium" data-sort="orders">Orders</th>
                                            <th class="fw-medium" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42101</a></td>
                                            <td class="product_name">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-sm">
                                                        <div class="avatar-title bg-light rounded"> <img
                                                                src="{{ URL::asset('assets/images/products/img-10.png') }}" alt=""
                                                                class="avatar-xs"> </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1"><a href="product-overview"
                                                                class="d-block text-dark">World's most expensive t
                                                                shirt</a></h6>
                                                        <p class="mb-0 text-muted">Category : <span
                                                                class="fw-medium">Fashion</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="stock">45</td>
                                            <td class="rate">
                                                <span class="badge bg-light text-body fs-13 fw-medium"><i
                                                        class="mdi mdi-star text-warning me-1"></i>4.9</span>
                                            </td>
                                            <td class="price">$266.24</td>
                                            <td class="orders">48</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="product-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42102</a></td>
                                            <td class="product_name">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-sm">
                                                        <div class="avatar-title bg-light rounded"> <img
                                                                src="{{ URL::asset('assets/images/products/img-15.png') }}" alt=""
                                                                class="avatar-xs"> </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1"><a href="product-overview"
                                                                class="d-block text-dark">Like Style Women Black
                                                                Handbag</a></h6>
                                                        <p class="mb-0 text-muted">Category : <span
                                                                class="fw-medium">Other Accessories</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="stock">06</td>
                                            <td class="rate">
                                                <span class="badge bg-light text-body fs-13 fw-medium"><i
                                                        class="mdi mdi-star text-warning me-1"></i>4.2</span>
                                            </td>
                                            <td class="price">$742.00</td>
                                            <td class="orders">30</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="product-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42103</a></td>
                                            <td class="product_name">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-sm">
                                                        <div class="avatar-title bg-light rounded"> <img
                                                                src="{{ URL::asset('assets/images/products/img-1.png') }}" alt=""
                                                                class="avatar-xs"> </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1"><a href="product-overview"
                                                                class="d-block text-dark">Black Horn Backpack For Men Bags
                                                                30 L Backpack</a></h6>
                                                        <p class="mb-0 text-muted">Category : <span
                                                                class="fw-medium">Other Accessories</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="stock">10</td>
                                            <td class="rate">
                                                <span class="badge bg-light text-body fs-13 fw-medium"><i
                                                        class="mdi mdi-star text-warning me-1"></i>3.8</span>
                                            </td>
                                            <td class="price">$113.25</td>
                                            <td class="orders">36</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="product-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42104</a></td>
                                            <td class="product_name">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-sm">
                                                        <div class="avatar-title bg-light rounded"> <img
                                                                src="{{ URL::asset('assets/images/products/img-7.png') }}" alt=""
                                                                class="avatar-xs"> </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1"><a href="product-overview"
                                                                class="d-block text-dark">Innovative education book</a>
                                                        </h6>
                                                        <p class="mb-0 text-muted">Category : <span
                                                                class="fw-medium">Books</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="stock">16</td>
                                            <td class="rate">
                                                <span class="badge bg-light text-body fs-13 fw-medium"><i
                                                        class="mdi mdi-star text-warning me-1"></i>4.7</span>
                                            </td>
                                            <td class="price">$96.35</td>
                                            <td class="orders">40</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="product-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42105</a></td>
                                            <td class="product_name">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-sm">
                                                        <div class="avatar-title bg-light rounded"> <img
                                                                src="{{ URL::asset('assets/images/products/img-4.png') }}" alt=""
                                                                class="avatar-xs"> </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1"><a href="product-overview"
                                                                class="d-block text-dark">Sangria Girls Mint Green &
                                                                Off-White Toe Flats</a></h6>
                                                        <p class="mb-0 text-muted">Category : <span
                                                                class="fw-medium">Footwear</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="stock">51</td>
                                            <td class="rate">
                                                <span class="badge bg-light text-body fs-13 fw-medium"><i
                                                        class="mdi mdi-star text-warning me-1"></i>4.9</span>
                                            </td>
                                            <td class="price">$24.07</td>
                                            <td class="orders">120</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="product-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                        value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="javascript:void(0);"
                                                    class="fw-medium link-primary">#TBT42106</a></td>
                                            <td class="product_name">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2 avatar-sm">
                                                        <div class="avatar-title bg-light rounded"> <img
                                                                src="{{ URL::asset('assets/images/products/img-6.png') }}" alt=""
                                                                class="avatar-xs"> </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1"><a href="product-overview"
                                                                class="d-block text-dark">Striped High Neck Casual Men
                                                                Orange Sweater</a></h6>
                                                        <p class="mb-0 text-muted">Category : <span
                                                                class="fw-medium">Fashion</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="stock">69</td>
                                            <td class="rate">
                                                <span class="badge bg-light text-body fs-13 fw-medium"><i
                                                        class="mdi mdi-star text-warning me-1"></i>4.8</span>
                                            </td>
                                            <td class="price">$66.28</td>
                                            <td class="orders">321</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm btn-icon dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="product-overview">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn"
                                                                data-bs-toggle="modal" href="#deleteRecordModal">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-0 text-center text-md-start align-items-center">
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-md-0">Showing <b>1</b> to <b>6</b> of <b>18</b> entries</p>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <ul
                                        class="pagination pagination-separated justify-content-center justify-content-md-end flex-wrap gap-1 gap-md-0 mb-0">
                                        <li class="page-item disabled"> <a href="#" class="page-link"><i
                                                    class="mdi mdi-chevron-left align-middle me-1"></i> Previous</a> </li>
                                        <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                                        <li class="page-item "> <a href="#" class="page-link">2</a> </li>
                                        <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                                        <li class="page-item"> <a href="#" class="page-link">Next <i
                                                    class="mdi mdi-chevron-right align-middle ms-1"></i></a></li>
                                    </ul>
                                </div><!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="transactions" role="tabpanel">
                    <div class="card">
                        <div class="card-header d-sm-flex align-items-center gap-3">
                            <h5 class="card-title mb-3 mb-sm-0 flex-grow-1">Transactions</h5>
                            <div class="search-box">
                                <input type="text" class="form-control search w-md"
                                    placeholder="Search for transactions or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="fw-medium" data-sort="id">Transaction ID</th>
                                            <th class="fw-medium" data-sort="from">From</th>
                                            <th class="fw-medium" data-sort="to">To</th>
                                            <th class="fw-medium" data-sort="timestamp">Timestamp</th>
                                            <th class="fw-medium" data-sort="payment_method">Payment Method</th>
                                            <th class="fw-medium" data-sort="amount">Amount</th>
                                            <th class="fw-medium" data-sort="status">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <td class="id">c1bf44fd100fff</td>
                                            <td class="from">Cassius Brock</td>
                                            <td class="to">Admin</td>
                                            <td class="timestamp">02 Feb, 2023 <small class="text-muted">01:47AM</small>
                                            </td>
                                            <td class="payment_method">PayPal</td>
                                            <td class="amount text-success">$266.24</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">Success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">e5r4f1g5h2npli</td>
                                            <td class="from">Admin</td>
                                            <td class="to">HDFC</td>
                                            <td class="timestamp">29 Jan, 2023 <small class="text-muted">03:20PM</small>
                                            </td>
                                            <td class="payment_method">Credit Card</td>
                                            <td class="amount text-danger">$462.36</td>
                                            <td class="status">
                                                <span class="badge badge-soft-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">c94b5581418c4</td>
                                            <td class="from">Admin</td>
                                            <td class="to">HDFC</td>
                                            <td class="timestamp">29 Jan, 2023 <small class="text-muted">04:33PM</small>
                                            </td>
                                            <td class="payment_method">Credit Card</td>
                                            <td class="amount text-danger">$6.00</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">Success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">1deffa9713917e</td>
                                            <td class="from">Scott Wilson</td>
                                            <td class="to">Admin</td>
                                            <td class="timestamp">17 Jan, 2023 <small class="text-muted">01:35AM</small>
                                            </td>
                                            <td class="payment_method">Debit Card</td>
                                            <td class="amount text-success">$364.78</td>
                                            <td class="status">
                                                <span class="badge badge-soft-danger">Failed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">v98p141d5f4j14</td>
                                            <td class="from">Kristina Hooper</td>
                                            <td class="to">Admin</td>
                                            <td class="timestamp">29 Dec, 2022 <small class="text-muted">11:49AM</small>
                                            </td>
                                            <td class="payment_method">Debit Card</td>
                                            <td class="amount text-success">$723.91</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">v98p141d5f4j14</td>
                                            <td class="from">Admin</td>
                                            <td class="to">Jacques Leon</td>
                                            <td class="timestamp">13 Dec, 2022 <small class="text-muted">10:30AM</small>
                                            </td>
                                            <td class="payment_method">PayPal</td>
                                            <td class="amount text-danger">$340.00</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">v98p141d5f4j14</td>
                                            <td class="from">HDFC</td>
                                            <td class="to">Admin</td>
                                            <td class="timestamp">13 Dec, 2022 <small class="text-muted">10:30AM</small>
                                            </td>
                                            <td class="payment_method">Online Banking</td>
                                            <td class="amount text-success">$954.30</td>
                                            <td class="status">
                                                <span class="badge badge-soft-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">sdsa78gh48t98</td>
                                            <td class="from">Admin</td>
                                            <td class="to">HDFC</td>
                                            <td class="timestamp">11 Dec, 2022 <small class="text-muted">09:46PM</small>
                                            </td>
                                            <td class="payment_method">Online Banking</td>
                                            <td class="amount text-danger">$32.14</td>
                                            <td class="status">
                                                <span class="badge badge-soft-danger">Failed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">186aa96d8010</td>
                                            <td class="from">Admin</td>
                                            <td class="to">Daniel Gonzalez</td>
                                            <td class="timestamp">02 Nov, 2022 <small class="text-muted">07:30PM</small>
                                            </td>
                                            <td class="payment_method">PayPal</td>
                                            <td class="amount text-danger">$74.10</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="id">61d994f025ac</td>
                                            <td class="from">Gabrielle Holden</td>
                                            <td class="to">Admin</td>
                                            <td class="timestamp">29 Oct, 2022 <small class="text-muted">12:58AM</small>
                                            </td>
                                            <td class="payment_method">Credit Card</td>
                                            <td class="amount text-success">$698.37</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success">success</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-0 text-center text-md-start align-items-center">
                                <div class="col-md-6">
                                    <div>
                                        <p class="mb-md-0">Showing <b>1</b> to <b>10</b> of <b>27</b> entries</p>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <ul
                                        class="pagination pagination-separated justify-content-center justify-content-md-end flex-wrap gap-1 gap-md-0 mb-0">
                                        <li class="page-item disabled"> <a href="#" class="page-link"><i
                                                    class="mdi mdi-chevron-left align-middle me-1"></i> Previous</a> </li>
                                        <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                                        <li class="page-item "> <a href="#" class="page-link">2</a> </li>
                                        <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                                        <li class="page-item"> <a href="#" class="page-link">Next <i
                                                    class="mdi mdi-chevron-right align-middle ms-1"></i></a></li>
                                    </ul>
                                </div><!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end col-->
        <div class="col-xxl-3">
            <div class="row">
                <div class="col-xxl-12 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Acitivity</h5>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="btn btn-ghost-primary btn-sm btn-icon" href="#!"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ph-dots-three-outline"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div data-simplebar style="max-height: 440px;" class="p-3 ps-0 pt-0">
                                <div class="acitivity-timeline acitivity-main">
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0 acitivity-avatar">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Purchase by Jacques Leon</h6>
                                            <p class="mb-2 text-muted"><small>12:45 PM Today</small></p>
                                            <p class="text-muted mb-0">Product noise evolve smartwatch </p>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="acitivity-avatar"></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Today offers by <a href="seller-overview"
                                                    class="link-secondary">themesbrand</a></h6>
                                            <p class="mb-2 text-muted"><small>03:14 PM - 18 Jan, 2023</small></p>
                                            <p class="text-muted mb-0">Offer is valid on orders of Rs.500 Or above for
                                                selected products only.</p>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0 acitivity-avatar">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Added new <span class="fw-semibold">style
                                                    collection</span></h6>
                                            <p class="mb-2 text-muted"><small>9:47 PM Yesterday</small></p>
                                            <p class="text-muted mb-2">By Zibra Fashion</p>
                                            <div class="d-inline-flex gap-2 border border-dashed p-2">
                                                <a href="apps-ecommerce-product-details"
                                                    class="bg-success-subtle rounded p-3 avatar-md flex-shrink-0">
                                                    <img src="{{ URL::asset('assets/images/products/img-4.png') }}" alt=""
                                                        class="img-fluid d-block">
                                                </a>
                                                <a href="apps-ecommerce-product-details"
                                                    class="bg-warning-subtle rounded p-3 avatar-md flex-shrink-0">
                                                    <img src="{{ URL::asset('assets/images/products/img-6.png') }}" alt=""
                                                        class="img-fluid d-block">
                                                </a>
                                                <a href="apps-ecommerce-product-details"
                                                    class="bg-info-subtle rounded p-3 avatar-md flex-shrink-0">
                                                    <img src="{{ URL::asset('assets/images/products/img-7.png') }}" alt=""
                                                        class="img-fluid d-block">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="acitivity-avatar"></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Alina Holland have bookmark the products</h6>
                                            <p class="mb-2 text-muted"><small>04:30 AM - 29 Dec, 2022</small></p>
                                            <p class="text-muted mb-0">Allow users to bookmark products in your WooCommerce
                                                store.</p>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="acitivity-avatar">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Favoried Product</h6>
                                            <p class="mb-2 text-muted"><small>01:14 PM - 24 Nov, 2022</small></p>
                                            <p class="text-muted mb-0">Kristina Hooper have favorited product.</p>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="acitivity-avatar">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Flash sale starting <span
                                                    class="text-primary">Tomorrow.</span></h6>
                                            <p class="mb-2 text-muted"><small>11:15 AM - 29 Oct, 2022</small></p>
                                            <p class="text-muted mb-0">Flash sale by <a href="javascript:void(0);"
                                                    class="link-secondary fw-medium">Terry & Jerry Fashion</a></p>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="acitivity-avatar"></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Monthly sales report</h6>
                                            <p class="mb-2 text-muted"><small>04:57 PM - 11 Sep, 2022</small></p>
                                            <p class="text-muted mb-0"><span class="text-danger">1 days left</span>
                                                notification to submit the monthly sales report. <a
                                                    href="javascript:void(0);"
                                                    class="link-warning text-decoration-underline">Reports Builder</a></p>
                                        </div>
                                    </div>
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0 acitivity-avatar"></div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0 lh-base">Frank Hook Review</h6>
                                            <p class="mb-2 text-muted"><small>04:57 PM - 26 Aug, 2022</small></p>
                                            <p class="text-warning mb-2"><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                            <p class="text-muted mb-0 fst-italic">" A product that has reviews is more
                                                likable to be sold than a product. "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-12 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title flex-grow-1 mb-0">Important Notes</h5>
                        </div>
                        <div class="card-body">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="p-3 bg-secondary bg-opacity-10 rounded">
                                            <p class="mb-2 text-truncate-three-lines">Thanks to the pandemic, e-commerce
                                                has seen a surge of activity and new consumers. This projection is based on
                                                the fact that the sector is expected to grow at 20 percent annually.</p>
                                            <div class="text-end">
                                                <a href="#!" class="link-secondary"><i>- Admin</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-3 bg-primary bg-opacity-10 rounded">
                                            <p class="mb-2 text-truncate-three-lines">Live shopping could be a great
                                                innovation to consider as part of your strategy in 2022 to further build
                                                customer engagement, loyalty</p>
                                            <div class="text-end">
                                                <a href="#!"><i>- Zibra Fashion</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-3 bg-danger bg-opacity-10 rounded">
                                            <p class="mb-2 text-truncate-three-lines">Buying online has become necessary
                                                for some customers, especially if they are part of the at-risk groups.</p>
                                            <div class="text-end">
                                                <a href="#!" class="link-danger"><i>- Sales Manager</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="#!" class="mt-3">
                                <div class="mb-3">
                                    <label for="notesInput" class="form-label">Notes</label>
                                    <textarea class="form-control" id="notesInput" rows="3"></textarea>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn btn-primary">Add Notes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end row-->

    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
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
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted fs-17 mx-4 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-notification">Yes,
                            Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <!--Swiper slider js-->
    <script src="{{ URL::asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!--Account init js-->
    <script src="{{ URL::asset('assets/js/backend/account.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
