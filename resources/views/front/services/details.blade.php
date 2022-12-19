@extends('front.layouts.master')
@section('title')
    Services Details
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{$data->category->name ?? ''}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الصفحه الرئسيه</a>
                            </li>
                            <li>{{$data->name ?? ''}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Services Details Area -->
    <section class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="services-details-image">
                        <img src="{{asset('front/assets/img/services-details/services-details-1.jpg')}}" alt="image">
                    </div>

                    <div class="services-details-desc">
                        <h3>Creative Solutions, Creative Results</h3>
                        <p>Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.</p>

                        <h3>Solving Problems, Building Brands</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.</p>

                        <div class="services-details-features">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="features-image">
                                        <img src="{{asset('front/assets/img/services-details/services-details-2.jpg')}}"
                                             alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <ul class="features-list">
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Offering All Jobs Guaranteed & Neatly Done
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            The Problem
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Dedicated and Knowledgeable Professionals
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            The Skills
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            We provide 24/7 on Time
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            We Use Technology To Do The Job More Quickly
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="text-result">
                            <h3>Challenge and Solutions</h3>
                            <p>Surrounded by their possessions, pets, and a familiar environment, our clients receive
                                the support they ned to enjoy their regular activities and continue living well at
                                home.</p>
                        </div>

                        <div class="services-details-faq">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        What is digital marketing?
                                    </a>

                                    <p class="accordion-content">
                                        Digital marketing involves marketing to people using Internet-connected
                                        electronic devices, namely computers, smartphones and tablets. Digital marketing
                                        focuses on channels such as search engines, social media, email, websites and
                                        apps to connect with prospects and customers.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        Would my business benefit from digital marketing?
                                    </a>

                                    <p class="accordion-content">
                                        Digital marketing involves marketing to people using Internet-connected
                                        electronic devices, namely computers, smartphones and tablets. Digital marketing
                                        focuses on channels such as search engines, social media, email, websites and
                                        apps to connect with prospects and customers.
                                    </p>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        What’s the biggest mistake digital marketers make?
                                    </a>

                                    <p class="accordion-content">
                                        Digital marketing involves marketing to people using Internet-connected
                                        electronic devices, namely computers, smartphones and tablets. Digital marketing
                                        focuses on channels such as search engines, social media, email, websites and
                                        apps to connect with prospects and customers.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="services-details-information">
                        <ul class="services-list">
                            <li><a href="#" class="active">Creative Web Design</a></li>
                            <li><a href="#">Complex Dashboard</a></li>
                            <li><a href="#">Digital Agency</i></a></li>
                            <li><a href="#">Software Engineers</a></li>
                            <li><a href="#">Marketing Agency</a></li>
                            <li><a href="#">Data Analysis</a></li>
                            <li><a href="#">App Development</a></li>
                            <li><a href="#">Web Application</a></li>
                            <li><a href="#">Logo & Branding</a></li>
                        </ul>

                        <div class="download-file">
                            <h3>Brochures</h3>

                            <ul>
                                <li>
                                    <a href="{{asset('admin/bdf/course/'.( $data->id ?? '') . '/' . ($data->pdf->Filename??''))}}">PDF
                                        Download <i class='bx bxs-file-pdf'></i></a></li>
                            </ul>
                        </div>

                        <div class="services-contact-info">
                            <h3>Contact Info</h3>

                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-user-pin'></i>
                                    </div>
                                    <span>Phone:</span>
                                    <a href="tel:{{settingSite()->phone}}">{{settingSite()->phone}}</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-map'></i>
                                    </div>
                                    <span>Location:</span>
                                    {{settingSite()->address}}
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-envelope'></i>
                                    </div>
                                    <span>Email:</span>
                                    <span class="__cf_email__"
                                          data-cfemail="2c44494040436c5f5c4554024f4341">  {{settingSite()->email}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Services Details Area -->


@endsection


@section('js')
@endsection
