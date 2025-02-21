<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
<link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/sass/style.css')}}" rel="stylesheet">


    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/sass/style.css" rel="stylesheet">

    </head>
        
    <body>

        <!-- start page-wrapper -->
        <div class="page-wrapper">
            <!-- start preloader -->
            <div class="preloader">
                <div class="vertical-centered-box">
                    <div class="content">
                        <div class="loader-circle"></div>
                        <div class="loader-line-mask">
                            <div class="loader-line"></div>
                        </div>
                        <img src="assets/images/preloader.png" alt="">
                    </div>
                </div>
            </div>
            <!--  cursor style -->
            <div class="cursor"></div>
            <div class="cursor2"></div>

            
                {{ $slot }}

        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="assets/images/logo-2.svg" alt="blog">
                                </div>
                                <p>Mattis inelit neque quis donec eleifnd amet. Amet sed et cursus eu euismod.
                                    Egestas
                                    in morbi tristique.</p>

                                <div class="social-widget">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog.html">Latest News</a></li>
                                    <li><a href="project.html">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget s2">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="project.html">Projects</a></li>
                                    <li><a href="login.html">Sign Up</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact Us</h3>
                                </div>
                                <ul>
                                    <li><img src="assets/images/mail.svg" alt=""><span>manit@gmail.com</span>
                                    </li>
                                    <li><img src="assets/images/phone.svg" alt=""> <span>(704) 555-0127
                                            <br>(208) 555-0112</span></li>
                                    <li><img src="assets/images/map.svg" alt=""><span>4517 Washington Ave. <br>
                                            Manchter, Kentucky 495</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row g-0">
                        <div class="col col-lg-6 col-12">
                            <p class="copyright"> Copyright &copy; 2024 Manit by <a href="index.html">wpOceans</a>. All
                                Rights Reserved.</p>
                        </div>
                        <div class="col col-lg-6 col-12">
                            <ul>
                                <li><a href="privace.html">Privace & Policy</a></li>
                                <li><a href="terms.html">Terms</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
