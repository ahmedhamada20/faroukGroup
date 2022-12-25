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
    <div class="page-banner-area item-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>اشتراك في باقه
                        </h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li>اشتراك في باقه
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <br>

    <!-- Start Contact Area -->
    <section class="contact-area pb-100 mb-5">
        <div class="container">
            <div class="section-title">
                {{-- <span>Get in Touch</span> --}}
                <h2>اشتراك في باقه</h2>
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
                                <label>اسم الخدمه</label>
                                <h5>{{$services->name}}</h5>
{{--                                <input type="text" value="{{$services->name}}" class="form-control" readonly >--}}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 text-center">
                            <div class="form-group">
                                <label>اسم الباقه</label>
                                <h5>{{$package->name}}</h5>
{{--                                <input type="text"  value="{{$package->name}}" class="form-control" readonly >--}}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>الاسم<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid

                                @enderror" required data-error="{{ __('index.namerequired') }}">
                                <div class="help-block with-errors"></div>
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
                                <label>البريد الالكتروني<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid

                                @enderror" required data-error="{{ __('index.emailrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>الدوله<span class="text-danger">*</span></label>
                                <input type="text" name="country" id="country" class="form-control @error('country') is-invalid

                                @enderror" required data-error="{{ __('index.countryrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <label>الوظيفه<span class="text-danger">*</span></label>
                                <input type="text" name="jobs" id="jobs" class="form-control @error('jobs') is-invalid

                                @enderror" required data-error="{{ __('index.jobsrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                               تاكيد الاشتراك
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
