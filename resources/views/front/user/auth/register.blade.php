@extends('front.layouts.master')
@section('title')
تسجيل عضويه جديده
@endsection

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>تسجيل عضوية جديدة</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الصفحة الرئيسية</a>
                            </li>
                            <li>تسجيل عضوية جديدة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- End Page Banner -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Start Register Area -->
    <section class="register-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="register-image">
                        <img src="{{asset('front/assets/img/register-form.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="register-form">
                        <h2> سجل عضويتك الآن</h2>

                        <form action="{{route('GuestRegister')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label>اسم المستخدم</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                               

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

                            <div class="form-group">
                                <label>رقم الهاتف</label>
                                <input type="text" maxlength="11" name="phone" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>العنوان</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>كلمة المرور</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <label>تأكيد كلمة المرور</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="row align-items-center">

                                <div class="col-lg-12 col-md-12 col-sm-12 lost-your-password">
                                    <a href="{{route('GuestLogin')}}" class="lost-your-password text-danger">تسجيل الدخول</a>
                                </div>
                            </div>

                            <button type="submit" class="default-btn">تسجيل جديد</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register Area -->

@endsection


@section('js')
@endsection
