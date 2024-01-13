@extends('layouts.master-auth')
@section('title')
    Coming Soon
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <div class="w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="auth-card mx-lg-3">
                        <div class="card border-0 mb-0">
                            <div class="card-body text-center p-4">

                                <div class="text-center px-sm-5 mx-5">
                                    <img src="{{ URL::asset('assets/images/comingsoon.png') }}" alt="" height="110">
                                </div>
                                <div class="mt-4 text-center pt-3">
                                    <div class="position-relative">
                                        <h4 class="fs-22 error-subtitle text-uppercase mb-0">Coming Soon</h4>
                                        <div>
                                            <div class="row justify-content-center mt-5">
                                                <div class="col-lg-10">
                                                    <div data-countdown="Oct 30, 2023" class="countdownlist"></div>
                                                </div>
                                            </div>

                                            <div class="mt-5">
                                                <h5 class="fs-16">Get notified when we launch</h5>
                                                <p class="text-muted">Don't worry we will not spam you 😊</p>
                                            </div>

                                            <form action="#!">
                                                <div class="countdown-input-subscribe mx-auto mt-4">
                                                    <input type="email" class="form-control shadow"
                                                        placeholder="Enter your email address" required />
                                                    <button class="btn btn-primary" type="submit" id="button-email">Send<i
                                                            class="ri-send-plane-2-fill align-bottom ms-2"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Toner. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('scripts')
    <!-- Countdown js -->
    <script src="{{ URL::asset('assets/js/pages/coming-soon.init.js') }}"></script>
@endsection
