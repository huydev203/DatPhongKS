@extends('admin.layouts.layout')
@section('content')
    <div class="col-md-5 col-lg-3 order-3 order-md-2">

        <form>

            <div class="input-group">
                <a href="{{route('add_user')}}" class="btn btn-warning" role="button">Thêm mới</a>

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
        <span style="text-align: center" class="btn btn-success" >{{ Session::get('success') }}</span>
    @endif
    @if (Session::has('error'))
        <span class="btn btn-danger"> {{ Session::get('error') }}</span>
    @endif
    <table class="table table-bordered">
        <tr class="table-dark">
            <td>Mã KH</td>
            <td>Tên</td>
            <td>Ảnh</td>
            <td>Ngày sinh</td>
            <td>Giới tính</td>
            <td>Địa chỉ</td>
            <td>Email</td>
            <td>Số ĐT</td>
            <td>Tên đăng nhập</td>
            <td>Vai trò</td>
            <td>Số lần đặt phòng</td>

            <td>Chức Năng</td>
        </tr>
        <tbody>
        @foreach ($user as $item )
            <tr style="text-align: center" >
                <td style="text-align: center ">{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td><img src="{{ $item->image ? '' .Storage::url($item->image) : 'https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg' }}" style="width: 50px"></td>

                <td>{{ $item->birth }}</td>
                <td>{{ $item->gender == 0 ? "Nam" : "Nữ" }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->email }}</td>
                <td>+84{{ $item->phone }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->role_id ==0 ? "Khách hàng" : "Quản trị" }}</td>
                <td>{{ $item->number_of_booking }}</td>


                <td  >
                    <a  href="{{route('edit_user',['id'=>$item->id])}}" type="button" class="btn btn-success" >Cập nhật</a>
                    <a href="{{route('delete_user',['id'=>$item->id])}}" type="button" class="btn btn-danger" >Xóa</a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
