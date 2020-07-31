<?php

namespace App\Http\Controllers;
use App\OpinionType;

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
        return view('pages.complaint_form');
    }
    public function opinion_form() {
        $opinionTypes = OpinionType::all();
        return view('pages.opinion_form',['opinionTypes' => $opinionTypes]);
    }
    public function student_challange() {
        return view('pages.student_challange');
    }
    public function student_opinion() {
        return view('pages.student_opinion');
    }

}
