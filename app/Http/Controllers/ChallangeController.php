<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\ChallangeType;

use Illuminate\Http\Request;
use App\Challange;

class ChallangeController extends Controller
{
    public function getCurruotion($id)
    {
        $challangeType = ChallangeType::find($id);
        $challanges =  $challangeType->challanges;
        return view('pages.student_complaint', ['challanges' => $challanges]);
    }
    public function postChallange(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'contact_no' => 'required',
            'complaint' => 'required',
            'solution' => 'required',
            'evidence' => 'required',
       ]);


       $challange = new Challange;
       $challange->challange_type_id = $request->input('category');
       $challange->contact_no = $request->input('contact');
       $challange->complaint = $request->input('complaint');
       $challange->solution = $request->input('solution');
       $challange->evidence = $request->input('evidence');
       $challange->save();

       return back();
    }
}
