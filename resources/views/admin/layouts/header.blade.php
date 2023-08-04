<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/loading.png')}}" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">


            @if (Auth::check())
        <li class="nav-item">
            <a style="  text-decoration: none;
                        margin-left: 10px;
                        padding: 5px 10px;
                        border-radius: 5px;
                        color: white;
                         background-color: #333;" href="{{ route('logout') }}" class="nav-link">Đăng xuất</a>
        </li>
        @endif
        </li>




    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Trang quản trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->image ? '' .Storage::url(Auth::user()->image) : 'https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg' }}" style="width: 50px">
            </div>
            <div class="info">
                <a style="  text-decoration: none;
  margin-left: 10px;
  padding: 5px 10px;
  border-radius: 5px;
  color: white;
  background-color: #333;" href="#" class="d-block">Xin chào : {{ Auth::user()->name }}</a>
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
                    <a class="nav-link" href="{{route('typeRooms')}}">
                        <i class="fa-regular fa-bed"></i>
                        <p> Quản Lý Loại Phòng</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Room')}}">
                        <i class="fa-thin fa-bed"></i>
                        <p> Quản Lý Phòng</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">
                        <i class="fa-thin fa-bed"></i>
                        <p> Quản Lý Dịch Vụ</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users')}}">
                        <i class="fa-thin fa-bed"></i>
                        <p> Quản Lý Người dùng</p>
                    </a>
                </li>
                <hr>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
