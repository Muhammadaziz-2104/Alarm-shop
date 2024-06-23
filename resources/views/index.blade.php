@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')
    <section class="hero-wrap style1 hero-bg-1">
        <div class="overlay op-9 bg-russian"></div>
        <div class="container pos-rel">
            <ul class="social-profile style4 list-style md-none">
                <li><a target="_blank" href="https://facebook.com/"><i class="flaticon-facebook-app-symbol"></i>
                    </a>
                </li>
                <li><a target="_blank" href="https://twitter.com/"> <i class="flaticon-twitter"></i>
                    </a></li>
                <li><a target="_blank" href="https://linkedin.com/"> <i class="flaticon-google-glass-logo"></i> </a>
                </li>
                <li><a target="_blank" href="https://instagram.com/"> <i class="flaticon-linkedin"></i> </a>
                </li>
            </ul>
            <div class="row gx-5 align-items-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="hero-content">
                        <span data-aos="fade-up" data-aos-duration="1000">Video Security Company</span>
                        <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">A New Freedom Of
                            Security Enjoy The <span>Security Of Joy</span></h1>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            Lorem ipsum dolor sit amet, consectetur adiscing elit, sed do suspendisse tempor incididunt
                            labore et dolore magna aliqua. Quis ipsum eiusmod.
                        </p>
                        <a href="{{route('about')}}" class="btn style1"><span>Learn More</span> <i
                                class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-12">
                    <div class="tab-content hero-tab-content">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <div class="hero-tab-item">
                                <img src="assets/img/hero/hero-slider-1.png" alt="Image">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_2" role="tabpanel">
                            <div class="hero-tab-item">
                                <img src="assets/img/hero/hero-slider-2.png" alt="Image">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_3" role="tabpanel">
                            <div class="hero-tab-item">
                                <img src="assets/img/hero/hero-slider-3.png" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="hero-tablist-wrap">
                        <span>Thumbnails <i class="flaticon-right-arrow-1"></i></span>
                        <ul class="nav nav-tabs hero-tablist" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1"
                                        type="button" role="tab"><img src="assets/img/hero/hero-thumb-1.png"
                                                                      alt="Image"></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_2" type="button"
                                        role="tab"><img src="assets/img/hero/hero-thumb-3.png" alt="Image"></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3" type="button"
                                        role="tab"><img src="assets/img/hero/hero-thumb-2.png" alt="Image"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="category-wrap pt-100 pb-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="category-card bg-russian">
                        <span class="cat-count">01</span>
                        <span class="cat-icon"><i class="flaticon-home-1"></i></span>
                        <div class="cat-info">
                            <h3><a href="service-details.html">Home Security</a></h3>
                            <p>Lorem ipsum dolor sit amet, contur selisica do mod tempor incidunt ut labet
                                aliqua at quis sit ipsum suspensse dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card bg-russian">
                        <span class="cat-count">02</span>
                        <span class="cat-icon"><i class="flaticon-portfolio"></i></span>
                        <div class="cat-info">
                            <h3><a href="service-details.html">Business Security</a></h3>
                            <p>Lorem ipsum dolor sit amet, contur selisica do mod tempor incidunt ut labet
                                aliqua at quis sit ipsum suspensse dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card bg-russian">
                        <span class="cat-count">03</span>
                        <span class="cat-icon"><i class="flaticon-information"></i></span>
                        <div class="cat-info">
                            <h3><a href="service-details.html">Information Security</a></h3>
                            <p>Lorem ipsum dolor sit amet, contur selisica do mod tempor incidunt ut labet
                                aliqua at quis sit ipsum suspensse dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-wrap style1 ptb-100 bg-f about-bg-1">
        <img src="assets/img/about/cctv-1.png" alt="Image" class="about-shape-1 lg-none">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-6">
                    <div class="about-img-wrap">
                        <div class="about-img-1 bg-f"></div>
                        <div class="about-img-2 bg-f"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content">
                        <div class="content-title style1 mb-15">
                            <span>About us</span>
                            <h2>Dedicated Team With Ontime Response The Leader In Protecting</h2>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quas tenetur, id quam ab
                            eligendi nostrum eum temporibus delectus! Odit debitis aliquam esse hic vel ipsam id
                            quisquam assumenda dolorum.</p>
                        <ul class="feature-list style1 list-style ">
                            <li><span><i class="flaticon-checkmark"></i></span>
                                <h5>Schedule Your Tasks</h5>
                                <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit
                                    tempor
                                    incidunt ut aliqua dolor amet sit adhoc.</p>
                            </li>
                            <li><span><i class="flaticon-checkmark"></i></span>
                                <h5>Manage By Control Panel</h5>
                                <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit
                                    tempor
                                    incidunt ut aliqua dolor amet sit adhoc.</p>
                            </li>
                            <li><span><i class="flaticon-checkmark"></i></span>
                                <h5>Smarter Wireless Applications</h5>
                                <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit
                                    tempor
                                    incidunt ut aliqua dolor amet sit adhoc.</p>
                            </li>
                        </ul>
                        <a href="{{route('about')}}" class="btn style1"><span>Learn More</span> <i
                                class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-wrap ptb-100">
        <div class="container">
            <div class="section-title style1 text-center mb-50">
                <span>What We Do</span>
                <h2>We Offer The Best Services</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="service-slider-one owl-carousel">
                        <div class="item">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/service-1.jpg" alt="Image">
                                </div>
                                <div class="service-info">
                                    <span class="service-blur-icon"> <i class="flaticon-finger-print"></i></span>
                                    <span class="service-icon">
    <i class="flaticon-finger-print"></i>
    </span>
                                    <h3 class="service-title"><a href="{{route('sdatails')}}">Finger Print
                                            Access</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                        incididunt ut lab
                                        et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                    <a href="{{route('sdatails')}}" class="btn style2"><span>Learn More</span> <i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/service-2.jpg" alt="Image">
                                </div>
                                <div class="service-info">
                                    <span class="service-blur-icon"> <i class="flaticon-face"></i></span>
                                    <span class="service-icon">
    <i class="flaticon-face"></i>
    </span>
                                    <h3 class="service-title"><a href="{{route('sdatails')}}">Closed Circuit
                                            Cameras</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt
                                        ut lab
                                        et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                    <a href="{{route('sdatails')}}" class="btn style2"><span>Learn More</span> <i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/service-3.jpg" alt="Image">
                                </div>
                                <div class="service-info">
                                    <span class="service-blur-icon"> <i class="flaticon-cctv"></i></span>
                                    <span class="service-icon">
    <i class="flaticon-cctv"></i>
    </span>
                                    <h3 class="service-title"><a href="{{route('sdatails')}}">CCTV Installation</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt
                                        ut lab
                                        et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                    <a href="{{route('sdatails')}}" class="btn style2"><span>Learn More</span> <i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/service-4.jpg" alt="Image">
                                </div>
                                <div class="service-info">
                                    <span class="service-blur-icon"> <i class="flaticon-home-1"></i></span>
                                    <span class="service-icon">
    <i class="flaticon-home-1"></i>
    </span>
                                    <h3 class="service-title"><a href="{{route('sdatails')}}">Smart Home System</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt
                                        ut lab
                                        et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                    <a href="{{route('sdatails')}}" class="btn style2"><span>Learn More</span> <i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/service-5.jpg" alt="Image">
                                </div>
                                <div class="service-info">
                                    <span class="service-blur-icon"> <i class="flaticon-shield"></i></span>
                                    <span class="service-icon">
    <i class="flaticon-shield"></i>
    </span>
                                    <h3 class="service-title"><a href="{{route('sdatails')}}">Security Consulting</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt
                                        ut lab
                                        et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                    <a href="{{route('sdatails')}}" class="btn style2"><span>Learn More</span> <i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="assets/img/services/service-6.jpg" alt="Image">
                                </div>
                                <div class="service-info">
                                    <span class="service-blur-icon"> <i class="flaticon-analytics"></i></span>
                                    <span class="service-icon">
    <i class="flaticon-analytics"></i>
    </span>
                                    <h3 class="service-title"><a href="{{route('sdatails')}}">Video Analytics
                                            System</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                        incididunt
                                        ut lab
                                        et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                    <a href="{{route('sdatails')}}" class="btn style2"><span>Learn More</span> <i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-choose-wrap style1 ptb-100 bg-f wh-bg-1">
        <div class="container">
            <div class="row gx-5 ">
                <div class="col-xl-6">
                    <div class="wh-content">
                        <div class="content-title style1 mb-20">
                            <span>Why Choose Us</span>
                            <h2>Choose Your Life, Choose Your Security, We Ensure Your Security</h2>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quas tenetur, id quam ab
                            eligendi nostrum eum temporibus delectus! Odit debitis aliquam esse hic vel ipsam id
                            quisquam assumenda dolorum.</p>
                        <ul class="feature-list style1 list-style">
                            <li><span><i class="flaticon-dollar"></i></span>
                                <h5><a href="pricing-plan.html">Affordable Price</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit
                                    tempor
                                    incidunt ut aliqua dolor amet sit adhoc.</p>
                            </li>
                            <li><span><i class="flaticon-user-3"></i></span>
                                <h5><a href="team.html">Expert &amp; Well-trained Staff</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit
                                    tempor
                                    incidunt ut aliqua dolor amet sit adhoc.</p>
                            </li>
                            <li><span><i class="flaticon-support-1"></i></span>
                                <h5><a href="contact.html">24/7 Hours Support</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit
                                    tempor
                                    incidunt ut aliqua dolor amet sit adhoc.</p>
                            </li>
                        </ul>
                        <a href="{{route('sdatails')}}" class="btn style2"><span>Learn More</span> <i
                                class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="wh-img-wrap">
                        <div class="wh-img-1 bg-f"></div>
                        <div class="wh-img-2 bg-f"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-wrap style1 ptb-100">
        <div class="container">
            <div class="section-title style1 text-center mb-50">
                <span>Our Expert Worker</span>
                <h2>Our Special Expert Worker</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="team-slider-one owl-carousel">
                        <div class="item">
                            <div class="team-card style1">
                                <div class="member-img">
                                    <img src="assets/img/team/member-1.jpg" alt="Image">
                                </div>
                                <div class="member-info-wrap">
                                    <div class="member-name">
                                        <h4>Nashid Martines</h4>
                                        <span>Founder</span>
                                    </div>
                                    <div class="member-social-profile">
                                        <span><i class="flaticon-share-2"></i></span>
                                        <ul class="social-profile style2 list-style">
                                            <li><a target="_blank" href="https://facebook.com/"><i
                                                        class="flaticon-facebook-app-symbol"></i>
                                                </a>
                                            </li>
                                            <li><a target="_blank" href="https://twitter.com/"> <i
                                                        class="flaticon-twitter"></i>
                                                </a></li>
                                            <li><a target="_blank" href="https://pinterest.com/"> <i
                                                        class="flaticon-pinterest"></i> </a>
                                            </li>
                                            <li><a target="_blank" href="https://linkedin.com/"> <i
                                                        class="flaticon-linkedin"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-card style1">
                                <div class="member-img">
                                    <img src="assets/img/team/member-2.jpg" alt="Image">
                                </div>
                                <div class="member-info-wrap">
                                    <div class="member-name">
                                        <h4>Konne BackField</h4>
                                        <span>CEO</span>
                                    </div>
                                    <div class="member-social-profile">
                                        <span><i class="flaticon-share-2"></i></span>
                                        <ul class="social-profile style2 list-style">
                                            <li><a target="_blank" href="https://facebook.com/"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/"> <i
                                                        class="flaticon-twitter"></i> </a></li>
                                            <li><a target="_blank" href="https://pinterest.com/"> <i
                                                        class="flaticon-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" href="https://linkedin.com/"> <i
                                                        class="flaticon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-card style1">
                                <div class="member-img">
                                    <img src="assets/img/team/member-3.jpg" alt="Image">
                                </div>
                                <div class="member-info-wrap">
                                    <div class="member-name">
                                        <h4>Hackson Willing</h4>
                                        <span>Manager</span>
                                    </div>
                                    <div class="member-social-profile">
                                        <span><i class="flaticon-share-2"></i></span>
                                        <ul class="social-profile style2 list-style">
                                            <li><a target="_blank" href="https://facebook.com/"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/"> <i
                                                        class="flaticon-twitter"></i> </a></li>
                                            <li><a target="_blank" href="https://pinterest.com/"> <i
                                                        class="flaticon-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" href="https://linkedin.com/"> <i
                                                        class="flaticon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-card style1">
                                <div class="member-img">
                                    <img src="assets/img/team/member-4.jpg" alt="Image">
                                </div>
                                <div class="member-info-wrap">
                                    <div class="member-name">
                                        <h4>Robert Wilson</h4>
                                        <span>Senior Technician</span>
                                    </div>
                                    <div class="member-social-profile">
                                        <span><i class="flaticon-share-2"></i></span>
                                        <ul class="social-profile style2 list-style">
                                            <li><a target="_blank" href="https://facebook.com/"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/"> <i
                                                        class="flaticon-twitter"></i> </a></li>
                                            <li><a target="_blank" href="https://pinterest.com/"> <i
                                                        class="flaticon-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" href="https://linkedin.com/"> <i
                                                        class="flaticon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-card style1">
                                <div class="member-img">
                                    <img src="assets/img/team/member-5.jpg" alt="Image">
                                </div>
                                <div class="member-info-wrap">
                                    <div class="member-name">
                                        <h4>Michale Nikola</h4>
                                        <span>Chief Engineer</span>
                                    </div>
                                    <div class="member-social-profile">
                                        <span><i class="flaticon-share-2"></i></span>
                                        <ul class="social-profile style2 list-style">
                                            <li><a target="_blank" href="https://facebook.com/"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/"> <i
                                                        class="flaticon-twitter"></i> </a></li>
                                            <li><a target="_blank" href="https://pinterest.com/"> <i
                                                        class="flaticon-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" href="https://linkedin.com/"> <i
                                                        class="flaticon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-card style1">
                                <div class="member-img">
                                    <img src="assets/img/team/member-6.jpg" alt="Image">
                                </div>
                                <div class="member-info-wrap">
                                    <div class="member-name">
                                        <h4>Tony Blare</h4>
                                        <span>HR Manager</span>
                                    </div>
                                    <div class="member-social-profile">
                                        <span><i class="flaticon-share-2"></i></span>
                                        <ul class="social-profile style2 list-style">
                                            <li><a target="_blank" href="https://facebook.com/"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/"> <i
                                                        class="flaticon-twitter"></i> </a></li>
                                            <li><a target="_blank" href="https://pinterest.com/"> <i
                                                        class="flaticon-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" href="https://linkedin.com/"> <i
                                                        class="flaticon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="counter-wrap style1 bg-f counter-bg-1 pt-100 pb-75">
        <div class="overlay op-8 bg-russian"></div>
        <div class="container pos-rel">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="counter-card style1">
                        <span class="counter-icon "><i class="flaticon-calendar-2"></i></span>
                        <div class="counter-info">
                            <h2><span class="odometer" data-count="16">00</span></h2>
                            <p>Years On The Market</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="counter-card style1">
                        <span class="counter-icon bg-overlay"><i class="flaticon-group"></i></span>
                        <div class="counter-info">
                            <h2><span class="odometer" data-count="120">00</span></h2>
                            <p>Professional Team</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="counter-card style1">
                        <span class="counter-icon bg-overlay"><i class="flaticon-technology"></i></span>
                        <div class="counter-info">
                            <h2><span class="odometer" data-count="860">00</span></h2>
                            <p>Dealer Equipment </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="counter-card style1">
                        <span class="counter-icon bg-overlay"><i class="flaticon-target"></i></span>
                        <div class="counter-info">
                            <h2><span class="odometer" data-count="500">00</span></h2>
                            <p>Business Objects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="testimonial-wrap ptb-100">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="section-title style1">
                        <span>Client's Feedback</span>
                        <h2>What Our Client Say's</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adiping elit, seiusmod tempor incididu labore et
                            dolore magna aliqua. consectetur adipiscing.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 text-lg-end col-md-3 sm-none">
                    <div class="testimonial-pagination"></div>
                </div>
            </div>
            <div class="swiper-container testimonial-slider-one">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item style1">
                            <span class="quote-icon"><i class="flaticon-right-quote"></i></span>
                            <div class="client-info">
                                <h5>Richard Duexia</h5>
                                <span>Enterprenour</span>
                                <ul class="ratings list-style">
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipis icing elit. Facere,
                                necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id tempore provident.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style1">
                            <span class="quote-icon"><i class="flaticon-right-quote"></i></span>
                            <div class="client-info">
                                <h5>Emma Watson</h5>
                                <span>Teacher</span>
                                <ul class="ratings list-style">
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipis icing elit. Facere,
                                necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id tempore provident.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style1">
                            <span class="quote-icon"><i class="flaticon-right-quote"></i></span>
                            <div class="client-info">
                                <h5>Mark Joe</h5>
                                <span>Engineer</span>
                                <ul class="ratings list-style">
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipis icing elit. Facere,
                                necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id tempore provident.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style1">
                            <span class="quote-icon"><i class="flaticon-right-quote"></i></span>
                            <div class="client-info">
                                <h5>Liaya Duexia</h5>
                                <span>Housewife</span>
                                <ul class="ratings list-style">
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipis icing elit. Facere,
                                necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id tempore provident.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container testimonial-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="thumb-item">
                            <img src="assets/img/testimonials/client-1.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="thumb-item">
                            <img src="assets/img/testimonials/client-2.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="thumb-item">
                            <img src="assets/img/testimonials/client-3.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="thumb-item">
                            <img src="assets/img/testimonials/client-4.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="thumb-item">
                            <img src="assets/img/testimonials/client-5.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="thumb-item">
                            <img src="assets/img/testimonials/client-6.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="case-wrap style1 ptb-100">
        <div class="container">
            <div class="row mb-50">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="section-title style1">
                        <span>Our Recent Work</span>
                        <h2>Our Special Recent Case Study</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adiping elit, seiusmod tempor incididu labore et
                            dolore magna aliqua. consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="case-slider-one owl-carousel">
                <div class="item">
                    <div class="case-card style1">
                        <div class="case-img">
                            <img src="assets/img/case/case-1.jpg" alt="Image">
                            <div class="case-info-wrap">
                                <div class="case-info">
    <span class="case-category">Commercial
    Security</span>
                                    <h3><a href="project-details.html">Office Security System</a></h3>
                                </div>
                                <a class="read-more" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="case-card style1">
                        <div class="case-img">
                            <img src="assets/img/case/case-2.jpg" alt="Image">
                            <div class="case-info-wrap">
                                <div class="case-info">
    <span class="case-category">Home
    Security</span>
                                    <h3><a href="project-details.html">CCTV Installation</a></h3>
                                </div>
                                <a class="read-more" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="case-card style1">
                        <div class="case-img">
                            <img src="assets/img/case/case-7.jpg" alt="Image">
                            <div class="case-info-wrap">
                                <div class="case-info">
    <span class="case-category">Alarm &
    Lock</span>
                                    <h3><a href="project-details.html">Fingerprint Door Lock</a></h3>
                                </div>
                                <a class="read-more" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="case-card style1">
                        <div class="case-img">
                            <img src="assets/img/case/case-3.jpg" alt="Image">
                            <div class="case-info-wrap">
                                <div class="case-info">
    <span class="case-category">Closed Circuit
    Camera</span>
                                    <h3><a href="project-details.html">Automation System</a></h3>
                                </div>
                                <a class="read-more" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="case-card style1">
                        <div class="case-img">
                            <img src="assets/img/case/case-4.jpg" alt="Image">
                            <div class="case-info-wrap">
                                <div class="case-info">
    <span class="case-category">Closed Circuit
    Camera</span>
                                    <h3><a href="project-details.html">Home Security</a></h3>
                                </div>
                                <a class="read-more" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="case-card style1">
                        <div class="case-img">
                            <img src="assets/img/case/case-5.jpg" alt="Image">
                            <div class="case-info-wrap">
                                <div class="case-info">
                                    <span class="case-category">Home Security</span>
                                    <h3><a href="project-details.html">CCTV Maintenance</a></h3>
                                </div>
                                <a class="read-more" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="case-card style1">
                        <div class="case-img">
                            <img src="assets/img/case/case-6.jpg" alt="Image">
                            <div class="case-info-wrap">
                                <div class="case-info">
    <span class="case-category">Closed Circuit
    Camera</span>
                                    <h3><a href="project-details.html">Industrial Security</a></h3>
                                </div>
                                <a class="read-more" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="newsleter-wrap style1">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-title style1">
                        <h2>Subscribe To Our Newsletter</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="newsletter-form">
                        <input type="email" placeholder="Your Email Address*">
                        <button type="submit">Subscribe <i class="flaticon-right-arrow"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
