<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSLZ6I" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOUdd7pGJgpkfskx6X8wDQytUXdhbUENIkEw5qRvJ/pk7U" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOUdd7pGJgpkfskx6X8wDQytUXdhbUENIkEw5qRvJ/pk7U" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tên khách sạn</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Trang chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Phòng</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tiện ích
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Hồ bơi</a>
                        <a class="dropdown-item" href="#">Spa và Masage</a>
                        <a class="dropdown-item" href="#">Bar và Nhà hàng</a>
                        <a class="dropdown-item" href="#">Trung tâm thể thao</a>
                        <a class="dropdown-item" href="#">Dịch vụ phòng</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">

                    {{-- @if (Auth::check())--}}
                    {{-- <!-- Hiển thị nút đăng xuất -->--}}
                    {{-- <p>Xin chào :     {{ Auth::user()->name }}</p>--}}
                    {{-- <a href="{{ route('logout') }}">Đăng xuất</a>--}}
                    {{-- @else--}}
                    {{-- <!-- Hiển thị nút đăng nhập -->--}}
                    {{-- <a href="{{ route('login') }}">Đăng nhập</a>--}}
                    {{-- @endif--}}
                    <div style="  display: flex;
                                    flex-direction: row;
                                     justify-content: flex-end;" class="auth-links">
                        @if (Auth::check())
                        <!-- Hiển thị nút đăng xuất -->
                            <img src="{{ Auth::user()->image ? '' .Storage::url(Auth::user()->image) : 'https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg' }}" style="width: 50px">
                        <h1 style="font-size: 20px;padding-top: 10px;color: red"> {{ Auth::user()->name }}</h1>
                        @if(Auth::user()->role_id == '1')
                        <a style="  text-decoration: none;
                                    margin-left: 10px;
                                    padding: 5px 10px;
                                    border-radius: 5px;
                                    color: white;
                                    background-color: #333;" href="{{ route('typeRooms') }}">Đăng nhập vào admin</a>
                        @endif
                        <a style="  text-decoration: none;
                        margin-left: 10px;
                        padding: 5px 10px;
                        border-radius: 5px;
                        color: white;
                        background-color: #333;" href="{{ route('logout') }}">Đăng xuất</a>
                        @else
                        <!-- Hiển thị nút đăng nhập -->
                        <a style="  text-decoration: none;
                        margin-left: 10px;
                        padding: 5px 10px;
                        border-radius: 5px;
                        color: white;
                        background-color: #333;" href="{{ route('login') }}">Đăng nhập</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
