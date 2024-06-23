<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Klow') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/user-css/themify-icons.css">
    <link rel="stylesheet" href="assets/user-css/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/user-css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/user-css/images/favicon.png"/>
    <style>
        #proBanner{
            display: none;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            {{-- <a href={{route('login')}} class="logo">
                <img class="logo-light" src="assets/img/logo.png" alt="Image">
                <img class="logo-dark" src="assets/img/logo-white.png" alt="Image">
            </a> --}}
            <a class="navbar-brand brand-logo me-5" href="{{route('profile')}}"><img src="assets/img/logo.png" class="me-2" alt="logo"/></a>
            {{-- <a class="navbar-brand brand-logo-mini" href="{{route('profile')}}"><img src="assets/images/logo-mini.svg" alt="logo"/></a> --}}

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="ti-view-list"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
                        </div>
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown me-1">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="ti-email mx-0"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal">David Grey
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal">Tim Cook
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal"> Johnson
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="ti-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-success">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-warning">
                                    <i class="ti-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-info">
                                    <i class="ti-user mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        <img src="assets/images/faces/face28.jpg" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="ti-settings text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            <i class="ti-power-off text-primary"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        {{--                        <a class="dropdown-item">--}}
                        {{--                            <i class="ti-power-off text-primary"></i>--}}
                        {{--                            Logout--}}
                        {{--                        </a>--}}
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="ti-view-list"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="ti-shield menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">--}}
                {{--                        <i class="ti-palette menu-icon"></i>--}}
                {{--                        <span class="menu-title">UI Elements</span>--}}
                {{--                        <i class="menu-arrow"></i>--}}
                {{--                    </a>--}}
                {{--                    <div class="collapse" id="ui-basic">--}}
                {{--                        <ul class="nav flex-column sub-menu">--}}
                {{--                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/buttons.html">Buttons</a></li>--}}
                {{--                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/typography.html">Typography</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" href="assets/pages/forms/basic_elements.html">--}}
                {{--                        <i class="ti-layout-list-post menu-icon"></i>--}}
                {{--                        <span class="menu-title">Form elements</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" href="assets/pages/charts/chartjs.html">--}}
                {{--                        <i class="ti-pie-chart menu-icon"></i>--}}
                {{--                        <span class="menu-title">Charts</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('orders')}}">
                        <i class="ti-view-list-alt menu-icon"></i>
                        <span class="menu-title">Orders</span>
                    </a>
                </li>

                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" href="assets/pages/icons/themify.html">--}}
                {{--                        <i class="ti-star menu-icon"></i>--}}
                {{--                        <span class="menu-title">Icons</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">--}}
                {{--                        <i class="ti-user menu-icon"></i>--}}
                {{--                        <span class="menu-title">User Pages</span>--}}
                {{--                        <i class="menu-arrow"></i>--}}
                {{--                    </a>--}}
                {{--                    <div class="collapse" id="auth">--}}
                {{--                        <ul class="nav flex-column sub-menu">--}}
                {{--                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/login.html"> Login </a></li>--}}
                {{--                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/login-2.html"> Login 2 </a></li>--}}
                {{--                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/register.html"> Register </a></li>--}}
                {{--                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/register-2.html"> Register 2 </a></li>--}}
                {{--                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/lock-screen.html"> Lockscreen </a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" href="documentation/documentation.html">--}}
                {{--                        <i class="ti-write menu-icon"></i>--}}
                {{--                        <span class="menu-title">Documentation</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>
        </nav>
        <!-- partial -->



        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            {{-- <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
                </div>
            </footer> --}}
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="assets/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/user-js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/user-js/off-canvas.js"></script>
<script src="assets/user-js/hoverable-collapse.js"></script>
<script src="assets/user-js/template.js"></script>
<script src="assets/user-js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/user-js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>



{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <title>Bookshop Admin Panel</title>--}}
{{--    <!-- plugins:css -->--}}
{{--    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">--}}
{{--    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">--}}
{{--    <!-- endinject -->--}}
{{--    <!-- plugin css for this page -->--}}
{{--    <!-- End plugin css for this page -->--}}
{{--    <!-- inject:css -->--}}
{{--    <link rel="stylesheet" href="css/style.css">--}}
{{--    <!-- endinject -->--}}
{{--    <link rel="shortcut icon" href="images/favicon.png"/>--}}
{{--    <style>--}}
{{--        #proBanner{--}}
{{--            display: none;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Scripts -->--}}
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav me-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">--}}
{{--            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">--}}
{{--                <a class="navbar-brand brand-logo me-5" href="index.html"><img src="images/logo.svg" class="me-2" alt="logo"/></a>--}}
{{--                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>--}}
{{--            </div>--}}
{{--            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">--}}
{{--                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">--}}
{{--                    <span class="ti-view-list"></span>--}}
{{--                </button>--}}
{{--                <ul class="navbar-nav mr-lg-2">--}}
{{--                    <li class="nav-item nav-search d-none d-lg-block">--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">--}}
{{--                <span class="input-group-text" id="search">--}}
{{--                  <i class="ti-search"></i>--}}
{{--                </span>--}}
{{--                            </div>--}}
{{--                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <ul class="navbar-nav navbar-nav-right">--}}
{{--                    <li class="nav-item dropdown me-1">--}}
{{--                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">--}}
{{--                            <i class="ti-email mx-0"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">--}}
{{--                            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <div class="item-thumbnail">--}}
{{--                                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">--}}
{{--                                </div>--}}
{{--                                <div class="item-content flex-grow">--}}
{{--                                    <h6 class="ellipsis font-weight-normal">David Grey--}}
{{--                                    </h6>--}}
{{--                                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                                        The meeting is cancelled--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <div class="item-thumbnail">--}}
{{--                                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">--}}
{{--                                </div>--}}
{{--                                <div class="item-content flex-grow">--}}
{{--                                    <h6 class="ellipsis font-weight-normal">Tim Cook--}}
{{--                                    </h6>--}}
{{--                                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                                        New product launch--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <div class="item-thumbnail">--}}
{{--                                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">--}}
{{--                                </div>--}}
{{--                                <div class="item-content flex-grow">--}}
{{--                                    <h6 class="ellipsis font-weight-normal"> Johnson--}}
{{--                                    </h6>--}}
{{--                                    <p class="font-weight-light small-text text-muted mb-0">--}}
{{--                                        Upcoming board meeting--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">--}}
{{--                            <i class="ti-bell mx-0"></i>--}}
{{--                            <span class="count"></span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">--}}
{{--                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <div class="item-thumbnail">--}}
{{--                                    <div class="item-icon bg-success">--}}
{{--                                        <i class="ti-info-alt mx-0"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item-content">--}}
{{--                                    <h6 class="font-weight-normal">Application Error</h6>--}}
{{--                                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                                        Just now--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <div class="item-thumbnail">--}}
{{--                                    <div class="item-icon bg-warning">--}}
{{--                                        <i class="ti-settings mx-0"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item-content">--}}
{{--                                    <h6 class="font-weight-normal">Settings</h6>--}}
{{--                                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                                        Private message--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <div class="item-thumbnail">--}}
{{--                                    <div class="item-icon bg-info">--}}
{{--                                        <i class="ti-user mx-0"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item-content">--}}
{{--                                    <h6 class="font-weight-normal">New user registration</h6>--}}
{{--                                    <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                                        2 days ago--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item nav-profile dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">--}}
{{--                            <img src="images/faces/face28.jpg" alt="profile"/>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <i class="ti-settings text-primary"></i>--}}
{{--                                Settings--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item">--}}
{{--                                <i class="ti-power-off text-primary"></i>--}}
{{--                                Logout--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">--}}
{{--                    <span class="ti-view-list"></span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        --}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
{{--<main class="py-4">--}}
{{--    @yield('content')--}}
{{--</main>--}}
