@extends('front.layouts.master')
@section('title')
    إستشارة مجانية
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
    <div class="page-banner-area item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>إستشارة مجانية لتحديد الإحتياجات</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li>إستشارة مجانية لتحديد الإحتياجات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>سجل بياناتك الآن وسيقوم بالتواصل معك أحد مطورين الأعمال</span>
                <h2>هل أنت جاهز لمعرفة نقاط القوة والضعف بشركتك ؟</h2>
                <div class="bar"></div>
                <p class="text-danger strong">يجب اختيار معاد من السبت الي الخميس من الساعه 10 ص الي الساعه 5 م</p>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-image">
                        <img src="{{asset('front/assets/img/contact.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-inner">
                        <form  action="{{route('sendConsulting')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="ادخل اسمك" placeholder="الاسم ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="phone" id="phone_number" required data-error="ادخل رقم الهاتف" class="form-control" placeholder="الهاتف ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="activity" id="email" class="form-control" required data-error="يجب ادخال المسمي الوظيفي" placeholder="المسمي الوظيفي">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name_comppany" id="msg_subject" class="form-control" required data-error="ادخل اسم النشاط" placeholder="النشاط ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="data" id="msg_subject" class="form-control" required data-error="ادخل اليوم المحدد" placeholder="اليوم ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="time" name="time" id="msg_subject" class="form-control" required data-error="ادخل الوقت المحدد" placeholder="الوقت ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="Message" class="form-control"  id="message" cols="30" rows="5" required data-error="يرجي ادخال رسالتك" placeholder="رسالتك ؟"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">ارسال طلبك</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection


@section('js')
@endsection
