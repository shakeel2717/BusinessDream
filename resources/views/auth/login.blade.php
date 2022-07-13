@extends('layouts.auth')
@section('form')
    <div class="row row-sm">
        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
            <div class="mt-5 pt-4 p-2 pos-absolute">
                <img src="assets/img/brand/logo-light.png"
                    class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
                <img src="assets/img/brand/logo.png"
                    class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
                <div class="clearfix"></div>
                <img src="assets/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
                <h5 class="mt-4 text-white">Create Your Account</h5>
                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with
                    the global community</span>
            </div>
        </div>
        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
            <div class="main-container container-fluid">
                <div class="row row-sm">
                    <div class="card-body mt-2 mb-2">
                        <img src="assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4"
                            alt="logo">
                        <div class="clearfix"></div>
                        <form>
                            <h5 class="text-start mb-2">Signin to Your Account</h5>
                            <p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover
                                and connect with the global community</p>
                            <div class="form-group text-start">
                                <label>Email</label>
                                <input class="form-control" placeholder="Enter your email" type="text">
                            </div>
                            <div class="form-group text-start">
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter your password" type="password">
                            </div>
                            <button class="btn ripple btn-main-primary btn-block">Sign In</button>
                        </form>
                        <div class="text-start mt-5 ms-0">
                            <div class="mb-1"><a href="">Forgot password?</a></div>
                            <div>Don't have an account? <a href="#">Register Here</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
