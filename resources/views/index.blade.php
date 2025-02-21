<x-guest-layout>

@include('layouts.navigation')


     <!-- static-hero -->
        <section class="static-hero">
            <div class="container-fluid">
                <div class="content">
                    <div class="title">
                        <div class="icon">
                            <img src="{{asset('assets/images/slider/like.svg')}}" alt="">
                        </div>
                        <span>Create Your Dream Project With Us</span>
                    </div>
                    <div class="sub-title">
                        <h2>Best It <span>Solution</span> For
                            Your Business</h2>
                    </div>
                    <p>Your success is our success. We prioritize
                        understanding your unique business requirements,
                        tailoring solutions that not only meet your needs but also exceed your expectations.</p>
                    <div class="hero-btn">
                        <a href="about.html" class="theme-btn"> Get Started<i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="image">
                <img src="{{asset('assets/images/slider/1.png')}}" alt="">
                <div class="bg-shape">
                    <svg width="652" height="668" viewBox="0 0 652 668" fill="none">
                        <path
                            d="M0 367.646C0 360.448 3.86838 353.805 10.129 350.252L622.129 2.95135C635.462 -4.6148 652 5.01565 652 20.3457V648C652 659.046 643.046 668 632 668H20C8.95432 668 0 659.046 0 648V367.646Z" />
                    </svg>

                </div>
            </div>
            <div class="hero-slider">
                <div class="item">
                    <img src="{{asset('assets/images/slider/img-1.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/slider/img-2.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/slider/img-3.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/slider/img-4.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/slider/img-3.jpg')}}" alt="">
                </div>
            </div>
            <div class="award">
                <div class="icon">
                    <img src="{{asset('assets/images/slider/award.svg')}}" alt="">
                </div>
                <div class="text">
                    <h3> <span class="odometer" data-count="25"></span>+</h3>
                    <span>Years Of Experience</span>
                </div>
            </div>
            <div class="shape-1">
                <svg width="362" height="481" viewBox="0 0 362 481" fill="none">
                    <circle cx="121.5" cy="240.5" r="240.5" fill="url(#paint_505)" />
                    <defs>
                        <radialGradient id="paint_505" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(121.5 240.5) rotate(90) scale(240.5)">
                            <stop offset="0" stop-color="#CED0FF" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
            <div class="shape-2">
                <svg width="593" height="593" viewBox="0 0 593 593" fill="none">
                    <circle cx="296.5" cy="296.5" r="296.5" fill="url(#paint0_318)" />
                    <defs>
                        <radialGradient id="paint0_318" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(296.5 296.5) rotate(90) scale(296.5)">
                            <stop offset="0" stop-color="#CED0FF" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
            <div class="shape-3">
                <svg width="358" height="484" viewBox="0 0 358 484" fill="none">
                    <circle cx="296.5" cy="187.5" r="296.5" fill="url(#paint0_rad)" />
                    <defs>
                        <radialGradient id="paint0_rad" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(296.5 187.5) rotate(90) scale(296.5)">
                            <stop offset="0" stop-color="#FBB132" stop-opacity="0.2" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </section>

        <!-- funfact start -->
        <section class="funfact-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h3><span class="odometer" data-count="12"></span>K+</h3>
                            <h4>Project Completed</h4>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h3><span class="odometer" data-count="20"></span>+</h3>
                            <h4>Industry Experience</h4>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h3><span class="odometer" data-count="10"></span>K+</h3>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h3><span class="odometer" data-count="32"></span>+</h3>
                            <h4>Awards Winner</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about start -->
        <section class="about-section section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-12">
                        <div class="about-left-content">
                            <div class="image">
                                <img src="{{asset('assets/images/about/img-1.jpg')}}" alt="">
                            </div>
                            <div class="award-content">
                                <div class="icon">
                                    <img src="{{asset('assets/images/about/award-icon-2.svg')}}" alt="">
                                </div>
                                <h2>Award Winning</h2>
                                <p>We have a history of successfully delivering IT solutions to a great diverse
                                    clientele, from startups to established enterprises.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="about-right-content">
                            <h2 class="title">ABOUT COMPANY</h2>
                            <h3 class="sub-title">Our approach ensures flexibility, adaptability, & rapid response.</h3>
                            <p class="text">Welcome to Manit, where innovation meets implementation, & technology
                                transforms
                                possibilities into realities. Established with a vision to redefine the landscape of IT
                                solutions, we are a dynamic and forward-thinking company committed to delivering
                                cutting-edge services.
                                <span>our mission is clear – to provide comprehensive and customized IT solution that
                                    align seamlessly with your business objectives. We believe in not just meeting but
                                    exceeding expectations.</span>
                            </p>
                            <div class="ceo-content">
                                <h2>Annette Black</h2>
                                <span>CEO & Founder of Manit</span>
                                <div class="signeture">
                                    <img src="{{asset('assets/images/about/signeture.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-1">
                <svg width="429" height="593" viewBox="0 0 429 593" fill="none">
                    <circle cx="296.5" cy="296.5" r="296.5" fill="url(#cc318_1506)" />
                    <defs>
                        <radialGradient id="cc318_1506" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(296.5 296.5) rotate(90) scale(296.5)">
                            <stop offset="0" stop-color="#CED0FF" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
            <div class="shape-2">
                <svg width="529" height="529" viewBox="0 0 529 529" fill="none">
                    <circle cx="264.5" cy="264.5" r="264.5" fill="url(#oo1508)" />
                    <defs>
                        <radialGradient id="oo1508" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(264.5 264.5) rotate(90) scale(264.5)">
                            <stop offset="0" stop-color="#FBB132" stop-opacity="0.2" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </section>

        <!-- services start -->
        <section class="services-section section-padding">
            <div class="top-img">
                <img src="{{asset('assets/images/services/bg.jpg')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <span>Our Services</span>
                            <h2>Design the Concept
                                of Your Business Idea Now</h2>
                        </div>
                    </div>
                </div>
                <div class="services-wrap">
                    <div class="row">
                        <div class="col col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="services-card">
                                <div class="number-shape">
                                    <span>01</span>
                                    <div class="shape">
                                        <svg viewBox="0 0 112 107" fill="none">
                                            <path id="Bg5"
                                                d="M67.9706 0.555039C89.2118 -0.484865 110.489 16.3952 111.529 37.6365C112.568 58.8777 92.9541 105.645 71.7129 106.685C50.4716 107.725 1.72311 63.4921 0.683209 42.2509C-0.356694 21.0097 46.7293 1.59494 67.9706 0.555039Z" />
                                        </svg>

                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{asset('assets/images/services/icon-1.svg')}}" alt="">
                                </div>
                                <h2>UI/UX Design</h2>
                                <span>We are providing the best UI/UX design. That help you be professional.</span>
                                <h3>
                                    <a href="services-single.html">
                                        <span>Learn More</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="col col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="services-card">
                                <div class="number-shape">
                                    <span>02</span>
                                    <div class="shape">
                                        <svg viewBox="0 0 112 107" fill="none">
                                            <path id="Bg4"
                                                d="M67.9706 0.555039C89.2118 -0.484865 110.489 16.3952 111.529 37.6365C112.568 58.8777 92.9541 105.645 71.7129 106.685C50.4716 107.725 1.72311 63.4921 0.683209 42.2509C-0.356694 21.0097 46.7293 1.59494 67.9706 0.555039Z" />
                                        </svg>

                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{asset('assets/images/services/icon-2.svg')}}" alt="">
                                </div>
                                <h2>Product Design</h2>
                                <span>We are providing the best Product Design. That help you very much. </span>
                                <h3>
                                    <a href="services-single.html">
                                        <span>Learn More</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="col col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="services-card">
                                <div class="number-shape">
                                    <span>03</span>
                                    <div class="shape">
                                        <svg viewBox="0 0 112 107" fill="none">
                                            <path id="Bg2"
                                                d="M67.9706 0.555039C89.2118 -0.484865 110.489 16.3952 111.529 37.6365C112.568 58.8777 92.9541 105.645 71.7129 106.685C50.4716 107.725 1.72311 63.4921 0.683209 42.2509C-0.356694 21.0097 46.7293 1.59494 67.9706 0.555039Z" />
                                        </svg>

                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{asset('assets/images/services/icon-3.svg')}}" alt="">
                                </div>
                                <h2>Development</h2>
                                <span>We are providing the best Product Design. That help you very much. </span>
                                <h3>
                                    <a href="services-single.html">
                                        <span>Learn More</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="col col-xl-3 col-lg-6 col-md-6 col-12">
                            <div class="services-card">
                                <div class="number-shape">
                                    <span>04</span>
                                    <div class="shape">
                                        <svg viewBox="0 0 112 107" fill="none">
                                            <path id="Bg3"
                                                d="M67.9706 0.555039C89.2118 -0.484865 110.489 16.3952 111.529 37.6365C112.568 58.8777 92.9541 105.645 71.7129 106.685C50.4716 107.725 1.72311 63.4921 0.683209 42.2509C-0.356694 21.0097 46.7293 1.59494 67.9706 0.555039Z" />
                                        </svg>

                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{asset('assets/images/services/icon-4.svg')}}" alt="">
                                </div>
                                <h2>Data Analysis</h2>
                                <span>We are providing the best Product Design. That help you very much.</span>
                                <h3>
                                    <a href="services-single.html">
                                        <span>Learn More</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- video start -->
        <section class="videos-section">
            <h2 class="d-none">hiddin</h2>
            <div class="container">
                <div class="image">
                    <img src="{{asset('assets/images/video-bg.jpg')}}" alt="">
                    <div class="video">
                        <a href="https://www.youtube.com/embed/iz2R3HGMWHE?si=U67P6gwUCe0X3pc0" class="video-btn"
                            data-type="iframe">
                            <div class="play-btn"></div>
                        </a>
                    </div>
                    <div class="circle-shape-1"></div>
                    <div class="circle-shape-2"></div>
                    <div class="circle-shape-3"></div>
                    <div class="circle-shape-4"></div>
                </div>
            </div>
        </section>

        <!-- project start -->
        <section class="project-section section-padding">
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <span>Recent Case Studies</span>
                            <h2>Our Latest Case Studies</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-slider">
                <div class="project-card">
                    <div class="image">
                        <img src="{{asset('assets/images/project/1.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <span>Development / Idea</span>
                        <h2>eCommerce Project</h2>
                        <a href="project-single.html" class="project-link">
                            <div class="icon">
                                <img src="{{asset('assets/images/project/icon-arrow.svg')}}" alt="">
                            </div>
                            <div class="shape">
                                <img src="{{asset('assets/images/project/icon-bg.svg')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="image">
                        <img src="{{asset('assets/images/project/2.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <span>Development / Idea</span>
                        <h2>eCommerce Project</h2>
                        <a href="project-single.html" class="project-link">
                            <div class="icon">
                                <img src="{{asset('assets/images/project/icon-arrow.svg')}}" alt="">
                            </div>
                            <div class="shape">
                                <img src="{{asset('assets/images/project/icon-bg.svg')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="image">
                        <img src="{{asset('assets/images/project/3.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <span>Design / Idea</span>
                        <h2>Product Design</h2>
                        <a href="project-single.html" class="project-link">
                            <div class="icon">
                                <img src="{{asset('assets/images/project/icon-arrow.svg')}}" alt="">
                            </div>
                            <div class="shape">
                                <img src="{{asset('assets/images/project/icon-bg.svg')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="image">
                        <img src="{{asset('assets/images/project/4.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <span>Development / Idea</span>
                        <h2>eCommerce Project</h2>
                        <a href="project-single.html" class="project-link">
                            <div class="icon">
                                <img src="{{asset('assets/images/project/icon-arrow.svg')}}" alt="">
                            </div>
                            <div class="shape">
                                <img src="{{asset('assets/images/project/icon-bg.svg')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial start -->
        <section class="testimonial-section section-padding">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-xl-4 col-12">
                        <div class="section-title">
                            <span>Testimonial</span>
                            <h2>Our Latest Case Studies</h2>
                            <p>Fringilla feugiat et imperdiet iaculis sceliue vestibulum diam eget fusce. Vitae id amet
                                eleifend lacus ornare nisl leo dis est. </p>
                            <div class="testimonial-btn">
                                <a href="about.html" class="theme-btn"> Get in Touch <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="testimonial-slider">
                            <div class="item">
                                <div class="client">
                                    <div class="image">
                                        <img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="">
                                    </div>
                                    <div class="text">
                                        <h2>Leslie Alexander</h2>
                                        <span>Senior Developer</span>
                                    </div>
                                </div>
                                <div class="reting">
                                    <ul>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star-1.svg')}}" alt=""></li>
                                    </ul>
                                    <span>(4.0)</span>
                                </div>
                                <p>I can't express enough gratitude for the awesome experience I had during my education
                                    journey. As a beginner they support me as much possible.</p>

                                <div class="icon">
                                    <img src="{{asset('assets/images/testimonial/quote.png')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client">
                                    <div class="image">
                                        <img src="{{asset('assets/images/testimonial/2.jpg')}}" alt="">
                                    </div>
                                    <div class="text">
                                        <h2>Eleanor Pena</h2>
                                        <span>CEO of BREAG</span>
                                    </div>
                                </div>
                                <div class="reting">
                                    <ul>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star-1.svg')}}" alt=""></li>
                                    </ul>
                                    <span>(4.0)</span>
                                </div>
                                <p>I can't express enough gratitude for the awesome experience I had during my education
                                    journey. As a beginner they support me as much possible.</p>

                                <div class="icon">
                                    <img src="{{asset('assets/images/testimonial/quote.png')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client">
                                    <div class="image">
                                        <img src="{{asset('assets/images/testimonial/3.jpg')}}" alt="">
                                    </div>
                                    <div class="text">
                                        <h2>Jeffrey Dykes</h2>
                                        <span>Senior Developer</span>
                                    </div>
                                </div>
                                <div class="reting">
                                    <ul>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star.svg')}}" alt=""></li>
                                        <li><img src="{{asset('assets/images/testimonial/star-1.svg')}}" alt=""></li>
                                    </ul>
                                    <span>(4.0)</span>
                                </div>
                                <p>I can't express enough gratitude for the awesome experience I had during my education
                                    journey. As a beginner they support me as much possible.</p>

                                <div class="icon">
                                    <img src="{{asset('assets/images/testimonial/quote.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cta start -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-wrap">
                    <div class="content">
                        <h2>Get A Free Consultation</h2>
                        <p>Drop us a line! We are here to answer your questions 24/7</p>
                    </div>
                    <form class="cta-form">
                        <div class="input-filled">
                            <input type="text" placeholder="Your Name*">
                        </div>
                        <div class="input-filled">
                            <input type="text" placeholder="Your Email*">
                        </div>
                        <div class="input-filled">
                            <select>
                                <option selected>Your Company*</option>
                                <option>Manit</option>
                                <option>Manit</option>
                            </select>
                        </div>
                        <div class="input-filled">
                            <button type="submit">Free Consultancy</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- blog start -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <span>Recent News</span>
                            <h2>Our Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="blog-card">
                            <div class="image">
                                <img src="{{asset('assets/images/blog/img-1.jpg')}}" alt="">
                                <span>Technology</span>
                            </div>
                            <div class="content">
                                <ul class="date">
                                    <li>Sep 03, 2024</li>
                                    <li>Anne William</li>
                                </ul>
                                <h2><a href="blog-single.html">15 Secrets Of Digital Transformation</a></h2>
                                <div class="link">
                                    <a href="blog-single.html"><span>Continue Reading</span>
                                        <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="blog-card">
                            <div class="image">
                                <img src="{{asset('assets/images/blog/img-2.jpg')}}" alt="">
                                <span>Software</span>
                            </div>
                            <div class="content">
                                <ul class="date">
                                    <li>Sep 03, 2024</li>
                                    <li>Anne William</li>
                                </ul>
                                <h2><a href="blog-single.html">Plan Your Project with Your Software</a></h2>
                                <div class="link">
                                    <a href="blog-single.html"><span>Continue Reading</span>
                                        <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="blog-card">
                            <div class="image">
                                <img src="{{asset('assets/images/blog/img-3.jpg')}}" alt="">
                                <span>Technology</span>
                            </div>
                            <div class="content">
                                <ul class="date">
                                    <li>Sep 03, 2024</li>
                                    <li>Anne William</li>
                                </ul>
                                <h2><a href="blog-single.html">Tech Conference Events 2023/2024</a></h2>
                                <div class="link">
                                    <a href="blog-single.html"><span>Continue Reading</span>
                                        <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start of wpo-site-footer-section -->
</x-guest-layout>       