@extends('front.layouts.master')
@section('title')
تسجيل الدخول
@endsection

@section('content')


<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>تسجيل الدخول</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}"> الرئيسية</a>
                        </li>
                        <li>تسجيل الدخول</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Start Login Area -->
    <section class="login-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="login-image">
                        <img src="{{asset('front/assets/img/login-form.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="login-form">
                        <h2>تسجيل الدخول</h2>

                        <form action="{{route('GuestLogin')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="text" class="form-control" name="email" required >
                            </div>

                            <div class="form-group">
                                <label>كلمه المورو</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="row align-items-center">

                                <div class="col-lg-12 col-md-12 col-sm-12 lost-your-password">
                                    <a href="{{route('GuestRegister')}}" class="lost-your-password">تسجيل عضويه جديده</a>
                                </div>
                            </div>

                            <button type="submit" class="default-btn">تسجيل الدخول</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Area -->


@endsection


@section('js')
@endsection
