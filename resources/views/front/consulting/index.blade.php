@extends('front.layouts.master')
@section('title')
    consulting
@endsection

@section('content')

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
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-image">
                        <img src="{{asset('front/assets/img/contact.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-inner">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="الاسم ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="الهاتف ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="النشاط ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="رسالتك ؟"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
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
