@extends('layouts.auth')
@section('title')
    Create new Account
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
                        <h5 class="text-start mb-2">Create new Account</h5>
                        <p class="mb-4 text-muted tx-13 ms-0 text-start">{{ env('APP_DESC') }}</p>
                        <x-input name="name" label="Enter Full Name" />
                        <x-input name="username" label="Type Username" />
                        <x-input name="email" type="email" label="Type Email" />
                        <x-input name="whatsapp" label="Your Whatsapp # Example: +92300XXXXXXX" />
                        <x-input name="password" type="password" label="Password" />
                        <x-input name="password_confirmation" type="password" label="Confirm Password" />

                        <button class="btn ripple btn-main-primary btn-block">Create Account</button>
                    </form>
                    <div class="text-start mt-5 ms-0">
                        <div class="mb-1"><a href="{{ route('password.request') }}">Forgot password?</a></div>
                        <div>Already have an account? <a href="{{ route('login') }}">Login here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
