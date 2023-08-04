<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRoomRequest;
use App\Models\TypeRoomModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TypeRoomController extends Controller
{
    //
    public function index(){
        $title = "Quản lí Loại Phòng";
        $type = TypeRoomModel::all();
        return view('admin.typeRooms.index',compact('type'),compact('title'));
    }
    public function add(TypeRoomRequest $request){

        if($request->isMethod('post')) {

            $type = new TypeRoomModel();
            $type->name = $request->name;
            $type->save();
            //tạo thông báo

            if($type->save()){
                session::flash('success','Thêm loại phòng thành công');
                return redirect()->route('typeRooms');


            }else {
                session::flash('error', 'Lỗi thêm loại phòng');
            }

        }

        return view('admin.typeRooms.add');


    }
    public function edit($id){
        $detail = TypeRoomModel::find($id);
        return view('admin.typeRooms.edit',compact('detail'));

    }
    public function update(TypeRoomRequest $request , string $id){
        $type = TypeRoomModel::findOrFail($id);
        $type->update($request->all());


        if($type->update()){
            session::flash('success',' Cập nhật loại phòng thành công');
            return redirect()->route('typeRooms');


        }else {
            session::flash('error', 'Lỗi cập nhật loại phòng');
        }
        return view('admin.typeRooms.edit');

    }

    public function delete(string $id){
//        $type = TypeRoomModel::findOrFail($id);
//        $type->delete();
//        return redirect()->route('typeRooms')->with('success','Xóa thành công');

        if($id){
            $delete = TypeRoomModel::where('id',$id)->delete();
            if($delete){
                session::flash('success','Xóa thanh cong');
                return redirect()->route('typeRooms');
            }
            else{
                session::flash('error','Xóa lỗi');
            }
        }

        return redirect()->route('typeRooms');


    }







}
