@extends('front.layouts.master')
@section('title')
    {{$data->name ?? ''}}
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{$data->category->name ?? ''}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> الرئيسية</a>
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

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="services-details-information">
                        <ul class="services-list">
                            @foreach($data->previousWorks as $previousWork)
                                <li><a  class="{{$loop->first ? 'active' : null}}">{{$previousWork->name}}</a>
                                </li>
                            @endforeach

                        </ul>

                        <div class="download-file">
                            <h3>المرفقات</h3>

                            <ul>
                                @if($data->pdf->Filename ?? '')
                                    <li>
                                        <a href="{{asset('admin/bdf/course/'.( $data->id ?? '') . '/' . ($data->pdf->Filename??''))}}"
                                           download>PDF
                                            Download <i class='bx bxs-file-pdf'></i></a></li>

                                @else
                                    لا يوجد مرفقات لهده الخدمه
                                @endif
                            </ul>
                        </div>

                        <div class="services-contact-info">
                            <h3>بيانات التواصل</h3>

                            
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon">
                                <i class='bx bx-user-pin'></i>
                            </div>
                            <span>الهاتف : </span>
                         
                            <div class="row">
                                <div class="col">
                                    <p>
                                        <a href="tel:{{ settingSite()->phone }}">{{ settingSite()->phone }}</a>
                                    </p>
    
                                    <p><a href="tel:0235826260">0235826260</a></p>
                                  
                                </div>
                                <div class="col">
    
                                    <p><a href="tel:01009656756">01009656756</a></p>
                                 
                                    <p><a href="tel:0235858737">0235858737</a></p>
                                </div>
                            </div>

                     
                        
                        </li>
                        <li>
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>
                            <span>العنوان:</span>
                            {{settingSite()->address}}
                        </li>
                        <li>
                            <div class="icon">
                                <i class='bx bx-envelope'></i>
                            </div>
                            <span>البريد الإلكتروني :</span>
                            
                            <a href="mailto: {{settingSite()->email}}">{{settingSite()->email}}</a>

                       
                        </li>
                    </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Services Details Area -->

    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>قائمة الأسعار</span>
                <h2>اختر الخطة التي تناسب احتياجاتك وتطلعاتك</h2>
                <div class="bar"></div>
            </div>

            <div class="row">


                @foreach($data->category->packages as $package)
                    <div class="col-md-6 text-center">
                        <div class="single-pricing-box top-1">
                            <div class="pricing-header">
                                <h3>{{$package->name}}</h3>
                            </div>

                            <div class="price">
                                {{$package->price}}
                            </div>

                            <ul class="pricing-features">
                              @foreach($package->featuresPackages as $featuresPackage)
                                <li>
                                    <i class="flaticon-check-mark"></i>
                                    {{$featuresPackage->name}}
                                </li>
                                @endforeach

                            </ul>

                            <div class="pricing-btn">
                                <a href="{{route('home.subscriptions',[$data->id,$package->id])}}" class="default-btn btn-block">
                                  {!! $package->notes!!}
                                </a>
                            </div>

                            <div class="pricing-shape">
                                <img src="{{asset('front/assets/img/pricing-shape.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


@endsection


@section('js')
@endsection
