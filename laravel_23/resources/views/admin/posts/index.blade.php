@extends('admin.layouts.master')
@section ('title')
  Danh sách Blog
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Danh sách Blog</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách Blog</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection

@section ('content')
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>ID</th>
                      <th>Tiêu đề</th>
                      <th>Ảnh</th>
                      <th>Danh mục</th>
                      <th>Tác giả</th>
                      <th>Trạng thái</th>
                      <th>Lượt xem</th>
                      <th>Thời gian tạo</th>
                      <th>Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $post)
                  <tr>
                        <td>{{ $post->id }}</td>
                        <td> <a href="">{{ $post->title }}</a> </td>
                        <td>
                            <img src="assets/Admin/uploads/" width="100%" height="100px" style="border-radius: 5px; object-fit: cover;">
                        </td>
                        <td>{{ $post->category_id }}</td>
                        <td> {{ $post->user_create_id }} </td>
                        <td> {{ $post->status }} </td>
                        <td></td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-danger">Show</a>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success">Chỉnh sửa</a>
                            <form method="POST" action="{{ route('admin.posts.destroy', $post->id) }}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                              </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach;
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
@endsection

@section ('scrip')
  
@endsection