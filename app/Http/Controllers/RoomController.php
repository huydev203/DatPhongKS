<?php

namespace App\Http\Controllers;
use App\Http\Requests\RoomRequest;
use App\Models\RoomModel;
use App\Models\TypeRoomModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index(){
        $type= [
            1 => 'Phòng đơn',
            2 => 'Phòng đôi',
            3 => 'Phòng Vip',
        ];
        $rooms = RoomModel::all();
        return view('admin.rooms.index',compact('rooms','type'));
    }

    public function add(RoomRequest $request){
        $type = TypeRoomModel::all();
        $rooms = RoomModel::all();
        if($request->isMethod('post')) {

            $rooms = new RoomModel();
            $rooms->name = $request->name;
            $rooms->image = $request->image;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $rooms->image = uploadFile('hinh',$request->file('image'));
            }
            $rooms->price = $request->price;
            $rooms->description	 = $request->description;
            $rooms->room_type = $request->room_type;
            $rooms->status = $request->status;


            $rooms->save();
            //tạo thông báo

            if($rooms->save()){
                session::flash('success','Thêm  phòng thành công');
                return redirect()->route('Room');


            }else {
                session::flash('error', 'Lỗi thêm  phòng');
            }

        }

        return view('admin.rooms.add',compact('type','rooms'));



    }
    public function edit( Request $request , $id){
        $type = TypeRoomModel::all();
        $rooms = RoomModel::find($id);
        if ($request->isMethod('post')) {
            // except giống unset
            $params = $request->except('_token', 'image');
            // dd($request->file('image'));
            // Update ảnh
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // Xóa ảnh cũ nếu update ảnh mới
                $deleteImage = Storage::delete('/public/'.$rooms->image);
                $params['image'] = uploadFile('hinh', $request->file('image'));
            } else {
                $params['image'] = $rooms->image;
            }

            $update = RoomModel::where('id', $id)
                ->update($params);

            if ($update) {
                Session::flash('success', 'Cập nhật thành công');
                return redirect()->route('Room');
            } else {
                Session::flash('error', 'Lỗi cập nhật');
            }
        }
        return view('admin.rooms.edit',compact('rooms','type'));

}
    public function delete($id){


        if($id){
            $rooms = RoomModel::where('id',$id)->delete();

            if($rooms){
                session::flash('success','Xóa thanh cong');
                return redirect()->route('Room');
            }
            else{
                session::flash('error','Xóa lỗi');
            }
        }

        return redirect()->route('Room');


    }

}
