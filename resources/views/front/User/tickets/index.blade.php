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
                        <h4 class="page-title m-0">تذاكرك</h4>
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

                    <h4 class="mt-0 header-title mb-4"><a href="{{route('tickets.create')}}" class="btn btn-success">فتح تذكره جديده</a></h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>رقم التذكره</th>
                            <th>الفئه</th>
                            <th>الحاله</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{auth()->user()->name}}</td>
                                <td>{{$row->ticketNumbers}}</td>
                                <td>{{$row->category->name}}</td>
                                <td>
                                    @if($row->status == 'padding')
                                        <span class="badge badge-warning p-2">في انتظار الرد</span>
                                    @elseif($row->status == 'review')
                                        <span class="badge badge-info p-2">تم مشاهده طلبكم</span>
                                    @elseif($row->status == 'accepted')
                                        <span class="badge badge-success p-2">تم الرد على طلبك</span>
                                    @elseif($row->status == 'completed')
                                        <span class="badge badge-info p-2">تم تنفيذ طلبك</span>
                                    @else
                                        <span class="badge badge-danger p-2">تم الغاء طلبك</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('tickets.show',$row->ticketNumbers)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('js')
@endsection
