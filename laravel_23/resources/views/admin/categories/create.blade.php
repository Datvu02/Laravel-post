@extends('admin.layouts.master')
@section ('title')
  Thêm mới danh mục
@endsection
@section ('CSS')
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm mới danh mục</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm mới danh mục</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section ('content')
<div class="container">
        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
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
                <label for="">Danh mục cha</label>
                <select class="form-control" name="parent_id">
                    <option value=""></option>
                </select>
            </div>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Hủy</a>
            <button style="margin-left:85%" type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>
@endsection
@section ('scrip')
@endsection