<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/swiper-min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fancybox.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-theme.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Kflow - Security & CCTV HTML Template</title>
</head>
<body>

<div class="preloader js-preloader">
    <img src="assets/img/preloader.gif" alt="Image">
</div>


<div class="switch-theme-mode">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>


<div class="page-wrapper ">

    <header class="header-wrap style1">
        <div class="header-top bg-russian">
            <div class="container">
                <div class="close-header-top xl-none">
                    <button type="button"><i class="las la-times"></i></button>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-12">
                        <div class="header-top-left">
                            <div class="contact-item">
                                <i class="flaticon-call"></i>
                                Make A Call:
                                <a href="tel:12122555511">911129027</a>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-envelope-1"></i>
                                Send Message:
                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#8fece0e1fbeeecfbcfe4e9e3e0f8a1ece0e2"><span
                                        class="__cf_email__" data-cfemail="7c1f1312081d1f083c171a10130b521f1311">[zannat42@gmail.com]</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="header-top-right">

                            <div class="user-login">
                                <a href={{route('card')}}><i class="flaticon-shopping-cart"></i> Card</a>
                            </div>
                            @if(Auth::user())
                                <div class="user-login">
                                    <a href={{route('profile')}}><i class="flaticon-user-3"></i>Profile</a>
                                </div>
                            @else
                                <div class="user-login">
                                    <a href={{route('login')}}><i class="flaticon-user-3"></i> Login</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="header-bottom">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-6 col-md-6 col-5">
                        <a href={{route('login')}} class="logo">
                            <img class="logo-light" src="assets/img/logo.png" alt="Image">
                            <img class="logo-dark" src="assets/img/logo-white.png" alt="Image">
                        </a>
                    </div>
                    <div class="col-xl-10 col-lg-6 col-md-6 col-7">
                        <div class="header-bottom-right">
                            <div class="main-menu-wrap">
                                <div class="menu-close xl-none">
                                    <a href="javascript:void(0)"><i class="las la-times"></i></a>
                                </div>
                                <div id="menu">
                                    <ul class="main-menu list-style">
                                        <li class="has-children">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="has-children">
                                            <a href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="has-children">
                                            <a href="{{route('projects')}}">Projects</a>
                                        </li>
                                        <li class="has-children">
                                            <a href="{{route('shop')}}">Shop</a>
                                        </li>
                                        </li>
                                        <li class="has-children">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-bar-wrap">

                            <button class="searchbtn xl-none" type="button"><i class="flaticon-loupe"></i></button>
                            <div class="mobile-top-bar xl-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="mobile-menu xl-none">
                                <a href="javascript:void(0)"><i class="las la-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="search-area">
        <div class="container pos-rel">
            <button type="button" class="close-searchbox">
                <i class="las la-times"></i>
            </button>
            <form action="#">
                <div class="form-group">
                    <input type="search" placeholder="Search Here" autofocus>
                </div>
            </form>
        </div>
    </div>

    @yield('content')

    <footer class="footer-wrap bg-f footer-bg-1">
        <div class="footer-top pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-widget-wrap">
                            <div class="footer-widget">
                                <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png"
                                                                              alt="Image"></a>
                                <p class="comp-desc">
                                    Lorem ipsum dolor elit amet, consetur quo elit, sed eiusmo tempor corporis
                                    itaque incidunt ut labore et dolore magna aliqua ipsum nostrum Lorem ipsum
                                    dolor
                                    sit suspend.
                                </p>
                                <ul class="social-profile style2 list-style">
                                    <li><a target="_blank" href="https://facebook.com/"><i
                                                class="flaticon-facebook-app-symbol"></i> </a></li>
                                    <li><a target="_blank" href="https://twitter.com/"> <i class="flaticon-twitter"></i>
                                        </a></li>
                                    <li><a target="_blank" href="https://linkedin.com/"> <i
                                                class="flaticon-linkedin-1"></i> </a></li>
                                    <li><a target="_blank" href="https://instagram.com/"> <i
                                                class="flaticon-instagram"></i> </a></li>
                                </ul>
                            </div>
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Useful Link</h4>
                                <ul class="footer-menu list-style">
                                    <li><a href="{{ route('services') }}" target="_blank"><i class="flaticon-right-arrow-1"></i>Services
                                            Us</a></li>
                                    <li><a href="{{route('projects')}}" target="_blank"><i class="flaticon-right-arrow-1"></i>Projects
                                            Us</a></li>
                                    <li><a href="{{route('shop')}}" target="_blank"><i class="flaticon-right-arrow-1"></i>Shop</a></li>
                                    <li><a href="{{ route('contact') }}" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Our Services</h4>
                                <ul class="footer-menu list-style">
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>CCTV Installation</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Finger Print Access</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>HD IP Cameras</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Home Security</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Door Lock</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Contact us</h4>
                                <div class="contact-item">
                                    <i class="flaticon-placeholder"></i>
                                    <p>Melborne Main St, VIC 3000, Melborne, Australia</p>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-message-1"></i>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#dab2bfb6b6b59ab1bcb6b5adf4b9b5b7"><span
                                            class="__cf_email__" data-cfemail="79111c15151639121f15160e571a1614">[email&#160;protected]</span></a>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-phone-call"></i>
                                    <a href="tel:920023456789">+9200 (2) 345 6789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copyright">
                <p><span class="las la-copyright"></span>
                    <script data-cfasync="false"
                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="index.html">Kflow</a>. All Rights Reserved
                    By <a href="https://hibootstrap.com/">ITPark</a></p>
            </div>
        </div>
    </footer>

</div>


<a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/swiper-min.js"></script>
<script src="assets/js/jquery-magnific-popup.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>
