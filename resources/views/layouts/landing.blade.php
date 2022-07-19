<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="author" content="ASAN Webs Development">
    <meta name="keywords" content="{{ env('APP_KEYWORD') }}">
    <link rel="icon" href="{{ asset('assets/img/brand/favi.png') }}" type="image/x-icon" />
    <title>@yield('title') - {{ env('APP_DESC') }}</title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Internal Jquery.Coutdown css-->
    <link href="{{ asset('assets/plugins/jquery-countdown/jquery.countdown.css') }}" rel="stylesheet">

</head>

<body class="app sidebar-mini ltr landing-page horizontalmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- Main Header-->
            <div class="main-header side-header">
                <div class="main-container container-fluid">
                    <div class="main-header-left">
                        <a class="main-header-menu-icon" href="javascript:void(0)"
                            id="mainSidebarToggle"><span></span></a>
                        <div class="hor-logo">
                            <a class="main-logo" href="{{ route('landing-page') }}">
                                <img src="{{ asset('assets/img/brand/logo.png') }}"
                                    class="header-brand-img desktop-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="main-header-center">
                        <div class="responsive-logo">
                            <a href="{{ route('landing-page') }}"><img
                                    src="{{ asset('assets/img/brand/logo.png') }}" class="mobile-logo"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="main-header-right">
                        <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                        </button><!-- Navresponsive closed -->
                        <div
                            class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2 ms-auto">
                                    <!-- SEARCH -->
                                    <div class="header-nav-right p-3">
                                        <a href="{{ route('register') }}"
                                            class="btn ripple btn-min w-sm btn-outline-primary me-2">New User
                                        </a>
                                        <a href="{{ route('login') }}"
                                            class="btn ripple btn-min w-sm btn-primary me-2">Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Header-->

            <div class="landing-top-header overflow-hidden">
                <div class="top sticky">
                    <!--APP-SIDEBAR-->
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar bg-transparent">
                        <div class="container">
                            <div class="row">
                                <div class="main-sidemenu navbar px-0">
                                    <a class="main-logo" href="{{ route('landing-page') }}">
                                        <img src="{{ asset('assets/img/brand/logo-light.png') }}" class=""
                                            width="250" alt="logo">
                                    </a>
                                    <div class="slide-left disabled" id="slide-left"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                        </svg></div>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item active" data-bs-toggle="slide"
                                                href="{{ route('landing-page') }}"><span
                                                    class="side-menu__label">Home</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" href="{{ route('register') }}"><span
                                                    class="side-menu__label">Create Account</span>
                                            </a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" href="{{ route('login') }}"><span
                                                    class="side-menu__label">Sign in</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                        </svg></div>
                                    <div class="header-nav-right d-none d-lg-block">
                                        <a href="{{ route('register') }}"
                                            class="btn ripple btn-min w-sm btn-secondary me-2" target="_blank">New
                                            User
                                        </a>
                                        <a href="{{ route('login') }}"
                                            class="btn ripple btn-min w-sm btn-info me-2" target="_blank">Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/APP-SIDEBAR-->
                </div>
                <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal"
                    id="home">
                    <div class="container px-sm-0">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 animation-zidex pos-relative">
                                <h4 class="fw-semibold mt-7">Le'ts Earn!</h4>
                                <h1 class="text-start fw-bold">{{ env('APP_DESC') }}</h1>
                                <h6 class="pb-3">
                                    Best Online Marketing Solution for your online Business, Signup and Get Start
                                    Earning with us.
                                </h6>
                                <a href="{{ route('register') }}"
                                    class="btn ripple btn-min w-lg mb-3 me-2 btn-light"><i
                                        class="fe fe-play me-2"></i> Get Started
                                </a>
                                <a href="{{ route('login') }}"
                                    class="btn ripple btn-min w-lg btn-outline-light mb-3 me-2"><i
                                        class="fe fe-eye me-2"></i>Sign in
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 my-auto">
                                <img src="{{ asset('') }}assets/landing/images/market3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">

                    <!-- ROW-2 OPEN -->
                    <div class="sptb section bg-white" id="Features">
                        <div class="container">
                            <div class="row">
                                <h4 class="text-center fw-semibold landing-card-header">Features</h4>
                                <span class="landing-title"></span>
                                <h2 class="fw-semibold text-center">{{ env('APP_NAME') }} Main Features</h2>
                                <p class="text-default mb-5 text-center">NBD (New Business Dream) Ye Ek Pakistani
                                    Company Hai Aur Humara Plane Har Pakistani Berozgar Ko Rozgar Dena Yaha Ap Sirf 650
                                    Rupe Se Register Ho Kar Apna Online Karobar Kar Sakte Hain.</p>
                                <div class="row mt-7">
                                    <div class="col-lg-3 col-md-12">
                                        <div class="card features main-features main-features-1 wow fadeInUp reveal revealleft"
                                            data-wow-delay="0.1s">
                                            <div class="card-body">
                                                <div class="counter-body-2">
                                                    <div class="bg-img mb-2 text-left hexagon-wrapper">
                                                        <div class="counter-icon hexagon">
                                                            <i class="fe fe-package text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-left counter-body">
                                                    <h4 class="fw-bold">Best Support</h4>
                                                    <p class="mb-0">We will provide 27/7 support.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="card features main-features main-features-2 wow fadeInUp reveal revealleft"
                                            data-wow-delay="0.1s">
                                            <div class="card-body">
                                                <div class="counter-body-2">
                                                    <div class="bg-img mb-2 text-left hexagon-wrapper">
                                                        <div class="counter-icon hexagon">
                                                            <i class="fe fe-code text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-left counter-body">
                                                    <h4 class="fw-bold">We're Profitable</h4>
                                                    <p class="mb-0">We gives you high profit on offordable
                                                        investment.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="card features main-features main-features-3 wow fadeInUp reveal revealleft"
                                            data-wow-delay="0.1s">
                                            <div class="card-body">
                                                <div class="counter-body-2">
                                                    <div class="bg-img mb-2 text-left hexagon-wrapper">
                                                        <div class="counter-icon hexagon">
                                                            <i class="fe fe-layers text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-left counter-body">
                                                    <h4 class="fw-bold">We're Certified</h4>
                                                    <p class="mb-0">
                                                        Our company is Registered from FBR and SECP.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="card features main-features main-features-4 wow fadeInUp reveal revealleft"
                                            data-wow-delay="0.1s">
                                            <div class="card-body">
                                                <div class="counter-body-2">
                                                    <div class="bg-img mb-2 text-left hexagon-wrapper">
                                                        <div class="counter-icon hexagon">
                                                            <i class="fe fe-book-open text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-left counter-body">
                                                    <h4 class="fw-bold">We're Global</h4>
                                                    <p class="mb-0">
                                                        You invest in our company from any country.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-2 CLOSED -->

                    <!-- ROW-1 OPEN -->
                    <div class="testimonial-owl-landing">
                        <div class="container">
                            <div class="row">
                                <div class="card bg-transparent mb-0">
                                    <div class="demo-screen-skin code-quality" id="dependencies">
                                        <div class="text-center p-0">
                                            <div class="row justify-content-center">
                                                <div class="row text-center services-statistics landing-statistics">
                                                    <div class="col-xl-12">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-xl-3 col-md-6 col-lg-3">
                                                                            <div class="card reveal">
                                                                                <div class="bg-transparent">
                                                                                    <div class="counter-status">
                                                                                        <div class="counter-icon">
                                                                                            <i class="fe fe-code"></i>
                                                                                        </div>
                                                                                        <div
                                                                                            class="test-body text-center">
                                                                                            <h1 class=" mb-0">
                                                                                                <span
                                                                                                    class="counter fw-semibold counter">14452</span>
                                                                                                <span
                                                                                                    class="">+</span>
                                                                                            </h1>
                                                                                            <div class="counter-text">
                                                                                                <h5
                                                                                                    class="font-weight-normal mb-0">
                                                                                                    Users</h5>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-3 col-md-6 col-lg-3">
                                                                            <div class="card reveal">
                                                                                <div class="bg-transparent">
                                                                                    <div class="counter-status">
                                                                                        <div class="counter-icon">
                                                                                            <i
                                                                                                class="fe fe-aperture"></i>
                                                                                        </div>
                                                                                        <div
                                                                                            class="test-body text-center">
                                                                                            <h1 class=" mb-0">
                                                                                                <span
                                                                                                    class="counter fw-semibold counter">60</span>
                                                                                                <span
                                                                                                    class="">+</span>
                                                                                            </h1>
                                                                                            <div class="counter-text">
                                                                                                <h5
                                                                                                    class="font-weight-normal mb-0">
                                                                                                    Projects</h5>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-3 col-md-6 col-lg-3">
                                                                            <div class="card reveal">
                                                                                <div class="bg-transparent">
                                                                                    <div class="counter-status">
                                                                                        <div class="counter-icon">
                                                                                            <i
                                                                                                class="fe fe-file-text"></i>
                                                                                        </div>
                                                                                        <div
                                                                                            class="test-body text-center">
                                                                                            <h1 class=" mb-0">
                                                                                                <span
                                                                                                    class="counter fw-semibold counter">990</span>
                                                                                                <span
                                                                                                    class="">+</span>
                                                                                            </h1>
                                                                                            <div class="counter-text">
                                                                                                <h5
                                                                                                    class="font-weight-normal mb-0">
                                                                                                    Sponsers</h5>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-3 col-md-6 col-lg-3">
                                                                            <div class="card reveal">
                                                                                <div class="bg-transparent">
                                                                                    <div class="counter-status">
                                                                                        <div class="counter-icon">
                                                                                            <i
                                                                                                class="fe fe-layers"></i>
                                                                                        </div>
                                                                                        <div
                                                                                            class="test-body text-center">
                                                                                            <h1 class=" mb-0">
                                                                                                <span
                                                                                                    class="counter fw-semibold counter">30</span>
                                                                                                <span
                                                                                                    class="">+</span>
                                                                                            </h1>
                                                                                            <div class="counter-text">
                                                                                                <h5
                                                                                                    class="font-weight-normal mb-0">
                                                                                                    Platforms</h5>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-1 CLOSED -->

                    <!-- ROW-3 OPEN -->
                    <div class="section bg-landing working-section" id="About">
                        <div class="container">
                            <div class="row">
                                <h4 class="text-center fw-semibold landing-card-header">About The System</h4>
                                <span class="landing-title"></span>
                                <div class="text-center">
                                    <h2 class="text-center fw-semibold">How it's Work!
                                    </h2>
                                </div>
                                <div class="reveal">
                                    <div class="working-container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="working-svg-container svg-container-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 700">
                                                        <g data-name="Web Design and Development">
                                                            <path fill="#cbe4f7"
                                                                d="M159.32272,249.93143c-9.6618,25.4912-10.2589,53.7036-6.0773,80.6418a238.52852,238.52852,0,0,0,21.1622,67.6114,125.68176,125.68176,0,0,0,10.907,18.8015c10.1072,13.9806,24.144,24.5189,36.6147,36.4392s23.9301,26.3226,26.3443,43.4043c5.6095-17.4429,10.0254-36.3306,4.9257-53.9293a88.70782,88.70782,0,0,0-6.4571-15.405,254.02872,254.02872,0,0,0-24.8516-39.4029c-4.7909-6.2426-9.8702-12.2601-14.6412-18.5179C181.16142,335.35613,163.96142,292.70953,159.32272,249.93143Z" />
                                                            <path fill="#96c2e0"
                                                                d="M160.70752,260.35263a135.4018,135.4018,0,0,0-1.9912,15.7709q-.5817,7.93485-.5054,15.9078c.0691,5.3092.3746,10.6162.887,15.9045.5005,5.2901,1.2638,10.5573,2.256,15.782.459,2.6205,1.0768,5.2088,1.6442,7.8087.6732,2.574,1.2976,5.1626,2.0951,7.7029.3949,1.2711.7284,2.5613,1.174,3.8162l1.2779,3.784c.4239,1.2621.9322,2.4941,1.3944,3.7429.4715,1.2453.9343,2.4945,1.4755,3.712l1.5651,3.6766c.5488,1.2136,1.1365,2.4098,1.7031,3.6155l.8574,1.8053c.2922.5984.617,1.1809.9239,1.7722l1.8675,3.535a137.16053,137.16053,0,0,0,8.5799,13.4899c1.5436,2.1831,3.1772,4.2678,4.7962,6.3674l4.902,6.2647q4.9392,6.23535,9.9876,12.3797c6.7333,8.1892,13.5805,16.279,20.3189,24.4319,3.3485,4.0926,6.6278,8.2386,9.6795,12.5422a94.99234,94.99234,0,0,1,8.1455,13.523,66.03925,66.03925,0,0,1,3.0471,7.282c.4626,1.2347.8191,2.5036,1.2048,3.7645.1961.6296.334,1.2751.504,1.9122.1556.641.3428,1.275.4632,1.9239a89.48662,89.48662,0,0,1,1.8953,15.7305,82.91288,82.91288,0,0,0-1.4146-15.8308c-.1044-.657-.2756-1.2999-.4156-1.9498-.1544-.6463-.2768-1.3014-.4577-1.9414-.3552-1.2815-.6821-2.5732-1.1163-3.8322a66.82,66.82,0,0,0-2.889-7.4467,94.84759,94.84759,0,0,0-8.006-13.8033c-3.0071-4.3881-6.2373-8.6088-9.5303-12.7679-3.2911-4.1617-6.6574-8.256-10.0389-12.3329q-5.0631-6.123-10.084-12.2719-5.00025-6.16635-9.9021-12.408l-4.8573-6.2758c-1.6059-2.1024-3.2236-4.2002-4.7334-6.3467a135.31765,135.31765,0,0,1-8.5353-13.2644l-1.862-3.4808c-.3062-.5822-.6303-1.1552-.9219-1.7452l-.8561-1.7787c-.5658-1.1881-1.153-2.3667-1.7016-3.5631l-1.5659-3.6257c-.5417-1.2006-1.0055-2.4332-1.4782-3.6623-.4634-1.2326-.973-2.448-1.3988-3.6945l-1.2839-3.7371c-.4479-1.2394-.7842-2.5149-1.1819-3.771-.8082-2.5091-1.4227-5.0741-2.1267-7.6142-.6025-2.5659-1.2564-5.1218-1.7527-7.7129a184.121,184.121,0,0,1-3.6322-31.4323A177.20494,177.20494,0,0,1,160.70752,260.35263Z" />
                                                            <path fill="#def"
                                                                d="M259.05492,480.16363c-18.6398,2.5411-37.4399,5.0695-56.2056,3.7488s-37.7334-6.787-52.3195-18.6673c-23.6742-19.2824-31.7944-51.2319-40.4256-80.5197s-21.6125-60.9317-49.3124-73.7765c25.6346-3.8811,51.6752,2.1392,72.3572,17.7743,26.8488,20.2971,41.1851,52.5776,56.2137,82.6936S228.30892,466.47,259.05492,480.16363Z" />
                                                            <path fill="#a5c9eb"
                                                                d="M73.70422,313.04583c1.1685.24,2.3463.4611,3.5177.719,1.1474.3379,2.3138.636,3.4557,1.01,1.1189.4327,2.2655.813,3.3655,1.3003l1.6424.7532c.5482.2509,1.1015.4939,1.6237.7944a64.36166,64.36166,0,0,1,11.9254,8.1656c7.3389,6.2996,13.5416,13.7682,19.3125,21.4141,5.8185,7.6196,11.2716,15.5155,16.5109,23.5486,5.2142,8.051,10.1046,16.3104,14.7475,24.7052,4.6432,8.4125,8.6987,17.085,13.5338,25.1774a112.63475,112.63475,0,0,0,7.9804,11.6301c1.492,1.8198,2.9572,3.6648,4.5656,5.3873,1.5319,1.7924,3.2158,3.4427,4.8613,5.1329a115.60328,115.60328,0,0,0,48.6784,28.3577,106.474,106.474,0,0,1-50.6143-26.3307,109.20213,109.20213,0,0,1-9.944-10.5764,115.90647,115.90647,0,0,1-8.436-11.8381c-5.0568-8.2692-9.1292-16.9292-13.7729-25.2146q-6.81585-12.53865-14.4586-24.6069c-5.036-8.076-10.3866-15.9534-15.9012-23.7178-2.7565-3.8816-5.607-7.6746-8.6012-11.348a105.64906,105.64906,0,0,0-9.6308-10.4127,65.41715,65.41715,0,0,0-11.2376-8.6083A47.16393,47.16393,0,0,0,73.70422,313.04583Z" />
                                                            <path fill="#cbe4f7"
                                                                d="M246.99292,489.66063c-10.258,19.8495-34.2959,31.5272-56.24,27.3217a76.51384,76.51384,0,0,1-17.5733-6.0197c-29.3914-13.589-54.8322-39.4036-60.2203-71.3329a70.99666,70.99666,0,0,0,47.1095,26.6866c7.6177.9223,15.3313.5923,22.9838,1.1578C205.32962,469.12023,230.72322,474.35473,246.99292,489.66063Z" />
                                                            <path fill="#6988d8"
                                                                d="M114.70642,442.29313a90.35941,90.35941,0,0,0,12.2894,16.5018,92.53969,92.53969,0,0,0,15.5293,13.3736,95.949,95.949,0,0,0,18.0013,9.7016,86.45269,86.45269,0,0,0,19.6616,5.4938c3.3742.4725,6.7511.903,10.1778,1.0389,3.4225.1787,6.8716.235,10.332.4599a138.77862,138.77862,0,0,1,20.5742,2.8251c3.3909.7012,6.7376,1.5934,10.0674,2.5271,1.6523.5122,3.3187.9754,4.9531,1.5416l2.4593.8214,2.4365.8864c1.6251.5871,3.2146,1.2699,4.8193,1.9057,1.5798.6993,3.1818,1.3435,4.7376,2.093,3.1513,1.4092,6.2021,3.0291,9.2232,4.6846a155.07728,155.07728,0,0,0-19.0836-7.8273c-3.2468-1.1219-6.5468-2.0772-9.8576-2.9775-3.3259-.8444-6.6627-1.6468-10.0374-2.258a151.9344,151.9344,0,0,0-20.3912-2.4707c-3.4183-.183-6.8611-.2428-10.3209-.403a103.56935,103.56935,0,0,1-10.3791-1.0182,89.57415,89.57415,0,0,1-38.1888-15.8634,92.84956,92.84956,0,0,1-15.3843-13.9298A84.82885,84.82885,0,0,1,114.70642,442.29313Z" />
                                                            <ellipse cx="519.505" cy="604.567" fill="#f2f2f2"
                                                                rx="273.55" ry="10.277" />
                                                            <path fill="#7cb3e2"
                                                                d="M815.17332,145.35653v331.1299H223.83322V145.35653a18.6886,18.6886,0,0,1,18.68-18.6802h553.99A18.67381,18.67381,0,0,1,815.17332,145.35653Z" />
                                                            <path fill="#e2e0e1"
                                                                d="M223.83412,476.48883V525.944a18.67323,18.67323,0,0,0,18.6788,18.6697h553.9937a18.66546,18.66546,0,0,0,18.67-18.6697v-49.4552Z" />
                                                            <path fill="#486bb4"
                                                                d="M242.508,143.934h553.9944a3.0386,3.0386,0,0,1,3.0386,3.0386v309.3729a3.0381,3.0381,0,0,1-3.0381,3.0381H242.50772a3.0381,3.0381,0,0,1-3.0381-3.0381V146.97243A3.0384,3.0384,0,0,1,242.508,143.934Z" />
                                                            <rect width="131.404" height="35.287" x="453.803"
                                                                y="544.617" fill="#b5b5b5" />
                                                            <path fill="#e2e0e1"
                                                                d="M618.00912,579.90483H421.00152a23.00926,23.00926,0,0,0-23.0093,23.0092h243.0262A23.00926,23.00926,0,0,0,618.00912,579.90483Z" />
                                                            <circle cx="519.505" cy="510.551" r="10.509"
                                                                fill="#f2f2f2" />
                                                            <rect width="284.437" height="119.889" x="494.852"
                                                                y="160.041" fill="#f2f2f2" />
                                                            <rect width="199.868" height="10.486" x="515.722"
                                                                y="176.711" fill="#6fcece" />
                                                            <rect width="147.067" height="6.941" x="515.722"
                                                                y="197.03" fill="#cccacb" />
                                                            <rect width="70.814" height="7.475" x="515.722"
                                                                y="232.804" fill="#cccacb" />
                                                            <rect width="70.814" height="7.475" x="689.19"
                                                                y="232.804" fill="#cccacb" />
                                                            <rect width="40.071" height="7.475" x="515.722"
                                                                y="250.562" fill="#cccacb" />
                                                            <rect width="70.814" height="7.475" x="602.456"
                                                                y="232.804" fill="#cccacb" />
                                                            <rect width="40.071" height="7.475" x="602.456"
                                                                y="250.562" fill="#cccacb" />
                                                            <rect width="70.814" height="7.475" x="309.877"
                                                                y="421.881" fill="#cccacb" />
                                                            <rect width="40.071" height="7.475" x="309.877"
                                                                y="439.639" fill="#cccacb" />
                                                            <rect width="70.814" height="7.475" x="445.929"
                                                                y="421.881" fill="#cccacb" />
                                                            <rect width="40.071" height="7.475" x="445.929"
                                                                y="439.639" fill="#cccacb" />
                                                            <rect width="70.814" height="7.475" x="581.981"
                                                                y="421.881" fill="#cccacb" />
                                                            <rect width="40.071" height="7.475" x="581.981"
                                                                y="439.639" fill="#cccacb" />
                                                            <rect width="40.071" height="7.475" x="689.19"
                                                                y="250.562" fill="#cccacb" />
                                                            <path
                                                                d="M604.60322,126.67633v245.1499a22.76013,22.76013,0,0,1-22.76,22.7603h-358.01v-249.23a18.6886,18.6886,0,0,1,18.68-18.6802Z"
                                                                style="mix-blend-mode:multiply" fill="#e2e0e1" />
                                                            <path fill="#f2f2f2"
                                                                d="M120.04562,68.60983h462.2397a10.8001,10.8001,0,0,1,10.8001,10.8001v290.88a10.8003,10.8003,0,0,1-10.8003,10.8003H120.04532a10.8,10.8,0,0,1-10.8-10.8V79.41013A10.8003,10.8003,0,0,1,120.04562,68.60983Z" />
                                                            <path fill="#7463cd"
                                                                d="M563.96462,91.71053H138.36622a10.1333,10.1333,0,1,0,0,20.2666h425.5984a10.1333,10.1333,0,1,0,0-20.2666Z" />
                                                            <path
                                                                d="M138.40882,137.71023h122.208a7.2954,7.2954,0,0,1,7.2954,7.2954v195.6753a7.2954,7.2954,0,0,1-7.2954,7.2954H138.40832a7.2954,7.2954,0,0,1-7.2954-7.2954V145.00613A7.2959,7.2959,0,0,1,138.40882,137.71023Z"
                                                                style="mix-blend-mode:multiply" fill="#e2e0e1" />
                                                            <path fill="#cde7fe"
                                                                d="M135.52882,134.83023h122.208a7.2954,7.2954,0,0,1,7.2954,7.2954v195.6753a7.2954,7.2954,0,0,1-7.2954,7.2954H135.52832a7.2954,7.2954,0,0,1-7.2954-7.2954V142.12613A7.2959,7.2959,0,0,1,135.52882,134.83023Z" />
                                                            <path fill="#6988d8"
                                                                d="M223.64332,188.53653a27.01,27.01,0,1,1-27.01-27.0102A26.96715,26.96715,0,0,1,223.64332,188.53653Z" />
                                                            <circle cx="196.633" cy="175.771" r="10.296"
                                                                fill="#a5c9eb"
                                                                transform="rotate(-76.718 196.633 175.771)" />
                                                            <path fill="#a5c9eb"
                                                                d="M214.89332,206.29633a19.12333,19.12333,0,0,1-.1401,2.2803,27.00994,27.00994,0,0,1-36.24,0,19.14433,19.14433,0,0,1-.1399-2.2803,18.26,18.26,0,0,1,36.52,0Z" />
                                                            <rect width="98.346" height="16.29" x="147.46"
                                                                y="236.238" fill="#a5c9eb" />
                                                            <rect width="98.346" height="16.291" x="147.46"
                                                                y="268.517" fill="#a5c9eb" />
                                                            <path fill="#ff8e00"
                                                                d="M226.98142,308.08173H208.404a5.77025,5.77025,0,0,0,0,11.5405h18.5774a5.77025,5.77025,0,0,0,0-11.5405Z" />
                                                            <rect width="290.928" height="40.941" x="283.17"
                                                                y="134.83" fill="#a5c9eb" />
                                                            <rect width="153.228" height="71.328" x="314.224"
                                                                y="217.75" style="mix-blend-mode:multiply"
                                                                fill="#e2e0e1" />
                                                            <rect width="153.228" height="71.328" x="311.458"
                                                                y="214.87" fill="#6fcece" />
                                                            <rect width="49.898" height="9.852" x="385.148"
                                                                y="234.369" fill="#0e9b9b" />
                                                            <rect width="71.55" height="7.014" x="385.148"
                                                                y="250.296" fill="#0e9b9b" />
                                                            <rect width="71.55" height="7.014" x="385.148"
                                                                y="261.634" fill="#0e9b9b" />
                                                            <rect width="59.53" height="7.014" x="385.148"
                                                                y="272.971" fill="#0e9b9b" />
                                                            <polygon fill="#f2f2f2"
                                                                points="360.299 246.426 345.974 261.339 336.465 251.441 324.927 263.454 324.927 273.99 369.988 273.99 369.988 256.513 360.299 246.426" />
                                                            <path fill="#f2f2f2"
                                                                d="M319.16842,221.08253V279.985h56.5771v-58.9025Zm52.1099,35.7728v18.4785h-47.6422v-49.6001h47.6422Z" />
                                                            <path fill="#f2f2f2"
                                                                d="M349.68692,236.96863a4.588,4.588,0,1,1-4.5843-4.7726A4.68136,4.68136,0,0,1,349.68692,236.96863Z" />
                                                            <path
                                                                d="M568.72842,188.04323h-81.0867c-4.5562,0-8.2495,4.3292-8.2495,9.6697v163.6585c0,5.3405,3.6933,9.6697,8.2495,9.6697h81.0867c4.556,0,8.2495-4.3292,8.2495-9.6697V197.71293C576.97792,192.37243,573.28442,188.04323,568.72842,188.04323Z"
                                                                style="mix-blend-mode:multiply" fill="#e2e0e1" />
                                                            <path fill="#8d7de0"
                                                                d="M565.84842,185.16323h-81.0867c-4.5562,0-8.2495,4.3292-8.2495,9.6697v163.6585c0,5.3405,3.6933,9.6697,8.2495,9.6697h81.0867c4.556,0,8.2495-4.3292,8.2495-9.6697V194.83293C574.09792,189.49243,570.40442,185.16323,565.84842,185.16323Z" />
                                                            <rect width="45.058" height="5.688" x="483.112"
                                                                y="196.01" fill="#5a48b4" />
                                                            <rect width="68.164" height="3.478" x="499.333"
                                                                y="208.42" fill="#fc0" />
                                                            <rect width="39.409" height="3.478" x="522.189"
                                                                y="216.508" fill="#7463cd" />
                                                            <rect width="19.667" height="3.478" x="499.333"
                                                                y="216.508" fill="#b29bee" />
                                                            <rect width="11.287" height="3.478" x="547.09"
                                                                y="224.596" fill="#7463cd" />
                                                            <rect width="19.756" height="3.478" x="524.774"
                                                                y="224.596" fill="#c1b3f4" />
                                                            <rect width="22.452" height="3.478" x="499.333"
                                                                y="224.596" fill="#7463cd" />
                                                            <rect width="42.022" height="3.478" x="499.333"
                                                                y="232.684" fill="#b29bee" />
                                                            <rect width="12.233" height="3.477" x="499.333"
                                                                y="240.772" fill="#7463cd" />
                                                            <rect width="22.807" height="3.478" x="544.691"
                                                                y="232.684" fill="#7463cd" />
                                                            <rect width="11.157" height="3.477" x="540.377"
                                                                y="240.772" fill="#b29bee" />
                                                            <rect width="22.807" height="3.477" x="515.362"
                                                                y="240.772" fill="#7463cd" />
                                                            <rect width="45.058" height="5.688" x="483.112"
                                                                y="252.543" fill="#5a48b4" />
                                                            <rect width="68.164" height="3.478" x="499.333"
                                                                y="264.952" fill="#fc0" />
                                                            <rect width="39.409" height="3.478" x="522.189"
                                                                y="273.04" fill="#7463cd" />
                                                            <rect width="19.667" height="3.478" x="499.333"
                                                                y="273.04" fill="#b29bee" />
                                                            <rect width="11.287" height="3.478" x="547.09"
                                                                y="281.128" fill="#7463cd" />
                                                            <rect width="19.756" height="3.478" x="524.774"
                                                                y="281.128" fill="#c1b3f4" />
                                                            <rect width="22.452" height="3.478" x="499.333"
                                                                y="281.128" fill="#7463cd" />
                                                            <rect width="42.022" height="3.477" x="499.333"
                                                                y="289.216" fill="#b29bee" />
                                                            <rect width="12.233" height="3.478" x="499.333"
                                                                y="297.304" fill="#7463cd" />
                                                            <rect width="22.807" height="3.477" x="544.691"
                                                                y="289.216" fill="#7463cd" />
                                                            <rect width="11.157" height="3.478" x="540.377"
                                                                y="297.304" fill="#b29bee" />
                                                            <rect width="22.807" height="3.478" x="515.362"
                                                                y="297.304" fill="#7463cd" />
                                                            <rect width="45.058" height="5.688" x="483.112"
                                                                y="309.075" fill="#5a48b4" />
                                                            <rect width="68.164" height="3.478" x="499.333"
                                                                y="321.485" fill="#fc0" />
                                                            <rect width="39.409" height="3.478" x="522.189"
                                                                y="329.573" fill="#7463cd" />
                                                            <rect width="19.667" height="3.478" x="499.333"
                                                                y="329.573" fill="#b29bee" />
                                                            <rect width="11.287" height="3.478" x="547.09"
                                                                y="337.661" fill="#7463cd" />
                                                            <rect width="19.756" height="3.478" x="524.774"
                                                                y="337.661" fill="#c1b3f4" />
                                                            <rect width="22.452" height="3.478" x="499.333"
                                                                y="337.661" fill="#7463cd" />
                                                            <rect width="42.022" height="3.477" x="499.333"
                                                                y="345.749" fill="#b29bee" />
                                                            <rect width="12.233" height="3.478" x="499.333"
                                                                y="353.837" fill="#7463cd" />
                                                            <rect width="22.807" height="3.477" x="544.691"
                                                                y="345.749" fill="#7463cd" />
                                                            <rect width="11.157" height="3.478" x="540.377"
                                                                y="353.837" fill="#b29bee" />
                                                            <rect width="22.807" height="3.478" x="515.362"
                                                                y="353.837" fill="#7463cd" />
                                                            <rect width="44.074" height="44.074" x="259.547"
                                                                y="403.04" fill="#7cb3e2" rx="4.821" />
                                                            <rect width="44.074" height="44.074" x="395.337"
                                                                y="403.04" fill="#7cb3e2" rx="4.821" />
                                                            <rect width="44.074" height="44.074" x="531.126"
                                                                y="403.04" fill="#7cb3e2" rx="4.821" />
                                                            <ellipse cx="137.702" cy="611.964" fill="#f2f2f2"
                                                                rx="44.517" ry="7.541" />
                                                            <path fill="#397c77"
                                                                d="M148.11392,517.563c-.123,1.2541-.3074,2.6254-.5718,4.1438-3.0065,17.1479-7.2182,36.0971-7.2182,36.0971s-8.1219-18.9492-9.0257-36.6996c-.9038-17.744-12.9362-24.6609-9.0197-37.2958a258.20986,258.20986,0,0,0,6.5973-29.1677c.0122-.0616.0184-.0984.0184-.0984s14.4363,19.9391,14.4363,35.5804C143.33052,504.38083,149.32512,504.64523,148.11392,517.563Z" />
                                                            <path fill="#49908c"
                                                                d="M148.11392,517.563a108.1743,108.1743,0,0,1-9.782,11.8233c4.6728-6.8248,3.234-16.4776-1.4387-23.3024-3.5046-5.1154-8.786-9.5053-9.6407-15.6413-.4611-3.2956.4611-6.5972,1.1498-9.8497,1.7891-8.4601,2.9205-17.861.4735-25.9521.0122-.0616.0184-.0984.0184-.0984s14.4363,19.9391,14.4363,35.5804C143.33052,504.38083,149.32512,504.64523,148.11392,517.563Z" />
                                                            <path fill="#397c77"
                                                                d="M170.07932,529.42123c-.0062.0062-.0062.0062-.0062.0123a24.92857,24.92857,0,0,1-.873,4.9679c-4.5129,15.4016-30.379,33.0289-30.379,33.0289a.108.108,0,0,1,.0061-.0307c2.7114-28.2517,23.1547-37.8738,19.8469-58.3663-3.2587-20.2096,10.1447-36.2076,10.5198-36.6441C162.154,485.68193,171.48722,512.91293,170.07932,529.42123Z" />
                                                            <path fill="#2d726d"
                                                                d="M170.07312,529.43353a24.92857,24.92857,0,0,1-.873,4.9679c-4.5129,15.4016-30.379,33.0289-30.379,33.0289a.108.108,0,0,1,.0061-.0307c.1045-.6702,1.9982-11.5528,15.6967-21.3225C166.45792,537.56163,169.43372,531.21043,170.07312,529.43353Z" />
                                                            <path fill="#5db3ab"
                                                                d="M111.74722,437.18223s-16.8451,49.3323,0,80.0145,23.7638,50.2347,23.7638,50.2347,3.6096-24.0645-6.9186-46.3242S112.95052,457.33623,111.74722,437.18223Z" />
                                                            <path fill="#49908c"
                                                                d="M163.78682,516.29433s-17.146,7.821-15.3412,33.0887-1.8048,31.5847-1.8048,31.5847l-8.1218-17.4468s-7.2193-22.2596,6.317-40.9097Z" />
                                                            <path fill="#5bb1a8"
                                                                d="M193.26582,454.629s-12.0322,3.9105-12.9347,20.4548.9025,32.7879-16.5443,41.2105-31.8855,18.65-25.2678,47.2266c0,0-8.7234-20.154,6.0162-47.2266s10.0707-19.5524,20.0756-28.2758S180.93272,452.82413,193.26582,454.629Z" />
                                                            <path fill="#49908c"
                                                                d="M104.71112,472.38923s-8.0057,27.5814,1.4144,43.9051,19.4897,41.1219,21.4387,51.136,5.1972,3.1927,5.1972,3.1927,11.5077-14.338-8.999-37.9202C100.76662,506.25823,104.71112,472.38923,104.71112,472.38923Z" />
                                                            <path fill="#e6a562"
                                                                d="M107.92212,554.50253v40.4527a20.60527,20.60527,0,0,0,20.6052,20.6053h18.3492a20.60529,20.60529,0,0,0,20.6053-20.6053v-40.4527Z" />
                                                            <rect width="153.228" height="71.328" x="285.936"
                                                                y="188.299" style="mix-blend-mode:multiply"
                                                                fill="#8d7de0" opacity=".5" />
                                                            <rect width="153.228" height="71.328" x="283.17"
                                                                y="185.419" fill="#8d7de0" />
                                                            <rect width="49.898" height="9.852" x="354.99"
                                                                y="204.918" fill="#5a48b4" />
                                                            <rect width="71.55" height="7.014" x="354.99"
                                                                y="220.845" fill="#7463cd" />
                                                            <rect width="71.55" height="7.014" x="354.99"
                                                                y="232.182" fill="#7463cd" />
                                                            <rect width="59.53" height="7.014" x="354.99"
                                                                y="243.52" fill="#7463cd" />
                                                            <polygon fill="#f2f2f2"
                                                                points="330.267 216.974 315.942 231.888 306.434 221.989 294.895 234.002 294.895 244.539 339.956 244.539 339.956 227.062 330.267 216.974" />
                                                            <path fill="#f2f2f2"
                                                                d="M289.13692,191.63143v58.9024H345.714v-58.9024Zm52.1099,35.7727v18.4786h-47.6421v-49.6002h47.6421Z" />
                                                            <path fill="#f2f2f2"
                                                                d="M319.65542,207.51753a4.588,4.588,0,1,1-4.5842-4.7727A4.68126,4.68126,0,0,1,319.65542,207.51753Z" />
                                                            <polygon fill="#ee9089"
                                                                points="771.757 564.406 767.591 572.371 764.951 573.538 762.022 584.996 786.661 581.722 786.661 571.901 771.757 564.406" />
                                                            <path fill="#14293e"
                                                                d="M788.21162,573.45153s.8615,13.2671-.6031,14.1286-13.4394.6892-16.2824,2.2399-24.7251,6.8658-28.2573,4.5959-3.446-3.0452-3.5321-4.8543.6892-4.1352,1.8953-4.4798,10.0796-2.2399,14.904-6.2029,6.452-7.8396,7.5766-7.7535,4.7713,2.4122,5.1017,5.0829-3.1156,5.9444-3.1156,5.9444,1.8953-2.1538,7.9258-2.4123,12.1472,0,12.2333-5.4274Z" />
                                                            <path fill="#2d3355"
                                                                d="M824.34262,614.35793c-2.4862,5.3505-19.8666,18.0211-28.8696,16.9707-9.0029-1.042-11.8751-2.3472-10.3077-7.829,1.5674-5.49,11.1032-13.319,13.5816-16.4535.5405-.6801,1.0887-1.367,1.6291-2.0698h.0077a.20489.20489,0,0,1,.0309-.0535,31.985,31.985,0,0,0,2.2468-3.1971,18.73617,18.73617,0,0,0,2.3319-5.6521c1.0656-4.7021,18.2993,2.0932,18.2993,2.0932s.3397,1.0345.7258,2.6247C824.89852,604.34373,826.05672,610.65943,824.34262,614.35793Z" />
                                                            <path fill="#ee9089"
                                                                d="M812.77632,614.36543c.1466-.3401,4.0227-9.1184,3.7524-11.0645-.2856-1.9846-8.5859-2.9105-10.9332-3.2657-.9651-.147-2.0305.6711-2.9341,1.6905a18.73617,18.73617,0,0,0,2.3319-5.6521c1.0656-4.7021,18.2993,2.0932,18.2993,2.0932s.3397,1.0345.7258,2.6247C820.11142,606.21973,813.062,614.04873,812.77632,614.36543Z" />
                                                            <path fill="#481e74"
                                                                d="M749.606,427.43513s-2.9036,13.2276,0,33.2303,10.3239,39.6827,12.5823,48.3935,8.7108,52.9104,4.8394,62.9117c0,0,11.8049,9.0335,22.3563,2.9036,0,0,.7405-14.8407,0-29.6814s-.55-40.6506,0-48.0709-2.9989-77.1071-2.9989-77.1071Z" />
                                                            <path fill="#5a2b95"
                                                                d="M816.06652,429.04823s3.5488,11.6145-1.9358,23.2289c0,0-1.129,38.7149,1.5326,51.2972s17.1796,62.4358,8.7914,97.1098l-20.9705-3.2262s3.5488-24.1968-2.581-49.6841-7.0978-21.2932-10.324-30.004-11.7346-60.9595-15.0928-68.7337c-3.7136-8.5973-11.5738-20.7197-11.5738-20.7197S807.67832,415.82063,816.06652,429.04823Z" />
                                                            <path fill="#ffaca3"
                                                                d="M742.66792,315.20823s-5.4469,3.0439-8.9713,3.0439-13.2968-1.2816-19.865-4.8061-12.656-7.2091-14.0978-8.8111-5.4469-6.5683-8.3305-8.3305-11.2141-3.6846-12.656-5.9275-2.8836,4.9663,1.2817,7.3693c0,0-7.5295-3.5244-9.7723-1.9224s10.5733,23.8701,17.1415,23.7099,6.2479-1.1197,8.1703.0008,8.1703,7.0481,18.2631,15.0582,21.7874,8.3304,23.5496,7.4493,17.6222-8.0902,17.6222-8.0902Z" />
                                                            <path fill="#ff8e00"
                                                                d="M766.77892,295.103a85.84635,85.84635,0,0,0-13.7724,11.2972c-4.9383,4.8481-13.1488,8.2837-13.1488,8.2837s-.7889,17.2249,6.4429,24.1938l11.4394-3.5502Z" />
                                                            <path fill="#f9b40f"
                                                                d="M836.70422,329.63923c-.278-1.166-3.6521-14.1993-15.9519-12.7942-12.8791,1.467-16.6314,22.4917-16.1374,29.6647.4866,7.173,5.0497,16.6239,5.0497,16.6239a107.73011,107.73011,0,0,0,1.9535,30.159c3.4282,15.4809,8.1536,40.5826,6.2001,42.0496-1.9612,1.4669-15.6508-1.467-23.9666-2.7643-8.308-1.3048-7.8216,2.9339-27.1939,6.6788-19.3726,3.7524-17.6276-2.1154-19.0945-7.9836-1.4671-5.8682,11.7362-21.519,9.9448-31.9502-1.7991-10.4315-1.6291-48.8983-2.7718-54.6044s-.1621-23.6344,1.6291-33.2549a25.43619,25.43619,0,0,1,4.8025-10.277,38.39687,38.39687,0,0,1,10.8483-9.9293c4.4011-2.448,13.8518-1.1431,13.8518-1.1431l12.1299-9.0645.7414-.5482a.95182.95182,0,0,0-.2085.6176c-.1004,1.5058,1.4902,6.2078,16.8398,18.9402,1.6679,1.3822,3.2044,2.7409,4.6252,4.0767C834.828,318.01113,836.573,328.59683,836.70422,329.63923Z" />
                                                            <path fill="#481e74"
                                                                d="M771.45742,236.94953a13.75081,13.75081,0,0,1,7.8892-9.2865,20.72622,20.72622,0,0,1,12.3896-1.144c2.0541.3918,4.0566,1.0136,6.0905,1.4995,4.8106,1.1494,9.9355,1.5896,14.168,4.1486a21.29262,21.29262,0,0,1,7.5714,8.5887,32.29316,32.29316,0,0,1-1.0313,31.0291,39.3085,39.3085,0,0,1-6.7448,8.1488,22.84878,22.84878,0,0,1-4.1467,3.2257,19.612,19.612,0,0,1-9.8538,2.3334,8.71648,8.71648,0,0,1-4.0982-.7757,9.82438,9.82438,0,0,1-3.5304-4.0307,113.98788,113.98788,0,0,1-10.6615-24.6894c-.4933-1.6573-.9497-3.3273-1.5307-4.957-.419-1.1752-.7802-2.5288-1.9229-3.1889a9.50439,9.50439,0,0,1-4.5062-6.1656A10.75251,10.75251,0,0,1,771.45742,236.94953Z" />
                                                            <path fill="#fc0"
                                                                d="M819.64252,316.16533c6.1746-1.794,14.0527.6771,17.0802,13.5573a78.07338,78.07338,0,0,1,2.2265,23.4535c0,4.1652.5122,13.4569.0959,20.3456h-31.3353s-3.7574-29.3563-3.6996-30.1577S802.61,321.11393,819.64252,316.16533Z" />
                                                            <path fill="#ff8e00"
                                                                d="M819.99572,304.136a15.17319,15.17319,0,0,0-8.2232-2.5249,7.21976,7.21976,0,0,0-3.1194.6873,12.3143,12.3143,0,0,0-2.9496,2.463,24.52329,24.52329,0,0,1-13.7822,7.196c-5.2349.6719-10.8869-1.042-14.3228-5.0417a15.06736,15.06736,0,0,1-3.4822-8.7403,4.65685,4.65685,0,0,0-.4864-2.2315,2.69678,2.69678,0,0,0-2.6562-.9885,7.34748,7.34748,0,0,0-2.7179,1.2045c-.2006.1237-.4013.2473-.6021.3785-1.606,1.0191-3.1657,2.1079-4.6868,3.2506-.61.4555-1.2045.9188-1.7991,1.3976a38.39687,38.39687,0,0,1,10.8483-9.9293c4.4011-2.448,13.8518-1.1431,13.8518-1.1431l12.1299-9.0645q.2664.0345.5329.0694c-.1004,1.5058,1.4902,6.2078,16.8398,18.9402C817.03842,301.44153,818.57492,302.80023,819.99572,304.136Z" />
                                                            <path fill="#ffaca3"
                                                                d="M775.35632,244.85713a19.84585,19.84585,0,0,1,6.4519-2.9856,13.57368,13.57368,0,0,1,5.2514.1454,21.98627,21.98627,0,0,1,16.6971,16.2988,14.71815,14.71815,0,0,0,1.3138,4.3755c.7819,1.3154,2.3854,2.3111,3.8317,1.8112,1.288-.4452,2.0304-1.8941,3.3235-2.3242,1.7951-.5971,3.6661,1.2266,3.8213,3.112s-.8571,3.6558-1.9231,5.2187a14.47711,14.47711,0,0,1-3.4669,3.8268,6.33726,6.33726,0,0,1-4.9856,1.2443c-1.296,3.4678-.2234,7.3024.3311,10.9627.7277,4.804.4509,9.9954-2.1466,14.1015a20.16993,20.16993,0,0,1-5.8345,5.6855,13.3063,13.3063,0,0,1-2.8142,1.5479,16.35043,16.35043,0,0,1-6.0956.6333,18.27665,18.27665,0,0,1-5.9934-.806,10.06882,10.06882,0,0,1-6.1491-7.5079c-.6292-3.3227.7309-6.9488,2.5848-9.7771a13.94811,13.94811,0,0,0,2.2623-7.1656c.0551-1.7543-.4603-3.829-2.099-4.4576a7.732,7.732,0,0,0-2.2278-.2669,7.41014,7.41014,0,0,1-5.8682-3.802,13.05147,13.05147,0,0,1-1.1725-6.0621,60.30725,60.30725,0,0,1,4.3046-23.1825A3.232,3.232,0,0,1,775.35632,244.85713Z" />
                                                            <path
                                                                d="M290.225,278.61883h86.29a4.1755,4.1755,0,0,1,4.1755,4.1755v86.2903a4.1752,4.1752,0,0,1-4.1752,4.1752h-86.2906a4.1752,4.1752,0,0,1-4.1752-4.1752v-86.2903A4.1755,4.1755,0,0,1,290.225,278.61883Z"
                                                                style="mix-blend-mode:multiply" fill="#e2e0e1" />
                                                            <path fill="#caddfe"
                                                                d="M287.345,275.73883h86.29a4.1755,4.1755,0,0,1,4.1755,4.1755v86.2903a4.1752,4.1752,0,0,1-4.1752,4.1752h-86.2906a4.1752,4.1752,0,0,1-4.1752-4.1752v-86.2903A4.1755,4.1755,0,0,1,287.345,275.73883Z" />
                                                            <circle cx="293.424" cy="286.029" r="2.681"
                                                                fill="#31c9ce" />
                                                            <circle cx="302.667" cy="286.029" r="2.681"
                                                                fill="#fc0" />
                                                            <circle cx="311.911" cy="286.029" r="2.681"
                                                                fill="#e74445" />
                                                            <rect width="79.494" height="68.032" x="290.743"
                                                                y="295.078" fill="#f9b40f" rx="4.437" />
                                                            <path fill="#fff"
                                                                d="M350.29032,333.69243h5.9679l-.0002-9.1968h-5.9677a20.20678,20.20678,0,0,0-2.5477-6.1511l4.2196-4.2197-6.503-6.5032-4.2199,4.2198a20.20573,20.20573,0,0,0-6.1511-2.5479V303.326h-9.1968v5.9676a20.20484,20.20484,0,0,0-6.1512,2.5477l-4.2196-4.2197-6.5027,6.5033,4.2193,4.2194a20.20353,20.20353,0,0,0-2.548,6.1513h-5.9674l.0003,9.1968h5.9671a20.20291,20.20291,0,0,0,2.5477,6.1513l-4.2196,4.2196,6.5033,6.5031,4.2194-4.2196a20.20389,20.20389,0,0,0,6.1514,2.5479v5.9676h9.1968v-5.9675a20.20618,20.20618,0,0,0,6.1514-2.548l4.2198,4.2198,6.5031-6.5033-4.2199-4.2197A20.19985,20.19985,0,0,0,350.29032,333.69243Zm-29.7843-4.5982a9.98375,9.98375,0,1,1,9.9839,9.9836A9.9838,9.9838,0,0,1,320.506,329.09423Z" />
                                                            <polygon fill="#e2e0e1"
                                                                points="637.897 284.03 609.562 373.762 603.702 392.317 599.618 405.252 759.163 455.632 766.38 432.778 772.239 414.223 797.442 334.409 637.897 284.03" />
                                                            <polygon fill="#83c0ed"
                                                                points="701.828 394.512 743.079 373.06 764.821 414.869 788.81 338.898 642.386 292.662 615.264 378.551 676.868 346.515 701.828 394.512" />
                                                            <polygon fill="#fff"
                                                                points="723.401 397.353 737.115 387.735 738.745 409.421 744.426 391.432 749.79 398.312 748.161 389.548 756.418 398.711 743.079 373.06 716.505 386.879 729.12 385.211 723.401 397.353" />
                                                            <polygon fill="#434a6b"
                                                                points="756.418 398.711 748.161 389.548 749.79 398.312 744.426 391.432 738.745 409.421 737.115 387.735 723.401 397.353 729.12 385.211 716.505 386.879 701.828 394.512 693.114 377.755 677.186 361.721 665.569 389.56 668.965 362.893 655.485 372.768 662.398 360.819 642.28 364.502 615.264 378.551 608.25 400.764 754.674 447 764.821 414.869 756.418 398.711" />
                                                            <polygon fill="#fff"
                                                                points="655.485 372.768 668.965 362.893 665.569 389.56 677.186 361.721 693.114 377.755 676.868 346.515 642.28 364.502 662.398 360.819 655.485 372.768" />
                                                            <circle cx="718.519" cy="345.227" r="11.653"
                                                                fill="#fff"
                                                                transform="rotate(-63.205 718.52 345.227)" />
                                                            <path fill="#ffaca3"
                                                                d="M837.66762,371.11873s.1602,25.7925-1.7623,28.5159-19.3844,14.5784-38.7688,20.0252-22.7487,7.0489-25.9527,9.7723-12.8161,7.5295-16.1804,6.7285-17.3018-14.8988-13.1365-16.8212,12.7585-6.5062,13.214-7.6316-14.1752-2.4611-10.3304-9.6702c0,0,9.1315,3.5245,13.457,3.5245,0,0,6.5682,7.8499,10.5733,7.8499s16.8212-7.6897,24.6711-12.8162,16.5008-11.3743,18.1028-12.6559-2.1936-18.1092-2.1936-18.1092Z" />
                                                            <path fill="#ffaca3"
                                                                d="M758.32172,420.01483l-3.2408-8.307s-21.4606,12.8945-30.4819,12.6797,16.2465,19.7252,34.543,11.2587,2.4017-21.9985,2.4017-21.9985Z" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                                <div class="working-content content-1">
                                                    <h4 class="mb-3">Quick Support </h4>
                                                    <p class="title-desc text-muted">Yaha Kam Karna Bht Asan Hai Apko
                                                        Sirf 2 Members Ko Join Karwana Hai Aur Unko Ache Se Guideline
                                                        Deni Hai Samjhana Hai K Wo Bhi Aage 2 Member Ko Join Karwaye
                                                        Jese Apke 2 Members Ban Jayege Apka Kam Start Hojayega Ap
                                                        Befiqar Ho Kar Kam Karte Jaye Aur Profit Hasil Karte Jaye 1st
                                                        Pair Means <br> <br> Right/Left Pe Ek Ek Member Lagane Pe 1st
                                                        Pair Pe Apko 250 Earning Milegi Uske Bad Apke Jitne Pairs Bante
                                                        Jayege Har Pair Pe Apko 200 Earning Milti Jayegi Jitne Pair Utni
                                                        Earning Ek Din Me Ap Yaha Se 200 Se Unlimited Earning Kar Sakte
                                                        Hain Jis Me Rewards Bhi Shamil Hain....</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-3 CLOSED -->

                    <!-- ROW-6 OPEN -->
                    <div class="bg-landing section">
                        <div class="container">
                            <div class="row">
                                <h4 class="text-center fw-semibold landing-card-header">Choose a plan </h4>
                                <span class="landing-title"></span>
                                <h2 class="text-center fw-semibold">Find the <span class="text-primary">Perfect
                                        Plan</span> for your Business.</h2>
                                <div class="pricing-tabs text-center">
                                    <div class="tab-content text-start">
                                        <div class="tab-pane pb-0 active show" id="annualyear">
                                            <div class="row d-flex align-items-center justify-content-center">
                                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                                    <div
                                                        class="card p-3 border bg-primary border-primary pricing-card advanced reveal revealrotate">
                                                        <div
                                                            class="card-header d-block text-justified pt-2 bd-white-2">
                                                            <p class="fs-18 fw-semibold mb-1 pe-0">Advanced<span
                                                                    class="badge bg-white text-primary float-end font-weight-normal">Limited
                                                                    Deal</span></p>
                                                            <p class="text-justify fw-semibold mb-1"> <span
                                                                    class="fs-30 me-2">{{ env('APP_CURRENCY') }}</span><span
                                                                    class="fs-30 me-1">{{ option('fees') }}</span><span
                                                                    class="fs-25"><span
                                                                        class="op-0-5 text-muted text-20">/</span>
                                                                    Lifetime</span></p>
                                                            <p class="fs-13 mb-2"> Rewards Detail
                                                                1Star 30/30-Earn1500 <br>

                                                                2Star 100/100-Earn5000 <br>

                                                                3Star 500/500-Earn15000 <br>

                                                                4Star 2000/2000-Earn60000 <br>

                                                                5Star 4500/4500-Earn130000 <br>

                                                                6Star 6000/6000-Earn200000 <br>

                                                                7Star 10000/10000-Earn300000 <br>

                                                                8Star 25000/25000-Earn750000 <br>

                                                                9Star 40000/40000-Earn1200000 <br>

                                                                10Star 50000/50000-Earn1500000 <br>
                                                                For More Information Contact With Admin <br>
                                                                WhatsApp#03163677806</p> <br>
                                                        </div>
                                                        <div class="card-body py-2">

                                                        </div>
                                                        <div class="card-footer text-center border-top-0 pt-1">
                                                            <a href="{{ route('register') }}"
                                                                class="btn btn-lg btn-white text-primary btn-block">
                                                                <span class="ms-4 me-4">Select</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-6 CLOSED -->

                    <div class="demo-screen-skin bg-primary">
                        <div class="container text-center text-white px-5 px-md-0">
                            <div id="demo" class="row">
                                <div class="col-lg-6">
                                    <div class="feature-1 border-0"> <a href="#"></a>
                                        <div class="mb-3"> <i class="si si-earphones-alt fs-50"></i> </div>
                                        <h4 class="fs-25">Get Support</h4>
                                        <p class="mb-1 text-white">Need Help? Don't worry. Please visit our support
                                            website. Our dedicated
                                            team will help you.</p>
                                        <h6 class="mb-0">Support : <a class="text-white pos-relative"
                                                href="mailto:support@newbusinessdream.com">support@newbusinessdream.com</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-5 mt-xl-0 mt-lg-0">
                                    <div class="feature-1 border-0"> <a href="#"></a>
                                        <div class="mb-3"> <i class="si si-bubbles fs-50"></i> </div>
                                        <h4 class="fs-25">Pre-Sale Questions</h4>
                                        <p class="mb-1 text-white">Please feel free to ask any questions before making
                                            the purchase.</p>
                                        <h6 class="mb-0">Ask : <a class="text-white pos-relative"
                                                href="mailto:support@newbusinessdream.com">support@newbusinessdream.com</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--app-content closed-->
        </div>
        <div class="pos-relative">
            <div class="shape overflow-hidden bottom-footer-shape">
                <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#0e0e23"></path>
                </svg>
            </div>
        </div>
        <!-- FOOTER OPEN -->
        <div class="demo-footer">
            <div class="container">
                <div class="row">
                    <div class="card mb-0">
                        <div class="card-body p-0">
                            <div class="top-footer">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12 col-md-12 reveal revealleft">
                                        <h6>About</h6>
                                        <p>We, at {{ env('APP_NAME') }} strive towards greener planet and brighter,
                                            one that promises
                                            to all life teeming with opportunities. <br> <br> We are Proud to introduce
                                            {{ env('APP_NAME') }}
                                            to the people of world and hope we can inspire others to believe in the
                                            power of innovation.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-12 reveal revealleft">
                                        <h6>Pages</h6>
                                        <ul class="mb-5 mb-lg-0 ps-0">
                                            <li><a href="{{ route('user.dashboard.index') }}">Dashboard</a></li>
                                            <li><a href="{{ route('user.withdraw.index') }}">Withdraw</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            <li><a href="{{ route('user.product.index') }}">Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4 reveal revealleft">
                                        <div class="">
                                            <a href="{{ route('landing-page') }}"><img loading="lazy"
                                                    alt="" class="logo mb-3"
                                                    src="{{ asset('') }}assets/img/brand/logo-light.png"></a>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur Excepteur sint occaecat.</p>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your email"
                                                        aria-label="Example text with button addon"
                                                        aria-describedby="button-addon1">
                                                    <button class="btn btn-primary" type="button"
                                                        id="button-addon2">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-list mt-6">
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fe fe-facebook"></i></button>
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fe fe-github"></i></button>
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fe fe-twitter"></i></button>
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fe fe-instagram"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-0">
                            <footer class="main-footer px-0 text-center">
                                <div class="row ">
                                    <div class="col-md-12 col-sm-12">
                                        Copyright © <span id="year"></span> <a
                                            href="javascript:void(0)">{{ env('APP_NAME') }}</a>.
                                        Designed with <span class="fa fa-heart text-danger"></span> by <a
                                            href="https://www.asanwebs.com"> ASAN Webs Development </a> All rights
                                        reserved.
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- COUNTERS JS-->
    <script src="{{ asset('assets/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counters/counters-1.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/landing/lib/company-slider/slider.js') }}"></script>

    <!--- TABS JS -->
    <script src="{{ asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ asset('assets/plugins/tabs/tab-content.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('assets/plugins/rating/jquery-rate-picker.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/rating-picker.js') }}"></script>

    <!-- Star Rating-1 Js-->
    <script src="{{ asset('assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ asset('assets/plugins/ratings-2/star-rating.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('assets/landing/js/sidemenu.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/landing/js/landing.js?v=1') }}"></script>

</body>

</html>
