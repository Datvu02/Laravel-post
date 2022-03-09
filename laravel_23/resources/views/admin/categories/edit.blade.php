@extends('admin.layouts.master')
@section ('title')
Chỉnh sửa danh mục
@endsection
@section ('CSS')

@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Chỉnh sửa danh mục</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Chỉnh sửa danh mục</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section ('content')
<div class="container">
<form action="{{ route('admin.categories.update', $category->id) }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label for="">Tên</label>
            <input type="hidden" name="id" value="name">
            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
        </div>
        <!-- <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control"  name="description" value="">
        </div><div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="thumbnail" value="">
        </div>
        <div class="form-group">
            <label for="">Danh mục cha</label>
            <select class="form-control" name="parent_id">
                <option value="<"></option>
            </select>
        </div> -->
        <div>
          <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Hủy</a>
          <button style="margin-left:85%" type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
@endsection
@section ('scrip')
  
@endsection