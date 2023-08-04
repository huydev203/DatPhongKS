@extends('admin.layouts.layout')
@section('content')
    <form action="{{route('edit_Room',['id'=>$rooms->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" value="{{$rooms->name}}" class="form-control" name="name" placeholder="Nhập tên của bạn ...">
                        @error('name')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="form-label">Ảnh:</label>
                        <img id="image_preview" src="{{asset('storage/'.$rooms->image)}}" alt="Product image" style="max-width:100px;" >
                        <input type="file" accept="image/" id="image" name="image"   class="@error('image') is-invalid @enderror" >
                        @error('image')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="number"  value="{{$rooms->price}}" class="form-control" name="price">
                        @error('price')
                        <span class="text-danger"> {{$message}} <br> </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Mô tả</label> <br>
                        <textarea name="description" >{{$rooms->description}}</textarea>
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
                                <option value="{{ $types->id }}" {{ $types->id == $rooms['room_type'] ? 'selected' : '' }}>
                                    {{ $types->name }}
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
{{--                            <option > value="{{$rooms->status}}</option>--}}
                            <option value="0" {{$rooms->status ==0? 'selected' :'' }} >Trống</option>
                            <option value="1" {{$rooms->status==1? 'selected' :'' }} >Đã đặt</option>

                        </select>
                    </div>
                    @error('status')
                    <span class="text-danger"> {{$message}} <br> </span>
                    @enderror
                </div>
            </div>






            <button type="submit" class="btn btn-success">Cập nhật</button> </div>
    </form>
@endsection
