<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user_table;
use App\Models\Voter;

class userController extends Controller
{
    public function saveRegistration(Request $request){
        
        $user = Voter::create($request->toArray()); //
        $user->password = Hash::make($request->password);
        $user->save();
        return view('login' ,compact('user'));
    }

    // public function addCandidate(Request $request){
        
    //     $user = Candidate::create($request->toArray()); //
    //     $user->save();
    //     return view('/' ,compact('user'));
    // }

    public function result(){
        return view('result');
    }

    public function userAuth(Request $req){
        $user = Voter::where(['student_id'=>$req->student_id])->first();
        if(!$user || !hash::check($req->txtPassword, $user->Password))
        {
            return "Invalid User";
        }
       
        else
        {
            return redirect('/');
        }
    }

}
