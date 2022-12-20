<!-- Start Footer Area -->
<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
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
                            <a href="#" class="twitter" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pinterest" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="linkedin" target="_blank">
                                <i class='bx bxl-instagram-alt'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>روابط مفيدة</h3>

                    <ul class="quick-links">
                        <li>
                            <a href="portfolio-2.html">المشاريع</a>
                        </li>
                        <li>
                            <a href="services-2.html">الخدمات</a>
                        </li>
                        <li>
                            <a href="about-2.html">الإدارات</a>
                        </li>
                        <li>
                            <a href="blog-2.html">المدونة</a>
                        </li>
                        <li>
                            <a href="contact-1.html">طلب وكالة</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">السياسات</a>
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
                    <h3>معلومات التواصل</h3>

                    <ul class="footer-contact-info">
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
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>
                        جميع الحقوق @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> فاروق جروب
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


