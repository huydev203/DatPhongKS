@extends('admin.layouts.layout')
@section('content')
    <form action="{{route('add_typeRooms')}}" method="post" >
        @csrf
        <div class="form-group">
            <label class="form-label">Tên Loại Phòng:</label>
            <input type="text" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror


        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
