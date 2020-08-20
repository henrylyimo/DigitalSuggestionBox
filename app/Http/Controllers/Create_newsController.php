<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\create_news;

class Create_newsController extends Controller
{


    public function getCreateNews() {
        $creates = create_news::all();
        return view('pages.updatepage')->with('creates',  $creates );
     }

    public function postCreateNews(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'tittle' => 'required',
            'news' => 'required',
         
        ]);

        $createnews = new create_news;
        $createnews->header = $request->input('tittle');
        $createnews->news = $request->input('news');
       
       
        $createnews->save();

        return back();
    }
}
