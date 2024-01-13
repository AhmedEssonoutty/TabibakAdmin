@extends('components-layouts.master-auth')
@section('title')
    Two Step Verification
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
                            <div class="card-header bg-primary border-0">
                                <div class="row">
                                    <div class="col-lg-4 col-3">
                                        <img src="{{ URL::asset('assets/images/auth/img-1.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-8 col-9">
                                        <h1 class="text-white lh-base fw-lighter">Verify Your Email</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <p class="text-muted fs-15">Please enter the 4 digit code sent to <span
                                        class="fw-semibold">example@abc.com</span></p>

                                <div class="p-2">
                                    <form autocomplete="off">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                    </form><!-- end form -->

                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary w-100">Confirm</button>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Didn't receive a code ? <a href="auth-pass-reset-basic"
                                            class="fw-semibold text-primary text-decoration-underline">Resend</a> </p>
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
    <script src="{{ URL::asset('assets/js/pages/two-step-verification.init.js') }}"></script>
@endsection
