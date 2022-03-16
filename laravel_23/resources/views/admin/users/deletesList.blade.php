@extends('admin.layouts.master')
@section ('title')
  Danh sách User đã bị xóa
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Danh sách User đã xóa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách User đã xóa</li>
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
                  <div class="input-group input-group-sm" style="width: 150px">
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
                      <th>Tên</th>
                      <th>Ảnh</th>
                      <th>Danh mục cha</th>
                      <th>Thời gian xóa</th>
                      <th>Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr>
                        <td>{{ $user->id }}</td>
                        <td> <a href="">{{ $user->name }}</a> 
                      </td>
                        <td>
                            <img src="assets/Admin/uploads/" width="100%" height="100px" style="border-radius: 5px; object-fit: cover;">
                        </td>
                        <td> <p style="width: 100px !important; white-space: normal;"></p> </td>
                        <td>{{ $user->deleted_at }}</td>
                        <td>
                            <a href="{{ route('admin.users.restore', $user->id) }}" class="btn btn-success"><i class="fas fa-trash-restore"></i></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $users->links() }}
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