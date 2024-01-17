@extends('layouts.master')
@section('title')
    Calendar
@endsection
@section('css')
    <!-- extra css -->
    <!-- fullcalendar css -->
    <link href="{{ URL::asset('assets/libs/fullcalendar/main.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <x-breadcrumb title="Calendar" pagetitle="Calendar" />
    <div class="row">
        <div class="col-xl-9">
            <div class="card card-h-100">
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div><!-- end col -->
        <div class="col-xl-3">
            <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> Create New Order</button>
            <div class="mt-4">
                <h5 class="mb-1 fs-18">Recent Added Orders</h5>
                <p class="text-muted">Don't miss scheduled events</p>
                <div class="search-box mb-3">
                    <input type="text" class="form-control" autocomplete="off" id="searchResultsList"
                        placeholder="Search customer...">
                    <i class="ri-search-line search-icon"></i>
                </div>
                <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 595px">
                    <div id="upcoming-event-list"></div>
                </div>
            </div>

            <div class="card bg-primary-subtle border-0 overflow-hidden">
                <div class="position-absolute end-0 start-0 top-0 z-0">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="400" height="250" preserveAspectRatio="none" viewBox="0 0 400 250">
                        <g mask="url(&quot;#SvgjsMask1530&quot;)" fill="none">
                            <path d="M209 112L130 191" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M324 10L149 185" stroke-width="8" stroke="url(#SvgjsLinearGradient1532)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M333 35L508 -140" stroke-width="10" stroke="url(#SvgjsLinearGradient1532)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M282 58L131 209" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M290 16L410 -104" stroke-width="6" stroke="url(#SvgjsLinearGradient1532)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M216 186L328 74" stroke-width="6" stroke="url(#SvgjsLinearGradient1531)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M255 53L176 132" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M339 191L519 11" stroke-width="8" stroke="url(#SvgjsLinearGradient1531)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M95 151L185 61" stroke-width="6" stroke="url(#SvgjsLinearGradient1532)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M249 16L342 -77" stroke-width="6" stroke="url(#SvgjsLinearGradient1532)"
                                stroke-linecap="round" class="TopRight"></path>
                            <path d="M129 230L286 73" stroke-width="10" stroke="url(#SvgjsLinearGradient1531)"
                                stroke-linecap="round" class="BottomLeft"></path>
                            <path d="M80 216L3 293" stroke-width="6" stroke="url(#SvgjsLinearGradient1531)"
                                stroke-linecap="round" class="BottomLeft"></path>
                        </g>
                        <defs>
                            <mask id="SvgjsMask1530">
                                <rect width="400" height="250" fill="#ffffff"></rect>
                            </mask>
                            <linearGradient x1="100%" y1="0%" x2="0%" y2="100%"
                                id="SvgjsLinearGradient1531">
                                <stop stop-color="rgba(var(--tb-primary-rgb), 0)" offset="0"></stop>
                                <stop stop-color="rgba(var(--tb-primary-rgb), 0.2)" offset="1"></stop>
                            </linearGradient>
                            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%"
                                id="SvgjsLinearGradient1532">
                                <stop stop-color="rgba(var(--tb-primary-rgb), 0)" offset="0"></stop>
                                <stop stop-color="rgba(var(--tb-primary-rgb), 0.2)" offset="1"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="card-body p-4 z-1 position-relative">
                    <h5 class="mb-3 lh-base">You have got <span class="text-primary">400 bonus</span> points.
                        Feel free to use them in your Orders</h5>
                    <a href="orders-list-view" class="btn btn-primary btn-hover">Create Order</a>
                </div>
            </div>
        </div> <!-- end col-->
    </div>
    <!--end row-->

    <div class="modal fade" id="event-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-info-subtle">
                    <h5 class="modal-title" id="modal-title">Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn"
                                data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                        </div>
                        <div class="event-details">
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="ri-calendar-event-line text-muted fs-16"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-money-dollar-circle-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-payment-tag"></span></h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-map-pin-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-discuss-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row event-form">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select d-none" name="category" id="event-category" required>
                                        <option value="bg-info-subtle">New</option>
                                        <option value="bg-warning-subtle">Shipped</option>
                                        <option value="bg-success-subtle">Delivered</option>
                                        <option value="bg-danger-subtle">Cancelled</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid event category</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="event-title" class="form-label">Customer name</label>
                                    <input class="form-control d-none" placeholder="Enter customer name" type="text"
                                        name="title" id="event-title" required value="">
                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Order Date</label>
                                    <div class="input-group d-none">
                                        <input type="text" id="event-start-date"
                                            class="form-control flatpickr flatpickr-input" placeholder="Select date"
                                            readonly required>
                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="event-payment">Payment ($)</label>
                                    <div>
                                        <input type="text" class="form-control d-none" name="event-payment"
                                            id="event-payment" placeholder="Event payment">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="event-location">Location</label>
                                    <div>
                                        <input type="text" class="form-control d-none" name="event-location"
                                            id="event-location" placeholder="Event location">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <input type="hidden" id="eventid" name="eventid" value="">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="event-description">Description</label>
                                    <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3"
                                        spellcheck="false"></textarea>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-soft-danger" id="btn-delete-event"><i
                                    class="ri-close-line align-bottom"></i> Delete</button>
                            <button type="submit" class="btn btn-success" id="btn-save-event">Add Event</button>
                        </div>
                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div> <!-- end modal-->
    <!-- end modal-->
@endsection
@section('scripts')
    <!-- fullcalendar min js -->
    <script src="{{ URL::asset('assets/libs/fullcalendar/main.min.js') }}"></script>

    <!-- fullcalendar init -->
    <script src="{{ URL::asset('assets/js/backend/calendar.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
