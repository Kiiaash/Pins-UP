<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    //
    public function show(){
        return view('userfiles.register');
    }
    public function getbacktologin(){
        return view('userfiles.login');
    }
    public function showprofile(){
        $authuser= auth()->id();//this one works but i don't know why the id() is showing an error
        //don't trust intelephense
        //$userid = request('uid');
        $posts = posts::where('user_id',$authuser)->get();
        return view('/userprofile.showprofile',[
            'posts'=>$posts,
        ]);
        
    }
    
    public function insert(){
        $validated = request()->validate([
            'name'=>'required|min:3|max:30',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|confirmed',
        ]);
        
        $user = User::create(
            [
                'name'=>$validated["name"],
                'email'=>$validated["email"],
                'password'=>Hash::make($validated["password"]),
            ]
        );

        $user->save();
        return redirect()->route('go.login')->with('usercreate','Your account has been created successfully');
    }
    public function login(){
        $validate = request()->validate([
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|confirmed',
        ]);
        dd($validate);
       
    }
}
