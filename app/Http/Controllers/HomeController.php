<?php

namespace App\Http\Controllers;

use App\Models\RoomModel;
use App\Models\TypeRoomModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $typer= [
            1 => 'Phòng đơn',
            2 => 'Phòng đôi',
            3 => 'Phòng Vip',
        ];
        $type = TypeRoomModel::all();
        $rooms = RoomModel::all();
        return view('welcome',compact('rooms','type','typer'));
    }
    public function view()
    {
        $rooms = DB::select('SELECT * FROM rooms ORDER BY view DESC LIMIT 10');
        return view('welcome',compact('rooms',));
    }

    public function detail($id)
    {
        $rooms = RoomModel::find($id);
        $rooms->increment('view');
        return view('home.roomdetail', compact('rooms'));
    }
    public function d(){

    }
}
