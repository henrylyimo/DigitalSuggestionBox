<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Role;
use App\User;

class UserController extends Controller
{
    public function postUser(Request $request)
    {

       $validator = Validator::make($request->all(),[
            'name' => 'required',
            'reg_no' => 'required|unique:users',
            'course' => 'required',
            'role' => 'required',
         
            ]);
            if ($validator->fails()) return back()->with('errors',$validator->errors());
        
    
       $user = User::create([

        'name' => $request->name,
        'reg_no' => $request->reg_no,
        'course' => $request->course,
        'password' => Hash::make('coct2020'),
       ]);
       

      if($request->role == 2){
        $user->assignRole('Secretary');
      }

    
      if($request->role == 3){
        $user->assignRole('Students');
      }



       return back()->with('user',$user);

    }

       //deleteuser

       public function deleteUser($id)
       {
           $user = User::find($id);
   
           $user->delete();
   
           return redirect('/user')->with('message', 'Resolver Deleted successfully');
       }


       
    }

