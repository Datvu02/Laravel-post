@extends('admin.layouts.master')
@section ('title')
  Chi tiết bài viết {{ $user->id }}
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Chi tiết bài viết {{ $user->id }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Chi tiết bài viết {{ $user->id }}</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection

@section ('content')
<h1>Chi tiết user {{ $user->id }}</h1>
<h4>Tên: {{ $user->name }}</h4>
<h4>rạng thái: {{ $user->status }}</h4>
<h4>Địa chỉ email: {{ $user->email }}</h4>
<h4>Số điện thoại: {{ $user->phone }}</h4>
<h4>Địa chỉ: {{ $user->address }}</h4>
@endsection