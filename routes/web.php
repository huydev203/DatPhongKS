<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get','post'],'/login',[\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::match(['get','post'],'/register',[\App\Http\Controllers\UserController::class,'register'])->name('register');
Route::match(['get','post'],'/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');
Route::middleware(['auth'])->group(function (){

   Route::middleware(['check.role'])->group(function (){

    Route::match(['get','post'],'/room_types/list',[\App\Http\Controllers\TypeRoomController::class, 'index'])->name('typeRooms');
Route::match(['get','post'],'/room_types/add',[\App\Http\Controllers\TypeRoomController::class, 'add'])->name('add_typeRooms');
Route::match(['get','post'],'/room_types/update/{id}',[\App\Http\Controllers\TypeRoomController::class, 'edit'])->name('edit_typeRooms');
Route::match(['get','post','put'],'/room_types/edit/{id}',[\App\Http\Controllers\TypeRoomController::class, 'update'])->name('update_typeRooms');
Route::match(['get','post'],'/room_types/delete/{id}',[\App\Http\Controllers\TypeRoomController::class, 'delete'])->name('delete_typeRooms');
//Phòng
       Route::match(['get','post'],'/rooms',[\App\Http\Controllers\RoomController::class,'index'])->name('Room');
       Route::match(['get','post'],'/rooms/add',[\App\Http\Controllers\RoomController::class,'add'])->name('add_Room');
       Route::match(['get','post'],'/rooms/update/{id}',[\App\Http\Controllers\RoomController::class, 'edit'])->name('edit_Room');
       Route::match(['get','post'],'/rooms/delete/{id}',[\App\Http\Controllers\RoomController::class, 'delete'])->name('delete_Room');


//Dịch vụ
       Route::match(['get','post'],'/services',[\App\Http\Controllers\ServicesController::class, 'index'])->name('services');
       Route::match(['get','post'],'/services/add',[\App\Http\Controllers\ServicesController::class, 'add'])->name('add_services');
       Route::match(['get','post'],'/services/edit/{id}',[\App\Http\Controllers\ServicesController::class, 'update'])->name('update_services');
       Route::match(['get','post'],'/services/delete/{id}',[\App\Http\Controllers\ServicesController::class, 'delete'])->name('delete_services');

//Khách hàng
       Route::match(['get','post'],'/user',[\App\Http\Controllers\UserController::class, 'index'])->name('users');
       Route::match(['get','post'],'/user/add',[\App\Http\Controllers\UserController::class, 'add'])->name('add_user');
       Route::match(['get','post'],'/user/update/{id}',[\App\Http\Controllers\UserController::class, 'update'])->name('edit_user');
       Route::match(['get','post'],'/user/delete/{id}',[\App\Http\Controllers\UserController::class, 'delete'])->name('delete_user');

//Bình luận
Route::match(['get','post'],'/comment',[\App\Http\Controllers\CommentController::class, 'index'])->name('cmt');
Route::match(['get','post'],'/comment/add',[\App\Http\Controllers\CommentController::class, 'add'])->name('add_cmt');

   });
//    Route::match(['get','post'],'/',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::match(['get','post'],'/',[\App\Http\Controllers\HomeController::class, 'view'])->name('views');
   Route::match(['get','post'],'/detail/{id}',[\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
});

Route::match(['get','post'],'/',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get','post'],'/detail/{id}',[\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');



