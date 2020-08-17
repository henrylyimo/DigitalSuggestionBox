<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Complaint;
use App\ComplaintType;

class ComplaintController extends Controller
{
    public function getComplaints($id)
    {
        $complaintType = ComplaintType::find($id);
       $complaints =  $complaintType->complaints;
    
        return view('pages.student_challange', ['complaints' => $complaints]);
    }
    public function postComplaint(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'contact_no' => 'required',
            'complaint' => 'required',
            'solution' => 'required',
       ]);


       $complaint = new Complaint;
       $complaint->complaint_type_id = $request->input('category');
       $complaint->contact_no = $request->input('contact');
       $complaint->complaint = $request->input('complaint');
       $complaint->solution = $request->input('solution');
       $complaint->save();

       return back();
    }
}
