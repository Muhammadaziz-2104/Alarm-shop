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
                            <h2>Contact Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-wrap pt-100 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-item-box">
                            <div class="contact-icon">
                                <i class="flaticon-address"></i>
                            </div>
                            <h3>Location</h3>
                            <p>Boat House,152/21 city street road,NY 6NG,UK</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-item-box">
                            <div class="contact-icon">
                                <i class="flaticon-telephone-1"></i>
                            </div>
                            <h3>Call Us</h3>
                            <a href="tel:920023456789">+9200 (2) 345 6789</a>
                            <a href="tel:920023456788">+9200 (2) 345 6788</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-item-box">
                            <div class="contact-icon">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <h3>Mail Us</h3>
                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#731b161f1f1c3318151f1c045d101c1e"><span class="__cf_email__" data-cfemail="38505d54545778535e54574f165b5755">[email&#160;protected]</span></a>
                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#224b4c444d6249444e4d550c414d4f"><span class="__cf_email__" data-cfemail="553c3b333a153e33393a227b363a38">[email&#160;protected]</span></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-item-box">
                            <div class="contact-icon">
                                <i class="flaticon-time-left"></i>
                            </div>
                            <h3>Office Hours</h3>
                            <p>9:00 AM- 6:00 PM(Mon-Sat)</p>
                            <p>Sunday Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form-wrap pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1 col-md-12">
                        <div class="section-title style1 text-center mb-40">
                            <span>Get In Touch</span>
                            <h2>We Are Always Here For You To Give Best Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-form">
                            <form class="form-wrap" id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Full Name *" id="name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required placeholder="Email Address *" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" placeholder="Phone Number *" id="phone_number" required data-error="Please enter your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" placeholder="Subject *" id="msg_subject" required data-error="Please enter your subject*">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn style1 d-block w-100">Send
                                            Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="contact-widget bg-f style2">
                            <div class="overlay op-8 bg-russian"></div>
                            <span class="contact-icon">
<i class="flaticon-teacher"></i>
</span>
                            <h5>Service Technician</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur veniam fugit,
                                reiciendis culpa exercitationem fuga?</p>
                            <a href="tel:18001234567"><i class="flaticon-phone-call-1"></i>1800-123-4567</a>
                        </div>
                    </div>
                </div>
            </div>
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


        <footer class="footer-wrap bg-f footer-bg-1">
            <div class="footer-top pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-widget-wrap">
                                <div class="footer-widget">
                                    <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png" alt="Image"></a>
                                    <p class="comp-desc">
                                        Lorem ipsum dolor elit amet, consetur quo elit, sed eiusmo tempor corporis
                                        itaque incidunt ut labore et dolore magna aliqua ipsum nostrum Lorem ipsum
                                        dolor
                                        sit suspend.
                                    </p>
                                    <ul class="social-profile style2 list-style">
                                        <li><a target="_blank" href="https://facebook.com/"><i class="flaticon-facebook-app-symbol"></i> </a></li>
                                        <li><a target="_blank" href="https://twitter.com/"> <i class="flaticon-twitter"></i>
                                            </a></li>
                                        <li><a target="_blank" href="https://linkedin.com/"> <i class="flaticon-linkedin-1"></i> </a></li>
                                        <li><a target="_blank" href="https://instagram.com/"> <i class="flaticon-instagram"></i> </a></li>
                                    </ul>
                                </div>
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Useful Link</h4>
                                    <ul class="footer-menu list-style">
                                        <li><a href="about.html" target="_blank"><i class="flaticon-right-arrow-1"></i>About Us</a></li>
                                        <li><a href="contact.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Contact Us</a></li>
                                        <li><a href="contact.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Help Desk</a></li>
                                        <li><a href="privacy-policy.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Privacy Policy</a></li>
                                        <li><a href="terms-conditions.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Terms &amp;
                                                Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Our Services</h4>
                                    <ul class="footer-menu list-style">
                                        <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>CCTV Installation</a></li>
                                        <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Finger Print Access</a></li>
                                        <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>HD IP Cameras</a></li>
                                        <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Home Security</a></li>
                                        <li><a href="service-details.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Door Lock</a>
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
                                        <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#fa929f969695ba919c96958dd4999597"><span class="__cf_email__" data-cfemail="771f121b1b18371c111b18005914181a">[email&#160;protected]</span></a>
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
                    <p><span class="las la-copyright"></span><script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> <a href="index.html">Kflow</a>. All Rights Reserved By <a href="https://hibootstrap.com/">HiBootstrap</a></p>
                </div>
            </div>
        </footer>

    </div>
    </div>


    <a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>


@endsection
