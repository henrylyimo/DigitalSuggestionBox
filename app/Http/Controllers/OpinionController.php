<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\OpinionType;


use Illuminate\Http\Request;
use App\Opinion;

class OpinionController extends Controller
{

    public function getInnovation($id)
    {
        $opinionType = OpinionType::find($id);
        $opinions =  $opinionType->opinions;
        return view('pages.student_opinion', ['opinions' => $opinions]);
    }
    public function postOpinion(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'contact_no' => 'required',
            'body' => 'required',
       ]);


       $opinion = new Opinion;
       $opinion->opinion_type_id = $request->input('category');
       $opinion->contact_no = '';
       $opinion->body = $request->input('opinion');
       $opinion->reply = '';
       $opinion->save();

       return back();
    }
    

    public function updateReply(Request $request) {

        $reply = Opinion::find($request->id);

        if(!$reply) {
            return response()->json(['error' => 'reply not found']);
        }

        $reply->reply = $request->reply;

        $reply->save();

        return response()->json(['esay' => $reply], 201);
       return back();
    }
}
