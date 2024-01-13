@extends('layouts.master')
@section('title')
    Currency Rates
@endsection
@section('css')
    <!-- extra css -->
    <!-- Sweet Alert css-->
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <x-breadcrumb title="Currency Rates" pagetitle="Toner" />

    <div class="row" id="currencyRatesList">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Currency Rates</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <button data-bs-target="#showModal" data-bs-toggle="modal" class="btn btn-primary add-btn"><i
                                class="bi bi-plus-circle me-1 align-middle"></i> Add Currency</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th class="sort desc" data-sort="currencyName" scope="col">Currency Name</th>
                                    <th class="sort" data-sort="usd" scope="col">USD</th>
                                    <th class="sort" data-sort="type" scope="col">Type</th>
                                    <th class="sort" data-sort="exchangeRate" scope="col">Exchange Rate (USD)</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <tr>
                                    <td class="id" style="display:none;"><a href="javascript:void(0);"
                                            class="fw-medium link-primary">#TB01</a></td>
                                    <td class="currencyName">European Union</td>
                                    <td class="usd">1.064427</td>
                                    <td class="type">Euro (€)</td>
                                    <td class="exchangeRate"><span class="fw-medium">0.00136</span></td>
                                    <td>
                                        <ul class="list-unstyled hstack gap-2 mb-0">
                                            <li>
                                                <a class="btn btn-sm btn-icon btn-soft-secondary edit-item-btn"
                                                    href="#showModal" data-bs-toggle="modal"><i class="ph-pencil"></i></a>
                                            </li>
                                            <li>
                                                <a href="#deleteModal" data-bs-toggle="modal"
                                                    class="btn btn-sm btn-icon btn-soft-danger remove-item-btn"><i
                                                        class="ph-trash"></i></a>
                                            </li>
                                        </ul>
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
                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders
                                    for you search.</p>
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
    </div>
    <!--end row-->

    <!-- showModal -->
    <div id="showModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title fs-18" id="exampleModalLabel">Add New Currency</h5>
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
                                    <label for="exchangeRate" class="form-label">Exchange Rate (USD)</label>
                                    <input type="text" class="form-control" id="exchangeRate-field"
                                        placeholder="Enter exchange rate">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="currencyName" class="form-label">Currency Name</label>
                                    <input type="text" class="form-control" id="currencyName-field"
                                        placeholder="Currency name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="typeInput" class="form-label">Type</label>
                                    <div>
                                        <select class="form-control" data-choices data-choices-search-false
                                            id="type-field" required>
                                            <option value="">Type</option>
                                            <option value="Euro (€)">Euro (€)</option>
                                            <option value="Yuan (¥)">Yuan (¥)</option>
                                            <option value="AFN (؋)">AFN (؋)</option>
                                            <option value="CAD ($)">CAD ($)</option>
                                            <option value="DKK (Kr)">DKK (Kr)</option>
                                            <option value="EGP (E£)">EGP (E£)</option>
                                            <option value="KES (K)">KES (K)</option>
                                            <option value="GBP (£)">GBP (£)</option>
                                            <option value="COP ($)">COP ($)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="currencyAmount" class="form-label">Currency Amount (USD)</label>
                                    <input type="text" class="form-control" id="currencyAmount-field"
                                        placeholder="Currency amount (USD)" required>
                                </div>
                            </div>
                            <div class="col-lg-12 modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="ri-close-line align-bottom me-1"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="add-btn">Add Currency</button>
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
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this currency ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover" id="deleteRecord-close"
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

    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/backend/currency-rates.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
