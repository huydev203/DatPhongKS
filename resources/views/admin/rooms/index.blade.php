@extends('admin.layouts.layout')
@section('content')

    <div class="col-md-5 col-lg-3 order-3 order-md-2">
        <div class="xp-searchbar">
            <form>
                <div class="input-group">
                    <a href="{{route('add_Room')}}" class="btn btn-warning" role="button">Thêm mới</a>
                    <input type="search" class="form-control"
                           placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">Go
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (Session::has('success'))
        <span class="btn btn-light" >{{ Session::get('success') }}</span>
    @endif
    @if (Session::has('error'))
       <span class="btn btn-danger"> {{ Session::get('error') }}</span>
    @endif
   <table border="1" class="table table-hover">
       <tr class="table-dark">
           <td>Mã Phòng</td>
           <td>Tên Phòng</td>
           <td>Ảnh</td>
           <td>Giá</td>
           <td>Mô tả</td>
           <td>Loại phòng</td>
           <td>Trạng thái</td>
           <td>Lượt xem</td>
           <td>Chức Năng</td>
       </tr>
       <tbody>

       @foreach ($rooms as $item )
           <tr>
               <td>{{ $item->id }}</td>
               <td>{{ $item->name }}</td>

               <td><img src="{{ $item->image ? '' .Storage::url($item->image) : 'https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg' }}" style="width: 50px"></td>


               <td>{{ $item->price }}</td>
               <td>{{ $item->description }}</td>
               <td>{{ $type[$item->room_type]  }}</td>
               <td>{{ $item->status ==0 ? "Trống" : "Đã Đặt" }}</td>
               <td>{{ $item->view }}</td>

               <td>
                   <a href="{{route('edit_Room',['id'=>$item->id])}}" type="button" class="btn btn-success" >Cập nhật</a>
                   <a href="{{route('delete_Room',['id'=>$item->id])}}" type="button" class="btn btn-danger" >Xóa</a>
               </td>

           </tr>
       @endforeach

       </tbody>
   </table>

@endsection
