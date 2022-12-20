@extends('admin.layouts.master')
@section('title')
طلب وظيفه
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">  طلب وظيفه </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/   عمليات التواصل</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="flash-message"></div>



                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الإسم</th>
                                <th>رقم الهاتف</th>
                                <th>الوظيفه الحاله</th>
                                <th>الوظيفه المتقدم لها</th>

                                <th>Cv</th>
                                <th>العمليات</th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->subject}}</td>
                                    <td>{{$row->name_comppany}}</td>

                                    <td>
                                        <a href="{{asset('public/Image/'.$row->image)}}" download="" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                    </td>

                                    <td>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>






                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="table-active text-center">No Data !</td>
                                </tr>
                            @endforelse
                        </table>
                        {{ $data->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

    <script>

        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('updateCourseStatus') }}',
                    data: {'status': status, 'user_id': user_id},
                    success: function(data){
                        toastr.success('Data Update Successfully');
                    }
                });
            })
        })
    </script>
@endsection
