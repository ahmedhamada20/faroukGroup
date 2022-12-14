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
                    <h3>?????????? ????????</h3>

                    <ul class="quick-links">
                        <li>
                            <a href="{{route('home.consulting')}}">???????????????????? ????????????????</a>
                        </li>
                        <li>
                            <a href="{{route('GuestRegister')}}">?????????? ??????????</a>
                        </li>
                        <li>
                            <a href="{{route('home.Agency')}}">?????? ??????????</a>
                        </li>
                        <li>
                            <a href="{{route('home.jops')}}">?????????? ?????????? </a>
                        </li>
                        <li>
                            <a href="{{ route('home.bloges') }}">????????????????</a>
                        </li>
                        <li>
                            <a href="policy">????????????????</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>???????? ????????</h3>

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
                    <h3>???????? ??????????????</h3>

                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon">
                                <i class='bx bx-user-pin'></i>
                            </div>
                            <span>???????????? : </span>
                         
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
                            <span>??????????????:</span>
                            {{settingSite()->address}}
                        </li>
                        <li>
                            <div class="icon">
                                <i class='bx bx-envelope'></i>
                            </div>
                            <span>???????????? ???????????????????? :</span>
                            
                            <a href="mailto: {{settingSite()->email}}">{{settingSite()->email}}</a>

                       
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
                        
                    
                       ???????? ???????????? ???????????? ?????????? ?????????? ???????? ?????????????? ?????????????????????? ??????????????????@2022-2023
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


