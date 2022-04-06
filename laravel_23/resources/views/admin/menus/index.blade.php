@extends('admin.layouts.master')
@section ('title')
  Danh sách Menu
@endsection
@section ('CSS')
  <style>
    .tags{
      /* width: 200px; */
    }
    .tag{
      float: left;
      margin: 2px;
      background-color:#3498DB ;
      width: auto;
      border-radius: 5px;
      color:white;
      padding: 5px;
    }
  </style>
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Danh sách Menu</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách Menu</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection

@section ('content')
@if (session('error'))
<div class="alert alert-danger" role="alert">
{{ session('error') }}
</div>
@endif
@if (session('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif
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
                      <!-- <input type="text" name="title" class="form-control" placeholder="title" value="{{ request()->get('title') }}">
                      <input type="text" name="status" class="form-control float-right" placeholder="status" value="{{ request()->get('status') }}"> -->
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
                      <th>Tên</th>
                      <th>Thời gian tạo</th>
                      <th>Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($menus as $menu)
                  <tr>
                      <td>{{ $menu->id }}</td>
                        <td> <a href="">{{ $menu->name }}</a> 
                              <p>slug:{{ $menu->slug }}</p>
                      </td>
                      <td> {{ $menu->status_text }} </td>
                        <td>{{ $menu->created_at }}</td>
                        <td class="activate">
                            <a href="{{ route('admin.menus.show', $menu->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            @can('update', $menu)
                            <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('delete', $menu)
                            <form method="POST" action="{{ route('admin.menus.destroy', $menu->id) }}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                              </button>
                            </form>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $menus->links() }}
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