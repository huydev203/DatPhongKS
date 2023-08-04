@extends('home.layouts.layout')
@section('content')
    @if (Session::has('success'))
        <span style=" display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
          " class="btn btn-success" >{{ Session::get('success') }}</span>
    @endif
    @if (Session::has('error'))
        <span style=" display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
          " class="btn btn-danger"> {{ Session::get('error') }}</span>
    @endif
    <form style=" display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;" action="{{route('login')}}" method="POST">
        @csrf
        <div class="mb-4" style="width: 400px;">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        </div>
        @error('email')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror
        <div class="mb-4" style="width: 400px;">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        @error('password')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <p>Đăng ký tài khoản mới?<a href="{{ route('register') }}">Đăng ký</a></p>

    </form>

@endsection
