@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-3">
            <div class="overlay bg-russian op-8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>About Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                <div class="row gx-5 align-items-center">
                    <div class="col-xl-6">
                        <div class="about-img-wrap">
                            <div class="about-img-1 bg-f"></div>
                            <div class="about-img-2 bg-f"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-content">
                            <div class="content-title style1 mb-20">
                                <span>About us</span>
                                <h2>Dedicated Team With Ontime Response The Leader In Protecting</h2>
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quas tenetur, id quam ab eligendi nostrum eum temporibus delectus! Odit debitis aliquam esse hic vel ipsa id quisquam assumenda dolorum.</p>
                            <ul class="feature-list style1 list-style mb-0">
                                <li><span><i class="flaticon-checkmark"></i></span>
                                    <h5>Schedule Your Tasks</h5>
                                    <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit tempor incidunt ut aliqua dolor amet sit adhoc.</p>
                                </li>
                                <li><span><i class="flaticon-checkmark"></i></span>
                                    <h5>Manage By Control Panel</h5>
                                    <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit tempor incidunt ut aliqua dolor amet sit adhoc.</p>
                                </li>
                                <li><span><i class="flaticon-checkmark"></i></span>
                                    <h5>Smarter Wireless Applications</h5>
                                    <p>Lorem ipsum dolor sit amet, consectur dolor adicing elit, sed do eiusmod sit tempor incidunt ut aliqua dolor amet sit adhoc.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="service-wrap ptb-100">
            <div class="container">
                <div class="section-title style1 text-center mb-40">
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
                                        <h3 class="service-title"><a href="service-details.html">Finger Print
                                                Access</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                            incididunt ut lab
                                            et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span>
                                            <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">Closed Circuit
                                                Cameras</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                            incididunt
                                            ut lab
                                            et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span>
                                            <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">CCTV
                                                Installation</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                            incididunt
                                            ut lab
                                            et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span>
                                            <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">Smart Home
                                                System</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                            incididunt
                                            ut lab
                                            et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span>
                                            <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">Security
                                                Consulting</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                            incididunt
                                            ut lab
                                            et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span>
                                            <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">Video Analytics
                                                System</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor
                                            incididunt
                                            ut lab
                                            et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span>
                                            <i class="flaticon-right-arrow-1"></i></a>
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
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quas tenetur, id quam
                                ab
                                eligendi nostrum eum temporibus delectus! Odit debitis aliquam esse hic vel ipsam
                                id
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
                            <a href="service-details.html" class="btn style2"><span>Learn More</span> <i class="flaticon-right-arrow-1"></i></a>
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
                <div class="section-title style1 text-center mb-40">
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
                                <h2><span class="odometer" data-count="16">00</span> </h2>
                                <p>Years On The Market</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="counter-card style1">
                            <span class="counter-icon bg-overlay"><i class="flaticon-group"></i></span>
                            <div class="counter-info">
                                <h2><span class="odometer" data-count="120">00</span> </h2>
                                <p>Professional Team</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="counter-card style1">
                            <span class="counter-icon bg-overlay"><i class="flaticon-technology"></i></span>
                            <div class="counter-info">
                                <h2><span class="odometer" data-count="860">00</span> </h2>
                                <p>Dealer Equipment </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="counter-card style1">
                            <span class="counter-icon bg-overlay"><i class="flaticon-target"></i></span>
                            <div class="counter-info">
                                <h2><span class="odometer" data-count="500">00</span> </h2>
                                <p>Business Objects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="testimonial-wrap ptb-100">
            <div class="container">
                <div class="row align-items-end mb-40">
                    <div class="col-lg-8 col-md-9">
                        <div class="section-title style1">
                            <span>Client's Feedback</span>
                            <h2>What Our Client Say's</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adiping elit, seiusmod tempor incididu
                                labore et
                                dolore magna aliqua. consectetur adipiscing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end col-md-3 sm-none">
                        <div class="testimonial-pagination"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
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
                                        <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Facere, necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id
                                            tempore
                                            provident pariatur.</p>
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
                                        <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Facere, necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id
                                            tempore
                                            provident pariatur.</p>
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
                                        <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Facere, necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id
                                            tempore
                                            provident pariatur.</p>
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
                                        <p class="client-quote">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Facere, necessitatibus nostrum! Illo fuga tenetur nemo ducimus, id
                                            tempore
                                            provident pariatur.</p>
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
                </div>
            </div>
        </section>



        <div class="container">
            <div class="newsleter-wrap style4">
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


        <footer class="footer-wrap bg-f footer-bg-1">
            <div class="footer-top pb-70">
                <div class="container">
                    <div class="footer-widget-wrap">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png" alt="Image"></a>
                            <p class="comp-desc">Lorem ipsum dolor elit amet, consetur quo elit, sed eiusmo tempor corporis itaque incidunt ut labore et dolore magna aliqua ipsum nostrum Lorem ipsum dolor sit suspend.</p>
                            <ul class="social-profile style2 list-style">
                                <li><a target="_blank" href="https://facebook.com/"><i class="flaticon-facebook-app-symbol"></i> </a></li>
                                <li><a target="_blank" href="https://twitter.com/"> <i class="flaticon-twitter"></i> </a></li>
                                <li><a target="_blank" href="https://linkedin.com/"> <i class="flaticon-linkedin-1"></i> </a></li>
                                <li><a target="_blank" href="https://instagram.com/"> <i class="flaticon-instagram"></i> </a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Useful Link</h4>
                            <ul class="footer-menu list-style">
                                <li><a href="about.html" target="_blank"><i class="flaticon-right-arrow-1"></i>About Us</a></li>
                                <li><a href="shop-left-sidebar.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Our Products</a></li>
                                <li><a href="contact.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Help Desk</a></li>
                                <li><a href="privacy-policy.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Privacy Policy</a></li>
                                <li><a href="terms-conditions.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Our Services</h4>
                            <ul class="footer-menu list-style">
                                <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>CCTV Installation</a></li>
                                <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Finger Print Access</a></li>
                                <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>HD IP Cameras</a></li>
                                <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Home Security</a></li>
                                <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Door Lock</a></li>
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
                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#a7cfc2cbcbc8e7ccc1cbc8d089c4c8ca"><span class="__cf_email__" data-cfemail="ddb5b8b1b1b29db6bbb1b2aaf3beb2b0">[email&#160;protected]</span></a>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-phone-call"></i>
                                <a href="tel:920023456789">+9200 (2) 345 6789</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">
                    <p><span class="las la-copyright"></span><script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> <a href="index.html">Kflow</a>. All Rights Reserved By <a href="https://hibootstrap.com/">HiBootstrap</a></p>
                </div>
            </div>
        </footer>

    </div>
    </div>


    <a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>

@endsection
