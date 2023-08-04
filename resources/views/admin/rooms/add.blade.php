@extends('admin.layouts.layout')
@section('content')
    <form action="{{route('add_Room')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên Phòng ...">
                        @error('name')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label  class="form-control-file">Ảnh</label>
                        <img id="image_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" style="width: 50px" >
                        <input type="file" accept="image/" id="image" name="image"   class="@error('image') is-invalid @enderror"  >
                        @error('image')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">

                    <div class="form-group">
                        <label>Giá</label>
                        <input type="number" class="form-control" name="price">
                        @error('price')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Mô tả</label> <br>
                       <textarea name="description" ></textarea>
                    </div>
                    @error('description')
                    <span class="text-danger"> {{$message}} <br> </span>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Loại Phòng</label>
                        <select class="form-control" name="room_type" id="">


                                @foreach($type as $types)
                                <option value="{{$types->id}}" >{{$types->name}}</option>
                                    </option>
                                @endforeach

                        </select>


                        @error('room_type')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="form-label">Trạng thái:</label> <br>
                        <select name="status" class="form-select" >

                            <option value="0">Trống</option>
                            <option value="1">Đã đặt</option>

                        </select>
                    </div>
                    @error('status')
                    <span class="text-danger"> {{$message}} <br> </span>
                    @enderror
                </div>
            </div>






            <button type="submit" class="btn btn-success">Thêm</button> </div>
    </form>
@endsection
