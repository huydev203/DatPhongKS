<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function login(UserRequest $request)
    {
       if($request->isMethod('POST')){
           $credentials = $request->only('email', 'password');

           if (Auth::attempt($credentials)) {
               $user = Auth::user();
               if ($user->role_id == 0) {
                   return redirect()->route('home',compact('user'));
               }
               elseif ($user->role_id == 1){

                   return redirect()->route('typeRooms',compact('user'));
               }

           }else{
               session::flash('error', 'Sai thông tin tài khoản');
           }
       }

        return view('auth.login');
    }
    public function register(UserRequest $request)
    {
        if($request->isMethod('POST')){
            //Lấy toàn bộ dữ liệu trong form cần gửi lên
            $params = $request->except("_token");
            //Mã hóa  mật khẩu ng dùng cung cấp
            $params["password"] =Hash::make($request->password);
            //DĐặt giá trị 	email_verified_at là tgian hiện tại
            $params["email_verified_at"] = Carbon::now('Asia/Ho_Chi_Minh');
            $user = User::create($params);


            if ($user->id){
                session::flash('success', 'Thêm tài khoản thành công');
                return redirect()->route('login');
            }else{
                session::flash('error', 'Lỗi thêm tài khoản  ');
                return redirect()->route('register');
            }
        }
        return view('auth.register');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


    public function index(Request $request){

        $user = User::all();
        return view('admin.user.index',compact('user'));

    }
    public function add(UserRequest $request){
        if($request->isMethod('post')){
            $user = new User();
            $user->name = $request->name;
            if($request->hasfile('image') && $request->file('image')->isValid()){

                $user->image = uploadFile('hinh',$request->file('image'));
            }else{
                unset($user['image']);
            }
            $user->birth = $request->birth;
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->username = $request->username;
            $user->password = $request->password;
            $user->save();
            if($user->save()){

                session::flash('success','Tạo tài khoản thành công');
                return redirect()->route('users');
            }else{
                session::flash('error','Lỗi tạo tài khoản');
            }

        }
        return view('admin.user.add');

    }
    
    public function update(UserRequest $request ,string $id){

            $user = User::find($id);
            if ($request->isMethod('post')) {
                // except giống unset
                $params = $request->except('_token', 'image');
                // dd($request->file('image'));
                // Update ảnh
                if ($request->hasFile('image') && $request->file('image')->isValid()) {
                    // Xóa ảnh cũ nếu update ảnh mới
                    $deleteImage = Storage::delete('/public/'.$user->image);
                    $params['image'] = uploadFile('hinh', $request->file('image'));
                } else {
                    $params['image'] = $user->image;
                }

                $update = User::where('id', $id)
                    ->update($params);

                if ($update) {
                    Session::flash('success', 'Cập nhật thành công!');
                    return redirect()->route('users');
                } else {
                    Session::flash('error', 'Lỗi cập nhật');
                }
            }
            return view('admin.user.edit',compact('user'));

        }

    public function delete(string $id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users')->with('success','Xóa thành công');

    }

}
