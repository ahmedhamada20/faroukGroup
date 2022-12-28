@extends('front.layouts.master')
@section('title')
    تواصل معنا
@endsection

@section('content')

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{ Session::get('success') }}</strong>
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>اتصل بنا
                        </h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li>اتصل بنا
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-email-1"></i>
                        </div>

                        <h3>{{__('index.email')}}
                        </h3>

                        <p>{{ settingSite()->email }}</p>
                        {{-- <p><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#c1a9a4adadae81b2b1a8b9efa2aeac"><span class="__cf_email__" data-cfemail="1e767b7272715e6d6e7766307d7173">[email&#160;protected]</span></a></p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-pin"></i>
                        </div>

                        <h3>العنوان</h3>
                        <p>{{ settingSite()->address }}</p>
                        {{-- <p><a href="https://www.google.com/maps/@24.9045273,91.8523559,15z" target="_blank">2750 Quadra Street Victoria Road, New York, Canada</a></p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="flaticon-call"></i>
                        </div>

                        <h3>الهاتف</h3>
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
                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->


    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                {{-- <span>Get in Touch</span> --}}
                <h2>تواصل معنا</h2>
                <div class="bar"></div>
            </div>

            <div class="contact-form">
                <form action="{{ route('sendcontect') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>{{ __('index.nameOne') }}<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid

                                @enderror" required data-error="{{ __('index.namerequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        
                        <div class="col-lg-12 col-md-12">
                            <select class="hessine" style=" " required id="txtcountryTwo" name="country">
                                <option value="" disabled selected>--اختر كود الدولة--</option>

                                <option value="20">حمهورية مصر العربية</option>

                                <option value="974">قطر</option>
                                <option value="973">البحرين</option>
                                <option value="971">الإمارات</option>
                                <option value="966">السعودية</option>
                                <option value="964">العراق</option>
                                <option value="962">الأردن</option>
                                <option value="965">الكويت</option>

                                <option value="968">عمان</option>

                                <option value="">أخرى</option>



                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{ __('index.namelast') }}<span class="text-danger">*</span></label>
                                <input type="text" name="name_laset" id="name" class="form-control @error('name_laset') is-invalid

                                @enderror" required data-error="{{ __('index.namerequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{ __('index.email') }}<span class="text-danger">*</span></label>
                                <input type="email" name="email"  id="email" class="form-control @error('email') is-invalid

                                @enderror" required data-error="{{ __('index.emailrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{ __('index.phone') }} <span class="text-danger">*</span></label>
                                <input type="text" name="phone"  id="phone_number" required data-error="{{ __('index.phonerequired') }}" class="form-control @error('phone') is-invalid

                                @enderror">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>النشاط<span class="text-danger">*</span></label>
                                <input type="text" name="subject"  id="msg_subject" class="form-control @error('subject') is-invalid

                                @enderror" required data-error="{{ __('index.subjectrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>الشركة<span class="text-danger">*</span></label>
                                <input type="text" name="name_comppany"  id="msg_subject" class="form-control @error('subject') is-invalid

                                @enderror" required data-error="{{ __('index.subjectrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>رسالتك<span class="text-danger">*</span></label>
                                <textarea name="message"  class="form-control @error('message') is-invalid

                                @enderror" id="message" cols="30" rows="6" required data-error="{{ __('index.Messagerequired') }}"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                {{ __('index.sendMessage') }}
                            </button>

                            {{-- <div id="msgSubmit" class="h3 text-center hidden"></div> --}}
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection


@section('js')
@endsection
