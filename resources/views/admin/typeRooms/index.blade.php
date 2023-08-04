@extends('admin.layouts.layout')
@section('content')
    <div class="col-md-5 col-lg-3 order-3 order-md-2">
{{--        <p style="text-align: center;" >{{$title}}</p>--}}
            <form>

                <div class="input-group">
                    <a href="{{route('add_typeRooms')}}" class="btn btn-warning" role="button">Thêm mới</a>

                    <input type="search" class="form-control"
                           placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">Go
                        </button>
                    </div>
                </div>
            </form>

    </div>
    @if (Session::has('success'))
        <span class="btn btn-light" >{{ Session::get('success') }}</span>
    @endif
    @if (Session::has('error'))
       <span class="btn btn-danger"> {{ Session::get('error') }}</span>
    @endif
   <table class="table table-hover">
       <tr class="table-dark">
           <td>Mã Loại Phòng</td>
           <td>Loại Phòng</td>
           <td>Chức Năng</td>
       </tr>
       <tbody>
       @foreach ($type as $item )
           <tr>
               <td>{{ $item->id }}</td>
               <td>{{ $item->name }}</td>
               <td>
                   <a href="{{route('edit_typeRooms',['id'=>$item->id])}}" type="button" class="btn btn-success" >Cập nhật</a>
                   <a href="{{route('delete_typeRooms',['id'=>$item->id])}}" type="button" class="btn btn-danger" >Xóa</a>
               </td>

           </tr>
       @endforeach

       </tbody>
   </table>

@endsection
