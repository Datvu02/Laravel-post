<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @yield('CSS')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div>
            @include('admin.includes.header')
        </div>
        <div>
            @include('admin.includes.sidebar')
        </div>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                @yield('content-header')   
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>

        <div>
            @include('admin.includes.footer')
        </div>
        @yield('scrip')
    </div>
    
</body>
</html>