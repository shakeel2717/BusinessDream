@extends('layouts.auth')
@section('title')
    Sign in to your Account
@endsection
@section('form')
    <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
        <div class="main-container container-fluid">
            <div class="row row-sm">
                <div class="card-body mt-2 mb-2">
                    <img src="assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4"
                        alt="logo">
                    <div class="clearfix"></div>
                    <form accept="{{ route('login') }}" method="POST">
                        @csrf
                        <h5 class="text-start mb-2">Signin to Your Account</h5>
                        <p class="mb-4 text-muted tx-13 ms-0 text-start">{{ env('APP_DESC') }}</p>
                        @if(session('register'))
                            <div class="alert bg-success text-white p-3">Account Created Successfully, Pleae login!
                            </div>
                        @endisset
                        <x-input type="text" name="username" label="Enter Username" />
                        <x-input name="password" type="password" label="Enter Password" />
                        <button class="btn ripple btn-main-primary btn-block">Sign In</button>
                    </form>
                    <div class="text-start mt-5 ms-0">
                        <div class="mb-1"><a href="{{ route('password.request') }}">Forgot password?</a></div>
                        <div>Don't have an account? <a href="{{ route('register') }}">Register Here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
