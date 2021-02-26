<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\users;

class userController extends Controller
{
    public function postLogin(Request $request){

        if($request->ajax()){
            $user = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            $admin = [
                'email' => $request->email,
                'password' => $request->password,
                'role' => 1
            ];

            if(Auth::attempt($user)){
                if(Auth::attempt($admin)){
                    return 'success';
                }
                else{
                    return 'success';
                }
            }
            else{
                return 'Please!!! check again<br> email and password';
            }
        }
    }

    public function postRegister(Request $request){

        if($request->ajax()){
            $users = new users;
            $users->email = $request->email;
            $users->password = bcrypt($request->password);
            $users->name = $request->name;
            $users->phone = $request->phone;
            $users->address = $request->address;
            $users->save();
        }
    }

    public function postLogout(Request $request){
        if($request->ajax()){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
    }
}
