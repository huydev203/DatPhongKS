<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function detail($id){
        $comment = CommentModel::find($id);
        return view('home.roomdetail',compact('comment'));

    }
    public function add(Request $request)
    {
        $data = $request->validate([
            'comment' => 'required|min:10',
            'room_id' => 'required',
            'user_id' => 'required'
        ]);

        CommentModel::create($data);

        return redirect()->back();
    }
}
