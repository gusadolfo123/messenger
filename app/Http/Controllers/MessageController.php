<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use DB;


/// GMORENO
class MessageController extends Controller
{
    //
	public function index()
    {
        $user_id = auth()->id();

        return Message::select('id',
        DB::raw("IF(from_id = $user_id, true, false) AS written_by_me")
        , 'to_id'
        , 'created_at'
        , 'content')->get();

    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->from_id = auth()->id();
        $message->to_id = $request->to_id;
        $message->content = $request->content;
        $saved = $message->save();

        $data = [];
        $data['success'] = $saved;

        return $data; // laravel lo convierte en json

    }
}
