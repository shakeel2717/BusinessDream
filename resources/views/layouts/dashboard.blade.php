<!DOCTYPE html>
<html lang="en" id="demo">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="author" content="ASAN Webs Development">
    <meta name="keywords" content="{{ env('APP_KEYWORD') }}">
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.ico') }}" type="image/x-icon" />
    <title>@yield('title') - {{ env('APP_DESC') }}</title>
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

</head>

<body class="ltr main-body leftmenu">
    <div class="page">
        <div class="main-header side-header sticky">
            <div class="main-container container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
                    <div class="hor-logo">
                        <a class="main-logo" href="index.html">
                            <img src="{{ asset('assets/img/brand/logo.png" class="header-brand-img desktop-logo') }}"
                                alt="logo">
                            <img src="{{ asset('assets/img/brand/logo-light.png" class="header-brand-img desktop-logo-dark') }}"
                                alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/brand/logo.png') }}" class="mobile-logo"
                                alt="logo"></a>
                        <a href="index.html"><img src="{{ asset('assets/img/brand/logo-light.png') }}"
                                class="mobile-logo-dark" alt="logo"></a>
                    </div>
                </div>
                <div class="main-header-right">
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button>
                    <div
                        class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ms-auto">
                                <div class="dropdown ">
                                    <a class="nav-link icon full-screen-link">
                                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                                    </a>
                                </div>
                                <div class="dropdown main-header-notification">
                                    <a class="nav-link icon" href="">
                                        <i class="fe fe-bell header-icons"></i>
                                        <span class="badge bg-danger nav-link-badge">0</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <p class="main-notification-text">You have 1 unread notification<span
                                                    class="badge bg-pill bg-primary ms-3">View all</span></p>
                                        </div>
                                        <div class="main-notification-list">
                                        </div>
                                        <div class="dropdown-footer">
                                            <a href="javascript:void(0)">View All Notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown main-profile-menu">
                                    <a class="d-flex" href="javascript:void(0)">
                                        <span class="main-img-user"><img alt="avatar"
                                                src="{{ asset('assets/img/users/1.jpg') }}"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <h6 class="main-notification-title">Sonia Taylor</h6>
                                            <p class="main-notification-text">Web Designer</p>
                                        </div>
                                        <a class="dropdown-item border-top" href="profile.html">
                                            <i class="fe fe-user"></i> My Profile
                                        </a>
                                        <a class="dropdown-item" href="profile.html">
                                            <i class="fe fe-edit"></i> Edit Profile
                                        </a>
                                        <a class="dropdown-item" href="signin.html">
                                            <i class="fe fe-power"></i> Sign Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky">
            <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
                <div class="main-sidebar-header main-container-1 active">
                    <div class="sidemenu-logo">
                        <a class="main-logo" href="index.html">
                            <img src="{{ asset('assets/img/brand/logo-light.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets/img/brand/icon-light.png') }}"
                                class="header-brand-img icon-logo" alt="logo">
                            <img src="{{ asset('assets/img/brand/logo.png') }}"
                                class="header-brand-img desktop-logo theme-logo" alt="logo">
                            <img src="{{ asset('assets/img/brand/icon.png') }}"
                                class="header-brand-img icon-logo theme-logo" alt="logo">
                        </a>
                    </div>
                    <div class="main-sidebar-body main-body-1">
                        <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                        <ul class="menu-nav nav">
                            <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.dashboard.index') }}">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-layout sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Overview</span>
                                </a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content side-content pt-0">
            <div class="main-container container-fluid">
                <div class="inner-body">
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-5">Welcome {{ auth()->user()->name }}</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                            </ol>
                        </div>
                        <div class="d-flex">
                            <div class="justify-content-center">
                                <button type="button" class="btn btn-primary my-2 btn-icon-text">
                                    <i class="fe fe-users me-2"></i> Marketing Section
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © {{ date('Y') }} <a href="javascript:void(0)">{{ env('APP_NAME') }}</a>. Designed by <a target="_blank"
                                href="https://www.asanwebs.com/">ASAN Webs Development</a> All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart-circle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
