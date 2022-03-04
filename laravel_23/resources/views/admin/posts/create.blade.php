@extends('admin.layouts.master')
@section ('title')
  Thêm mới Post
@endsection
@section ('CSS')
  
  <script src="//cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script>
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm mới Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm mới Post</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section ('content')
<div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" class="form-control" id="" cols="40" rows="5"></textarea>
                <!-- <input type="text" class="form-control" id="" placeholder="" name="description"> -->
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select class="form-control" name="category_id">
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Tác giả</label>
                <select class="form-control" name="user_id">
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea name="content" class="form-control" id="contentMovie" cols="40" rows="10"></textarea>
            </div>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Hủy</a>
            <button style="margin-left:85%" type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>
@endsection
@section ('scrip')
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor 4
      // instance, using default configuration.
      CKEDITOR.replace( 'contentMovie' );
  </script>
@endsection