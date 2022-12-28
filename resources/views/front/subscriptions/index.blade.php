@extends('front.layouts.master')
@section('title')
   تأكيد الاشتراك
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
                        <h2>اشتراك في باقة
                        </h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li>اشتراك في باقة
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>

    <!-- Start Contact Area -->
    <section class="contact-area pb-100 mb-5">
        <div class="container">
            <div class="section-title">
                {{-- <span>Get in Touch</span> --}}
                <h2>اشتراك في باقة</h2>
                <div class="bar"></div>
            </div>

            <div class="contact-form">
                <form action="{{ route('home.subscriptionsPost') }}" method="POST">
                    @csrf

                    <input type="hidden" name="courses_id" value="{{$services->id}}">
                    <input type="hidden" name="packages_id" value="{{$package->id}}">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 text-center">
                            <div class="form-group">
                                <label>اسم الخدمة</label>
                                <h5>{{$services->name}}</h5>
{{--                                <input type="text" value="{{$services->name}}" class="form-control" readonly >--}}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 text-center">
                            <div class="form-group">
                                <label>اسم الباقة</label>
                                <h5>{{$package->name}}</h5>
{{--                                <input type="text"  value="{{$package->name}}" class="form-control" readonly >--}}
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>الاسم<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid

                                @enderror" required data-error="{{ __('index.namerequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">

                                <select class="hessine" style=" " required id="txtcountryTwo" name="country" dir="rtl">
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
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>رقم الهاتف<span class="text-danger">*</span></label>
                                <input type="number" name="phone" id="phone" class="form-control @error('phone') is-invalid

                                @enderror" required data-error="{{ __('index.phonerequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>البريد الإلكتروني<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid

                                @enderror" required data-error="{{ __('index.emailrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>الدولة<span class="text-danger">*</span></label>
                                <input type="text" name="country" id="country" class="form-control @error('country') is-invalid

                                @enderror" required data-error="{{ __('index.countryrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <label>الوظيفة<span class="text-danger">*</span></label>
                                <input type="text" name="jobs" id="jobs" class="form-control @error('jobs') is-invalid

                                @enderror" required data-error="{{ __('index.jobsrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                تأكيد الاشتراك
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
