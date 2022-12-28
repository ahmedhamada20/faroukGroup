@extends('front.layouts.master')
@section('title')
المقالات
@endsection

@section('content')


       <!-- Start Page Banner -->
       <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>المقالات</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> الرئيسيه</a>
                            </li>
                            <li>المقالات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


       <!-- Start Blog Area -->
       <section class="blog-area pt-100 pb-100">
        <div class="container-fluid">
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
                                <a href="{{route('home.blogDetails',$blog->id)}}" class="blog-btn">قراءة المزيد <i
                                        class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
              
            
            </div>
        </div>

     
    </section>
    <!-- End Blog Area -->

@endsection


@section('js')
@endsection
