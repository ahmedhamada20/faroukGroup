@extends('front.layouts.master')
@section('title')
تفاصيل المقاله
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>تفاصيل المقاله</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الصفخه الرئسيه</a>
                            </li>
                            <li>تفاصيل المقاله</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{asset($blog->image ?? 'front/assets/img/blog-details.jpg')}}" width="829px" height="498px" alt="image">
                        </div>

                        <div class="article-content">

                            {!! $blog->notes!!}
{{--                            <h3>Digital Marketing Agency Blogs You Should Read</h3>--}}
{{--                            <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>--}}



                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">

                        <section class="widget widget_spix_posts_thumb">
                            <h3 class="widget-title">مقالات اخري</h3>
                            @foreach(App\Models\Blog::where('status',true)->get() as $blogs)

                            <article class="item">
                                <a href="{{route('home.blogDetails',$blogs->id)}}" class="thumb">
                                    <span class="fullimage cover" style="background-image: url({{asset($blogs->image)}})" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>{{$blogs->create_at}}</span>
                                    <h4 class="title usmall"><a href="#">{{$blogs->name}}</a></h4>
                                </div>
                            </article>
                            @endforeach
                        </section>


                        <section class="widget widget_categories">
                            <h3 class="widget-title">الفئات</h3>

                            <ul>
                                @forelse (categoryActive() as $category)
                                <li><a href="{{route('home.servicesDetails',$category->id)}}">{{$category->name}}</a></li>

                                @empty

                                @endforelse


                            </ul>
                        </section>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->


@endsection


@section('js')
@endsection
