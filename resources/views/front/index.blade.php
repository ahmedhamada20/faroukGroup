@extends('front.layouts.master')
@section('title')
    {{settingSite()->name}}
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
                                    <a href="{{route('home.contactUs')}}" class="default-btn mt-3">حدد احتياجاتك
                                    </a>
                                </div>
                            </div>g
                            <div class="col-lg-6">
                                <div class="main-banner-image">
                                    <img src="{{asset(sliderActive()->image)}}" width="750px" height="650px"
                                         alt="image">
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
                {{--            <div class="col-lg-6" >--}}
                {{--                <div class="" >--}}
                {{--                    <img src="{{ asset(aboutsActive()->image) }}" width="1000px" height="593px" alt="image">--}}
                {{--                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">--}}
                {{--                        <i class='bx bx-play'></i>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--            </div>--}}

                <div class="col-lg-6">
                    <div class="">
                        <img src="{{ asset(aboutsActive()->image) }}" width="1000px" height="593px" alt="image">

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
                            <p class="text-success">{!! aboutsActive()->notes!!}</p>

                            <div class="about-btn">
                                <a href="{{route('home.aboutUs')}}" class="default-btn">
                                    من نحن
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
                <h2>خدماتنا</h2>
                <div class="bar"></div>
            </div>

            <div class="tab digital-experience-tab">
                <ul class="tabs">
                    <li>
                        <a href="#">
                                <span>
                                    <i class="flaticon-analysis"></i>
                                   المدير الرقمي
                                </span>
                        </a>
                    </li>

                    <li class="bg-5cbd12">
                        <a href="#">
                                <span>
                                    <i class="flaticon-profit"></i>
                                   التسويق الرقمي
                                </span>
                        </a>
                    </li>

                    <li class="bg-e2851b">
                        <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing"></i>
                                   منصة تارجت
                                </span>
                        </a>
                    </li>

                    <li class="bg-04b893">
                        <a href="#">
                                <span>
                                    <i class="flaticon-email-marketing"></i>
                                    قاعدة بيانات تارجت
                                </span>
                        </a>
                    </li>

                    <li class="bg-785eda">
                        <a href="#">
                                <span>
                                    <i class="flaticon-network"></i>
                                    تارجت لتصميم وتطوير المواقع
                                </span>
                        </a>
                    </li>

                    <li class="bg-d0465a">
                        <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing-2"></i>
                                   تطوير الأعمال
                                </span>
                        </a>
                    </li>
                </ul>

                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">


                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>أول نظام للإدارة الإلكترونية</h3>
                                        <p>تهيئة خاصة لإدارة شركتك وإنشاء نظام إداري متكامل للمدراء ورؤساء مجلس الإدارة
                                            والمدراء التنفيذيين</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>رؤية المدير الرقمي</h3>
                                        <p>توظيف علوم تكنولوجيا المعلومات والإدارة لتقديم حلول تقنية تساعد المدير
                                            التنفيذي في المتابعة والإشراف والرقابة على أهداف الإدارات وتوجيه السياسات
                                            والإجراءات نحو تحقيق أهداف المؤسسة وتوفير المرونة اللازمة للاستجابة
                                            للمتغيرات المتلاحقة سواء الداخلية أو الخارجية.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>مهمة المدير الرقمي</h3>
                                        <p>فهم احتياجات المدير التنفيذي وتحليل استراتيجيات العمل لابتكار حلول تكنولوجية
                                            لتحقيق النتائج المستهدفة في نظام رقمي متكامل</p>
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

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>تصميم الهوية البصرية وإبتكار القيمة</h3>
                                        <p>نقدم خدمة التسويق الرقمي وندير علامتك التجارية لخلق فرصا جديدة لأعمالك</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>
                                            رؤيته</h3>
                                        <p>تطوير وتسويق محتوى خاص بك؛ لإشراك عملاءك المحتملين وجمهورك المستهدف والاحتفاظ
                                            بهم وتحويل منتجاتك وخدماتك إلى علامة مميزة.</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>مهمه</h3>
                                        <p>تسويق وكتابة وتصميم المحتوى للتواصل والتفاعل مع جمهورك وجذبهم، وإلهام عملائك
                                            المحتملين وتحويلهم الى جمهور أساسي لعملك</p>
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


                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>أول مجتمع رقمي للشركات فى مصر</h3>
                                        <p>إنضم إلي المجتمع المستهدف للشركات</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>رؤية منصة تارجت</h3>
                                        <p>توظيف علوم تكنولوجيا المعلومات والإدارة لإنشاء مجتمع متواصل موجه لمؤسسات
                                            الأعمال من خلال منصة رقمية تقدم حلولاً تقنية لخلق فرصاُ جديدة تبدأ من
                                            جمهورية مصر العربية وتمتد لوطننا العربي.

                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>مهمة منصة تارجت</h3>
                                        <p>فهم إحتياجات عملائنا وتحليل استراتيجات العلاقات بين مؤسسات الأعمال وبين
                                            المستهلكين والشركات لابتكار حلول تكنولوجية لتحقيق النتائج المستهدفة للتحول
                                            الرقمي.</p>
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

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>أكبر قاعدة بيانات مبوبه ومصنفة فى مصر</h3>
                                        <p>إنشئ قاعدة البيانات الخاصة بك وحدد عملائك</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>رؤيته بيانات تارجت</h3>
                                        <p>أكبر قاعدة بيانات الكترونية مصنفة ومبوبة حسب احتياجات العملاء في الوطن العربي

                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>مهمة بيانات تارجت</h3>
                                        <p>توفير أكبر مصدر موثوق للبيانات مصنفة ومبوبه حسب إجتيادات عملائنا وسهوله
                                            التواصل معهم</p>
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

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>نفهم ونحلل ونوظف البرمجيات لخلق فرص إستثمارية</h3>
                                        <p>نصنع مرآة تعكس منتجاتك وأعمالك بصورة أفضل بعد دراسة السوق وطبيعة المؤسسة
                                            والمنافسين</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>رؤيته تطوير تارجت للمواقع</h3>
                                        <p>فهم إحتياجات عملائنا وتحليل استراتيجات العمل لابتكار حلول تكنولوجية لتحقيق
                                            النتائج المستهدفة للتحول الرقمي</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>المهمة</h3>
                                        <p>
                                        <li> تعظيم رؤية الموقع</li>
                                        <li> زيادة حركة المرور على الموقع</li>
                                        <li> تحويل الزائرين إلى حجوزات بيعية</li>
                                        <li> تعظيم عائد الاستثمار [ROI]</li>


                                        </p>
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

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>رؤيتنا </h3>
                                        <p>تمكين القدرات الإدارية والبشرية والتسويقية من خلال تحسين الأداء التنظيمي
                                            للمؤسسة واستغلال الفرص الاستثمارية لتقديم حلولاً تخلق فرصاُ جديدة لعملائنا؛
                                            وتحقيق أعلى معدلات الأداء الإداري والتسويقي والمالي للمؤسسة.

                                            .</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>مهمتنا</h3>
                                        <p>فهم إحتياجات عملائنا وتحليل استراتيجات العمل لابتكار حلول إدارية لتمكين
                                            التحول التكنولوجي لتحقيق النتائج المستهدفة من التحول الرقمي.</p>
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



    {{--<!-- Start Digital Experience Area -->--}}
    {{--<section class="digital-experience-area ptb-100">--}}
    {{--    <div class="container">--}}
    {{--        <div class="section-title">--}}
    {{--            <span>Digital Experience</span>--}}
    {{--            <h2>Outstanding Digital Experience</h2>--}}
    {{--            <div class="bar"></div>--}}
    {{--        </div>--}}

    {{--        <div class="tab digital-experience-tab">--}}
    {{--            <ul class="tabs">--}}

    {{--                @forelse (activeProduct() as $product)--}}
    {{--                <li class="bg-5cbd12" id="{{ $product->id }}">--}}
    {{--                    <a href="#{{ $product->id }}">--}}
    {{--                        <span>--}}
    {{--                            <i class="flaticon-profit"></i>--}}
    {{--                            {{ $product->name }}--}}
    {{--                        </span>--}}
    {{--                    </a>--}}
    {{--                </li>--}}
    {{--                @empty--}}

    {{--                @endforelse--}}


    {{--            </ul>--}}

    {{--            <div class="tab_content">--}}
    {{--                @forelse (activeProduct() as $product)--}}
    {{--                <div class="tabs_item" id="{{ $product->id}}">--}}
    {{--                    <div class="row align-items-center">--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="digital-experience-content">--}}
    {{--                                {!! $product->notes !!}--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="digital-experience-image">--}}
    {{--                                <img src="{{ asset('front/assets/img/digital-experience/digital-experience-1.png') }}" alt="image">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                @empty--}}

    {{--                @endforelse--}}



    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}
    {{--<!-- End Digital Experience Area -->--}}

    <!-- Start Services Area -->
    <section class="services-area bg-fafafa pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>حلولنا الرقمية</span>
                <h2>حلول تقنية تخلق فرصاُ</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                @forelse (categoryActive() as $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <div class="image">
                                <a href="{{route('home.servicesDetails',$category->id)}}">
                                    <img src="{{asset($category->image ?? 'front/assets/img/services/services-7.jpg')}}"
                                         width="403px" height="310px" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{route('home.servicesDetails',$category->id)}}">{{ $category->name }}</a>
                                </h3>
                                <span>{!! $category->notes !!}</span>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse


            </div>
        </div>


    </section>
    <!-- End Services Area -->

    <!-- Start Features Area -->
    <section class="features-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-width">
                <span>خطوات العمل</span>
                <h2>حلول تقنية تخلق فرصاُ</h2>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="features-image-warp">
                        <img src="{{asset('front/assets/img/features/work.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">

                        @forelse (eventsActive() as $event )
                            <div class="col-lg-6 col-md-6">
                                <div class="single-features-box top-1">
                                    <div class="icon">
                                        <i class="flaticon-promotion"></i>
                                    </div>
                                    <h3>
                                        <a>{{ $event->name }}</a>
                                    </h3>
                                    <p>{!! $event->notes !!}</p>
                                </div>
                            </div>
                        @empty

                        @endforelse


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
                            <span data-count="4020">4020</span>
                        </h3>
                        <p>عميل قواعد بيانات تارجت </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-happy"></i>
                        </div>

                        <h3>
                            <span data-count="45000">45000</span>
                        </h3>
                        <p>مسؤل مسجل بقواعد البيانات </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-technical-support"></i>
                        </div>

                        <h3>
                            <span data-count="19">19</span>
                        </h3>
                        <p>خدمه على مدار 11 سنه</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>

                        <h3>
                            <span data-count="950">950</span>
                        </h3>
                        <p>مشروع مكتمل</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>

                        <h3>
                            <span data-count="28013">28013</span>
                        </h3>
                        <p>شركة مسجله</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start Portfolio Area -->
{{--    <section class="portfolio-area pb-100">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title">--}}

{{--                <h2>أحدث المشاريع المكتملة</h2>--}}
{{--                <div class="bar"></div>--}}
{{--            </div>--}}

{{--            <div class="portfolio-slider owl-carousel owl-theme">--}}
{{--                @forelse (adsActive() as $ads)--}}
{{--                    <div class="single-portfolio-item">--}}
{{--                        <div class="portfolio-image">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{asset('front/assets/img/portfolio/portfolio-1.jpg')}}" alt="image">--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="portfolio-content">--}}
{{--                            <h3>--}}
{{--                                <a href="#">{{ $ads->name }}</a>--}}
{{--                            </h3>--}}
{{--                            <span>{!! $ads->notes !!}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @empty--}}

{{--                @endforelse--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Portfolio Area -->

    <!-- Start Client Area -->

    <!-- End Client Area -->

    <!-- Start Quote Area -->
    <section class="quote-area ptb-100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="quote-form">
                        <div class="content">
                            <h3>{{ __('index.Free_consultation_with_a_business_developer') }}</h3>
                        </div>

                        <form method="POST" action="{{ route('sendmessage') }}">
                            @csrf


                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       required placeholder="{{ __('index.name') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone"
                                       required placeholder="{{ __('index.phone') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('activity') is-invalid @enderror"
                                       name="activity" required placeholder="{{ __('index.activity') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('name_comppany') is-invalid @enderror"
                                       name="name_comppany" required placeholder="{{ __('index.name_comppany') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('type_company') is-invalid @enderror"
                                       name="type_company" required placeholder="{{ __('index.type_company') }}">
                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h4>إنشاء/ تطوير</h4>


                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">موقع الكتروني</label><br>
                                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                    <label for="vehicle2">تطبيق موبايل</label><br>
                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                    <label for="vehicle3">منصة</label><br>
                                    <input type="checkbox" id="vehicle4" name="vehicle4" value="Boat">
                                    <label for="vehicle4">نظام</label><br>
                                    <input type="checkbox" id="vehicle5" name="vehicle5" value="Boat">
                                    <label for="vehicle5">استضافة</label><br>


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h4>محتوى الكتروني</h4>


                                    <input type="checkbox" id="vehicle6" name="vehicle6" value="Bike">
                                    <label for="vehicle6">الهوية البصرية</label><br>
                                    <input type="checkbox" id="vehicle7" name="vehicle7" value="Car">
                                    <label for="vehicle7">تصميم الجرافيك</label><br>
                                    <input type="checkbox" id="vehicle8" name="vehicle8" value="Boat">
                                    <label for="vehicle8">الموشنن جرافيك</label><br>
                                    <input type="checkbox" id="vehicle9" name="vehicle9" value="Boat">
                                    <label for="vehicle9">كتابة المحتوى</label><br>
                                    <input type="checkbox" id="vehicle10" name="vehicle10" value="Boat">
                                    <label for="vehicle10">إنشاء مدونات</label><br>


                                </div>
                                {{--                            <div class="col-lg-3 col-md-6 col-sm-6">--}}
                                {{--                                <h4 >التسويق</h4>--}}


                                {{--                                <input type="checkbox" id="vehicle11" name="vehicle11" value="Bike">--}}
                                {{--                                <label for="vehicle11">تسويق الكتروني</label><br>--}}
                                {{--                                <input type="checkbox" id="vehicle12" name="vehicle12" value="Car">--}}
                                {{--                                <label for="vehicle12">حملات إيميل</label><br>--}}
                                {{--                                <input type="checkbox" id="vehicle13" name="vehicle13" value="Boat">--}}
                                {{--                                <label for="vehicle13">حملات واتس آآب</label><br>--}}
                                {{--                                <input type="checkbox" id="vehicle14" name="vehicle14" value="Boat">--}}
                                {{--                                <label for="vehicle14">إدارة صفحات الكترونية</label><br>--}}



                                {{--                            </div>--}}
                                {{--                            <div class="col-lg-3 col-md-6 col-sm-6">--}}
                                {{--                                <h4 >برامج تارجت</h4>--}}


                                {{--                                <input type="checkbox" id="vehicle15" name="vehicle15" value="Bike">--}}
                                {{--                                <label for="vehicle15">التجارة الرقمية</label><br>--}}
                                {{--                                <input type="checkbox" id="vehicle16" name="vehicle16" value="Car">--}}
                                {{--                                <label for="vehicle16">الإدارة الرقمية</label><br>--}}
                                {{--                                <input type="checkbox" id="vehicle17" name="vehicle17" value="Boat">--}}
                                {{--                                <label for="vehicle17">البيانات الرقمية</label><br>--}}
                                {{--                                <input type="checkbox" id="vehicle18" name="vehicle18" value="Boat">--}}
                                {{--                                <label for="vehicle18">الفاتورة الرقمية</label><br>--}}



                                {{--                            </div>--}}
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="Message" required
                                          placeholder="{{ __('index.Message') }}"></textarea>
                            </div>
                            <div class="col-lg-4">
                                <div class="quote-btn">
                                    <button type="submit" class="default-btn">
                                        {{__('index.sendMessage')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="quote-image" style="text-align: center">
                        <img src="{{asset('front/assets/img/digital-experience/استشارة.png')}}"  alt="image">
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
                {{--            <span>Team Member</span>--}}
                <h2>الهيكل التنظمي للشركة</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                @forelse (NumberActive() as $number)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset($number->image)}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>{{ $number->name }}</h3>
                                <span>{!! $number->notes !!}</span>
                                <a href="" class="default-btn btn-small"
                                   style="border-radius: 50%;padding: 0px 13px !important;"><i class="fa fa-phone"></i></a>
                            </div>
                        </div>
                    </div>

                @empty

                @endforelse

            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>المقالات</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                @foreach(App\Models\Blog::where('status',true)->get() as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="image">
                                <a href="{{route('home.blogDetails',$blog->id)}}">
                                    <img src="{{asset($blog->image ?? 'front/assets/img/blog/blog-1.jpg')}}"
                                         width="403px" height="310px" alt="image">
                                </a>
                            </div>
                            <div class="content">
                            <span>
{{$blog->created_at->format('Y-m-d')}}
                            </span>
                                <h3>
                                    <a href="{{route('home.blogDetails',$blog->id)}}">{{$blog->name}}</a>
                                </h3>
                                <a href="{{route('home.blogDetails',$blog->id)}}" class="blog-btn">Read More <i
                                        class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                {{--            <span>Get Started Instantly!</span>--}}
                <h2>إترك رقمك لإرسال البرمو الترويجي على الواتساب </h2>

                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="input-newsletter" placeholder="برجاء إترك رقمك متبوعاً بكود الدولة   "
                           name="EMAIL" required autocomplete="off">

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
                    <img src="{{asset('front/assets/img/partner/Canadian European academy.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/EL TAMIMI.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/gate .png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/imct group.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/IROVENTS.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/Kadmar shipping co.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/Les Dames.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/Mabani for Real Estate Investment.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/ngc-business-training.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/Rotana Egypt.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/Sunrise tour.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/tedata.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/Tiba Manzalawi Group.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/TREND GROUP.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/Z Tours.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/أكاديمية التدريب العالمية.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/أكروبول لحلول الطاقة المتجددة.png')}}" alt="image">
                </div>

                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/الاكاديمية الدولية للتدريب.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/الاكاديمية الكندية.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/العثمانية للإستثمار العقارى.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/الهيئة الدولية للتحكيم.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/جريدة الوطن.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/شركة الأمين  للسياحة.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/فيرست مسك الدولية للسياحة.png')}}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{asset('front/assets/img/partner/مصر للأجهزة المكتبية.png')}}" alt="image">
                </div>

            </div>
        </div>
    </div>
    <!-- End Partner Area -->



@endsection


@section('js')
@endsection
