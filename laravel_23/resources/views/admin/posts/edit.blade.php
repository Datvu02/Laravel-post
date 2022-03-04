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
              <h1 class="m-0">Chỉnh sửa Post</h1>
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
<form action="{{ route('admin.posts.update',1) }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label for="">Title</label>
            <input type="hidden" name="id" value="">
            <input type="text" class="form-control" name="title" value="">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control"  name="description" value="">
        </div><div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="thumbnail" value="">
        </div>
        <div class="form-group">
            <label for="">Danh mục</label>
            <select class="form-control" name="category_id">
                <option value="<"></option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tác giả</label>
            <select class="form-control" name="user_id">
                <option value=""></option>
            </select>
        </div>
        <!-- <div class="form-group">
            <label for="">Nội dung</label>
            <input type="text" class="form-control" id="contentMovie"  name="content" >
        </div> -->
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content" class="form-control" id="contentMovie" cols="40" rows="10" value=""></textarea>
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