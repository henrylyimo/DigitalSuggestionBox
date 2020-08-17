<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumonate\support\Facades\Validator;
use App\Resolver;

class ResolverController extends Controller
{
    public function resolver(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'professional' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'role' => 'required',          
        ]);

        $resolver = new Resolver;
        $resolver->name = $request->input('name');
        $resolver->professional = $request->input('professional');
        $resolver->email = $request->input('email');
        $resolver->contact = $request->input('contact');
        $resolver->role = $request->input('role');
        $resolver->save();

        return back();
    }
}
