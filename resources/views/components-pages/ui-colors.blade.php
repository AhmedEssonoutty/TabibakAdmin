@extends('components-layouts.master')
@section('title')
    Colors
@endsection
@section('css')
    <!-- add extra css -->
@endsection
@section('content')
    <!-- page title -->
    <x-breadcrumb title="Colors" pagetitle="Base UI" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Background Colors Options</h4>
                    <p class="mb-0 text-muted">Use diffrent <code>color style</code> to color your
                        element with a given table.</p>
                </div><!-- end card header -->

                <div class="card-body">

                    <div class="row">
                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Background Color</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-primary</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-secondary</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-secondary p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-success</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-success p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-info</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-info p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-warning</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-warning p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-danger</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-danger p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-dark</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-dark p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-light</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-light p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-body</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-body p-2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Background Gradient</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-secondary bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-success bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-info bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-warning bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-danger bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-dark bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-gradient</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-light bg-gradient p-2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Background Subtle</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-primary-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-secondary-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-secondary-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-success-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-success-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-info-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-info-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-warning-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-warning-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-danger-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-danger-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-dark-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-dark-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-light-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-light-subtle p-2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Background Opacity</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-opacity-10</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary bg-opacity-10 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-opacity-25</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary bg-opacity-25 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-opacity-50</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary bg-opacity-50 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-opacity-75</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary bg-opacity-75 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.bg-opacity-100</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary bg-opacity-100 p-2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Text Colors Options</h4>
                    <p class="mb-0 text-muted">Use diffrent <code>color style</code> to color your
                        element with a given table.</p>
                </div><!-- end card header -->

                <div class="card-body">

                    <div class="row">
                        <div class="col-xxl-9">
                            <h6 class="mb-3">Text Color</h6>
                            <div class="row">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-primary</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-primary">text-primary</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-primary-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-primary-emphasis">text-primary-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-secondary</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-secondary">text-secondary</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-secondary-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-secondary-emphasis">text-secondary-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-success</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-success">text-success</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-success-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-success-emphasis">text-success-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-info</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-info">text-info</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-info-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-info-emphasis">text-info-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-warning</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-warning p-2">text-warning</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-warning-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-warning-emphasis p-2">text-warning-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-danger</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-danger">text-danger</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-danger-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-danger-emphasis">text-danger-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-dark</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-dark">text-dark</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-dark-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-dark-emphasis">text-dark-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-light</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-light bg-dark">text-light</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-light-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-light-emphasis">text-light-emphasis</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-body</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-body">text-body</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-body-emphasis</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-body-emphasis">text-body-emphasis</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end  col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-muted</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-muted">text-muted</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-body-secondary</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-body-secondary">text-body-secondary</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-body-tertiary</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-body-tertiary">text-body-tertiary</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-black</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-black">text-black</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-black-50</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-black-50">text-black-50</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-white</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-white bg-dark">text-white</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-white-75</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-white-75 bg-dark">text-white-75</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100px;">
                                                        <code>.text-white-50</code>
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <div class="text-white-50 bg-dark">text-white-50</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end  col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->

                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Opacity & Text Opacity</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.opacity-25</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary opacity-25 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.opacity-50</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary opacity-50 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.opacity-75</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary opacity-75 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.opacity-100</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="bg-primary opacity-100 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.text-opacity-25</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="text-primary text-opacity-25">text-primary</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.text-opacity-50</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="text-primary text-opacity-50">text-primary</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.text-opacity-75</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="text-primary text-opacity-75">text-primary</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.text-opacity-100</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="text-primary text-opacity-100">text-primary</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Border Colors Options</h4>
                    <p class="mb-0 text-muted">Use diffrent <code>color style</code> to color your
                        element with a given table.</p>
                </div><!-- end card header -->

                <div class="card-body">

                    <div class="row">
                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Border Color</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-primary</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-primary p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-secondary</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-secondary p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-success</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-success p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-info</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-info p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-warning</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-warning p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-danger</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-danger p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-dark</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-dark p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-light</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-light p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-body</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-body p-2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Background Subtle</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-primary-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-primary-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-secondary-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-secondary-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-success-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-success-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-info-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-info-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-warning-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-warning-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-danger-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-danger-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-dark-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-dark-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-light-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-light-subtle p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-body-subtle</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-body-subtle p-2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <h6 class="mb-3">Background Opacity</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-opacity-10</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-primary border-opacity-10 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-opacity-25</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-primary border-opacity-25 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-opacity-50</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-primary border-opacity-50 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-opacity-75</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-primary border-opacity-75 p-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">
                                                <code>.border-opacity-100</code>
                                            </td>
                                            <td style="width: 100px;">
                                                <div class="border border-primary border-opacity-100 p-2"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    <!-- prismjs plugin -->
    <script src="{{ URL::asset('assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
