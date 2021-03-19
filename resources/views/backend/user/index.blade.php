@extends('backend.layouts.main')

@section('content')

    <section class="content-header">
        <h1>
            Quản Lý Người Dùng <a href="{{route('user.create')}}" class="btn btn-primary">Thêm</a>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li class="active">Quản lý người dùng</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>


                        <th>STT</th>
                        <th>Họ và Tên</th>
                        <th>Email</th>
                        <th>Ngày Sinh</th>
                        <th>Giới Tính</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->birthday}}</td>
                            <td>{{$item->sex}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.col -->

        </div>
    </section>
@endsection

