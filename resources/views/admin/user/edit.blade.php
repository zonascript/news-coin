@extends('admin.layout.master')
@section('title', 'Manager User')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Chỉnh sửa tài khoản
    </h1>
    <ol class="breadcrumb">
        <li><a href="#">Admin</a></li>
        <li><a href="#">Người dùng</a></li>
        <li class="active">Sửa tài khoản</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <form role="form" action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="fullName">Tên</label>
                            <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control" id="exampleInputName" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Nhập lại Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="Nhập password">
                        </div>
                        <?php
                            $userRoles = [];
                            foreach ($user->userRoles as $value) {
                                $userRoles[] = $value['role_id'];
                            }
                        ?>
                        <div class="checkbox">
                            <label>
                                <input name="role_id[]" type="checkbox" value="{{ App\Models\Role::POST_NEWS }}" {{in_array(App\Models\Role::POST_NEWS, $userRoles) ? 'checked': ''}}> Đăng bài viết
                            </label>
                            <label>
                                <input name="role_id[]" type="checkbox" value="{{ App\Models\Role::REVIEW_NEWS }}" {{in_array(App\Models\Role::REVIEW_NEWS, $userRoles) ? 'checked': ''}}> Review bài viết
                            </label>
                            <label>
                                <input name="role_id[]" type="checkbox" value="{{ App\Models\Role::POST_COIN }}" {{in_array(App\Models\Role::POST_COIN, $userRoles) ? 'checked': ''}}> Đăng coin
                            </label>
                            <label>
                                <input name="role_id[]" type="checkbox" value="{{ App\Models\Role::REVIEW_COIN }}" {{in_array(App\Models\Role::REVIEW_COIN, $userRoles) ? 'checked': ''}}> Review coin
                            </label>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
