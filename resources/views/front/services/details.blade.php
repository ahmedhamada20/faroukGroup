@extends('front.layouts.master')
@section('title')
    {{$data->name ?? ''}}
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
                        <img src="{{asset($data->image)}}" width="1000px" height="600px" alt="image">
                    </div>

                    <div class="services-details-desc">
                        {!! $data->notes !!}

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
                                        {!! $data->notes1 !!}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="text-result">
                            {!! $data->notes2 !!}
                        </div>

                        <div class="services-details-faq">
                            <ul class="accordion">
                                @foreach($data->questions as $row)
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        {{$row->name}}
                                    </a>

                                    <p class="accordion-content">
                                        {!! $row->notes !!}
                                    </p>
                                </li>
                                @endforeach
{{--                                <li class="accordion-item">--}}
{{--                                    <a class="accordion-title" href="javascript:void(0)">--}}
{{--                                        <i class='bx bx-plus'></i>--}}
{{--                                        Would my business benefit from digital marketing?--}}
{{--                                    </a>--}}

{{--                                    <p class="accordion-content">--}}
{{--                                        Digital marketing involves marketing to people using Internet-connected--}}
{{--                                        electronic devices, namely computers, smartphones and tablets. Digital marketing--}}
{{--                                        focuses on channels such as search engines, social media, email, websites and--}}
{{--                                        apps to connect with prospects and customers.--}}
{{--                                    </p>--}}
{{--                                </li>--}}

{{--                                <li class="accordion-item">--}}
{{--                                    <a class="accordion-title" href="javascript:void(0)">--}}
{{--                                        <i class='bx bx-plus'></i>--}}
{{--                                        What’s the biggest mistake digital marketers make?--}}
{{--                                    </a>--}}

{{--                                    <p class="accordion-content">--}}
{{--                                        Digital marketing involves marketing to people using Internet-connected--}}
{{--                                        electronic devices, namely computers, smartphones and tablets. Digital marketing--}}
{{--                                        focuses on channels such as search engines, social media, email, websites and--}}
{{--                                        apps to connect with prospects and customers.--}}
{{--                                    </p>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="services-details-information">
                        <ul class="services-list">
                            @foreach($data->previousWorks as $previousWork)
                                <li><a href="#" class="{{$loop->first ? 'active' : null}}">{{$previousWork->name}}</a></li>
                            @endforeach

{{--                            <li><a href="#">Complex Dashboard</a></li>--}}
{{--                            <li><a href="#">Digital Agency</i></a></li>--}}
{{--                            <li><a href="#">Software Engineers</a></li>--}}
{{--                            <li><a href="#">Marketing Agency</a></li>--}}
{{--                            <li><a href="#">Data Analysis</a></li>--}}
{{--                            <li><a href="#">App Development</a></li>--}}
{{--                            <li><a href="#">Web Application</a></li>--}}
{{--                            <li><a href="#">Logo & Branding</a></li>--}}
                        </ul>

                        <div class="download-file">
                            <h3>المرفقات</h3>

                            <ul>
                                @if($data->pdf->Filename ?? '')
                                <li>
                                    <a href="{{asset('admin/bdf/course/'.( $data->id ?? '') . '/' . ($data->pdf->Filename??''))}}" download>PDF
                                        Download <i class='bx bxs-file-pdf'></i></a></li>

                                @else
                                    لا يوجد مرفقات لهده الخدمه
                                @endif
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
