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


       $message = new Message;
       $message->body = $request->input('body');
       $message->save();

       return back();
    }
}
