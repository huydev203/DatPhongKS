<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServicesRequest;
use App\Models\ServicesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        $services = ServicesModel::all();
        return view('admin.services.index', compact('services'));
    }
    public function add(ServicesRequest $request)
    {

        if ($request->isMethod('post')) {

            $services = new ServicesModel();
            $services->name = $request->name;
            $services->image = $request->image;
            $services->price = $request->price;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $services->image = uploadFile('hinh',$request->file('image'));
            }
            $services->save();
            //tạo thông báo

            if ($services->save()) {
                session::flash('success', 'Thêm dịch vụ thành công');

                return redirect()->route('services');


            } else {
                session::flash('error', 'Lỗi thêm dịch vụ');
            }

        }
        return view('admin.services.add');
    }


    public function update(ServicesRequest $request , string $id){
        $services = ServicesModel::find($id);
        if ($request->isMethod('post')) {
            // except giống unset
            $params = $request->except('_token', 'image');
            // dd($request->file('image'));
            // Update ảnh
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // Xóa ảnh cũ nếu update ảnh mới
                $deleteImage = Storage::delete('/public/'.$services->image);
                $params['image'] = uploadFile('hinh', $request->file('image'));
            } else {
                $params['image'] = $services->image;
            }

            $update = ServicesModel::where('id', $id)
                ->update($params);

            if ($update) {
                Session::flash('success', 'Cập nhật thành công!');
                return redirect()->route('services');
            } else {
                Session::flash('error', 'Lỗi cập nhật');
            }
        }
        return view('admin.services.edit',compact('services'));

    }


    public function delete( $id){


        if($id){
            $services = ServicesModel::where('id',$id)->delete();

            if($services){
                session::flash('success','Xóa thanh cong');
                return redirect()->route('services');
            }
            else{
                session::flash('error','Xóa lỗi');
            }
        }

        return redirect()->route('services');


    }


}
