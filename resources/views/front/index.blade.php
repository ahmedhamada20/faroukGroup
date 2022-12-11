@extends('front.layouts.master')
@section('title')
    {{settingSite()->name}}
@endsection

@section('content')

    <!-- Start Main Banner Area -->
    <div class="main-banner">
        <div class="main-banner-item item-four">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-banner-content">
                                    <h1>{{sliderActive()->name}}</h1>
                                    <p>
                                        {!!sliderActive()->notes!!}
                                    </p>
                                    <a href="" class="default-btn mt-3">Get Your Report</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-banner-image">
                                    <img src="{{asset('front/assets/img/banner/banner-image-4.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start About Area -->
    <section class="about-area mt-5 pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image-warp image-three">
                        <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content warp">
                        <span>{{__('index.aboutsUs')}}</span>
                        <h3>{{aboutsActive()->name}}</h3>
                        <div class="bar"></div>
                        <div class="about-inner-content">
                            <p>{!! aboutsActive()->notes!!}</p>
{{--                            <div class="icon">--}}

{{--                            </div>--}}

                            {{--                        <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore  dolore magna aliqua.</strong>--}}
                            {{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>--}}

                            {{--                        <div class="about-inner-content">--}}
                            {{--                            <div class="icon">--}}
                            {{--                                <i class="flaticon-check"></i>--}}
                            {{--                            </div>--}}
                            {{--                            <h4>Online Presence</h4>--}}
                            {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                            {{--                        </div>--}}

                            {{--                        <div class="about-inner-content">--}}
                            {{--                            <div class="icon">--}}
                            {{--                                <i class="flaticon-check"></i>--}}
                            {{--                            </div>--}}
                            {{--                            <h4>Marketing Strategy</h4>--}}
                            {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                            {{--                        </div>--}}

                            {{--                        <div class="about-inner-content">--}}
                            {{--                            <div class="icon">--}}
                            {{--                                <i class="flaticon-check"></i>--}}
                            {{--                            </div>--}}
                            {{--                            <h4>Promote local Sale</h4>--}}
                            {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                            {{--                        </div>--}}

                            <div class="about-btn">
                                <a href="#" class="default-btn">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End About Area -->


    <!-- Start Digital Experience Area -->
    <section class="digital-experience-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Digital Experience</span>
                <h2>Outstanding Digital Experience</h2>
                <div class="bar"></div>
            </div>

            <div class="tab digital-experience-tab">
                <ul class="tabs">
                    <li>
                        <a href="#">
                                <span>
                                    <i class="flaticon-analysis"></i>
                                    Real-Time Analytics
                                </span>
                        </a>
                    </li>

                    <li class="bg-5cbd12">
                        <a href="#">
                                <span>
                                    <i class="flaticon-profit"></i>
                                    Pay-Per-Click
                                </span>
                        </a>
                    </li>

                    <li class="bg-e2851b">
                        <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing"></i>
                                    Online Marketing
                                </span>
                        </a>
                    </li>

                    <li class="bg-04b893">
                        <a href="#">
                                <span>
                                    <i class="flaticon-email-marketing"></i>
                                    Email Marketing
                                </span>
                        </a>
                    </li>

                    <li class="bg-785eda">
                        <a href="#">
                                <span>
                                    <i class="flaticon-network"></i>
                                    Social Marketing
                                </span>
                        </a>
                    </li>

                    <li class="bg-d0465a">
                        <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing-2"></i>
                                    Digital Marketing
                                </span>
                        </a>
                    </li>
                </ul>

                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">
                                    <h3>Real-Time Analytics</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Super Responsive</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>High Security</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Optimal Choice</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-1.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">
                                    <h3>Pay-Per-Click</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Super Responsive</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>High Security</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Optimal Choice</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-2.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">
                                    <h3>Online Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Super Responsive</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>High Security</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Optimal Choice</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-3.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">
                                    <h3>Email Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Super Responsive</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>High Security</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Optimal Choice</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-4.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">
                                    <h3>Social Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Super Responsive</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>High Security</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Optimal Choice</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-5.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">
                                    <h3>Digital Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Super Responsive</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>High Security</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>Optimal Choice</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-6.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Digital Experience Area -->

    <!-- Start Services Area -->
    <section class="services-area bg-fafafa pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Services we provided</span>
                <h2>Our Digital Marketing Services</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="services-details.html">
                                <img src="{{asset('front/assets/img/services/services-7.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="services-details.html">Creative Web Design</a>
                            </h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="services-details.html">
                                <img src="{{asset('front/assets/img/services/services-8.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="services-details.html">Digital Agency</a>
                            </h3>
                            <span>Agency</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="services-details.html">
                                <img src="{{asset('front/assets/img/services/services-9.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="services-details.html">Complex Dashboard</a>
                            </h3>
                            <span>Solutions</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="services-details.html">
                                <img src="{{asset('front/assets/img/services/services-10.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="services-details.html">Software Engineers</a>
                            </h3>
                            <span>Analysis</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="services-details.html">
                                <img src="{{asset('front/assets/img/services/services-11.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="services-details.html">Marketing Agency</a>
                            </h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="services-details.html">
                                <img src="{{asset('front/assets/img/services/services-12.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="services-details.html">Data Analysis</a>
                            </h3>
                            <span>Explanation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape1">
                <img src="{{asset('front/assets/img/default-shape/default-shape1.png')}}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{asset('front/assets/img/default-shape/default-shape2.png')}}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{asset('front/assets/img/default-shape/default-shape3.png')}}" alt="image">
            </div>
            <div class="shape4">
                <img src="{{asset('front/assets/img/default-shape/default-shape4.png')}}" alt="image">
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Features Area -->
    <section class="features-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-width">
                <span>Care Features</span>
                <h2>Create Awesome Service With Our Tools</h2>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="features-image-warp">
                        <img src="{{asset('front/assets/img/features/features-2.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-features-box top-1">
                                <div class="icon">
                                    <i class="flaticon-promotion"></i>
                                </div>
                                <h3>
                                    <a href="#">Marketing Analysis</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-features-box top-2">
                                <div class="icon">
                                    <i class="flaticon-speed"></i>
                                </div>
                                <h3>
                                    <a href="#">Website Optimization</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-features-box top-3">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <h3>
                                    <a href="#">Email Marketing</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-features-box top-4">
                                <div class="icon">
                                    <i class="flaticon-network"></i>
                                </div>
                                <h3>
                                    <a href="#">Social Media Marketing</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Features Area -->

    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-checked"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="950">00</span>
                        </h3>
                        <p>Completed Project</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-happy"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="850">00</span>
                        </h3>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-technical-support"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="550">00</span>
                        </h3>
                        <p>Multi Service</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>

                        <h3>
                            <span class="odometer" data-count="750">00</span>
                        </h3>
                        <p>Winning Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start Portfolio Area -->
    <section class="portfolio-area pb-100">
        <div class="container-fluid">
            <div class="section-title">
                <span>Portfolio Showcase</span>
                <h2>Our Impressive Portfolio</h2>
                <div class="bar"></div>
            </div>

            <div class="portfolio-slider owl-carousel owl-theme">
                <div class="single-portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{asset('front/assets/img/portfolio/portfolio-1.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="portfolio-content">
                        <h3>
                            <a href="#">Creative Work</a>
                        </h3>
                        <span>Web Design</span>
                    </div>
                </div>

                <div class="single-portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{asset('front/assets/img/portfolio/portfolio-9.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="portfolio-content">
                        <h3>
                            <a href="#">Ecommerce Work</a>
                        </h3>
                        <span>Creative Agency</span>
                    </div>
                </div>

                <div class="single-portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{asset('front/assets/img/portfolio/portfolio-3.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="portfolio-content">
                        <h3>
                            <a href="#">App Development</a>
                        </h3>
                        <span>IOS Android</span>
                    </div>
                </div>

                <div class="single-portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{asset('front/assets/img/portfolio/portfolio-4.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="portfolio-content">
                        <h3>
                            <a href="#">Dashboard App</a>
                        </h3>
                        <span>Web Development</span>
                    </div>
                </div>

                <div class="single-portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{asset('front/assets/img/portfolio/portfolio-5.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="portfolio-content">
                        <h3>
                            <a href="#">Web Application</a>
                        </h3>
                        <span>Marketing</span>
                    </div>
                </div>

                <div class="single-portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{asset('front/assets/img/portfolio/portfolio-6.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="portfolio-content">
                        <h3>
                            <a href="#">Logo & Branding</a>
                        </h3>
                        <span>Agency</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Area -->

    <!-- Start Client Area -->
    <section class="client-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Testimonials</span>
                <h2>Client’s Review</h2>
                <div class="bar"></div>
            </div>

            <div class="client-slider owl-carousel owl-theme">
                <div class="client-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the
                        1500s, when an unknown printer took a galley</p>

                    <div class="client-info">
                        <img src="{{asset('front/assets/img/client/client-1.jpg')}}" alt="image">
                        <h3>Jacinda Meri</h3>
                        <span>CEO & Founder</span>
                    </div>
                </div>

                <div class="client-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the
                        1500s, when an unknown printer took a galley</p>

                    <div class="client-info">
                        <img src="{{asset('front/assets/img/client/client-2.jpg')}}" alt="image">
                        <h3>Miraj Alex</h3>
                        <span>Chief Executive Officer</span>
                    </div>
                </div>

                <div class="client-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the
                        1500s, when an unknown printer took a galley</p>

                    <div class="client-info">
                        <img src="{{asset('front/assets/img/client/client-3.jpg')}}" alt="image">
                        <h3>Edward Bold</h3>
                        <span>Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Area -->

    <!-- Start Quote Area -->
    <section class="quote-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="quote-form">
                        <div class="content">
                            <h3>Get A free Spix Quote Now</h3>
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Name" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="Email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="phone" class="form-control" id="Phone" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <select>
                                    <option value="">Company</option>
                                    <option value="">Ellison Estate</option>
                                    <option value="">Four Fairfield Pond</option>
                                    <option value="">Les Palais Bulles</option>
                                    <option value="">Villa Les Cèdres</option>
                                    <option value="">Villa Leopolda</option>
                                    <option value="">Buckingham Palace</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message"></textarea>
                            </div>

                            <div class="quote-btn">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="quote-image">
                        <img src="{{asset('front/assets/img/quote/quote-1.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="quote-shape">
            <div class="shape-1">
                <img src="{{asset('front/assets/img/quote/quote-shape-1.png')}}" alt="image">
            </div>
            <div class="shape-2">
                <img src="{{asset('front/assets/img/quote/quote-shape-2.png')}}" alt="image">
            </div>
        </div>
    </section>
    <!-- End Quote Area -->

    <!-- Start Team Area -->
    <section class="team-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>Team Member</span>
                <h2>Our Expert Team</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('front/assets/img/team/team-6.jpg')}}" alt="image">
                        </div>

                        <div class="content">
                            <h3>Alex Maxwel</h3>
                            <span>CEO & Founder</span>
                            <a href="" class="default-btn btn-small"
                               style="border-radius: 50%;padding: 0px 13px !important;"><i class="fa fa-phone"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('front/assets/img/team/team-7.jpg')}}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Justin Roberto</h3>
                            <span>Head Of Marketing</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('front/assets/img/team/team-8.jpg')}}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Louis Agassiz</h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{asset('front/assets/img/team/team-9.jpg')}}" alt="image">

                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <h3>Carl Anderson</h3>
                            <span>Android/IOS Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Blog</span>
                <h2>Latest News From Blog</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="{{asset('front/assets/img/blog/blog-1.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <span>20 March, 2022</span>
                            <h3>
                                <a href="blog-details.html">7 Great Tips For Earn More Money From Digital Industry</a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">Read More <i class='bx bx-chevrons-right'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="{{asset('front/assets/img/blog/blog-2.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <span>25 March, 2022</span>
                            <h3>
                                <a href="blog-details.html">How To Boost Your Digital Marketing Agency</a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">Read More <i class='bx bx-chevrons-right'></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="{{asset('front/assets/img/blog/blog-3.jpg')}}" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <span>28 March, 2022</span>
                            <h3>
                                <a href="blog-details.html">The Billionaire Guide On Design That will Get You Rich</a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">Read More <i class='bx bx-chevrons-right'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape1">
                <img src="{{asset('front/assets/img/default-shape/default-shape1.png')}}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{asset('front/assets/img/default-shape/default-shape2.png')}}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{asset('front/assets/img/default-shape/default-shape3.png')}}" alt="image">
            </div>
            <div class="shape4">
                <img src="{{asset('front/assets/img/default-shape/default-shape4.png')}}" alt="image">
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Subscribe Area -->
    <section class="subscribe-area ptb-100">
        <div class="container">
            <div class="subscribe-content">
                <span>Get Started Instantly!</span>
                <h2>Get Only New Update from this Newsletter</h2>

                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="input-newsletter"
                           placeholder="Enter Whatsapp Number with country code   " name="EMAIL" required
                           autocomplete="off">

                    <button type="submit">Subscribe</button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->

    <!-- Start Partner Area -->
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/partner-1.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/partner-2.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/partner-3.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/partner-4.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/partner-5.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/partner-6.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->



@endsection


@section('js')
@endsection
