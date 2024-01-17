@extends('layouts.master')
@section('title')
    Overview
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    {{-- <x-breadcrumb title="Settings" pagetitle="Toner" /> --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0 border-bottom border-bottom-dashed shadow-none mx-n4 mt-n4">
                <div class="card-body profile-basic position-relative"
                    style="background-image: url('../assets/images/profile-bg.jpg');background-size: cover;background-position: center;">
                    <div class="bg-primary bg-opacity-75 position-absolute start-0 end-0 top-0 bottom-0"></div>
                </div>
                <div class="card-body position-relative mt-n3">
                    <div class="mt-n5">
                        <div class="avatar-lg">
                            <div class="avatar-title bg-white shadow rounded">
                                <img src="{{ URL::asset('assets/images/companies/img-3.png') }}" alt="" class="avatar-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row justify-content-between gy-4">
                        <div class="col-xl-5 col-md-7">
                            <h5 class="mb-2">Zibra Fashion Ltd <i
                                    class="ph-circle-wavy-check-fill text-primary align-top fs-15"></i></h5>
                            <p><b>Since: 2015</b>. Selling clothes & Other Accessories</p>
                            <div class="mb-2 text-muted">
                                <i class="bi bi-geo-alt align-middle me-1"></i> Phoenix, USA
                            </div>

                            <div class="mb-2 text-muted">
                                <i class="bi bi-envelope align-middle me-1"></i> zibra@fashion.com
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-globe align-middle me-1"></i> www.zibrafashion.com
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-5">
                            <div class="d-flex flex-column h-100">
                                <div class="d-flex justify-content-end gap-3 mb-2">
                                    <div class="text-end">
                                        <h5 class="fs-18 mb-1">Edward Diana</h5>
                                        <p class="text-muted mb-2">Owner & CEO</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                            class="avatar-sm rounded-circle">
                                    </div>
                                </div>
                                <div class="text-end mt-auto">
                                    <button type="button" class="btn btn-info">Contact Us</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row g-3 align-items-center mb-4">
        <div class="col-lg-3 me-auto">
            <h5 class="fs-17 mb-0">Products by seller</h5>
        </div>
        <!--end col-->
        <div class="col-lg-2">
            <div class="search-box">
                <input type="text" class="form-control search" placeholder="Search for products...">
                <i class="ri-search-line search-icon"></i>
            </div>
        </div>
        <!--end col-->
        <div class="col-lg-auto">
            <a href="product-create" class="btn btn-primary">Add Product</a>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-8.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <p class="fs-12 fw-medium badge bg-danger py-2 px-3 product-lable mb-0 align-middle">Best Arrival</p>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle" data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle" data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add
                            to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes1" id="product-color-12">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-12"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes1" id="product-color-13">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-13"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes1" id="product-color-14">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-14"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes1" id="product-color-15">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-15"></label>
                            </li>
                        </ul>
                        <a href="product-overview">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">World's most expensive t-shirt
                            </h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$266.24 <span class="text-muted fs-14"><del>$354.99</del></span></h5>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-15.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes2" id="product-color-22">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-22"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes2" id="product-color-23">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-23"></label>
                            </li>
                        </ul>
                        <a href="product-overview">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Like Style Women Black Handbag
                            </h6>
                        </a>
                        <div class="mt-3"> <span class="float-end">4.2 <i
                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$742.00</h5>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-1.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <p class="fs-12 fw-medium badge bg-danger py-2 px-3 product-lable mb-0 align-middle">Best Arrival</p>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle active"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes3" id="product-color-32">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-32"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes3" id="product-color-33">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-33"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes3" id="product-color-34">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-34"></label>
                            </li>
                        </ul>
                        <a href="product-overview">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Black Horn Backpack For Men Bags
                                30 L Backpack</h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">3.8 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$112.50 <span class="text-muted fs-14"><del>$150.00</del></span></h5>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-5.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle "
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes6" id="product-color-62">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-62"></label>
                            </li>
                        </ul>
                        <a href="#!">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Lace-Up Casual Shoes For Men</h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.0 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$229.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-4.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <p class="fs-12 fw-medium badge bg-danger py-2 px-3 product-lable mb-0 align-middle">Best Arrival</p>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes5" id="product-color-101">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-101"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-102">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-102"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-104">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-104"></label>
                            </li>
                        </ul>
                        <a href="#!">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Sangria Girls Mint Green &
                                Off-White Solid Open Toe Flats</h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.7 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$24.07 <span class="text-muted fs-14"><del>$96.26</del></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-7.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes5" id="product-color-105">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-105"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-106">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-106"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-107">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-107"></label>
                            </li>
                        </ul>
                        <a href="#!">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Innovative education book</h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$96.26</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-6.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes5" id="product-color-108">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-108"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-109">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-109"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-110">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-110"></label>
                            </li>
                        </ul>
                        <a href="#!">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Striped High Neck Casual Men
                                Orange Sweater</h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.4 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$62.40 <span class="text-muted fs-14"><del>$120.00</del></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-9.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes5" id="product-color-111">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-111"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-112">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-112"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-113">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-113"></label>
                            </li>
                        </ul>
                        <a href="#!">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Urban Monkey Caps</h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$194.65 <span class="text-muted fs-14"><del>$229.00</del></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-14.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes5" id="product-color-114">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-114"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-115">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-115"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-116">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-116"></label>
                            </li>
                        </ul>
                        <a href="#!">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Plastic Designer Cafe Chair</h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.2 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$232.24 <span class="text-muted fs-14"><del>$354.99</del></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="card overflow-hidden element-item">
                <div class="bg-light py-4">
                    <div class="gallery-product">
                        <img src="{{ URL::asset('assets/images/products/img-11.png') }}" alt=""
                            style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                    </div>
                    <div class="gallery-product-actions">
                        <div class="mb-2">
                            <button type="button" class="btn btn-danger avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-success avatar-xs custom-toggle"
                                data-bs-toggle="button">
                                <span class="avatar-title">
                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="product-btn px-3">
                        <a href="#!" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i>
                            Add to Cart</a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap d-none">
                            <li>
                                <input type="radio" name="sizes5" id="product-color-117">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-117"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-118">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-118"></label>
                            </li>
                            <li>
                                <input type="radio" name="sizes5" id="product-color-119">
                                <label
                                    class="avatar-xxs border border-2 border-white btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                    for="product-color-119"></label>
                            </li>
                        </ul>
                        <a href="#!">
                            <h6 class="fs-18 lh-base text-truncate mb-0 text-capitalize">Stylish Collar Full Sleeve Tshirt
                            </h6>
                        </a>
                        <div class="mt-3">
                            <span class="float-end">4.2 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                            <h5 class="mb-0 fs-16">$160.00 <span class="text-muted fs-14"><del>$245.00s</del></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row g-0 text-center text-sm-start align-items-center mb-3">
        <div class="col-sm-6">
            <div>
                <p class="mb-sm-0">Showing <b>1</b> to <b>10</b> of <b>18</b> entries</p>
            </div>
        </div> <!-- end col -->
        <div class="col-sm-6">
            <ul
                class="pagination pagination-separated justify-content-center justify-content-sm-end flex-wrap gap-1 gap-sm-0 mb-sm-0">
                <li class="page-item disabled"> <a href="#" class="page-link">Previous</a> </li>
                <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                <li class="page-item "> <a href="#" class="page-link">2</a> </li>
                <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                <li class="page-item"> <a href="#" class="page-link">4</a> </li>
                <li class="page-item"> <a href="#" class="page-link">5</a> </li>
                <li class="page-item"> <a href="#" class="page-link">Next</a></li>
            </ul>
        </div><!-- end col -->
    </div>
@endsection
@section('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
