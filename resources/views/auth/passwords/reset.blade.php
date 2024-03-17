@extends('dashboard.layouts.master-auth')
@section('title')
    {{__('auth.reset_pass')}}
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
                                {{--<p class="text-muted fs-15">Your new password must be different from previous used password.
                                </p>--}}

                                <div class="p-2">
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf

                                        <div class="mb-3">
                                            {{--<label for="email" class="form-label">{{ __('Email Address') }}</label>--}}

                                            <input id="email" type="hidden" name="email" value="{{ $email ?? old('email') }}" required>
                                            <input id="token" type="hidden" name="token" value="{{ $token ?? old('token') }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">{{__('messages.password')}}</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password"
                                                    class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                    onpaste="return false" placeholder="{{__('auth.enter_pass')}}" id="password-input"
                                                    name="password" aria-describedby="passwordInput"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required autofocus>
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="confirm-password-input">{{__('auth.confirm_pass')}}</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input"
                                                    onpaste="return false"
                                                    name="password_confirmation"
                                                    placeholder="{{__('auth.confirm_pass')}}"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="confirm-password-input"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                            <h5 class="fs-13">{{__('auth.pass_must_contain')}}</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">{{__('messages.min')}} <b>{{__('messages.8_chars')}}</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">{{__('messages.at_least')}} <b>{{__('messages.lowercase')}}</b> {{__('messages.letter')}} (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">{{__('messages.at_least')}} <b>{{__('messages.uppercase')}}</b> {{__('messages.letter')}} (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-12 mb-0">{{__('messages.at_least')}} <b>{{__('messages.number')}}</b> (0-9)</p>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">{{__('auth.reset_pass')}}</button>
                                        </div>

                                    </form>
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
    <!-- password-addon init -->
    <script src="{{ URL::asset('assets/js/pages/passowrd-create.init.js') }}"></script>
@endsection
