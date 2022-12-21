<!-- Start Footer Area -->
<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo" >
                        <a href="{{route('home')}}">
                            <img src="{{asset(settingSite()->image)}}"  width="120px" height="40px" class="black-logo" alt="image">
                            <img src="{{asset(settingSite()->image)}}"  width="120px" height="40px" class="white-logo" alt="image">
                        </a>
                    </div>
                    <p>{!! settingSite()->notes!!}</p>
                    <ul class="social">
                        <li>
                            <a href="{{settingSite()->facebook}}" class="facebook" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settingSite()->twitter}}" class="twitter" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settingSite()->YouTube}}" class="youtube" target="_blank">
                                <i class='fa fa-youtube'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settingSite()->instagram}}" class="linkedin" target="_blank">
                                <i class='fa fa-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/2{{settingSite()->phone}}" class="whatsapp" target="_blank">
                                <i class='fa fa-whatsapp'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>روابط هامة</h3>

                    <ul class="quick-links">
                        <li>
                            <a href="{{route('home.consulting')}}">الإستشارات المجانية</a>
                        </li>
                        <li>
                            <a href="{{route('GuestRegister')}}">تسجيل عضوية</a>
                        </li>
                        <li>
                            <a href="{{route('home.Agency')}}">طلب وكالة</a>
                        </li>
                        <li>
                            <a href="{{route('home.jops')}}">وظائف شاغرة </a>
                        </li>
                        <li>
                            <a href="contact-1.html">المدونة</a>
                        </li>
                        <li>
                            <a href="policy">السياسات</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>عروض خاصة</h3>

                    <ul class="quick-links">
                        @foreach(App\Models\Category::whereStatus(true)->get() as $category)
                        <li>
                            <a href="{{route('home.servicesDetails',$category->id)}}">{{$category->name}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>نسعد بإتصالك</h3>

                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon">
                                <i class='bx bx-user-pin'></i>
                            </div>
                            <span>الهاتف : </span>
                            <p>
                                0235858737 - 0235821622 - 0235826260
                            </p>
                            <a href="tel:{{settingSite()->phone}}">{{settingSite()->phone}}</a>
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
                            <span class="__cf_email__"
                                  data-cfemail="2c44494040436c5f5c4554024f4341">  {{settingSite()->email}}</span>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>
                        جميع الحقوق @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">

                        </script><script>document.write(new Date().getFullYear())</script> شركة فاروق جروب للتجارة الإلكترونية والبرمجة
                    </p>
                </div>

                <div class="col-lg-6 col-md-6">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevron-up'></i>
</div>
<!-- End Go Top Area -->

<!-- Dark version -->
<div class="dark-version">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>
<!-- Dark version -->


