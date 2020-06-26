<?php

namespace App\Http\Controllers;

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
}
