<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="author" content="ASAN Webs Development">
    <meta name="keywords" content="{{ env('APP_KEYWORD') }}">
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.ico') }}" type="image/x-icon" />
    <title>@yield('title') - {{ env('APP_DESC') }}</title>
    <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>

<body class="ltr main-body leftmenu error-1">
    <div id="global-loader">
        <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <div class="page main-signin-wrapper">
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-4 p-2 pos-absolute">
                                <img src="assets/img/brand/logo-light.png"
                                    class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light"
                                    alt="logo">
                                <img src="assets/img/brand/logo.png"
                                    class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo"
                                    alt="logo">
                                <div class="clearfix"></div>
                                <img src="assets/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">@yield('title')</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">{{ env('APP_DESC') }}</span>
                            </div>
                        </div>
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('footer')
    <x-alert />
</body>

</html>
