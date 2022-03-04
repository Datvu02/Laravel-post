@extends('admin.layouts.master')
@section ('title')
  Thêm mới user
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm mới users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm mới Users</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section ('content')
<form action="{{ route('admin.users.store') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
      <label for="inputEmail">Tên</label>
        <input class="form-control" name="name" id="inputName" type="" />
    </div>
    <div class="form-floating mb-3">
      <label for="inputEmail">Email</label>
      <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
    </div>
    <div class="form-floating mb-3">
      <label for="avatar">avatar</label>
      <input type="file" class="form-control" id="avatar" name="avatar">
    </div>
    <div class="form-floating mb-3">
      <label for="inputPassword" >Mật Khẩu</label>
      <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Nhập mật khẩu" />
    </div>
    <div>
      <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Hủy</a>
      <button style="margin-left:85%" type="submit" class="btn btn-primary">Tạo mới</button>
    </div>
  </form>
  <div class="card-footer text-center py-3">
    <div class="small"><a href="">Bạn đã có tài khoản? Đi tới đăng nhập</a></div>
  </div>
@endsection
@section ('scrip')
  
@endsection