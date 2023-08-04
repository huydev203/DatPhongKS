<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\CustomersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class CustomersController extends Controller
{
    public function index(Request $request){
        $customer = CustomersModel::all();
        return view('customers.index',compact('customer'));

    }
    public function add(CustomerRequest $request){
        if($request->isMethod('post')){
            $customer = new CustomersModel();
            $customer->name = $request->name;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $customer->image = uploadFile('hinh',$request->file('image'));
            }else{
                unset($services['image']);
            }
            $customer->birth = $request->birth;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->username = $request->username;
            $customer->password = $request->password;
            $customer->save();
            if($customer->save()){

                session::flash('success','Tạo tài khoản thành công');
                return redirect()->route('customers');
            }else{
                session::flash('error','Lỗi tạo tài khoản');
            }

        }
        return view('customers.add');

    }

    public function edit(CustomerRequest $request , string $id){
        $customer = CustomersModel::find($id);
        if( $request->isMethod('post')){
            $customer->name = $request->name;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $customer->image = uploadFile('hinh',$request->file('image'));
            }else{
                unset($customer['image']);
            }
            $customer->birth = $request->birth;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->username = $request->username;
            $customer->password = $request->password;
            $customer->save();
            if($customer->save()){

                session::flash('success','Cập nhật tài khoản thành công');
                return redirect()->route('customers');
            }else{
                session::flash('error','Lỗi cập nhật tạo tài khoản');
            }

        }
        return view('customers.edit',compact('customer'));
    }

    public function delete($id){
        $customer = CustomersModel::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers')->with('success','Xóa thành công');

    }
}
