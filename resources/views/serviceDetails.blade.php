@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-2">
            <div class="overlay bg-russian op-7"></div>
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Service Details</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services-one.html">Services</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>


        <section class="service-details-wrap pt-100 pb-100">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
                        <div class="sidebar style2">
                            <div class="sidebar-widget search-box ">
                                <div class="form-group">
                                    <input type="search" placeholder="Search Services">
                                    <button type="submit"> <i class="flaticon-search"></i></button>
                                </div>
                            </div>
                            <div class="sidebar-widget categories">
                                <h4>Service Category</h4>
                                <div class="category-box style2">
                                    <ul class="list-style">
                                        <li><a class="active" href="services-one.html">Finger Print Access<i class="flaticon-right-arrow-angle"></i></a></li>
                                        <li><a href="services-one.html">Closed Circuit Cameras<i class="flaticon-right-arrow-angle"></i></a></li>
                                        <li><a href="services-one.html">CCTV Installation<i class="flaticon-right-arrow-angle"></i></a></li>
                                        <li><a href="services-one.html">Video Analytics System<i class="flaticon-right-arrow-angle"></i></a></li>
                                        <li><a href="services-one.html">Smart Home System<i class="flaticon-right-arrow-angle"></i></a></li>
                                        <li><a href="services-one.html">Security Consulting<i class="flaticon-right-arrow-angle"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget contact-widget bg-f">
                                <div class="overlay op-8 bg-russian"></div>
                                <span class="contact-icon">
<i class="flaticon-teacher"></i>
</span>
                                <h5>Service Technician</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adicing elit. Tenetur veniam fugit recious culpa amet exerci tationem fuga amet sit dolor assumenda.</p>
                                <a href="tel:18001234567"><i class="flaticon-phone-call-1"></i>1800-123-4567</a>
                            </div>
                            <div class="sidebar-widget doc-widget">
                                <h4>Service Documents</h4>
                                <div class="download-doc-btn">
                                    <a href="assets/img/services/file.pdf"><i class="flaticon-download"></i>Company Profile <span>pdf</span></a>
                                    <a href="assets/img/services/file.pdf"><i class="flaticon-download"></i>Service Details <span>Doc</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
                        <div class="service-desc">
                            <a class="service-img" data-fancybox="gallery" href="assets/img/services/single-service-1.jpg">
                                <img src="assets/img/services/single-service-1.jpg" alt="Image">
                            </a>
                            <h2>Finger Print Access</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia excepturi eaque, corporis nulla maxime inventore magni reprehenderit consequatur deserunt, eligendi totam voluptas natus maiores commodi provident. In cumque similique quo placeat distinctio tenetur eum voluptatum, voluptatibus perferendis nesciunt facilis nostrum eligendi totam voluptas natus maiores commodi provident. In cumque similique.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates odio omnis dolor numquam dignissimos enim assumenda itaque nemo tenetur dolores incidunt, animi quo quae odit corporis, nihil architecto inventore placeat repellat necessitatibus quaerat earum voluptatum debitis. Aspernatur fugit velit itaque atque quos, deserunt veritatis nulla assumenda illum sapiente nobis ipsa.</p>
                            <h2>What You Will Get From Us</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates odio omnis dolor numquam dignissimos enim assumenda itaque nemo tenetur dolores incidunt, animi quo quae odit corporis, nihil architecto inventore placeat.</p>
                            <h2>Services We Offered</h2>
                            <ul class="content-feature-list list-style">
                                <li><i class="las la-check-circle"></i>Fingerprint Door Access</li>
                                <li><i class="las la-check-circle"></i>CCTV System Access</li>
                                <li><i class="las la-check-circle"></i>Automated Gate System</li>
                                <li><i class="las la-check-circle"></i>Fire Alarm System</li>
                                <li><i class="las la-check-circle"></i>Transport Security</li>
                                <li><i class="las la-check-circle"></i>Access Control System</li>
                                <li><i class="las la-check-circle"></i>Smart Indoor Camera.</li>
                                <li><i class="las la-check-circle"></i>Antena Tagging System</li>
                            </ul>
                            <div class="row gx-4 align-items-center">
                                <div class="col-md-6  mb-30">
                                    <a data-fancybox="gallery" href="assets/img/services/single-service-3.jpg">
                                        <img class="w-100" src="assets/img/services/single-service-3.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="col-md-6  mb-30">
                                    <a data-fancybox="gallery" href="assets/img/services/single-service-2.jpg">
                                        <img class="w-100" src="assets/img/services/single-service-2.jpg" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <h2>We Give The Best Services</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates odio omnis dolor numquam dignissimos enim assumenda itaque nemo tenetur dolores incidunt, animi quo quae odit corporis, nihil architecto inventore placeat repellat Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates odio omnis dolor numquam dignissimos enim assumenda itaque nemo. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="service-wrap pb-100">
            <div class="container">
                <div class="section-title style1 text-center mb-40">
                    <span>Check Out More</span>
                    <h2>Related Services</h2>
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
                                        <span class="service-blur-icon"><i class="flaticon-finger-print"></i></span>
                                        <span class="service-icon">
<i class="flaticon-finger-print"></i>
</span>
                                        <h3 class="service-title"><a href="service-details.html">Finger Print Access</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt ut lab et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span> <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">CCTV Installation</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt ut lab et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span> <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">Smart Home System</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt ut lab et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span> <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">Security Consulting</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt ut lab et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span> <i class="flaticon-right-arrow-1"></i></a>
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
                                        <h3 class="service-title"><a href="service-details.html">Video Analytics System</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur selised do eiusmod tempor incididunt ut lab et aaliqua. Quis ipsum suspendisse eiusmod</p>
                                        <a href="service-details.html" class="btn style2"><span>Learn More</span> <i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="container">
        <div class="newsleter-wrap style3">
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
