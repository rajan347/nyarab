<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function alluser(Request $request){


        $user=User::all();
        //print_r($user);
        $message=" ";
        return view('alluser',['user'=>$user]);
    }



    public function deleteuser(Request $request){

       $id=$request->input('id');
        $user=User::where('id','=',$id)->delete();

        return redirect('/alluser');
    }
    public function edituser(Request $request){

       $id=$request->input('id');
        
        //coding are left

        return redirect('/alluser');

            }

}
