@extends('backend.layouts.main')

@section('content')

    <section class="content-header">
        <h1>
            Thêm người dùng <a href="{{route('user.index')}}" class="btn btn-primary ">Danh Sách</a>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li class="active">thông tin người dùng</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin người dùng</h3>
                    </div>
                    <form role="form" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-12">


                                <div class="form-group">
                                    <label>Chọn Quyền</label>
                                    <select class="form-control" name="role_id" id="role_id">
                                        <option value="0">--chọn--</option>
                                        <option value="1">Admin</option>
                 0                       <option value="2">Manager</option>
                                        <option value="3">Member</option>
                                        <option value="4">Khác</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ Tên</label>
                                    <input required type="text" class="form-control" id="name" name="name"
                                           placeholder="nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input required type="email" class="form-control" id="email" name="email"
                                           placeholder="nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật Khẩu</label>
                                    <input required type="password" class="form-control" id="password" name="pwd"
                                           placeholder="nhập password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Sinh</label>
                                    <input required type="date" class="form-control" id="birthday" name="birthday">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giới Tính</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1" value="Nam" name="sex" checked="">
                                        <label for="customRadio1" class="custom-control-label">Nam</label>
                                        <input class="custom-control-input" type="radio" id="customRadio2" value="Nữ" name="sex" >
                                        <label for="customRadio2" class="custom-control-label">Nữ</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Avatar</label>
                                    <input type="file" id="avatar" name="avatar">
                                </div>
                                <div class="form-group">

                                    <input type="checkbox" value="1" id="is_active" name="is_active">
                                    <label for="">kích hoạt tài khoản</label>
                                </div>

                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit"  class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>


            </div>


        </div>
        <!-- /.row -->
    </section>
@endsection
