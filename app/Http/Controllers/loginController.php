<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function register(){
        return view('auth.register');
    }
    function postregister(Request $request){
        User::create ($request->only(['username','email','password']));
        return redirect('login');
}
    function login(){
        return view('auth.login');
    }
    function postlogin(Request $request){

        $userData = $request->only(['email','password']);

        if( Auth::attempt( $userData ) ) {
            dd("logged in");
        }
        dd("failed");
    }
}
