@extends('admin.layouts.master')
@section ('title')
Chỉnh sửa Users
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Chỉnh sửa Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Chỉnh sửa Users</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section ('content')
<div class="container">
<form action="{{ route('admin.users.update', $user->id) }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="Name" value="">
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <select class="form-control" name="status">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" class="form-control" name="avatar" value="{{ $user->avatar }}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="address" value="{{ $user->address }}">
        </div>
        <div class="form-group">
            <label for="">Số điẹn thoại</label>
            <input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
        </div>
        <div class="form-group">
            <label for="">Mật khâu</label>
            <input type="password" class="form-control" name="password" value="{{ $user->password }}">
        </div>
        <div>
          <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Hủy</a>
          <button style="margin-left:85%" type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
@endsection
@section ('scrip')
  
@endsection