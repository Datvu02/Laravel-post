@extends('admin.layouts.master')
@section ('title')
  Thêm mới Menu
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm mới Menu</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm mới Menu</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section ('content')
<div class="container">
        <form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="{{ old('title') }}">
                @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" id="image_url" name="image_url">
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
                <textarea name="content" class="form-control" id="contentMovie" cols="40" rows="10" value="{{ old('title') }}"></textarea>
                @error('content')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <a href="{{ route('admin.menus.index') }}" class="btn btn-primary">Hủy</a>
            <button style="margin-left:85%" type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>
@endsection
@section ('scrip')
@endsection