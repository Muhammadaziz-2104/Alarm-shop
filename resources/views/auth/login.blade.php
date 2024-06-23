@extends('layouts.main')

@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-1">
            <div class="overlay bg-russian op-8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>Login</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home</a></li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="Login-wrap pt-100 pb-100 bg-papermint">
            <div class="container">
                <div class="col-xl-12">
                    <div class="login-form-wrap">
                        <div class="login-header">
                            <h2>Login</h2>
                        </div>
                        <div class="login-form">
                            <div class="login-body">
                                <form class="form-wrap" method="POST" action="{{route('login')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Email Address*</label>
                                                <input type="email" id="name" name="email" :value="old('email')" required autofocus="" autocomplete="name">
                                                @error('email') <span class="text-danger mt-3">{{$message}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Password*</label>
                                                <input type="password" id="pass" class="block mt-1 w-full" name="password" autocomplete="current-password">
                                                @error('password') <span class="text-danger mt-3">{{$message}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="checkbox mb-20">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="test_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-sm-end mb-20">
                                            <a href="#" class="link style1">Forgot Password?</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn style1 w-100 d-block">Log In</button>
                                            </div>
                                        </div>
                                        {{--                                    <div class="col-lg-12">--}}
                                        {{--                                        <div class="or-text">--}}
                                        {{--                                            <p>Or</p>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-lg-12">--}}
                                        {{--                                        <div class="form-group">--}}
                                        {{--                                            <ul class="social-profile style2 text-center mt-0 list-style">--}}
                                        {{--                                                <li><a target="_blank" href="https://instagram.com/"><i class="lab la-instagram"></i></a></li>--}}
                                        {{--                                                <li><a target="_blank" href="https://twitter.com/"><i class="lab la-twitter"></i></a></li>--}}
                                        {{--                                                <li><a target="_blank" href="https://facebook.com/"><i class="lab la-facebook-f"></i></a></li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                        <div class="col-md-12 text-center">
                                            <p class="mb-0">Don’t Have an Account? <a class="link style1" href="{{route('register')}}">Registration</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>





{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
