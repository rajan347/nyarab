<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employe;
use App\Http\Controllers\make;

class UserController extends Controller
{
    //

    public function index(Request $request){

        $message=" ";
        return view('user',['message'=>$message]);
    }


    public function storeuser(Request $request){


        $user= new User();

        $user->first_name=$request->input('fname');
        $user->last_name=$request->input('lname');
        $user->dob=$request->input('dob');
        $user->mobile=$request->input('phone');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->country=$request->input('country');
        $user->subscription=$request->input('subcription');
        $user->save();

        $message="Record insert succesfully !";
        return view('user',['message'=>$message]);
    }
}
