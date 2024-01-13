@extends('layouts.master-auth')
@section('title')
    Success Message
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
                                        <h1 class="text-white lh-base fw-lighter">Well done !</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">

                                <div class="avatar-sm mx-auto mb-4">
                                    <div class="avatar-title bg-success-subtle text-success fs-20 rounded">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                </div>

                                <p class="text-muted fs-15">Aww yeah, you successfully read this important message.</p>

                                <div>
                                    <a href="auth-signin-basic" class="btn btn-success w-100">Back to Dashboard</a>
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
