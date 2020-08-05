<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;


use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function postMessage(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'body' => 'required',
       ]);

   if ($validator->fails()) return response()->json(['error'=>$validator->error(),],404);
       $message = new Message;
       $message->body = $request->input('reply');
       $message->save();

       return back();
    }
}
