<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Resolver;

class ResolverController extends Controller
{
    public function getResolver() {
           $resolvers = Resolver::all();
           return view('pages.resolver',['resolvers' => $resolvers ]);
    }
    public function postresolver(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'professional' => 'required',
            'email' => 'required',
            'contact' => 'required',
                     
        ]);

        $resolver = new Resolver;
        $resolver->name = $request->input('name');
        $resolver->professional = $request->input('professional');
        $resolver->email = $request->input('email');
        $resolver->contact = $request->input('contact');
       
        $resolver->save();

        return back();

        return redirect('/resolver')->with('success', 'Resolver Added successfully');
    }
    public function deleteResolver($id)
    {
        $resolver = Resolver::find($id);

        $resolver->delete();

        return redirect('/resolver')->with('danger', 'Resolver Deleted successfully');
    }

    // public function editResolver(Request $request, $id)
    // {
    //     $resolver = Resolver::find($id);

    //     $resolver->update([
    //         'name'=> $request->name,
    //         'professional'=> $request->professional,
    //         'email'=> $request->email,
    //         'contact'=> $request->contact
        
    //     ]);
        

    //     return redirect('/resolver')->with('message', 'Resolver Update successfully');

    // }

}
