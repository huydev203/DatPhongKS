@extends('admin.layouts.layout')
@section('content')

    <form action="{{route('add_services')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label class="form-label">Tên Dịch Vụ:</label>
            <input type="text" class="form-control" name="name"  placeholder="Nhập tên ....">
        </div>
        @error('name')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Ảnh:</label>
            <img id="image_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" style="width: 50px" >
            <input type="file" accept="image/" id="image" name="image"   class="@error('image') is-invalid @enderror"  >
        </div>
        @error('image')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror

        <div class="form-group">
            <label class="form-label">Giá Dịch Vụ:</label>
            <input type="number" class="form-control" name="price"  placeholder="Nhập giá ....">
        </div>
        @error('price')
        <span class="text-danger"> {{$message}} <br> </span>
        @enderror


        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
