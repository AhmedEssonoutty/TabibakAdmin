@extends('dashboard.layouts.master-auth')
@section('title')
    {{__('auth.forget_pass')}}
@endsection
@section('content')

    <div class="w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="auth-card mx-lg-3">
                        <div class="card border-0 mb-0">
                            <div class="card-header bg-primary border-0" style="padding: 0;">
                                <img src="{{ URL::asset('assets/images/LoginBanner.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="card-body">

                                @if(session()->has('error'))
                                    <div class="alert alert-borderless alert-danger text-center mb-2 mx-2" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @elseif(session()->has('success'))
                                    <div class="alert alert-borderless alert-success text-center mb-2 mx-2" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                {{--<p class="text-muted fs-15">Reset password with Toner.</p>
                                <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                                    Enter your email and instructions will be sent to you!
                                </div>--}}

                                <div class="p-2">
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="email" class="form-label">{{__('messages.email')}}</label>
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" autocomplete="email" autofocus
                                                   placeholder="{{__('auth.forget_pass')}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary w-100" type="submit">{{__('auth.send_reset')}}</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">{{__('auth.pass_remembered')}} <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline">{{__('auth.click_here')}} </a></p>
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
                                </script>
                                Toner. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
