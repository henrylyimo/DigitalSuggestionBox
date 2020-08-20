<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;


use App\Message;
use App\Complaint;
use App\Opinion;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function postOpinionMessage(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'body' => 'required',
       ]);

   if ($validator->fails()) return response()->json(['error'=>$validator->error(),],404);

    $opinion = Opinion::find($request->input('opinionId'));
       $message = new Message();
      //  dd($message);
       $message->body = $request->input('body');
       $opinion->messages()->save($message);

       return back();
    }


    public function postComplaintMessage(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'body' => 'required',
       ]);

   if ($validator->fails()) return response()->json(['error'=>$validator->error(),],404);

    $complaint = Complaint::find($request->input('complaintId'));

     $message = new Message();
     $message->body = $request->input('body');
    $complaint->messages;
   $complaint->messages()->save($message);
 return back();
    }


   // 

  
}
