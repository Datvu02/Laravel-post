
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.home') }}" class="brand-link">
    <img src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">LARAVEL 22</span>
  </a>
  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          @if(auth()->check())
            {{ auth()->user()->name }}
          @endif
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{ route('admin.home') }}" class="nav-link @if (request()->is('admin')) active @endif">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
              Dashboard
              </p>
          </a>
          </li>
        <li class="nav-header">Quản lý chung</li>
        <li class="nav-item @if (request()->routeIs('admin.posts.*')) menu-open @endif">
          <a href="" class="nav-link @if (request()->routeIs('admin.posts.*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Quản lý Blog
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.posts.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.posts.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới Blog</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item @if (request()->routeIs('admin.categories.*')) menu-open @endif">
          <a href="#2" class="nav-link @if (request()->routeIs('admin.categories.*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Quản lý Categories
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ route('admin.categories.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Categories</p>
                  </a>
              </li>
            <li class="nav-item">
              <a href="{{ route('admin.categories.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới categories</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.categories.deletesList') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh mục đã xóa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item @if (request()->routeIs('admin.tags.*')) menu-open @endif">
          <a href="#2" class="nav-link @if (request()->routeIs('admin.tags.*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Quản lý Tags
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ route('admin.tags.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tags</p>
                  </a>
              </li>
            <li class="nav-item">
              <a href="{{ route('admin.tags.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới tags</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="{{ route('admin.tags.deletesList') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tag đã xóa</p>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="nav-item @if (request()->routeIs('admin.tags.*')) menu-open @endif">
          <a href="#2" class="nav-link @if (request()->routeIs('admin.menus.*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Quản lý Menus
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ route('admin.menus.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách menus</p>
                  </a>
              </li>
            <li class="nav-item">
              <a href="{{ route('admin.menus.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới menus</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="{{ route('admin.menus.deletesList') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>menus đã xóa</p>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="nav-header">Hệ thống</li>
        <li class="nav-item @if (request()->routeIs('auth.*')) menu-open @endif">
          <a href="#2" class="nav-link @if (request()->routeIs('admin.users.*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Quản lý Users
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ route('admin.users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách users</p>
                  </a>
              </li>
            <li class="nav-item">
              <a href="{{ route('admin.users.deletesList') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Users đã xóa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item @if (request()->routeIs('auth.*')) menu-open @endif">
          <a href="#2" class="nav-link @if (request()->routeIs('auth.*')) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Auth
              <i class="fas fa-angle-left right"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('auth.login') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Login</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('auth.register') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register</p>
              </a>
            </li>
            <!-- <li class="nav-item">
                  <a href="{{ route('auth.login') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                  </a>
              </li> -->
          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>