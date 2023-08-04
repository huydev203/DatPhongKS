@extends('admin.layouts.layout')
@section('content')
    <form action="{{route('edit_user',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" value="{{$user->name}}" class="form-control" name="name" placeholder="Nhập tên của bạn ...">
                        @error('name')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="form-label">Ảnh:</label>
                        <img id="image_preview" src="{{asset('storage/'.$user->image)}}" alt="Product image" style="max-width:100px;" >
                        <input type="file" accept="image/" id="image" name="image"   class="@error('image') is-invalid @enderror" >
                        @error('image')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date"  value="{{$user->birth}}" class="form-control" name="birth">
                        @error('birth')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Giới tính</label> <br>
                        <input type="radio" name="gender" value="0" {{ $user->gender == 0 ? 'checked' : '' }}>
                        <label for="">Nam</label>
                        <input type="radio" name="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }}>
                        <label for="">Nữ</label><br>
                    </div>
                    @error('gender')
                    <span class="text-danger"> {{$message}} <br> </span>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text"  value="{{$user->address}}" class="form-control" name="address" placeholder="Nhập địa chỉ của bạn ...">
                        @error('address')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label">Email:</label>
                        <input type="email"  value="{{$user->email}}" class="form-control" name="email" placeholder="Nhập email ....">
                    </div>
                    @error('email')
                    <span class="text-danger"> {{$message}} <br> </span>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-3">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Số ĐT</label>
                        <input type="number"  value="{{$user->phone}}" class="form-control" name="phone" placeholder="Nhập tên của bạn ...">
                        @error('phone')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text"  value="{{$user->username}}" class="form-control" name="username">
                        @error('username')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password"  value="{{$user->password}}" class="form-control" name="password">
                        @error('password')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
            </div>





            <button type="submit" class="btn btn-success">Cập nhật</button> </div>
    </form>
@endsection
