   <!-- Start header -->
   <header id="header">
            <div class="wpo-site-header s1">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg"
                                            alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">

                                    <li class="menu-item-has-children">
                                            <a href="/">Home</a>
                                        </li>
                                        <li><a class="active" href="/about">About</a></li>
                                        <li><a class="active" href="/login">Login</a><li>
                                        <li><a class="active" href="/register">Register</a><li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                
                                                {{ __('Log Out') }}

                                            </x-responsive-nav-link>
                                        <!-- <li class="menu-item-has-children">
                                            <a class="active" href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a class="active" href="index.html">Home style 1</a></li>
                                                <li><a href="index-2.html">Home style 2</a></li>
                                                <li><a href="index-3.html">Home style 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services-single.html">Services Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="project.html">Portfolio</a></li>
                                                <li><a href="project-single.html">Portfolio Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.html">Blog details right sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog details left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.html">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="testimonials.html">testimonials</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li> -->
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-3 col-md-2 col-2">
                                <div class="header-right">
                                    <a href="tel:+6845550102" class="call-number">
                                        <div class="icon">
                                            <img src="assets/images/telephone.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <span class="title">Hotline 24/7</span>
                                            <span class="number">+(684) 555-0102</span>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->

        
