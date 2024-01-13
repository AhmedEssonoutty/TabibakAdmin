@extends('layouts.master')
@section('title')
    Brands
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Brands" pagetitle="Toner" />

    </div>

    <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-sm-2 row-cols-1" id="brand-list">
        <!--  <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-1.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Michelin</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">362 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-2.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Rolex</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">471 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-3.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Huawel</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">3654 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-4.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Puma</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">1548 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-5.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Fastrack</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">645 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-6.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Nautica</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">702 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-7.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Mochup</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">945 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-8.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Bosch</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">3625 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-9.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Diesel</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">415 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-10.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Reebok</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">362 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-11.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Eagle</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">650 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-12.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Adidas</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">931 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-1.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Michelin</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">1462 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-13.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Kinetic</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">3621 Items</a></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card brand-widget card-animate">
                <div class="card-body text-center pb-2">
                    <img src="{{ URL::asset('assets/images/brands/img-14.png') }}" alt="" class="brand-img">
                </div>
                <div class="card-footer text-center border-0">
                    <h6 class="fs-17">Soriana</h6>
                    <p class="mb-0"><a href="#!" class="link-success stretched-link">1024 Items</a></p>
                </div>
            </div>
        </div> -->
    </div>

    <div id="noresult" class="d-none">
        <div class="text-center py-4">
            <div class="avatar-md mx-auto mb-4">
                <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                    <i class="bi bi-search"></i>
                </div>
            </div>
            <h5 class="mt-2">Sorry! No Result Found</h5>
        </div>
    </div>

    <div class="row mb-4" id="pagination-element">
        <div class="col-lg-12">
            <div
                class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                <div class="page-item">
                    <a href="javascript:void(0);" class="page-link" id="page-prev"><i
                            class="mdi mdi-chevron-left"></i></a>
                </div>
                <span id="page-num" class="pagination"></span>
                <div class="page-item">
                    <a href="javascript:void(0);" class="page-link" id="page-next"><i
                            class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end pagination-element -->

    <!-- createModal -->
    <div id="createModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title fs-18">Create brand profile</h5>
                    <button type="button" class="btn-close" id="createModal-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form autocomplete="off" novalidate class="create-form">
                        <input type="hidden" id="id-field">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center mb-3">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute top-100 start-100 translate-middle">
                                            <label for="brandLogo-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Select company logo">
                                                <span class="avatar-xs d-inline-block">
                                                    <span
                                                        class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </span>
                                                </span>
                                            </label>
                                            <input class="form-control d-none" id="brandLogo-image-input" type="file"
                                                accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-3">
                                                <img src="#" alt="" id="brandLogo-img"
                                                    class="avatar-md h-auto rounded-3 object-fit-cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="brandName-input" class="form-label">Brand Name</label>
                                    <input type="text" class="form-control" id="brandName-input"
                                        placeholder="Enter brand name" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="ri-close-line align-bottom me-1"></i> Close</button>
                                    <button type="submit" id="addNew" class="btn btn-primary">Add Brand</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <!-- brands list -->
    <script src="{{ URL::asset('assets/js/backend/brands-list.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
