<?php

namespace App\Http\Controllers;
use App\OpinionType;
use App\ComplaintType;
use App\Message;
use App\User;
use App\Update;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function date() {
        return view('pages.date');
    }

    public function about() {
        return view('pages.about');
    }

    public function homepage() {
        return view('pages.homepage');
    }

    public function profilepage() {
        return view('pages.profilepage');
    }
    public function updatePage() {
        return view('pages.updatepage');
    }
    public function complaint_form() {
        $complaintTypes = ComplaintType::all();
        return view('pages.complaint_form',['complaintTypes' => $complaintTypes]);    }
    public function opinion_form() {
        $opinionTypes = OpinionType::all();
        return view('pages.opinion_form',['opinionTypes' => $opinionTypes]);
    }
    // public function student_challange() {
    //     return view('pages.student_challange');
    // }
    // public function student_opinion() {
    //     return view('pages.student_opinion');
    // }
    public function feedback() {
        return view('pages.feedback');
    }
    public function complaint_feedback() {
        $messages = Message::where('messagable_type', 'App\Complaint')->orderBy('id','desc')->get();
        return view('pages.complaint_feedback',['messages' => $messages]);
    }
    public function opinion_feedback() {
        $messages = Message::where('messagable_type', 'App\Opinion')->orderBy('id','desc')->get();
        return view('pages.opinion_feedback',['messages' => $messages]);
    }
    public function resolver() {
        return view('pages.resolver');
    }
    public function user() {

        $users = User::all();
        foreach($users as $user){
            $user->roles;
        }
        return view('pages.user')->with('users',$users);
    }

    public function create_update() {
        return view('pages.create_update');
    }

}
