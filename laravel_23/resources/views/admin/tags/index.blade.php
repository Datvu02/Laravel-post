@extends('admin.layouts.master')
@section ('title')
  Danh sách Tag
@endsection
@section ('CSS')
  
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Danh sách Tag</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách Tag</li>
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
                      <input type="text" name="name" class="form-control" placeholder="title" value="{{ request()->get('name') }}">
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
                        <th>Thời gian update</th>
                        <th>Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($tags as $tag)
                  <tr>
                        <td>{{ $tag->id }}</td>
                        <td> <a href="">{{ $tag->name }}</a> 
                              <p>slug:{{ $tag->slug }}</p>
                        </td>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->updated_at }}</td>
                        <td class="activate">
                            <a href="{{ route('admin.tags.show', $tag->id) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <form method="POST" action="{{ route('admin.tags.destroy', $tag->id) }}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                              </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $tags->links() }}
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