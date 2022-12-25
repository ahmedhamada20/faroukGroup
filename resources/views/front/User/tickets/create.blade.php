@extends('front.User.master')

@section('title')
    انشاء تذكره جديده
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">انشاء تذكره جديده</h4>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('tickets.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>اسم مقدم الطلب</label>
                                <input type="text" value="{{auth()->user()->name}}" readonly class="form-control">
                            </div>

                            <div class="col">
                                <label>رقم التذكره</label>
                                <input type="text" name="ticketNumbers" readonly value="{{generateRandomString(7)}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>المنتج</label>
                                <select class="form-control p-1" name="category_id" required>
                                    <option value="" disabled selected>-- اختر من القائمه --</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>الرساله</label>
                                <textarea class="form-control" rows="5" name="message" required></textarea>
                            </div>
                        </div>

                        <br>

{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <label>المرفقات ان وجدت</label>--}}
{{--                                <p class="text-danger">يجب ان يكون الصوره من نوع jpg</p>--}}

{{--                                <input type="file" name="image" class="form-control" accept="image/*">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">اضافه تذكره جديده</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('js')
@endsection
