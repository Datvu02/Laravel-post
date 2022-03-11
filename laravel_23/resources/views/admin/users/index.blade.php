@extends('admin.layouts.master')
@section ('title')
  Danh sách user
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Danh sách users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách Users</li>
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
                  <form>
                    <div class="input-group" style="width: 400px">
                      <input type="text" name="email" class="form-control" placeholder="Email" value="{{ request()->get('email') }}">
                      <input type="text" name="name" class="form-control float-right" placeholder="Name" value="{{ request()->get('name') }}">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Avatar</th>
                      <th>Email</th>
                      <th>Thời gian tạo</th>
                      <th>Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr>
                      <td>{{ $user->id }}</td>
                      <td> <a href="">{{ $user->name }}</a> </td>
                      <td><img src="{{ $user->avatar }}" alt=""></td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->created_at }}</td>
                      <td>
                          <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-danger">Show</a>
                          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success">Chỉnh sửa</a>
                          <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
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