@extends('layouts.auth_master')

@section('title')
    Login
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <img src="{{ asset('template/img/b1.jpg') }}" class="col-lg-6 d-none d-lg-block img-fluid">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                                </div>
                                <form method="POST" class="user" action="{{ route('login') }}"> @csrf <div
                                        class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="{{ __('Email Address') }}" required
                                            autocomplete="email" autofocus> @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            name="password" id="exampleInputPassword" placeholder="{{ __('Password') }}"
                                            required autocomplete="current-password"> @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                for="customCheck">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-user btn-block">{{ __('Login') }}</button>
                                    <hr>
                                </form>
                                <hr>
                                @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a class="small"
                                            href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                @endif
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
