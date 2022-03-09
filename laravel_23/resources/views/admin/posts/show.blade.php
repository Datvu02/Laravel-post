@extends('admin.layouts.master')
@section ('title')
  Chi tiết bài viết {{ $post->id }}
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Chi tiết bài viết {{ $post->id }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Chi tiết bài viết {{ $post->id }}</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection

@section ('content')
<h1>Chi tiết bài viết {{ $post->id }}</h1>
<h4>Tiêu đề: {{ $post->title }}</h4>
<h4>Slug: {{ $post->slug }}</h4>
<h4>Trạng thái: {{ $post->status }}</h4>
<!-- <h4>Ảnh:</h4>
<img src="{{ $post->image_url }}" alt="{{ $post->image_url }}" > -->
<h4>Content: {{ $post->content }}</h4>
@endsection