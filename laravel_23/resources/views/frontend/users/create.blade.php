@extends('frontend.layouts.master')
@section ('title')
  Thêm mới user
@endsection
@section ('CSS')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/backend/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/backend/plugins/summernote/summernote-bs4.min.css">
@endsection

@section ('content-header')
  <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Thêm mới users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Thêm mới Users</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
@endsection
@section ('content')
<form action="{{ route('frontend.users.store') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
      <label for="inputEmail">Tên</label>
        <input class="form-control" name="name" id="inputName" type="" />
    </div>
    <div class="form-floating mb-3">
      <label for="inputEmail">Email</label>
      <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
    </div>
    <div class="form-floating mb-3">
      <label for="avatar">avatar</label>
      <input type="file" class="form-control" id="avatar" name="avatar">
    </div>
    <div class="form-floating mb-3">
      <label for="inputPassword" >Mật Khẩu</label>
      <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Nhập mật khẩu" />
    </div>
    <div>
      <a href="{{ route('frontend.users.index') }}" class="btn btn-primary">Hủy</a>
      <button style="margin-left:85%" type="submit" class="btn btn-primary">Tạo mới</button>
    </div>
  </form>
  <div class="card-footer text-center py-3">
    <div class="small"><a href="index.php?mod=auth&act=login">Bạn đã có tài khoản? Đi tới đăng nhập</a></div>
  </div>
@endsection
@section ('scrip')
    <!-- jQuery -->
  <script src="/backend/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/backend/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/backend/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/backend/plugins/moment/moment.min.js"></script>
  <script src="/backend/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/backend/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/backend/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/backend/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/backend/dist/js/pages/dashboard.js"></script>
@endsection