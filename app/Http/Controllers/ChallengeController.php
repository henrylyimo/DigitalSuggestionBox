<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Challenge;


class ChallengeController extends Controller
{
    public function getChallenges()
    {
        $challenges =  Challenge::all();
        return view('pages.studentchallenge', ['challenges' => $challenges]);
    }
    public function postChallenges(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'challange_type_id' => 'required',
            'status'   => 'required',
            'college'  => 'required',
            'email'  => 'required',
            'contact_no'  => 'required',
            'course'  => 'required',
            'complain'  => 'required',
            'c_solution'  => 'required',
            'evidence'  => 'required',
        
        ]);

        $challange = new Challenge;
        $challange->college = $request->input('college');
        $challange->email = $request->input('email');
        $challange->course = $request->input('course');
        $challange->contact_no = $request->input('contact');
        $challange->complain = $request->input('complain');
        $challange->c_solution = $request->input('solution');
        $challange->evidence = "PICTURE ";
         $challange->save();

         return back();


    }
}
