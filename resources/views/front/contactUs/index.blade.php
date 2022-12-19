@extends('front.layouts.master')
@section('title')
    {{ __('index.Free_consultation_with_a_business_developer') }}
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{ __('index.Free_consultation_with_a_business_developer') }}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">{{__('index.Home')}}</a>
                            </li>
                            <li>{{ __('index.Free_consultation_with_a_business_developer') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

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
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
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
                                <select class="form-control js-example-basic-multiple" name="type_company">
                                    <option value="" disabled selected>-- اختر من القائمه --</option>
                                    @foreach(App\Models\category::where('status',true)->get() as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--                            @foreach(App\Models\category::where('status',true)->get() as $category)--}}
                            {{--                            <div class="form-check">--}}
                            {{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>--}}
                            {{--                                <label class="form-check-label" for="flexCheckChecked">--}}
                            {{--                                    {{$category->name}}--}}
                            {{--                                </label>--}}
                            {{--                            </div>--}}

                            {{--                            @endforeach--}}

                            <div class="form-group">
                                <textarea class="form-control" name="Message" required
                                          placeholder="{{ __('index.Message') }}"></textarea>
                            </div>

                            <div class="quote-btn">
                                <button type="submit" class="default-btn">
                                    {{__('index.sendMessage')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="quote-image">
                        <img src="{{asset('front/assets/img/quote/quote-1.png')}}" alt="image">
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

@endsection


@section('js')
    {{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}

    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endsection
